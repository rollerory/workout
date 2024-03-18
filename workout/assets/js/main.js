$(function(){
    $('.menu a, .go-top').on('click', function (event) {
    event.preventDefault();
    var id = $(this).attr('href'),
        top = $(id).offset().top;
    $('body,html').animate({ scrollTop: top - 230}, 1500)        
    })

    $('.mobile-menu__btn').on('click', function () {
        $('.mobile-menu').addClass('open');
        $('.mobile-authorize').addClass('open');
        $('.main').toggleClass('blur');
    });

    $(document).on('click', function (event) {
        if (!$(event.target).closest('.mobile-menu__btn').length && !$(event.target).closest('.mobile-menu').length) {
            $('.mobile-menu').removeClass('open');
            $('.mobile-authorize').removeClass('open');
            $('.main').removeClass('blur');
        }
    });
});
