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

    <div class="d-flex justify-content-between mt-5 mb-5">
            <h2 class="text-center">My Order</h2>
    </div>

    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th width="20px" class="text-center">No</th>
            <th>Sender</th>
            <th width="200px" class="text-center">Recipient</th>
            <th class="text-center">Order Type</th>
            <th>Pick Up Address</th>
            <th width="200px" class="text-center">Drop Address</th>
            <th width="200px" class="text-center">Item</th>
            <th width="200px" class="text-center">Service Type</th>
            <th class="text-center">Action</th>
        </tr>

        @if(count($orderans))
        @foreach($orderans as $orderan)
        <tr>
            <td class="text-center">{{$orderan->id}}</td>
            <td>{{$orderan->sender_name}}</td>
            <td>{{$orderan->name_recip}}</td>
            <td>{{$orderan->ordertype}}</td>
            <td>{{$orderan->address1}}</td>
            <td>{{$orderan->address2}}</td>
            <td>{{$orderan->item_name}}</td>
            <td>{{$orderan->service}}</td>
            <td class="text-center">
                <form action="{{ route('orderans.destroy',$orderan->id) }}" method="POST">
                <a class="btn btn-primary btn-sm" href="{{ route('orderans.edit',$orderan->id) }}">Edit</a>

                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
        @else
        <tr>
            <td align="center" colspan="9">Empty Data!! Have a nice day :)</td>
        </tr>
        @endif
    </table>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>