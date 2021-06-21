@extends('layouts.main')

@section('content')
    <div class="container" xmlns="http://www.w3.org/1999/html">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('messages.Users')}}</div>
                    @if (Session::has('success'))
                        <div class="alert alert-success">{{ Session::get('success') }}</div>
                    @endif
                    @if (Session::has('danger'))
                        <div class="alert alert-danger">{{ Session::get('danger') }}</div>
                    @endif

                    <div class="card-body">
                        <div border="1" class="table-responsive">
                            <a href="{{route('users.create')}}"
                               class="btn btn-primary">{{__('messages.add_user')}}</a>
                            <table class="table table-striped table-bordered" id="dt">

                                <thead class="text-primary">
                                <tr>
                                    <th>id</th>
                                    <th>{{__('messages.name')}}</th>
                                    <th>{{__('messages.email')}}</th>
                                    <th>{{__('messages.edit')}}</th>
                                    <th>{{__('messages.change_password')}}</th>
                                    <th>{{__('messages.delete')}}</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(!empty($users))

                                    @foreach($users as $key=>$user)


                                        <tr>
                                            <td>{{$user->id}}</td>
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>
                                                <a href="{{route('users.edit',$user->id)}}"
                                                   class="btn btn-success">{{__('messages.edit')}}</a>
                                            </td>
                                            <td>
                                                <a href="{{url('/backend/users/editpass',$user->id)}}"
                                                   class="btn btn-primary">{{__('messages.change_password')}}</a>
                                            </td>
                                            <td>
                                                <form action="{{route('users.destroy', $user->id)}}" method="post">
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
                                    <th>id</th>
                                    <th>{{__('messages.name')}}</th>
                                    <th>{{__('messages.email')}}</th>
                                    <th>{{__('messages.edit')}}</th>
                                    <th>{{__('messages.change_password')}}</th>
                                    <th>{{__('messages.delete')}}</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
