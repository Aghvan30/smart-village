@foreach($auss as $aus)
    <div class="nav-tt">
        <p>{{$aus->menu->name}}</p>
{{--        <h2>{{$aus->short_content}}.</h2>--}}
    </div>

    <q>
        <b>Lorem</b>
        <p>{!!$aus->contents!!}</p>
        {{--                <a href="https://artvillagedesign.com/clients/testimonials/woodland/" class="link">Show full review</a>--}}
    </q>
@endforeach
