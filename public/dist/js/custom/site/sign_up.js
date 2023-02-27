'use strict';
if ($('.main-body .page-wrapper').find('#sign-up-container').length) {

    $('#password_confirmation, #password').on('keyup', function(){
        $('#CheckPasswordMatch').show();
        let password = $("#password").val();
        let confirmPassword = $("#password_confirmation").val();
        if (password.length > 0 && confirmPassword.length > 0) {
            if (password != confirmPassword) {
                $("#CheckPasswordMatch").css("color", "red");
                $("#CheckPasswordMatch").html("*Passwords does not match!");
            }
            else {
                $("#CheckPasswordMatch").css("color", "green");
                $("#CheckPasswordMatch").html("Passwords match.");
            }
        }
    });

    $("#signUpForm").on('submit', function(event) {
        event.preventDefault();
        clickOnSaveForm("/sign-up-store", "post", new FormData(this), "Register Successfully", '/login');
    });
}
