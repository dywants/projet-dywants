<div class="py-5 bg-light">
    <div class="wrapper">
        <div class="row">
            <div class="col-md-6">
                <span>Categorie</span>
                <h3>{{ $category->name }}</h3>
                @if($category->description)
                    <p>{{ $category->description }}</p>
                @endif
            </div>
        </div>
    </div>
</div>
