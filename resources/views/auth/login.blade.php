@extends('layouts.public')
@section('contenido')

<nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
    <div class="container">
        <div class="navbar-translate">
        <a class="navbar-brand" href="#">
            Yuniexpress</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon"></span>
            <span class="navbar-toggler-icon"></span>
            <span class="navbar-toggler-icon"></span>
        </button>
        </div>
        <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
            <li class="dropdown nav-item">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                <i class="material-icons">apps</i> Components
            </a>
            <div class="dropdown-menu dropdown-with-icons">
                <a href="../index.html" class="dropdown-item">
                <i class="material-icons">layers</i> All Components
                </a>
                <a href="#" class="dropdown-item">
                <i class="material-icons">content_paste</i> Documentation
                </a>
            </div>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="javascript:void(0)" onclick="scrollToDownload()">
                <i class="material-icons">cloud_download</i> Login
            </a>
            </li>
        </ul>
        </div>
    </div>
</nav>
    <div class="page-header header-filter" style="background-image: url('{{ asset('img/ecommerce.png')}}'); background-size: cover; background-position: top center;">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 ml-auto mr-auto">
                    <div class="card">
                        <form class="form" method="POST" action="{{ route('login') }}">
                                @csrf
                            <div class="card-header card-header-primary text-center">
                            <h4 class="card-title">Login</h4>
                            </div>
                            <br>
                            <p class="description text-center">Tus datos</p>
                            <div class="card-body">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="material-icons">mail</i>
                                </span>
                                </div>
                                <input type="email" placeholder="Email..." class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <br>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="material-icons">lock_outline</i>
                                </span>
                                </div>
                                <input type="password" placeholder="Password..." class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            </div>
                            <br><br><br>
                            <div class="footer text-center">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                                {{-- <a href="#pablo" class="btn btn-primary btn-link btn-wd btn-lg">Ingresar</a> --}}
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="container">
            <nav class="float-left">
                <ul>
                <li>
                    <a href="#">
                    Ingenieria de Software I
                    </a>
                </li>
                </ul>
            </nav>
            <div class="copyright float-right">
                &copy;
                <script>
                document.write(new Date().getFullYear())
                </script>, hecho por <i class="material-icons">favorite</i> por Andrea, Fabricio, German, Karen y Yolanda.
            </div>
            </div>
        </footer>
    </div>
@endsection
