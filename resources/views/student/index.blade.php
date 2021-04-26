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
        <div class="card">
            <div class="card-body">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nim</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">Jurusan</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($items as $item)
                            <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$item->nim}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->email}}</td>
                            <td>{{$item->majors_id}}</td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="{{ route('student-show', $item->id) }}" type="button" class="btn btn-warning text-light">Detail</a>
                                    <button type="button" class="btn btn-success">Edit</button>
                                    <button type="button" class="btn btn-danger">Delete</button>
                                </div>
                            </td>
                        </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center">
                                    Belum ada data yang dibuat..
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                    </table>
            </div>
        </div>
    </div>


</body>
</html>
