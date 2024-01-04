@props([
    'id',
    'target',
    'type' => 'button', // Default to 'button' type
    'buttonClass' => 'btn btn-primary' // Default button class
])

<button type="{{ $type }}" class="{{ $buttonClass }}" data-bs-toggle="offcanvas" data-bs-target="{{ $target }}" {{ $attributes }}>
    {{ $slot }}
</button>
