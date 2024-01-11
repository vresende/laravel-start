<?php

use Illuminate\Support\Facades\View;
use Illuminate\Support\ViewErrorBag;

beforeEach(function () {
    // Simula a variável global $errors
    View::share('errors', new ViewErrorBag());
});

it('renders the input type email component', closure: function () {

    $view = $this->blade('<x-bootstrap.form.input-email
        name="email"
        id="email-id"
        label="email Label"
        value="email@email.com"
        placeholder="email Placeholder"
        required="true"
        />');

    $html = (string)$view; // Converte o resultado da view para string

    expect($html)->not->toBeEmpty()
        ->and($html)->toContain('id="email-id"', 'for="email-id"', 'value="email@email.com"', )
        ->and($html)->toContain('type="email"');

});
