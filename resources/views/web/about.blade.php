<!doctype html>
<html lang="en-US" class="no-js">
<head>
    @include('web.layout_common.head')
    <title>@lang('Message.About-us')</title>
</head>

<body
    class="page-template page-template-template-without-lines page-template-template-without-lines-php page page-id-9 wp-custom-logo light-navigation sticky-header sticky-footer wpb-js-composer js-comp-ver-4.11.1 vc_responsive">

<div class="fade">
    <div class="inner"></div>
</div>

<header id="header">
    @include('web.layout_common.header',['data'=>$menu])
</header>

{{--<div id="preloader"></div>--}}
<main id="main">
    <section class="hero-min-fullscreen flex-center py-10"
             data-background="http://torola.fwp.fastwp.net/wp-content/uploads/sites/30/2018/03/201.jpg"
             data-overlay="black; .8">
        <div class="page-title-wrapper text-light">
            <h1 class="page-title "> ABOUT US</h1>
            <p class="page-subtitle">Alego Story - Realilty In A Dream</p>
        </div>
    </section>
    <a href="index.html#" class="scroll-down"><span></span></a>
    <section class="bg-lines pt-13 pr-8 pb-13 pl-8">
        <div class="container p-0">
            <div class="row no-gutters">
                <div class="columns col-sm-6 col-lg-6 col-md-6 vc_col-xs-12"><h5>@lang('Message.About').</h5></div>
                <div class="columns col-sm-6 col-lg-6 col-md-6 vc_col-xs-12"><p>@lang('Message.infor')</p>
                </div>
            </div>
        </div>
    </section>
    <section class="split-section">
        <div class="row">
            <div class="columns col-sm-6"
                 data-background="http://torola.fwp.fastwp.net/wp-content/uploads/sites/30/2018/03/211.jpg"></div>
            <div class="columns col-sm-6 flex-center text-light pt-9 pr-9 pb-9 pl-9" data-background="#222222">
                <section class="row vc_custom_1521461082558">
                    <div class="columns col-sm-12"><h5>THE STORY</h5>
                        <hr class="separator-left">
                        <p>@lang('Message.Story-infor')</p>
                    </div>
                </section>
            </div>
        </div>
    </section>
    <section class="bg-lines pt-13 pr-7 pb-13 pl-7">
        <div class="container p-0">
            <div class="row no-gutters">
                <div class="columns col-sm-6"><h5>@lang('Message.services').</h5></div>
                <div class="columns col-sm-6">
                    <div data-animation="fade-in-bottom 1.2s .2s">
                        <h5 class="uppercase">Pre-Wedding</h5>
                        <p class="serif small">@lang('Message.Prewedding-infor')</p>
                    </div>
                    <hr class="separator-left my-6">
                    <div data-animation="fade-in-bottom 1.2s .2s">
                        <h5 class="uppercase">Wedding ceremony</h5>
                        <p class="serif small">@lang('Message.Wedding-infor')</p>
                    </div>
                    <hr class="separator-left my-6">
                    <div data-animation="fade-in-bottom 1.2s .4s">
                        <h5 class="uppercase">Event</h5>
                        <p class="serif small">@lang('Message.Event-infor')</p>
                    </div>
                    <hr class="separator-left my-6">
                    <div data-animation="fade-in-bottom 1.2s .6s">
                        <h5 class="uppercase">TVC</h5>
                        <p class="serif small">@lang('Message.TVC-infor')</p>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="text-light pt-13 pr-7 pb-13 pl-7" data-background="#101010">
        <div class="container p-0"><h5 class="mb-8">TEAM.</h5>
            <div class="row">
                @foreach($listMember as $item)
                    <div class="col-md-4" data-animation="fade-in-bottom 1.2s .2s"><img
                            src="{{asset('image_upload/images/'.$item->avatar)}}" alt="JORDAN">
                        <h5 class="uppercase mt-5">{{$item->member_name}}
                        </h5>
                        <p><small>{{$item->role}}</small></p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="bg-lines cta pr-7 pb-13 pl-7">
        <div class="container p-0"><h5 class="mb-8"></h5>
            <div class="row no-gutters align-items-center p-5">
                <div class="col-md">
                    <h2 data-animation="fade-in-bottom 800ms 200ms" class="m-0">Let&#039;s work together</h2>
                </div>
                <div class="col-auto">
                    <a data-animation="fade-in-bottom 500ms 500ms" href="{{url('contact-us')}}" class="button style-7 mb-0">@lang('Message.Contact')</a>
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
