@extends('layouts.master')
@section('bg-header')
    <!-- header banner -->
    @include('includes.bg-header')
    <!--end/header banner -->
@endsection

@section('content')
    <div class="site-section section-post">
        <div class="container max-width">
            <div class="articles position-r">
                @foreach($firstPosts2 as $post)
                    <a href="{{ route('website.post',['slug' => $post->slug]) }}" class="image-layout gradient v-height
                    mt-30"
                       style="background-image: url('{{ $post->image }}')">
                        <div class="text">
                            <div class="past-categories mb-3">
                                <span class="post-category">{{ $post->category->name }}</span>
                            </div>
                            <h2>{{ $post->title }}</h2>
                            <span class="date">{{ $post->created_at->translatedFormat('l jS F Y') }}</span>
                        </div>
                    </a>
                @endforeach
            </div>
            <div class="articles">
                @foreach($middlePost as $post)
                <a href="{{ route('website.post', ['slug' => $post->slug]) }}" class="image-layout gradient v-height2"style="background-image: url('{{ $post->image }}')" >
                    <div class="text">
                        <div class="past-categories mb-3">
                            <span class="post-category">{{ $post->category->name }}</span>
                        </div>
                        <h2>{{ $post->title }}</h2>
                        <span class="date">{{ $post->created_at->translatedFormat('l jS F Y') }}</span>
                    </div>
                </a>
                @endforeach
            </div>
            <div class="articles">
                @foreach($lastPosts as $post)
                    <a href="{{ route('website.post', ['slug' => $post->slug]) }}"
                       class="image-layout gradient v-height mt-30" style="background-image: url('{{ $post->image }}')">
                        <div class="text">
                            <div class="past-categories mb-3">
                                <span class="post-category">{{ $post->category->name }}</span>
                            </div>
                            <h2>{{ $post->title }}</h2>
                            <span class="date">{{ $post->created_at->translatedFormat('l jS F Y') }}</span>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
        <div class="btn__article position">
            <a href="{{ route('website.posts') }}">Voir plus</a>
            <i class="fas fa-arrow-right"></i>
        </div>
    </div>
    <div class="section-tutoriel">
        <div class="wrapper">
            <div class="row">
                <div class="col">
                    <div class="feature-img">
                        <img src="{{ asset('images/pic1.png') }}" alt="" width="100%">
                        <img src="{{ asset('images/play.png') }}" class="play-btn">
                    </div>
                </div>
                <div class="col">
                    <div class="small-img-row">
                        <div class="small-img">
                            <img src="{{ asset('images/pic2.png') }}" alt="" width="100%">
                            <img src="{{ asset('images/play.png') }}" class="play-btn">
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam asperiores .</p>
                    </div>
                    <div class="small-img-row">
                        <div class="small-img">
                            <img src="{{ asset('images/pic3.png') }}" alt="">
                            <img src="{{ asset('images/play.png') }}" class="play-btn">
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam asperiores .</p>
                    </div>
                    <div class="small-img-row">
                        <div class="small-img">
                            <img src="{{ asset('images/pic4.png') }}" alt="">
                            <img src="{{ asset('images/play.png') }}" class="play-btn">
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam asperiores .</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-post m-set-home">
        <div class="header__section">
            <h2>Articles de blog</h2>
        </div>
        <div class="container">
            <div class="articles">
                <article class="blog__post">
                    <div class="post-thumbnail">
                        <a href="#"><img src="./images/Feature_image/blog1.png" alt="Post image"></a>
                    </div>
                    <div class="post__info">
                        <div class="type__cat cat-javascript">
                            <a href="#">javascript</a>
                        </div>
                        <a href="#" class="post__title">
                            <h2>Trip that you'll never ever forget</h2>
                        </a>
                        <hr>
                        <div class="post__footer">
                            <span class="post__date">17 nov 2020</span>
                            <div class="title__card">
                                18 min
                                <span class="separating">|</span>
                                Par Dywants
                            </div>
                        </div>
                    </div>
                </article>
            </div>
            <div class="articles">
                <article class="blog__post">
                    <div class="blog__post-header">
                        <div class="post-thumbnail">
                            <img src="./images/Feature_image/blog1.png" alt="Post image">
                        </div>
                    </div>
                    <div class="post__info">
                        <div class="type__cat cat-html">
                            <a href="#">html</a>
                        </div>
                        <a href="#" class="post__title">
                            <h2>Trip that you'll never ever forget</h2>
                        </a>
                        <hr>
                        <div class="post__footer">
                            <span class="post__date">17 nov 2020</span>
                            <div class="title__card">
                                18 min
                                <span class="separating">|</span>
                                Par Dywants
                            </div>
                        </div>
                    </div>
                </article>
            </div>
            <div class="articles">
                <article class="blog__post">
                    <div class="blog__post-header">
                        <div class="post-thumbnail">
                            <img src="./images/Feature_image/blog1.png" alt="Post image">
                        </div>
                    </div>
                    <div class="post__info">
                        <div class="type__cat cat-php">
                            <a href="#">php</a>
                        </div>
                        <a href="#" class="post__title">
                            <h2>Trip that you'll never ever forget</h2>
                        </a>
                        <hr>
                        <div class="post__footer">
                            <span class="post__date">17 nov 2020</span>
                            <div class="title__card">
                                18 min
                                <span class="separating">|</span>
                                Par Dywants
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
        <div class="btn__article position position__negative">
            <a href="#">Voir plus</a>
            <i class="fas fa-arrow-right"></i>
        </div>
    </div>
    <div class="section-post section section__border m-set-home">
        <div class="header__section">
            <h2>Tutoriels</h2>
        </div>
        <div class="container">
            <div class="articles">
                <article class="blog__post">
                    <div class="blog__post-header">
                        <div class="post-thumbnail">
                            <img src="./images/Feature_image/blog1.png" alt="Post image">
                        </div>
                    </div>
                    <div class="post__info">
                        <div class="type__cat cat-javascript">
                            <a href="#">javascript</a>
                        </div>
                        <a href="#" class="post__title">
                            <h2>Trip that you'll never ever forget</h2>
                        </a>
                        <hr>
                        <div class="post__footer">
                            <span class="post__date">17 nov 2020</span>
                            <div class="title__card">
                                18 min
                                <span class="separating">|</span>
                                Par Dywants
                            </div>
                        </div>
                    </div>
                </article>
            </div>
            <div class="articles">
                <article class="blog__post">
                    <div class="blog__post-header">
                        <div class="post-thumbnail">
                            <img src="./images/Feature_image/blog1.png" alt="Post image">
                        </div>
                    </div>
                    <div class="post__info">
                        <div class="type__cat cat-html">
                            <a href="#">html</a>
                        </div>
                        <a href="#" class="post__title">
                            <h2>Trip that you'll never ever forget</h2>
                        </a>
                        <hr>
                        <div class="post__footer">
                            <span class="post__date">17 nov 2020</span>
                            <div class="title__card">
                                18 min
                                <span class="separating">|</span>
                                Par Dywants
                            </div>
                        </div>
                    </div>
                </article>
            </div>
            <div class="articles">
                <article class="blog__post">
                    <div class="blog__post-header">
                        <div class="post-thumbnail">
                            <img src="./images/Feature_image/blog1.png" alt="Post image">
                        </div>
                    </div>
                    <div class="post__info">
                        <div class="type__cat cat-php">
                            <a href="#">php</a>
                        </div>
                        <a href="#" class="post__title">
                            <h2>Trip that you'll never ever forget</h2>
                        </a>
                        <hr>
                        <div class="post__footer">
                            <span class="post__date">17 nov 2020</span>
                            <div class="title__card">
                                18 min
                                <span class="separating">|</span>
                                Par Dywants
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
        <div class="btn__article position">
            <a href="{{ route('website.posts') }}">Voir plus</a>
            <i class="fas fa-arrow-right"></i>
        </div>
    </div>
@endsection
