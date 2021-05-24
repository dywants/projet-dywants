<header class="banner__article header-color tcenter header-overlay header-height"
        style="background-image: url({{ $post->image }});">
    <div class="inner">
        <div class="row__article">
            <h1 class="title title__article title">
               {{ $post->title }}
            </h1>
            <span class="category__article">
            <a class="category__article__link" href="#">{{ $post->category->name }}</a>
          </span>
        </div>
    </div>
</header>
