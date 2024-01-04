@props(['id', 'title', 'center' => false])

<div {{ $attributes->merge(['class' => 'modal fade']) }} id="{{ $id }}" tabindex="-1" aria-labelledby="label{{ $id }}" aria-hidden="true">
    <div class="modal-dialog @if($center) modal-dialog-centered @endif">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="label{{ $id }}">{{ $title }}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                {{ $slot }}
            </div>
            @isset($footer)
                <div class="modal-footer">
                    {{ $footer }}
                </div>
            @endisset
        </div>
    </div>
</div>
