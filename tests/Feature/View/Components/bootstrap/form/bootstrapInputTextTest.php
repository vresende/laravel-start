<?php

use Illuminate\Support\Facades\View;
use Illuminate\Support\ViewErrorBag;

beforeEach(function () {
    // Simula a variável global $errors
    View::share('errors', new ViewErrorBag());
});

it('renders the text input component', closure: function () {

    $view = $this->blade('<x-bootstrap.form.input-text
        name="test"
        id="test-id"
        label="Test Label"
        value="Test Value"
        placeholder="Test Placeholder"
        required="true"
        />');

    $html = (string)$view; // Converte o resultado da view para string

    expect($html)->not->toBeEmpty()
        ->and($html)->toContain('id="test-id"', 'for="test-id"', 'value="Test Value"', )
        ->and($html)->toContain('required', 'Test Label', 'Test Placeholder');

});
