<!doctype html>
<html lang="en-US" class="no-js">
<head>
    @include('web.layout_common.head')
    <title>Alego Story</title>
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
    <section class="hero hero-fullscreen" data-background="#000">
        <div class="swiper" data-pagination="true">
            @foreach($listBackground as $item)
                <figure class="swiper-slide"
                        data-background="{{asset('image_upload/images/'.$item->image_link)}}">
                </figure>
            @endforeach
        </div>
    </section>
    <section class="py-lg-13 py-8">
        <div class="container d-flex justify-content-center text-lg-center">
            <div class="col-lg-8">
                <p class="small uppercase bold mb-4 animated" style="animation: 1000ms ease 300ms 1 normal both running fade-in-bottom; opacity: 0;">Hello There.</p>
                <h2 class="bold animated" style="animation: 1300ms ease 500ms 1 normal both running fade-in-bottom; opacity: 0;">We're just two lost Souls swimming in a Fish Bowl &amp; Winning Design Awards</h2>
                <p class="small serif mt-5 animated" style="animation: 1500ms ease 400ms 1 normal both running fade-in-bottom; opacity: 0;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit, et, praesentium?<br> Odit perferendis error natus cum, laudantium ea!</p>
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
                       class="button style-7 mb-0">Contact
                        Us</a>
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
<script>
    var URL = '{{route('web.first-home')}}';

</script>
</body>
</html>
