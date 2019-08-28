$(function($) {
    var url = location.href;
    $('.ajax-link').each(function () {
        if (this.href === url) {
            $(this).addClass('active');
        }
    });

    $('.ajax-link-sub').each(function () {
        if (this.href === url) {
            $(this).closest('.menu-sub').find('.ajax-link').addClass('active');
        }
    });
})
