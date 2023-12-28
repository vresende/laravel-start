@props(['id', 'name', 'label', 'grid', 'required' => false])

<div class="{{ $grid }}">
    <label for="{{ $id }}" class="form-label">{{ $label }}</label>
    <input type="text" name="{{ $name }}" id="{{ $id }}"
        {{ $attributes->merge(['class' => 'form-control'])->class([$errors->has($name) ? 'is-invalid' : '']) }}
        {{ $required ? 'required' : '' }}>

    @error($name)
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
