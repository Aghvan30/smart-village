@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('messages.change_password')." ".$edit->name }} </div>

                    <div class="card-body">
                        @if (Session::has('danger'))
                            <div class="alert alert-danger">{{ Session::get('danger') }}</div>
                        @endif
                    </div>

                        <form  method="post" action="{{route('changepass')}}">
                            @csrf
                            <div class="form-group row">
                                <input type="hidden" name="id" value="{{$edit->id}}">
                                <label class="col-lg-3 col-form-label form-control-label">{{__('messages.old_password')}}</label>
                                <div class="col-lg-9">
                                    <input class="form-control" type="text" name="old_pass" id="old_pass" value="" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <input type="hidden" name="id" value="{{$edit->id}}">
                                <label class="col-lg-3 col-form-label form-control-label">{{__('messages.new_password')}}</label>
                                <div class="col-lg-9">
                                    <input class="form-control" type="text" name="new_pass" id="new_pass" value="" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <input type="hidden" name="id" value="{{$edit->id}}">
                                <label class="col-lg-3 col-form-label form-control-label">{{__('messages.confirm_password')}}</label>
                                <div class="col-lg-9">
                                    <input class="form-control" type="text" name="c_pass" id="c_pass" value="" />
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

