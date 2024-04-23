<header class="p-3 mb-3 border-bottom bg-dark">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="white" class="bi bi-database-fill" viewBox="0 0 16 16">
                <path d="M3.904 1.777C4.978 1.289 6.427 1 8 1s3.022.289 4.096.777C13.125 2.245 14 2.993 14 4s-.875 1.755-1.904 2.223C11.022 6.711 9.573 7 8 7s-3.022-.289-4.096-.777C2.875 5.755 2 5.007 2 4s.875-1.755 1.904-2.223"/>
                <path d="M2 6.161V7c0 1.007.875 1.755 1.904 2.223C4.978 9.71 6.427 10 8 10s3.022-.289 4.096-.777C13.125 8.755 14 8.007 14 7v-.839c-.457.432-1.004.751-1.49.972C11.278 7.693 9.682 8 8 8s-3.278-.307-4.51-.867c-.486-.22-1.033-.54-1.49-.972"/>
                <path d="M2 9.161V10c0 1.007.875 1.755 1.904 2.223C4.978 12.711 6.427 13 8 13s3.022-.289 4.096-.777C13.125 11.755 14 11.007 14 10v-.839c-.457.432-1.004.751-1.49.972-1.232.56-2.828.867-4.51.867s-3.278-.307-4.51-.867c-.486-.22-1.033-.54-1.49-.972"/>
                <path d="M2 12.161V13c0 1.007.875 1.755 1.904 2.223C4.978 15.711 6.427 16 8 16s3.022-.289 4.096-.777C13.125 14.755 14 14.007 14 13v-.839c-.457.432-1.004.751-1.49.972-1.232.56-2.828.867-4.51.867s-3.278-.307-4.51-.867c-.486-.22-1.033-.54-1.49-.972"/>
              </svg>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <h3 class="px-2 text-white"><b>Laravel CRUD</b></h3>
            </ul>

            <div class="dropdown text-end">
                
                @auth<a href="#" class="d-block link-light text-decoration-none dropdown-toggle text-white" id="dropdownUser1"
                data-bs-toggle="dropdown" aria-expanded="false">
                <b class="me-2">Hello {{auth()->user()->name}}</b>
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="White"
                class="bi bi-person-circle" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                <path fill-rule="evenodd"
                    d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                </svg>
                </a>
                    <ul class="dropdown-menu dropdown-menu-dark bg-dark">
                        <li><a class="dropdown-item text-white" href="{{ route('logout') }}">Sign Out</a></li>
                    </ul>
                @else
                <a href="#" class="d-block link-light text-decoration-none dropdown-toggle" id="dropdownUser1"
                data-bs-toggle="dropdown" aria-expanded="false"><b>Access Content</b>
                </a>
                    <ul class="dropdown-menu dropdown-menu-dark bg-dark">
                        <li><a class="dropdown-item  text-white" href="{{ route('login') }}">Sign In</a></li>
                        <li><a class="dropdown-item text-white" href="{{ route('create') }}">Create Account</a></li>
                    </ul>
                @endauth
            </div>
        </div>
    </div>
</header>

@stack('header')