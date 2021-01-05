@extends('layouts.guest')

@section('content')
    {{--<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Login') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>--}}
    <!--start loader-->
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
                        <form action="{{route('login')}}" method="post">
                            @csrf
                            <div class="form-group">

                                <div class="input-group">
                                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="16" viewBox="0 0 24 16">
								<g transform="translate(0)">
									<path
                                        d="M23.983,101.792a1.3,1.3,0,0,0-1.229-1.347h0l-21.525.032a1.169,1.169,0,0,0-.869.4,1.41,1.41,0,0,0-.359.954L.017,115.1a1.408,1.408,0,0,0,.361.953,1.169,1.169,0,0,0,.868.394h0l21.525-.032A1.3,1.3,0,0,0,24,115.062Zm-2.58,0L12,108.967,2.58,101.824Zm-5.427,8.525,5.577,4.745-19.124.029,5.611-4.774a.719.719,0,0,0,.109-.946.579.579,0,0,0-.862-.12L1.245,114.4,1.23,102.44l10.422,7.9a.57.57,0,0,0,.7,0l10.4-7.934.016,11.986-6.04-5.139a.579.579,0,0,0-.862.12A.719.719,0,0,0,15.977,110.321Z"
                                        transform="translate(0 -100.445)"/>
								</g>
							</svg>
                        </span>
                                    </div>

                                    <input required class="form-control" name="name" type="text"
                                           placeholder="Nom d'utilisateur" id="username">

                                </div>
                            </div>


                            <div class="form-group password-field">

                                <div class="input-group">
                                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="24" viewBox="0 0 16 24">
								<g transform="translate(0)">
									<g transform="translate(5.457 12.224)">
										<path
                                            d="M207.734,276.673a2.543,2.543,0,0,0-1.749,4.389v2.3a1.749,1.749,0,1,0,3.5,0v-2.3a2.543,2.543,0,0,0-1.749-4.389Zm.9,3.5a1.212,1.212,0,0,0-.382.877v2.31a.518.518,0,1,1-1.035,0v-2.31a1.212,1.212,0,0,0-.382-.877,1.3,1.3,0,0,1-.412-.955,1.311,1.311,0,1,1,2.622,0A1.3,1.3,0,0,1,208.633,280.17Z"
                                            transform="translate(-205.191 -276.673)"/>
									</g>
									<path
                                        d="M84.521,9.838H82.933V5.253a4.841,4.841,0,1,0-9.646,0V9.838H71.7a1.666,1.666,0,0,0-1.589,1.73v10.7A1.666,1.666,0,0,0,71.7,24H84.521a1.666,1.666,0,0,0,1.589-1.73v-10.7A1.666,1.666,0,0,0,84.521,9.838ZM74.346,5.253a3.778,3.778,0,1,1,7.528,0V9.838H74.346ZM85.051,22.27h0a.555.555,0,0,1-.53.577H71.7a.555.555,0,0,1-.53-.577v-10.7a.555.555,0,0,1,.53-.577H84.521a.555.555,0,0,1,.53.577Z"
                                        transform="translate(-70.11)"/>
								</g>
							</svg>
                        </span>
                                    </div>

                                    <input required class="form-control" name="password" type="password"
                                           placeholder="Mot de passe" id="password">

                                    <div class="input-group-append cursor-pointer">
                        <span class="input-group-text">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="16" viewBox="0 0 24 16">
								<g transform="translate(0 0)">
									<g transform="translate(0 0)">
										<path
                                            d="M23.609,117.568a15.656,15.656,0,0,0-5.045-4.859,12.823,12.823,0,0,0-6.38-1.811c-.062,0-.309,0-.371,0a12.823,12.823,0,0,0-6.38,1.811,15.656,15.656,0,0,0-5.045,4.859,2.464,2.464,0,0,0,0,2.658,15.656,15.656,0,0,0,5.045,4.859,12.822,12.822,0,0,0,6.38,1.811c.062,0,.309,0,.371,0a12.823,12.823,0,0,0,6.38-1.811,15.656,15.656,0,0,0,5.045-4.859A2.464,2.464,0,0,0,23.609,117.568Zm-17.74,6.489a14.622,14.622,0,0,1-4.712-4.538,1.155,1.155,0,0,1,0-1.245,14.621,14.621,0,0,1,4.712-4.538,12.747,12.747,0,0,1,1.586-.79,8.964,8.964,0,0,0,0,11.9A12.748,12.748,0,0,1,5.869,124.057ZM12,125.75c-3.213,0-5.827-3.074-5.827-6.853s2.614-6.853,5.827-6.853,5.827,3.074,5.827,6.853S15.211,125.75,12,125.75Zm10.841-6.23a14.621,14.621,0,0,1-4.712,4.538,12.737,12.737,0,0,1-1.585.788,8.964,8.964,0,0,0,0-11.9,12.74,12.74,0,0,1,1.587.791,14.622,14.622,0,0,1,4.712,4.538A1.155,1.155,0,0,1,22.839,119.52Z"
                                            transform="translate(0.002 -110.897)"/>
									</g>
									<g transform="translate(9.565 5.565)">
										<path
                                            d="M205.24,202.8a2.435,2.435,0,1,0,2.435,2.435A2.438,2.438,0,0,0,205.24,202.8Zm0,3.917a1.482,1.482,0,1,1,1.482-1.482A1.483,1.483,0,0,1,205.24,206.721Z"
                                            transform="translate(-202.805 -202.804)"/>
									</g>
								</g>
							</svg>
                        </span>
                                    </div>
                                </div>
                            </div>


                            <div class="row mt-6 mb-6">
                                <div class="col-6 d-flex align-items-center">
                                    <div>
                                        <button class="btn btn-primary btn-block" type="submit">Connexion</button>
                                    </div>
                                </div>
                                <div class="col-6 text-right">
                                    <a href="reset.php">Mot de passe oublié ?</a>
                                </div>
                            </div>

                            <div class="line mt-10 mb-6">
                                <span>ou</span>
                            </div>

                            <div class="row">
                                <div class="col-12 mb-4 mb-md-0 col-md-12">
                                    <a href="https://africamoov.com/africamoov/facebook/callback"
                                       class="btn btn-social btn-block btn-facebook">
                                        <img src="innovative/img/facebook.png" alt="icon"/>
                                        Connexion avec Facebook
                                    </a>
                                </div>
                            </div>

                            <div class="mt-5">
                                Vous n'avez pas de compte ? <a href="{{route('register')}}">Créer un compte</a>
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
