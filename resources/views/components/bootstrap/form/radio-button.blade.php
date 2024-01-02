@props(['id', 'name', 'label', 'options','grid' => 'col-md-6','inline' => false])
@php $key = 1; @endphp
<div class="{{ $grid }}">
    <div class="form-group">
        <label for="{{ $id }}" class="form-label">{{ __($label) }}</label>
    </div>
    @foreach($options as $optionValue => $optionLabel)
        <div class="@if($inline) form-check-inline @else form-check @endif">
            <input
                {{ $attributes->merge(['class' => 'form-check-input'])->class([$errors->has($name) ? 'is-invalid' : '']) }}
                type="radio"
                value="{{ $optionValue }}"
                name="{{ $name }}[]"
                id="{{ $id }}-{{$key++}}">
            <label class="form-check-label" for="{{ $id }}-{{$key}}">
                {{ __($optionLabel)}}
            </label>
        </div>
    @endforeach

        @error($name)
        <div class="invalid-feedback">{{ __($message) }}</div> <!-- Tradução para a mensagem de erro -->
        @enderror
</div>
