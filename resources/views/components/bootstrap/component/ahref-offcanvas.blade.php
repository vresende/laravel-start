@props([
'id',
'target',
])

<a  data-bs-toggle="offcanvas" href="{{ $target }}" role="button" aria-controls="{{ $id }}" {{ $attributes }}>
    {{ $slot }}
</a>
