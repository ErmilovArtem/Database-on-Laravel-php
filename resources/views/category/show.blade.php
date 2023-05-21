<h1>{{ $category->title }}</h1>

@foreach ($banners as $banner)
    <div>
        <h3>{{ $banner->title }}</h3>
        <img src="{{ $banner->image }}" alt="{{ $banner->title }}">
    </div>
@endforeach
