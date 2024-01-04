@props(['bgcolor' => 'bg-danger'])
<span {{ $attributes->merge(['class' => "badge  {$bgcolor}"]) }}>
    {{ $slot }}
</span>
