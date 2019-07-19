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
    @include('web.layout_common.header')
</header>

<div id="preloader"></div>
<main id="main" class="bg-lines">
    <section class="hero-min-fullscreen flex-center py-10"
             data-background="http://torola.fwp.fastwp.net/wp-content/uploads/sites/30/2018/03/211.jpg"
             data-overlay="black; .8">
        <div class="page-title-wrapper text-light">
            <h1 class="page-title ">CONTACT US</h1>
            <p class="page-subtitle">Let&#039;s talk about your next project!</p>
        </div>
    </section>
    <a href="index.html#" class="scroll-down"><span></span></a>
    <section class="pt-13 pr-7 pb-13 pl-7">
        <div class="container p-0">
            <div class="row no-gutters">
                <div class="columns col-sm-12"><h5>CONTACT INFO.</h5>
                    <p class="small serif my-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.<br/>
                        Incidunt molestiae, sint distinctio consequatur in officia laboriosam eligendi.</p>
                    <div><b>MAIL:</b> alegostudio@gmail.com</div>
                    <div><b>ADDRESS:</b> 132 Le Loi, Hai Chau, Da Nang</div>
                    <div><b>TEL:</b> 0935011363</div>
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
            <div class="fwp-map" data-mapId="map34850"></div>
        </div>
    </section>
</main>
<footer id="footer">
    @include('web.layout_common.footer')
</footer>

@include('web.layout_common.footerScript')


<script type='text/javascript'>
    /* <![CDATA[ */
    var fastwp = {
        "map34850": {
            "gmap_marker_title": ["FastWP HQ"],
            "gmap_marker_addrs": [["50.434596", "50.080533"]],
            "gmap_marker_ct": ["Bucharest, Romania"],
            "gmap_marker": ["http:\/\/torola.fwp.fastwp.net\/wp-content\/themes\/torola\/assets\/img\/map-marker.png"],
            "gmap_center": ["50.434596", "50.080533"],
            "gmap_style": "fastwp",
            "gmap_zoom": "8",
            "gmap_izoom": "12"
        }
    };
    /* ]]> */
</script>
</body>
</html>
