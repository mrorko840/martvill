"use strict";
$(document).on( 'init.dt', function () {
    $(".dataTables_length").remove();
    $('#dataTableBuilder').removeAttr('style');
});
// currency settings js
if ($('.main-body .page-wrapper').find('#currency-settings-container').length) {
    dataTable('#dataTableBuilder', 3);
    $('.js-example-basic-single-1').select2({
        dropdownParent: $('#add-currency')
    });

    $('.js-example-basic-single-2').select2({
        dropdownParent: $('#edit-default')
    });

    $('#add-currency').on('hidden.bs.modal', function() {
        $('input[name=name]').removeClass('error');
        $('input[name=symbol]').removeClass('error');
        $('input[name=exchange_rate]').removeClass('error');
    });

    $("#edit-unit").on("show.bs.modal", function () {
        $("#curr_name, #curr_symbol, #exchange_rate").removeClass("error");
        $("#curr_name-error, #curr_symbol-error, #exchange_rate-error").hide();
    });

    $(document).on('click', '.edit_currency', function () {
        var id = $(this).attr("id");
        $.ajax({
            url: SITE_URL + "/currencies/edit",
            data: {
                id: id,
                "_token": token
            },
            type: 'POST',
            dataType: 'JSON',
            success: function (data) {
                $('#curr_name').val(data.name);
                $('#curr_symbol').val(data.symbol);
                $('#curr_id').val(data.id);
                var exchangeRateFormate = getDecimalNumberFormat(data.exchange_rate);
                $('#exchange_rate').val(exchangeRateFormate);
                $('#exchange_from').val(data.exchange_from).trigger('change');

                $('#edit-unit').modal();
            }
        });
    });

    $('#add-currency').on('hidden.bs.modal', function (e) {
        $(this).find('input[name = name]').val('');
        $(this).find('input[name = symbol]').val('');
        $(this).find('input[name = exchange_rate]').val('');
    });

    $('.btn-group').hide();
    confirmDelete('#confirmDelete', '#confirmDeleteSubmitBtn', '#confirmDeleteLabel', '#delete-currency-');
    $("#dataTableBuilder").addClass('taxes');
    $('#add_exchange_from').on('change', function() {
        if ($(this).find('option:selected').text() == "api") {
            $('#note').show();
        } else {
            $('#note').hide();
        }
    })

    $('#edit_exchange_from').on('change', function() {
        if ($(this).find('option:selected').text() == "api") {
            $('#note_edit').show();
        } else {
            $('#note_edit').hide();
        }
    })

    $("#currency-converter").on("show.bs.modal", function () {
        $('#add-unit').modal('hide');
        $('#edit-unit').modal('hide');
    });
}

// payment term js
if ($('.main-body .page-wrapper').find('#payment-term-container').length) {
    $('.select2').select2();
    // Edit functionality
    $(document).on('click', '.edit-data', function() {
        var url = $(this).data('url');
        $.ajax({
            type: 'GET',
            url: url,
            success: function(data) {
                for (const key in data) {
                    $('.edit-'+key).val(data[key]);
                    var x = document.querySelector('.edit-'+key).closest('form')
                    var y = x.querySelectorAll('select option');
                    y.forEach(element => {
                        if(element.value == data[key]) {
                            element.setAttribute("selected", "selected")
                        } else {
                            element.setAttribute("selected", false)
                        }
                    });
                }
                $('.select2').select2();
            }
        })
    })
    // Data table
    function dataTable(tableSeclector, target)
    {
        $(tableSeclector).DataTable({
            "columnDefs": [{
                "targets": target,
                "orderable": false
            }],
            "language": {
                "url": app_locale_url
            },
            "pageLength": row_per_page
        });
    }

    dataTable('#dataTableBuilder', 3);
}
