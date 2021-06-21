@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">{{ __('messages.edit') }}</div>

                    <div class="card-body">
                        @php
                        var_export(Session::get('danger'))
                        @endphp
                        @if (Session::has('success'))
                            <div class="alert alert-success">{{ Session::get('success') }}</div>
                        @endif
                        @if (Session::has('danger'))
                            <div class="alert alert-danger">{{ Session::get('danger') }}</div>
                        @endif
                        <form method="post" action="{{route('menus.update', $menu->id)}}" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="form-group row">
                                <input type="hidden" name="id" value="{{$menu->id}}">
                                <label class="col-lg-3 col-form-label form-control-label">{{__('messages.name')}}</label>
                                <div class="col-lg-9">
                                    <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" value="{{$menu->name}}"/>
                                    @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">

{{--                                @if(!empty($menu->allchildren))--}}
{{--                                    @foreach($menu->allchildren as $info)--}}
{{--                                        @php--}}
{{--                                            $id = $info->id;--}}
{{--                                        @endphp--}}
{{--                                    @endforeach--}}
{{--                                @endif--}}

                                <label for="parent" class="col-lg-3 col-form-label form-control-label">{{__('messages.Menu')}}</label>

                                <div class="col-lg-9">
                                    <select class="form-control" name="parent_id" id="parent" >
                                        <option value="">{{__('messages.select_menu')}}</option>

                                        @if(!empty($menu->allchildren))

                                            @foreach($menus as $key=>$val)
                                                <option value="{{ $key }}" > {{ $val }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">{{__('messages.link')}}</label>
                                <div class="col-lg-9">
                                    <input class="form-control @error('name') is-invalid @enderror" type="text" name="link" value="{{$menu->link}}"/>
                                    @error('link')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">{{__('messages.images')}}</label>
                                <div class="col-lg-9">
                                    <input type="file" name="file" class="form-control  @error('image') is-invalid @enderror">
                                    @error('image')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                @if(!empty($menu->image))
                                    <input type="hidden" name="current_image"  value="{{$menu->image}}">

                                    <img src="{{asset('upload/menu/'.$menu->image)}}" style="width: 100px;height:100px">
                                @endif

                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label"></label>
                                <div class="col-lg-9">
                                    <input type="reset" class="btn btn-secondary" value="{{__('messages.cancel')}}"/>
                                    <input type="submit" class="btn btn-info" value="{{__('messages.save_changes')}}"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

