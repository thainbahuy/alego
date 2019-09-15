function loadMoreEvent(urlAjax) {
    $.ajax(
        {
            url: urlAjax,
            type: "get",
            data: {'page': indexPage},
        })
        .done(function (data) {
            if ($.trim(data.html) != "") {
                $("#event").append(data.html);
                indexPage++;
                loadLazyEventAfterAjax();

            }
        })
        .fail(function (jqXHR, ajaxOptions, thrownError) {
            alert('server not responding...');
        });
}

function loadLazyEventAfterAjax() {
    document.querySelectorAll(".background-parallax").forEach(function (e) {
        e.classList.contains("lazy-load") ? new ScrollListener(e, {
            onAppear: function () {
                new Parallax(e)
            },
            offsetTop: -200,
            offsetBottom: -200
        }) : new Parallax(e)
    });
    $('figcaption').addClass('visible');
}

var indexPage = 2;
$(document).ready(function () {

    var mySwiper = new Swiper ('.swiper-container', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,
        calculateHeight:true,

        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        autoplay: {
            delay: 3000,
        },


    });

    $(window).scroll(function () {
        if ($(window).scrollTop() + $(window).height() == $(document).height()) {
            loadMoreEvent(URL);

        }
    });
});
