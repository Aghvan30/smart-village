<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Smartvillage</title>
    <!-- Begin Jekyll SEO tag v2.6.1 -->
    <title>Smartvillage</title>
    <meta name="generator" content="Jekyll v3.8.5"/>
    <meta property="og:title" content="Introduction"/>
    <meta property="og:locale" content="en_US"/>
    <meta name="description" content="AdminLTE v3 Documentaion"/>
    <meta property="og:description" content="AdminLTE v3 Documentaion"/>
    <meta property="og:site_name" content="AdminLTE v3 Documentaion"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script type="application/ld+json">
{"@type":"WebSite","url":"/","headline":"Introduction","name":"AdminLTE v3 Documentaion","description":"AdminLTE v3 Documentaion","@context":"https://schema.org"}

    </script>
    <!-- End Jekyll SEO tag -->


    <link rel="stylesheet" href="{{asset("https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700")}}">
    <link rel="stylesheet" href="{{asset("/assets/plugins/fontawesome-free/css/all.min.css")}}">
    <link rel="stylesheet" href="{{asset("assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/docs.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/highlighter.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/adminlte.min.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/adminpanel.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/jquery.dataTables.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/summernote.css")}}">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">

</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed">
<div class="wrapper">
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
            </li>
           <!-- <li class="nav-item dropdown">
                <a class="nav-link bg-info rounded dropdown-toggle" href="#" id="navbarVersionDropdown" role="button"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    v3.0
                </a>
                <div class="dropdown-menu py-0" aria-labelledby="navbarVersionDropdown">
                    <a class="dropdown-item bg-info disabled" href="#">v3.0</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{asset("https://adminlte.io/docs/2.4/installation")}}">v2.4</a>
                    <a class="dropdown-item"
                       href="{{asset("https://adminlte.io/themes/AdminLTE/documentation/index.html")}}"><= v2.3</a>
                </div>
            </li>-->
        </ul>

        <ul class="navbar-nav ml-auto">
            <!-- <li class="nav-item d-none d-sm-inline-block">
              <a href="index3.html" class="nav-link">Home</a>
            </li> -->
        </ul>

        <!-- SEARCH FORM -->
        <!-- <form class="form-check-inline ml-3">
          <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-navbar" type="submit">
                <i class="fa fa-search"></i>
              </button>
            </div>
          </div>
        </form> -->
    </nav>
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <a href="/" class="brand-link logo-switch">
            <img src="{{url('assets/img/smartvilage.jpeg')}}" alt="AdminLTE Docs Logo Small" class="brand-image-xl logo-xs">
            <img src="{{url('assets/img/smartvilage.jpeg')}}" alt="AdminLTE Docs Logo Large" class="brand-image-xs logo-xl"
                 style="left: 12px">


        </a>
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{url('assets/img/111.jfif')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">
{{--                    @php--}}
{{--                    dd(session('info')['name']);--}}
{{--                    @endphp--}}
                    @if(!empty(session('info')))
                        {{session('info')['name']}}
                    @endif
                </a>
            </div>
        </div>
        <div class="sidebar">
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar nav-child-indent flex-column" data-widget="treeview" role="menu">


                    <li class="nav-item  ">


                        <a href="{{action([App\Http\Controllers\Backend\UserController::class, 'index'])}}" class="nav-link ">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                {{__('messages.manage_users')}}

                            </p>
                        </a>
                    </li>


                    <li class="nav-item ">

                        <a href="{{action([App\Http\Controllers\Backend\MenuController::class, 'index'])}}" class="nav-link">
                            <i class="nav-icon fas fa-link"></i>
                            <p>
                                {{__('messages.manage_menus')}}

                            </p>
                        </a>
                    </li>


                    <li class="nav-item  ">


                        <a href="{{action([App\Http\Controllers\Backend\PageController::class, 'index'])}}" class="nav-link ">
                            <i class="nav-icon fas fa-copy"></i>
                            <p>
                                {{__('messages.content_menus')}}

                            </p>
                        </a>


                    </li>


                    <li class="nav-item">


                        <a href="{{action([App\Http\Controllers\Backend\PartniorController::class, 'index'])}}" class="nav-link ">
                            <i class="nav-icon fas fa-handshake"></i>
                            <p>
                                {{__('messages.partniors')}}

                            </p>
                        </a>
                    </li>


                            <li class="nav-item">
                                <a href="{{action([App\Http\Controllers\Backend\SocialController::class, 'index'])}}" class="nav-link ">
                                    <i class="nav-icon fas fa-copy"></i>
                                    <p>
                                        {{__('messages.social')}}

                                    </p>
                                </a>
                            </li>
                    <li class="nav-item">
                        <a href="{{action([App\Http\Controllers\Backend\BannerController::class, 'index'])}}" class="nav-link ">
                            <i class="nav-icon fas fa-copy"></i>
                            <p>
                                {{__('messages.slider')}}

                            </p>
                        </a>
                    </li>

                </ul>
            </nav>
        </div>
    </aside>
    <div class="content-wrapper px-4 py-2">
        <div class="content-header">

        </div>

        <div class="content px-2">
            @yield('content')

        </div>
    </div>
    <footer class="main-footer">
        <div class="float-right d-none d-sm-inline">
            v3.0.5
        </div>
        <strong>Copyright &copy; 2014-2020 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
    </footer>
</div>
<script src="{{asset("assets/plugins/jquery/jquery.min.js")}}"></script>
<script src="{{asset("assets/plugins/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
<script src="{{asset("assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js")}}"></script>
<script src="{{asset("assets/js/adminlte.min.js")}}"></script>
<script src="{{asset("assets/js/jquery.dataTables.js")}}"></script>
<script src="{{asset("assets/js/init.js")}}"></script>
<script src="{{asset("assets/js/summernote.js")}}"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-toggle/2.2.2/css/bootstrap-toggle.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-toggle/2.2.2/js/bootstrap-toggle.js"></script>

<script>
    $(document).ready(function() {
        $('#dt').DataTable();
        $('.textarea').summernote()




            //Update Banner status
            $(".BannerStatus").change(function () {
                var id = $(this).attr('rel');
                if ($(this).prop("checked") == true) {
                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        type: 'post',
                        url: '/backend/update-banner-status',
                        data: {status: 'active', id: id},
                        success: function (data) {
                            $("#message_success").show();
                            setTimeout(function () {
                                $("#message_success").fadeOut('slow');
                            }, 2000);
                        }, error: function () {
                            alert("Error");
                        }
                    });

                } else {
                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        type: 'post',
                        url: '/backend/update-banner-status',
                        data: {status: 'deactive', id: id},
                        success: function (resp) {
                            $("#message_error").show();
                            setTimeout(function () {
                                $("#message_error").fadeOut('slow');
                            }, 2000);
                        }, error: function () {
                            alert("Error");
                        }
                    });
                }
            });
    } );
</script>
</body>
</html>
