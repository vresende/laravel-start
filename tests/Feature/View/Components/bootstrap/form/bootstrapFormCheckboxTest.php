<?php

use Illuminate\Support\Facades\View;
use Illuminate\Support\ViewErrorBag;

beforeEach(function () {
    // Simula a variável global $errors
    View::share('errors', new ViewErrorBag());
});
it('renders checkbox component', function () {
    $view = $this->blade(
        '
<x-bootstrap.form.checkbox
    id="test_checkbox_id"
    name="test_checkbox"
    label="Marque o checkbox"
    :options="[\'1\' => \'Opção 1\', \'2\' => \'Opção 2\']" />'
    );

    $view->assertSee('Marque o checkbox', false)
        ->assertSee('name="test_checkbox[]"', false)
        ->assertSee('id="test_checkbox_id-1"', false)
        ->assertSee('id="test_checkbox_id-2"', false)
        ->assertSee('Opção 1', false)
        ->assertSee('Opção 2', false)
        ->assertSee('value="1"', false);
});
