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
    @include('web.layout_common.header',['data'=>$menu])
</header>

<div id="preloader"></div>
<main id="main">
    <section class="hero hero-fullscreen">
{{--                <div class="video-background" data-src="{{$event[0]->video_link}}"--}}
{{--                     data-controls="true" data-autoplay="true" data-loop="true" data-volume="3">--}}
{{--                </div>--}}
        <iframe style="width: 95%" class="video-background"  src="{{$event[0]->video_link}}"
                frameborder="0"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
    </section>
    <section class="bg-lines pt-13 pr-7 pl-7">
        <div class="container p-0">
            <div class="row no-gutters">
                <div class="columns col-sm-6">
                    <h4 class="bold uppercase">{{$event[0]->name}}</h4>
                </div>
                <div class="columns col-sm-6">
                    <p>
                        {{$event[0]->description}}
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
                    <p>{{$event[0]->producer}}</p>
                </div>
                <div class="columns col-sm-4">
                    <h6 class="bold uppercase">Director</h6>
                    <p>{{$event[0]->director_photographer}}</p>
                </div>
                <div class="columns col-sm-4">
                    <h6 class="bold uppercase">Editor</h6>
                    <p>{{$event[0]->editor_designer}}</p>
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
