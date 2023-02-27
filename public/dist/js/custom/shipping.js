'use strict';

if ($('.main-body .page-wrapper').find('#shipping-add-container, #shipping-edit-container').length) {
    $('.select2').select2()
}

$('.remove-dash').on('keydown', function(e) {
    if (e.keyCode == 189 || e.keyCode == 69) {
        return false;
    } else {
        return true;
    }
});
