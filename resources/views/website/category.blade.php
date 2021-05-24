@extends('layouts.master')
@section('bg-headercategory')
    @include('includes.bg-headercategory')
@endsection
@section('content')
    <div class="wrapper">
        <div class="container">
            @foreach($posts as $post)
                <div class="articles">
                    <div class="entry2">
                        <a href="{{ route('website.post', ['slug' => $post->slug]) }}"><img
                                src="@if($post->image ){{ $post->image }} @else {{ asset('images/background.jpg') }} @endif"
                                alt="Image" class="img-fluid rounded"></a>
                        <div class="excerpt">
                            <span class="post-category text-white bg-secondary mb-3">{{ $post->category->name }}</span>
                            <h2>
                                <a href="{{ route('website.post', ['slug' => $post->slug]) }}">{{ $post->title }}</a>
                            </h2>
                            <div class="post-meta align-items-center ">
                                <div class="meta-info">
                                    <div class="avatar__image mr-0"><img
                                            src="@if($post->user->image) {{ $post->user->image }} @else {{ asset
                                            ('images/profil_thibaut.png') }} @endif"
                                            alt="Image" class="avatar">
                                    </div>
                                    <span class="d-inline-block mt-1">Par: <a
                                            href="#">{{ $post->user->name }}</a>
                                        </span>
                                </div>
                                <span class="meta-date"> {{ $post->created_at->translatedFormat('l jS F Y') }} </span>
                            </div>
                            <p> {{ Str::limit($post->description, 100) }} </p>
                            <div class="btn__article font-s">
                                <a href="{{ route('website.post', ['slug' => $post->slug]) }}">Voir plus</a>
                                <i class="fas fa-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row text-center pt-5 border-top">
            {{ $posts->links() }}
        </div>
    </div>
@endsection
