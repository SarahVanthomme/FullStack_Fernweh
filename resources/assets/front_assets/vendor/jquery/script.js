/*DROPDOWN NAVBAR*/

$('.dropdown').hover(function() {
    $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeIn(200);
}, function() {
    $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeOut(200);
});


/*SLICK SLIDER*/

/*
$(document).ready(function(){
    $('.center').slick({
        infinite: true,
        autoPlay: true,
        autoplaySpeed: 2000,
        centerMode: true,
        centerPadding: '60px',
        slidesToShow: 7,
        slidesToScroll: 1,
        prevArrow: $('.prev'),
        nextArrow: $('.next'),
        responsive: [

            {
                breakpoint: 992,
                settings: {
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 5
                }
            },


            {
                breakpoint: 768,
                settings: {
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 480,
                settings: {
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 1
                }
            }
        ]});
});
*/




/*function ShowMore() {
    var HappyClients = document.getElementById("Reviews");
    if (HappyClients.style.display === "none") {
        HappyClients.style.display = "block";
            } else {
        HappyClients.style.display = "none";
    }
}*/

$('#show-more-content').hide();
$('#show-less').hide();


$('#show-more').click(function(){
    $('#show-more-content').show();
    $('#show-less').show();
    $('#show-more').hide();
});

$('#show-less').click(function(){
    $('#show-more-content').hide();
    $('#show-more').show();
    $('#show-less').hide();
});

/*DESTINATIONS*/
/*filter*/

var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
    coll[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var content = this.nextElementSibling;
        if (content.style.maxHeight){
            content.style.maxHeight = null;
        } else {
            content.style.maxHeight = content.scrollHeight + "px";
        }
    });
}

$(function() {
    $('.toggle-icon-1').on('click', function() {
        $('.toggle-1').toggleClass('collapsed');
    });
    $('.toggle-icon-2').on('click', function() {
        $('.toggle-2').toggleClass('collapsed');
    });
    $('.toggle-icon-3').on('click', function() {
        $('.toggle-3').toggleClass('collapsed');
    });
    $('.toggle-icon-4').on('click', function() {
        $('.toggle-4').toggleClass('collapsed');
    });
    $('.toggle-icon-5').on('click', function() {
        $('.toggle-5').toggleClass('collapsed');
    });
    $('.toggle-icon-6').on('click', function() {
        $('.toggle-6').toggleClass('collapsed');
    });
});


/*PRICE SLIDER RANGE*/
/*var slider = document.getElementById("myRange");
var output = document.getElementById("demo");
output.innerHTML = slider.value;

slider.oninput = function() {
    output.innerHTML = this.value;
};*/


/*SLIDE FILTER SMALL DEVICES*/

$(document).ready(function(){
    $('.filter').click(function(){
        $('.eachfilter').animate({
            width: "toggle"
        });
        $('.filter-content').toggleClass("push-content-down");
    });
});


/*GO TO TOP ARROW ICON*/

function call() {
    var body = $("html, body");
    body.stop().animate({scrollTop:0}, 500, 'swing', function() {
    });
};

$(function() {
    $(document).on('mousemove', function (e) {
        e.preventDefault();
    });
});


/*OWL CAROUSEL*/
/*$(document).ready(function(){

    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        autoPlay: 1000,
        responsive:{
            0:{
                items:5
            },
            600:{
                items:7
            }
           }
        })
    });*/


/*carousel ipc slick*/


