<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    
    <!-- Include Editor style. -->
<script type="text/javascript" src="{{asset('/js/tinymce/tinymce.min.js')}}"></script>
</head>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'MMS') }}</title>

    <!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'MMS') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                        <li class="dropdown"><a href="{{ url('/home') }}">Dashboard</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                Home <span class="caret"></span>
                            </a>


                            <ul class="dropdown-menu" role="menu">
                              <li><a href="{{ url('pages/create') }}">Add pages</a></li>
                                <li><a href="{{ url('pages') }}">Show pages</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                About us <span class="caret"></span>
                            </a>


                            <ul class="dropdown-menu" role="menu">
                              <li><a href="{{ url('pages/create') }}">Add pages</a></li>
                                <li><a href="{{ url('pages') }}">Show pages</a></li>
                            </ul>
                        </li>
                      <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                Contact <span class="caret"></span>
                            </a>


                            <ul class="dropdown-menu" role="menu">
                              <li><a href="{{ url('pages/create') }}">Add pages</a></li>
                                <li><a href="{{ url('pages') }}">Show pages</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                Services <span class="caret"></span>
                            </a>


                            <ul class="dropdown-menu" role="menu">
                              <li><a href="{{ url('pages/create') }}">Add pages</a></li>
                                <li><a href="{{ url('pages') }}">Show pages</a></li>
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                Add users <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('registers') }}">Add new users</a></li>
                                <li><a href="{{ url('deleteuser') }}">Manage users</a></li>
                            </ul>
                        </li>

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>

                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
        @yield('content')
    </div>



    <!-- Scripts -->
    <script>
    tinymce.init({
  selector: 'textarea',
  height: 100,
  menubar: false,
  branding: false,
  toolbar: ' undo redo |  formatselect | bold italic backcolor  | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat',
  
 
});
    </script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
