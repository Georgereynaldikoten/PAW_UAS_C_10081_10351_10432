@extends('layouts.app-master')

@section('content')
    
        @auth
        
        
        <!-- Jumbotron -->
  <section class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">WELCOME</h1>
            <p class="lead">Mas Express serves package deliveries and time-sensitive documents of domestic destinations through more than    1,500  exclusive service points from pick-up to delivery spread throughout  Indonesia. This service utilizes the fastest mode of transportation available and serves a wide variety of service types according to customer needs. </p>
        </div>
    </section>

    <!-- container -->
    <div class="container">
        <!-- infopanel -->
        <div class="row justify-content-md-center">
            <div class="col-8 info-panel">
                <div class="row">
                    <div class="col-sm">
                        <img src="{{ asset ('/images/reguler.png') }}" alt="employee" class="float-left">
                        <h4>MAZ REGULER</h4>
                        <p>Estimated Time of Arrival: 5-14 Days</p>
                    </div>
                    <div class="col-sm">
                        <img src="{{ asset ('/images/express.png') }}" alt="employee">
                        <h4>MAZ EXPRESS</h4>
                        <p>Estimated Time of Arrival: 3-5 Days</p>
                    </div>
                    <div class="col-sm">
                        <img src="{{ asset ('/images/super.png') }}" alt="employee">
                        <h4>MAZ SUPER</h4>
                        <p>Estimated Time of Arrival: 1-2 Days</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- isi content -->
        <div class="row workingspace">
                <div class="col-lg-5">
                    <img src="{{ asset ('/images/delivery4.png') }}" alt="workingspace" class="img-fluid">
                </div>
                <div class="col-lg-7">
                    <h3>MAZ <span>REGULER</span></h3>
                    <p>REGULER is a delivery service to all regions of Indonesia, with an estimated delivery time of 5-14 business days, depending on the zone of the area to which the delivery destination is.</p>
                </div>
            </div>
            <div class="row workingspace">
                <div class="col-lg-7">
                    <h3>MAZ <span>EXPRESS</span></h3>
                    <p>EXPRESS is a delivery service to all regions of Indonesia, with an estimated delivery time of 3-5 business days, depending on the zone of the area to which the delivery destination is.</p>
                </div>
                <div class="col-lg-5">
                    <img src="{{ asset ('/images/delivery.png') }}" alt="workingspace" class="img-fluid">
                </div>
            </div>
            <div class="row workingspace">
                <div class="col-lg-5">
                    <img src="{{ asset ('/images/delivery3.png') }}" alt="workingspace" class="img-fluid">
                </div>
                <div class="col-lg-7">
                    <h3>MAZ <span>SUPER</span></h3>
                    <p>SUPER is a service with delivery time at the destination the next day or no later than the day after(including Sunday and public holidays). .</p>
                </div>
            </div>
            <br><br>
        </div>

    <!--  -->
        @endauth

        @guest
          <!-- Jumbotron -->
  <section class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">HI</h1>
            <p class="lead">Mas Express serves package deliveries and time-sensitive documents of domestic destinations through more than    1,500  exclusive service points from pick-up to delivery spread throughout  Indonesia. This service utilizes the fastest mode of transportation available and serves a wide variety of service types according to customer needs. </p>
        </div>
    </section>

    <!-- container -->
    <div class="container">
        <!-- infopanel -->
        <div class="row justify-content-md-center">
            <div class="col-8 info-panel">
                <div class="row">
                    <div class="col-sm">
                        <img src="{{ asset ('/images/reguler.png') }}" alt="employee" class="float-left">
                        <h4>MAZ REGULER</h4>
                        <p>Estimated Time of Arrival: 5-14 Days</p>
                    </div>
                    <div class="col-sm">
                        <img src="{{ asset ('/images/express.png') }}" alt="employee">
                        <h4>MAZ EXPRESS</h4>
                        <p>Estimated Time of Arrival: 3-5 Days</p>
                    </div>
                    <div class="col-sm">
                        <img src="{{ asset ('/images/super.png') }}" alt="employee">
                        <h4>MAZ SUPER</h4>
                        <p>Estimated Time of Arrival: 1-2 Days</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- isi content -->
        <div class="row workingspace">
                <div class="col-lg-5">
                    <img src="{{ asset ('/images/delivery4.png') }}" alt="workingspace" class="img-fluid">
                </div>
                <div class="col-lg-7">
                    <h3>MAZ <span>REGULER</span></h3>
                    <p>REGULER is a delivery service to all regions of Indonesia, with an estimated delivery time of 5-14 business days, depending on the zone of the area to which the delivery destination is.</p>
                </div>
            </div>
            <div class="row workingspace">
                <div class="col-lg-7">
                    <h3>MAZ <span>EXPRESS</span></h3>
                    <p>EXPRESS is a delivery service to all regions of Indonesia, with an estimated delivery time of 3-5 business days, depending on the zone of the area to which the delivery destination is.</p>
                </div>
                <div class="col-lg-5">
                    <img src="{{ asset ('/images/delivery.png') }}" alt="workingspace" class="img-fluid">
                </div>
            </div>
            <div class="row workingspace">
                <div class="col-lg-5">
                    <img src="{{ asset ('/images/delivery3.png') }}" alt="workingspace" class="img-fluid">
                </div>
                <div class="col-lg-7">
                    <h3>MAZ <span>SUPER</span></h3>
                    <p>SUPER is a service with delivery time at the destination the next day or no later than the day after(including Sunday and public holidays). .</p>
                </div>
            </div>
            <br><br>
        </div>

    <!--  -->
        @endguest
    </div>
@endsection
