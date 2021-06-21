@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('messages.add_menu') }}</div>

                    <div class="card-body">
                        <form method="post" action="{{route('menus.store')}}" enctype="multipart/form-data">
                            @method('POST')
                            @csrf
                            <div class="form-group row">
                                <input type="hidden" name="id" value="">
                                <label class="col-lg-3 col-form-label form-control-label">{{__('messages.name')}}</label>
                                <div class="col-lg-9">
                                    <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" value="{{old('name')}}"/>
                                    @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">

                                <label class="col-lg-3 col-form-label form-control-label" for="parent">{{__('messages.parent_name')}}
                                   </label>
                                <div class="col-lg-9">
                                    <select class="form-control" type="text" name="parent_id" id="parent">
                                        <option value="">{{__('messages.select_menu')}}</option>
                                        @foreach($parents as $key=> $parent)
                                            <option value="{{$key}}">{{$parent}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">

                                <label class="col-lg-3 col-form-label form-control-label" for="link">{{__('messages.link')}}</label>
                                <div class="col-lg-9">
                                    <input class="form-control @error('link') is-invalid @enderror" type="text" id="link" name="link" value="{{old('link')}}"/>
                                    @error('link')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">{{__('messages.images')}}</label>
                                <div class="col-lg-9">
                                    <input type="file" name="file" class="form-control @error('image') is-invalid @enderror">
                                    @error('image')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
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


