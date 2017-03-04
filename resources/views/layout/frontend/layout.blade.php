<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> {{ isset($name) ? $name : 'Default' }} </title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('assets/theme/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" >

    <!-- MetisMenu CSS -->
    <link href="{{ asset('assets/theme/vendor/metisMenu/metisMenu.min.css') }}" rel="stylesheet" >

    <!-- Custom CSS -->
    <link href="{{ asset('assets/theme/dist/css/sb-admin-2.css') }}" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="{{ asset('assets/theme/vendor/morrisjs/morris.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ asset('assets/theme/vendor/font-awesome/css/font-awesome.min.css') }} " rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <!-- The mobile navbar-toggle button can be safely removed since you do not need it in a non-responsive implementation -->
        <a class="navbar-brand" href="#">Project name</a>
      </div>
      <!-- Note that the .navbar-collapse and .collapse classes have been removed from the #navbar -->
      <div id="navbar">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#contact">Contact</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li role="separator" class="divider"></li>
              <li class="dropdown-header">Nav header</li>
              <li><a href="#">Separated link</a></li>
              <li><a href="#">One more separated link</a></li>
            </ul>
          </li>
        </ul>
        <form class="navbar-form navbar-left">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
          </div>
          <button type="submit" class="btn btn-default">Submit</button>
        </form>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#">Link</a></li>
          <li><a href="#">Link</a></li>
          <li><a href="#">Link</a></li>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
</nav>
    
<div class="frontend-container">
    <!-- content -->

        @yield('content')

    <!-- #end -->
</div>

    <!-- jQuery -->
    <script src="{{ asset('assets/theme/vendor/jquery/jquery.min.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('assets/theme/vendor/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{ asset('assets/theme/vendor/metisMenu/metisMenu.min.js') }}"></script>

    <!-- Morris Charts JavaScript -->
    <script src="{{ asset('assets/theme/vendor/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('assets/theme/vendor/morrisjs/morris.min.js') }}"></script>
    <script src="{{ asset('assets/theme/data/morris-data.js') }}"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{ asset('assets/theme/dist/js/sb-admin-2.js') }}"></script>

</body>

</html>
