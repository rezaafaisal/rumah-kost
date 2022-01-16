<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login RumahKost</title>
    <link rel="stylesheet" href="{{ asset('css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mdb.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('') }}sweetalert/sweetalert2.all.min.js"></script>

    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/flatpickr.js') }}"></script>
</head>

<body>
    <style>
        .card {
            height: 500px;
        }

    </style>
    
    <div class="container d-flex flex-column vh-100 justify-content-center">
        
        <div class="row justify-content-center">
            
            <div class="col-10 col-sm-8 col-md-7 col-lg-5">

                <?php if (session()->has('notif-success')): ?>
                    <div class="alert alert-success">{{session()->get('notif-success')}}</div>
                <?php endif ?>  

                <?php if (session()->has('notif-gagal')): ?>
                    <div class="alert alert-danger">{{session()->get('notif-gagal')}}</div>
                <?php endif ?>

                <?php if (Session::get('alert-token')): ?>
                    <div class="alert-storage" data-flashdata="{{Session::get('alert-token')}}">
                <?php endif ?>

                <?php if (session()->has('alert-login-berhasil')): ?>
                    <div class="alert-login-berhasil" data-flashdata="{{session()->get('alert-login-berhasil')}}">
                <?php endif ?>

                <div class="card container shadow-2 quicksand py-5">
                    <h2 class="text-center">Temankost.id</h2>

                    
                    <form action="{{route('login-query')}}" method="post" class="mt-4 font-size-text-deskripsi">
                    {{ csrf_field() }}
                        <div class="form-outline">
                            <input type="text" id="form12" name="email" class="form-control form-control-lg" />
                            <label class="form-label" for="form12">Email / No Hp Terdaftar</label>
                        </div>
                        <div class="form-outline mt-4">
                            <input type="password" id="form13" name="password" class="form-control form-control-lg" />
                            <label class="form-label" for="form13">Password</label>
                        </div>
                        <div class="form-group mt-3">
                            <div>
                                <input type="checkbox" name="key" id="remember" class="me-2" value="yes"><label for="remember">Ceklis Jika Bukan Robot</label>
                            </div>
                            <div>
                                <a href="">Lupa Password</a>
                            </div>

                        </div>
                        <button class="btn btn-lg btn-primary w-100 mt-3">
                            Masuk
                        </button>

                        <div class="form-group mt-4 text-center">
                            <span>Belum punya akun? </span><a href="/daftar">Daftar</a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="{{ asset('js/script.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/mdb.min.js') }}"></script>
<script src="{{ asset('') }}js/custom.js"></script>

</html>
