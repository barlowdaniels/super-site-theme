// Mobile menu open/close
jQuery(document).ready(function($) {
    var siteNav = $('.site-nav');
    $('.nav-btn.open').click(function () {
        siteNav.addClass('show');
        $(this).removeClass('show');
        $('.nav-btn.close').addClass('show');
    });

    $('.nav-btn.close').click(function () {
        siteNav.removeClass('show');
        $(this).removeClass('show');
        $('.nav-btn.open').addClass('show');
    });
});