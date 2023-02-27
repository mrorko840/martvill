'use strict';

options.handler = function(response) {
    document.getElementById('razorpay_payment_id').value = response.razorpay_payment_id;
    document.getElementById('razorpay_signature').value = response.razorpay_signature;
    document.razorpayform.submit();
};
options.modal = {
    ondismiss: function() {
        // Runs after dismissal
    },
    escape: true,
    backdropclose: false
};

var rzp = new Razorpay(options);

document.getElementById('rzp-button').onclick = function(e) {
    rzp.open();
    e.preventDefault();
}