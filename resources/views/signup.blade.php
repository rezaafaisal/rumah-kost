<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mdb.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery-pretty-tabs.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flatpickr.min.css') }}">
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/flatpickr.js') }}"></script>
    <script src="{{ asset('') }}sweetalert/sweetalert2.all.min.js"></script>
</head>

<body>

    <!-- ============= alert peringatan gagal ================ -->
    <?php if (session()->has('alert-gagal-dua')): ?>
        <div class="alert-gagal" data-flashdata="{{ session()->get('alert-gagal-dua') }}">
        </div>
    <?php endif ?>

    <div class="container d-flex flex-column justify-content-center">
        <div class="row justify-content-start py-5">
            <div class="col-12 col-md-8 col-lg-6 quicksand">
                <h2>Temankost.id</h2>
                <form action="{{route('register')}}" method="POST" class="p-4">
                    @csrf
                    <input type="hidden" name="key" id="form16" class="form-control form-control-lg" value="regist-dua" />
                    <div class="form-outline">
                        <input type="text" name="nama_lengkap" id="form16" class="form-control form-control-lg" required />
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
</body>
<script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/mdb.min.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="{{ asset('js/jquery-pretty-tabs.js') }}"></script>
</html>
