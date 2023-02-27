"use strict";
$("#itemSearch").autocomplete({
    delay: 500,
    position: {my: "left top", at: "left bottom", collision: "flip"},
    source: function( request, response ) {
        $.ajax({
            url: SITE_URL + "/get-search-data",
            dataType: "json",
            type: "POST",
            data: {
                _token:token,
                search: $('#itemSearch').val(),
            },
            success: function(data) {
                if(data.status == 1) {
                    let parseData = JSON.parse(data.searchData);
                    let dataShift = [];
                    for (var i = 0; i < parseData.length; i++) {
                        dataShift[i+1] = parseData[i];
                    }
                    dataShift = {0:jsLang('Search History'),...dataShift};
                    parseData = Object.keys(dataShift).map((key) =>  dataShift[key]);
                    response(parseData);
                } else {
                    response(null);
                }
            }
        })
    },
    select: function (event, ui) {
        let e = ui.item;
        window.location.href = SITE_URL+"/search-products?keyword="+encodeURI(e.value).replace(/%20/g, "+");
    },
    minLength: 0,
    autoFocus: false
}).focus(function() {
    $(this).autocomplete('search', $(this).val())
});

$(document).ready(function() {
    function setCookie(cname, cvalue, exdays) {
        const d = new Date();
        d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
        let expires = "expires="+d.toUTCString();
        document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
    }

    function getCookie(cname) {
        let name = cname + "=";
        let ca = document.cookie.split(';');
        for(let i = 0; i < ca.length; i++) {
          let c = ca[i];
          while (c.charAt(0) == ' ') {
            c = c.substring(1);
          }
          if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
          }
        }
        return "";
    }
    $('.custom-modal-over .close-modal').each(function() {
        var popupName = $(this).attr('data-popupName');
        var loginRequired = $(this).attr('data-loginRequired');
        var isLogin = $(this).attr('data-isLogin');
        var popupShowAfter = $(this).attr('data-popupShowAfter');
        var popupPage = $(this).attr('data-popupPage');

        if (!getCookie(popupName) && popupPage == 'true') {
            if (loginRequired == '1') {
                if (isLogin == 'true') {
                    setTimeout(() => {
                        $(this).closest('.custom-modal-over').show();
                    }, popupShowAfter * 1000);
                }
            } else {
                setTimeout(() => {
                    $(this).closest('.custom-modal-over').show();
                }, popupShowAfter * 1000);
            }
        }

        $('.custom-modal-over .close-modal').on('click', function() {
            $(this).closest('.custom-modal-over').hide();
        });

        $('.custom-modal-over .close-popup-window').on('click', function() {
            setTimeout(() => {
                $(this).closest('.custom-modal-over').hide();
            }, 5000);
            setCookie(popupName, true, 1);
        });
    });
})

$(document).on('submit', '#subscribe', function(e) {
    e.preventDefault();
    $('.send-btn').css('display', 'none');
    $('.subscribe-loader').css('display', 'inline');
    $('.subscribe-message').text('');
    $.ajax({
        type: 'post',
        url: subscribeUrl,
        data: new FormData(this),
        dataType:'JSON',
        contentType: false,
        cache: false,
        processData: false,
        success: function (data) {
            $('.subscribe-message').text(data.message);
            $('.subscribe-loader').css('display', 'none');
            $('.send-btn').css('display', 'block');
        },
        error: function (data) {
            $('.subscribe-message').text(data.responseJSON.errors.email[0]);
            $('.subscribe-loader').css('display', 'none');
            $('.send-btn').css('display', 'block');
        }
    })
})

$(document).ready(function() {
    const Toast = Swal.mixin({
        toast: true,
        position: 'bottom-start',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    })

    if (sessionFail != '') {
       Toast.fire({
            icon: 'error',
            title: sessionFail
        })
    }

    if (sessionSuccess != '') {
       Toast.fire({
            icon: 'success',
            title: sessionSuccess
        })
    }

    $('.menu.dropdown-enable').each(function() {
        if ($(this).find('button .primary-bg-color').length > 0) {
            $(this).closest('li').find('a').first().addClass('active-border-bottom');
        }
    })
})

// for blog post sidebar archieve accordion

let titles = document.querySelectorAll('.accordion__header');
for (let i = 0; i < titles.length; i++) {
    titles[i].addEventListener('click', e => {
        for (let x of titles) {
            if (x !== e.target) {
                x.classList.remove('accordion__header--active');
                x.nextElementSibling.style.maxHeight = 0;
                x.nextElementSibling.style.padding = 0;
            }
        }
        e.target.classList.toggle('accordion__header--active');
        let description = e.target.nextElementSibling;

        if (e.target.classList.contains('accordion__header--active')) {
            description.style.maxHeight = description.scrollHeight + 'px';
        } else {
            description.style.maxHeight = 0;
            description.style.padding = 0;
        }
    });
}