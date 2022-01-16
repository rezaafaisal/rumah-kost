<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
        <div class="d-flex">
            <a class="text-dark" href="/"><i class="fab fa-accusoft fa-2x"></i></a>
            @if($title == "Temankost.id")
                <a class="nav-link active text-dark" aria-current="page" href="#">Temankost.id</a>
            @else
                <div class="input-group" style="margin-left: 20px">
                    <div class="form-outline">
                        <input id="search-input" type="search" class="form-control form-control-sm"
                            placeholder="Cari Kost/Alamat" />
                    </div>
                    <button id="search-button" type="button" class="btn btn-primary btn-sm">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            @endif
        </div>


        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                {{-- <li class="nav-item">
                </li> --}}

                <!-- Navbar dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-mdb-toggle="dropdown" aria-expanded="false">
                        Cari Layanan
                    </a>
                    <!-- Dropdown menu -->
                    <ul class="dropdown-menu layanan" aria-labelledby="navbarDropdown">
                        <li>
                            <a class="dropdown-item" href="#"><i class="fas fa-hand-holding-usd me-2"></i>Layanan
                                Kost</a>
                        </li>
                        <li>
                            {{-- <li>
                            <hr class="dropdown-divider" />
                        </li> --}}
                            <a class="dropdown-item" href="#"><i class="fas fa-hand-holding-usd me-2"></i>Layanan
                                Antar</a>
                        </li>
                    </ul>
                </li>
                <?php if (isset($statsu_log) == 'ya'): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="{{$link_home}}">{{$menu_home}}</a>
                    </li>
                <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link" href="/login">Masuk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-mdb-toggle="modal" data-mdb-target="#daftar">Daftar</a>
                    </li>
                <?php endif ?>
            </ul>

        </div>
    </div>
</nav>
<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="daftar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">

                <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h4 class="text-center fw-bold">Daftar Akun Baru</h4>
                <form action="{{route('register')}}" method="POST" class="p-4">
                    @csrf
                    <input type="hidden" name="key" id="form16" class="form-control form-control-lg" value="regist-satu" />
                    <div class="form-outline">
                        <input type="text" name="nama_lengkap" id="form16" class="form-control form-control-lg"  required />
                        <label class="form-label" for="form16">Nama Lengkap</label>
                    </div>
                    <div class="form-outline mt-4">
                        <input type="number" name="no_hp" id="form13" class="form-control form-control-lg" required/>
                        <label class="form-label" for="form12">Nomor Handphone</label>
                    </div>
                    <div class="form-outline mt-4">
                        <input type="email" name="email" id="form13" class="form-control form-control-lg" required />
                        <label class="form-label" for="form12">Email</label>
                    </div>
                    <div class="form-outline mt-4">
                        <input type="password" name="password" id="password" class="form-control form-control-lg" required/>
                        {{-- <i class="fas fa-eye"></i> --}}
                        <label class="form-label" for="form43">Password</label>
                        
                    </div>
                    <span id="jumlah" class="text-danger font-size-info-alert"></span>

                    <div class="form-outline mt-4">
                        <input type="password" id="cpassword" name="upassword" class="form-control form-control-lg" required/>
                        <label class="form-label" for="form43">Ulangi Password</label>
                    </div>
                    <span id="jumlah_c" class="text-danger font-size-info-alert"></span>

                    <label for="" class="mt-3" style="display: block">Daftar Sebagai</label>
                    <div class="btn-group mt-1  ">
                        <input type="radio" class="btn-check" name="jenis" id="option1" autocomplete="off" checked value="1" />
                        <label class="btn btn-outline-primary" for="option1">Pencari Kost</label>
                      
                        <input type="radio" class="btn-check" name="jenis" id="option2" autocomplete="off" value="2" />
                        <label class="btn btn-outline-primary" for="option2">Pemilik Kost</label>  
                    </div>
                    <button class="btn btn-lg btn-success w-100 mt-4 fw-bold">
                        Daftar
                    </button>

                    <div class="form-group mt-4 pb-4 text-center">
                        <span>Sudah punya akun? </span><a href="/login">Masuk</a>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
