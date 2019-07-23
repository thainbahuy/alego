<!doctype html>
<html lang="en-US" class="no-js">
<head>
    @include('web.layout_common.head')
</head>

<body
    class="page-template page-template-template-normal page-template-template-normal-php page page-id-84 wp-custom-logo light-navigation sticky-header sticky-footer wpb-js-composer js-comp-ver-4.11.1 vc_responsive">

<div class="fade">
    <div class="inner"></div>
</div>

<header id="header">
    @include('web.layout_common.header',['data'=>$menu])
</header>

<div id="preloader"></div>
<main id="main" class="bg-lines">
    <section class="hero-min-fullscreen flex-center py-10"
             data-background="http://torola.fwp.fastwp.net/wp-content/uploads/sites/30/2018/03/211.jpg"
             data-overlay="black; .8">
        <div class="page-title-wrapper text-light">
            <h1 class="page-title ">Contact us</h1>
{{--            <p class="page-subtitle">Let&#039;s talk about your next project!</p>--}}
        </div>
    </section>
    <a href="index.html#" class="scroll-down"><span></span></a>
    <section class="pt-13 pr-7 pb-13 pl-7">
        <div class="container p-0">
            <div class="row no-gutters">
                <div class="columns col-sm-12"><h5>@lang('Message.contact-infor').</h5>
                    <p class="small serif my-5">@lang('Message.contact-des')</p>
                    <div><b>Mail:</b> alegostudio@gmail.com</div>
                    <div><b>@lang('Message.address'):</b> 132 Le Loi, Hai Chau, Da Nang</div>
                    <div><b>@lang('Message.tel'):</b> 0935011363</div>
                </div>
                {{--                <div class="columns col-sm-6">--}}
                {{--                    <div role="form" class="wpcf7" id="wpcf7-f558-p84-o1" lang="en-US" dir="ltr">--}}
                {{--                        <div class="screen-reader-response"></div>--}}
                {{--                        <form action="index.html#wpcf7-f558-p84-o1" method="post" class="wpcf7-form"--}}
                {{--                              novalidate="novalidate">--}}
                {{--                            <div style="display: none;">--}}
                {{--                                <input type="hidden" name="_wpcf7" value="558"/>--}}
                {{--                                <input type="hidden" name="_wpcf7_version" value="5.0.1"/>--}}
                {{--                                <input type="hidden" name="_wpcf7_locale" value="en_US"/>--}}
                {{--                                <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f558-p84-o1"/>--}}
                {{--                                <input type="hidden" name="_wpcf7_container_post" value="84"/>--}}
                {{--                            </div>--}}
                {{--                            <div class="mail-form-message d-none mb-5"></div>--}}
                {{--                            <p><span class="wpcf7-form-control-wrap your-subject"><input type="text" name="your-subject"--}}
                {{--                                                                                         value="" size="40"--}}
                {{--                                                                                         class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"--}}
                {{--                                                                                         aria-required="true"--}}
                {{--                                                                                         aria-invalid="false"--}}
                {{--                                                                                         placeholder="Subject:"/></span><br/>--}}
                {{--                                <span class="wpcf7-form-control-wrap your-email"><input type="text" name="your-email"--}}
                {{--                                                                                        value="" size="40"--}}
                {{--                                                                                        class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"--}}
                {{--                                                                                        aria-required="true"--}}
                {{--                                                                                        aria-invalid="false"--}}
                {{--                                                                                        placeholder="Email:"/></span><br/>--}}
                {{--                                <span class="wpcf7-form-control-wrap your-message"><textarea name="your-message"--}}
                {{--                                                                                             cols="40" rows="10"--}}
                {{--                                                                                             class="wpcf7-form-control wpcf7-textarea"--}}
                {{--                                                                                             aria-invalid="false"--}}
                {{--                                                                                             placeholder="Message:"></textarea></span><br/>--}}
                {{--                                <input type="submit" id="submit" value="send" class="button style-5 uppercase"></p>--}}
                {{--                            <div class="wpcf7-response-output wpcf7-display-none"></div>--}}
                {{--                        </form>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
            </div>
        </div>
    </section>
    <section>
        <div class="map-container">
            <div id="map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3833.836491107283!2d108.21777335011797!3d16.07397248882339!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31421830b566a3f3%3A0xf3fdde306733c44e!2zMTMyIEzDqiBM4bujaSwgSOG6o2kgQ2jDonUgMSwgSOG6o2kgQ2jDonUsIMSQw6AgTuG6tW5nIDU1MDAwMCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1563791729168!5m2!1svi!2s"
                    width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
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
