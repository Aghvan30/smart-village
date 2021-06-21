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
                            <a href="{{route('pages.create')}}"
                               class="btn btn-primary">{{__('messages.add_content')}}</a>
                            <table class="table table-striped table-bordered" id="dt">

                                <thead class="text-primary">
                                <tr>
                                    <th>id</th>
                                    <th>Menu_id</th>
                                    <th>{{ __('messages.short_content')}}</th>
                                    <th>{{ __('messages.content') }}</th>
                                    <th>{{ __('messages.description') }}</th>
                                    <th>{{ __('messages.edit') }}</th>
                                    <th>{{ __('messages.delete') }}</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(!empty($pages))
                                    @foreach($pages as $key=>$page)

                                        <tr>
                                            <td>{{$page->id}}</td>

                                            <td>{{$page->menu_id}}</td>
                                            <td>{{$page->short_content}}</td>
                                            <td>{{$page->contents}}</td>
                                            <td>{{$page->description}}</td>

                                            <td>
                                                <a href="{{route('pages.edit',$page->id)}}"
                                                   class="btn btn-success">{{ __('messages.edit') }}</a>
                                            </td>
                                            <td>
                                                <form action="{{route('pages.destroy',$page->id)}}" method="post">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="submit" class="btn btn-danger">{{ __('messages.delete') }}</button>
                                                </form>
                                            </td>

                                        </tr>

                                    @endforeach
                                @endif
                                </tbody>
                                <tfoot class="text-primary">
                                <tr>
                                    <th>id</th>
                                    <th>Menu_id</th>
                                    <th>{{ __('messages.short_content')}}</th>
                                    <th>{{ __('messages.content') }}</th>
                                    <th>{{ __('messages.description') }}</th>
                                    <th>{{ __('messages.edit') }}</th>
                                    <th>{{ __('messages.delete') }}</th>
                                </tr>
                                </tfoot>
                            </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
