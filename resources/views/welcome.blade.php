<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.79.0">
    <title>Ciclismo</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/cover/">

    

    <!-- Bootstrap core CSS -->
<link href="https://getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/5.0/examples/cover/cover.css" rel="stylesheet">
  </head>
  <body class="d-flex h-100 text-center text-white bg-dark">
    
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="mb-auto">
    <div>
      <h3 class="float-md-start mb-0">Ciclismo</h3>
      <nav class="nav nav-masthead justify-content-center float-md-end">
        <a class="nav-link active" href="#">Login</a>
        <a class="nav-link" href="#">Contacto</a>
      </nav>
    </div>
  </header>

  <main class="px-3">
    <h1>Ciclismo.</h1>
    <p class="lead">
    @if (Route::has('login'))
                <div >
                    @auth
                       <a href="{{ url('/dashboard') }}" class="btn btn-lg btn-secondary fw-bold border-white bg-white">Entrar</a>
                    @else
                       <a href="{{ route('login') }}" class="btn btn-lg btn-secondary fw-bold border-white bg-white">Login</a>
                    @endauth
                </div>
            @endif

    </p>
  </main>

  <footer class="mt-auto text-white-50">
  </footer>
    </div>
  </body>
</html>