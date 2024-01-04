<?php

it('should be a instance of badge', function () {

    $view = $this->blade('<x-bootstrap.component.badge class="bg-danger"> Texto </x-bootstrap.component.badge>');

    $view->assertSee('badge', false)
        ->assertSee("bg-danger", false)
        ->assertSee('Texto', false);
});

it('should be a instance of badge-top', function () {

    $view = $this->blade('<x-bootstrap.component.badge-top bgcolor="bg-info"> Texto </x-bootstrap.component.badge-top>');

    $view->assertSee('badge', false)
        ->assertSee("bg-info", false)
        ->assertSee('Texto', false);
});
