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
        <div class="jq-tab-wrapper d-flex" id="verticalTab">
            <div class="col-4">
                <div class="d-flex align-items-center">
                    <div class="profil-img">
                        <img src="/images/profil.jpg" alt="" srcset="" width="70px" height="70px"
                            class="rounded-circle">
                    </div>
                    <div class="ps-4">
                        <div class="fw-bold">{{ $user->name }}</div>
                        <span>{{ $user->akses->akses }}</span>
                    </div>
                </div>
                <div class="w-100">
                    <ul class="list-unstyled mt-4 jq-tab-menu">
                        <li class="border-bottom pt-2 pb-2 jq-tab-title active" data-tab="1">Profil Saya</li>
                        <li class="border-bottom pt-2 pb-2 jq-tab-title" data-tab="2">Kost Saya</li>
                        <li class="border-bottom pt-2 pb-2 jq-tab-title" data-tab="3">Kost yang dibooking</li>
                        <li class="border-bottom pt-2 pb-2 jq-tab-title" data-tab="4">Riwayat Kost</li>
                        <li class="border-bottom pt-2 pb-2 jq-tab-title"><a class="log-out" data-mdb-toggle="modal"
                                data-mdb-target="#log-out" href="{{ route('log-out') }}"
                                class="">Log-Out</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-8 p-3">
                <div class="jq-tab-content-wrapper">
                    <div class="jq-tab-content active" data-tab="1">
                        <div class="fw-bold mb-5">Profil Saya</div>
                        <form>
                            <!-- 2 column grid layout with text inputs for the first and last names -->
                            <div class="row text-center">
                                <div class="col-xl-6">
                                    <div class="file-field mb-4">
                                        <div class="mb-4">
                                            <img src="https://mdbootstrap.com/img/Photos/Others/placeholder-avatar.jpg"
                                                class="rounded-circle z-depth-1-half avatar-pic"
                                                alt="example placeholder avatar" height="90px">
                                        </div>
                                        <div class="d-flex justify-content-center">
                                            <div class="btn btn-mdb-color btn-rounded float-left">
                                                <span>Foto Anda</span>
                                                <input type="file">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="text" id="form6Example1" class="form-control" />
                                        <label class="form-label" for="form6Example1">Nama Lengkap</label>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="text" id="form6Example1" class="form-control" />
                                        <label class="form-label" for="form6Example1">Tempat Lahir</label>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input class="form-control" type="text" id="tes1" placeholder="Pilih Tanggal"
                                            style="background: white!important">
                                        <!-- <label class="form-label" for="form6Example1">Tanggal Lahir</label> -->
                                    </div>

                                    <div class="mb-4">
                                        <select class="form-control form-select" id="jenis_kelamin" name="jenis_kelamin" required>
                                            <option hidden>Pilih Jenis Kelamin</option>
                                            <option value="LAKI-LAKI">LAKI-LAKI</option>
                                            <option value="PEREMPUAN">PEREMPUAN</option>
                                        </select>
                                        <span id="jenis_kelamin_error" class="text-danger font-size-info-alert"></span>

                                    </div>

                                    <div class="mb-4">
                                        <select class="form-control form-select" id="status_kawin" name="status_kawin" required>
                                            <option hidden>Pilih Status Kawin</option>
                                            <option value="SUDAH KAWIN"> SUDAH KAWIN</option>
                                            <option value="BELUM KAWIN"> BELUM KAWIN</option>
                                            <option value="JANDA"> JANDA</option>
                                            <option value="DUDA"> DUDA</option>
                                        </select>
                                        <span id="status_kawin_error" class="text-danger font-size-info-alert"></span>

                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="text" id="form6Example1" class="form-control" />
                                        <label class="form-label" for="form6Example1">No WA / Handphone</label>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="text" id="form6Example1" class="form-control" />
                                        <label class="form-label" for="form6Example1">Email</label>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="file-field mb-4">
                                        <div class="z-depth-1-half mb-4">
                                            <img src="https://mdbootstrap.com/img/Photos/Others/placeholder.jpg"
                                                class="avatar-ktp" alt="example placeholder" height="90px">
                                        </div>
                                        <div class="d-flex justify-content-center">
                                            <div class="btn btn-mdb-color btn-rounded float-left">
                                                <span>Foto KTP Anda</span>
                                                <input type="file">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="text" id="form6Example1" class="form-control" />
                                        <label class="form-label" for="form6Example1">NIK KTP</label>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <textarea class="form-control" id="form6Example7" rows="3"></textarea>
                                        <label class="form-label" for="form6Example7">Alamat Sesuai KTP (Jalan)</label>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="text" id="form6Example1" class="form-control" />
                                        <label class="form-label" for="form6Example1">Provinsi Sesuai KTP</label>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="text" id="form6Example1" class="form-control" />
                                        <label class="form-label" for="form6Example1">Kabupaten Sesuai KTP</label>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="text" id="form6Example1" class="form-control" />
                                        <label class="form-label" for="form6Example1">Kecamatan Sesuai KTP</label>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="text" id="form6Example1" class="form-control" />
                                        <label class="form-label" for="form6Example1">Kelurahan Sesuai KTP</label>
                                    </div>


                                </div>
                            </div>



                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary btn-block mb-4">Simpan Data</button>
                        </form>
                    </div>
                    <div class="jq-tab-content" data-tab="2">
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
        </div>
    </div>

</div>
</div>
<script src="{{ asset('vendor/jqueryTab/jquery.tabs.min.js') }}"></script>

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

@include('user.component.footer-user')
