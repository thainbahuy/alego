<a href="{{url('/')}}" class="logo">
    <img src="{{asset('website/wp-content/uploads/sites/images/alego_logo.png')}}" alt="Alego Story">
</a>

<a href="#" class="mob-menu">
    <span></span><span></span><span></span>
</a>
<nav class="navigation">
    <ul class="main-nav menu">
        <li class="menu-sub">
            <a href="{{route('web.first-home')}}"
               class="ajax-link">@lang('Message.Home')</a></li>
        @foreach($menu as $key => $values)
            <li class="menu-sub">
                <a href="#" class="ajax-link">{{$key}}</a>
                <ul>
                    @foreach($values as $submenu)
                        @php
                            $url= [
                                'menu' => str_slug($key),
                                'sub_menu' => str_slug($submenu->name).'-'.$submenu->sub_menu_id,
                            ];
                        @endphp
                        <li>
                            <a class="ajax-link-sub" href="{{route('web.menu.submenu',$url)}}">{{$submenu->name}}</a>
                        </li>
                    @endforeach
                </ul>

            </li>
        @endforeach
        <li class="menu-sub">
            <a href="#" class="ajax-link">@lang('Message.About')</a>
            <ul>
                <li>
                    <a class="ajax-link-sub" href="{{url('about-us')}}">@lang('Message.About-us')</a>
                </li>
                <li>
                    <a class="ajax-link-sub" href="{{url('contact-us')}}">@lang('Message.Contact')</a></li>
            </ul>
        </li>


        <li class="menu-sub">
            <a href="#" disabled class="ajax-link">@lang('Message.Language')</a>
            <ul>
                <li>
                    <a href="{{route('language',['locale'=> 'en'])}}">
                        <div class="flag flag-us"></div>
                        english
                    </a>
                </li>
                <li>
                    <a href="{{route('language',['locale'=> 'vn'])}}">
                        <div class="flag flag-vn"></div>
                        việt nam
                    </a>
                </li>

            </ul>
        </li>

    </ul>
</nav>
