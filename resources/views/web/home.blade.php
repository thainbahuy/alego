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
    @include('web.layout_common.header',['data'=>$menu])
</header>

<div id="preloader"></div>
<main id="main" class="bg-lines">
    <div class="grid lightbox" data-columns="3" data-gutter="5" data-cell-ratio="5/4" data-filter="#folioFilter">
        @foreach($listEvent as $item)
            <figure class="portfolio-item art design" data-background="{{asset($item->image_cover)}}">
                <a href="{{asset($item->image_cover)}}" class="lightbox-link"
                   title="HEAR MY HEART BURST AGAIN"></a>
                <figcaption>
                    <h5 class="item-title">
                        @php
                            $url= [
                                'event' => str_slug($item->name)."-".$item->id,
                            ];
                        @endphp
                        <a href="{{route('web.event-detail',$url)}}">{{$item->name}}</a>
                    </h5>
                    <p class="text-links">
                        {{$item->author}}
                    </p>
                </figcaption>
            </figure>
        @endforeach
    </div>
</main>
<footer id="footer">
    @include('web.layout_common.footer')
</footer>
@include('web.layout_common.footerScript')
<script src="{{asset('website/js/jquery_321/jquery-3.2.1.js')}}"></script>

{{--<script>--}}
{{--    var URL = '{{url('')}}';--}}
{{--    $(document).ready(function() {--}}
{{--        var clone = $('.portfolio-item:last').clone();--}}
{{--        console.log(clone.attr('data-background',URL+'/website/wp-content/uploads/sites/30/2018/03/21-1.jpg'));--}}
{{--        $('.lightbox').append(clone);--}}
{{--        setTimeout(function() {--}}
{{--            window.dispatchEvent(new Event('resize'));--}}
{{--        }, 300);--}}

{{--    });--}}
{{--</script>--}}
</body>

</html>
