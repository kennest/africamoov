@extends('layouts.guest')

@section('title', 'Page Title')


@section('content')

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
                <a href="#home" class="logo scroll">
                    <!--Logo Default-->
                    <img src="innovative/img/logo_blanc.png" alt="logo" class="logo-light default">
                    <!--Logo Sticky-->
                    <img src="innovative/img/logo_blanc.png" alt="logo" class="logo-dark">
                </a>

                <!--Side Menu Button-->
                <div class="top-social sidemenu_btn1">
                    <ul class="list-unstyled">
                        <li><a class="facebook-text-hvr" href="#" target="_blank"><i class="fab fa-facebook-f"
                                                                                     aria-hidden="true"></i></a></li>
                        <li><a class="twitter-text-hvr" href="#" target="_blank"><i class="fab fa-twitter"
                                                                                    aria-hidden="true"></i></a></li>
                        <li><a class="instagram-text-hvr" href="#" target="_blank"><i class="fab fa-instagram"
                                                                                      aria-hidden="true"></i></a></li>
                    </ul>
                </div>

                <a href="javascript:void(0)" class="d-inline-block sidemenu_btn" id="sidemenu_toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </a>
            </div>
        </nav>

        <!--Side Nav-->
        <div class="side-menu hidden">
            <div class="inner-wrapper">
                <span class="btn-close" id="btn_sideNavClose"><i></i><i></i></span>
                <nav class="side-nav w-100">
                    <ul class="navbar-nav">
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
                            <a class="nav-link" href="{{url('login')}}"><i class="fa fa-user"></i> Connexion</a>
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

    <!--Single portfolio item one-->
    <section class="single-items4 center-block parallax m-0" id="home">
        <!--
        <video id="prehome-video" autoplay loop>
            <source src="innovative/img/vid/vid.mp4" type="video/mp4" />
        </video>
        <script>
            document.getElementById('prehome-video').play();
        </script>
        -->
        <div class="cadre"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 center-col">
                    <div class="area-heading mt-7 text-center wow fadeInUp ctk">
                        <!--
                        <div class="cadre1">
                            <h3 class="area-title text-capitalize alt-font text-white mb-3 font-weight-100">
                                B I E N V E N U E
                            </h3>
                            <p class="text-white good font-weight-300">
                            Devenez une fourmi au pied d’un baobab,
                            ou un enfant à deux pas d’un lion.
                            Oubliez qui vous êtes l’espace d’un instant,
                            Au cœur d’un édifice religieux reconnu dans le monde.
                            Plongez vos yeux dans une eau turquoise
                            ou laissez le sourire d’un(e) bel(le) inconnu (e) vous transporter
                            quelque part ici, dans le berceau de l’humanité…<br/>
                            <span class="bja">Bonne journey in Côte d'Ivoire.</span>
                            </p>
                        </div>
                        -->
                        <a href="#menu1"
                           class="btn btn-transparent-white btn-rounded btn-rounded btn-large mt-4 scroll"><i
                                class="fa fa-angle-double-down"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Single portfolio item two-->
    <section class="single-items center-block parallax" id="menu1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 center-col">
                    <div class="area-heading1 mt-6 wow fadeInRight ctk1">
                        <h3 class="area-title text-capitalize alt-font text-white mb-2 font-weight-100">
                            <a>A F R I C A <span style="color:#03313d;">D A Y</span></a>
                        </h3>
                        <p class="text-white text-justify font-weight-300" id="res"><em>Valable pour un circuit d’une
                                journée. Grand-Bassam, Bingerville, Abidjan, trois Capitales, considérées comme mémoire
                                de l’histoire coloniale de la Côte d’Ivoire.</em></p>
                        <a href="{{route('reservation',['pack'=>'AFRICA_DAY'])}}" class="more mt-4" data-toggle="modal" data-target="#myModal2">Réservez ici</a>
                    </div>
                </div>
                <a href="#home" class="btn btn-transparent-white btn-rounded btn-rounded btn-large mt-6 scroll ct"><i
                        class="fa fa-angle-double-up"></i></a>
                <a href="#menu2" class="btn btn-transparent-white btn-rounded btn-rounded btn-large mt-6 scroll ct1"><i
                        class="fa fa-angle-double-down"></i></a>
            </div>
        </div>
    </section>

    <!--Single portfolio item four-->
    <section class="single-items1 center-block parallax" id="menu2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 center-col">
                    <div class="area-heading1 mt-6 wow fadeInRight ctk2">
                        <h3 class="area-title text-capitalize alt-font text-white mb-2 font-weight-100">
                            <a>A F R I C A <span style="color:#ad4d0b;">W E E K E N D</span></a>
                        </h3>
                        <p class="text-white text-justify font-weight-300"><em>Ce pack vous offre non seulement une
                                immersion culturelle et historique totale des destinations proposées, mais aussi des
                                circuits de loisirs et de relaxations magistrales.</em></p>
                        <p class="text-white text-justify font-weight-300">Citées disparues, Cours de Rois, laissez-vous
                            transporter par la magie de l’Histoire, à travers les différentes époques et civilisations
                            de la Côte d’Ivoire. Profitez d’une balade, sur le plus vaste réseau lagunaire d’Afrique,
                            naviguant entre îles, mangroves et parcs naturels ; Et expérimentez des nuits
                            exceptionnelles, les pieds dans l’eau, sur les rives de l’Atlantique.</p>
                        <a href="#" class="more mt-4" data-toggle="modal" data-target="#myModal3">Réservez ici</a>
                    </div>
                </div>
                <a href="#menu1" class="btn btn-transparent-white btn-rounded btn-rounded btn-large mt-6 scroll ct"><i
                        class="fa fa-angle-double-up"></i></a>
                <a href="#menu3" class="btn btn-transparent-white btn-rounded btn-rounded btn-large mt-6 scroll ct1"><i
                        class="fa fa-angle-double-down"></i></a>
            </div>
        </div>
    </section>

    <!--Single portfolio item six-->
    <section class="single-items2 center-block parallax" id="menu3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 center-col">
                    <div class="area-heading1 mt-6 wow fadeInRight ctk2">
                        <h3 class="area-title text-capitalize alt-font text-white mb-2 font-weight-100">
                            <a><span style="color:#532d7f;">M Y P A C K</span> A F R I C A</a>
                        </h3>
                        <p class="text-white text-justify font-weight-300"><em>Ce pack vous offre la possibilité du
                                choix de vos destinations touristiques.</em></p>
                        <p class="text-white text-justify font-weight-300">Vous êtes plutôt plage ou montagne ? Culture
                            ou loisir ? Vous êtes en Côte d’Ivoire pour les affaires ou le tourisme ? Peu importe, avec
                            ce pack, vous avez la possibilité de contrôler vos destinations et votre agenda. Nous vous
                            accommoderons, afin de perfectionner vos choix en un circuit exceptionnel et ainsi vous
                            offrir une expérience des plus inoubliables.</p>
                        <a href="#" class="more mt-4" data-toggle="modal" data-target="#myModal4">Choisissez votre
                            itinéraire</a>
                    </div>
                </div>
                <a href="#menu2" class="btn btn-transparent-white btn-rounded btn-rounded btn-large mt-6 scroll ct"><i
                        class="fa fa-angle-double-up"></i></a>
                <a href="#menu4" class="btn btn-transparent-white btn-rounded btn-rounded btn-large mt-6 scroll ct1"><i
                        class="fa fa-angle-double-down"></i></a>
            </div>
        </div>
    </section>

    <!--Single portfolio item six-->
    <section class="single-items3 center-block parallax" id="menu4">
        <div class="area-heading1 wow fadeInRight ctk2">
            <ul class="cb-slideshow">
                <li><span>Image 01</span></li>
                <li><span>Image 02</span></li>
                <li><span>Image 03</span></li>
                <li><span>Image 04</span></li>
                <li><span>Image 05</span></li>
                <li><span>Image 06</span></li>
            </ul>
        </div>
        <a href="#menu3" class="btn btn-transparent-white btn-rounded btn-rounded btn-large mt-4 scroll ct2"><i
                class="fa fa-angle-double-up"></i></a>
    </section>


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

    <!-- Modal2 -->
    <div class="modal fade" id="myModal2" role="dialog">
        <div class="modal-dialog modal-pack">

            <!-- Modal content -->
            <div class="modal-content mod-pck1">
                <div class="modal-header text-center mod-head1">
                    <h4 class="modal-title mod-title-pck1">A F R I C A D A Y</h4>
                </div>
                <div class="modal-body">

                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front" style="background: url(innovative/img/2.jpg);">
                                <h1 style="font-size: 2rem;">Grand Bassam</h1>
                                <p class="text-center font-weight-300">Vous tomberez surement sous le charme de
                                    Grand-Bassam et de ses joyaux architecturaux. Ville abandonnée au temps, Patrimoine
                                    Mondial de l’Unesco, Bassam où chaque rue a une histoire, Bassam où chaque bâtiment
                                    donne à la ville un charme suranné d’une époque coloniale.</p>
                            </div>
                            <div class="flip-card-back">
                                <h5>Circuit 1</h5>
                                <p class="text-center font-weight-300">
                                    &diams; Musée des Costumes<br/>
                                    &diams; Centre Céramique
                                </p>
                                <h5>Circuit 2</h5>
                                <p class="text-center font-weight-300">
                                    &diams; Maison des Artistes<br/>
                                    &diams; Maison Ganamet<br/>
                                    &diams; Cathédrale du Sacré Cœur<br/>
                                    &diams; Le Phare
                                </p>
                                <div class="btn-action">
                                    <a href="{{route('reservation',['pack'=>'AFRICA_DAY'])}}" class="more1">Faire une Réservation</a>
                                    <a href="formulaire-devis-africaday.php" class="more1">Demandez un devis</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front" style="background: url(innovative/img/4.jpg);">
                                <h1 style="font-size: 2rem;">Bingerville</h1>
                                <p class="text-center font-weight-300">A Bingerville, deuxième Capitale du pays
                                    (1909-1934), laissez-vous envahir par ce puissant sentiment de bien-être lors d’une
                                    promenade au Jardin Botanique. Jardin luxuriant de milles et une merveille, d’une
                                    incroyable allée de bambous, et d’un majestueux fromager. Entre terre et lagune,
                                    pique-niques et découvertes, Bingerville saura surement vous communiquer sa sérénité
                                    imposante.</p>
                            </div>
                            <div class="flip-card-back">
                                <h5>Circuit 1</h5>
                                <p class="text-center font-weight-300">
                                    &diams; Jardin Botanique<br/>
                                </p>
                                <div class="btn-action">
                                    <a href="{{route('reservation',['pack'=>'AFRICA_DAY'])}}" class="more1">Faire une Réservation</a>
                                    <a href="{{route('reservation',['pack'=>'AFRICA_DAY'])}}" class="more1">Demandez un devis</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front" style="background: url(innovative/img/3.jpg);">
                                <h1 style="font-size: 2rem;">Abidjan</h1>
                                <p class="text-center font-weight-300">La forêt du Banco, considérée comme le poumon
                                    d’Abidjan, est sans aucun doute le bien le plus précieux de la Capitale Ivoirienne.
                                    Laissez-vous guider dans cette forêt enchantée, entre feuilles, arbres, et
                                    chimpanzés, à la rencontre d’espèces rares, au cœur même de la métropole
                                    africaine.</p>
                            </div>
                            <div class="flip-card-back">
                                <h5>Circuit 1</h5>
                                <p class="text-center font-weight-300">
                                    &diams; Domaine Bini
                                </p>
                                <h5>Circuit 2</h5>
                                <p class="text-center font-weight-300">
                                    &diams; Forêt du Banco
                                </p>
                                <h5>Circuit 3</h5>
                                <p class="text-center font-weight-300">
                                    &diams; Musée des Civilisations<br/>
                                    &diams; CAVA de Treichville
                                </p>
                                <h5>Circuit 4</h5>
                                <p class="text-center font-weight-300">
                                    &diams; L’histoire des communes d’Abidjan
                                </p>
                                <div class="btn-action">
                                    <a href="{{route('reservation',['pack'=>'AFRICA_DAY'])}}" class="more1">Faire une Réservation</a>
                                    <a href="{{route('reservation',['pack'=>'AFRICA_DAY'])}}" class="more1">Demandez un devis</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                </div>
            </div>

        </div>
    </div>

    <!-- Modal3 -->
    <div class="modal fade" id="myModal3" role="dialog">
        <div class="modal-dialog modal-pack2">

            <!-- Modal content -->
            <div class="modal-content mod-pck2">
                <div class="modal-header text-center mod-head2">
                    <h4 class="modal-title mod-title-pck2">A F R I C A W E E K E N D</h4>
                </div>
                <div class="modal-body">
                    <div class="flip-card1">
                        <div class="flip-card-inner1">
                            <div class="flip-card-front1" style="background: url(innovative/img/2.jpg);">
                                <h1 style="font-size: 2rem;">PACK SANS NUITÉE</h1>
                            </div>
                            <div class="flip-card-back1">
                                <h5>Circuit 1</h5>
                                <p class="text-center font-weight-300">
                                    &diams; Domaine Bini <br/>
                                    &diams; Balade lagunaire <br/>
                                </p>
                                <h5>Circuit 2</h5>
                                <p class="text-center font-weight-300">
                                    &diams; Forêt du Banco <br/>
                                    &diams; Balade lagunaire<br/>
                                </p>
                                <h5>Circuit 3</h5>
                                <p class="text-center font-weight-300">
                                    &diams; Jardin Botanique <br/>
                                    &diams; Balade lagunaire <br/>
                                </p>
                                <h5>Circuit 4</h5>
                                <p class="text-center font-weight-300">
                                    &diams; Grand Bassam <br/>
                                    &diams; Balade lagunaire <br/>
                                </p>
                                <div class="btn-action">
                                    <a href="#" class="more2">Faire une Réservation</a>
                                    <a href="formulaire-devis-africaweekend.php" class="more2">Demandez un devis</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flip-card1">
                        <div class="flip-card-inner1">
                            <div class="flip-card-front1" style="background: url(innovative/img/2.jpg);">
                                <h1 style="font-size: 2rem;">PACK AVEC NUITÉE</h1>
                            </div>
                            <div class="flip-card-back1">
                                <h5>Circuit 1</h5>
                                <p class="text-center font-weight-300">
                                    &diams; Yamoussoukro<br/>
                                </p>
                                <h5>Circuit 2</h5>
                                <p class="text-center font-weight-300">
                                    &diams; San Pedro <br/>
                                </p>
                                <h5>Circuit 3</h5>
                                <p class="text-center font-weight-300">
                                    &diams; Grand Béréby <br/>
                                </p>
                                <h5>Circuit 4</h5>
                                <p class="text-center font-weight-300">
                                    &diams; Assinie <br/>
                                </p>
                                <div class="btn-action">
                                    <a href="#" class="more2">Faire une Réservation</a>
                                    <a href="formulaire-devis-africaweekend.php" class="more2">Demandez un devis</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                </div>
            </div>

        </div>
    </div>

    <!-- Modal4 -->
    <div class="modal fade" id="myModal4" role="dialog">
        <div class="modal-dialog modal-pack3">

            <!-- Modal content -->
            <div class="modal-content mod-pck3">
                <div class="modal-header text-center mod-head3">
                    <h4 class="modal-title mod-title-pck3">MY PACK AFRICA</h4>
                </div>
                <div class="modal-body">
                    <div class="flip-card2">
                        <div class="flip-card-inner2">
                            <div class="flip-card-front2" style="background: url(innovative/img/2.jpg);">
                                <h1 style="font-size: 2rem;">BALNEAIRE</h1>
                            </div>
                            <div class="flip-card-back2">
                                <p class="text-center font-weight-300">La Côte d’Ivoire vous offre ses plus belles
                                    plages de sable blanc, propices au farniente, sans oublier de délicieuses grillades
                                    de fruits de mer, fraîchement sortis de l’eau.</p>
                                <div class="btn-action">
                                    <a href="#" class="more3">Faire une Réservation</a>
                                    <a href="formulaire-devis-mypackafrica.php" class="more3">Demandez un devis</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flip-card2">
                        <div class="flip-card-inner2">
                            <div class="flip-card-front2" style="background: url(innovative/img/2.jpg);">
                                <h1 style="font-size: 2rem;">ECO</h1>
                            </div>
                            <div class="flip-card-back2">
                                <p class="text-center font-weight-300">Laissez-vous séduire par une nature généreuse et
                                    variée.<br/>
                                    Parcs nationaux et réserves botaniques n’attendent que vos yeux conquis.</p>
                                <div class="btn-action">
                                    <a href="#" class="more3">Faire une Réservation</a>
                                    <a href="formulaire-devis-mypackafrica.php" class="more3">Demandez un devis</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flip-card2">
                        <div class="flip-card-inner2">
                            <div class="flip-card-front2" style="background: url(innovative/img/2.jpg);">
                                <h1 style="font-size: 2rem;">CULTUREL</h1>
                            </div>
                            <div class="flip-card-back2">
                                <p class="text-center font-weight-300">Découvrez les trésors culturels du pays de DJ
                                    Arafat, A’salfo, Meiway, Aboudia, Mathilde Moreau, Gilles Touré… Surprise et
                                    émerveillement garantis !</p>
                                <div class="btn-action">
                                    <a href="#" class="more3">Faire une Réservation</a>
                                    <a href="formulaire-devis-mypackafrica.php" class="more3">Demandez un devis</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flip-card2">
                        <div class="flip-card-inner2">
                            <div class="flip-card-front2" style="background: url(innovative/img/2.jpg);">
                                <h1 style="font-size: 2rem;">RELIGIEUX</h1>
                            </div>
                            <div class="flip-card-back2">
                                <p class="text-center font-weight-300">Mosquées, cathédrales, monastères,
                                    basilique…<br/>
                                    Des dizaines d’édifices religieux vous appellent, pour vous offrir des milliers de
                                    beaux souvenirs.</p>
                                <div class="btn-action">
                                    <a href="#" class="more3">Faire une Réservation</a>
                                    <a href="formulaire-devis-mypackafrica.php" class="more3">Demandez un devis</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flip-card2">
                        <div class="flip-card-inner2">
                            <div class="flip-card-front2" style="background: url(innovative/img/2.jpg);">
                                <h1 style="font-size: 2rem;">AGRO</h1>
                            </div>
                            <div class="flip-card-back2">
                                <p class="text-center font-weight-300">Le 1<sup>er</sup> producteur mondial de cacao
                                    vous invite à découvrir son très riche patrimoine agricole ; son hévéa, son coton,
                                    ses palmiers à huile, sa canne à sucre… Comment résister ?</p>
                                <div class="btn-action">
                                    <a href="#" class="more3">Faire une Réservation</a>
                                    <a href="formulaire-devis-mypackafrica.php" class="more3">Demandez un devis</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flip-card2">
                        <div class="flip-card-inner2">
                            <div class="flip-card-front2" style="background: url(innovative/img/2.jpg);">
                                <h1 style="font-size: 2rem;">HISTORIQUE</h1>
                            </div>
                            <div class="flip-card-back2">
                                <p class="text-center font-weight-300">Laissez-vous surprendre par d’incroyables
                                    monuments et plus de 15 000 pièces authentiques de toutes les régions de Côte
                                    d’Ivoire.</p>
                                <div class="btn-action">
                                    <a href="#" class="more3">Faire une Réservation</a>
                                    <a href="formulaire-devis-mypackafrica.php" class="more3">Demandez un devis</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                </div>
            </div>

        </div>
    </div>

    <!--Scroll Top-->
    <a class="scroll-top-arrow" href="javascript:void(0);"><i class="fas fa-angle-up"></i></a>
    <!--Scroll Top End-->
@endsection
