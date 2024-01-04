@props(['name', 'label'])

<div class="form-group">
   <div class="form-group">
       <label for="{{ $id ?? null }}" class="form-label">{{ __($label) }}</label> <!-- Tradução para o label -->
   </div>
    <input
        type="text"
        id="{{ $id ?? null }}"
        name="{{ $name }}"
        {{ $attributes->merge(['class' => 'form-control datepicker'])->class([$errors->has($name) ? 'is-invalid' : '']) }}
    >
    @error($name)
    <div class="invalid-feedback">{{ __($message) }}</div> <!-- Tradução para a mensagem de erro -->
    @enderror
</div>

