@extends('layouts.master')
@section('bg-headerpost')
    @include('includes.bg-headerpost')
@endsection
@section('content')
    <!-- Header area article -->
    <header class="header__area-article">
        <div class="row__area">
            <!-- Fil d'ariane -->
            <div class="fil__ariane">
                <ul class="breadcrumb">
                    <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i>Accueil</a></li>
                    <li><a href="#">Categories</a></li>
                    <li><a href="#">HTML&CSS</a></li>
                    <li><a href="#">Titre de l'article</a></li>
                </ul>
            </div>
            <!-- Fin fil d'ariane -->
            <!-- dae article -->
            <!--        <div class="date__article">-->
            <!--          <i class="far fa-calendar-alt "></i>-->
            <!--          <span class="post__date">November 23,2019</span>-->
            <!--        </div>-->
            <!-- end date article -->
        </div>
    </header>
    <!-- Header area article -->
    <div id="progress"></div>
    <div class="wrapper">
        <div class=" inner container__article">
            <!-- Social partage -->
            <div class=" nav__partage-social">
                <div class="middle">
                    <div class="sm-container">
                        <div class="btn_like"><button><i class="far fa-thumbs-up"></i></button></div>
                        <div><button><i class="far fa-comment"></i></button></div>
                        <button id="show-btn"><i class="fas fa-share-alt"></i></button>
                        <div class="sm-menu">
                            <button><i class="sml fab fa-facebook-f share_facebook" data-url="http://...."></i></button>
                            <button><i class="sml fab fa-twitter share_twitter" data-url="http://...."></i></button>
                            <button><i class="sml fab fa-linkedin share_linkedin" data-url="http://...."></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end social partage -->
            <!-- Main area -->
            <main class="main__article">
                <div class="header__article">
                    <div class="meta__donnees">
                        <div class="avatar__image">
                            <img src="@if($post->user->image) {{ $post->user->image }} @else {{ asset('images/profile/avatar.jpg') }} @endif" class="avatar" alt="image auteur">
                        </div>
                        <div class="meta__donnees__info">
                            <div class="meta__donnees__info__name"><a href="#">{{ $post->user->name }}</a></div>
                            <span class="meta__donnees__info__fields">
                  <span class="field__date">{{ $post->created_at->translatedFormat('l jS F Y') }}</span>
                  <span class="separating">|</span>
                  <span class="field__time--read">5mn de lecture</span>
                </span>
                        </div>
                    </div>
                    <a href="{{ route('website.category',['slug' => $post->category->slug]) }}" class="tag cat-php">
                        <i class="fas fa-tags"></i>
                        {{ $post->category->name }}
                    </a>
                </div>
                <div class="content">
                    {!! $post->description !!}
                </div>
                @if($post->tags->count() > 0)
                    <div class="meta-tags">
                        <span>Tags:</span>
                        @foreach($post->tags as $tag)
                            <a href="{{ route('website.tag',['slug' => $tag->slug]) }}" class="tag cat-php">
                                <i class="fa fa-tag"></i>
                                {{ $tag->name }}
                            </a>
                        @endforeach
                    </div>
                @endif

                <!-- Section feedback-->
                <div class="feedback feedcenter">
                    <span class="feedback__text">Ce tutoriel étail-il utile?</span>
                    <div class="feedback__btn">
                        <div class="feedback__btn__good">
                            <a href="#" class="btn edit">
                                <i class="far fa-thumbs-up"></i>
                                Oui</a>
                        </div>
                        <div class="feedback__btn__bad">
                            <a href="#" class="btn delete">
                                <i class="far fa-thumbs-down"></i>
                                Non</a>
                        </div>
                    </div>
                </div>
                <!-- Section about me article -->
                <div class="bloc__about-me">
                    <div class="about-me">
                        <div class="avatar__image">
                            <img src="@if($post->user->image) {{ $post->user->image }} @else {{ asset('images/profile/avatar.jpg') }} @endif" class="avatar" alt="image auteur">
                        </div>
                        <h3 class="title__about-me">{{ $post->user->name }}</h3>
                    </div>
                    <div class="content__about-me">
                        <p class="text__about-me">
                            {{ $post->user->description }}<span class="emoji"></span>
                        </p>
                        <a href="#" class="link__for-article">Plus sur moi</a>
                    </div>
                </div>
                <!-- Navigation previous &next article -->
                <div class="nav__articles">
                    <div class="nav__prev">
                        <a href="#">
                <span class="meta__nav">
                  <i class="fas fa-chevron-left"></i>
                  Article precedent
                </span>
                            <h3 class="title__nav-article"> Comment reparer l'erreur votre connexion n'est pas privée dans Chrome?
                            </h3>
                        </a>
                    </div>
                    <div class="nav__next">
                        <a href="#">
                <span class="meta__nav">
                  Article suivant
                  <i class="fas fa-chevron-right"></i>
                </span>
                            <h3 class="title__nav-article"> Comment reparer l'erreur votre connexion n'est pas privée dans Chrome?
                            </h3>
                        </a>
                    </div>
                </div>
            </main> <!-- End main area -->
            <aside class="sidebar__article">
                <div class="sidebar__widget">
                    <a href="#" class="widget__image" style="background-image: url(./images/widget/bg-widget-javascript.jpg);">
                        <p class="sidebar__widget__category">Javascript</p>
                        <h3 class="sidebar__widget__title">Suivez les Tutoriels Javascript</h3>
                        <p class="sidebar__widget__content">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem eaque eius et ex illum laboriosam nisi
                            quam recusandae sunt vero.
                        </p>
                        <p class="btn__article widget__btn">
                            <a href="#">Lire plus</a>
                            <i class="fas fa-arrow-right"></i>
                        </p>
                    </a>
                </div>
                <div class="widget__ressources">
                    <h2 class="widget__ressources__title">J'ai besoins d'aide pour...</h2>
                    <div class="widget__ress_ligne">
                        <div class="widget__box first">
                            <a href="#">
                                <i class="fas fa-code"></i>
                                <a href="#">
                                    <h4>Coding web</h4>
                                </a>
                            </a>
                        </div>
                        <div class="widget__box second">
                            <a href="#">
                                <i class="fab fa-wordpress fa-2x"></i>
                                <a href=" #">
                                    <h4>Démarrer avec Wordpress</h4>
                                </a>
                            </a>
                        </div>
                    </div>
                    <div class="widget__ress_ligne">
                        <div class="widget__box three">
                            <a href="#">
                                <i class="fas fa-lock fa-2x"></i>
                                <a href="#">
                                    <h4>Sécurite Wordpress</h4>
                                </a>
                            </a>
                        </div>
                        <div class="widget__box four">
                            <a href="#">
                                <i class="fas fa-tachometer-alt fa-2x"></i>
                                <a href=" #">
                                    <h4>Performance Wordpress</h4>
                                </a>
                            </a>
                        </div>
                    </div>
                    <div class="widget__ress_ligne">
                        <div class="widget__box five">
                            <a href="#">
                                <i class="fas fa-shopping-cart fa-2x"></i>
                                <a href="#">
                                    <h4>Démarrer un E-commerce</h4>
                                </a>
                            </a>
                        </div>
                        <div class="widget__box six">
                            <a href="#">
                                <i class="fas fa-tools fa-2x"></i>
                                <a href=" #">
                                    <h4>Outils dev&video</h4>
                                </a>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="widget__guide">
                    <a href=#" class="widget__image wid-mb">
                        <img src="./images/widget/startablog.png" alt="image guide gratuit wordpress">
                        <a href="#" class="btn btn__guide">Guide gratuit(start Now)</a>
                    </a>
                </div>
                <div class="sidebar__widget">
                    <a href="#" class="widget__image" style="background-image: url(./images/widget/bg-widget-javascript.jpg);">
                        <p class="sidebar__widget__category">Javascript</p>
                        <h3 class="sidebar__widget__title">Suivez les Tutoriels Javascript</h3>
                        <p class="sidebar__widget__content">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem eaque eius et ex illum laboriosam nisi
                            quam recusandae sunt vero.
                        </p>
                        <p class="btn__article widget__btn">
                            <a href="#">Lire plus</a>
                            <i class="fas fa-arrow-right"></i>
                        </p>
                    </a>
                </div>
                <div class="pub__area">
                    <div>Publicité</div>
                </div>
            </aside>
        </div>
    </div>

    <!-- Related Post -->
    <div class="article__simulaires">
        <div class="title__article__related">
            <h3>
                Vous aimerez également...
            </h3>
        </div>
        <div class="container__related__post">
            <div class="article__related">
                <a href="#">
                    <h4 class="first__post">
                        Comment reparer l'erreur votre connexion n'est pas privée dans Chrome?
                    </h4>
                </a>
            </div>
            <div class="article__related">
                <a href="#">
                    <h4 class="second__post">
                        Comment reparer l'erreur votre connexion n'est pas privée dans Chrome?
                    </h4>
                </a>
            </div>
            <div class="article__related">
                <a href="#">
                    <h4 class="three__post">
                        Comment reparer l'erreur votre connexion n'est pas privée dans Chrome?
                    </h4>
                </a>
            </div>
        </div>
    </div>
    <!-- Related Post -->

    <!-- Form commentaires -->
    <div class="comments__article">
        <h4 class="nbr__comments">
            <i class="fas fa-comments"></i>
            Commentaires
            <span class="badge">2</span>
        </h4>
        <form action="" class="comment__form">
            <div class="group__form">
                <label for="comment__pseudo">Pseudo</label>
                <input type="text" name="pseudo" id="comment__pseudo" placeholder="Votre pseudo" class="form__control">
            </div>
            <div class="group__form">
                <label for="comment__email" class="control__label">Email</label>
                <input type="email" name="email" id="comment__email" placeholder="Votre email" class="form__control">
            </div>
            <div class="group__form">
                <textarea name="comment__post" class=" form__control msg"  rows="10" placeholder="Votre commentaire..."></textarea>
            </div>
            <p class="tcenter"><button type="submit" class="btn">Envoyez</button></p>
        </form>

        <div class="section_comment">
            <ul class="list__comment">
                <li class="list__comment__item">
                    <article class="comment post">
                        <div class="comment__author">
                            <div class="avatar__image">
                                <img src="@if($post->user->image) {{ $post->user->image }} @else {{ asset('images/profile/avatar.jpg') }} @endif" class="avatar" alt="image auteur">
                            </div>
                        </div>
                        <div class="comment__post">
                            <div class="comment__post__meta">
                                <a href="#" itemprop="author" itemtype="">
                                    <span class="name__avatar">Thibaut</span>
                                </a>
                                <a href="#" class="comment__date">
                                    <time datetime="">2 Avril 2020 à 13h15min</time>
                                </a>
                            </div>
                            <div class="comment__text">
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa nihil reprehenderit sequi repudiandae,
                                    non
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa nihil reprehenderit sequi repudiandae,
                                    non
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa nihil reprehenderit sequi repudiandae,
                                    non
                                    sequi repudiandae, non
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa nihil reprehenderit sequi repudiandae,
                                    non
                                </p>
                            </div>
                            <button type="submit" class="btn">Repondre</button>
                        </div>
                    </article>
                    <ul class="subcomment">
                        <li class="subcomment__item">
                            <article class="comment post">
                                <div class="comment__author">
                                    <div class="avatar__image">
                                        <img src="@if($post->user->image) {{ $post->user->image }} @else {{ asset('images/profile/avatar.jpg') }} @endif" class="avatar" alt="image auteur">
                                    </div>
                                </div>
                                <div class="comment__post">
                                    <div class="comment__post__meta">
                                        <a href="#" itemprop="author" itemtype="">
                                            <span class="name__avatar">Thibaut</span>
                                        </a>
                                        <a href="#" class="comment__date">
                                            <time datetime="">2 Avril 2020 à 13h15min</time>
                                        </a>
                                    </div>
                                    <div class="comment__text">
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa nihil reprehenderit sequi
                                            repudiandae,
                                            non
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa nihil reprehenderit sequi
                                            repudiandae,
                                            non
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa nihil reprehenderit sequi
                                            repudiandae,
                                            non
                                            sequi repudiandae, non
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa nihil reprehenderit sequi
                                            repudiandae,
                                            non
                                        </p>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="subcomment__item">
                            <article class="comment post">
                                <div class="comment__author">
                                    <div class="avatar__image">
                                        <img src="@if($post->user->image) {{ $post->user->image }} @else {{ asset('images/profile/avatar.jpg') }} @endif" class="avatar" alt="image auteur">
                                    </div>
                                </div>
                                <div class="comment__post">
                                    <div class="comment__post__meta">
                                        <a href="#" itemprop="author" itemtype="">
                                            <span class="name__avatar">Thibaut</span>
                                        </a>
                                        <a href="#" class="comment__date">
                                            <time datetime="">2 Avril 2020 à 13h15min</time>
                                        </a>
                                    </div>
                                    <div class="comment__text">
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa nihil reprehenderit sequi
                                            repudiandae,
                                            non
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa nihil reprehenderit sequi
                                            repudiandae,
                                            non
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa nihil reprehenderit sequi
                                            repudiandae,
                                            non
                                            sequi repudiandae, non
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa nihil reprehenderit sequi
                                            repudiandae,
                                            non
                                        </p>
                                    </div>
                                </div>
                            </article>
                        </li>
                    </ul>
                </li>
                <li class="list__comment__item">
                    <article class="comment post">
                        <div class="comment__author">
                            <div class="avatar__image">
                                <img src="@if($post->user->image) {{ $post->user->image }} @else {{ asset('images/profile/avatar.jpg') }} @endif" class="avatar" alt="image auteur">
                            </div>
                        </div>
                        <div class="comment__post">
                            <div class="comment__post__meta">
                                <a href="#" itemprop="author" itemtype="">
                                    <span class="name__avatar">Thibaut</span>
                                </a>
                                <a href="#" class="comment__date">
                                    <time datetime="">2 Avril 2020 à 13h15min</time>
                                </a>
                            </div>
                            <div class="comment__text">
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa nihil reprehenderit sequi repudiandae,
                                    non
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa nihil reprehenderit sequi repudiandae,
                                    non
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa nihil reprehenderit sequi repudiandae,
                                    non
                                    sequi repudiandae, non
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa nihil reprehenderit sequi repudiandae,
                                    non
                                </p>
                            </div>
                            <button type="submit" class="btn">Repondre</button>
                        </div>
                    </article>
                </li>
            </ul>
        </div>
    </div>
    <!-- end form commentaire -->
@endsection
