<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{url('dist/app.css')}}" />
</head>
<body class="hold-transition skin-green sidebar-mini">
<div class="wrapper" id="app">
    @include('component.layout_navbar')
    @include('component.layout_sidebar')

    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
        <!-- <section class="content-header">
        <h1>
            Page Header
            <small>Optional description</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
            <li class="active">Here</li>
        </ol>
        </section> -->

        <!-- Main content -->
        <section class="content container-fluid">
          @yield('content')
        </section>
        <!-- /.content -->
    </div>

    @include('component.layout_footer')
</div>
    <script src="{{url('dist/app.js')}}"></script>
</body>
</html>