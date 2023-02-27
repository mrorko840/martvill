"use strict";

if ($('.main-body .page-wrapper').find('#option-add-container').length || $('.main-body .page-wrapper').find('#option-edit-container').length) {
    var label = '';
    var custom = true;
    var hideOrNot = false;
    var rowid = 2;
    $(".select2").select2();
    $('#option_div').hide();

    /*edit purpose*/
    if ($('.main-body .page-wrapper').find('#option-edit-container').length) {
        rowid = $('#row_id').val();
        label = $('#type :selected').val();
        typeCheck();
    }

    $('#type').change(function ()
    {
        label = $('#type :selected').val();
        typeCheck()
    });

    $(document).on('change', '.errorChk', function(event) {
        if ($(this).hasClass("err1") && $(this).val != '') {
            $(this).removeClass("err1");
            let id = $(this).attr('id');
            $('#'+id).next("span").text('');
        }
    });

    $(document).on('click', '#btnSubmit', function(event) {
        if($('#category_id').val() == '' || $('#name').val() == '' || $('#type').val() == '') {
            $("#group").addClass('show');
            $("#group").addClass('active');
            $("#v-pills-home-tab").addClass('active');
            $('#v-pills-home-tab').removeAttr('aria-selected');
            $('#v-pills-home-tab').attr('aria-selected', 'true');

            $('#v-pills-profile-tab').removeAttr('aria-selected');
            $('#v-pills-profile-tab').attr('aria-selected', 'false');

            $("#v-pills-profile-tab").removeClass('active');
            $("#options").removeClass('show');
            $("#options").removeClass('active');
        }
    });

    /*check type for necessary action*/
    function typeCheck()
    {
        if (label.length > 0) {
            $('#select_first').hide();
            $('#option_div').show();
            if (label == 'field' || label == 'textarea' || label == 'date' || label == 'date_time' || label == 'time') {
                hideTable();
                custom = false;
                hideOrNot = true;
            } else {
                custom = true;
                hideOrNot = false;
                showTable();
            }
        } else {
            custom = false;
            $('#option_div').hide();
            $('#select_first').show();
        }
    }
    /* hide table column */
    function hideTable()
    {
        let allRowId = $("input[name='row_identify[]']").map(function(){return $(this).val();}).get();
        for (let i = 1; i < allRowId.length; i++) {
            $('#rowid-' + allRowId[i]).remove();
        }
        $('.bar').hide();
        $('.label').hide();
        $('.delete').hide();
        $('#add-new-value').hide();
    }
    function showTable()
    {
        $('.bar').show();
        $('.label').show();
        $('.delete').show();
        $('#add-new-value').show();
    }

    function tabValidation()
    {
        if ($('#name').val().length > 0 && $('#type').val().length > 0) {
            let allRowId = $("input[name='row_identify[]']").map(function(){return $(this).val();}).get();
            let rowIdlength = parseInt(allRowId.length);
            let enable = 0;
            for (let i = 0; i < rowIdlength; i++) {
                $.each($("#priceChk-" + allRowId[i]), function() {
                    if (hideOrNot == false) {
                        if($("#labelChk-" + allRowId[i]).val().length < 1) {
                            enable = 1;
                        }
                    } else {
                        enable = 0;
                    }
                    if ($(this).val().length < 1 || enable == 1){
                        $("#group").removeClass('show');
                        $("#group").removeClass('active');
                        $("#v-pills-home-tab").removeClass('active');
                        $('#v-pills-home-tab').removeAttr('aria-selected');
                        $('#v-pills-home-tab').attr('aria-selected', 'false');

                        $('#v-pills-profile-tab').removeAttr('aria-selected');
                        $('#v-pills-profile-tab').attr('aria-selected', 'true');

                        $("#v-pills-profile-tab").addClass('active');
                        $("#options").addClass('show');
                        $("#options").addClass('active');
                    }
                });
            }
        }
    }

    function customValidation(){
        let allRowId = $("input[name='row_identify[]']").map(function(){return $(this).val();}).get();
        let checkPrice = 1;
        let checkLabel = 1;
        let rowIdlength = parseInt(allRowId.length);
        let priceFlag = 0;
        let labelFlag = 0;
        for (let i = 0; i < rowIdlength; i++) {
            $.each($("#priceChk-" + allRowId[i]), function() {
                if ($(this).val()) {
                    checkPrice = 1;
                } else {
                    checkPrice = 0;
                }
                if (hideOrNot == false) {
                    if ($("#labelChk-" + allRowId[i]).val()) {
                        checkLabel = 1;
                    }
                    else {
                        checkLabel = 0;
                    }
                }
            });
            if (checkPrice == 0) {
                $("#priceChk-" + allRowId[i]).addClass('err1');
                $('#value-price-' + allRowId[i]).text(jsLang('This field is required.'));
                priceFlag = 1;
                break;
            } else {
                $("#priceChk-" + allRowId[i]).removeClass('err1');
                $('#value-price-' + allRowId[i]).text('');
                priceFlag = 0;
            }
            if (checkLabel == 0) {
                $("#labelChk-" + allRowId[i]).addClass('err1');
                $('#value-label-' + allRowId[i]).text(jsLang('This field is required.'));
                labelFlag = 1;
                break;
            } else {
                $("#labelChk-" + allRowId[i]).removeClass('err1');
                $('#value-label-' + allRowId[i]).text('');
                labelFlag = 0;
            }
        }
        if (priceFlag == 0 && checkPrice == 1 && checkLabel == 1 && labelFlag == 0){
            return true;
        }
        return false;
    }

    $("#optionForm").on('submit', function(event) {
        tabValidation();
        if(customValidation() == false) {
            event.preventDefault();
        } else {
            $("#spinnerText").text(jsLang('Please wait...'));
            $(".spinner").css({'display': 'inline-block', 'line-height': '0'});
            $('#btnSubmit').attr("disabled", true);
        }
    });

    $(document).on('click', '#add-new-value', function(event) {
        event.preventDefault();
        if (custom == true) {
            let optionValue = `<tr draggable="false" class="" id="rowid-${rowid}">
                                <td class="text-center bar">
                                    <i class="fa fa-bars"></i>
                                </td>
                                <td class="label">
                                <input type="text" name="label[]" class="form-control errorChk" id="labelChk-${rowid}">
                                <span id="value-label-${rowid}" class="validationMsg"></span>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <input type="text" name="price[]" class="form-control positive-float-number errorChk" id="priceChk-${rowid}" maxlength="8">
                                        <span id="value-price-${rowid}" class="validationMsg"></span>
                                        <input type="hidden" name="row_identify[]" value="${rowid}">
                                    </div>
                                </td>
                                <td>
                                    <select class="form-control" name="price_type[]" id="price_type">
                                        <option value="Fixed">${jsLang('Fixed')}</option>
                                        <option value="Percent">${jsLang('Percent')}</option>
                                    </select>
                                </td>
                                <td class="text-center delete">
                                    <button type="button" id="delete-value" class="btn btn-xs btn-danger delete-row" data-row-id="${rowid}" data-toggle="tooltip" data-title="Delete Value" data-original-title="" title="">
                                        <i class="feather icon-trash-2"></i>
                                    </button>
                                </td>
                            </tr>`;
            rowid++;
            $('#values').append(optionValue);
        }
    });

    /*Drag and drop table column*/
    $("#values").sortable({
        distance: 2,
        delay: 300,
        opacity: 0.8,
        cursor: 'move',
    });

    $(document).on('click', '.delete-row', function(e) {
        e.preventDefault();
        var idtodelete = $(this).attr('data-row-id');
        $('#rowid-' + idtodelete).remove();
    });
}
if ($('.main-body .page-wrapper').find('#option-list-container').length) {
    // For export csv
    $(document).on("click", "#csv, #pdf", function(event) {
        event.preventDefault();
        window.location = SITE_URL + "/options/" + this.id;
    });
    $('.select2').select2();
}
