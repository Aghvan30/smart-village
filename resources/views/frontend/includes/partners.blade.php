<div class="nav-tt">
    <p>{{$pts['menu']->name}}</p>

    <h2>Featured by</h2>
</div>
@foreach($pts['partners'] as $pt)

    <div class="nav-press-sl">

        <a target="_blank"
           href="{{$pt->link}}">
            <img data-pin-nopin="true" alt=""
                 src="{{asset('upload/'.$pt->image)}}">
        </a>


    </div>
@endforeach
