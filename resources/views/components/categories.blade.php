

<div class="categories-section ">
<div class="categories-container">
    <div class="row flex-nowrap">
        @foreach($categories as $category)
        <div class="col-md-3 col-6 my-1 category-item">
            <a href="{{ route('category.show', $category->slug) }}">
                <div class="card shadow-sm">
                    <img src="{{ Voyager::image($category->image) }}" class="card-img-top" alt="{{ $category->name }}">
                    <div class="card-body text-center">
                        <h6 class="card-title text-secondary fw-bold">{{ $category->name }}</h6>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>

  </div>

  