<ul>
    @foreach ($menus as $menu)
        <li>{{ $menu->name }}</li>
        <ul>
            @foreach ($menu->childs as $child)
                @include('frontend.includes.submenu', ['sub_menu' => $child])
            @endforeach
        </ul>
    @endforeach
</ul>
