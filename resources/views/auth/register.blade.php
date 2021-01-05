@extends('layouts.guest')

@section('content')
    <div id="preloader">
        <div><img src="innovative/img/Logo_Africamoov.gif" alt="load"/></div>
    </div>
    <!--loader end-->

    <!--Header Start-->
    <header>

        <!--Navigation-->
        <nav class="navbar navbar-top-default navbar-expand-lg navbar-simple nav-box-round">
            <div class="container">
                <!--Side Menu Button-->
                <a href="javascript:void(0)" class="d-inline-block sidemenu_btn2" id="sidemenu_toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </a>
            </div>
        </nav>

        <!--Side Nav-->
        <div class="side-menu hidden fonc">
            <div class="inner-wrapper">
                <span class="btn-close" id="btn_sideNavClose"><i></i><i></i></span>
                <nav class="side-nav w-100">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php"><i class="fa fa-home"></i> Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-toggle="modal" data-target="#myModal"><i
                                    class="fa fa-question-circle"></i> Qui sommes-nous ?</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" target="_blank"><i class="fa fa-file-archive"></i> Mentions
                                Légales</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" target="_blank"><i class="fa fa-file-contract"></i> Termes &
                                Conditions</a>
                        </li>
                        <li class="nav-item">________________</li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa fa-user"></i> Connexion</a>
                        </li>
                    </ul>
                </nav>

                <div class="side-footer text-white w-100">
                    <ul class="social-icons-simple">
                        <li><a class="facebook-text-hvr" href="#"><i class="fab fa-facebook-f"></i> </a></li>
                        <li><a class="twitter-text-hvr" href="#"><i class="fab fa-twitter"></i> </a></li>
                        <li><a class="instagram-text-hvr" href="#"><i class="fab fa-instagram"></i> </a></li>
                    </ul>
                    <p class="text-white">&copy;
                        <script>document.write(new Date().getFullYear())</script>
                        AFRICAMOOV | Tous droits réservés.
                    </p>
                </div>
            </div>
        </div>
        <a id="close_side_menu" href="javascript:void(0);"></a>
        <!-- End side menu -->

    </header>
    <!--Header end-->

    <div class="forny-container">
        <div class="forny-inner">
            <div class="forny-two-pane">
                <div>
                    <div class="forny-form">
                        <div class="mb-8 forny-logo">
                            <a href="index.php"><img src="innovative/img/logo.png" alt="img"></a>
                        </div>
                        <div>
                            <h4 class="text-center">Espace Client</h4>
                        </div>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                Please check the form below for errors
                            </div>
                        @endif
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="pone" class="col-md-4 col-form-label text-md-right">{{ __('Phone') }}</label>

                                <div class="col-md-6">
                                    <input id="phone" type="tel" class="form-control @error('phone') is-invalid @enderror" name="phone" required autocomplete="new-password">

                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div></div>
            </div>

        </div>
    </div>

    <!-- Modal QSN -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content -->
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title">Qui sommes-nous ?</h4>
                </div>
                <div class="modal-body">
                    <p>AfricaMoov est L’agence de voyage africaine, qui inspire et guide les voyageurs à vivre des
                        expériences profondes, riches et significatives. Nous célébrons la diversité africaine, à
                        travers une véritable immersion culturelle. Avec AfricaMoov, sortez de votre zone de confort,
                        découvrez nos richesses locales, partez à la découverte de nouvelles sensations, et de nouvelles
                        expériences.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                </div>
            </div>

        </div>
    </div>
@endsection
