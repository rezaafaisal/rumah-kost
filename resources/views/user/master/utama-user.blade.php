@extends('layouts.master-user')
@section('title')
Beranda
@endsection
@section('body')




<?php if (session()->has('alert-gagal')): ?>
<div class="alert-gagal" data-flashdata="{{ session()->get('alert-gagal') }}">
</div>
<?php endif ?>

<div class="container" style="padding-top: 100px">
        <h4 class="">Cari Kost</h4>
        <div class=" ms-4 mt-4">
    <span>Cari kost disini saja.</span>
    <div class="input-group mt-3">
        <div class="form-outline">
            <input id="search-input" type="search" class="form-control" placeholder="Cari Kost/Alamat/Kampus" />
        </div>
        <button id="search-button" type="button" class="btn btn-success btn-sm">
            <i class="fas fa-search"></i>
        </button>
    </div>
</div>

<div class="list-kampus mt-3">
    <h5>Cari kost Disekitaran :</h5>
    <div class="category-sekitar d-flex justify-content-start mt-5 gap-5">
        <div class=""><a href="#" class="text-success text-center" data-mdb-toggle="modal"
                data-mdb-target="#sekitar-kampus"><i class="fas fa-university fa-2x d-block"></i><span>Sekitar
                    Kampus</span></a></div>
        <div class=""><a href="#" class="text-success text-center"><i
                    class="fas fa-building fa-2x d-block"></i><span>Sekitar Perusahaan</span></a></div>
    </div>
    <div class="modal fade" id="sekitar-kampus" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">

                    <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="d-flex gap-2 h4 flex-wrap" id="">
                        <a href="#"><span class="badge bg-success">UINAM</span></a>
                        <a href="#"><span class="badge bg-success">UNM</span></a>
                        <a href="#"><span class="badge bg-success">UNISMUH</span></a>
                        <a href="#"><span class="badge bg-success">UIM</span></a>
                        <a href="#"><span class="badge bg-success">UMI</span></a>
                        <a href="#"><span class="badge bg-success">UNDIPA</span></a>
                        <a href="#"><span class="badge bg-success">STMIK</span></a>
                        <a href="#"><span class="badge bg-success">UNHAS</span></a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    {{-- <div class="collapse d-flex gap-2" id="collapseExample">
            <a href="#"><span class="badge bg-success">UINAM</span></a>
            <a href="#"><span class="badge bg-success">UINAM</span></a>
            <a href="#"><span class="badge bg-success">UINAM</span></a>
            <a href="#"><span class="badge bg-success">UINAM</span></a>
            <a href="#"><span class="badge bg-success">UINAM</span></a>
        </div> --}}
    {{-- <div class="row">
            <div class="col-5 col-md-6"></div>
            <div class="col-5 col-md-6"><a href="#"><span class="badge bg-success">UNM</span></a></div>
            <div class="col-5 col-md-6"><a href="#"><span class="badge bg-success">UNHAS</span></a></div>
            <div class="col-5 col-md-6"><a href="#"><span class="badge bg-success">UNDIPA</span></a></div>
            <div class="col-5 col-md-6"><a href="#"><span class="badge bg-success">UNISMUH</span></a></div>
            <div class="col-5 col-md-6"><a href="#"><span class="badge bg-success">UMI</span></a></div>
        </div> --}}
</div>
{{-- <div class="list-kost-kampus mt-5">
        <span class="h5">Cari kost sekitaran kampus Anda : </span>
        <div class="mt-4">
            <div class="row">
                <div class="large-12 columns">
                    <div class="owl-carousel">
@for($i = 0; $i < 12; $i++)
                            <div class="item pb-2">
                                <a href="/kampus{{ $i }}" class="text-dark">
<div class="shadow-2 p-2 card-kost rounded-4" style="background-color: white">

    <img src="{{ asset('images/uin.jpg') }}" class="card-img-top rounded-4" alt="..." />

    <div class="mt-2">
        <div class="fw-bold">UIN Alauddin Makassar</div>
        <div class="" style="font-size: 14px">Jl. Alauddin romang polong nomor 4</div>
        <h5 class="mt-3">
            <div class="badge bg-success">20 Kost Tersedia</div>
        </h5>


    </div>
</div>
</a>
</div>
@endfor
</div>
</div>
</div>
</div>
</div> --}}
<div class="list-kost-container mt-5">
    <div class="mt">
        <div class="row">
            <div class="large-12 columns">
                <div class="owl-nav d-flex justify-content-between quicksand">
                    <div class="px-2">
                        <span class="">Layanan Kost Sekitar Anda : </span> <span
                            class="border-bottom border-2 border-primary">Makassar</span>
                    </div>

                    <div class="d-flex">
                        <div class="px-4">
                            <a href="/all" class="btn">Lihat semua</a>
                        </div>
                        <div class="px-4 ">
                            <button class="btn prev"><i class="fas fa-chevron-left"></i></button>
                            <button class="btn next"><i class="fas fa-chevron-right"></i></button>
                        </div>
                    </div>

                </div>
                <div id="owl-carousel1" class="owl-carousel">
                    @for($i = 0; $i < 12; $i++)
                        <div class="item py-3 quicksand">
                            <a href="/kamar" class="text-dark">
                                <div class="card card-kost shadow-2 rounded-4" style="">

                                    <img src="{{ asset('images/kost.jpeg') }}"
                                        class="card-img-top rounded-4" alt="..." />
                                    <div class="card-body">
                                        <div class="data-category py-1">
                                            <span class="badge bg-primary">Campur</span><span class="ms-3"><i
                                                    class="fas fa-star cl-gold"></i> <span>4.5</span></span>
                                        </div>
                                        <div class="data-info">
                                            <div class="data-info-nama">Kost Cahaya jln manggarupi</div>
                                            <div class="fw-bold">Jln. Alauddin no 36</div>
                                        </div>

                                        <div class="data-update pt-2">
                                            <span>Update : </span><span class="fw-bold">12 Desember 2021</span>
                                        </div>
                                        <div class="data-harga py-2 fs-6">
                                            <span class="fw-bold">Rp. 500.000</span><span> / Bulan</span>
                                        </div>
                                    </div>
                                </div>
                            </a>

                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>
    <div class="mt-2 d-flex justify-content-center">

    </div>
</div>
<div class="list-kost-container mt-5">
    <span class="">Kost yang Diskon Saat ini : </span> <a href=""
        class="border-bottom border-2 border-primary">Makassar</a>
    <div class="mt-4">
        <div class="row">
            <div class="large-12 columns">
                <div class="owl-nav d-flex justify-content-end">
                    <div class="px-4">
                        <a href="#" class="btn">Lihat semua</a>
                    </div>
                    <div class="px-4 ">
                        <button class="btn prev2"><i class="fas fa-chevron-left"></i></button>
                        <button class="btn next2"><i class="fas fa-chevron-right"></i></button>
                    </div>
                </div>
                <div id="owl-carousel2" class="owl-carousel">
                    @for($i = 0; $i < 12; $i++)
                        <div class="item py-3 quicksand">
                            <div class="card card-kost shadow-2 rounded-4" style="">
                                <a href="/kamar">
                                    <img src="{{ asset('images/kost.jpeg') }}"
                                        class="card-img-top rounded-4" alt="..." />
                                </a>
                                <div class="card-body">
                                    <div class="data-category py-1">
                                        <span class="badge bg-primary">Campur</span><span class="ms-3"><i
                                                class="fas fa-star cl-gold"></i> <span>4.5</span></span>
                                    </div>
                                    <div class="data-info">
                                        <div class="data-info-nama">Kost Cahaya jln manggarupi</div>
                                        <div class="fw-bold">Jln. Alauddin no 36</div>
                                    </div>

                                    <div class="data-update pt-2">
                                        <span>Update : </span><span class="fw-bold">12 Desember 2021</span>
                                    </div>
                                    <div class="data-harga py-2 fs-6">
                                        <span class="fw-bold">Rp. 500.000</span><span> / Bulan</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>
    <div class="mt-2 d-flex justify-content-center">
        <a href="#" class="btn btn-outline-primary">Lihat semua</a>
    </div>
</div>
<div class="list-kost-container mt-5">
    <span class="border-bottom border-2 border-primary text-primary">Lihat Daerah Layanan Kami</span>
    <div class="mt-4 container">
        <div class="row row-cols-1 row-cols-md-3 justify-content-between">
            <a href="#" class="col daerah-layanan"><span>Makassar</span></a>
            <a href="#" class="col daerah-layanan"><span>Pangkep</span></a>
            <a href="#" class="col daerah-layanan"><span>Lihat Semua</span></a>
        </div>
    </div>
</div>

</div>

@endsection
