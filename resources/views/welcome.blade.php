<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/bs/navbar-fixed.css')}}">
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
                </ul>
            </div>
        </div>
    </nav>

    <main>
        <div class="container py-5">
            <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                <div class="col-10 col-sm-8 col-lg-6">
                    <img src="{{ asset('img/bootstrap-themes.png') }}" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
                </div>
                <div class="col-lg-6">
                    <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">E-APIK</h1>
                    <p class="display-6 fw-semibold text-body-emphasis lh-1 mb-3">Kajian</p>
                    <p class="lead">Badan Perencanaan Pembangunan, Penelitian dan Pengembangan Daerah Kota Pasuruan</p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
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
                <div class="col-md-6">
                    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col p-4 d-flex flex-column position-static">
                            <h3 class="mb-2">Featured post</h3>
                            <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                            <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col p-4 d-flex flex-column position-static">
                            <h3 class="mb-2">Post title</h3>
                            <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                            <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Kajian Bidang  -->
        <div class="container">
            <div class="fs-3 fw-semibold mb-3">
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
            <div class="row mb-3">
                @foreach ($daftarKajian as $data)       
                <div class="col-sm-4 mb-3 mb-sm-0">
                    <div class="card mb-3 border-0" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{ asset('storage/'.$data->cover)}}" class="img-fluid rounded mx-auto d-block" alt="kajian" style="height: 200px">
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
                </div>
                @endforeach
            </div>
        </div>
        <div class="container">
            <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5 border-top">
                <div class="col mb-3">
                    <a href="/" class="d-flex align-items-center mb-3 link-body-emphasis text-decoration-none">
                        <svg class="bi me-2" width="40" height="32">
                            <use xlink:href="#bootstrap" />
                        </svg>
                    </a>
                    <p class="text-body-secondary">&copy; {{ $tahun }} </p>
                </div>

                <div class="col mb-3">

                </div>

                <div class="col mb-3">
                    <h5>Section</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
                    </ul>
                </div>

                <div class="col mb-3">
                    <h5>Section</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
                    </ul>
                </div>

                <div class="col mb-3">
                    <h5>Section</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
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