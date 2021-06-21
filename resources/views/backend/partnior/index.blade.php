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
                            <a href="{{route('partnior.create')}}"
                               class="btn btn-primary">{{__('messages.add_partnior')}}</a>
                            <table class="table table-striped table-bordered" id="dt">

                                <thead class="text-primary">
                                <tr>
                                    <th>ID</th>
                                    <th>{{__('messages.name')}}</th>
                                    <th>{{__('messages.link')}}</th>
                                    <th>{{__('messages.images')}}</th>
                                    <th>{{__('messages.edit')}}</th>
                                    <th>{{__('messages.delete')}}</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(!empty($partniors))
                                   @foreach($partniors as $partnior )

                                        <tr>
                                            <td>{{$partnior->id}}</td>

                                            <td>{{$partnior->name}}</td>
                                            <td>{{$partnior->link}}</td>
                                            <td>
                                                <img src="{{asset('upload/'.$partnior->image)}}" style="width: 100px;height: 100px;">
                                            </td>

                                            <td>
                                                <a href="{{route('partnior.edit',$partnior->id)}}"
                                                   class="btn btn-success">{{__('messages.edit')}}</a>
                                            </td>
                                            <td>
                                                <form action="{{route('partnior.destroy',$partnior->id)}}" method="post">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="submit" class="btn btn-danger">{{__('messages.delete')}}</button>
                                                </form>
                                            </td>

                                        </tr>

                                   @endforeach
                                @endif
                                </tbody>
                                <tfoot class="text-primary">
                                <tr>
                                    <th>ID</th>
                                    <th>{{__('messages.name')}}</th>
                                    <th>{{__('messages.link')}}</th>
                                    <th>{{__('messages.images')}}</th>
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

