@props(['id', 'name', 'label', 'options', 'selected' => null])
<div class="form-group">
    <label for="{{ $id }}" class="form-label">{{ __($label) }}</label> <!-- Tradução para o label -->

    <select
        {{ $attributes->merge(['class' => 'form-select js-choice'])->class([$errors->has($name) ? 'is-invalid' : '']) }}
        name="{{ $name }}"
        id="{{ $id }}"
        aria-label="{{ __('validations.select') }}"
        data-live-search="true">
        @foreach($options as $optionValue => $optionLabel)
            <option value="{{ $optionValue }}" {{ $selected == $optionValue ? 'selected' : '' }}>{{ $optionLabel }}</option>
        @endforeach
    </select>
    @error($name)
    <div class="invalid-feedback d-block choices-{{$name}}">{{ __($message) }}</div> <!-- Tradução para a mensagem de erro -->
    @enderror
</div>


