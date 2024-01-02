@props(['id', 'name', 'label'])

<div class="form-group">
    <label for="{{ $id }}" class="form-label">{{ __($label) }}</label>
    <input
        type="color"
        id="{{ $id }}"
        name="{{ $name }}"
        {{ $attributes->merge(['class' => 'form-control form-control-color'])->class([$errors->has($name) ? 'is-invalid' : '']) }}
    >
    @error($name)
    <div class="invalid-feedback">{{ __($message) }}</div>
    @enderror
</div>
