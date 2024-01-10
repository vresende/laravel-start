@props(['src', 'alt' => null, 'title' => null])
<div class="zoomist-container">
    <!-- zoomist-wrapper is required -->
    <div class="zoomist-wrapper">
        <!-- zoomist-image is required -->
        <div class="zoomist-image">
            <!-- you can add anything you want to zoom here. -->
            <img
                src="{{ $src }}"  alt="{{ $alt }}" title="{{ $title }}"
                {{ $attributes->merge(['class' => 'img-fluid img-cover']) }}
            />
        </div>
    </div>
</div>
