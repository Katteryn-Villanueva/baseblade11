@extends('layouts.admin')
@section('content')

<span class="mask bg-gradient-dark opacity-6"></span>
<div class="container my-auto">
<div class="row">
    <div class="col-lg-4 col-md-8 col-12 mx-auto">
    <div class="card z-index-0 fadeIn3 fadeInBottom">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
        <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
            <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Iniciar Sesion</h4>
            <div class="row mt-3">
            <div class="col-2 text-center ms-auto">
                <a class="btn btn-link px-3" href="javascript:;">
                <i class="fa fa-facebook text-white text-lg"></i>
                </a>
            </div>
            <div class="col-2 text-center px-1">
                <a class="btn btn-link px-3" href="javascript:;">
                <i class="fa fa-github text-white text-lg"></i>
                </a>
            </div>
            <div class="col-2 text-center me-auto">
                <a class="btn btn-link px-3" href="javascript:;">
                <i class="fa fa-google text-white text-lg"></i>
                </a>
            </div>
            </div>
        </div>
        </div>
        <div class="card-body">
        <form method="POST" action="{{ route('login') }}" role="form" class="text-start">
            @csrf
            <div class="input-group input-group-outline my-3">
                <label class="form-label" for="email"></label>
                <input type="email" placeholder="Email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" autofocus>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="input-group input-group-outline mb-3">
                <label class="form-label" for="password"></label>
                <input type="password" placeholder="Password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="current-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-check form-switch d-flex align-items-center mb-3">
                <input class="form-check-input" type="checkbox" id="rememberMe"name="remember" {{ old('remember') ? 'checked' : '' }}>
                <label class="form-check-label mb-0 ms-3" for="rememberMe">Recuerdame</label>
            </div>
            <div class="text-center">
                <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">Iniciar Ssesion</button>
            </div>
            <p class="mt-4 text-sm text-center">
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
            <a href="{{ route('register') }}" class="text-primary text-gradient font-weight-bold">Registro</a>
            </p>
        </form>
        </div>
    </div>
    </div>
</div>
</div>
<footer class="footer position-absolute bottom-2 py-2 w-100">
<div class="container">
    <div class="row align-items-center justify-content-lg-between">
    <div class="col-12 col-md-6 my-auto">
        <div class="copyright text-center text-sm text-white text-lg-start">
        © <script>
            document.write(new Date().getFullYear())
        </script>
        Meerkatbot
        </div>
    </div>
    <div class="col-12 col-md-6">
    </div>
    </div>
</div>
</footer>
@endsection

