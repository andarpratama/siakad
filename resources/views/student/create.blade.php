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
            <a href="#" class="btn btn-primary">Tambah Mahasiswa</a>
        </div>
    </div>

    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>

    <div class="container mt-4">
        <div class="card">
            <div class="card-body">
                <form method="post" action="{{ route('student-store') }}" >
                    @csrf
                    <div class="form-group">
                        <label for="nim">Nim</label>
                        <input type="text" class="form-control" name="nim" id="nim" placeholder="Nomor Induk Mahasiswa" value="{{ old('name') }}" >
                    </div>
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Nama Lengkap" value="{{ old('name') }}" >
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email" value="{{ old('email') }}" >
                    </div>
                        <input type="hidden" class="form-control" name="image" value="image.png" >
                    <div class="form-group">
                        <label for="handphone">Handphone</label>
                        <input type="number" class="form-control" name="handphone" id="handphone" placeholder="Handphone" value="{{ old('handphone') }}" >
                    </div>
                    <div class="form-group">
                        <label for="placeofbirth">Tempat Lahir</label>
                        <input type="text" class="form-control" name="placeofbirth" id="placeofbirth" placeholder="Tempat Lahir" value="{{ old('placeofbirth') }}" >
                    </div>
                    <div class="form-group">
                        <label for="gender">Jenis Kelamin</label>
                        <select class="form-control" name="gender" id="gender">
                            <option value="Laki-Laki" >Laki-Laki</option>
                            <option value="Perempuan" >Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="majors_id">Jurusan</label>
                        <select class="form-control" name="majors_id" id="majors_id">
                            <option value="Tehnik Informatika" >Tehnik Informatika</option>
                            <option value="Tehnik Mesin" >Tehnik Mesin</option>
                            <option value="Tehnik Sipil" >Tehnik Sipil</option>
                            <option value="Tehnik Elektro" >Tehnik Elektro</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="religion">Agama</label>
                        <select class="form-control" name="religion" id="religion">
                            <option value="Islam" >Islam</option>
                            <option value="Budha" >Budha</option>
                            <option value="Kristen" >Kristen</option>
                            <option value="Hindu" >Hindu</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="dateofbirth">Tanggal Lahir</label>
                        <input type="date" class="form-control" name="dateofbirth" id="dateofbirth" value="{{ old('dateofbirth') }}" >
                    </div>
                    <div class="form-group">
                        <label for="address">Alamat</label>
                        <textarea class="form-control" name="address" id="address" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
            </div>
        </div>
    </div>


</body>
</html>
