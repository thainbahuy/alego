<!doctype html>
<html lang="en-US" class="no-js">
<head>
    @include('web.layout_common.head')
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
            <figure class="swiper-slide"
                    data-background="{{asset('website/images_upload/cover.png')}}"
                    >
            </figure>
            <figure class="swiper-slide"
                    data-background="http://torola.fwp.fastwp.net/wp-content/uploads/sites/30/2018/03/1071.jpg"
                    >
            </figure>
        </div>
    </section>
{{--    <a href=".p-0" class="scroll-down"><span></span></a>--}}

    <section style="margin-top: 48px">
        <div id="event" class="container p-0">
        @foreach($listEvent as $item)
            <figure class="parallax-folio-item">
                <div class="item-media background-parallax"
                     data-background="{{asset($item->image_cover)}}">
                </div>
                <figcaption>
                    <div class="item-caption-inner">
                        <p class="text-links">
                            {{$item->author}}
                        </p>
                        <h4 class="bold uppercase">{{$item->name}}</h4>
                        <a href="#" class="button style-3 border-2">Watch
                            Now</a>
                    </div>
                </figcaption>
            </figure>
        @endforeach
        </div>
    </section>
    <section class="bg-lines cta pt-12 pb-12">
        <div class="container p-0">
            <div class="row no-gutters align-items-center p-5">
                <div class="col-md">
                    <h2 data-animation="fade-in-bottom 800ms 200ms" class="m-0">Let&#039;s work together</h2>
                </div>
                <div class="col-auto">
                    <a data-animation="fade-in-bottom 500ms 500ms" href="index.html#" class="button style-7 mb-0">Contact
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
<script src="{{asset('website/js/jquery_321/jquery-3.2.1.js')}}"></script>
{{--<script>--}}
{{--    var URL = '{{url('')}}';--}}
{{--    $(document).ready(function() {--}}
{{--        $('.parallax-folio-item').css('display','none');--}}
{{--        $(".parallax-folio-item").slice(0, 2).show();--}}
{{--        console.log($(".parallax-folio-item").length)--}}
{{--        $(window).scroll(function() {--}}
{{--            if($(window).scrollTop() + $(window).height() == $(document).height()) {--}}
{{--                console.log($(".parallax-folio-item").length)--}}
{{--                $(".parallax-folio-item").slice(0, 2).slideDown();--}}
{{--            }--}}
{{--        });--}}


{{--    });--}}
{{--</script>--}}
</body>
</html>
