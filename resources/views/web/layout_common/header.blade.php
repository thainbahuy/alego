<a href="{{url('home')}}" class="logo">
    <img src="{{asset('website/wp-content/uploads/sites/images/alego_logo.png')}}" alt="Alego Story">
</a>

<a href="#" class="mob-menu">
    <span></span><span></span><span></span>
</a>
<nav class="navigation">
    <ul class="main-nav menu">
        <li class="">
            <a href="{{url('home')}}"
               class="ajax-link">Home</a></li>
        @foreach($menu as $key => $values)
            <li class="">
                <a href="#" class="ajax-link">{{$key}}</a>
                <ul>
                    @foreach($values as $submenu)
                        @php
                            $str = str_replace(' ', '-', $submenu->name);
                            $str = preg_replace('/[^A-Za-z0-9\-]/', '', $str);
                            $str = preg_replace('/-+/', '-', $str);
                            $str = $str.'.'.$submenu->sub_menu_id
                        @endphp
                        <li class="">
                            <a href="{{url($key.'/'.$str)}}">{{$submenu->name}}</a>
                        </li>
                    @endforeach
                </ul>

            </li>
        @endforeach
        <li class="">
            <a href="#" class="ajax-link">About</a>
            <ul>
                <li class="">
                    <a href="{{url('about-us')}}">about us</a>
                </li>
                <li class="">
                    <a href="#">Price</a>
                </li>
            </ul>
        </li>
        <li class="">
            <a href="{{url('contact-us')}}"
               class="ajax-link">contact</a></li>

        <li class="">
        <li class="">
            <a href="#" disabled class="ajax-link">Language</a>
            <ul>
                <li class="">
                    <a href="#">
                        <div class="flag flag-us"></div>
                        english
                    </a>
                </li>
                <li class="">
                    <a href="#">
                        <div class="flag flag-vn"></div>
                        viet nam
                    </a>
                </li>

            </ul>
        </li>

    </ul>
</nav>
