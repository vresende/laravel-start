<?php

it('should be a instance of alerts-info', function () {

    $view = $this->blade(
        '<x-bootstrap.component.alert-info>
            Mensagem de alerta
            </x-bootstrap.component.alert-info>
'
    );

    $view->assertSee('alert-info', false)
        ->assertSee('Mensagem de alerta', false);
});

it('should be a instance of alerts-success', function () {

    $view = $this->blade(
        '<x-bootstrap.component.alert-success>
            Mensagem de alerta
            </x-bootstrap.component.alert-success>
'
    );

    $view->assertSee('alert-success', false)
        ->assertSee('Mensagem de alerta', false);
});

it('should be a instance of alerts-warning', function () {

    $view = $this->blade(
        '<x-bootstrap.component.alert-warning>
            Mensagem de alerta
            </x-bootstrap.component.alert-warning>
'
    );

    $view->assertSee('alert-warning', false)
        ->assertSee('Mensagem de alerta', false);
});

it('should be a instance of alerts-danger', function () {

    $view = $this->blade(
        '<x-bootstrap.component.alert-danger>
            Mensagem de alerta
            </x-bootstrap.component.alert-danger>
'
    );

    $view->assertSee('alert-danger', false)
        ->assertSee('Mensagem de alerta', false);
});

it('should be a instance of alerts-primary', function () {

    $view = $this->blade(
        '<x-bootstrap.component.alert-primary>
            Mensagem de alerta
            </x-bootstrap.component.alert-primary>
'
    );

    $view->assertSee('alert-primary', false)
        ->assertSee('Mensagem de alerta', false);
});

it('should be a instance of alerts-secondary', function () {

    $view = $this->blade(
        '<x-bootstrap.component.alert-secondary>
            Mensagem de alerta
            </x-bootstrap.component.alert-secondary>
'
    );

    $view->assertSee('alert-secondary', false)
        ->assertSee('Mensagem de alerta', false);
});
