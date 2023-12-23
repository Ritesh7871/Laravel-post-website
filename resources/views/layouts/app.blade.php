<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posty</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body class="bg-gray-200">
    <nav class="navbar navbar-expand-lg bg-body-tertiary mb-4">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active"href="/">Home</a>
              </li>
              @auth
              <li class="nav-item">
                <a class="nav-link" href="{{route('dashboard')}}">Dashboard</a>
              </li>
              <li class="nav-item">
                <a class="nav-link"href="{{route('posts')}}">Post</a>
              </li>
              @endauth
            </ul>
            <ul class="navbar-nav me-right mb-2 mb-lg-0">
              @auth 
                  <li class="nav-item">
                    <a class="nav-link" href="">{{ auth()->user()->name}}</a>
                  </li>
                  
                  <li class="nav-item">
                    <form action="{{route('logout')}}" method="post" class="mt-1 px-3">
                      @csrf 
                      <button class="btn btn-sm">Logout</button>
                  </form>
                  </li>
              @endauth

              @guest 
                  <li class="nav-item">
                    <a class="nav-link"href="{{route('login')}}">Login</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link"href="{{route('register')}}">Register</a>
                  </li>
              @endguest
              </ul>
        
      </nav>
    @yield('content')
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>