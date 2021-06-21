<header class="head">
    <a href="/" class="head-logo"></a>
    <a href="tel:+971585657497" class="head-phone">+971 58 565 7497</a></header>
<section class="nav">
    <div class="nav-wd">
        <ul class="nav-menu scroll">
            @php
                menu();
                 $subs = [];
            @endphp
            @foreach (menu() as $menu)
                <li @if(in_array($menu['icon'], menuLinks())) {{'data-openav='.$menu['icon']}} @endif>
                    <a href="{{$menu['link']}}">
                        <h6>{{ $menu['name'] }}</h6></a>
                    {{--                    @if (!empty($menu['childs']))--}}

                    <ul>
                        @foreach ($menu['childs'] as $key=> $child)

                            <li @if(in_array($child['icon'], menuLinks()))
                                {{'data-openav='.$child['name']}} @endif>
                                <a href="{{$child['link']}}">
                                    {{ $child['name'] }}</a>
                            </li>

                            {{--                                @if(!empty($child['icon']))--}}
                            @php
                                $subs[$child['icon']]['sub']= $child['icon'];

                                $subs[$child['icon']]['parent'] = $menu['name'];
                            @endphp
                            {{--                                @endif--}}
                        @endforeach
                    </ul>
                    {{--                    @endif--}}
                </li>
            @endforeach

        </ul>
    </div>
    <div class="nav-ct">
        @php

            @endphp
        @include('frontend.includes.submenu', array('subs' => $subs))

        <div class="nav-aus" style="display: none;">
            @php
                $auss = getSubmenuContent('aus');

            @endphp
            @include('frontend.includes.about', array('auss' => $auss))

        </div>
        <div class="nav-pts" style="display: none;">
            @php
                $pts = getPartniors('pts');
            @endphp
            @include('frontend.includes.partners', array('pts' => $pts))


        </div>
    </div>
</section>
<section class="cap">
    @php
        $banners =  getBanner();
    @endphp
    @if(!empty($banners))
        @include('frontend.includes.banner', array('banners' => $banners))
    @endif


</section>
