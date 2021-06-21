@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">{{__('messages.edit')}}</div>

                    <div class="card-body">

                        <form method="post" action="{{route('banner.update', $edit->id)}}" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="form-group row">
                                <input type="hidden" name="id" value="{{$edit->id}}">
                                <label class="col-lg-3 col-form-label form-control-label">{{__('messages.name')}}</label>
                                <div class="col-lg-9">
                                    <input class="form-control  @error('name') is-invalid @enderror" type="text" name="title" value="{{$edit->title}}"/>
                                    @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">{{__('messages.link')}}</label>
                                <div class="col-lg-9">
                                    <input class="form-control  @error('link') is-invalid @enderror" type="text" name="video_path" value="{{$edit->video_path}}"/>
                                    @error('link')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">{{__('messages.images')}}</label>
                                <div class="col-lg-9">
                                <input type="file" name="image" class="form-control  @error('image') is-invalid @enderror">
                                @error('image')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror

                                @if(!empty($edit->image))
                                    <input type="hidden" name="current_image"  value="{{$edit->image}}">

                                    <img src="{{asset('upload/banner/'.$edit->image)}}" style="width: 100px;height:100px">
                                @endif
                                </div>
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

