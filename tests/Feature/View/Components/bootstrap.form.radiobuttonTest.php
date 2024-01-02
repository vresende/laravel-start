<?php

use Illuminate\Support\Facades\View;
use Illuminate\Support\ViewErrorBag;

beforeEach(function () {
    // Simula a variável global $errors
    View::share('errors', new ViewErrorBag());
});
it('renders radio-button component', function () {
    $view = $this->blade(
        '
<x-bootstrap.form.radio-button
    id="test_radio_id"
    name="test_radio"
    label="Marque o radio"
    :options="[\'1\' => \'Opção 1\', \'2\' => \'Opção 2\']" />'
    );

    $view->assertSee('Marque o radio', false)
        ->assertSee('name="test_radio[]"', false)
        ->assertSee('id="test_radio_id-1"', false)
        ->assertSee('id="test_radio_id-2"', false)
        ->assertSee('Opção 1', false)
        ->assertSee('Opção 2', false)
        ->assertSee('value="1"', false);
});
