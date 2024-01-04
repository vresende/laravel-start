@props(['image', 'title'])
<article {{ $attributes->merge(['class' => 'card mb-3']) }}>
    <img src="{{ $image }}" class="card-img-top" alt="{{ $title }}">
    <div class="card-body">
        <header>
            <h5 class="card-title">{{ $title }}</h5>
        </header>
        <p class="card-text">{{ $slot }}</p>
    </div>
</article>
