<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Home Page</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/cover/">

    

    <!-- Bootstrap core CSS -->
    @include('libraries.styles')

    
    <!-- Custom styles for this template -->
    @include('libraries.cover')
  </head>
  <body class="d-flex h-100 text-center text-white bg-dark">
    
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="mb-auto">
    <div>
      <h3 class="float-md-start mb-0">Welcome</h3>
      <nav class="nav nav-masthead justify-content-center float-md-end">
        <a class="nav-link active" aria-current="page" href="{{route('index')}}">Home</a>
        <a class="nav-link" href="https://github.com/Paulo-Sergio-Oliveira?tab=repositories">Other Projects</a>
      </nav>
    </div>
  </header>

  <main class="px-3">
    <h1>Simple CRUD with Laravel 11</h1>
    <p class="lead">This is my first Laravel application, it's kind of simple, but I put so much effort on it. Hope you enjoy :D</p>
    <p class="lead">
      <a href="{{route('employee.index')}}" class="btn btn-lg btn-secondary fw-bold border-white bg-white">Let's Go!</a>
    </p>
  </main>

  <footer class="mt-auto text-white-50">
    <p>Application made by <a href="https://www.linkedin.com/in/paulo-sergio-vieira-de-oliveira-695200281/" class="text-white text-decoration-none">Paulo Sergio Vieira de Oliveira</a>.</p>
  </footer>
</div>


    
  </body>
</html>
