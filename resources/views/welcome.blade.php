<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{ config('app.name') }}</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="login/images/icons/favicon.jpg" />
    <link rel="stylesheet" type="text/css" href="login/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="login/vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="login/vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="login/vendor/animsition/css/animsition.min.css">
    <link rel="stylesheet" type="text/css" href="login/vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="login/vendor/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" type="text/css" href="login/css/util.css">
    <link rel="stylesheet" type="text/css" href="login/css/main.css">
</head>

<body style="background-color: #666666;">

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form method="post" class="login100-form validate-form" action="" role="form">
                    <span class="login100-form-title p-b-43">
                        Login<br>
                        <p>Login</p>
                    </span>

                    <div class="wrap-input100 validate-input" data-validate="Valid username is required: ex@abc.xyz">
                        <input class="input100" type="text" name="username" value="" required>
                        <span class="focus-input100"></span>
                        <span class="label-input100">NIM mahasiswa</span>
                    </div>


                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <input class="input100" type="password" name="password" required>
                        <span class="focus-input100"></span>
                        <span class="label-input100">Password</span>
                    </div>

                    {{-- alert notifications --}}
                        @if(Session::has('success'))
                        <div class="alert alert-success">
                            {{Session::get('success')}}
                         </div>
                        @elseif(Session::has('error'))
                        <div class="alert alert-danger">
                            {{Session::get('error')}}
                         </div>
                        @endif
                                            
                    <div class="container-login100-form-btn mb-5 mt-5">
                        <button type="submit" class="login100-form-btn">
                            Sign In
                        </button>
                    </div>

                    <div class="mt-5 text-center">
                        <p>Belum memiliki akun? Buat akun disini</p>
                        <a href="register"><img src="login/images/signup.png" /><br>
                        <a href="login/google"><img src="login/images/signup-google.png" />
                    </div></a>

                    <div class="login100-form-social flex-c-m mt-5 mb-5">
                        <a href="https://arditriheru.com" class="login100-form-social-item flex-c-m bg1 m-r-5">
                            <!-- <i class="fa fa-facebook-f" aria-hidden="true"></i> -->
                        </a>

                        <a href="https://arditriheru.com" class="login100-form-social-item flex-c-m bg3 m-r-5">
                            <!-- <i class="fa fa-twitter" aria-hidden="true"></i> -->
                        </a>
                    </div>
                    <p class="text-center">© <?= date('Y'); ?> IT Fakultas Hukum UII</p>
                </form>

                <div class="login100-more" style="background-image: url('login/images/bg-01.jpg');">
                </div>
            </div>
        </div>
    </div>

    <script src="login/vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="login/vendor/animsition/js/animsition.min.js"></script>
    <script src="login/vendor/bootstrap/js/popper.js"></script>
    <script src="login/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="login/vendor/select2/select2.min.js"></script>
    <script src="login/vendor/daterangepicker/moment.min.js"></script>
    <script src="login/vendor/daterangepicker/daterangepicker.js"></script>
    <script src="login/vendor/countdowntime/countdowntime.js"></script>
    <script src="login/js/main.js"></script>

</body>

</html>