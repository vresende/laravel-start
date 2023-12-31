@props(['id', 'title'])
<div class="offcanvas offcanvas-start" tabindex="-1" id="{{ $id }}" aria-labelledby="label{{ $id }}">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title">{{ $title }}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div>
            {{ $slot }}
        </div>
    </div>
</div>
