@props(['image', 'title'])

<article {{ $attributes->merge(['class' => 'card mb-3']) }}>
    <div class="row g-0">
        <div class="col-md-4">
            <img src="{{ $image }}" class="img-fluid rounded-start" alt="{{ $title }}" title="{{ $title }}">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <header>
                    <h5 class="card-title">{{ $title }}</h5>
                </header>
                <p class="card-text">{{ $slot }}</p>
            </div>
        </div>
    </div>
</article>
