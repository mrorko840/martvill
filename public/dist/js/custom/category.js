"use strict";
function resfreshJSTree() {
    setTimeout(function(){
        $('#evts').jstree(true).refresh();
    }, 500);
}
if ($('.main-body .page-wrapper').find('#category-info-container').length) {
    var selectedNodeId = '';
    var selectedNodeName = '';
    var editId = '';
    $(".sub-category").prop("disabled",true);
    $('#parentBlock').hide();
    $('.delete').hide();
    $('#imageBlock').hide();


    $(document).on('keyup', '#name', function() {
        var str = this.value.replace(/[&\/\\#@,+()$~%.'":*?<>{}]/g, "");
        $('#slug').val(str.trim().toLowerCase().replace(/\s/g, "-"));
    });

    $(document).on('keyup', '#slug', function() {
        var str = this.value.replace(/[&\/\\#@,+()$~%.'":*?<>{}]/g, "");
        $('#slug').val(str.trim().toLowerCase().replace(/\s/g, "-"));
    });

    $("#categoryFrom").on('submit', function(event) {
        event.preventDefault();
        let url = '';
        let formData = new FormData(this);
        if ($('#type').val() == "store") {
            url = "/categories/store";
        } else if ($('#type').val() == "edit") {
            url = "/categories/update";
        }
        clickOnSaveForm(url, "POST", formData);
        resetForm();
        resfreshJSTree();
    });

    $("#validatedCustomFile").on('change', function() {
        //get uploaded filename
        var files = [];
        for (var i = 0; i < $(this)[0].files.length; i++) {
            files.push($(this)[0].files[i].name);
        }
        $(this).next('.custom-file-label').html(files.join(', '));

        //image validation
        var file = this.files[0];
        var fileType = file["type"];
        var validImageTypes = ["image/jpg", "image/jpeg", "image/png"];
        if ($.inArray(fileType, validImageTypes) < 0) {
            $('#divNote').show();
            $('#note_txt_1').hide();
            $('#note_txt_2').html('<h6> <span class="text-danger font-weight-bolder">' +jsLang('Invalid file extension') + '</span> </h6> <span class="badge badge-danger">' + jsLang('Note') + '!</span> ' + jsLang('Allowed File Extensions: jpg, png, gif, bmp'));
            $('#note_txt_2').show();
            $('#prvw').hide();
            return false;
        } else {
            $('#prvw').show();
            $('#note_txt_2, #note_txt_1').hide();
            return true;
        }
    });

    $('.sub-category').on("click", function () {
        resetForm();
        $('#parentBlock').show();
        $('select[name="parent_id"]').empty();
        $('select[name="parent_id"]').append('<option value="'+ selectedNodeId +'">'+ selectedNodeName +'</option>');
        $('#type').val('store');
        $('.delete').hide();
    });

    $('.root-category').on("click", function () {
        var instance = $('#evts').jstree(true);
        instance.deselect_all();
        $('#parentBlock').hide();
        resetForm();
        $('#type').val('store');
        $('.delete').hide();
    });
    /* js tree delete and reload */
    $('.delete').on("click", function () {
         confirmDeleteAjax("/categories/delete", "POST", selectedNodeId, "resfreshJSTree");
        $(".sub-category").prop("disabled",true);
        resetForm();
    });

    /* reset from */
    function resetForm()
    {
        $('#status').val("Active").trigger('change');
        $('#is_searchable').val(1).trigger('change');
        $('#edit_id').val(null);
        $('.custom-file-label').text("Upload image");
        $('.img-remove-icon').trigger('click');
        $('#imageBlock').hide();
        $('#note_txt_2').hide();
        document.getElementById("categoryFrom").reset();
    }

    /* js tree edit */
    function getInfo(categoryId, createChild, type= "edit")
    {
        $('#imageBlock').show();
        $('.cursor_pointer > img').remove();
        if ($(".sub-category").is(":disabled") && createChild == 1) {
            $(".sub-category").prop("disabled",false);
        } else if (!$(".sub-category").is(":disabled") && createChild == 0) {
            $(".sub-category").prop("disabled",true);
        }
        editId = categoryId;
        $.ajax({
            url: SITE_URL + '/categories/edit',
            type: "POST",
            data: {
                "_token": token,
                id : categoryId,
                create_child : createChild
            },
            dataType: "json",
            success:function(data) {
                $('input').each(function() {
                    this.setCustomValidity('');
                });
                $('#name').val(data.name).siblings('.error').remove();
                $('#slug').val(data.slug).siblings('.error').remove();
                $('#status').val(data.status).trigger('change');
                $('#is_searchable').val(data.is_searchable).trigger('change');
                $('#is_featured').val(data.is_featured).trigger('change');
                $('#sell_commissions').val(getDecimalNumberFormat(data.sell_commissions));
                $('#edit_id').val(editId);
                $('.cursor_pointer').empty();
                $('.cursor_pointer').append('<img class="profile-user-img img-responsive fixSize" src="'+ data.image_path +'" alt="" class="img-thumbnail attachment-styles"/>');
                if (data.parent_id != null) {
                    $('#parentBlock').show();
                    $('select[name="parent_id"]').empty();
                    $('select[name="parent_id"]').append('<option value="'+ data.parent_id +'">'+ data.parent_name +'</option>');
                } else {
                    $('select[name="parent_id"]').empty();
                    $('#parentBlock').hide();
                }
            }
        });
    }

    function doMoveNode(id, parent, oldParent, position, oldPosition)
    {
       let url = "/categories/move-node";
        let formData = {
            'id' : id,
            'parent' : parent,
            'old_parent' : oldParent,
            'position' : position,
            'old_position' : oldPosition
        }
        clickOnSave(url, "POST", formData);
        resetForm();
        resfreshJSTree();
    }

   /* js tree first time load */
    $('#evts_button').on("click", function () {
        var instance = $('#evts').jstree(true);
        instance.deselect_all();
        instance.select_node('1');
    });
    /* interaction with js tree during click */
    $('#evts')
        .on("changed.jstree", function (e, data) {
            if(data.selected.length) {
                $('#type').val("edit");
                $('.delete').show();
                selectedNodeId = data.instance.get_node(data.selected[0]).id;
                selectedNodeName = data.instance.get_node(data.selected[0]).text;
                getInfo(selectedNodeId, data.instance.get_node(data.selected[0]).original.create_child);
            }
        }).on('move_node.jstree', function(e, data) {
            if (data.node.parents.length < 4) {
                doMoveNode(data.node.id, data.parent, data.old_parent, data.position, data.old_position);
            } else {
                swal(jsLang('Not Permitted'), {
                    icon: "error",
                    buttons: [false, jsLang('Ok')],
                });
                resfreshJSTree();
            }
        })
        .jstree({
            'core' : {
                "check_callback" : true,
                'data' : {
                    "url" : SITE_URL + '/categories/get-data',
                    "dataType" : "json" // needed only if you do not supply JSON headers
                }
            },
            "plugins" : [
                "dnd"
            ]
        });
}
