<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <title>Aplikasi Pelaporan Pengaduan Masyarakat</title>
</head>
<body>
    <nav class="navbar bg-primary navbar-expand-lg" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="">
                <img src="{{ asset('assets/icons/icon-kabupaten.png') }}" alt="" width="30px">
                <span class="text-white">Desa Bendungan</span>
            </a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item me-2">
                        <a href="/login"><button type="button" class="btn text-white">Login</button></a>
                    </li>
                    <li class="nav-item">
                        <a href="/register"><button type="button" class="btn btn-outline-light">Register</button></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="d-flex align-items-center" style="height: 40vh">
            <div class="col-md-6">
                <h1>Aplikasi Pelaporan Pengaduan Masyarakat <u class="text-primary">Desa Bendungan</u></h1>
                <p>Layanan Pelaporan Pengaduan Masyarakat Desa Bendungan. Sampaikan laporan Anda langsung kepada Kami.</p>
                
            </div>
            <div class="col-md-6">
                <img src="{{ asset('assets/vectors/landing-vector.svg') }}" alt="">
            </div>
        </div>
        <div class="card w-25 border-primary ">
            <div class="card-body">
                <h4 class="text-primary text-center">Total Aduan : {{ $totalAduan }}</h4>
            </div>
        </div>
        <div class="mt-4" style="height: 40vh">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header text-white bg-danger">
                        <i class="bi bi-pencil-square"></i>
                            Tulis Laporan
                        </div>
                        <div class="card-body text-danger-emphasis">
                            <p>Laporkan keluhan Anda dengan jelas dan lengkap</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header bg-warning">
                            <i class="bi bi-envelope-open"></i>
                            Proses Tindak Lanjut dan Tanggapan
                        </div>
                        <div class="card-body text-warning-emphasis">
                            <p>Pihak instansi akan menindaklanjuti dan menanggapi laporan Anda</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header text-white bg-success">
                            <i class="bi bi-check-circle"></i>
                            Selesai
                        </div>
                        <div class="card-body text-success-emphasis">
                            <p>Laporan Anda akan terus ditindaklanjuti hingga selesai</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

    <nav class="navbar bg-dark text-secondary">
        <div class="container justify-content-center">
            <span class="">&copy; Copyright 2023 Desa Bendungan Allright Reserved.</span>
        </div>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>