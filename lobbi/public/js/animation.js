$(function () {
    new WOW().init();
    var mySwiper = new Swiper('.swiper-container', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,
        autoHeight: true,

        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
        },
    })

    $(document).on('click', '#faq .btn-link', function (e) {
        let $option = $(this).attr('aria-expanded');
        if ($option == "false") {
            $(this).closest('.card-header').css('background-color', 'white');
            $(this).html('<i class="fas fa-plus"></i>');
        } else {
            $(this).closest('.card-header').css('background-color', 'rgba(0,0,0,.03)');
            $(this).html('<i class="fas fa-minus"></i>');
        }

    });

    $(window).scroll(function () {
        if ($(this).scrollTop() > 20) {
            $(".logo.logo-image-resize-enlarge").removeClass('logo-image-resize-enlarge');
            $(".logo").addClass('logo-image-resize');
            $('#toTopBtn').fadeIn();
        } else {
            $(".logo.logo-image-resize").removeClass('logo-image-resize');
            $(".logo").addClass('logo-image-resize-enlarge');
            $('#toTopBtn').fadeOut();
        }
    });

    $('#toTopBtn').click(function () {
        $("html, body").animate({
            scrollTop: 0
        }, 1000);
        $('.nav-item.active').removeClass('active');
        $('.nav-item').first().addClass('active');
        return false;
    });

    $(window).on('hashchange', function () {
        let hash = window.location.hash;
        $('.nav-item.active').removeClass('active');
        $('a[href="' + hash + '"]').closest('.nav-item').addClass('active');
    });

});
const animateCSS = (element, animation, prefix = 'animate__') =>
    // We create a Promise and return it
    new Promise((resolve, reject) => {
        const animationName = `${prefix}${animation}`;
        const node = document.querySelector(element);

        node.classList.add(`${prefix}animated`, animationName);

        // When the animation ends, we clean the classes and resolve the Promise
        function handleAnimationEnd() {
            node.classList.remove(`${prefix}animated`, animationName);
            node.removeEventListener('animationend', handleAnimationEnd);

            resolve('Animation ended');
        }

        node.addEventListener('animationend', handleAnimationEnd);
    });
