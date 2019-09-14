@foreach($listEvent as $item)
    @php
        $url= [
            'event' => str_slug($item->name)."-post-".$item->id,
        ];
    @endphp
    <figure>
        <a href="{{route('web.event-detail',$url)}}">
            <img src="{{Helpers::convertJsonToArray($item->image_cover)['link']}}" alt="INFINITE BLACK SKIES"/>
        </a>
        <figcaption>
            <h6 class="item-title"><a href="{{route('web.event-detail',$url)}}">{{$item->name}}</a>
            </h6>
            <p class="text-links">
                {{$item->author}}
            </p>
        </figcaption>
    </figure>
@endforeach
