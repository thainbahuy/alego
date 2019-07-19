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
    @include('web.layout_common.header')
</header>

<div id="preloader"></div>
<main id="main" class="bg-lines">
    <section class="hero hero-fullscreen" data-background="#000">
        <div class="swiper" data-pagination="true">
            <figure class="swiper-slide"
                    data-background="http://torola.fwp.fastwp.net/wp-content/uploads/sites/30/2018/03/1081.jpg"
                    data-overlay="black; 0.6">
            </figure>
            <figure class="swiper-slide"
                    data-background="http://torola.fwp.fastwp.net/wp-content/uploads/sites/30/2018/03/1071.jpg"
                    data-overlay="black; 0.6">
            </figure>
        </div>
    </section>
    <a href="index.html#" class="scroll-down"><span></span></a>

    <section style="margin-top: 48px">
        <div class="container p-0">
            <figure class="parallax-folio-item">

                <div class="item-media background-parallax"
                     data-background="http://torola.fwp.fastwp.net/wp-content/uploads/sites/30/2018/03/11-1.jpg"></div>

                <figcaption>
                    <div class="item-caption-inner">
                        <p class="text-links">
                            Art / Design
                        </p>
                        <h3 class="bold uppercase">INFINITE BLACK SKIES</h3>
                        <a href="fwp_project/infinite-black-skies/index.html" class="button style-3 border-2">View
                            Project</a>
                    </div>
                </figcaption>

            </figure>
            <figure class="parallax-folio-item tall">

                <div class="item-media background-parallax"
                     data-background="http://torola.fwp.fastwp.net/wp-content/uploads/sites/30/2018/03/51.jpg"></div>

                <figcaption>
                    <div class="item-caption-inner">
                        <p class="text-links">
                            Art / Design
                        </p>
                        <h3 class="bold uppercase">We will stand tall</h3>
                        <a href="fwp_project/we-will-stand-tall-6/index.html" class="button style-3 border-2">View
                            Project</a>
                    </div>
                </figcaption>

            </figure>
            <figure class="parallax-folio-item tall">

                <div class="item-media background-parallax"
                     data-background="http://torola.fwp.fastwp.net/wp-content/uploads/sites/30/2018/03/21-1.jpg"></div>

                <figcaption>
                    <div class="item-caption-inner">
                        <p class="text-links">
                            Art / Design
                        </p>
                        <h3 class="bold uppercase">Feel the earth move</h3>
                        <a href="fwp_project/feel-the-earth-move-5/index.html" class="button style-3 border-2">View
                            Project</a>
                    </div>
                </figcaption>

            </figure>
            <figure class="parallax-folio-item">

                <div class="item-media background-parallax"
                     data-background="http://torola.fwp.fastwp.net/wp-content/uploads/sites/30/2018/03/31.jpg"></div>

                <figcaption>
                    <div class="item-caption-inner">
                        <p class="text-links">
                            Art / Design
                        </p>
                        <h3 class="bold uppercase">WHERE WORLDS COLLIDE</h3>
                        <a href="fwp_project/where-worlds-collide/index.html" class="button style-3 border-2">View
                            Project</a>
                    </div>
                </figcaption>

            </figure>
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

</body>
</html>
