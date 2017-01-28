<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="http://bootswatch.com/flatly/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/global.css">
    @if ( !empty($csspath) )
        <link rel="stylesheet" type="text/css" href="{{$csspath}}">
    @endif

    <!-- Scripts -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="/js/jquery.countdown.min.js"></script>
    <script type="text/javascript" src="/js/moment.js"></script>
    <script type="text/javascript" src="/js/moment-timezone-with-data.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    @if ( !empty($jspath) )
        <script src="{{ $jspath }}"></script>
    @endif
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
    <div id="app">
        <!-- Navbar -->
        <nav class="navbar navbar-default navbar-fixed-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span> 
              </button>
              <a class="navbar-brand" href="{{ url('/')}}">
              <img src="/img/spinkynew.png" height="20">
              </a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
              <ul class="nav navbar-nav">
                <li class="active"><a href="{{ url('/')}}">Home</a></li>
                <li><a href="#">Auctions</a></li>
                <li><a href="#">My Store</a></li> 
              </ul>
              <ul class="nav navbar-nav navbar-right">
                @if (Auth::guest())
                <li><a href="{{ url('/login') }}" class="hidden-md hidden-lg"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                <li class="hidden-md hidden-lg"><a href="{{ url('/register') }}">Register</a></li>
                <li class="dropdown hidden-sm hidden-xs">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        <span class="glyphicon glyphicon-log-in"></span> Login<span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu signup-form" role="menu">
                        <li>
                            <label>Username</label>
                            <input type="text" name="" placeholder="">
                        </li>
                        <li>
                            <label>Password</label>
                            <input type="text" name="" placeholder="">
                        </li>
                        <li>
                            <button class="btn btn-success btn-md">Submit</button>
                        </li>
                    </ul>
                </li>
                <li class="dropdown hidden-sm hidden-xs">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        Register<span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu signup-form" role="menu">
                        <li>
                            <label>Username</label>
                            <input type="text" name="" placeholder="">
                        </li>
                        <li>
                            <label>E-Mail</label>
                            <input type="text" name="" placeholder="">
                        </li>
                        <li>
                            <label>Password</label>
                            <input type="text" name="" placeholder="">
                        </li>
                        <li>
                            <label>Re-Enter Password</label>
                            <input type="text" name="" placeholder="">
                        </li>
                        <li>
                            <button class="btn btn-success btn-md">Submit</button>
                        </li>
                    </ul>
                </li>
                @else
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        {{ Auth::user()->username }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="{{ url('/logout') }}"
                                onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
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
        <!-- Navbar End -->
        <!-- Content Start -->
        <div id="main-content">
            @yield('content')
        </div>
        <!-- Content End -->
        <!-- Footer Start -->
        <div class="pagefooter"></div>
        <!-- Footer End -->
    </div>

    <!-- Scripts -->
    <!-- <script src="/js/app.js"></script> -->
</body>
</html>
