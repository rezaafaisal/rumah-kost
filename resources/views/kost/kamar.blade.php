@extends('layouts.master')
@section('title')
Temankost.id | {{ $title }}
@endsection
@section('body')
<div class="bg-image">
    <img src="{{ asset('images/kost-banner.jpg') }}" alt="" class=""
        style="object-fit: cover;height:300px;width:100%" loading="lazy">
    <div class="mask d-flex align-items-end"
        style="background: linear-gradient(to right,rgba(0, 0, 0, 0.8),rgba(0, 0, 0, 0), rgba(0, 0, 0, 0) ) ">
        <div class="w-100 p-3 p-md-4 p-lg-5">
            <span class="h2 text-light">Nama Kost Kamu</span>
        </div>
    </div>
</div>
<div class="container">
    <div class="jq-tab-wrapper" id="horizontalTab">


        {{-- <div class="w-100 pb-3 pt-4 border-bottom border-2 fw-bold">
        <span><a href="#" class="active-kost p-2 py-3 text-dark border-">Semua Kamar</a></span>
        <span><a href="info-kost" class="ms-4 text-dark">Info Kost</a></span>
    </div> --}}
        <ul class="pb-3 pt-4 fw-bold jq-tab-menu list-unstyled">
            <li class="py-2 jq-tab-title active" data-tab="1">Semua Kamar</li>
            <li class="py-2 jq-tab-title" data-tab="2">Info Kost</li>
        </ul>
        <div class="jq-tab-content-wrapper">
            <div class="jq-tab-content active" data-tab="1">
                <div class="mt-5 d-flex justify-content-around flex-wrap">
                    <ul class="d-flex list-unstyled">
                        {{-- <li class="nav-item">
            </li> --}}

                        <!-- Navbar dropdown -->
                        <li class="dropdown">
                            <a class="nav-link dropdown-toggle text-dark p-0" href="#" id="filterKamar" role="button"
                                data-mdb-toggle="dropdown" aria-expanded="false">Filter
                            </a>
                            <!-- Dropdown menu -->
                            <ul class="dropdown-menu layanan" aria-labelledby="filterKamar">
                                <li>
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-hand-holding-usd me-2"></i>Kosong</a>
                                </li>
                                <li>
                                    {{-- <li>
                        <hr class="dropdown-divider" />
                    </li> --}}
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-hand-holding-usd me-2"></i>Terisi</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="d-flex list-unstyled flex-column flex-md-row">
                        <li class="nav-item me-4">
                            Jumlah Kamar : <span class="badge badge-success">10</span>
                        </li>
                        <li class="nav-item me-4">
                            Jumlah Kamar Terisi : <span class="badge badge-danger">10</span>
                        </li>
                        <li class="nav-item me-3">
                            Jumlah Kamar Kosong : <span class="badge badge-primary">10</span>
                        </li>
                    </ul>
                </div>
                <style>

                </style>
                <div class="list-kamar mt-5">
                    <div class="d-flex flex-column flex-md-row flex-wrap justify-content-between">
                        @for($i = 0; $i < 8; $i++)
                            <div class="kamar rounded-2 shadow-1-strong bg-white">
                                <div class="row">
                                    <div class="col-6">
                                        <a href="/kamar-detail">
                                            <img src="{{ asset('images/kamar.jpg') }}" alt=""
                                                class="rounded-2">
                                        </a>
                                    </div>
                                    <div class="col-6 py-3">
                                        <div>No Kamar : <div class="badge badge-success">0{{ $i+1 }}</div>
                                        </div>
                                        <div class="badge bg-success mt-4">Kosong</div>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
                <div class="d-flex justify-content-center mt-4">
                    <nav aria-label="...">
                        <ul class="pagination pagination-circle">
                            <li class="page-item">
                                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active" aria-current="page">
                                <a class="page-link" href="#">2 <span class="visually-hidden">(current)</span></a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="jq-tab-content" data-tab="2">
            <div class="py-4 border-bottom border-2">
                <div class="row row-cols-2 row-cols-lg-4 py-2">
                    <div class="col py-2">
                        Kamar <span class="badge badge-primary">20</span>
                    </div>
                    <div class="col py-2">
                        Jumlah Komentar <span class="badge badge-primary">20</span>
                    </div>
                    <div class="col py-2">
                        Jumlah Pengikut <span class="badge badge-primary">20</span>
                    </div>
                    <div class="col py-2">
                        Bergabung dari <span class="badge badge-primary">20-08-2021</span>
                    </div>
                </div>
            </div>
            <div class="py-3 mt-3 border-bottom border-2">
                <h6 class="fw-bold">Deskripsi Kost</h6>
                <div class="col-md-8 col-lg-6">
                    <table class="tabel-detail table table-sm table-borderless">
                        <tr>
                            <td class=""><i class="fas fa-circle me-2"></i>Kategori</td>
                            <td>Campur</td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-circle me-2"></i>Alamat</td>
                            <td>Jln. Tn Abdul Razak no.56</td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-circle me-2"></i>Luas Kost</td>
                            <td>1 M<sup>2</sup></td>
                        </tr>
                    </table>
                </div>


            </div>
            <div class="py-3 mt-3 border-bottom border-2">
                <h6 class="fw-bold">Fasilitas Area Kost</h6>
                <table class="tabel-detail table table-sm table-borderless">
                    <tr>
                        <td><i class="fas fa-circle me-2"></i>WiFi</td>
                    </tr>
                    <tr>
                        <td><i class="fas fa-circle me-2"></i>ATM</td>
                    </tr>
                </table>
            </div>
            <div class="py-3 mt-3 border-bottom border-2">
                <h6 class="fw-bold">Lokasi</h6>
                <div class="py-5">
                    <div class="row justify-content-center">Lokasi</div>
                </div>
            </div>

            <div class="py-5 border-bottom border-2">
                <h6 class="fw-bold">Pemilik Kost</h6>
                <div class="d-flex mt-4">
                    <img src="{{ asset('images/profil.jpg') }}" alt="" class="rounded-circle"
                        style="width: 60px">
                    <div class="d-flex ps-4 flex-column justify-content-evenly">
                        <div class="">Pemilik Kost</div>
                        <div class="">Alamat Pemilik Kost</div>
                    </div>
                </div>
            </div>
            <div class="py-5 border-bottom border-2">
                <h6 class="fw-bold">Review Kost Kami</h6>
                <form action="" class="d-flex flex-column align-items-end">
                    <textarea name="" id="" cols="30" rows="5" class="form-control"></textarea>
                    <button class="btn btn-primary mt-3">Kirim Komentar</button>
                </form>

                <div class="komentar">
                    <div class="d-flex py-3 mt-3 border-top">
                        <img src="{{ asset('images/profil.jpg') }}" alt="" class="rounded-circle"
                            style="width: 60px;height:60px">
                        <div class="d-flex flex-column flex-wrap ms-3">
                            <span class="fw-bold">Ambo Nai | Mahasiswa</span>
                            <span style="font-size: 12px">15 Juni 2021</span>
                            <p class="mt-3">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure ipsum vitae maxime
                                consequuntur dolorem. Fugit maxime nihil aspernatur sint non nam repellat vel
                                tenetur aperiam odio. Dolore molestiae voluptatibus commodi!!
                            </p>
                        </div>
                    </div>
                    <div class="d-flex py-3 mt-3 border-top">
                        <img src="{{ asset('images/profil.jpg') }}" alt="" class="rounded-circle"
                            style="width: 60px;height:60px">
                        <div class="d-flex flex-column flex-wrap ms-3">
                            <span class="fw-bold">Ambo Nai | Mahasiswa</span>
                            <span style="font-size: 12px">15 Juni 2021</span>
                            <p class="mt-3">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure ipsum vitae maxime
                                consequuntur dolorem. Fugit maxime nihil aspernatur sint non nam repellat vel
                                tenetur aperiam odio. Dolore molestiae voluptatibus commodi!!
                            </p>
                        </div>
                    </div>
                    <div class="d-flex py-3 mt-3 border-top">
                        <img src="{{ asset('images/profil.jpg') }}" alt="" class="rounded-circle"
                            style="width: 60px;height:60px">
                        <div class="d-flex flex-column flex-wrap ms-3">
                            <span class="fw-bold">Ambo Nai | Mahasiswa</span>
                            <span style="font-size: 12px">15 Juni 2021</span>
                            <p class="mt-3">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure ipsum vitae maxime
                                consequuntur dolorem. Fugit maxime nihil aspernatur sint non nam repellat vel
                                tenetur aperiam odio. Dolore molestiae voluptatibus commodi!!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<script>
    $(document).ready(function () {
        $('#verticalTab').jqTabs({
            duration: 300
        });
        $('#horizontalTab').jqTabs({
            direction: 'horizontal',
            duration: 300
        });
    })

</script>
@endsection
