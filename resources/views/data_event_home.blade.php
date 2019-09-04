@foreach($listEvent as $item)
    <figure class="parallax-folio-item">
{{--        <div class="item-media background-parallax"--}}
{{--             data-background="{{asset($item->image_cover)}}">--}}
{{--        </div>--}}
        @php
            $url= [
                'event' => str_slug($item->name)."-post-".$item->id,
            ];
        @endphp
        <a href="{{route('web.event-detail',$url)}}">
{{--            {{Helpers::convertJsonToArray($item->image_cover)['link']}}--}}
            <img class="item-media background-parallax img-thumbnail"  src="{{Helpers::convertJsonToArray($item->image_cover)['link']}}" alt="{{$item->name}}">
        </a>
        <figcaption>
            <div class="item-caption-inner">
                <p class="text-links">
                    {{$item->author}}
                </p>
                <h5 class="bold uppercase">{{$item->name}}</h5>

                <a class="button style-3 border-2" href="{{route('web.event-detail',$url)}}">@lang('Message.Watch now')</a>
            </div>
        </figcaption>
    </figure>
@endforeach
