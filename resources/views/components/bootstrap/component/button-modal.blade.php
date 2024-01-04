@props([
    'id',
    'target',
    'type' => 'button',
    'buttonClass' => 'btn btn-primary'
])

<button type="{{ $type }}" class="{{ $buttonClass }}" data-bs-toggle="modal" data-bs-target="{{ $target }}" {{ $attributes }}>
    {{ $slot }}
</button>
