<?php

use Illuminate\Support\Facades\View;
use Illuminate\Support\ViewErrorBag;

beforeEach(function () {
    // Simula a variável global $errors
    View::share('errors', new ViewErrorBag());
});
it('renders file input component', function () {
    $view = $this->blade('<x-bootstrap.form.input-file id="test" label="Test Label" name="test_file"/>');

    $view->assertSee('Test Label', false)
        ->assertSee('name="test_file"', false)
        ->assertSee('id="test"', false);
});
