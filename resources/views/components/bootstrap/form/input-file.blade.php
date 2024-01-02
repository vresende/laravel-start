@props(['id', 'name', 'label'])
<div class="form-group">
    <label for="{{ $id }}" class="form-label">{{ __($label) }}</label> <!-- Tradução para o label -->
    <div class="input-group-prepend">
        <input
            type="file"
            name="{{ $name }}"
            id="{{ $id }}"
            {{ $attributes->merge(['class' => 'form-control'])->class([$errors->has($name) ? 'is-invalid' : '']) }}
        >
        @error($name)
        <div class="invalid-feedback">{{ __($message) }}</div> <!-- Tradução para a mensagem de erro -->
        @enderror
    </div>

</div>
