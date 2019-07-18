<!doctype html>
<html lang="en-US" class="no-js">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"/>
    <meta name="description" content="Just another FWP Dev Demo Site Sites site">
    <link rel="pingback" href="http://torola.fwp.fastwp.net/xmlrpc.php"/>
    <title>Alego Story</title>
    <link rel='dns-prefetch' href='../index.html'/>
    <link rel='dns-prefetch' href='http://maps.googleapis.com'/>
    <link rel='dns-prefetch' href='http://fonts.googleapis.com'/>
    <link rel='dns-prefetch' href='http://s.w.org'/>
    <link rel="alternate" type="application/rss+xml" title="Torola &raquo; Feed" href="../feed/index.rss"/>
    <link rel="alternate" type="application/rss+xml" title="Torola &raquo; Comments Feed"
          href="../comments/feed/index.rss"/>
    <script type="text/javascript">
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/11\/72x72\/",
            "ext": ".png",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/11\/svg\/",
            "svgExt": ".svg",
            "source": {
                "concatemoji": "http:\/\/torola.fwp.fastwp.net\/wp-includes\/js\/wp-emoji-release.min.js"
            }
        };
        !function (a, b, c) {
            function d(a, b) {
                var c = String.fromCharCode;
                l.clearRect(0, 0, k.width, k.height), l.fillText(c.apply(this, a), 0, 0);
                var d = k.toDataURL();
                l.clearRect(0, 0, k.width, k.height), l.fillText(c.apply(this, b), 0, 0);
                var e = k.toDataURL();
                return d === e
            }

            function e(a) {
                var b;
                if (!l || !l.fillText) return !1;
                switch (l.textBaseline = "top", l.font = "600 32px Arial", a) {
                    case "flag":
                        return !(b = d([55356, 56826, 55356, 56819], [55356, 56826, 8203, 55356, 56819])) && (b = d([55356, 57332, 56128, 56423, 56128, 56418, 56128, 56421, 56128, 56430, 56128, 56423, 56128, 56447], [55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203, 56128, 56430, 8203, 56128, 56423, 8203, 56128, 56447]), !b);
                    case "emoji":
                        return b = d([55358, 56760, 9792, 65039], [55358, 56760, 8203, 9792, 65039]), !b
                }
                return !1
            }

            function f(a) {
                var c = b.createElement("script");
                c.src = a, c.defer = c.type = "text/javascript", b.getElementsByTagName("head")[0].appendChild(c)
            }

            var g, h, i, j, k = b.createElement("canvas"),
                l = k.getContext && k.getContext("2d");
            for (j = Array("flag", "emoji"), c.supports = {
                everything: !0,
                everythingExceptFlag: !0
            }, i = 0; i < j.length; i++) c.supports[j[i]] = e(j[i]), c.supports.everything = c.supports.everything && c.supports[j[i]], "flag" !== j[i] && (c.supports.everythingExceptFlag = c.supports.everythingExceptFlag && c.supports[j[i]]);
            c.supports.everythingExceptFlag = c.supports.everythingExceptFlag && !c.supports.flag, c.DOMReady = !1, c.readyCallback = function () {
                c.DOMReady = !0
            }, c.supports.everything || (h = function () {
                c.readyCallback()
            }, b.addEventListener ? (b.addEventListener("DOMContentLoaded", h, !1), a.addEventListener("load", h, !1)) : (a.attachEvent("onload", h), b.attachEvent("onreadystatechange", function () {
                "complete" === b.readyState && c.readyCallback()
            })), g = c.source || {}, g.concatemoji ? f(g.concatemoji) : g.wpemoji && g.twemoji && (f(g.twemoji), f(g.wpemoji)))
        }(window, document, window._wpemojiSettings);
    </script>
    <style type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 .07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <link rel='stylesheet' id='contact-form-7-css'
          href='{{asset('website/wp-content/plugins/contact-form-7/includes/css/styles.css')}}' type='text/css'
          media='all'/>
    <link rel='stylesheet' id='core-css' href='{{asset('website/wp-content/themes/torola/assets/css/core.css')}}'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='theme-css' href='{{asset('website/wp-content/themes/torola/assets/css/theme.css')}}'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='wp-css' href='{{asset('website/wp-content/themes/torola/assets/css/wp.css')}}'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='google-fonts-css'
          href='https://fonts.googleapis.com/css?family=Playfair+Display%3A400%2C700%2C900' type='text/css'
          media='all'/>
    <link rel='stylesheet' id='js_composer_front-css'
          href='{{asset('website/wp-content/plugins/js_composer/assets/css/js_composer.min.css')}}' type='text/css'
          media='all'/>
    <script type='text/javascript' src='{{asset('website/wp-includes/js/jquery/jquery.js')}}'></script>
    <script type='text/javascript' src='{{asset('website/wp-includes/js/jquery/jquery-migrate.min.js')}}'></script>
    <link rel='https://api.w.org/' href='{{asset('website/wp-json/index.json')}}'/>
    <link rel="alternate" type="application/json+oembed"
          href="{{asset('website/wp-json/oembed/1.0/embed-url=http---torola.fwp.fastwp.net-home-grid-.json')}}"/>
    <link rel="alternate" type="text/xml+oembed"
          href="{{asset('website/wp-json/oembed/1.0/embed-url=http---torola.fwp.fastwp.net-home-grid-&amp;format=xml.xml')}}"/>
    <!-- Start Drift By WP-Plugin: Drift -->
    <div class="fb-customerchat" page_id="637034146378459"></div>
    <!-- end: Drift Code. -->
    <style type="text/css">
        .recentcomments a {
            display: inline !important;
            padding: 0 !important;
            margin: 0 !important;
        }
    </style>
    <meta name="generator" content="Powered by Visual Composer - drag and drop page builder for WordPress."/>
    <!--[if lte IE 9]>
    <link rel="stylesheet" type="text/css"
          href="http://torola.fwp.fastwp.net/wp-content/plugins/js_composer/assets/css/vc_lte_ie9.min.css"
          media="screen"><![endif]-->
    <!--[if IE  8]>
    <link rel="stylesheet" type="text/css"
          href="http://torola.fwp.fastwp.net/wp-content/plugins/js_composer/assets/css/vc-ie8.min.css" media="screen">
    <![endif]-->
    <style type="text/css" id="wp-custom-css">
        :-webkit-full-screen-ancestor:not(iframe) {
            animation-fill-mode: none !important;
        }

        .full-height-map.map-container {
            height: 100%;
        }

        .nav-new-item a:after {
            content: 'NEW';
            display: inline-block;
            background-color: red;
            color: #fff;
            border-radius: 3px;
            margin-left: 12px;
            font-size: 11px;
            font-weight: 700;
            padding: 1px 4px;
            letter-spacing: 0;
            text-indent: 0;
        }
    </style>
    <noscript>
        <style type="text/css">.wpb_animate_when_almost_visible {
                opacity: 1;
            }</style>
    </noscript>
</head>

<body
    class="page-template page-template-template-normal page-template-template-normal-php page page-id-174 wp-custom-logo light-navigation sticky-header sticky-footer wpb-js-composer js-comp-ver-4.11.1 vc_responsive">

<div class="fade">
    <div class="inner"></div>
</div>

<header id="header">
    <a href="../index.html" class="logo">
        <img src="{{asset('website/')}}wp-content/uploads/sites/30/2018/03/logo-dark1.png" alt="Torola">
    </a>

    <a href="#" class="mob-menu">
        <span></span><span></span><span></span>
    </a>

    <nav class="navigation">
        <ul class="main-nav menu">
            <li class=" has-mega-menu">
                <a href="index.html#" class="ajax-link active">Home</a>
                <div class="mega-menu">
                    <div class="col">
                        <ul>
                            <li class="">
                                <a href="../index.html">Default</a></li>
                            <li class="">
                                <a href="../home-masonry-cards/index.html">Masonry Cards</a></li>
                            <li class="">
                                <a href="index.html" class="active">Grid</a></li>
                            <li class="">
                                <a href="../home-horizontal/index.html">Horizontal</a></li>
                            <li class="">
                                <a href="../home-reveal-sections/index.html">Reveal Sections</a></li>
                            <li class="">
                                <a href="../home-split/index.html">Split</a></li>
                            <li class="">
                                <a href="../home-hover-list/index.html">Hover List</a></li>
                        </ul>
                    </div>
                    <div class="col">
                        <ul>
                            <li class="nav-new-item">
                                <a href="../one-page-personal/index.html">OnePage Personal</a></li>
                            <li class="">
                                <a href="../home-hover-grid/index.html">Hover Grid</a></li>
                            <li class="">
                                <a href="../home-thumbnail-videos/index.html">Thumbnail Videos</a></li>
                            <li class="">
                                <a href="../home-slider-thumbnails/index.html">Slider Thumbnails</a></li>
                            <li class="">
                                <a href="../horizontal-with-title/index.html">Horizontal With Title</a></li>
                            <li class="">
                                <a href="../home-photography/index.html">Photography</a></li>
                            <li class="">
                                <a href="../home-entrance-image/index.html">Entrance Image</a></li>
                        </ul>
                    </div>
                    <div class="col">
                        <ul>
                            <li class="nav-new-item">
                                <a href="../onepage-agency/index.html">OnePage Agency</a></li>
                            <li class="">
                                <a href="../home-entrance-video/index.html">Entrance Video</a></li>
                            <li class="">
                                <a href="../home-justified/index.html">Justified</a></li>
                            <li class="">
                                <a href="../home-portfolio-with-background/index.html">Portfolio With Background</a>
                            </li>
                            <li class="">
                                <a href="../home-kenburns/index.html">Kenburns</a></li>
                            <li class="">
                                <a href="../home-parallax-hero/index.html">Parallax Hero</a></li>
                            <li class="">
                                <a href="../home-single-image/index.html">Single Image</a></li>
                        </ul>
                    </div>
                    <div class="col">
                        <ul>
                            <li class="">
                                <a href="../home-single-video/index.html">Single Video</a></li>
                            <li class="">
                                <a href="../home-classic-portfolio/index.html">Classic Portfolio</a></li>
                            <li class="">
                                <a href="../home-fullscreen-slider/index.html">Fullscreen Slider</a></li>
                            <li class="">
                                <a href="../home-vertical-slider/index.html">Vertical Slider</a></li>
                            <li class="">
                                <a href="../home-parallax-sections/index.html">Parallax Sections</a></li>
                        </ul>
                    </div>
                </div>
            </li>
            <li class="">
                <a href="index.html#" class="ajax-link">About</a>
                <ul>
                    <li class="">
                        <a href="../about-us/index.html">About Us</a></li>
                    <li class="">
                        <a href="../about-me/index.html">About Me</a></li>
                    <li class="">
                        <a href="../about-minimal/index.html">About Minimal</a></li>
                </ul>
            </li>
            <li class="">
                <a href="index.html#" class="ajax-link">Blog</a>
                <ul>
                    <li class="">
                        <a href="../blog/index-styleId=2.html">Blog Masonry Boxed</a></li>
                    <li class="">
                        <a href="../blog/index-styleId=1.html">Blog Masonry Fullwidth</a></li>
                    <li class="">
                        <a href="../blog/index-styleId=4.html">Blog Classic</a></li>
                    <li class="">
                        <a href="../blog/index-styleId=3.html">Blog With Sidebar</a></li>
                    <li class="">
                        <a href="../2018/03/30/nightcall/index.html">Blog Post</a></li>
                </ul>
            </li>
            <li class="">
                <a href="index.html#" class="ajax-link">Contact</a>
                <ul>
                    <li class="">
                        <a href="../contact-us/index.html">Contact Us</a></li>
                    <li class="">
                        <a href="../contact-me/index.html">Contact Me</a></li>
                    <li class="">
                        <a href="../contact-minimal/index.html">Contact Minimal</a></li>
                </ul>
            </li>
            <li class="">
                <a href="https://themeforest.net/item/torola-modern-photography-theme/21542569?ref=fastwp"
                   class="ajax-link">Buy Now</a></li>
        </ul>
    </nav>
</header>

<div id="preloader"></div>
<main id="main" class="bg-lines">
    <div class="grid lightbox" data-columns="3" data-gutter="5" data-cell-ratio="5/4" data-filter="#folioFilter">
        <figure class="portfolio-item art design"
                data-background="{{asset('website/')}}/wp-content/uploads/sites/30/2018/03/11-1.jpg">
            <a href="{{asset('website/')}}/wp-content/uploads/sites/30/2018/03/11-1.jpg" class="lightbox-link"
               title="INFINITE BLACK SKIES"></a>
            <figcaption>
                <h5 class="item-title">
                    <a href="../fwp_project/infinite-black-skies/index.html">INFINITE BLACK SKIES</a>
                </h5>
                <p class="text-links">
                    Art / Design
                </p>
            </figcaption>
        </figure>
        <figure class="portfolio-item art design"
                data-background="{{asset('website/')}}/wp-content/uploads/sites/30/2018/03/21-1.jpg">
            <a href="{{asset('website/')}}/wp-content/uploads/sites/30/2018/03/21-1.jpg" class="lightbox-link"
               title="FEEL THE EARTH MOVE"></a>
            <figcaption>
                <h5 class="item-title">
                    <a href="../fwp_project/feel-the-earth-move/index.html">FEEL THE EARTH MOVE</a>
                </h5>
                <p class="text-links">
                    Art / Design
                </p>
            </figcaption>
        </figure>
        <figure class="portfolio-item art design" data-background="../wp-content/uploads/sites/30/2018/03/31.jpg">
            <a href="{{asset('website/')}}/wp-content/uploads/sites/30/2018/03/31.jpg" class="lightbox-link"
               title="WHERE WORLDS COLLIDE"></a>
            <figcaption>
                <h5 class="item-title">
                    <a href="../fwp_project/where-worlds-collide/index.html">WHERE WORLDS COLLIDE</a>
                </h5>
                <p class="text-links">
                    Art / Design
                </p>
            </figcaption>
        </figure>
        <figure class="portfolio-item art design"
                data-background="{{asset('website/')}}/wp-content/uploads/sites/30/2018/03/41-1.jpg">
            <a href="{{asset('website/')}}/wp-content/uploads/sites/30/2018/03/41-1.jpg" class="lightbox-link"
               title="WHERE DAYS ARE DARK"></a>
            <figcaption>
                <h5 class="item-title">
                    <a href="../fwp_project/where-days-are-dark/index.html">WHERE DAYS ARE DARK</a>
                </h5>
                <p class="text-links">
                    Art / Design
                </p>
            </figcaption>
        </figure>
        <figure class="portfolio-item art design" data-background="../wp-content/uploads/sites/30/2018/03/51.jpg">
            <a href="../wp-content/uploads/sites/30/2018/03/51.jpg" class="lightbox-link"
               title="WE WILL STAND TALL"></a>
            <figcaption>
                <h5 class="item-title">
                    <a href="../fwp_project/we-will-stand-tall/index.html">WE WILL STAND TALL</a>
                </h5>
                <p class="text-links">
                    Art / Design
                </p>
            </figcaption>
        </figure>
        <figure class="portfolio-item art design" data-background="../wp-content/uploads/sites/30/2018/03/91.jpg">
            <a href="../wp-content/uploads/sites/30/2018/03/91.jpg" class="lightbox-link"
               title="HEAR MY HEART BURST AGAIN"></a>
            <figcaption>
                <h5 class="item-title">
                    <a href="../fwp_project/hear-my-heart-burst-again/index.html">HEAR MY HEART BURST AGAIN</a>
                </h5>
                <p class="text-links">
                    Art / Design
                </p>
            </figcaption>
        </figure>
        <figure class="portfolio-item art design" data-background="../wp-content/uploads/sites/30/2018/03/71.jpg">
            <a href="../wp-content/uploads/sites/30/2018/03/71.jpg" class="lightbox-link"
               title="IN YOUR HEAD THEY ARE FIGHTING"></a>
            <figcaption>
                <h5 class="item-title">
                    <a href="../fwp_project/in-your-head-they-are-fighting/index.html">IN YOUR HEAD THEY ARE
                        FIGHTING</a>
                </h5>
                <p class="text-links">
                    Art / Design
                </p>
            </figcaption>
        </figure>
        <figure class="portfolio-item art design" data-background="../wp-content/uploads/sites/30/2018/03/61.jpg">
            <a href="../wp-content/uploads/sites/30/2018/03/61.jpg" class="lightbox-link" title="LET THE SKY FALL"></a>
            <figcaption>
                <h5 class="item-title">
                    <a href="../fwp_project/let-the-sky-fall/index.html">LET THE SKY FALL</a>
                </h5>
                <p class="text-links">
                    Art / Design
                </p>
            </figcaption>
        </figure>
        <figure class="portfolio-item art design" data-background="../wp-content/uploads/sites/30/2018/03/81.jpg">
            <a href="../wp-content/uploads/sites/30/2018/03/81.jpg" class="lightbox-link" title="WHEN IT CRUMBLES"></a>
            <figcaption>
                <h5 class="item-title">
                    <a href="../fwp_project/when-it-crumbles/index.html">WHEN IT CRUMBLES</a>
                </h5>
                <p class="text-links">
                    Art / Design
                </p>
            </figcaption>
        </figure>
    </div>
</main>
<footer id="footer">

    <small>© Copyright. AchtungThemes &amp; FastWP 2018
    </small>


    <div class="text-light small text-links">
        <a href="index.html#">Facebook</a><a href="index.html#">Twitter</a><a href="index.html#">Instagram</a></div>


</footer>

<script type='text/javascript'>
    /* <![CDATA[ */
    var wpcf7 = {
        "apiSettings": {
            "root": "http:\/\/torola.fwp.fastwp.net\/wp-json\/contact-form-7\/v1",
            "namespace": "contact-form-7\/v1"
        },
        "recaptcha": {
            "messages": {
                "empty": "Please verify that you are not a robot."
            }
        }
    };
    /* ]]> */
</script>
<script type='text/javascript'
        src='{{asset('website/wp-content/plugins/contact-form-7/includes/js/scripts.js')}}'></script>
<script type='text/javascript' src='{{asset('website/wp-content/themes/torola/assets/js/Retina.js')}}'></script>
<script type='text/javascript' src='{{asset('website/wp-content/themes/torola/assets/js/Mousewheel.js')}}'></script>
<script type='text/javascript' src='{{asset('website/wp-content/themes/torola/assets/js/jQueryEasing.js')}}'></script>
<script type='text/javascript'
        src='{{asset('website/wp-content/themes/torola/assets/js/imagesLoadedPACKAGED.js')}}'></script>
<script type='text/javascript' src='{{asset('website/wp-content/themes/torola/assets/js/plyr.js')}}'></script>
<script type='text/javascript' src='{{asset('website/wp-content/themes/torola/assets/js/Swiper.js')}}'></script>
<script type='text/javascript' src='{{asset('website/wp-content/themes/torola/assets/js/collagePlus.js')}}'></script>
<script type='text/javascript'
        src='{{asset('website/wp-content/themes/torola/assets/js/achtung.masonry.js')}}'></script>
<script type='text/javascript'
        src='{{asset('website/wp-content/themes/torola/assets/js/achtung.parallax.js')}}'></script>
<script type='text/javascript' src='{{asset('website/wp-content/themes/torola/assets/js/pinchzoom.js')}}'></script>
<script type='text/javascript'
        src='{{asset('website/wp-content/themes/torola/assets/js/achtung.lightbox.js')}}'></script>
<script type='text/javascript'
        src='{{asset('website/wp-content/themes/torola/assets/js/achtung.framework.js')}}'></script>
<script type='text/javascript' src='{{asset('website/wp-content/themes/torola/assets/js/theme.js')}}'></script>
<script type='text/javascript' src='{{asset('website/wp-content/themes/torola/assets/js/custom.js')}}'></script>
<script type='text/javascript'
        src='http://maps.googleapis.com/maps/api/js?key=AIzaSyBv5hQWPm9Yxto2Q7nqE7uyle6bScQ4vUY'></script>
<script type='text/javascript' src='{{asset('website/wp-includes/js/wp-embed.min.js')}}'></script>
<script type='text/javascript'
        src='{{asset('website/wp-content/plugins/js_composer/assets/js/dist/js_composer_front.min.js')}}'></script>

</body>

</html>
