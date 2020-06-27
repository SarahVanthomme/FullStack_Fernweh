$(document).ready(function(){
    /*! Fades in page on load */
    $('body').css('display', 'none');
    $('body').fadeIn(800);

});

/*$(document).ready(function() {

    /!* Every time the window is scrolled ... *!/
    $(window).scroll( function(){

        /!* Check the location of each desired element *!/
        $('.fade-in-section').each( function(i){

            var bottom_of_object = $(this).offset().top + $(this).outerHeight();
            var bottom_of_window = $(window).scrollTop() + $(window).height();

            /!* If the object is completely visible in the window, fade it it *!/
            if( bottom_of_window < bottom_of_object ){

                $(this).animate({'opacity':'1'},1000);

            }

        });

        $('.fade-in-section-second').each( function (i) {
            var bottom_of_object = $(this).offset().top + $(this).outerHeight();
            var bottom_of_window = $(window).scrollTop() + $(window).height();

            /!* If the object is completely visible in the window, fade it it *!/
            if( bottom_of_window > bottom_of_object ){

                $(this).animate({'opacity':'1'},2000);

            }

        })

    });

});*/




$(".dropdown").hover((function () {
    $(this).find(".dropdown-menu").stop(!0, !0).delay(100).fadeIn(200)
}), (function () {
    $(this).find(".dropdown-menu").stop(!0, !0).delay(100).fadeOut(200)
})), $("#show-more-content").hide(), $("#show-less").hide(), $("#show-more").click((function () {
    $("#show-more-content").show(), $("#show-less").show(), $("#show-more").hide(), console.log("mlqksdjfm")
})), $("#show-less").click((function () {
    $("#show-more-content").hide(), $("#show-more").show(), $("#show-less").hide()
}));
var i, coll = document.getElementsByClassName("collapsible");
for (i = 0; i < coll.length; i++) coll[i].addEventListener("click", (function () {
    this.classList.toggle("active");
    var o = this.nextElementSibling;
    o.style.maxHeight ? o.style.maxHeight = null : o.style.maxHeight = o.scrollHeight + "px"
}));

function call() {
    $("html, body").stop().animate({scrollTop: 0}, 500, "swing", (function () {
    }))
}

$((function () {
    $(".toggle-icon-1").on("click", (function () {
        $(".toggle-1").toggleClass("collapsed")
    })), $(".toggle-icon-2").on("click", (function () {
        $(".toggle-2").toggleClass("collapsed")
    })), $(".toggle-icon-3").on("click", (function () {
        $(".toggle-3").toggleClass("collapsed")
    })), $(".toggle-icon-4").on("click", (function () {
        $(".toggle-4").toggleClass("collapsed")
    })), $(".toggle-icon-5").on("click", (function () {
        $(".toggle-5").toggleClass("collapsed")
    })), $(".toggle-icon-6").on("click", (function () {
        $(".toggle-6").toggleClass("collapsed")
    }))
})), $(document).ready((function () {
    $(".filter").click((function () {
        $(".eachfilter").animate({width: "toggle"}), $(".filter-content").toggleClass("push-content-down")
    }))
})), $((function () {
    $(document).on("mousemove", (function (o) {
        o.preventDefault()
    }))
}));


/*
Carousel
*/
$('#carousel-example').on('slide.bs.carousel', function (e) {
    /*
        CC 2.0 License Iatek LLC 2018 - Attribution required
    */
    var $e = $(e.relatedTarget);
    var idx = $e.index();
    var itemsPerSlide = 5;
    var totalItems = $('.carousel-item').length;

    if (idx >= totalItems-(itemsPerSlide-1)) {
        var it = itemsPerSlide - (totalItems - idx);
        for (var i=0; i<it; i++) {
            // append slides to end
            if (e.direction=="left") {
                $('.carousel-item').eq(i).appendTo('.carousel-inner');
            }
            else {
                $('.carousel-item').eq(0).appendTo('.carousel-inner');
            }
        }
    }
});




