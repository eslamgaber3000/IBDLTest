/*****************************************************/
/*** custom script for this project ***/
/*****************************************************/

(function ($) {
  "use strict";

  $(".page-loader").delay(200).fadeOut("slow");
  $("#overlayer").delay(200).fadeOut("slow");

  $(document).ready(function () {
    $(".navbar-nav .dmenu").hover(
      function () {
        $(this).find(".sm-menu").first().stop(true, true).slideDown(0);
      },
      function () {
        $(this).find(".sm-menu").first().stop(true, true).slideUp(0);
      }
    );
  });

  $(document).ready(function () {
    $(".megamenu").on("click", function (e) {
      e.stopPropagation();
    });
  });

  //This pen uses jQuery, Bootstrap, SlimScroll & Fullpage.js

  (function () {
    var header = new Headroom(document.querySelector(".main-nav"), {
      tolerance: 5,
      offset: 10,
      classes: {
        initial: "animated",
        pinned: "slideUp",
        unpinned: "slideUp",
      },
    });
    header.init();
  })();

  $(".share").jsSocials({
    showLabel: false,
    showCount: false,
    shares: ["email", "twitter", "facebook", "whatsapp"],
  });

  AOS.init({
    once: true,
  });

  const player = new Plyr("#player");

  // if ($("#fullpage").length) {
  //   $("#fullpage").fullpage({
  //     //verticalCentered: true,
  //     css3: true,
  //     autoScrolling: true,
  //     //scrollOverflow:true,
  //     scrollBar: false,
  //     fitToSection: false,
  //     navigation: true,
  //     onLeave: function (index, nextIndex, direction) {
  //       console.log(
  //         "onLeave--" +
  //           "index: " +
  //           index +
  //           " nextIndex: " +
  //           nextIndex +
  //           " direction: " +
  //           direction
  //       );
  //     },
  //     afterLoad: function (anchorLink, index) {
  //       if (index === $("#fullpage .section").length) {
  //         $.fn.fullpage.setAutoScrolling(false);
  //       }

  //       $(document).scroll(function () {
  //         var last_section = $("#fullpage").find(".section").last();
  //         var offset = last_section.offset();
  //         var w = $(window);

  //         if (offset.top - w.scrollTop() > 0) {
  //           $.fn.fullpage.setAutoScrolling(true);
  //         }

  //         //console.log("(x,y): ("+(offset.left-w.scrollLeft())+","+(offset.top-w.scrollTop())+")");
  //       });

  //       //console.log("afterLoad--" + "anchorLink: " + anchorLink + " index: " + index );
  //     },
  //   });
  // }
})(jQuery);
