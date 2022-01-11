@extends('layouts.master')
@section('title')
{{ $title }}
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
    <div class="pb-2 pt-4 border-bottom border-2 fw-bold">
        <div class="row">
            <div class="col">
                <span><a href="kamar" class="p-2 text-dark">Semua Kamar</a></span>
                <span><a href="info-kost" class="active-kost p-2 ms-4 text-dark">Info Kost</a></span>
            </div>
        </div>
    </div>
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
            <table class="tabel-detail table table-sm table-borderless" >
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
            <img src="{{ asset('images/profil.jpg') }}" alt="" class="rounded-circle" style="width: 60px">
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
                <img src="{{ asset('images/profil.jpg') }}" alt="" class="rounded-circle" style="width: 60px;height:60px">
                <div class="d-flex flex-column flex-wrap ms-3">
                    <span class="fw-bold">Ambo Nai | Mahasiswa</span>
                    <span style="font-size: 12px">15 Juni 2021</span>
                    <p class="mt-3">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure ipsum vitae maxime consequuntur dolorem. Fugit maxime nihil aspernatur sint non nam repellat vel tenetur aperiam odio. Dolore molestiae voluptatibus commodi!!
                    </p>
                </div>
            </div>
            <div class="d-flex py-3 mt-3 border-top">
                <img src="{{ asset('images/profil.jpg') }}" alt="" class="rounded-circle" style="width: 60px;height:60px">
                <div class="d-flex flex-column flex-wrap ms-3">
                    <span class="fw-bold">Ambo Nai | Mahasiswa</span>
                    <span style="font-size: 12px">15 Juni 2021</span>
                    <p class="mt-3">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure ipsum vitae maxime consequuntur dolorem. Fugit maxime nihil aspernatur sint non nam repellat vel tenetur aperiam odio. Dolore molestiae voluptatibus commodi!!
                    </p>
                </div>
            </div>
            <div class="d-flex py-3 mt-3 border-top">
                <img src="{{ asset('images/profil.jpg') }}" alt="" class="rounded-circle" style="width: 60px;height:60px">
                <div class="d-flex flex-column flex-wrap ms-3">
                    <span class="fw-bold">Ambo Nai | Mahasiswa</span>
                    <span style="font-size: 12px">15 Juni 2021</span>
                    <p class="mt-3">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure ipsum vitae maxime consequuntur dolorem. Fugit maxime nihil aspernatur sint non nam repellat vel tenetur aperiam odio. Dolore molestiae voluptatibus commodi!!
                    </p>
                </div>
            </div>
        </div>
        
    </div>
    
    
</div>
@endsection
