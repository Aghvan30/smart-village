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

                    <div class="card-body">
                        <div border="1" class="table-responsive">
                            <a href="{{route('social.create')}}"
                               class="btn btn-primary">{{__('messages.social')}}</a>
                            <table class="table table-striped table-bordered" id="dt">

                                <thead class="text-primary">
                                <tr>
                                    <th>ID</th>
                                    <th>{{__('messages.name')}}</th>
                                    <th>{{__('messages.link')}}</th>
                                    <th>{{__('messages.edit')}}</th>
                                    <th>{{__('messages.delete')}}</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($socials as $social)

                                        <tr>
                                            <td>{{$social->id}}</td>

                                            <td>{{$social->name}}</td>
                                            <td>{{$social->link}}</td>

                                            <td>
                                                <a href="{{route('social.edit',$social->id)}}"
                                                   class="btn btn-success">{{__('messages.edit')}}</a>
                                            </td>
                                            <td>
                                                <form action="{{route('social.destroy',$social->id)}}" method="post">
                                                    @method('DELETE')
                                                    @csrf
                                                    <input type="hidden" name="_id" value="">
                                                    <button type="button" class="btn btn-danger delete">{{__('messages.delete')}}</button>
                                                    <input type="hidden" name="url" value="deletedmenu">
                                                </form>
                                            </td>

                                        </tr>

                                    @endforeach
                                </tbody>
                                <tfoot class="text-primary">
                                <tr>
                                    <th>ID</th>
                                    <th>{{__('messages.name')}}</th>
                                    <th>{{__('messages.link')}}</th>
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

