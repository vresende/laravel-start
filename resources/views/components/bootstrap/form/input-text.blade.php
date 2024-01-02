@props(['id', 'name', 'label'])

<div class="form-group">
    <label for="{{ $id }}" class="form-label">{{ __($label) }}</label> <!-- Tradução para o label -->
    <input
        type="text"
        id="{{ $id }}"
        name="{{ $name }}"
        {{ $attributes->merge(['class' => 'form-control'])->class([$errors->has($name) ? 'is-invalid' : '']) }}
    >
    @error($name)
    <div class="invalid-feedback">{{ __($message) }}</div> <!-- Tradução para a mensagem de erro -->
    @enderror
</div>
