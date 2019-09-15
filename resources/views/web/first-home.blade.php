<!doctype html>
<html lang="en-US" class="no-js">
<head>
    @include('web.layout_common.head')

    <link rel="stylesheet" href="{{asset('website/library/swiper/css/swiper.min.css')}}">
    <title>Alego Story</title>
    <style>
        #header {
            height: 100px;
        }

        .swiper-container {
            margin-top: 36px;
        }
    </style>
</head>

<body
    class="home page-template page-template-template-normal page-template-template-normal-php page page-id-112 wp-custom-logo light-navigation sticky-header sticky-footer wpb-js-composer js-comp-ver-4.11.1 vc_responsive">

<div class="fade">
    <div class="inner"></div>
</div>

<header id="header">
    @include('web.layout_common.header',['data'=>$menu])
</header>

<div id="preloader"></div>
<main id="main" class="bg-lines">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            @foreach($listBackground as $item)
                <div class="swiper-slide">
                    <img src="{{Helpers::convertJsonToArray($item->image_link)['link']}}" alt="">
                </div>
            @endforeach
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>
        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev swiper-button-white"></div>
        <div class="swiper-button-next swiper-button-white"></div>

    </div>

    <section class="py-lg-9 py-8">
        <div class="container d-flex justify-content-center text-lg-center">
            <div class="col-lg-8">
                <p class="small uppercase bold mb-4 animated"
                   style="font-size: 15px;animation: 1000ms ease 300ms 1 normal both running fade-in-bottom; opacity: 0;">
                    WELCOM TO ALEGO STORY.</p>
                <h2 class="bold animated"
                    style="animation: 1300ms ease 500ms 1 normal both running fade-in-bottom; opacity: 0;">Tell your
                    story your own way</h2>
            </div>
        </div>
    </section>
    <section style="margin-top: 48px">
        <div id="event" class="container p-0">
            @include('data_event_home')
        </div>
    </section>
    <section class="bg-lines cta pt-12 pb-12">
        <div class="container p-0">
            <div class="row no-gutters align-items-center p-5">
                <div class="col-md">
                    <h2 data-animation="fade-in-bottom 800ms 200ms" class="m-0">Let&#039;s work together</h2>
                </div>
                <div class="col-auto">
                    <a data-animation="fade-in-bottom 500ms 500ms" href="{{url('contact-us')}}"
                       class="button style-7 mb-0">@lang('Message.Contact')</a>
                </div>
            </div>
        </div>
    </section>
</main>
<footer id="footer">
    @include('web.layout_common.footer')
</footer>

@include('web.layout_common.footerScript')
<script src="{{asset('website/js/first-home.js')}}"></script>
<script src="{{asset('website/library/swiper/js/swiper.min.js')}}"></script>
<script>
    var URL = '{{route('web.first-home')}}';
</script>
</body>
</html>
