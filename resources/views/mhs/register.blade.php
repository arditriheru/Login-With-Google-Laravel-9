@extends('layout/app')
@section('content')

<div class="vh-100 d-flex justify-content-center align-items-center">
    <div class="register-box">
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a class="h1">@yield('title',$title)</a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">@yield('subtitle',$subtitle)</p>

                {{-- if any error --}}
                @if($errors->any())
                @foreach($errors->all() as $error)
                <p class="alert alert-danger">*{{ $error }}</p>
                @endforeach
                @endif

                <script>
                    function onChange() {
                        const password = document.querySelector('input[name=password]');
                        const password_confirmation = document.querySelector('input[name=password_confirmation]');
                        if (password_confirmation.value === password.value) {
                            password_confirmation.setCustomValidity('');
                        } else {
                            password_confirmation.setCustomValidity('Password tidak sesuai');
                        }
                    }
                </script>
                <form  method="post" class="form-prevent" action="{{ route('register_action') }}">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="name" placeholder="Nama lengkap" value="{{ old('name') }}" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div id="alert"></div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="email" id="email" placeholder="NIM@students.uii.ac.id" pattern=".+@students.uii.ac.id" value="{{ old('email') }}" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fa fa-id-card"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="number" class="form-control" name="contact" placeholder="No. WhatsApp (Ex : 089629671717)" value="{{ old('contact') }}" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fab fa-whatsapp"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" name="password" onChange="onChange()" placeholder="Password" minlength="5" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" name="password_confirmation" onChange="onChange()" placeholder="Confirm password" minlength="5" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="icheck-primary">
                                <input type="checkbox" id="agreeTerms" name="terms" value="agree" required>
                                <label for="agreeTerms">
                                    I agree to the <a href="#">terms</a>
                                </label>
                            </div>
                        </div>
                        <!-- /.col -->
                    </div>
                    <div class="row mt-3">
                        <div class="col-12">
                            <button class="btn btn-info btn-block button-prevent" type="submit">
                                <!-- spinner-border adalah component bawaan bootstrap untuk menampilakn roda berputar  -->
                                <div class="spinner"><i role="status" class="spinner-border spinner-border-sm"></i> Register</div>
                                <div class="hide-text">Register</div>
                            </button>
                           <p class="text-center mt-4"><a class="link-dark" href="{{ route('login') }}"><span class="fas fa-arrow-left"></span> Menu utama</a></p>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
            </div>
            <!-- /.form-box -->
        </div><!-- /.card -->
    </div>
    <!-- /.register-box -->
</div>

@endsection