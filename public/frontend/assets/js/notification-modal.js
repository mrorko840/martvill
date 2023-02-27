'use strict';
//notification modal interactive start
let notificationModal = document.querySelector('.notification-modal');

// when users clicked on the outside of notifications modal
document.addEventListener('click',function(e) {
    if(e.target.closest('.notification-modal') || e.target.closest('.notifications-show-hide')) {
        return;
    }
    else {
        notificationModal.style.display = 'none';
        a=0;
    }
})
//notification modal interactive end
