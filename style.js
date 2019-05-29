var exec = true;

function move(x, y, z) {
    var elem = document.getElementsByClassName(y)[z];
    var num = document.getElementsByClassName("progress_valeu")[z];
    var width = 0;
    var id = setInterval(frame, 15);

    function frame() {
        if (width >= x) {
            clearInterval(id);
        } else {
            width++;
            elem.style.width = width + '%';
            num.innerText = width + "%";

        }
    }
}

var scrolled = false;

$(window).scroll(function animate() {
    if (!scrolled) {
        move(90, "progress", 0);
        move(80, "progress", 1);
        move(75, "progress", 2);
        move(70, "progress", 3);
        move(50, "progress", 4);
        move(75, "progress", 5);
        move(50, "progress", 6);
        scrolled = true;
    }
});

// about = document.getElementById("hassan");
// about.addEventListener("mouseover", animate);
// window.addEventListener("scroll", animate);

// navbar scroll

// function scrollNav() {
//     $('.navbar-nav a').click(function() {
//         //Toggle Class
//         $(".active").removeClass("active");
//         $(this).closest('li').addClass("active");
//         var theClass = $(this).attr("class");
//         $('.' + theClass).parent('li').addClass('active');
//         //Animate
//         $('html, body').stop().animate({
//             scrollTop: $($(this).attr('href')).offset().top - 160
//         }, 400);
//         return false;
//     });
//     $('.scrollTop a').scrollTop();
// }
// scrollNav();

// start animation on scroll

$(window).scroll(function(event) {
    var scroll = $(window).scrollTop();
    console.log(scroll);
    if (scroll > 92) {
        $('#cent').addClass("animated fadeInRight");
    }
    if (scroll > 310) {
        $('.responsive').addClass('animated flipInY');
        $('.Dynamic').addClass('animated flipInY');
        $('.Intuitive').addClass('animated flipInY')
    }
    if (scroll > 780) {
        $('.compitence').addClass('animated fadeInLeft');
        $('.contaner').addClass('animated fadeInRight')
    }
    if (scroll > 1370) {
        $('#cent0').addClass("animated fadeInRight");
    }
    if (scroll > 1500) {
        $('.container').addClass('animated fadeInUp');
    }
    if (scroll > 2320) {
        $('#cent1').addClass("animated fadeInRight");
    }
    if (scroll > 2390) {
        $('.input').addClass('animated zoomIn');
    }
});

$('#en_lang').click();

$('#en_lang').click(function() {
    $('#langValue').val('en');
    $('#langForm').submit();
});

$('#fr_lang').click(function() {
    $('#langValue').val('fr');
    $('#langForm').submit();
});