<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Login &mdash; Taharica</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('library/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/bootstrap-social/bootstrap-social.css') }}">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components.css') }}">

    <style>
        .login-container {
            display: flex;
            min-height: 100vh;
            justify-content: center;
            align-items: center;
            background-image: url('https://lh3.googleusercontent.com/p/AF1QipNBGMRh49ZFh_A3jeygWZtC00Dub_7zDlOL_d0j=s680-w680-h510');
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            height: 100vh;
            margin: 0;
        }

        .illustration {
            display: flex;
            min-height: 100vh;
            justify-content: center;
            align-items: center;
            background-color: #f8f9fa;
        }

        .login-section {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .login-card {
            max-width: 400px;
            width: 100%;
            padding: 30px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .login-card h4,
        .login-card h5 {
            text-align: center;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .login-card .btn-primary {
            background-color: #007b8f;
            border: none;
        }

        .form-control {
            border: 1px solid #007b8f;
        }

        .custom-control-label {
            margin-left: 5px;
        }
        .social-login a {
            margin-right: 10px;
            color: #fff;
        }
        .social-login a.facebook { background-color: #3b5998; }
        .social-login a.twitter { background-color: #1da1f2; }
        .social-login a.github { background-color: #333; }
        .social-login a.google { background-color: #db4437; }
    </style>
</head>

<body>
    <div id="app">
        <section class="section">
            <div class="login-container">
                <div class="illustration"></div>
                <div class="login-section">
                    <div class="login-card">
                        <div class="text-center mb-3">
                            <img src="{{ asset('img/stisla-fill.svg') }}"
                            alt="logo"
                            width="80"
                            class="shadow-light rounded-circle mb-5 mt-2">
                        </div>

                        <h4 class="text-center font-weight-bold mb-3">Selamat Datang di Sistem Absensi Digital Taharica!</h4>
                        <h5>Silakan Masuk</h5>
                        <form method="POST" action="#" class="needs-validation" novalidate="">
                            <div class="form-group">
                                <label for="email">Alamat Email</label>
                                <input id="email" type="email" class="form-control" name="email" required
                                    autofocus>
                                <div class="invalid-feedback">
                                    Mohon isi alamat email Anda
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password" class="control-label">Kata Sandi</label>
                                <input id="password" type="password" class="form-control" name="password" required>
                                <div class="invalid-feedback">
                                    Mohon isi kata sandi Anda
                                </div>
                            </div>

                            <div class="form-group d-flex justify-content-between">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" name="remember" class="custom-control-input"
                                        id="remember-me">
                                    <label class="custom-control-label" for="remember-me">Ingat Saya</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Masuk</button>
                            </div>
                        </form>

                        <div class="social-login mt-4 mb-3 text-center">
                            <p>Atau masuk dengan:</p>
                            <a href="#" class="btn btn-social-icon facebook"><i class="fab fa-facebook"></i></a>
                            <a href="#" class="btn btn-social-icon twitter"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="btn btn-social-icon github"><i class="fab fa-github"></i></a>
                            <a href="#" class="btn btn-social-icon google"><i class="fab fa-google"></i></a>
                        </div>

                        <div class="text-center">
                            <p>Belum punya akun? <a href="auth-register.html">Daftar sekarang</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- General JS Scripts -->
    <script src="{{ asset('library/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('library/popper.js/dist/umd/popper.js') }}"></script>
    <script src="{{ asset('library/tooltip.js/dist/umd/tooltip.js') }}"></script>
    <script src="{{ asset('library/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('library/jquery.nicescroll/dist/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('library/moment/min/moment.min.js') }}"></script>
    <script src="{{ asset('js/stisla.js') }}"></script>

    <!-- JS Libraies -->

    <!-- Page Specific JS File -->

    <!-- Template JS File -->
    <script src="{{ asset('js/scripts.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
</body>


</html>
