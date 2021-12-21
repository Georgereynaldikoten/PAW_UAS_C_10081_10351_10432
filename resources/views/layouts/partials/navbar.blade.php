<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <link href="{{ asset('/style.css') }}" type="text/css" rel="stylesheet">

    <title>Dashboard</title>
</head>
<body>
    <!-- Navbar -->
    @guest
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #314D63">
        <div class="container">
            
        <img src="{{ asset ('/images/LOGO.png') }}" alt="logo" class="float-left">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#" data-bs-toggle="modal"
                            data-bs-target="#modalForm">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"data-bs-toggle="modal" 
                            href="#">About Us</a>
                   
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Order
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item"  data-bs-toggle="modal" 
                            href="#" >My Order</a></li>
                            <li><a class="dropdown-item" data-bs-toggle="modal" 
                            href="#" >New Order</a></li>

                        </ul>
                    </li>
                  
                    
        <div class="text-end">
          <a href="{{ route('login.perform') }}" class="btn btn-outline-light me-100">Login</a>
          <a href="{{ route('register.perform') }}" class="btn btn-primary">Sign-up</a>
        </div>
      @endguest
                  
        @auth
     <!-- {{auth()->user()->name}} -->
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #314D63">
        <div class="container">
            
        <img src="{{ asset ('/images/LOGO.png') }}" alt="logo" class="float-left">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#" data-bs-toggle="modal"
                            data-bs-target="#modalForm">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"data-bs-toggle="modal" 
                            href="{{ url('about') }}">About Us</a>
                   
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Order
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ url('orderans') }}">My Order</a></li>
                         
                        <li><a class="dropdown-item" href="{{ route('orderans.create') }}">New Order</a></li>


                        </ul>
                    </li>
                    
       
                    <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle bi bi-person-circle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"></a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{ route('users.index') }}">My Profil</a></li>
                                    <li> <a class="dropdown-item" href="{{ route('logout.perform') }}">Logout</a></li>
                            </ul>
                        </li>
      @endauth

                </ul>
            </div>
        </div>
    </nav>

     


    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script> --}}
</body>

</html>