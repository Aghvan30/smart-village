@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('messages.social') }}</div>

                    <div class="card-body">
                        <form  action="{{route('social.store')}}" method="POST" enctype="multipart/form-data">
                            @method('post')
                            @csrf
                            <div class="form-group row">
                                <input type="hidden" name="id" value="">
                                <label class="col-lg-3 col-form-label form-control-label">{{__('messages.name')}}</label>
                                <div class="col-lg-9">
                                    <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" value="{{old('name')}}" />
                                    @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <input type="hidden" name="id" value="">
                                <label class="col-lg-3 col-form-label form-control-label">{{__('messages.link')}}</label>
                                <div class="col-lg-9">
                                    <input class="form-control @error('link') is-invalid @enderror" type="text" name="link" value="{{old('link')}}" />
                                    @error('link')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label"></label>
                                <div class="col-lg-9">
                                    <input type="reset" class="btn btn-secondary" value="{{__('messages.cancel')}}" />
                                    <input type="submit" class="btn btn-info" value="{{__('messages.save_changes')}}" />
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




