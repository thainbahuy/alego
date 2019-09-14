<!doctype html>
<html lang="en-US" class="no-js">
<head>
    @include('web.layout_common.head')
    <title>Alego Story</title>
</head>

<body
    class="page-template page-template-template-normal page-template-template-normal-php page page-id-352 wp-custom-logo light-navigation sticky-header sticky-footer wpb-js-composer js-comp-ver-4.11.1 vc_responsive">

<div class="fade">
    <div class="inner"></div>
</div>

<header id="header">
    @include('web.layout_common.header',['data'=>$menu])
</header>

{{--<div id="preloader"></div>--}}
<main id="main" class="bg-lines">
    <div class="masonry masonry-cards" data-columns="5" data-gutter="30">
        @include('data_event_type')
    </div>
</main>
<footer id="footer">
    @include('web.layout_common.footer')
</footer>
@include('web.layout_common.footerScript')
<script src="{{asset('website/js/event-type.js')}}"></script>
</body>
</html>

<!-- Localized -->
