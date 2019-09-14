
var URL = window.location.href;
var indexPage = 2;
$(document).ready(function () {
    $(window).scroll(function () {
        if ($(window).scrollTop() + $(window).height() == $(document).height()) {
            loadMoreEventType(URL);
        }
    });
});

function loadMoreEventType(urlAjax) {
    $.ajax(
        {
            url: urlAjax,
            type: "get",
            data: {'page': indexPage},
        })
        .done(function (data) {
            console.log(data);
            if ($.trim(data.html) != "") {
                $(".masonry-cards").append(data.html);
                indexPage++;
                window.dispatchEvent(new Event('resize'));
            }
        })
        .fail(function (jqXHR, ajaxOptions, thrownError) {
            alert('server not responding...');
        });

}
