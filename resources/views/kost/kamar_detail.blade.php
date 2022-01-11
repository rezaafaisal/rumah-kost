@extends('layouts.master')
@section('title')
{{ $title }}
@endsection
@section('body')
<style>
    .foto-kamar-multi {
        /* height: 200px; */
        /* height: max-content; */
        height: 400px;

    }

    .box1 {
        height: 100px;
    }

    .box {
        height: 500px;
        /* border: 1px solid blue; */
    }

    .foto-kamar-multi>img {
        width: 100%;
        object-fit: cover;
        height: calc(200px - 12px);
    }

</style>
<div class="container mt-5">
    <div class="row">
        <div class="col-12 col-md-8">
            <div class="bg-image foto-kamar">
                <img src="{{ asset('images/room2.jpg') }}" alt="" class=""
                    style="object-fit: cover;height:100%;width:100%" loading="lazy">
                <div class="mask h-100"
                    style="background: linear-gradient(to right,rgba(0, 0, 0, 0.8),rgba(0, 0, 0, 0), rgba(0, 0, 0, 0) ) ">
                    <div
                        class="w-100 h-100 p-3 p-md-4 p-lg-5 w-100 d-flex flex-column justify-content-between text-light">
                        <h5>Status : <span class="badge badge-success">Kosong</span></h5>
                        <span>Nomor kamar yang dipilih : <span class="badge badge-primary">01</span></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4">
            <div class="d-flex flex-column justify-content-between foto-kamar-multi">
                <img src="{{ asset('images/room1.jpg') }}" alt="" class="w-100">
                <img src="{{ asset('images/room3.jpg') }}" alt="" class="w-100">
            </div>
        </div>
    </div>

    <div class="row mt-5">
        <div class="container">
            <div class="shadow-2-strong p-4 rounded-5">
                <div class="row">
                    <div class="col-12 col-md-5 d-flex align-items-center">
                        <img src="{{ asset('images/profil.jpg') }}" alt="" class="rounded-circle"
                            style="width: 60px">
                        <div class="row ms-2">
                            <h5>Nama Kost</h5>
                            <span>Aktif 12 menit lalu</span>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <table>
                            <tr>
                                <td style="width: 80%">Jumlah kamar</td>
                                <td>:</td>
                                <td><span class="badge bg-primary">30</span></td>
                            </tr>
                            <tr>
                                <td>Jumlah komentar</td>
                                <td>:</td>
                                <td><span class="badge bg-primary">30</span></td>
                            </tr>

                        </table>
                    </div>
                    <div class="col-6 col-md-2">
                        <table>
                            <tr>
                                <td style="width: 80%">Kamar Terisi</td>
                                <td>:</td>
                                <td><span class="badge bg-danger">10</span></td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-6 col-md-2">
                        <table>
                            <tr>
                                <td style="width: 80%">Kamar Kosong</td>
                                <td>:</td>
                                <td><span class="badge bg-success">20</span></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-8">
            <div class="container shadow-1-strong rounded-3">
                <div class="w-100 py-3 border-bottom">
                    <span class="h4 fw-bold">Kategori : </span><span class="fw-bold">Campur</span>
                </div>
                <style>
                    .bullet {
                        height: 50px;
                        width: 50px;
                        background-color: rgb(65, 65, 65);
                    }

                </style>
                <div class="w-100 py-3 border-bottom">
                    <ul class="list-unstyled pt-4">
                        <li class="mb-3"><i class="fas fa-circle pe-3"></i>Tidak Termasuk Listrik</li>
                        <li class="mb-3"><i class="fas fa-circle pe-3"></i>Tidak Ada min</li>
                        <li class="mb-3"><i class="fas fa-circle pe-3"></i>Diskonnya Jutaan!</li>
                    </ul>
                </div>
                <div class="w-100 py-3 border-bottom">
                    <h4 class="h4 fw-bold">Fasilitas</h4>
                    <div class="mt-4">Luas kamar : <span class="fw-bold">4x2.5M</span></div>
                    <div class="mt-4 fw-bold">Fasilitas yang kamu dapatkan</div>
                    <ul class="list-unstyled pt-4">
                        <li class="mb-3"><i class="fas fa-circle pe-3"></i>Kamar mandi dalam</li>
                        <li class="mb-3"><i class="fas fa-circle pe-3"></i>Kasur</li>
                        <li class="mb-3"><i class="fas fa-circle pe-3"></i>Wifi</li>
                        <li class="mb-3"><i class="fas fa-circle pe-3"></i>Kloset duduk</li>
                        <li class="mb-3"><i class="fas fa-circle pe-3"></i>AC</li>
                        <li class="mb-3"><i class="fas fa-circle pe-3"></i>Ruang kerja</li>
                        <li class="mb-3"><i class="fas fa-circle pe-3"></i>Meja kerja</li>
                        <li class="mb-3"><i class="fas fa-circle pe-3"></i>Lemari</li>
                    </ul>
                </div>
                <div class="w-100 py-3">
                    <h4 class="h4 fw-bold">Aturan Kost</h4>
                    <div>
                        <img class="border" src="/images/aturan.jpg" alt="" width="40%">
                    </div>
                </div>


            </div>
        </div>
        <div class="col-4">
            <div class="ajukan-sewa position-sticky">
                <div class="row">
                    <div class="col">
                        <div class="container shadow-1-strong rounded-3 py-3">
                            <div class="pb-3">Sewa</div>
                            <div class="fw-bold">Rp. 500.000 / Bulan</div>
                            <input type="hidden" name="harga" id="harga-bulan" value="500000">
                            <input type="hidden" name="diskon" id="diskon-kost" value="100000">
                            <div class="row mt-3">
                                <div class="col-6">
                                    <label for="te1">Mulai Tanggal : </label>
                                    <input class="form-control" type="text" id="tanggal-sewa" placeholder="Pilih Tanggal" style="background: white!important">
                                </div>
                                <div class="col-6">
                                    <label for="">Interval Bayar :</label>
                                    <select name="" id="interval-sewa" class="form-control">
                                        <option value="1">Per 1 Bulan</option>
                                        <option value="3">Per 3 Bulan</option>
                                        <option value="6">Per 6 Bulan</option>
                                        <option value="12">Per Tahun</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col">
                        <div class="container shadow-1-strong rounded-3 py-2">
                            <table id="detail-pesanan" class="table table-borderless detail-bayar d-none">
                                <tr>
                                    <td>
                                        <div class="fw-bold">Mulai Tanggal</div>
                                        <div id="mulai-tanggal"></div>
                                    </td>
                                    <td>
                                        <div class="fw-bold">Berakhir Tanggal</div>
                                        <div id="akhir-tanggal"></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Harga Sewa</td>
                                    <td>Rp. <span id="bayar"></span>/<span id="interval"></span></td>
                                </tr>
                                <tr class="border-bottom">
                                    <td>Diskon</td>
                                    <td class="text-success">-Rp. <span id="diskon"></span></td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Total Bayar</td>
                                    <td>Rp. <span id="total-bayar"></span></td>
                                </tr>
                            </table>
                            <div class="row">
                                <form id="pembayaran" action="" method="POST" class="">
                                    <input type="hidden" name="total" id="total" value="0">
                                    <button name="submit" id="ajukan" class="btn btn-primary w-100">Ajukan Sewa</button>
                                </form>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            

        </div>
    </div>
</div>
@endsection
