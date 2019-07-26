<!doctype html>
<html lang="en-US" class="no-js">

<head>
    @include('web.layout_common.head')
</head>

<body
    class="page-template page-template-template-normal page-template-template-normal-php page page-id-174 wp-custom-logo light-navigation sticky-header sticky-footer wpb-js-composer js-comp-ver-4.11.1 vc_responsive">

<div class="fade">
    <div class="inner"></div>
</div>

<header id="header">
    @include('web.layout_common.header',['data'=>$menu])
</header>

<div id="preloader"></div>
<main id="main" class="bg-lines">
    <div class="grid lightbox" data-columns="3" data-gutter="5" data-cell-ratio="5/4" data-filter="#folioFilter">
        @include('data_event_type')
    </div>
</main>
<footer id="footer">
    @include('web.layout_common.footer')
</footer>
@include('web.layout_common.footerScript')
<script src="{{asset('website/js/jquery_321/jquery-3.2.1.js')}}"></script>

<script>
    var URL = window.location.href;
    var indexPage = 2;
    $(document).ready(function () {
        $(window).scroll(function () {
            if ($(window).scrollTop() + $(window).height() == $(document).height()) {
                loadMoreEvent(URL);
                setTimeout(function () {
                    window.dispatchEvent(new Event('resize'));
                }, 300);
            }
        });
    });

    function loadMoreEvent(urlAjax) {
        $.ajax(
            {
                url: urlAjax,
                type: "get",
                data: {'page': indexPage},
            })
            .done(function (data) {
                if ($.trim(data.html) != "") {
                    $(".lightbox").append(data.html);
                    indexPage++
                }
                $( ".portfolio-item" ).each(function( index ) {
                    data_background = $(this).attr('data-background');
                    $(this).css('background-image','url('+data_background+')');
                });
            })
            .fail(function (jqXHR, ajaxOptions, thrownError) {
                alert('server not responding...');
            });

    }


</script>

<script>

</script>
</body>

</html>
