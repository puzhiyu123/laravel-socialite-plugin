<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('page-title') - George Pu Social Login</title>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.0.0/bootstrap-social.min.css">
<style>
    body {
        padding-top: 73px;
    }
    .social-button {
        text-align: center;
    }
    ul {
        list-style-type: none;
    }
    li {
        margin-bottom: 3px;
    }
</style>
</head>
<body>
<div id="navbar" class="collapse navbar-collapse">
    <ul class="nav navbar-nav navbar-right">
        @if(auth()->check())
            @include('partials.user-menu')
        @else
            <li>
                <a href="{{ action('LoginController@showLoginPage') }}">
                    Sign In <i class="fa fa-sign-in"></i>
                </a>
            </li>
        @endif
        <li>
            <a href="{{ action('LoginController@showLoginPage') }}">Sign In <i class="fa fa-sign-in"></i></a>
        </li>
    </ul>
</div>
<div class="container">
    @yield('page-content')
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>
