<?php

use Illuminate\Support\Facades\View;
use Illuminate\Support\ViewErrorBag;

beforeEach(function () {
    // Simula a variável global $errors
    View::share('errors', new ViewErrorBag());
});
it('renders select component', function () {
    $view = $this->blade(
        '
<x-bootstrap.form.select
    id="test_select_id"
    name="test_select"
    label="Selecione"
    :options="[\'1\' => \'Opção 1\', \'2\' => \'Opção 2\']" />'
    );

    $view->assertSee('Selecione', false)
        ->assertSee('name="test_select"', false)
        ->assertSee('id="test_select_id"', false)
        ->assertSee('Opção 1', false)
        ->assertSee('Opção 2', false)
        ->assertSee('value="1"', false);
});
