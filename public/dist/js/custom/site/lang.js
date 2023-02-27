  "use strict";
  // user change language
$('.lang-change').on('click', function() {
    var lang = $(this).find('.lang').data('short_name')
    var url = SITE_URL + '/change-language';
    $.ajax({
        url   :url,
        data:{
            _token:token,
            lang: lang,
            type: 'user'
        },
        type:"POST",
        success:function(data) {
            if (data == 1) {
                location.reload();
            }
        },
         error: function(xhr, desc, err) {
            return 0;
        }
    });
});
