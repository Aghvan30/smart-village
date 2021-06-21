@extends('layouts.main')

@section('content')
    <!-- Main content -->
    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">{{__('messages.menu_detail')}}</h3>

        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-8 order-2 order-md-1">

                    <div class="row">
                        <div class="col-12">
                            @if(!empty($menu))
                                <h4>{{$menu->name}}
                                    @if(!empty($menu->allchildren))
                                        --
                                        @foreach($menu->allchildren as $info)
                                            <a href="{{$info->id}}">{{$info->name}}</a>
                                            @if(!empty($info->allchildren))
                                                --
                                                @foreach($info->allchildren as $m)
                                                    <a href="{{$m->id}}">{{$m->name}}</a>

                                                @endforeach
                                            @endif
                                        @endforeach
                                    @endif
                                </h4>

                            @endif
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- /.card-body -->
    </div>

    <!-- /.content --

@endsection

