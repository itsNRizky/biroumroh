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

    table.table,
    #detailMember .modal-body table.table {
        border-radius: 3px;
        overflow: hidden;
    }

    table.table tr th,
    #detailMember .modal-body table.table tr th {
        background-color: #FFC107 !important;
        color: #2A5044 !important;
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
                <div class="col-md-12">
                    <div class="dashboard-admin">
                        <h4 class="fw-semibold mb-4 title text-green bg-yellow shadow">Paket</h4>
                        <div class="mt-5">
                            <table class="table table-hover shadow bg-white w-100">
                                <tr>
                                    <th>No</th>
                                    <th>Nama Paket</th>
                                    <th>Kode Paket</th>
                                    <th>Cover paket</th>
                                    <th>Lihat</th>
                                    <th>Status konfirmasi</th>
                                </tr>
                                @foreach ($pakets as $paket)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$paket->name}}</td>
                                    <td>{{$paket->kode}}</td>
                                    <td>
                                        <img src="{{ asset('storage/' . $paket->media) }}" alt="" class="w-100 img-thumbnail">
                                    </td>
                                    <td>
                                        <a data-bs-toggle="modal" data-bs-target="#detailPaket{{$paket->id}}" class="badge text-decoration-none rounded-pill text-bg-success" style="cursor: pointer">lihat</a>
                                    </td>
                                    <td>
                                        <div class="badge rounded-pill text-bg-info">{{$paket->status}}</div>
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
                {{-- end of dashboard --}}
            </div>
        </div>
    </div>
    </div>


    @foreach ($pakets as $paket)

    {{-- MODAL PAKET --}}
    <div class="modal fade" id="detailPaket{{$paket->id}}" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="border-radius: 10px;">
                <div class="modal-body p-0 overflow-x-hidden">
                    {{-- <div class="detail-modal-bg"
            style="background: url('{{asset('storage/'. $paket->media)}}'); background-repeat: no-repeat; background-position: center; background-size: cover;">
                </div> --}}
                <div class="container">
                    <div class="row justify-content-end">
                        <div class="col-auto">
                            <a type="button" class="my-3 text-dark" data-bs-toggle="modal" data-bs-target="#detailMember" title="Kembali"><i
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
                            {{-- <div class="col-5">Nama</div> --}}
                            <!--  -->
                            <!--  -->
                            <div class="col-6">
                                <p class="ms-3 mt-0 mb-2 me-0">Kode Paket</p>
                            </div>
                            <div class="col-1">:</div>
                            <div class="col-5">{{$paket->kode}}</div>
                            {{-- <div class="col-5">kode</div> --}}
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
                            {{-- <div class="col-5">tanggal</div> --}}
                            <!--  -->
                            <div class="col-6">
                                <p class="ms-3 mt-0 mb-2 me-0">Tanggal Kepulangan</p>
                            </div>
                            <div class="col-1">:</div>
                            <div class="col-5">{{date('d-m-Y', strtotime($paket->tanggal_kepulangan))}}</div>
                            {{-- <div class="col-5">tanggal</div> --}}
                            <!--  -->
                            <!--  -->
                            <div class="col-6">
                                <p class="ms-3 mt-0 mb-2 me-0">Kota</p>
                            </div>
                            <div class="col-1">:</div>
                            <div class="col-5">{{$paket->kota}}</div>
                            {{-- <div class="col-5">kota</div> --}}
                            <!--  -->
                            <!--  -->
                            <div class="col-6">
                                <p class="ms-3 mt-0 mb-2 me-0">Bandara Keberangkatan</p>
                            </div>
                            <div class="col-1">:</div>
                            <div class="col-5">{{$paket->bandara}}</div>
                            {{-- <div class="col-5">bandara</div> --}}
                            <!--  -->
                            <!--  -->
                            <div class="col-6">
                                <p class="ms-3 mt-0 mb-2 me-0">Nama Airlines</p>
                            </div>
                            <div class="col-1">:</div>
                            <div class="col-5">{{$paket->airline}}</div>
                            {{-- <div class="col-5">nama</div> --}}
                            <!--  -->
                            <!--  -->
                            <div class="col-6">
                                <p class="ms-3 mt-0 mb-2 me-0">Jenis Pemberangkatan</p>
                            </div>
                            <div class="col-1">:</div>
                            <div class="col-5">{{$paket->flight}}</div>
                            {{-- <div class="col-5">jenis</div> --}}
                            <!--  -->
                            <!--  -->
                            @if ($paket->flight == 'transit')
                            <div class="col-6">
                                <p class="ms-3 mt-0 mb-2 me-0">Kota Transit</p>
                            </div>
                            <div class="col-1">:</div>
                            <div class="col-5">{{$paket->kota_transit}}</div>
                            @endif
                            <!--  -->
                            <div class="col-6">
                                <p class="ms-3 mt-0 mb-2 me-0">Harga Paket</p>
                            </div>
                            <div class="col-1">:</div>
                            <div class="col-5">Rp. {{$paket->harga}}</div>
                            {{-- <div class="col-5">Rp. lima ribu</div> --}}
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
                            <!--  -->
                            <div class="col-12">
                                <hr>
                                <form action="/dashboard/paket/update/{{$paket->id}}" method="post" enctype="multipart/form-data">
                                    @csrf

                                    <label for="">status</label><br>
                                    <input type="radio" id="accept" name="status" value="accept">
                                    <label for="accept">Setujui</label><br>
                                    <input type="radio" id="decline" name="status" value="decline">
                                    <label for="decline">Tidak Disetujui</label><br>


                                    <label for="change-thumbnail text-secondary mb-2">Input gambar thumbnail jika dingin diubah</label>
                                    <input type="file" id="change-thumbnail" name="media">
                                    <div class="text-end">
                                        <button type="submit" class="btn btn-warning mt-2 btn-warning px-5 text-green fw-semibold shadow">Simpan dan konfirmasi paket</button>
                                    </div>
                                </form>
                            </div>
                            <!--  -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    {{-- END MODAL PAKET --}}
    @endforeach


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"> </script>
    <script src="https://cdn.jsdelivr.net/npm/dropify/dist/js/dropify.min.js"></script>
    <script>
        function removeLoader() {
            document.getElementById('loader-section').classList.add('d-none')
        }

        $('#change-thumbnail').dropify({
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