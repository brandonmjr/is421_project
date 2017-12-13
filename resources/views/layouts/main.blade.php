<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <script src="https://use.fontawesome.com/2ee5e95f64.js"></script>
    <script src="https://use.fontawesome.com/732a945059.js"></script>
    <title>@yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="/todoapp_is421_brandonmajor/public/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <style>
      body {
        padding-top: 54px;
      }
      @media (min-width: 992px) {
        body {
          padding-top: 56px;
        }
      }

    </style>

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="/todoapp_is421_brandonmajor/public/">IS421 Projects</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <!--li class="nav-item active">
              <a class="nav-link" href="/todoapp_is421_brandonmajor/public/">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/todoapp_is421_brandonmajor/public/tasks">Tasks</a>
            </li-->

            @if(Auth::guest())
              <li class="nav-item">
                <a class="nav-link" href="{{route('login')}}">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('register')}}">Register</a>
              </li>
            @else
              <li class="nav-item">
                <a class="nav-link" href="{{route('logout')}}">Logout</a>
              </li>
            @endif

          </ul>
        </div>
      </div>
    </nav>
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
    <!-- Page Content -->
    @yield('content')
          </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript -->
    <script src="/todoapp_is421_brandonmajor/public/js/jquery.min.js"></script>

    <script src="/todoapp_is421_brandonmajor/public/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
