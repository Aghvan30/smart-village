@extends('layouts.main')

@section('content')
    <div class="container" xmlns="http://www.w3.org/1999/html">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">

                    <div class="card-header">{{ __('messages.Menus') }}</div>
                    @if (Session::has('success'))
                        <div class="alert alert-success">{{ Session::get('success') }}</div>
                    @endif
                    @if (Session::has('danger'))
                        <div class="alert alert-danger">{{ Session::get('danger') }}</div>
                    @endif
                    <div id="message_success" style="display:none;" class="alert alert-sm alert-success">Status Enabled</div>
                    <div id="message_error" style="display:none;" class="alert alert-sm alert-danger">Status Disabled</div>
                    <div class="card-body">
                        <div border="1" class="table-responsive">
                            <a href="{{route('banner.create')}}"
                               class="btn btn-primary">{{__('messages.add_slider')}}</a>
                            <table class="table table-striped table-bordered" id="dt">

                                <thead class="text-primary">
                                <tr>
                                    <th>ID</th>
                                    <th>{{__('messages.title')}}</th>
                                    <th>{{__('messages.link')}}</th>
                                    <th>{{__('messages.images')}}</th>
                                    <th>{{__('messages.status')}}</th>
                                    <th>{{__('messages.edit')}}</th>
                                    <th>{{__('messages.delete')}}</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(!empty($banners))
                                    @foreach($banners as $banner)
                                        <tr>
                                            <td>{{$banner->id}}</td>

                                            <td>{{$banner->title}}</td>
                                            <td>{{$banner->video_path}}</td>
                                            <td>
                                                <img src="{{asset('upload/banner/'.$banner->image)}}" style="width: 100px;height: 100px;">
                                            </td>
                                            <td>
                                                <input type="checkbox" class="BannerStatus btn btn-success" rel="{{$banner->id}}"
                                                       data-toggle="toggle" data-on="Enabled" data-of="Disabled" data-onstyle="success" data-offstyle="danger"
                                                       @if($banner['status']=="active") checked @endif>
                                                <div id="myElem" style="display:none;" class="alert alert-success">Status Enabled</div>
                                            </td>

                                            <td>
                                                <a href="{{route('banner.edit',$banner->id)}}"
                                                   class="btn btn-success">{{__('messages.edit')}}</a>
                                            </td>

                                            <td>
                                                <form action="{{route('banner.destroy',$banner->id)}}" method="post">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="submit" class="btn btn-danger">{{__('messages.delete')}}</button>
                                                </form>
                                            </td>

                                        </tr>

                                    @endforeach
                                        @endif
                                </tbody>
                                <tfoot class="text-primary">
                                <tr>
                                    <th>ID</th>
                                    <th>{{__('messages.title')}}</th>
                                    <th>{{__('messages.link')}}</th>
                                    <th>{{__('messages.images')}}</th>
                                    <th>{{__('messages.status')}}</th>
                                    <th>{{__('messages.edit')}}</th>
                                    <th>{{__('messages.delete')}}</th>
                                </tr>
                                </tfoot>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

