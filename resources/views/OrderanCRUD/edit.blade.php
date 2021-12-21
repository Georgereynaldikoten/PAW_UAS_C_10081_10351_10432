<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="../style.css" rel="stylesheet"> 

    <title>Dashboard</title>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #314D63">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="../img/LOGO.png" alt="logo"/></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="../page/servicePage.php">Service</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../page/aboutPage.php">About Us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Order
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item active" href="{{ route('orderans.index') }}">My Order</a></li>
                            <li><a class="dropdown-item" href="{{ route('orderans.create') }}">New Order</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle bi bi-person-circle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"></a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="../page/ProfilPage.php">My Profil</a></li>
                                <li><a class="dropdown-item" href="../process/logoutProcess.php">Log Out</a></li>
                        </ul>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>
    <div class="d-flex justify-content-between mt-3 mb-3"></div>

    @if($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong>There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="bg bg-light text-dark">
        <div class="container min-vh-100 mt-1 d-flex align-items-center justify-content-center">
            <div class="card text-dark bg-light ma-5 shadow " style="min-width: 25rem;">
            <form action="{{ route('orderans.update',$orderans->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <div class="card-header fw-bold">
                        <label for="services" class="form-label">Select Order</label>
                    </div>
                    <select class="form-select" aria-label="Default select example" id="ordertype" name="ordertype" aria-describedby="emailHelp" required>                                        
                        <option value="Pick-Up">Pick Up</option>
                        <option value="Drop-Off">Drop-Off</option>
                    </select>
                    </div>
                    <div class="card-header fw-bold">Sender Information</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="sender_name" class="form-label">Name</label>
                                    <input class="form-control" id="sender_name" name="sender_name" aria-describedby="emailHelp" placeholder={{$orderans->sender_name}}>
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="sender_origin" class="form-label">Origin City</label>
                                    <input class="form-control" id="sender_origin" name="sender_origin" aria-describedby="emailHelp" placeholder={{$orderans->sender_origin}}>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="phone_number" class="form-label">Phone Number</label>
                                    <input class="form-control" id="phone_number" name="phone_number" aria-describedby="emailHelp" placeholder={{$orderans->phone_number}}>
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="post_code" class="form-label">Post Code</label>
                                    <input class="form-control" id="post_code" name="post_code" aria-describedby="emailHelp" placeholder={{$orderans->post_code}}>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3">
                                    <label for="address1" class="form-label">Address</label>
                                    <textarea class="form-control" id="address1" name="address1" rows="3" placeholder={{$orderans->address1}}></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-header fw-bold">Recipient Information</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="name_recip" class="form-label">Name</label>
                                    <input class="form-control" id="name_recip" name="name_recip" aria-describedby="emailHelp" placeholder={{$orderans->name_recip}}>
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="destination" class="form-label">Destination City</label>
                                    <input class="form-control" id="destination" name="destination" aria-describedby="emailHelp" placeholder={{$orderans->destination}}>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="phone_recip" class="form-label">Phone Number</label>
                                    <input class="form-control" id="phone_recipt" name="phone_recipt" aria-describedby="emailHelp" placeholder={{$orderans->phone_recipt}}>
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="post_recip" class="form-label">Post Code</label>
                                    <input class="form-control" id="post_recipt" name="post_recipt" aria-describedby="emailHelp" placeholder={{$orderans->post_recipt}}>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3">
                                <label for="address2" class="form-label">Address</label>
                                <textarea class="form-control" id="address2" name="address2" rows="3" placeholder={{$orderans->address2}}></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="card-header fw-bold">Package Information</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="item_type" class="form-label">Item Type</label>
                                    <select class="form-select" aria-label="Default select example" id="item_name" name="item_name" aria-describedby="emailHelp" required>
                                        <option value="Goods">Goods</option>
                                        <option value="Document">Document</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="item_name" class="form-label">Item Name</label>
                                    <input class="form-control" id="item_type" name="item_type" aria-describedby="emailHelp" placeholder={{$orderans->item_type}}>
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="service" class="form-label">Service Type</label>
                                    <select class="form-select" aria-label="Default select example" id="service" name="service" aria-describedby="emailHelp" required>                                        
                                        <option value="Reguler">Reguler</option>
                                        <option value="Express">Express</option>
                                        <option value="Super">Super</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="quantity" class="form-label">Quantity</label>
                                    <input class="form-control" id="quantity" name="quantity" aria-describedby="emailHelp" placeholder={{$orderans->quantity}}>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="weight" class="form-label">Weight</label>
                                    <input class="form-control" id="weight" name="weight" aria-describedby="emailHelp" placeholder={{$orderans->weight}}>
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="height" class="form-label">Height</label>
                                    <input class="form-control" id="height" name="height" aria-describedby="emailHelp" placeholder={{$orderans->height}}>
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="width" class="form-label">Width</label>
                                    <input class="form-control" id="width" name="width" aria-describedby="emailHelp" placeholder={{$orderans->width}}>
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="length" class="form-label">Length</label>
                                    <input class="form-control" id="length" name="length" aria-describedby="emailHelp" placeholder={{$orderans->length}}>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3">
                                <label for="note" class="form-label">Notes</label>
                                <textarea class="form-control" id="notes" name="notes" rows="3"placeholder={{$orderans->notes}}></textarea>
                            </div>
                        </div>
                        <div style="float:right">
                        <a href="{{ route('orderans.index') }}">
                            <button type="button" class="btn btn-outline-primary me-md-3">Cancel</button>
                        </a>
                            <button type="submit" class="btn btn-primary" name="update">Update</button>
                        </div>
                    </div>
            </div>
            </form>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>