@extends('frontend.layouts.master')
@section('content')
    @if(!empty($vil))
        <section class="srv">
            <div class="title">
                <h2>{{$vil->name}}</h2>
                <p>Event Solutions</p>
            </div>
            <div class="srv-bc">
                @if(!empty($vil->childs))
                    @foreach($vil->childs as $child)


                        <a href="{{route('village',$child->link)}}" class="srv-im"
                           style="background-image: url({{ URL::asset('upload/menu/'.$child->image)}});">

                    <span>
					<h4>{{$child->name}}</h4>
					<p>Venue Research, Show program, Coordination and more </p>
				</span>

                        </a>

                    @endforeach
                @endif
            </div>
        </section>
    @endif
    <section class="psy">
        <div class="title">
            {{--            <img src="{{asset('assets/images/title.svg">--}}
            <h2>Philosophy</h2>
        </div>
        <div class="psy-bc">
            <div>
                <p>Art Village is an event decoration & planning company that is dedicated to creating sophisticated,
                    tailored and exclusive events in the UAE. We prioritize our clients' tranquility, taking their
                    requirements, vision and budget seriously. We ensure a stress-free bespoke event, where our customer
                    is
                    treated as the most important guest. At Art Village we believe celebration is an art - the art to
                    design
                    memorable moments, the art to meticulously plan from aspiration to perfection.</p>
            </div>
            <span>
{{--				<img data-pin-nopin="true" src="themes/uploads/2020/04/psy.png">--}}
				<h4>Inaye Brito</h4>
				<p>ART VILLAGE CEO</p>
			</span>
        </div>
    </section>
    @if(!empty($kit))

        <section class="glr">
            <div class="title">
                <h2>{{$kit->name}}</h2>
                <p>Highlights from our portfolio</p>
            </div>

            <div class="glr-sl">
                @foreach($kit->childs as $kits)
                <div class="glr-im">

                    <i style="background-image: url({{ URL::asset('/upload/menu/'.$kits->image) }}"></i> <span>

					<h4><a href="index.html">{{$kits->name}}</a></h4>

				</span>
                    <div>

                        <a href="index.html" class="link">See more</a>

                    </div>

                </div>
                @endforeach
            </div>



        </section>
    @endif
    <div style="display: none;" id="averin_widget"></div>

    <section class="fow">
        <div class="title">
            <h2>{{__('messages.donate')}}</h2>
            <p>Lorem ipsum.</p>
        </div>
        <div class="fow-bc">

            <a href="/donate" class="link">{{__('messages.donate')}}</a>
            <span>
				<p>@artvillagedesign</p>
				<b> posts  |  0.4k followers</b>
			</span>
        </div>
    </section>
    <section class="lst">
        <div class="title">
            <h2>Let’s start</h2>
            <p>We'd love to hear from you</p>
        </div>
        <form action="index.html" class="ajax-form lst-form" method="post">
            <input type="hidden" name="subject" value="Home">
            <input type="hidden" name="action" value="ajax_order">
            <input type="hidden" name="pageID" value="5620">
            <input type="hidden" name="type" value="1701">
            <div class="qi">
                <input type="text" name="name" value="" required>
                <i><img class="svg" src="{{asset('images/q-name.svg')}}"></i>
                <label>Name</label>
            </div>
            <div class="qi">
                <input type="text" name="phone" required>
                <i><img class="svg" src="{{asset('images/q-phone.svg')}}"></i>
                <label>Phone number</label>
            </div>
            <div class="qi">
                <input type="text" name="email" value="" required>
                <i><img class="svg" src="{{asset('images/q-email.svg')}}"></i>
                <label>E-mail</label>
            </div>
            <button class="link">Send request</button>
            <span>
				<p>Please fill out the quick form and our specialists will contact you shortly</p>
								<p><a href="index.html">By using this form you give consent to the processing of personal information. Learn more here.</a></p>
			</span>
        </form>
    </section>


@endsection
