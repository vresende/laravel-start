<?php

use Illuminate\Support\Facades\View;
use Illuminate\Support\ViewErrorBag;

beforeEach(function () {
    // Simula a variável global $errors
    View::share('errors', new ViewErrorBag());
});
it('renders input color component', function () {
    $view = $this->blade('<x-bootstrap.form.input-color id="test_id_color" label="Test Label Color" name="test_input_color"/>');

    $view->assertSee('Test Label Color', false)
        ->assertSee('name="test_input_color"', false)
        ->assertSee('id="test_id_color"', false)
        ->assertSee('type="color"', false);
});
