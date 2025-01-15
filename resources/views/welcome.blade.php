<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-APIK - Bappelitbangda Kota Pasuruan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/bs/navbar-fixed.css')}}">
    <style>
        .kajian-bidang {
            margin-top: 55px;
        }

        .daftar-bidang {
            margin-top: 55px;
        }

        .paginate-daftar-kajian {
            margin-top: 55px;
            margin-bottom: 55px;
            display: flex;
            justify-content: center;
        }
        a {
            text-decoration-line: none;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">E-Kajian</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse mx-3" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3" aria-current="page" href="#">Archives</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3" aria-current="page" href="#">About</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        <div class="container py-3">
            <div class="row flex-lg-row-reverse align-items-center g-5 py-3">
                <div class="col-10 col-sm-8 col-lg-6">
                    <img src="{{ asset('img/kajian_litbang.png') }}" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
                </div>
                <div class="col-lg-6">
                    <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">E-APIK</h1>
                    <p class="display-6 fw-semibold text-body-emphasis lh-1 mb-3">Kajian</p>
                    <p class="lead">Badan Perencanaan Pembangunan, Penelitian dan Pengembangan Daerah Kota Pasuruan</p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start mt-5">
                        <button type="button" class="btn btn-primary btn-md px-4 me-md-2">Telusuri</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <!-- Daftar Kajian -->
            <div class="fs-3 fw-semibold mb-3">
                Kajian Terbaru
            </div>
            <div class="row mb-2">
                @foreach ($kajianTerbaru as $data)
                <div class="col-md-6">
                    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col p-4 d-flex flex-column position-static">
                            <h4 class="mb-2">{{ $data->nama }}</h4>
                            <p class="card-text mb-auto">{{ $data->bidang }}</p>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                        <img src="{{ asset('storage/'.$data->cover)}}" class="img-fluid mx-auto d-block" alt="kajian" style="height: 250px; width: 200px;">
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <!-- Kajian Bidang  -->
        <div class="container">
            <div class="fs-3 fw-semibold mb-3 kajian-bidang">
                Kajian Bidang
            </div>
            <div class="row mb-3">
                <div class="col-sm-3 mb-3 mb-sm-0 mt-2">
                    <div class="card">
                        <div class="card-body text-center">
                            <h5 class="card-title">
                                <div class="d-flex align-items-center">
                                    Penelitian dan Pengembangan
                                </div>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 mb-3 mb-sm-0 mt-2">
                    <div class="card text-center">
                        <div class="card-body text-center">
                            <h5 class="card-title">
                                <div class="d-flex align-items-center">
                                    Pembangunan Sosial, Budaya dan Pemerintahan
                                </div>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 mb-3 mb-sm-0 mt-2">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title text-center">
                                <div class="d-flex align-items-center">
                                    Perencanaan Pembangunan Ekonomi
                                </div>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 mb-3 mb-sm-0 mt-2">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title text-center">
                                <div class="d-flex align-items-center">
                                    Pengembangan Wilayah Perkotaan
                                </div>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Daftar Kajian -->
        <div class="container mt-5">
            <div class="fs-3 fw-semibold mb-3">
                Daftar Kajian
            </div>
            <div class="row mb-3 g-2 me-auto">
                @foreach ($daftarKajian as $data)
                <div class="col-sm-4 mb-3 mb-sm-0">
                    <a href="{{ $data->link }}" target="_blank">  
                    <div class="card border-0" style="max-width: 540px; margin-bottom: 55px">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{ asset('storage/'.$data->cover)}}" class="img-fluid rounded mx-auto d-block" alt="kajian" style="height: 200px; width: 150px">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold">{{ $data->nama }}</h5>
                                    <p class="card-text">{{ $data->bidang }}</p>
                                    <p class="card-text"><small class="text-body-secondary">{{ $data->tahun }}</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a> 
                </div>
                @endforeach
            </div>
            <div class="paginate-daftar-kajian">
                {{ $daftarKajian->links() }}
            </div>
        </div>
        <div class="container">
            <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5 border-top">
                <div class="col mb-3">
                    <a href="/" class="d-flex align-items-center mb-3 link-body-emphasis text-decoration-none">
                        <img src="{{ asset('img/apik-logo.jpg') }}" width="150px">
                    </a>
                    <p class="text-body-secondary">&copy; {{ $tahun }} </p>
                </div>

                <div class="col mb-3">

                </div>

                <div class="col mb-3">
                    <h5>Kontak Kami</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2">Bappelitbangda Kota Pasuruan</li>
                        <li class="nav-item mb-2">Jl. Sultan Agung No. 32 Kota Pasuruan</li>
                        <li class="nav-item mb-2">bappelitbangda@pasuruankota.go.id</li>
                    </ul>
                </div>

                <div class="col mb-3">
                    <h5>Situs Terkait</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="https://pasuruankota.go.id/" target="_blank" class="nav-link p-0 text-body-secondary">Pemerintah Kota Pasuruan</a></li>
                    </ul>
                </div>

                <div class="col mb-3">
                    <h5>Situs</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="https://bappelitbangda.pasuruankota.go.id/" target="_blank" class="nav-link p-0 text-body-secondary">Website resmi Badan Perencanaan Pembangunan, Penelitian dan Pengembangan Daerah Kota Pasuruan</a></li>
                    </ul>
                </div>
            </footer>
        </div>

    </main>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script>

    </script>
</body>

</html>