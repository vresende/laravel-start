<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>

    <!-- Styles -->

    @vite(['resources/scss/app.scss', 'resources/js/app.js'])

</head>
<body class="antialiased">
<div class="container mt-6">
    <div class="row">
        <div class="col-md-6 mb-3">
            @php($accordionItems = [
                ['title' => 'Accordion Item #1', 'content' => 'This is the first item\'s accordion body...'],
                ['title' => 'Accordion Item #2', 'content' => 'This is the second item\'s accordion body...'],
                ])
            <x-bootstrap.component.accordion id="accordion" :items="$accordionItems"/>

        </div>
        <div class="col-md-6 mb-3">
            <x-bootstrap.component.alert-info :items="$accordionItems" id="test" label="Test Label" name="test">
                Mensagem de alerta
            </x-bootstrap.component.alert-info>
        </div>
        <div class="col-md-6 mb-3">
            <x-bootstrap.component.alert-success :items="$accordionItems" id="test" label="Test Label" name="test">
                Mensagem de alerta
            </x-bootstrap.component.alert-success>
        </div>
        <div class="col-md-6 mb-3">
            <x-bootstrap.form.input-datepicker data-date-format="Y-m-d" data-enable-time="true" name="name" label="Data 22" />
        </div>
        <div class="col-md-6 mb-3">
            texto com
            <x-bootstrap.component.badge bgcolor="bg-danger"> badge</x-bootstrap.component.badge>
            adicione apenas a classe de bg

            <button type="button" class="btn btn-primary position-relative">
                Inbox
                <x-bootstrap.component.badge-top bgcolor="bg-danger"> badge</x-bootstrap.component.badge-top>
            </button>
        </div>

        <div class="col-md-6 mb-3">
            <x-bootstrap.component.button-modal target="#idmodal">
                Modal
            </x-bootstrap.component.button-modal>

            <br><br>## Variações do botão<br>
            <x-bootstrap.component.button-modal target="#idmodal" type="link" buttonClass="btn-link">
                Modal
            </x-bootstrap.component.button-modal>

            <x-bootstrap.component.button-modal target="#idmodal" type="button" buttonClass="btn btn-success">
                Modal
            </x-bootstrap.component.button-modal>
            <br><br>
            <x-bootstrap.component.modal id="idmodal" title="Título do Modal" center="true">
                <p>Este é o conteúdo do modal.</p>
                @slot('footer')
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
                    <button type="button" class="btn btn-success">Salvar</button>
                @endslot
            </x-bootstrap.component.modal>
        </div>
    </div>
</div>
@include('sweetalert::alert')
</body>
</html>
