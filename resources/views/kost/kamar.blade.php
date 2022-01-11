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
    <div class="w-100 pb-3 pt-4 border-bottom border-2 fw-bold">
        <span><a href="#" class="active-kost p-2 py-3 text-dark border-">Semua Kamar</a></span>
        <span><a href="info-kost" class="ms-4 text-dark">Info Kost</a></span>
    </div>
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
                        <a class="dropdown-item" href="#"><i class="fas fa-hand-holding-usd me-2"></i>Kosong</a>
                    </li>
                    <li>
                        {{-- <li>
                        <hr class="dropdown-divider" />
                    </li> --}}
                        <a class="dropdown-item" href="#"><i class="fas fa-hand-holding-usd me-2"></i>Terisi</a>
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
                                <img src="{{ asset('images/kamar.jpg') }}" alt="" class="rounded-2">
                            </a>
                        </div>
                        <div class="col-6 py-3">
                            <div>No Kamar : <div class="badge badge-success">0{{$i+1}}</div>
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
@endsection
