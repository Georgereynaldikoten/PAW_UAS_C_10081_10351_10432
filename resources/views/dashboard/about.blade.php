<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap CSS -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
            crossorigin="anonymous">

        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

        <!-- Icon Freepik.com -->
        <!-- <a href='https://www.freepik.com/vectors/delivery'>Delivery vector created
        by stories - www.freepik.com</a> -->

        <link href="{{ asset('/styleAbout.css') }}" rel="stylesheet">

        <title>Dashboard</title>
    </head>
    <body>
       <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #314D63">
        <div class="container">
             <img src="{{ asset('/images/LOGO.png') }}" alt="logo" class="float-left">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{ url('home') }}">Service</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ url('about') }}">About Us</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Order
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item active" href="#">My Order</a></li>
                                <li><a class="dropdown-item" href="#">New Order</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle bi bi-person-circle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"></a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{ route('users.index') }}">My Profil</a></li>
                                    <li><a class="dropdown-item" href="#">Log Out</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- About -->
        <section class="home">
            <div id="carousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-controls">
                    <ol class="carousel-indicators">
                        <li
                            type="button"
                            data-bs-target="#carousel"
                            data-bs-slide-to="0"
                            class="active"
                            style="background-image: url('/images/cargo.jpg')"></li>
                        <li
                            type="button"
                            data-bs-target="#carousel"
                            data-bs-slide-to="1"
                            style="background-image: url('/images/cargo.jpg')"></li>
                        <li
                            type="button"
                            data-bs-target="#carousel"
                            data-bs-slide-to="2"
                            style="background-image: url('/images/cargo.jpg')"></li>
                    </ol>
                    <a
                        type="button"
                        class="carousel-control-prev"
                        href="#carousel"
                        role="button"
                        data-bs-slide="prev">
                        <img src="{{ url('/images/left-arrow.svg') }}" alt="Prev"/>
                    </a>
                    <a
                        class="carousel-control-next"
                        href="#carousel"
                        role="button"
                        data-bs-slide="next">
                        <img src="{{ url('/images/right-arrow.svg') }}" alt="Next"/>
                    </a>
                </div>
                <div class="carousel-inner" style="background-image: url('/images/cargo.jpg')">
                    <div class="carousel-item active">
                        <div class="container">
                            <h2 class="about">About Us</h2>
                            <p>Mas Express is committed to utilizing sophisticated IT systems to improve
                                efficiency and quality for customers</p>
                            <br><br>
                            <div class="container-img">
                                <div class="row">
                                    <div class="col">
                                        <img src="{{ url('/images/365.png') }}" alt="workingspace" class="img-fluid">
                                        <br><br>
                                        <h6>365 days of operation</h6>
                                    </div>
                                    <div class="col">
                                        <img src="{{ url('/images/coverage-indo.png') }}" alt="workingspace" class="img-fluid">
                                        <br><br>
                                        <h6>Coverage all of Indonesia</h6>
                                    </div>
                                    <div class="col">
                                        <img src="{{ url('/images/24-h.png') }}" alt="workingspace" class="img-fluid">
                                        <br><br>
                                        <h6>24 hour customer service</h6>
                                    </div>
                                </div>
                                <br><br>
                                <div class="row">
                                    <div class="col">
                                        <img src="{{ url('/images/box.png') }}" alt="workingspace" class="img-fluid">
                                        <br><br>
                                        <h6>Safe to the destination</h6>
                                    </div>
                                    <div class="col">
                                        <img src="{{ url('/images/truck2.png') }}" alt="workingspace" class="img-fluid">
                                        <br><br>
                                        <h6>Fast Delivery</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="container">
                            <div class="row workingspace">
                                <div class="col-lg-5">
                                    <img src="{{ url('/images/motto.png') }}" alt="workingspace" class="img-fluid">
                                </div>
                                <div class="col-lg-7">
                                    <h2>Our Motto</h2>
                                    <br><br>
                                    <h3>Vision</h3>
                                    <p>Become a trusted and leading friend to consumers</p>
                                    <br><br>
                                    <h3>Mision</h3>
                                    <p>To provide the best experience to customers consistently</p>
                                    <br><br>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="container">
                            <h2>Our Service Coverage</h2>
                            <p>Throughout Indonesia, there are nearly 50 gateway centers with professional
                                equipment, while also having more than 2,000 operating points, having more than
                                15,000 trained human resources, and thousands of fleets to support messenger
                                services between cities, between provinces, and across the island.</p><br><br>
                            <img src="{{ url('/images/indo.png') }}" alt="workingspace" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>

    </body>
</html>