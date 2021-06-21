@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">{{ __('messages.edit') }}</div>

                    <div class="card-body">

                        <form method="post" action="{{route('social.update', $social->id)}}">
                            @method('PUT')
                            @csrf
                            <div class="form-group row">
                                <input type="hidden" name="id" value="{{$social->id}}">
                                <label class="col-lg-3 col-form-label form-control-label">{{__('messages.name')}}</label>
                                <div class="col-lg-9">
                                    <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" value="{{$social->name}}"/>
                                    @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">{{__('messages.link')}}</label>
                                <div class="col-lg-9">
                                    <input class="form-control @error('name') is-invalid @enderror" type="text" name="link" value="{{$social->link}}"/>
                                    @error('name')
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

