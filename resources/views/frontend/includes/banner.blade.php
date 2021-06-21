<div id="slides-shop" class="cover-slides">
    <ul class="slides-container">

        @foreach($banners as $banner)
            <li class="">
                <img src="{{asset('upload/banner/'.$banner->image)}}" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong></strong></h1>

                            <p class="m-b-40"></p>

                        </div>
                        <div class="cap-z">
                            <a href="projects.html" class="link">{{__('messages.our_project')}}</a>
                        </div>

                    </div>
                </div>
            </li>
        @endforeach

    </ul>
    <div class="slides-navigation">
        <a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
        <a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
    </div>
</div>
<ul class="cap-soc">
    <li><a href="https://www.youtube.com/channel/UCKtXGDV4ZyVnbc-6Okygn2g" target="_blank"><img class="svg"
                                                                                                src="{{asset('images/s-yt.svg')}}"></a>
    </li>
    <li><a href="https://www.facebook.com/artvillagedesign/" target="_blank"><img class="svg"
                                                                                  src="{{asset('images/s-fb.svg')}}"></a>
    </li>
    <li><a href="https://www.instagram.com/artvillagedesign/" target="_blank"><img class="svg"
                                                                                   src="{{asset('images/s-is.svg')}}"></a>
    </li>
    <li><a href="https://www.pinterest.com/artvillagedubai/" target="_blank"><img class="svg"
                                                                                  src="{{asset('images/s-pr.svg')}}"></a>
    </li>
    <li><a href="https://linkedin.com/company/art-village-event-design" target="_blank"><img class="svg"
                                                                                             src="{{asset('images/s-in.svg')}}"></a>
    </li>
</ul>
