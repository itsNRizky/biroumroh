<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('build/assets/app-041e359a.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    {{-- <link rel="stylesheet" href="{{asset('build/assets/assets/css/style.css') }}"> --}}
    <link rel="stylesheet" href="{{asset('css/admin.style.css') }}">
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
    <!-- Sidebar -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    {{-- <link rel="stylesheet" href="{{asset('css/sidebar.style.css')}}"> --}}
    {{-- <link rel="stylesheet" href="{{asset('css/sidebar.style-2.css')}}"> --}}
    <title>Hana Safar | {{ $title }}</title>
    <link rel="shortcut icon" href="{{asset('assets/brand/favicon.ico')}}" type="image/x-icon">
</head>
<style>
    body {
        font-family: 'Lato', sans-serif;
        background-color: #f5f4f4
    }

    .carousel-indicators button.carousel-indicators-admin {
        width: 7px;
        height: 7px;
        border-radius: 50%;
        background-color: rgb(173, 173, 173);
    }

    .carousel-indicators button.carousel-indicators-admin.active {
        background-color: #FFC107;
    }
</style>

<body onload="removeLoader()">
    <div class="loader-section" id="loader-section">
        <div class="position-absolute top-50 start-50 translate-middle">
            <span class="loader-custom"></span>
        </div>
    </div>

    <div class="wrapper d-flex align-items-stretch">
        <!-- navbar -->
        @include('../partials/sidebar')
        <!-- end navbar -->

        <div class="container-fluid p-4 p-md-5 pt-5">
            <div class="row">
                {{-- main dashboard --}}
                <div class="col-md-8">
                    <div class="dashboard-admin">
                        <h4 class="fw-semibold mb-4 title text-green bg-yellow shadow">Dashboard</h4>
                        {{-- aktivitas start --}}
                        <div class="mt-3 aktivitas">
                            <h5 class="text-green fw-semibold">Aktivitas <i class="fa-solid fa-chart-column text-yellow ms-2"></i></h5>
                            <div class="mt-2 content-aktivitas">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="py-3 px-3 bg-white shadow rounded">
                                            <h5 class="text-green sebaris fw-semibold">Member</h5>
                                            <hr class="mb-1 mt-0">
                                            <div class="fs-3 text-yellow text-center fw-semibold">
                                                {{$memberCount - 1}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="py-3 px-3 bg-white shadow rounded">
                                            <h5 class="text-green sebaris fw-semibold">Pengunjung</h5>
                                            <hr class="mb-1 mt-0">
                                            <div class="fs-3 text-yellow text-center fw-semibold">
                                                +50
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="py-3 px-3 bg-white shadow rounded">
                                            <h5 class="text-green sebaris fw-semibold">Paket</h5>
                                            <hr class="mb-1 mt-0">
                                            <div class="fs-3 text-yellow text-center fw-semibold">
                                                {{$paketCount}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- aktivitas end --}}
                        {{-- paket start --}}
                        <div class="mt-4 paket">
                            <h5 class="text-green fw-semibold">Paket terbaru <i class="fa-solid fa-cart-flatbed-suitcase text-yellow ms-2"></i></h5>
                            <div class="mt-2 paket-content">
                                <div class="row">

                                    @foreach ($pakets as $paket)

                                    <div class="col-md-6">
                                        <div class="card card-content m-0 p-0 shadow">
                                            <div class="card-header m-0 p-0 overflow-hidden">
                                                <div class="img"
                                                    style="background-image: url('{{asset('assets/img/destinasi/4.jpg')}}'); background-size: cover; background-position: center;">
                                                </div>
                                                {{-- <div class="img"
                                                    style="background-color: grey;');">
                                                </div> --}}
                                            </div>
                                            <div class="card-body m-0 px-3 pt-3 pb-3">
                                                <!--  -->
                                                <div class="row justify-content-between mb-0">
                                                    <div class="col-auto">
                                                        <h5 class="fw-bold title-content text-primary">
                                                            {{$paket->name}}
                                                        </h5>
                                                    </div>
                                                    <div class="col-auto">
                                                        <h6 class="text-success">
                                                            {{$paket->kode}}
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
                                                                : {{date('d-m-Y', strtotime($paket->tanggal_keberangkatan))}}</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="spec-1 fw-normal"><i
                                                                class='bx bx-bus fs-5 me-2 text-warning'></i>
                                                            <span>Pulang :
                                                                {{date('d-m-Y', strtotime($paket->tanggal_kepulangan))}}</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="spec-1 fw-normal"><i
                                                                class='bx bx-home fs-5 me-2 text-warning'></i>
                                                            <span>Kota :
                                                                {{$paket->kota}}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--  -->
                                                <!--  -->
                                                <div class="row justify-content-end">
                                                    <div class="col-auto mt-2">
                                                        <h5 class="mr-1 fw-bold text-primaryy" style="color: #2A5044;">Rp.
                                                            {{$paket->harga}}
                                                        </h5>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="d-grid gap-2">
                                                            <a class="btn btn-sm btn-warning text-dark fw-semibold"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#detailPaket{{$paket->id}}">Detail</a>
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
                        {{-- paket end --}}
                    </div>
                </div>
                {{-- end of dashboard --}}

                {{-- carousel --}}
                <div class="col-md-4">
                    {{-- carousel content --}}
                    <div id="carouselAdmin" class="carousel slide shadow rounded overflow-hidden" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            @foreach($carousels as $carousel => $item)
                            <button type="button" data-bs-target="#carouselAdmin" data-bs-slide-to="{{ $carousel }}" class="carousel-indicators-admin {{ $carousel == 0 ? 'active' : '' }}" aria-current="{{ $carousel == 0 ? 'true' : 'false' }}" aria-label="Slide {{ $carousel + 1 }}"></button>
                            @endforeach
                        </div>
                        <div class="carousel-inner">
                            @foreach($carousels as $carousel => $item)
                            <div class="carousel-item {{ $carousel == 0 ? 'active' : '' }}">
                                <div class="bg-secondary" style="width: 100%; aspect-ratio: 16 / 9;">
                                    <img src="{{ asset('storage/' . $item->media) }}" class="d-block w-100" alt="...">
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div> {{-- end carousel content --}}

                    {{-- carousel table --}}
                    <div class="row justify-content-between mt-3">
                        <div class="col-auto">
                            <h5 class="text-green fw-semibold">Carousel setting <i class="fa-solid fa-list-check text-yellow ms-2"></i></h5>
                        </div>
                        <div class="col-auto">
                            <a data-bs-toggle="modal" data-bs-target="#modalCarousel" class="text-red fw-semibold fs-5" style="cursor: pointer"><i class="fa-solid fa-plus"></i></a>
                        </div>
                    </div>
                    <div class="mt-2">
                        <ul class="list-group list-group-flush shadow">
                            {{-- carousel content list --}}

                            @forelse ($carousels as $carousel)
                            <li class="list-group-item">
                                <div class="row justify-content-between">
                                    <div class="col-10 text-green sebaris">
                                        {{$carousel->name}}
                                    </div>
                                    <div class="col-2 text-center">
                                        <a href="dashboard/{{$carousel->id}}"><i class="fa-regular fa-trash-can text-red"></i></a>
                                    </div>
                                </div>
                            </li>
                            @empty
                            <p class="text-center m-1 text-secondary">carousel empty!</p>
                            @endforelse
                        </ul>
                    </div>
                    {{-- end carousel table --}}
                </div>
                {{-- end carousel --}}
            </div>
        </div>
    </div>


    {{-- MODALS START --}}

    {{-- MODALS ADD CAROUSEL --}}
    <div class="modal fade" id="modalCarousel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-green">
                    <h1 class="modal-title fs-5 text-light fw-semibold" id="exampleModalLabel">Tambah gambar</h1>
                </div>
                <div class="modal-body">
                    <form action="/create/carousel" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="media" id="carousel-image" required>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-warning px-4">Tambahkan</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    {{-- MODALS ADD CAROUSEL END --}}

    @foreach ($pakets as $paket)

    {{-- MODALS DETAIL PAKET --}}
    <div class="modal fade" id="detailPaket{{$paket->id}}" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="border-radius: 10px;">
                <div class="modal-body p-0 overflow-x-hidden">
                    <div class="detail-modal-bg"
                        style="background: url('{{asset('storage/'. $paket->media)}}'); background-repeat: no-repeat; background-position: center; background-size: cover;">
                    </div>
                    <div class="container">
                        <div class="row justify-content-end">
                            <div class="col-auto">
                                <a type="button" class="my-3 text-dark" data-bs-dismiss="modal" aria-label="Close" title="Kembali"><i
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
                                    <h6 class="fw-semibold text-green mb-3 judul-sub-detail shadow">
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
                                <div class="col-5">{{$paket->name}}</div>
                                <!--  -->
                                <!--  -->
                                <div class="col-6">
                                    <p class="ms-3 mt-0 mb-2 me-0">Kode Paket</p>
                                </div>
                                <div class="col-1">:</div>
                                <div class="col-5">{{$paket->kode}}</div>
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
                                <div class="col-5">{{date('d-m-Y', strtotime($paket->tanggal_keberangkatan))}}</div>
                                <!--  -->
                                <div class="col-6">
                                    <p class="ms-3 mt-0 mb-2 me-0">Tanggal Kepulangan</p>
                                </div>
                                <div class="col-1">:</div>
                                <div class="col-5">{{date('d-m-Y', strtotime($paket->tanggal_kepulangan))}}</div>
                                <!--  -->
                                <!--  -->
                                <div class="col-6">
                                    <p class="ms-3 mt-0 mb-2 me-0">Kota</p>
                                </div>
                                <div class="col-1">:</div>
                                <div class="col-5">{{$paket->kota}}</div>
                                <!--  -->
                                <!--  -->
                                <div class="col-6">
                                    <p class="ms-3 mt-0 mb-2 me-0">Bandara Keberangkatan</p>
                                </div>
                                <div class="col-1">:</div>
                                <div class="col-5">{{$paket->bandara}}</div>
                                <!--  -->
                                <!--  -->
                                <div class="col-6">
                                    <p class="ms-3 mt-0 mb-2 me-0">Nama Airlines</p>
                                </div>
                                <div class="col-1">:</div>
                                <div class="col-5">{{$paket->airline}}</div>
                                <!--  -->
                                <!--  -->
                                <div class="col-6">
                                    <p class="ms-3 mt-0 mb-2 me-0">Jenis Pemberangkatan</p>
                                </div>
                                <div class="col-1">:</div>
                                {{-- @if ($item->flight == 'direct')
                                <div class="col-5">Direct</div>
                                @else --}}
                                <div class="col-5">{{$paket->flight}}</div>
                                <!--  -->
                                <!--  -->
                                @if ($paket->flight == 'transit')
                                <div class="col-6">
                                    <p class="ms-3 mt-0 mb-2 me-0">Kota Transit</p>
                                </div>
                                <div class="col-1">:</div>
                                <div class="col-5">{{$paket->kota_transit}}</div>
                                @else
                                @endif
                                <!--  -->
                                <div class="col-6">
                                    <p class="ms-3 mt-0 mb-2 me-0">Harga Paket</p>
                                </div>
                                <div class="col-1">:</div>
                                <div class="col-5">Rp. {{$paket->harga}}</div>
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
                                        @if ($paket->tiket == 'yes')
                                        <div class="col-xl-3 col-md-6 col-sm-6">
                                            <p class="ms-0 mt-0 mb-3 me-0 fasilitas">Tiket Pesawat <i
                                                    class="fa-solid fa-plane-departure ms-2"></i></p>
                                        </div>
                                        @endif
                                        @if ($paket->visa == 'yes')
                                        <div class="col-xl-3 col-md-6 col-sm-6">
                                            <p class="ms-0 mt-0 mb-3 me-0 fasilitas">Visa-Siskohat <i
                                                    class="fa-brands fa-cc-visa ms-2"></i></p>
                                        </div>
                                        @endif
                                        @if ($paket->akomodasi == 'yes')
                                        <div class="col-xl-3 col-md-6 col-sm-6">
                                            <p class="ms-0 mt-0 mb-3 me-0 fasilitas">Akomodasi di Saudi <i
                                                    class="fa-solid fa-hotel ms-2"></i></p>
                                        </div>
                                        @endif
                                        @if ($paket->makan == 'yes')
                                        <div class="col-xl-3 col-md-6 col-sm-6">
                                            <p class="ms-0 mt-0 mb-3 me-0 fasilitas">Makan di Saudi <i
                                                    class="fa-solid fa-utensils ms-2"></i></p>
                                        </div>
                                        @endif
                                        @if ($paket->umroh == 'yes')
                                        <div class="col-xl-3 col-md-6 col-sm-6">
                                            <p class="ms-0 mt-0 mb-3 me-0 fasilitas">Umroh 3 Kali <i
                                                    class="fa-solid fa-kaaba ms-2"></i></p>
                                        </div>
                                        @endif
                                        @if ($paket->tour == !null)
                                        <div class="col-xl-3 col-md-6 col-sm-6">
                                            <p class="ms-0 mt-0 mb-3 me-0 fasilitas">Paket Tour <i
                                                    class="fa-solid fa-kaaba ms-2"></i></p>
                                        </div>
                                        @endif
                                        @if ($paket->airpot == 'yes')
                                        <div class="col-xl-3 col-md-6 col-sm-6">
                                            <p class="ms-0 mt-0 mb-3 me-0 fasilitas">Airport Handling <i
                                                    class="fa-solid fa-plane-departure ms-2"></i></p>
                                        </div>
                                        @endif
                                        @if ($paket->bus == 'yes')
                                        <div class="col-xl-3 col-md-6 col-sm-6">
                                            <p class="ms-0 mt-0 mb-3 me-0 fasilitas">Bus Selama di Saudi <i
                                                    class="fa-solid fa-bus ms-2"></i></p>
                                        </div>
                                        @endif
                                        @if ($paket->zam == 'yes')
                                        <div class="col-xl-3 col-md-6 col-sm-6">
                                            <p class="ms-0 mt-0 mb-3 me-0 fasilitas">Zam-zam 5 Liter <i
                                                    class="fa-solid fa-bottle-water ms-2"></i></p>
                                        </div>
                                        @endif
                                        @if ($paket->passport == 'yes')
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
    @endforeach

    {{-- END OF MODALS DETAIL PAKET --}}

    {{-- MODALS END --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"> </script>
    <script src="https://cdn.jsdelivr.net/npm/dropify/dist/js/dropify.min.js"></script>
    <script>
        function removeLoader() {
            document.getElementById('loader-section').classList.add('d-none')
        }

        $('#carousel-image').dropify({
            messages: {
                'default': 'Drag or drop the image here',
                'replace': 'Drag or drop the image or click to replace',
                'remove': 'Remove',
                'error': 'Ooops, something wrong happened.'
            }
        });
    </script>
    <!-- sidebar script -->
    <script src="{{asset('js/sidebar.jquery.min.js')}}"></script>
    <script src="{{asset('js/sidebar.popper.js')}}"></script>
    <script src="{{asset('js/sidebar.bootstrap.min.js')}}"></script>
    <script src="{{asset('js/sidebar.main.js')}}"></script>
    <!-- end sidebar script -->
    <script>
    </script>
</body>

</html>