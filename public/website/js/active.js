$(function($) {
    let url = location.origin + "/" + location.pathname.split("/")[1];
    $('.ajax-link').each(function () {
        if (this.href === url) {
            $(this).addClass('active');
        }
    });

    // console.log($('.ajax-link li a'));
    // $('.ajax-link li a').each(function () {
    //     if (this.href === url) {
    //         $(this).closest(this).addClass('active');
    //     }
    // });
})
