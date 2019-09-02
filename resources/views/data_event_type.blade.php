@foreach($listEvent as $item)
    <figure class="portfolio-item art design" data-background="{{Helpers::convertJsonToArray($item->image_cover)['link']}}">
        <a href="{{Helpers::convertJsonToArray($item->image_cover)['link']}}" class="lightbox-link"
           title="{{$item->name}}"></a>
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
