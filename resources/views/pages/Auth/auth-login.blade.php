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
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/bootstrap-social/bootstrap-social.css') }}">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components.css') }}">

    <!-- External CSS for custom styling -->
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
</head>

<body>
    <div id="app">
        <section class="section">
            <div class="container d-flex justify-content-center align-items-center min-vh-100">
                <div class="card p-3 shadow-lg" style="max-width: 500px; width: 100%; background-color: #282d35; border-radius: 10px;">
                    <div class="text-center mb-3">
                        <img src="{{ asset('img/stisla-fill.svg') }}" alt="logo" width="80" class="shadow-light rounded-circle mb-5 mt-3">
                    </div>

                    <h4 class="text-center font-weight-bold mb-3 text-white">Selamat Datang di Sistem Absensi Digital Taharica!</h4>
                    <h5 class="text-white">Silakan Masuk</h5>

                    <form method="POST" action="{{ route('login') }}" class="needs-validation" novalidate="">
                        @csrf
                        <div class="form-group">
                            <label for="email" class="text-white">Alamat Email</label>
                            <input id="email" type="email" class="form-control" name="email" required autofocus>
                            <div class="invalid-feedback">
                                Mohon isi alamat email Anda
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="control-label text-white">Kata Sandi</label>
                            <div class="input-group">
                                <input id="password" type="password" class="form-control" name="password" required>
                                <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                                    <i class="bi bi-eye" id="eyeIcon"></i>
                                </button>
                                <div class="invalid-feedback">
                                    Mohon isi kata sandi Anda
                                </div>
                            </div>
                        </div>

                        <div class="form-group d-flex justify-content-between">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="remember" class="custom-control-input" id="remember-me">
                                <label class="custom-control-label text-white" for="remember-me">Ingat Saya</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-lg btn-block">Masuk</button>
                        </div>
                    </form>

                    <div class="social-login mt-4 mb-3 text-center">
                        <p class="text-white">Atau masuk dengan:</p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <button class="btn btn-outline-danger btn-google w-100 me-2">
                            <i class="fab fa-google"></i> Log in with Google
                        </button>
                        <div class="col-6">
                            <a class="btn btn-block btn-social btn-github">
                                <span class="fab fa-github"></span> github
                            </a>
                        </div>
                    </div>

                    <div class="text-center mt-3">
                        <p class="text-white">Belum punya akun? <a href="{{ route('register') }}" class="text-decoration-none">Daftar sekarang</a></p>
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

    <!-- Template JS File -->
    <script src="{{ asset('js/scripts.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>

    <!-- Password Toggle Script -->
    <script>
        document.getElementById('togglePassword').addEventListener('click', function () {
            const passwordField = document.getElementById('password');
            const eyeIcon = document.getElementById('eyeIcon');
            if (passwordField.type === 'password') {
                passwordField.type = 'text';
                eyeIcon.classList.remove('bi-eye-slash');
                eyeIcon.classList.add('bi-eye');
            } else {
                passwordField.type = 'password';
                eyeIcon.classList.remove('bi-eye');
                eyeIcon.classList.add('bi-eye-slash');
            }
        });
    </script>
</body>

</html>