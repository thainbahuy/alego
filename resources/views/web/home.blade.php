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
@include('web.layout_common.header')
</header>

<div id="preloader"></div>
<main id="main" class="bg-lines">
    <div class="grid lightbox" data-columns="3" data-gutter="5" data-cell-ratio="5/4" data-filter="#folioFilter">
        <figure class="portfolio-item art design" data-background="{{asset('website/wp-content/uploads/sites/30/2018/03/23.jpg')}}">
            <a href="{{asset('website/wp-content/uploads/sites/30/2018/03/23.jpg')}}" class="lightbox-link"
               title="HEAR MY HEART BURST AGAIN"></a>
            <figcaption>
                <h5 class="item-title">
                    <a href="#">HEAR MY HEART BURST AGAIN</a>
                </h5>
                <p class="text-links">
                    Ben Nguyen
                </p>
            </figcaption>
        </figure>
        <figure class="portfolio-item art design" data-background="{{asset('website/wp-content/uploads/sites/30/2018/03/91.jpg')}}">
            <a href="{{asset('website/wp-content/uploads/sites/30/2018/03/91.jpg')}}" class="lightbox-link"
               title="HEAR MY HEART BURST AGAIN"></a>
            <figcaption>
                <h5 class="item-title">
                    <a href="#">HEAR MY HEART BURST AGAIN</a>
                </h5>
                <p class="text-links">
                    Art / Design
                </p>
            </figcaption>
        </figure>
        <figure class="portfolio-item art design" data-background="{{asset('website/wp-content/uploads/sites/30/2018/03/91.jpg')}}">
            <a href="{{asset('website/wp-content/uploads/sites/30/2018/03/91.jpg')}}" class="lightbox-link"
               title="HEAR MY HEART BURST AGAIN"></a>
            <figcaption>
                <h5 class="item-title">
                    <a href="#">HEAR MY HEART BURST AGAIN</a>
                </h5>
                <p class="text-links">
                    Art / Design
                </p>
            </figcaption>
        </figure>
        <figure class="portfolio-item art design" data-background="{{asset('website/wp-content/uploads/sites/30/2018/03/91.jpg')}}">
            <a href="{{asset('website/wp-content/uploads/sites/30/2018/03/91.jpg')}}" class="lightbox-link"
               title="HEAR MY HEART BURST AGAIN"></a>
            <figcaption>
                <h5 class="item-title">
                    <a href="#">HEAR MY HEART BURST AGAIN</a>
                </h5>
                <p class="text-links">
                    Art / Design
                </p>
            </figcaption>
        </figure>

    </div>
</main>
<footer id="footer">
    @include('web.layout_common.footer')
</footer>
@include('web.layout_common.footerScript')
</body>

</html>
