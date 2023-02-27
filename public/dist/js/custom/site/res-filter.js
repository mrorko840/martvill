"use strict";
// Filter mobile view
if ($(window).width() < 767) {
    $(document).on("click", ".filt",function() {
        $(".filter-mobile").toggle("slide", {direction: "right" }, 500);
      });

    $(document).on("mouseup", function(e){
        if ($(e.target).hasClass('filt')) {
            return false;
        }
        var container = $(".filter-mobile");
        if (!container.is(e.target) && container.has(e.target).length === 0) {
            container.hide("slide", {direction: "right" }, 500);
        }
    });
 } else {
    $(document).on("click", ".filt",function() {
        $(".filter-mobile").toggle("slide", {direction: "right" }, 500);
    });
}

