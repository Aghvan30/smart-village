@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('messages.edit') }}</div>
                    <div class="card-header">{{ __('messages.Menus') }}</div>
                    @if (Session::has('success'))
                        <div class="alert alert-success">{{ Session::get('success') }}</div>
                    @endif
                    @if (Session::has('danger'))
                        <div class="alert alert-danger">{{ Session::get('danger') }}</div>
                    @endif
                    <div class="card-body">

                        <form method="post" action="{{route('pages.update', $edit->id)}}">
                            @method('PUT')
                            @csrf

                            <div class="form-group row">

                                <label class="col-lg-9 col-form-label form-control-label"
                                       for="parent">{{__('messages.parent_name')}}</label>
                                <div class="col-lg-12">
                                    <select class="form-control" type="text" name="menu_id" id="menu_id">
                                        <option value="">{{__('messages.select_menu')}}</option>
                                        @foreach($edits as $key=> $parent)
                                            <option value="{{$key}}" @if($key == $edit->menu_id) {{'selected'}}@endif>{{$parent}}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">

                                <label
                                    class="col-lg-9 col-form-label form-control-label">{{__('messages.short_content')}}</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" name="short_content"
                                           value="{{$edit->short_content}}">

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card card-outline card-info">
                                        <div class="card-header">
                                            <h3 class="card-title">
                                                {{__('messages.content')}}
                                            </h3>
                                            <!-- tools box -->
                                            <div class="card-tools">
                                                <button type="button" class="btn btn-tool btn-sm"
                                                        data-card-widget="collapse" data-toggle="tooltip"
                                                        title="Collapse">
                                                    <i class="fas fa-minus"></i></button>
                                                <button type="button" class="btn btn-tool btn-sm"
                                                        data-card-widget="remove" data-toggle="tooltip"
                                                        title="Remove">
                                                    <i class="fas fa-times"></i></button>
                                            </div>
                                            <!-- /. tools -->
                                        </div>
                                        <!-- /.card-header -->

                                        <div class="card-body pad">
                                            <div class="mb-3">
                                                <textarea class="textarea" name="content" id="content">{{$edit->contents}}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.col-->
                            </div>
                            <div class="form-group row">

                                <label class="col-lg-9 col-form-label form-control-label"
                                       for="desc">{{__('messages.description')}}</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" id="desc" name="desc"
                                           value="{{$edit->description}}">

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

