<?php

it('should be a instance of link ahref offcanvas', function () {

    $view = $this->blade('<x-bootstrap.component.ahref-offcanvas target="#offcanvas" id="link"> OffCanvas </x-bootstrap.component.ahref-offcanvas>');

    $view->assertSee('data-bs-toggle="offcanvas"', false)
        ->assertSee('href="#offcanvas"', false);
});

it('should be a instance of button offcanvas', function () {

    $view = $this->blade('<x-bootstrap.component.button-offcanvas target="#offcanvas" id="button"> Button OffCanvas </x-bootstrap.component.button-offcanvas>');

    $view->assertSee('data-bs-toggle="offcanvas"', false)
        ->assertSee('Button OffCanvas', false)
        ->assertSee('data-bs-target="#offcanvas"', false);
});

it('should be a instance of offcanvas', function () {

    $view = $this->blade('<x-bootstrap.component.offcanvas title="Offcanvas Title" id="#offcanvas"> slot </x-bootstrap.component.badge-top>');

    $view->assertSee('id="#offcanvas"', false)
        ->assertSee('Offcanvas Title', false)
        ->assertSee("slot", false)
        ->assertSee('class="offcanvas-body"', false);
});
