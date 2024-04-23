<!doctype html>
<html lang="en" data-bs-theme="dark">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Create Account</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">

    

    <!-- Bootstrap core CSS -->
    @include('libraries.styles')

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
    @include('libraries.signin')
  </head>
  <body class="text-center bg-dark">
    
<main class="form-signin">
  <form action="{{ route('users.store') }}" method="POST">
    @csrf
    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-database-fill" viewBox="0 0 16 16">
        <path d="M3.904 1.777C4.978 1.289 6.427 1 8 1s3.022.289 4.096.777C13.125 2.245 14 2.993 14 4s-.875 1.755-1.904 2.223C11.022 6.711 9.573 7 8 7s-3.022-.289-4.096-.777C2.875 5.755 2 5.007 2 4s.875-1.755 1.904-2.223"/>
        <path d="M2 6.161V7c0 1.007.875 1.755 1.904 2.223C4.978 9.71 6.427 10 8 10s3.022-.289 4.096-.777C13.125 8.755 14 8.007 14 7v-.839c-.457.432-1.004.751-1.49.972C11.278 7.693 9.682 8 8 8s-3.278-.307-4.51-.867c-.486-.22-1.033-.54-1.49-.972"/>
        <path d="M2 9.161V10c0 1.007.875 1.755 1.904 2.223C4.978 12.711 6.427 13 8 13s3.022-.289 4.096-.777C13.125 11.755 14 11.007 14 10v-.839c-.457.432-1.004.751-1.49.972-1.232.56-2.828.867-4.51.867s-3.278-.307-4.51-.867c-.486-.22-1.033-.54-1.49-.972"/>
        <path d="M2 12.161V13c0 1.007.875 1.755 1.904 2.223C4.978 15.711 6.427 16 8 16s3.022-.289 4.096-.777C13.125 14.755 14 14.007 14 13v-.839c-.457.432-1.004.751-1.49.972-1.232.56-2.828.867-4.51.867s-3.278-.307-4.51-.867c-.486-.22-1.033-.54-1.49-.972"/>
    </svg>
    <h1 class="h3 mb-3 fw-normal mt-2"><b>Create Account</b></h1>
    @if ($errors->any())
        <p class="mb-2"> Please fill out all fields </p>
    @endif

    <div class="form-floating">
      <input type="text" class="form-control up" id="floatingInput" placeholder="Your Name" name="name">
      <label for="name">First Name</label>
    </div>
    <div class="form-floating">
        <input type="email" class="form-control mid" id="floatingInput" placeholder="name@example.com" name="email">
        <label for="email">Email address</label>
      </div>
    <div class="form-floating">
      <input type="password" class="form-control down" id="floatingPassword" placeholder="Password" name="password">
      <label for="password">Password</label>
    </div>

    <button class="w-100 btn btn-lg btn-secondary fw-bold border-white bg-white text-dark" type="submit">Register</button>
    <p class="mt-4  mb-3 text-muted">&copy;P.S.O - 2024</p>
  </form>
</main>


    
  </body>
</html>
