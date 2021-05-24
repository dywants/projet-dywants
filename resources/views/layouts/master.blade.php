<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog dywants</title>
    <link rel="shortcut icon" type="image/x-icon" href="./favicon.ico">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,700;1,100;1,300&family=Raleway:ital,wght@0,100;0,300;0,400;0,700;1,100&family=Yesteryear&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body id="top">
<header class="hero">
    <!-------Navigation----------->
    <nav class="nav">
        <div class="nav__menu">
            <div class="menu-icons">
                <i class="fas fa-bars"></i>
                <i class="fas fa-times"></i>
            </div>
            <a href="/" class="logo">
                <img src="{{ asset('images/favicon.png') }}" alt="">
                Dywants
            </a>
            <ul class="nav-list">
{{--                <li>--}}
{{--                    <a href="/" class="link current">Accueil</a>--}}
{{--                </li>--}}
                <li class="link__submenu">
                    <a href="#">Articles
                        <i class="fas fa-angle-down"></i>
                    </a>
                    <ul class="sub-menu">
                        @foreach($categories as $category)
                            <li>
                                <a href="{{ route('website.category',['slug' => $category->slug]) }}">{{
                                $category->name }}</a>
                            </li>
                        @endforeach
                    </ul>
                </li>
                <li>
                    <a href="#" class="link">Prestations Web</a>
                </li>
                <li>
                    <a href="formations.html" class="link">Formations</a>
                </li>
                <li>
                    <a href="outil.html" class="link">Outils</a>
                </li>
                <li>
                    <a href="forum.html" class="link">Forum</a>
                </li>
            </ul>
            <div class="section-reglogin" id="item-hide">
                <a href="inscription.html" class="btn">S'inscrire</a>
                <a href="connexion.html" class="link ">Se connecter</a>
            </div>
            <div class="search">
                <div class="search__field">
                    <input type="text" placeholder="       Recherche . . ." required id="search">
                </div>
            </div>
{{--            <div class="panier__section hide">--}}
{{--                <div class="separator"></div>--}}
{{--                <div class="panier">--}}
{{--                    <img src="images/panier.svg" alt="image panier">--}}
{{--                    <span class="meta-panier">1</span>--}}
{{--                </div>--}}
{{--            </div>--}}
            <div class="avatar__image hide__connect  ">
                <button class="btn__avatar"><img src="./images/profil_thibaut.png" class="avatar avat-pt"></button>
                <div class="nav__profil-connect">
                    <div class="nav__items__profil">
                        <a href="profil.html">
                            <i class="far fa-user"></i>
                            <span>Profil</span>
                        </a>
                    </div>
                    <div class="nav__items__profil">
                        <a href="#">
                            <i class="fa fa-power-off" aria-hidden="true"></i>
                            <span>Déconnexion</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!---//----Navigation-----//------>
    @yield('bg-header')
</header>
@yield('bg-headerpost')
@yield('bg-headercategory')
<div class="wrapper" id="mainCont">
    <!-- loader -->
    <div class="container__loader">
        <span class="loader loader-circles"></span>
        Chargement...
    </div>
    <!-- end loader -->
   @yield('content')
</div>

<!-- footer -->
<footer class="footer">
    <div class="footer__container">
        <div class="link__contact__me">
            <h2>Me contacter</h2>
            <ul class="links__contact">
                <li>
                    <a href="#">
                        <i class="fas fa-envelope-open-text"></i>
                        <span>Par email</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="far fa-comment"></i>
                        <span>Tchat</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-info-circle"></i>
                        <span>A-propos</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-user-alt"></i>
                        <span>Politique de confidentialité</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="footer__newsletter">
            <h2>Newsletter</h2>
            <p>Recevez nos dernières tutos et astuces...</p>
            <div class="form-element">
                <input type="text" placeholder="Email">
                <button type="submit" name="submit__newsletter" class="btn btn__newsletter"><i
                        class="fas fa-chevron-right"></i></button>
            </div>
        </div>
        <div class="instagram">
            <h2>Categories</h2>
            <div id="links">
                @foreach($categories as $category)
                    <a  href="{{ route('website.category',['slug' => $category->slug]) }}">{{$category->name }}
                    </a>
                @endforeach
            </div>
        </div>
        <div class="follow">
            <h2>Suivez-moi</h2>
            <div class="social__medias">
                <ul>
                    <li><a href="#"><i class="fab fa-facebook-f fa-2x"></i></a></li>
                    <li><a href="#"><i class="fab fa-youtube fa-2x"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin-in fa-2x"></i></a></li>
                    <li><a href="#"><i class="fab fa-github"></i></a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="right flex-row">
        <h4>
            Copyright © 2019 All rights reserved|Crée par:
            <a href="#" target="-black">Dywants</a>
        </h4>
    </div>
    <a class="scroll-link top-link" href="#top">
        <i class="fas fa-arrow-up"></i>
    </a>
</footer>
<!-- end footer -->
<!-- script js -->
<script src="js/main.js"></script>
</body>
</html>
