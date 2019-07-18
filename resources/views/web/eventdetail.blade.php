<!doctype html>
<html lang="en-US" class="no-js">
<head>
    @include('web.layout_common.head')
    <link rel="stylesheet" href="{{asset('website/wp-content/themes/torola/assets/css/event_detail.css')}}">
</head>

<body
    class="fwp_portfolio-template-default single single-fwp_portfolio postid-136 wp-custom-logo light-navigation sticky-header sticky-footer wpb-js-composer js-comp-ver-4.11.1 vc_responsive">

<div class="fade">
    <div class="inner"></div>
</div>

<header id="header">
    @include('web.layout_common.header')
</header>

<div id="preloader"></div>
<main id="main">
    <section class="hero hero-fullscreen">
        <div class="video-background" data-src="https://www.youtube.com/embed/knW7-x7Y7RE"
             data-controls="true" data-autoplay="true" data-loop="true" data-volume="3">
        </div>
    </section>
    <section class="bg-lines pt-13 pr-7 pl-7">
        <div class="container p-0">
            <div class="row no-gutters">
                <div class="columns col-sm-6">
                    <h4 class="bold uppercase">KINH NGHIỆM CHỤP ẢNH CƯỚI PHONG CÁCH CỔ ĐIỂN ĐẸP LÃNG MẠN NHẸ NHÀNG</h4>
                    {{--                    <p class="serif">Project subtitle</p>--}}
                </div>
                <div class="columns col-sm-6">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque quae, totam mollitia sequi vero
                        eum facilis harum rerum nobis, cum ut quaerat reprehenderit numquam quos, minus perspiciatis
                        perferendis. Enim, perferendis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius
                        quaerat, ea aspernatur debitis
                        rerum repellat, optio corporis laborum. Enim ducimus, temporibus minus facilis. Quae ratione
                        voluptatem porro voluptas tenetur vel.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-lines pt-13 pb-13">
        <div class="container p-0">
            <div class="row no-gutters" id="producer">
                <div class="columns col-sm-4">
                    <h6 class="bold uppercase">Producer</h6>
                    <p>Mercedes-Benz</p>
                </div>
                <div class="columns col-sm-4">
                    <h6 class="bold uppercase">Director</h6>
                    <p>Mercedes-Benz</p>
                </div>
                <div class="columns col-sm-4">
                    <h6 class="bold uppercase">Editor</h6>
                    <p>Mercedes-Benz</p>
                </div>
            </div>
        </div>
    </section>



</main>
<footer id="footer">
    @include('web.layout_common.footer')
</footer>

@include('web.layout_common.footerScript')

</body>

</html>
