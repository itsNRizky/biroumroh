<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- CSS build --}}
    <link href="https://hanasafar.up.railway.app/build/assets/app-d28c34c2.css" rel="stylesheet">

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    {{-- Custom CSS --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom-paket.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom-biro.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    {{-- dropify --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/dropify/dist/css/dropify.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Hana Safar</title>
    <link rel="shortcut icon" href="{{ asset('/assets/brand/favicon.ico') }}" type="image/x-icon">
</head>
<style>
    body {
        font-family: 'Lato', sans-serif;
    }

    .dropify-wrapper .dropify-message p {
        font-size: 16px;
    }

    .sebaris {
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .carousel {
        display: flex;
        flex-direction: row;
        gap: 1rem;
        overflow-x: auto;
        scroll-behavior: smooth;
        padding: 0;
        list-style: none;
    }

    .ads {
        min-width: 300px;
        flex: 0 0 auto;
    }
</style>

<body onload="removeLoader()">
    <div class="loader-section" id="loader-section">
        <div class="position-absolute top-50 start-50 translate-middle">
            <span class="loader-custom"></span>
        </div>
    </div>
    <div class="canvas fixed-top shadow-lg">
        <div class="vector fixed-top shadow-lg">
            <div class="row justify-content-between mt-3" style="width: 85%; margin: auto;">
                <div class="col-auto">
                </div>
                <div class="col-auto social-media">
                    <div class="row justify-content-end text-light">
                        <div class="col-3 text-end pe-0 me-0" title="Instagram">
                            <i class='bx bxl-instagram fs-4'></i>
                        </div>
                        <div class="col-3 text-end pe-0 me-0" title="Facebook">
                            <i class='bx bxl-facebook-square fs-4'></i>
                        </div>
                        <div class="col-3 text-end pe-0 me-0" title="Whatsapp">
                            <i class='bx bxl-whatsapp fs-4'></i>
                        </div>
                        <div class="col-3 text-end pe-0 me-0" title="Twitter">
                            <i class='bx bxl-twitter fs-4'></i>
                        </div>
                    </div>
                </div>
            </div>
            <!--  -->
            <nav class="navbar navbar-expand fixed-top navbar-dark nav-new mt-5 px-0 py-2" style="max-height: 9vh;">
                <div class="container">
                    <a class="navbar-brand fs-4 fw-bold navbar-brand-custom text-light" href="#">
                        <img src="{{ asset('/assets/brand/umroh-logo.png') }}" alt="Bootstrap" class="img-brand">
                        <span class="" style="text-shadow: 0px 0px 10px #212121;">Hana Safar</span>
                    </a>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-auto">
                            @auth
                            @if (auth()->user()->role == 'biro')
                            <li class="nav-item">
                                <a href="" class="btn-custom fw-bold me-2 overflow-hidden btn-login-responsive m-0"
                                    style="color: #212121; font-size: 15px;" data-bs-toggle="modal"
                                    data-bs-target="#paketModal" title="Tambah Paket Umroh">Tambah <span class="hidden">Paket <i
                                            class="fa-solid ms-2 fa-plane"></i></span></a>
                            </li>
                            @endif
                            <li class="nav-item">
                                <a href=""
                                    class="btn-custom-outline fw-bold me-2 overflow-hidden btn-login-responsive m-0"
                                    style="font-size: 15px;" data-bs-toggle="modal" data-bs-target="#logoutModal"
                                    title="Logout"><i class="fa-solid fw-bold fa-power-off"></i></a>
                            </li>
                            @endauth
                            @guest
                            <li class="nav-item">
                                <a href="" class="btn-custom fw-bold me-2 overflow-hidden btn-login-responsive m-0"
                                    style="color: #212121; font-size: 15px;" data-bs-toggle="modal"
                                    data-bs-target="#loginModal" title="Bergabung bersama kami">Login <span class="hidden">/ Daftar <i
                                            class="fa-solid ms-2 fa-right-to-bracket"></i></span></a>
                            </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <div class="scrollbar-custom">
        <div class="wrapper d-flex align-items-center"
            style="background-image: url('{{ asset('/assets/img/bgdua.jpg') }}');">
            <div class="container d-flex justify-content-center flex-column ">
                @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{ session('success') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <h1 class="text-white welcome-text-custom text-center fw-bold mb-4">Selalu Membantu<br>Perjalanan Ibadah
                    Anda </h1>
                <div class="container-fluid">
                    <div class="navigation d-flex justify-content-center" style="margin-bottom: -2vh;">
                        <ul class="navigation-bar navbar-responsive-custom d-flex px-4" style="background: #FFC108;">
                            <li class="d-flex flex-column ">
                                <span class="fw-bold"><i class='bx bx-building-house'></i> Hotel</span>
                            </li>
                            <li class="d-flex flex-column">
                                <span class="fw-bold"><i class='bx bx-calendar'></i> Jadwal
                                    Keberangkatan</span>
                            </li>
                            <li class="d-flex flex-column">
                                <span class="fw-bold"> <i class='bx bxs-wallet'></i> Promo Paket</span>
                            </li>
                            <li class="d-flex flex-column">
                                <span class="fw-bold"><i class='bx bx-briefcase'></i> Paket Tour</span>
                            </li>
                            <li class="d-flex flex-column">
                                <span class="fw-bold"><i class='bx bx-bookmarks'></i> Bundle & Save</span>
                            </li>
                        </ul>
                    </div>
                    <div class="card container card-responsive-new">
                        <div class="card-body new-card">
                            <form action="/search" method="post">
                                <div class="row d-flex mt-4 mb-2">
                                    @csrf
                                    <div class="col-xl-4 col-sm-12">
                                        <label class="text-secondary mb-1" for="region">Keberangkatan dari</label>
                                        <input type="text" name="region" class="form-control form-custom"
                                            placeholder="City, Region">
                                    </div>
                                    <div class="col-xl-3 col-sm-12">
                                        <label class="text-secondary mb-1" for="date">Tanggal Keberangkatan</label>
                                        <input type="date" name="date" class="form-control" placeholder="">
                                    </div>
                                    <div class="col-xl-3 col-sm-12">
                                        <label class="text-secondary mb-1" for="price">Harga paket</label>
                                        <input type="text" name="price" class="form-control" placeholder="">
                                    </div>
                                    <div class="col-xl-2 col-sm-12 mx-auto text-center">
                                        <label for="" class="mb-1" style="color:transparent;"></label>
                                        <div class="d-grid text-center">
                                            <button type="submit"
                                                class="d-flex btn btn-warning fw-bold text-dark text-center">Cari <i
                                                    class='bx bx-search bx-sm ms-2'></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="home-wrapper" style="border-radius: 50px;">
            <div class="container position-relative">
                <ul class="carousel overflow-hidden container position-relative mt-4">

                    {{-- CAROUSEL --}}

                    @foreach ($carousels as $carousel)
                    <li class="ads">
                        <div class="img">
                            <img src="{{ asset('storage/' . $carousel->media) }}"
                                alt="">
                        </div>
                    </li>
                    @endforeach

                    {{-- END CAROUSEL --}}
                </ul>
                <button id="arrow-left" class="position-absolute bg-warning start-0 top-50 translate-middle-y"><i class="fas fa-arrow-left"></i></button>
                <button id="arrow-right" class="position-absolute bg-warning end-0 top-50 translate-middle-y"><i class="fas fa-arrow-right"></i></button>
            </div>
            <span class="my-5"></span>

            @if (!isset($results))
            <div class="container my-5">
                <div class="d-flex justify-content-center row">
                    <div class="container content-terbaru">
                        <h4 class="fw-semibold mb-4 shadow judul">Terbaru</h4>
                        <div class="row">
                            @foreach ($biro as $item)
                            <!--  -->
                            <div class="col-xl-3 col-md-4 col-sm-6 mb-3">
                                <div class="card card-content m-0 p-0 shadow">
                                    <div class="card-header m-0 p-0">
                                        <div class="img"
                                            style="background-image: url('/storage/' . $item->media)">
                                        </div>
                                    </div>
                                    <div class="card-body m-0 px-3 pt-3 pb-3">
                                        <!--  -->
                                        <div class="row justify-content-between mb-0">
                                            <div class="col-auto">
                                                <h5 class="fw-bold title-content text-primary">
                                                    {{ $item->Biro->nama }}
                                                </h5>
                                            </div>
                                            <div class="col-auto">
                                                <h6 class="text-success">
                                                    {{ $item->kode }}
                                                </h6>
                                            </div>
                                        </div>
                                        <!--  -->
                                        <!--  -->
                                        <div class="row mt-0">
                                            <div class="col-12">
                                                <div class="spec-1 fw-normal"><i
                                                        class='bx bxs-plane-alt me-2 text-warning fs-5'></i>
                                                    <span>Berangkat
                                                        : {{ $item->tanggal_keberangkatan }}</span>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="spec-1 fw-normal"><i
                                                        class='bx bx-bus fs-5 me-2 text-warning'></i>
                                                    <span>Pulang :
                                                        {{ $item->tanggal_kepulangan }}</span>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="spec-1 fw-normal"><i
                                                        class='bx bx-home fs-5 me-2 text-warning'></i>
                                                    <span>Kota :
                                                        {{ $item->kota }}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!--  -->
                                        <!--  -->
                                        <div class="row justify-content-end">
                                            <div class="col-auto mt-2">
                                                <h5 class="mr-1 fw-bold text-primaryy" style="color: #2A5044;">Rp.
                                                    {{ number_format($item->harga) }},00
                                                </h5>
                                            </div>
                                            <div class="col-12">
                                                <div class="d-grid gap-2">
                                                    <a class="btn btn-sm btn-warning text-dark fw-semibold"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#detailModal{{ $item->id }}">Detail</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!--  -->
                                    </div>
                                </div>
                            </div>
                            <!--  -->
                            @endforeach
                            {{ $biro->links('pagination::bootstrap-5') }}
                        </div>
                    </div>
                </div>
            </div>
            <!--  -->
            @foreach ($biro as $item)

            <!-- new detial modal -->
            <div class="modal fade" id="detailModal{{ $item->id }}" data-bs-backdrop="static" data-bs-keyboard="false"
                tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-fullscreen">
                    <div class="modal-content" style="border-radius: 10px;">
                        <div class="modal-body p-0 overflow-x-hidden">
                            <div class="detail-modal-bg"
                                style="background: url('/storage/' . $item->media'); background-repeat: no-repeat; background-position: center; background-size: cover;">
                            </div>
                            <div class="container">
                                <div class="row justify-content-end">
                                    <div class="col-auto">
                                        <a type="button" class="my-3 text-dark" data-bs-dismiss="modal"
                                            aria-label="Close" title="Kembali"><i
                                                class="fa-solid fa-xmark fs-5"></i></a>
                                    </div>
                                </div>
                                <div class="text-start">
                                    <h4 class="mb-0 fw-bold mt-0" style="color: #2A5044;">Detail Paket <i
                                            class="fa-solid fa-kaaba" style="color: #FFC20B;"></i></h4>
                                    <p class="mb-0 text-secondary mt-2">Selalu Membantu Perjalanan Ibadah Anda</p>
                                </div>
                                <hr>
                                @csrf
                                <div class="sub-detail">
                                    <div class="row justify-content-center">
                                        <div class="col-12">
                                            <h6 class="fw-semibold text-green-custom mb-3 judul-sub-detail shadow">
                                                Mengenai
                                                Paket
                                            </h6>
                                            <hr>
                                        </div>
                                        <!--  -->
                                        <div class="col-6">
                                            <p class="ms-3 mt-0 mb-2 me-0">Nama Paket</p>
                                        </div>
                                        <div class="col-1">:</div>
                                        <div class="col-5">{{ $item->Biro->nama }}</div>
                                        <!--  -->
                                        <!--  -->
                                        <div class="col-6">
                                            <p class="ms-3 mt-0 mb-2 me-0">Kode Paket</p>
                                        </div>
                                        <div class="col-1">:</div>
                                        <div class="col-5">{{ $item->kode }}</div>
                                        <!--  -->
                                    </div>
                                </div>
                                <div class="sub-detail mt-4 mb-5">
                                    <div class="row justify-content-center">
                                        <div class="col-12">
                                            <h6 class="fw-semibold text-green-custom mb-3 judul-sub-detail shadow">
                                                Detail
                                                Keberangkatan dan
                                                Kepulangan</h6>
                                            <hr>
                                        </div>
                                        <!--  -->
                                        <div class="col-6">
                                            <p class="ms-3 mt-0 mb-2 me-0">Tanggal Keberangkatan</p>
                                        </div>
                                        <div class="col-1">:</div>
                                        <div class="col-5">{{ $item->tanggal_keberangkatan}}</div>
                                        <!--  -->
                                        <div class="col-6">
                                            <p class="ms-3 mt-0 mb-2 me-0">Tanggal Kepulangan</p>
                                        </div>
                                        <div class="col-1">:</div>
                                        <div class="col-5">{{ $item->tanggal_kepulangan}}</div>
                                        <!--  -->
                                        <!--  -->
                                        <div class="col-6">
                                            <p class="ms-3 mt-0 mb-2 me-0">Kota</p>
                                        </div>
                                        <div class="col-1">:</div>
                                        <div class="col-5">{{ $item->kota }}</div>
                                        <!--  -->
                                        <!--  -->
                                        <div class="col-6">
                                            <p class="ms-3 mt-0 mb-2 me-0">Bandara Keberangkatan</p>
                                        </div>
                                        <div class="col-1">:</div>
                                        <div class="col-5">{{ $item->bandara}}</div>
                                        <!--  -->
                                        <!--  -->
                                        <div class="col-6">
                                            <p class="ms-3 mt-0 mb-2 me-0">Nama Airlines</p>
                                        </div>
                                        <div class="col-1">:</div>
                                        <div class="col-5">{{ $item->airline}}</div>
                                        <!--  -->
                                        <!--  -->
                                        <div class="col-6">
                                            <p class="ms-3 mt-0 mb-2 me-0">Jenis Pemberangkatan</p>
                                        </div>
                                        <div class="col-1">:</div>
                                        @if ($item->flight == 'direct')
                                        <div class="col-5">Direct</div>
                                        @else
                                        <div class="col-5">Transit</div>
                                        <!--  -->
                                        <!--  -->
                                        <div class="col-6">
                                            <p class="ms-3 mt-0 mb-2 me-0">Kota Transit</p>
                                        </div>
                                        <div class="col-1">:</div>
                                        <div class="col-5">Solo</div>
                                        <!--  -->
                                        @endif
                                        <!--  -->
                                        <div class="col-6">
                                            <p class="ms-3 mt-0 mb-2 me-0">Harga Paket</p>
                                        </div>
                                        <div class="col-1">:</div>
                                        <div class="col-5">Rp. {{ number_format($item->harga)}},00</div>
                                        <!--  -->
                                        <!--  -->
                                        <div class="col-12 mt-5">
                                            <h6 class="fw-semibold text-green-custom mb-3 judul-sub-detail shadow">Harga
                                                Sudah
                                                Termasuk</h6>
                                            <hr>
                                        </div>
                                        <!--  -->
                                        <!--  -->
                                        <div class="col-12">
                                            <div class="row justify-content-start text-center">
                                                @if ($item->tiket == 'yes')
                                                <div class="col-xl-3 col-md-6 col-sm-6">
                                                    <p class="ms-0 mt-0 mb-3 me-0 fasilitas">Tiket Pesawat <i
                                                            class="fa-solid fa-plane-departure ms-2"></i></p>
                                                </div>
                                                @endif
                                                @if ($item->visa == 'yes')
                                                <div class="col-xl-3 col-md-6 col-sm-6">
                                                    <p class="ms-0 mt-0 mb-3 me-0 fasilitas">Visa-Siskohat <i
                                                            class="fa-brands fa-cc-visa ms-2"></i></p>
                                                </div>
                                                @endif
                                                @if ($item->akomodasi == 'yes')
                                                <div class="col-xl-3 col-md-6 col-sm-6">
                                                    <p class="ms-0 mt-0 mb-3 me-0 fasilitas">Akomodasi di Saudi <i
                                                            class="fa-solid fa-hotel ms-2"></i></p>
                                                </div>
                                                @endif
                                                @if ($item->makan == 'yes')
                                                <div class="col-xl-3 col-md-6 col-sm-6">
                                                    <p class="ms-0 mt-0 mb-3 me-0 fasilitas">Makan di Saudi <i
                                                            class="fa-solid fa-utensils ms-2"></i></p>
                                                </div>
                                                @endif
                                                @if ($item->umroh == 'yes')
                                                <div class="col-xl-3 col-md-6 col-sm-6">
                                                    <p class="ms-0 mt-0 mb-3 me-0 fasilitas">Umroh 3 Kali <i
                                                            class="fa-solid fa-kaaba ms-2"></i></p>
                                                </div>
                                                @endif
                                                @if ($item->tour == !null)
                                                <div class="col-xl-3 col-md-6 col-sm-6">
                                                    <p class="ms-0 mt-0 mb-3 me-0 fasilitas">Paket Tour <i
                                                            class="fa-solid fa-kaaba ms-2"></i></p>
                                                </div>
                                                @endif
                                                @if ($item->airpot == 'yes')
                                                <div class="col-xl-3 col-md-6 col-sm-6">
                                                    <p class="ms-0 mt-0 mb-3 me-0 fasilitas">Airport Handling <i
                                                            class="fa-solid fa-plane-departure ms-2"></i></p>
                                                </div>
                                                @endif
                                                @if ($item->bus == 'yes')
                                                <div class="col-xl-3 col-md-6 col-sm-6">
                                                    <p class="ms-0 mt-0 mb-3 me-0 fasilitas">Bus Selama di Saudi <i
                                                            class="fa-solid fa-bus ms-2"></i></p>
                                                </div>
                                                @endif
                                                @if ($item->zam == 'yes')
                                                <div class="col-xl-3 col-md-6 col-sm-6">
                                                    <p class="ms-0 mt-0 mb-3 me-0 fasilitas">Zam-zam 5 Liter <i
                                                            class="fa-solid fa-bottle-water ms-2"></i></p>
                                                </div>
                                                @endif
                                                @if ($item->passport == 'yes')
                                                <div class="col-xl-3 col-md-6 col-sm-6">
                                                    <p class="ms-0 mt-0 mb-3 me-0 fasilitas">Passport <i
                                                            class="fa-solid fa-passport ms-2"></i></p>
                                                </div>
                                                @endif
                                                <!--  -->
                                            </div>
                                        </div>
                                        <!--  -->
                                        {{-- --}}
                                        <hr>
                                        <div class="row justify-content-start">
                                            <div class="col-auto">
                                                <div class="text-green fw-semibold mb-2">saya tertarik dengan paket ini</div>
                                                <a class="btn btn-warning px-5 text-green fw-semibold shadow" href="https://wa.me/089658978803" target="_blank">Hubungi kami <i class="fa-brands fa-whatsapp"></i></a>
                                            </div>
                                        </div>
                                        {{-- --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <!--  -->

    @endforeach

    @else
    <!-- Tampilkan hasil pencarian di sini jika ada hasil -->

    <div class="mt-5"></div>

    @if ($results->isEmpty())
    <div class="text-center mt-5">
        <p class="text-secondary mt-5">Tidak ada hasil pencarian.</p>
    </div>
    @else
    <div class="container mt-5">
        <div class="content-terbaru">
            <h4 class="fw-semibold mb-4 shadow judul">Hasil Pencarian</h4>
            <div class="row justify-content-start">
                @foreach ($results as $item)
                <div class="col-xl-3 col-md-4 col-sm-6 mb-3">
                    <div class="card card-content m-0 p-0 shadow">
                        <div class="card-header m-0 p-0">
                            <div class="img" style="background-image: url('/storage/' . $item->media)">
                            </div>
                        </div>
                        <div class="card-body m-0 px-3 pt-3 pb-3">
                            <!--  -->
                            <div class="row justify-content-between mb-0">
                                <div class="col-auto">
                                    <h5 class="fw-bold title-content text-primary">
                                        {{ $item->Biro->nama }}
                                    </h5>
                                </div>
                                <div class="col-auto">
                                    <h6 class="text-success">
                                        {{ $item->kode }}
                                    </h6>
                                </div>
                            </div>
                            <!--  -->
                            <!--  -->
                            <div class="row mt-0">
                                <div class="col-12">
                                    <div class="spec-1 fw-normal"><i
                                            class='bx bxs-plane-alt me-2 text-warning fs-5'></i>
                                        <span>Berangkat
                                            : {{ $item->tanggal_keberangkatan }}</span>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="spec-1 fw-normal"><i class='bx bx-bus fs-5 me-2 text-warning'></i>
                                        <span>Pulang :
                                            {{ $item->tanggal_kepulangan }}</span>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="spec-1 fw-normal"><i class='bx bx-home fs-5 me-2 text-warning'></i>
                                        <span>Kota :
                                            {{ $item->kota }}</span>
                                    </div>
                                </div>
                            </div>
                            <!--  -->
                            <!--  -->
                            <div class="row justify-content-end">
                                <div class="col-auto mt-2">
                                    <h5 class="mr-1 fw-bold text-primaryy" style="color: #2A5044;">Rp.
                                        {{ number_format($item->harga) }},00
                                    </h5>
                                </div>
                                <div class="col-12">
                                    <div class="d-grid gap-2">
                                        <a class="btn btn-sm btn-warning text-dark fw-semibold" data-bs-toggle="modal"
                                            data-bs-target="#detailModal{{ $item->id }}">Detail</a>
                                    </div>
                                </div>
                            </div>
                            <!--  -->
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="modal fade" id="detailModal{{ $item->id }}" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="border-radius: 10px;">
                <div class="modal-body p-0 overflow-x-hidden">
                    <div class="detail-modal-bg"
                        style="background: url('/storage/' . $item->media)'); background-repeat: no-repeat; background-position: center; background-size: cover;">
                    </div>
                    <div class="container">
                        <div class="row justify-content-end">
                            <div class="col-auto">
                                <a type="button" class="my-3 text-dark" data-bs-dismiss="modal" aria-label="Close"
                                    title="Kembali"><i class="fa-solid fa-xmark fs-5"></i></a>
                            </div>
                        </div>
                        <div class="text-start">
                            <h4 class="mb-0 fw-bold mt-0" style="color: #2A5044;">Detail Paket <i
                                    class="fa-solid fa-kaaba" style="color: #FFC20B;"></i></h4>
                            <p class="mb-0 text-secondary mt-2">Selalu Membantu Perjalanan Ibadah Anda</p>
                        </div>
                        <hr>
                        @csrf
                        <div class="sub-detail">
                            <div class="row justify-content-center">
                                <div class="col-12">
                                    <h6 class="fw-semibold text-green-custom mb-3 judul-sub-detail shadow">Mengenai
                                        Paket
                                    </h6>
                                    <hr>
                                </div>
                                <!--  -->
                                <div class="col-6">
                                    <p class="ms-3 mt-0 mb-2 me-0">Nama Paket</p>
                                </div>
                                <div class="col-1">:</div>
                                <div class="col-5">{{ $item->Biro->nama }}</div>
                                <!--  -->
                                <!--  -->
                                <div class="col-6">
                                    <p class="ms-3 mt-0 mb-2 me-0">Kode Paket</p>
                                </div>
                                <div class="col-1">:</div>
                                <div class="col-5">{{ $item->kode }}</div>
                                <!--  -->
                            </div>
                        </div>
                        <div class="sub-detail mt-4 mb-5">
                            <div class="row justify-content-center">
                                <div class="col-12">
                                    <h6 class="fw-semibold text-green-custom mb-3 judul-sub-detail shadow">Detail
                                        Keberangkatan dan
                                        Kepulangan</h6>
                                    <hr>
                                </div>
                                <!--  -->
                                <div class="col-6">
                                    <p class="ms-3 mt-0 mb-2 me-0">Tanggal Keberangkatan</p>
                                </div>
                                <div class="col-1">:</div>
                                <div class="col-5">{{ $item->tanggal_keberangkatan}}</div>
                                <!--  -->
                                <div class="col-6">
                                    <p class="ms-3 mt-0 mb-2 me-0">Tanggal Kepulangan</p>
                                </div>
                                <div class="col-1">:</div>
                                <div class="col-5">{{ $item->tanggal_kepulangan}}</div>
                                <!--  -->
                                <!--  -->
                                <div class="col-6">
                                    <p class="ms-3 mt-0 mb-2 me-0">Kota</p>
                                </div>
                                <div class="col-1">:</div>
                                <div class="col-5">{{ $item->kota }}</div>
                                <!--  -->
                                <!--  -->
                                <div class="col-6">
                                    <p class="ms-3 mt-0 mb-2 me-0">Bandara Keberangkatan</p>
                                </div>
                                <div class="col-1">:</div>
                                <div class="col-5">{{ $item->bandara}}</div>
                                <!--  -->
                                <!--  -->
                                <div class="col-6">
                                    <p class="ms-3 mt-0 mb-2 me-0">Nama Airlines</p>
                                </div>
                                <div class="col-1">:</div>
                                <div class="col-5">{{ $item->airline}}</div>
                                <!--  -->
                                <!--  -->
                                <div class="col-6">
                                    <p class="ms-3 mt-0 mb-2 me-0">Jenis Pemberangkatan</p>
                                </div>
                                <div class="col-1">:</div>
                                @if ($item->flight == 'direct')
                                <div class="col-5">Direct</div>
                                @else
                                <div class="col-5">Transit</div>
                                <!--  -->
                                <!--  -->
                                <div class="col-6">
                                    <p class="ms-3 mt-0 mb-2 me-0">Kota Transit</p>
                                </div>
                                <div class="col-1">:</div>
                                <div class="col-5">Solo</div>
                                <!--  -->
                                @endif
                                <!--  -->
                                <div class="col-6">
                                    <p class="ms-3 mt-0 mb-2 me-0">Harga</p>
                                </div>
                                <div class="col-1">:</div>
                                <div class="col-5">Rp. {{ number_format($item->harga)}},00</div>
                                <!--  -->
                                <!--  -->
                                <div class="col-12 mt-5">
                                    <h6 class="fw-semibold text-green-custom mb-3 judul-sub-detail shadow">Harga Sudah
                                        Termasuk</h6>
                                    <hr>
                                </div>
                                <!--  -->
                                <!--  -->
                                <div class="col-12">
                                    <div class="row justify-content-start text-center">
                                        @if ($item->tiket == 'yes')
                                        <div class="col-xl-3 col-md-6 col-sm-6">
                                            <p class="ms-0 mt-0 mb-3 me-0 fasilitas">Tiket Pesawat <i
                                                    class="fa-solid fa-plane-departure ms-2"></i></p>
                                        </div>
                                        @endif
                                        @if ($item->visa == 'yes')
                                        <div class="col-xl-3 col-md-6 col-sm-6">
                                            <p class="ms-0 mt-0 mb-3 me-0 fasilitas">Visa-Siskohat <i
                                                    class="fa-brands fa-cc-visa ms-2"></i></p>
                                        </div>
                                        @endif
                                        @if ($item->akomodasi == 'yes')
                                        <div class="col-xl-3 col-md-6 col-sm-6">
                                            <p class="ms-0 mt-0 mb-3 me-0 fasilitas">Akomodasi di Saudi <i
                                                    class="fa-solid fa-hotel ms-2"></i></p>
                                        </div>
                                        @endif
                                        @if ($item->makan == 'yes')
                                        <div class="col-xl-3 col-md-6 col-sm-6">
                                            <p class="ms-0 mt-0 mb-3 me-0 fasilitas">Makan di Saudi <i
                                                    class="fa-solid fa-utensils ms-2"></i></p>
                                        </div>
                                        @endif
                                        @if ($item->umroh == 'yes')
                                        <div class="col-xl-3 col-md-6 col-sm-6">
                                            <p class="ms-0 mt-0 mb-3 me-0 fasilitas">Umroh 3 Kali <i
                                                    class="fa-solid fa-kaaba ms-2"></i></p>
                                        </div>
                                        @endif
                                        @if ($item->tour == !null)
                                        <div class="col-xl-3 col-md-6 col-sm-6">
                                            <p class="ms-0 mt-0 mb-3 me-0 fasilitas">Paket Tour <i
                                                    class="fa-solid fa-kaaba ms-2"></i></p>
                                        </div>
                                        @endif
                                        @if ($item->airpot == 'yes')
                                        <div class="col-xl-3 col-md-6 col-sm-6">
                                            <p class="ms-0 mt-0 mb-3 me-0 fasilitas">Airport Handling <i
                                                    class="fa-solid fa-plane-departure ms-2"></i></p>
                                        </div>
                                        @endif
                                        @if ($item->bus == 'yes')
                                        <div class="col-xl-3 col-md-6 col-sm-6">
                                            <p class="ms-0 mt-0 mb-3 me-0 fasilitas">Bus Selama di Saudi <i
                                                    class="fa-solid fa-bus ms-2"></i></p>
                                        </div>
                                        @endif
                                        @if ($item->zam == 'yes')
                                        <div class="col-xl-3 col-md-6 col-sm-6">
                                            <p class="ms-0 mt-0 mb-3 me-0 fasilitas">Zam-zam 5 Liter <i
                                                    class="fa-solid fa-bottle-water ms-2"></i></p>
                                        </div>
                                        @endif
                                        @if ($item->passport == 'yes')
                                        <div class="col-xl-3 col-md-6 col-sm-6">
                                            <p class="ms-0 mt-0 mb-3 me-0 fasilitas">Passport <i
                                                    class="fa-solid fa-passport ms-2"></i></p>
                                        </div>
                                        @endif
                                        <!--  -->
                                    </div>
                                </div>
                                <!--  -->
                                {{-- --}}
                                <hr>
                                <div class="row justify-content-start">
                                    <div class="col-auto">
                                        <div class="text-green fw-semibold mb-2">saya tertarik dengan paket ini</div>
                                        <a class="btn btn-warning px-5 text-green fw-semibold shadow" href="https://wa.me/089658978803" target="_blank">Hubungi kami <i class="fa-brands fa-whatsapp"></i></a>
                                    </div>
                                </div>
                                {{-- --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{ $results->links('pagination::bootstrap-5') }}
    @endif
    @endif
    </div>

    {{-- REGISTRATION START --}}

    <div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="border-radius: 10px;">
                <div class="modal-header overflow-hidden text-center p-0" style="background-color: #315E50;">
                    <div class="vector-header-daftar text-end p-2">
                        <a type="button" class="m-3 text-light" data-bs-dismiss="modal" aria-label="Close"><i
                                class="fa-solid fa-xmark"></i></a>
                    </div>
                </div>
                <div class="modal-body container">
                    <form action="/register" method="post" class=" container">
                        <div class="text-start">
                            <h4 class="mb-0 fw-bold" style="color: #2A5044;">Daftar <i
                                    class="fa-solid fa-right-to-bracket" style="color: #FFC20B;"></i></h4>
                            <p class="mb-0 text-secondary mt-2">Selalu Membantu Perjalanan Ibadah Anda</p>
                        </div>
                        <hr>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <div class="row justify-content-between">
                                <div class="col-auto">
                                    Silahkan lengkapi semua data!
                                </div>
                                <div class="col-auto">
                                    <a type="button" class="text-dark " data-bs-dismiss="alert" aria-label="Close"><i
                                            class="fa-solid fa-xmark"></i></a>
                                </div>
                            </div>
                        </div>
                        @csrf
                        <div class="row justify-content-center">
                            <div class="col-xl-6 col-md-6 col-sm-12">
                                <div class="input-group mb-2">
                                    <span class="input-group-text text-center text-secondary" id="basic-addon1"
                                        style="width: 45px;"><i class="fa-solid fa-file-signature"></i></span>
                                    <input class="form-control" type="text" name="namaBiro" id="namaBiro"
                                        placeholder="Input Nama Biro" required>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6 col-sm-12">
                                <div class="input-group mb-2">
                                    <span class="input-group-text text-center text-secondary" id="basic-addon1"
                                        style="width: 45px;"><i class="fa-solid fa-file-signature"></i></span>
                                    <input class="form-control" type="text" name="namaPT" id="namaPT"
                                        placeholder="Input Nama PT" required>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6 col-sm-12">
                                <div class="input-group mb-2">
                                    <span class="input-group-text text-center text-secondary" id="basic-addon1"
                                        style="width: 45px;"><i class="fa-solid fa-user"></i></span>
                                    <input class="form-control" type="text" name="pemilik" id="pemilik"
                                        placeholder="Input Pemilik" required>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6 col-sm-12">
                                <div class="input-group mb-2">
                                    <span class="input-group-text text-center text-secondary" id="basic-addon1"
                                        style="width: 45px;"><i class="fa-solid fa-envelopes-bulk"></i></span>
                                    <input class="form-control" type="text" name="ijin" id="ijin"
                                        placeholder="Input Ijin Biro Umroh" required>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6 col-sm-12">
                                <div class="input-group text-center mb-2">
                                    <span class="input-group-text text-center text-secondary" id="basic-addon1"
                                        style="width: 45px;"><i class="fa-solid fa-location-dot"></i></span>
                                    <input class="form-control" type="text" name="alamat" id="alamat"
                                        placeholder="Input Alamat" required>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6 col-sm-12 mb-2">
                                <div class="input-group">
                                    <span class="input-group-text text-center text-secondary" id="basic-addon1"
                                        style="width: 45px;"><i class="fa-solid fa-phone"></i></span>
                                    <input class="form-control" type="tel" name="phone" id="phone"
                                        placeholder="Input Nomor Telepon" required>
                                </div>
                                <small class="text-danger d-none" style="font-size: 0.85em;" id="invalidTelp">Nomor telepon tidak valid</small>
                            </div>
                            <div class="col-xl-6 col-md-6 col-sm-12">
                                <div class="input-group mb-2">
                                    <span class="input-group-text text-center text-secondary" id="basic-addon1"
                                        style="width: 45px;">@</span>
                                    <input class="form-control" placeholder="Input email" type="email" name="email"
                                        id="email" required>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6 col-sm-12">
                                <div class="input-group mb-2">
                                    <span class="input-group-text text-center text-secondary" id="basic-addon1"
                                        style="width: 45px;"><a href="#" onclick="showPassword()" class="text-decoration-none text-dark"><i class="fa-solid fa-eye"></i></a></span>
                                    <input class="form-control form-custom show-password" placeholder="Input password" type="password"
                                        name="password" id="passwordDaftar" required>
                                </div>
                                <small class="text-danger d-none" style="font-size: 0.85em" id="invalidPassword">Password minimal 8 karakter</small>
                            </div>
                        </div>
                        <div class="d-grid mb-4">
                            <button class="btn btn-warning fw-bold mt-4" type="submit" id="btnDaftar" disabled>Daftar</button>
                            <!-- <button class="btn btn-danger fw-bold mt-2" type="reset">Reset</button> -->
                        </div>
                        <div class="separator text-center">
                            <p class="m-0 ask-about-account text-secondary">Sudah punya akun?</p>
                            <hr class="p-0 m-0">
                        </div>
                        <div class="d-grid mt-3">
                            <button class="btn btn-outline-warning fw-bold mt-2 mb-4" data-bs-target="#loginModal"
                                data-bs-toggle="modal">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- REGISTRATION END --}}

    {{-- LOGIN START --}}

    <div class="modal fade mt-5" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content mt-5" style="border-radius: 10px;">
                <div class="modal-header overflow-hidden text-center p-0" style="background-color: #315E50;">
                    <div class="vector-header-login text-end p-2">
                        <a type="button" class="m-3 text-light" data-bs-dismiss="modal" aria-label="Close"><i
                                class="fa-solid fa-xmark"></i></a>
                    </div>
                </div>
                <div class="modal-body container">
                    <form action="/login" method="post" class=" container">
                        <div class="text-start">
                            <h4 class="mb-0 fw-bold" style="color: #2A5044;">Login <i
                                    class="fa-solid fa-right-to-bracket" style="color: #FFC20B;"></i></h4>
                            <p class="mb-0 text-secondary mt-2">Selalu Membantu Perjalanan Ibadah Anda</p>
                        </div>
                        <hr>
                        @csrf
                        <div class="input-group">
                            <span class="input-group-text mb-2 text-secondary" id="basic-addon1"
                                style="width: 45px;">@</span>
                            <input class="form-control form-custom mb-2 input-login" type="email" name="email"
                                id="email" placeholder="Input email" required>
                        </div>
                        <div class="input-group">
                            <span class="input-group-text text-secondary" id="basic-addon1" style="width: 45px;">
                                <a href="#" onclick="showPassword()" class="text-decoration-none text-dark"><i class="fa-solid fa-eye"></i></a>
                            </span>
                            <input class="form-control form-custom show-password" placeholder="Input password" type="password"
                                name="password" id="passwordLogin" required>
                        </div>
                        <div class="d-grid mb-4">
                            <button class="btn btn-warning fw-bold mt-4 mb-1" type="submit" id="btnLogin">Login</button>
                        </div>
                        <div class="separator text-center">
                            <p class="m-0 ask-about-account text-secondary">Belum punya akun?</p>
                            <hr class="p-0 m-0">
                        </div>
                        <div class="d-grid mt-3">
                            <button class="btn btn-outline-warning fw-bold mt-2 mb-4" data-bs-target="#registerModal"
                                data-bs-toggle="modal">Daftar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- LOGIN END --}}

    {{-- PAKET START --}}

    @auth

    <div class="modal fade" id="paketModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="border-radius: 10px;">
                <div class="modal-header overflow-hidden text-center p-0" style="background-color: #315E50;">
                    <div class="vector-header-daftar text-end p-2">
                        <a type="button" class="m-3 text-light" data-bs-dismiss="modal" aria-label="Close"><i
                                class="fa-solid fa-xmark"></i></a>
                    </div>
                </div>
                <div class="modal-body container">
                    <form action="/paket/create" method="post" enctype="multipart/form-data" class="form-floating container">
                        @csrf
                        <div class="text-start mt-3">
                            <h4 class="mb-0 fw-bold" style="color: #2A5044;">Tambah Paket <i class="fa-solid fa-kaaba"
                                    style="color: #FFC20B;"></i></h4>
                            <p class="mb-0 text-secondary mt-2">Selalu Membantu Perjalanan Ibadah Anda</p>
                        </div>
                        <hr>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <div class="row justify-content-between">
                                <div class="col-auto">
                                    Silahkan lengkapi semua data!
                                </div>
                                <div class="col-auto">
                                    <a type="button" class="text-dark " data-bs-dismiss="alert" aria-label="Close"><i
                                            class="fa-solid fa-xmark"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-12">
                                <h6 class="fw-semibold text-green-custom mb-2">Input Nama</h6>
                                <input type="text" name="name" id="name" class="form-control" placeholder="Input Nama" required>
                            </div>
                            <h6 class="fw-semibold text-green-custom mb-2 mt-4">Input Tanggal</h6>
                            <div class="col-xl-6 col-md-6 col-sm-12">
                                <div class="form-floating mb-2">
                                    <input class="form-control" type="date" name="berangkat" id="floatingInputValue"
                                        placeholder="Input Tanggal Keberangkatan" required>
                                    <label for="floatingInputValue">Input Tanggal Keberangkatan</label>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6 col-sm-12">
                                <div class="form-floating mb-2">
                                    <input class="form-control" type="date" name="pulang" id="floatingInputValue"
                                        placeholder="Input Tanggal Keberangkatan" required>
                                    <label for="floatingInputValue">Input Tanggal Kepulangan</label>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6 col-sm-12">
                                <div class="form-floating mb-2">
                                    <input class="form-control" type="date" name="tanggal_kadaluarsa" id="floatingInputValue"
                                        placeholder="Input Tanggal Kadaluarsa" required>
                                    <label for="floatingInputValue">Input Tanggal Kadaluarsa</label>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <h6 class="fw-semibold text-green-custom mb-2 mt-4">Input Detail Paket</h6>
                            <div class="col-xl-6 col-md-6 col-sm-12">
                                <div class="input-group mb-2">
                                    <span class="input-group-text text-center text-secondary" id="basic-addon1"
                                        style="width: 45px;"><i class="fa-solid fa-plane-circle-check"></i></span>
                                    <input class="form-control form-custom" placeholder="Input Bandara Keberangkatan"
                                        type="text" name="bandara" id="bandara" required>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6 col-sm-12">
                                <div class="input-group mb-2">
                                    <span class="input-group-text text-center text-secondary" id="basic-addon1"
                                        style="width: 45px;"><i class="fa-solid fa-plane-circle-check"></i></span>
                                    <input class="form-control form-custom" placeholder="Input Airlines" type="text"
                                        name="airline" id="airline" required>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6 col-sm-12">
                                <div class="input-group mb-2">
                                    <span class="input-group-text text-center text-secondary" id="basic-addon1"
                                        style="width: 45px;"><i class="fa-solid fa-building-user"></i></span>
                                    <input class="form-control form-custom" placeholder="Input Kota" type="text"
                                        name="kota" id="kota" required>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6 col-sm-12">
                                <div class="input-group mb-2">
                                    <span class="input-group-text text-center text-secondary" id="basic-addon1"
                                        style="width: 45px;"><i class="fa-solid fa-file-invoice-dollar"></i></span>
                                    <input class="form-control form-custom" placeholder="Input Harga Paket" type="text"
                                        name="harga" id="harga" required>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <h6 class="fw-semibold text-green-custom mb-2 mt-4">Pilih Rute Pemberangkatan</h6>
                            <div class="row justify-content-center">
                                <div class="col-xl-6 col-sm-6 pilih-direct">
                                    <label for="" onclick="directAktif()"
                                        class="custom-radio text-center mb-2 direct-responsive"
                                        id="custom-radio-direct">
                                        Direct
                                    </label>
                                    <input type="radio" name="flight" value="direct" id="custom-radio-direct-input">
                                </div>
                                <div class="col-xl-6 col-sm-6 pilih-transit">
                                    <label for="" onclick="transitAktif()" class="custom-radio text-center mb-3"
                                        id="custom-radio-transit">
                                        Transit
                                    </label>
                                    <input type="radio" name="flight" value="transit" id="custom-radio-transit-input">
                                </div>
                                <div class="col-xl-6 col-sm-12"></div>
                                <div class="col-xl-12 col-sm-12">
                                    <div class="input-group mb-2" id="kota-transit">
                                        <span class="input-group-text text-center text-secondary" id="basic-addon1"
                                            style="width: 45px;"><i class="fa-solid fa-location-dot"></i></span>
                                        <input type="text" name="kota-transit" class="form-control"
                                            placeholder="Masukan Kota Transit">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <h6 class="fw-semibold text-green-custom mb-2 mt-4">Pilih Fasilitas yang disediakan</h6>
                            <div class="row justify-content-start p-0">
                                <div class="col-sm-6 col-lg-3 mb-3 text-center checkbox-custom">
                                    <label for="" class="sebaris label-custom-checkbox" id="label-custom-checkbox-tiket-pesawat"
                                        onclick="tiketPesawatAktif()">Tiket
                                        Pesawat <i class="fa-solid fa-ticket ms-2"></i></label>
                                    <input type="checkbox" name="tiket" id="custom-checkbox-tiket-pesawat"
                                        class="custom-checkbox">
                                </div>
                                <div class="col-sm-6 col-lg-3 mb-3 text-center checkbox-custom">
                                    <label for="" class="sebaris label-custom-checkbox" id="label-custom-checkbox-visa"
                                        onclick="visaAktif()">Visa-Siskohat <i
                                            class="fa-brands fa-cc-visa ms-2"></i></label>
                                    <input type="checkbox" name="visa" id="custom-checkbox-visa"
                                        class="custom-checkbox">
                                </div>
                                <div class="col-sm-6 col-lg-3 mb-3 text-center checkbox-custom">
                                    <label for="" class="sebaris label-custom-checkbox" id="label-custom-checkbox-akomodasi"
                                        onclick="akomodasiAktif()">Akomodasi di Saudi <i
                                            class="fa-solid fa-hotel ms-2"></i></label>
                                    <input type="checkbox" name="akomodasi" id="custom-checkbox-akomodasi"
                                        class="custom-checkbox">
                                </div>
                                <div class="col-sm-6 col-lg-3 mb-3 text-center checkbox-custom">
                                    <label for="" class="sebaris label-custom-checkbox" id="label-custom-checkbox-makan"
                                        onclick="makanAktif()">Makan di Saudi <i
                                            class="fa-solid fa-utensils ms-2"></i></label>
                                    <input type="checkbox" name="makan" id="custom-checkbox-makan"
                                        class="custom-checkbox">
                                </div>
                                <div class="col-sm-6 col-lg-3 mb-3 text-center checkbox-custom">
                                    <label for="" class="sebaris label-custom-checkbox" id="label-custom-checkbox-umroh"
                                        onclick="umrohAktif()">Umroh 3 kali <i
                                            class="fa-solid fa-kaaba ms-2"></i></label>
                                    <input type="checkbox" name="umroh" id="custom-checkbox-umroh"
                                        class="custom-checkbox">
                                </div>
                                <div class="col-sm-6 col-lg-3 mb-3 text-center checkbox-custom">
                                    <label for="" class="sebaris label-custom-checkbox" id="label-custom-checkbox-paket-tour"
                                        onclick="paketTourAktif()">Paket
                                        Tour<i class="fa-solid fa-kaaba ms-2"></i></label>
                                    <input type="checkbox" name="paketTour" id="custom-checkbox-paket-tour"
                                        class="custom-checkbox">
                                </div>
                                <div class="col-sm-6 col-lg-3 mb-3 text-center checkbox-custom">
                                    <label for="" class="sebaris label-custom-checkbox" id="label-custom-checkbox-airport"
                                        onclick="airportAktif()">Airport Handling <i
                                            class="fa-solid fa-plane-departure ms-2"></i></label>
                                    <input type="checkbox" name="airport" id="custom-checkbox-airport"
                                        class="custom-checkbox">
                                </div>
                                <div class="col-sm-6 col-lg-3 mb-3 text-center checkbox-custom">
                                    <label for="" class="sebaris label-custom-checkbox" id="label-custom-checkbox-bus"
                                        onclick="busAktif()">Bus Selama di Saudi <i
                                            class="fa-solid fa-bus ms-2"></i></label>
                                    <input type="checkbox" name="bus" id="custom-checkbox-bus" class="custom-checkbox">
                                </div>
                                <div class="col-sm-6 col-lg-3 mb-3 text-center checkbox-custom">
                                    <label for="" class="sebaris label-custom-checkbox" id="label-custom-checkbox-zamzam"
                                        onclick="zamzamAktif()">Zam Zam 5 liter <i
                                            class="fa-solid fa-bottle-water ms-2"></i></label>
                                    <input type="checkbox" name="zam" id="custom-checkbox-zamzam"
                                        class="custom-checkbox">
                                </div>
                                <div class="col-sm-6 col-lg-3 mb-3 text-center checkbox-custom">
                                    <label for="" class="sebaris label-custom-checkbox" id="label-custom-checkbox-passport"
                                        onclick="passportAktif()">Passport <i
                                            class="fa-solid fa-passport ms-2"></i></label>
                                    <input type="checkbox" name="passport" id="custom-checkbox-passport"
                                        class="custom-checkbox">
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <h6 class="fw-semibold text-green-custom mb-2 mt-4">Masukan gambar</h6>
                            <input type="file" name="media" id="thumbnail">
                        </div>
                        <hr>
                        <div class="d-grid mb-4">
                            <button class="btn btn-warning fw-bold mt-3" type="submit">Tambahkan</button>
                            <!-- <button class="btn btn-danger fw-bold mt-2" type="reset">Reset</button> -->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endauth

    {{-- PAKET END --}}

    {{-- LOGOUT START --}}

    <div class="modal fade mt-5" id="logoutModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content mt-5" style="border-radius: 10px;">
                <div class="modal-body container">
                    <div class="text-start">
                        <h4 class="mb-0 fw-bold" style="color: #2A5044;">Logout <i class="fa-solid fa-power-off"
                                style="color: #FFC20B;"></i></h4>
                        <p class="mb-0 text-secondary mt-2 text-danger">Apakah Anda ingin Logout sekarang?</p>
                        <hr>
                        <div class="row justify-content-center gap-0">
                            <div class="col-6">
                                <div class="d-grid">
                                    <a href="/logout" class="btn btn-outline-warning w-100 fw-bold">Ya</a>
                                </div>
                            </div>
                            <div class="col-6 m-0">
                                <div class="d-grid">
                                    <a class="btn btn-warning fw-bold w-100" data-bs-dismiss="modal"
                                        aria-label="Close">Tidak</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- LOGOUT END --}}

    {{-- --}}
    <div class="modal fade mt-5" id="validate" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content mt-5" style="border-radius: 10px;">
                <div class="modal-body container">
                    <div class="text-start">
                        <h4 class="mb-0 fw-bold" style="color: #2A5044;">Hapus paket <i class="fa-solid fa-trash-can" style="color: #FFC20B;"></i></h4>
                        <p class="mb-0 text-secondary mt-2 text-danger">Apakah Anda yakin ingin menghapus paket?</p>
                        <hr>
                        <div class="row justify-content-center gap-0">
                            <div class="col-6">
                                <div class="d-grid">
                                    <a href="#" class="btn btn-danger w-100 fw-bold">Ya</a>
                                </div>
                            </div>
                            <div class="col-6 m-0">
                                <div class="d-grid">
                                    <a class="btn btn-outline-danger fw-bold w-100" data-bs-dismiss="modal"
                                        aria-label="Close">Tidak</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- --}}

    {{-- lokasi --}}
    {{-- <div class="container my-5">
        <div class="d-flex justify-content-center row">
            <div class="container content-terbaru">
                <h4 class="fw-semibold mb-4 shadow judul">Lokasi</h4>
                <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d19522.93534750509!2d109.91440995754641!3d-7.294887979533977!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2s!5e0!3m2!1sen!2sid!4v1714828638906!5m2!1sen!2sid" width="600" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="shadow"></iframe>
            </div>
        </div>
    </div> --}}
    {{-- lokasi end --}}

    <div class="footer">
        {{-- <div class="footer-canvas text-center text-light">
            <!-- <p>Copyright © 2023 Hana Safar All rights reserved</p> -->
        </div> --}}
        <div class="container">
            <div class="row">
                <div class="col-md-4 text-start">
                    <div class="fs-4 fw-bold text-light mb-4">Hana Safar</div>
                    <div class="row justify-content-start">
                        <div class="col-auto text-start" title="Instagram">
                            <i class='bx text-warning bxl-instagram fs-4'></i>
                        </div>
                        <div class="col-auto text-start" title="Facebook">
                            <i class='bx text-warning bxl-facebook-square fs-4'></i>
                        </div>
                        <div class="col-auto text-start" title="Whatsapp">
                            <i class='bx text-warning bxl-whatsapp fs-4'></i>
                        </div>
                        <div class="col-auto text-start" title="Twitter">
                            <i class='bx text-warning bxl-twitter fs-4'></i>
                        </div>
                        {{-- <div class="col-auto text-start" title="Instagram">
                            <i class='bx bxl-instagram fs-5' style="color: #dadada;"></i>
                        </div>
                        <div class="col-auto text-start" title="Facebook">
                            <i class='bx bxl-facebook-square fs-5' style="color: #dadada;"></i>
                        </div>
                        <div class="col-auto text-start" title="Whatsapp">
                            <i class='bx bxl-whatsapp fs-5' style="color: #dadada;"></i>
                        </div>
                        <div class="col-auto text-start" title="Twitter">
                            <i class='bx bxl-twitter fs-5' style="color: #dadada;"></i>
                        </div> --}}
                    </div>
                    <small class="mt-0" style="color: #dadada;">hanasafar@gmail.com</small>
                </div>
                <div class="col-md-4 px-5" style="border-inline: 1px solid grey;">
                    <div class="text-center text-light" style="display: flex; justify-content: center; align-items: center; text-align: center; height: 100%;">
                        <i class="fa-solid fa-quote-left text-warning fs-3 me-2" style="margin-top: -20px;"></i>
                        <i>Selalu membantu perjalanan Anda</i>
                        <i class="fa-solid fa-quote-right text-warning fs-3 ms-2" style="margin-bottom: -20px;"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="/js/script.js"></script>
    <script src="/js/script-custom.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/dropify/dist/js/dropify.min.js"></script>
    <script>
        // Mendapatkan elemen checkbox dan input teks
        // var checkbox = document.getElementById("inpshowInput");
        // var inputContainer = document.getElementById("inpinputContainer");

        // Menambahkan event listener untuk checkbox
        // checkbox.addEventListener("click", function() {
        //     // Jika checkbox dicentang, tampilkan input teks; jika tidak, sembunyikan input teks
        //     if (checkbox.checked) {
        //         inputContainer.style.display = "block";
        //     } else {
        //         inputContainer.style.display = "none";
        //     }
        // });

        // loader.style.display = "block";

        function showPassword() {
            let eye = document.querySelectorAll('.show-password')
            eye.forEach(e => {
                if (e.type == "password") {
                    e.setAttribute('type', 'text')
                } else {
                    e.setAttribute('type', 'password')
                }
            });
        }

        let telp = document.getElementById('phone')

        telp.addEventListener('input', function() {
            let telepon = telp.value
            if (telepon.length < 12 && telepon.length > 13) {
                document.getElementById('invalidTelp').classList.add('d-none')
            } else {
                document.getElementById('invalidTelp').classList.remove('d-none')
            }
        })

        let pass = document.getElementById('passwordDaftar')

        pass.addEventListener('input', function() {
            setTimeout(() => {
                let password = pass.value;
                let btnLogin = document.getElementById('btnDaftar');
                let msg = document.getElementById('invalidPassword');
                if (password.length < 8) {
                    btnLogin.setAttribute('disabled', 'true');
                    msg.classList.remove('d-none');
                } else {
                    btnLogin.removeAttribute('disabled');
                    msg.classList.add('d-none');
                }
            }, 500);
        })

        function removeLoader() {
            const loader = document.getElementById("loader-section");
            loader.style.display = "none";
        }

        $('#thumbnail').dropify({
            messages: {
                'default': 'Drag or drop the image here',
                'replace': 'Drag or drop the image or click to replace',
                'remove': 'Remove',
                'error': 'Ooops, something wrong happened.'
            }
        });

        // Show flash card (call this function when needed)
        function showFlashCard(message = "Data berhasil disimpan.", type = "success") {
            const flashCard = document.getElementById('flashCard');
            flashCard.classList.remove('alert-success', 'alert-danger', 'alert-warning');
            flashCard.classList.add('alert-' + type);
            flashCard.querySelector('strong').innerText = type.charAt(0).toUpperCase() + type.slice(1) + '!';
            flashCard.childNodes[2].nodeValue = ' ' + message;
            flashCard.style.display = 'block';
            setTimeout(() => {
                var alert = bootstrap.Alert.getOrCreateInstance(flashCard);
                alert.close();
            }, 3000);
        }


        document.addEventListener('DOMContentLoaded', function() {
            const carousel = document.querySelector('.carousel');
            const leftBtn = document.getElementById('arrow-left');
            const rightBtn = document.getElementById('arrow-right');
            const ads = document.querySelectorAll('.carousel .ads');
            let scrollAmount = 0;
            let itemWidth = ads.length > 0 ? ads[0].offsetWidth : 300;

            leftBtn.addEventListener('click', function() {
                carousel.scrollBy({
                    left: -itemWidth,
                    behavior: 'smooth'
                });
            });

            rightBtn.addEventListener('click', function() {
                carousel.scrollBy({
                    left: itemWidth,
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>

</html>