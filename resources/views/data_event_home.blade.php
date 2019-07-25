@foreach($listEvent as $item)
    <figure class="parallax-folio-item">
        <div class="item-media background-parallax"
             data-background="{{asset($item->image_cover)}}">
        </div>
{{--        <img class="item-media background-parallax" src="{{asset($item->image_cover)}}" alt="">--}}
        <figcaption>
            <div class="item-caption-inner">
                <p class="text-links">
                    {{$item->author}}
                </p>
                <h5 class="bold uppercase">{{$item->name}}</h5>
                @php
                    $url= [
                        'event' => str_slug($item->name)."-".$item->id,
                    ];
                @endphp
                <a class="button style-3 border-2" href="{{route('web.event-detail',$url)}}">@lang('Message.Watch now')</a>
            </div>
        </figcaption>
    </figure>
@endforeach
