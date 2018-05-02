<!DOCTYPE html>
<html lang="en">
<head>

     <title>MMS - Maritime Industry</title>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="Tooplate">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="{{asset('css\bootstrap.min.css')}}">
     <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
     <link rel="stylesheet" href="{{asset('css/animate.css')}}">
     <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">
     <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="{{asset('css/tooplate-style.css')}}">

</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>

          </div>
     </section>


     <!-- HEADER -->
     <header>
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-5">
                         <p>Welcome to Maritime Industry</p>
                    </div>

                    <div class="col-md-8 col-sm-7 text-align-right">
                         <span class="phone-icon"><i class="fa fa-phone"></i> 01 370132 - 01 363 878 </span>
                         <span class="date-icon"><i class="fa fa-calendar-plus-o"></i> 6:00 AM - 10:00 PM (Mon-Fri)</span>
                         <span class="email-icon"><i class="fa fa-envelope-o"></i> <a href="#">info@sallaummms.com</a></span>
                    </div>

               </div>
          </div>
     </header>


     <!-- MENU -->
     <section class="navbar navbar-default navbar-static-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a href="{{url('/')}}"><img src="{{asset('images/logo.png')}}" class="navbar-brand" style="width:10% height:10%"></a>

               </div>


               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">

                         <li><a href="{{url('/')}}" class="smoothScroll">Home</a></li>
                         <li><a href="#about" class="smoothScroll">About Us</a></li>
                         <li class="dropdown">
                           <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                           Services<span class="caret"></span>
                            </a>
                           <ul class="dropdown-menu" role="menu">
                             @foreach($pages as $page)
                                <li><a href="{{ url('pages', $page->id) }}">{{$page->title}}</a></li>
                                @endforeach
                           </ul>
                         </li>
                         <li><a href="#google-map" class="smoothScroll">Contact</a></li>
                         @if (Auth::guest())
                         <li class="appointment-btn"><a href="" data-toggle="modal" data-target="#exampleModal" >LogIn</a></li>
                         @else
                         <li class="appointment-btn"><a href="{{url('home')}}" >{{Auth::user()->name}}</a></li>
                         @endif
                    </ul>
               </div>

          </div>
     </section>


     <!-- Modal -->
     <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
       <div class="modal-dialog" role="document">
         <div class="modal-content">
           <div class="modal-header">
             <h5 class="modal-title" id="exampleModalLabel">Please LogIn</h5>
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
             </button>
           </div>
           <div class="modal-body">
             <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                 {{ csrf_field() }}

                 <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                     <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                     <div class="col-md-6">
                         <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                         @if ($errors->has('email'))
                             <span class="help-block">
                                 <strong>{{ $errors->first('email') }}</strong>
                             </span>
                         @endif
                     </div>
                 </div>

                 <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                     <label for="password" class="col-md-4 control-label">Password</label>

                     <div class="col-md-6">
                         <input id="password" type="password" class="form-control" name="password" required>

                         @if ($errors->has('password'))
                             <span class="help-block">
                                 <strong>{{ $errors->first('password') }}</strong>
                             </span>
                         @endif
                     </div>
                 </div>

                 <div class="form-group">
                     <div class="col-md-6 col-md-offset-4">
                         <div class="checkbox">
                             <label>
                                 <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                             </label>
                         </div>
                     </div>
                 </div>

                 <div class="form-group">
                     <div class="col-md-8 col-md-offset-4">
                         <button type="submit" class="btn btn-primary">
                             Login
                         </button>
                     </div>
                 </div>
             </form>
           </div>
         </div>
       </div>
     </div>

     <!-- SCRIPTS -->
          <script src="{{asset('js/jquery.js')}}"></script>
          <script src="{{asset('js/bootstrap.min.js')}}"></script>
          <script src="{{asset('js/jquery.sticky.js')}}"></script>
          <script src="{{asset('js/jquery.stellar.min.js')}}"></script>
          <script src="{{asset('js/wow.min.js')}}"></script>
          <script src="{{asset('js/smoothscroll.js')}}"></script>
          <script src="{{asset('js/owl.carousel.min.js')}}"></script>
          <script src="{{asset('js/custom.js')}}"></script>

          <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
