{{--<pre>--}}
{{--@php--}}

{{--    var_export($subs);--}}
{{--@endphp--}}

@foreach($subs as $sub)
    <div class="nav-{{$sub['sub']}}" style="display: none;">
        <div class="nav-tt">
            <p>{{$sub['parent']}}</p>
            <h2>{{$sub['sub']}}</h2>
        </div>
        <div class="nav-{{$sub['sub']}}-bc">
            @php
                $items = getSubmenuByMenu($sub['sub']);
            @endphp

            @foreach($items[0]->childs as $item)
                <div>
                    <a href="{{$item->link}}">
                        <i style="background-image: url({{ URL::asset('upload/menu/'.$item->image) }});"></i>
                        <span>
						<h4>{{$item->name}}</h4>
					</span>
                    </a>
                </div>
            @endforeach


        </div>
    </div>

@endforeach
