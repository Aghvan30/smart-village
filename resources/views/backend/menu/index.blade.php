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
                            <a href="{{route('menus.create')}}"
                               class="btn btn-primary">{{__('messages.add_menu')}}</a>
                            <table class="table table-striped table-bordered" id="dt">

                                <thead class="text-primary">
                                <tr>
                                    <th>id</th>
                                    <th>{{__('messages.name')}}</th>
                                    <th>Parent id</th>
                                    <th>{{__('messages.link')}}</th>
                                    <th>icon</th>
                                    <th>image</th>
                                    <th>{{__('messages.edit')}}</th>
                                    <th>{{__('messages.delete')}}</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(!empty($menus))
                                    @foreach($menus as $key=>$menu)
{{--                                        @php--}}
{{--                                        dd($menu);--}}
{{--                                            @endphp--}}
                                        <tr>
                                            <td>{{$menu->id}}</td>

                                            <td>{{$menu->name}}</td>
                                            <td>@if(!empty($menu->parent->name)){{$menu->parent->name}}@endif</td>
                                            <td>{{$menu->link}}</td>
                                            <td>{{$menu->icon}}</td>
                                            <td>
                                                <img src="{{asset('upload/menu/'.$menu->image)}}" style="width: 100px;height: 100px;">
                                            </td>

                                            <td>
                                                <a href="{{route('menus.edit',$menu->id)}}"
                                                   class="btn btn-success">{{__('messages.edit')}}</a>
                                            </td>
                                            <td>
                                                <form action="{{route('menus.destroy', $menu->id)}}" method="post">
                                                    @method('DELETE')
                                                    @csrf
                                                    <input type="hidden" name="_id" value="{{$menu->id}}">
                                                    <button type="button" class="btn btn-danger delete">{{__('messages.delete')}}</button>
                                                    <input type="hidden" name="url" value="deletedmenu">
                                                </form>
                                            </td>

                                        </tr>

                                    @endforeach
                                @endif
                                </tbody>
                                <tfoot class="text-primary">
                                <tr>
                                    <th>id</th>
                                    <th>{{__('messages.name')}}</th>
                                    <th>Parent id</th>
                                    <th>{{__('messages.link')}}</th>
                                    <th>icon</th>
                                    <th>Image</th>
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
