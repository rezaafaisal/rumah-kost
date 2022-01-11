@include('user.component.header-user')
@include('user.component.menu-user')

<!-- ======================== Model Hapus Karyawan ======================== -->
<div class="modal modal-blur fade" id="log-out" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="modal-title"><b>Yakin Log-Out.?</b></div>
                <div class="font-size-text-deskripsi">Anda akan keluar dari halaman profile jika log-out.</div>
            </div>
            <div class="modal-footer">
                <!-- <button type="button" class="btn btn-link link-secondary me-auto" data-bs-dismiss="modal">Cancel</button> -->
                <button type="button" class="btn btn-danger" id="btn-log-out" data-bs-dismiss="modal">Ya,
                    Log-Out</button>
            </div>
        </div>
    </div>
</div>




<div class="container" style="padding-top: 100px">
    <div class="row">
        <div class="col-4">
            <div class="d-flex align-items-center">
                <div class="profil-img">
                    <img src="/images/profil.jpg" alt="" srcset="" width="70px" height="70px" class="rounded-circle">
                </div>
                <div class="ps-4">
                    <div class="fw-bold">{{ $user->name }}</div>
                    <span>{{ $user->akses->akses }}</span>
                </div>
            </div>
            <div class="w-100">
                <ul class="list-unstyled mt-4">
                    <li class="border-bottom pt-2 pb-2"><a href="" class="">Profil Saya</a></li>
                    <li class="border-bottom pt-2 pb-2"><a href="" class="">Kost Saya</a></li>
                    <li class="border-bottom pt-2 pb-2"><a href="" class="">Kost yang dibooking</a></li>
                    <li class="border-bottom pt-2 pb-2"><a href="" class="">Riwayat Kost</a></li>
                    <li class="border-bottom pt-2 pb-2 "><a class="log-out" data-mdb-toggle="modal"
                            data-mdb-target="#log-out" href="{{ route('log-out') }}"
                            class="">Log-Out</a></li>
                </ul>
            </div>
        </div>
        <div class="col-8 p-3">
            <div class="tabs">
                <div class="fw-bold">Kost Saya</div>
                <ul class="d-flex list-unstyled py-2 mt-2 tabs__items">
                    <li class="tabs__item tabs_active">Keranjang Kamar</li>
                    <li class="ms-4 tabs__item">Arsip Kamar</li>
                    <li class="ms-4 tabs__item">Kost Baru Dilihat</li>
                </ul>
                <div class="tabs__content-wrapper">
                    <div class="tabs__content tabs_active">
                        <div class="rounded-2 p-4 shadow-2-strong">
                            <div class="d-flex">
                                <img src="/images/room1.jpg" alt="" height="120px" width="150px">
                                <div class="ms-3">
                                    <div class="fw-bold">
                                        Kamar Kost no 1
                                    </div>
                                    <div class="badge badge-success">Kosong</div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between pt-3 mt-3 border-top">
                                <button class="btn btn-danger">Hapus</button>
                                <button class="btn btn-success">Lanjut Booking</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@include('user.component.footer-user')
