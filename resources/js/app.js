import "./bootstrap";
import "@fortawesome/fontawesome-free/js/all.min.js";
require("owl.carousel");
import "flowbite";
import Waypoint from "waypoints/lib/noframework.waypoints";

//Custom JS
var header = document.getElementById("myHeader"),
    sticky = header.offsetTop + 70;
function myFunction() {
    window.scrollY > sticky
        ? ($("#myHeader").addClass(
              "lg:pb-2 fixed bg-white top-0 left-0 right-0 drop-shadow-xl"
          ),
          $("#myHeader").removeClass("sticky"))
        : ($("#myHeader").removeClass(
              "lg:pb-2 fixed bg-white top-0 left-0 right-0 drop-shadow-xl"
          ),
          $("#myHeader").addClass("sticky"));
}
var myHeaderCourse = document.getElementById("myHeaderCourse");
function myFunctionCourse() {
    console.log(123);
    window.scrollY > stickyCourse
        ? ($("#myHeaderCourse").addClass(
              "lg:pb-2 !flex !fixed bg-white lg:top-16 md:top-11 bottom-0 mb-0 left-0 right-0 drop-shadow-xl"
          ),
          $("#myHeaderCourse").removeClass("stickyCourse"))
        : ($("#myHeaderCourse").removeClass(
              "lg:pb-2 !flex !fixed bg-white lg:top-16 md:top-11 bottom-0 mb-0 left-0 right-0 drop-shadow-xl"
          ),
          $("#myHeaderCourse").addClass("stickyCourse"));
}
function counterNumbers() {
    ($.fn.isInViewport = function () {
        var o = $(this).offset().top,
            t = o + $(this).outerHeight(),
            e = $(window).scrollTop(),
            l = e + $(window).height();
        return t > e && o < l;
    }),
        $("#numbers").isInViewport() &&
            ($("#numbers").data("run", "true"),
            jQuery(".counter").each(function () {
                jQuery(this)
                    .prop("Counter", 0)
                    .animate(
                        { Counter: jQuery(this).text() },
                        {
                            duration: 4e3,
                            easing: "swing",
                            step: function (o) {
                                jQuery(this).text(Math.ceil(o));
                            },
                        }
                    );
            }));
}
myHeaderCourse && (stickyCourse = myHeaderCourse.offsetTop + 280),
    (window.onscroll = function () {
        myFunction(),
            $("#numbers").length > 0 &&
                !$("#numbers").data("run") &&
                counterNumbers();
    });
var owl = $("#owlCourse");
owl.owlCarousel({
    rtl: true,
    margin: 15,
    nav: true,
    loop: true,
    autoplay: true,
    autoplayTimeout: 1e4,
    autoplayHoverPause: true,
    navText: [
        `<div class="hidden lg:inline-block nav-button owl-next"><img src="icons/Arrow-R.png" width="16px" hight="28.23px"
    class="rotate-180 no"></div>`,
        '<div class="hidden lg:inline-block nav-button owl-prev"><img width="16px" hight="28.23px" src="icons/Arrow-L.png"class="rotate-180 no"></div>',
    ],
    responsive: { 0: { items: 1 }, 1024: { items: 2 }, 1280: { items: 3 } },
}),
    $(".play").on("click", function () {
        owl.trigger("play.owl.autoplay", [2e3]);
    }),
    $(".stop").on("click", function () {
        owl.trigger("stop.owl.autoplay");
    });
var owl = $("#owlOffer");
owl.owlCarousel({
    rtl: true,
    nav: true,
    loop: true,
    autoplay: !1,
    autoplayTimeout: 1e4,
    autoplayHoverPause: true,
    navText: [
        `<div class="hidden lg:inline-block nav-button owl-next"><img width="16px" hight="28.23px" src="icons/Arrow-R.png"
    class="rotate-180 no"></div>`,
        '<div class="hidden lg:inline-block nav-button owl-prev"><img width="16px" hight="28.23px" src="icons/Arrow-L.png"class="rotate-180 no"></div>',
    ],
    responsive: { 0: { items: 1 }, 1024: { items: 2 }, 1280: { items: 3 } },
}),
    $(".play").on("click", function () {
        owl.trigger("play.owl.autoplay", [2e3]);
    }),
    $(".stop").on("click", function () {
        owl.trigger("stop.owl.autoplay");
    });
var owlAllOffer = $(".owlAllOffer");
owlAllOffer.owlCarousel({
    rtl: true,
    nav: true,
    loop: true,
    autoplay: true,
    margin: 10,
    autoplayHoverPause: true,
    navText: [
        '<div class="hidden lg:inline-block nav-button owl-next"><img class="no" src="icons/arrow.png"></div>',
        '<div class="hidden lg:inline-block nav-button owl-prev"><img class="rotate-180 no" src="icons/arrow.png"></div>',
    ],
    responsive: { 0: { items: 1.1 }, 1024: { items: 2 }, 1280: { items: 3 } },
}),
    $(".play").on("click", function () {
        owlAllOffer.trigger("play.owl.autoplay", [2e3]);
    }),
    $(".stop").on("click", function () {
        owlAllOffer.trigger("stop.owl.autoplay");
    });
var owl = $("#owlHeader");
owl.owlCarousel({
    items: 1,
    rtl: true,
    singleItem: true,
    loop: true,
    autoplay: true,
    autoplayTimeout: 1e4,
    autoplayHoverPause: !1,
}),
    $(".play").on("click", function () {
        owl.trigger("play.owl.autoplay", [2e3]);
    }),
    $(".stop").on("click", function () {
        owl.trigger("stop.owl.autoplay");
    }),
    $(".owlHeader .owl-nav").click(function (o) {
        $(this).removeClass("disabled");
    });
var owl = $("#owlRate");
owl.owlCarousel({
    items: 1,
    nav: true,
    rtl: true,
    singleItem: true,
    loop: true,
    autoplayHoverPause: true,
    navText: [
        '<div class="hidden md:flex nav-button owl-next"><img src="/icons/arrow-R-Rate.png" class="rotate-180" style="margin-right:35px;margin-top:-3px"></div>',
        '<div class="hidden md:flex nav-button owl-prev"><img src="/icons/arrow-L-Rate.png" class="rotate-180" style="margin-right:76px"></div>',
    ],
});
var owl = $("#owlAbout");

owl.owlCarousel({
    items: 1,
    nav: true,
    rtl: true,
    singleItem: true,
    loop: true,
    autoplay: true,
    autoplayTimeout: 4e3,
    autoplayHoverPause: !1,
    navText: [
        '<div class="hidden lg:inline-block nav-button owl-next"><img src="icons/Arrow-r-red.png" class="no"></div>',
        '<div class="hidden lg:inline-block nav-button owl-prev"><img src="icons/Arrow-l-red.png" class="no" style="margin-right:40px"></div>',
    ],
}),
    $(".play").on("click", function () {
        owl.trigger("play.owl.autoplay", [2e3]);
    }),
    $(".stop").on("click", function () {
        owl.trigger("stop.owl.autoplay");
    }),
    $("#owlAbout .owl-nav").click(function (o) {
        $(this).removeClass("disabled");
    }),
    $(".butMap").click(function (o) {
        $(".butMap").attr("style", "pointer-events:none"),
            $(".framMap").fadeOut();
        let t = $(this).data("class");
        setTimeout(
            function () {
                $("." + t).fadeIn();
            },
            400,
            t
        ),
            setTimeout(function () {
                $(".butMap").attr("style", "pointer-events:fill");
            }, 800),
            $(".butMap").removeClass("activeMap"),
            $(this).addClass("activeMap");
    });
function closeOverlay() {
    $("#parentClassSearch .overlay").addClass("hidden");
}
$(".activeOrder").click(function () {
    $(".activeOrder").removeClass("activeTapOrder"),
        $(this).addClass("activeTapOrder");
}),
    $(".buttonAccordion").click(function () {
        "false" == $(".buttonAccordion").attr("aria-expanded")
            ? ($(".buttonAccordion").removeClass("rounded-xl"),
              $(".buttonAccordion").addClass("rounded-t-xl"))
            : ($(".buttonAccordion").removeClass("rounded-t-xl"),
              $(".buttonAccordion").addClass("rounded-xl"));
    }),
    $(".buttonAccordionSide").click(function () {
        "false" == $(this).attr("aria-expanded")
            ? $(this)
                  .find("svg")
                  .removeClass("rotate-90")
                  .find("path")
                  .attr("fill", "#8B0303")
            : $(this)
                  .find("svg")
                  .addClass("rotate-90")
                  .find("path")
                  .attr("fill", "#696969");
    }),
    $(".buttonAccordionSide").click(function () {
        "false" == $(this).attr("aria-expanded")
            ? ($(this)
                  .find("svg")
                  .removeClass("rotate-90")
                  .find("path")
                  .attr("fill", "#8B0303"),
              $(this).find("p").css("color", "#8B0303"))
            : ($(this)
                  .find("svg")
                  .addClass("rotate-90")
                  .find("path")
                  .attr("fill", "#696969"),
              $(this).find("p").css("color", "black"));
    }),
    $(".editImage").on("click", function () {
        $("#profilePicture").click();
    }),
    $(".homeWorkButton").on("click", function () {
        $("#fileHomework").click();
    }),
    $(".testButton").on("click", function () {
        $("#fileTest").click();
    }),
    $(".lessonFile").on("click", function () {
        $("#fileLessonFile").click();
    }),
    $(".assignmentFile").on("click", function () {
        $("#fileAssignmentFile").click();
    }),
    $(document).on("keydown", function (o) {
        27 === o.keyCode && closeOverlay();
    });

function send_fb_event(eve) {
    fbq("track", eve);
    console.log("send " + eve);
}

$(window).on("load", function () {
    $("#parent").removeClass("hidden");
    $(".main_loader").addClass("hidden");
});

//Alert Login Google
if (document.getElementById("alertHide")) {
    window.setTimeout(function () {
        document.getElementById("alertHide").style.display = "none";
    }, 5000);
}
if (document.getElementById("alertHideStatus")) {
    window.setTimeout(function () {
        document.getElementById("alertHideStatus").style.display = "none";
    }, 10000);
}
function scrollToTop() {
    window.scrollTo({
        top: 0,
        behavior: "smooth",
    });
}

//Resize
window.addEventListener("DOMContentLoaded", function () {
    window.addEventListener("resize", function () {
        window.resizeTo(window.innerWidth, window.innerHeight);
    });
});
