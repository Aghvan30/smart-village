@extends('frontend.layouts.master')
@section('content')
    @if(!empty($data))
{{--        <section class="acn" id="mission">--}}
{{--            <div class="title">--}}
{{--                <h2> </h2>--}}
{{--            </div>--}}
{{--            --}}{{--            <div class="acn-bc">--}}
{{--            --}}{{--                <p>Our mission is to co-plan and co-design celebrations with our clients, reflecting their personal,--}}
{{--            --}}{{--                    unique--}}
{{--            --}}{{--                    style and vision. We strive to be their ally and cooperate to create immersive environments for--}}
{{--            --}}{{--                    life’s most--}}
{{--            --}}{{--                    memorable moments</p>--}}
{{--            --}}{{--            </div>--}}
{{--        </section>--}}
        <section class="wwd" id="whatwedo">
            <div class="title">
                <h2>{{$data->menu->name}}</h2>
                <p>Planning. Design. Production</p>
            </div>
            <div class="wwd-bc">
			<span>
				<p>{!!$data->contents!!}</p>
			</span>
                <a href="https://artvillagedesign.com/services/" class="link">Donate</a>
            </div>
        </section>
    @endif
@endsection
