<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url('bootstrap4/css/bootstrap.min.css') }}">
    <title>Home - Sistem Informasi Kampus</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Sistem Informasi Kampus</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse ml-4" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link mr-4  active" href="{{ route('home') }}">Home</a>
                    <a class="nav-link mr-4 " href="{{ route('student') }}">Data Mahasiswa</a>
                    <a class="nav-link mr-4 " href="#">Data Dosen</a>
                    <a class="nav-link mr-4 " href="#">Data Kelas</a>
                </div>
            </div>
        </div>
    </nav>


    <div class="container mt-4">
        <div class="jumbotron bg-white d-flex justify-content-between align-items-center shadow-sm mb-0 py-3">
            <h1 class="h1">Data Mahasiswa</h1>
            <a href="{{ route('student-create') }}" class="btn btn-primary">Tambah Mahasiswa</a>
        </div>
    </div>

    <div class="container mt-4">
        <div class="card mb-3" style="max-width: 640px;">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img style="width: 100%;" src="{{ url('img') }}/{{ $item->image }}" alt="...">
                </div>
                <div class="col-md-8">
                <div class="card-body">
                    <h4 class="h6">{{ $item->nim }}</h4>
                    <h5 class="card-title">{{ $item->name }}</h5>
                    <hr>
                    <h4 class="h6">Email : {{ $item->email }}</h4>
                    <p class="card-text"><small class="text-muted">{{ $item->address }}</small></p>
                </div>
                </div>
            </div>
        </div>
    </div>


</body>
</html>
