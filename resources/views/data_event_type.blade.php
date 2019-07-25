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
