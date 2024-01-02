# Componentes Blade

## Componentes de formulário

Os componentes de formulário são elementos do Blade que facilitam a criação e manipulação de formulários HTML. Com esses componentes, você pode criar campos de entrada, botões, caixas de seleção e muito mais de forma rápida e fácil.

### Input Text


```php
<div class="col-4">
	<x-bootstrap.form.input-text id="name" name="name" label="Nome" required="true" />
</div>
```

O código acima, irá gerar o html abaixo:

```php
<div class="col-4">
	<div class="form-group">
		<label for="name" class="form-label">Nome</label>
		<input type="text" id="name" class="form-control" required="true">
	</div>
</div>
```


Nos demais exemplos, iremos mostrar apenas como chamar o componente.

### Input-file

```php
<x-bootstrap.form.input-file id="file" name="file" label="Nome do Arquivo" />
```

### Input-color

```php

```

### Select-color

```php
<div class="col-4 mb-2">
  <x-bootstrap.form.select 
		id="select"
		name="select"
		label="Selecione"
    :options="['1' => 'Opção 1', '2' => 'Opção 2']"]
		/>
</div>
```

### Radio-button

```php
<div class="col-12 mb-2">
	<x-bootstrap.form.radio-button 
		id="radio"
		name="radio"
		label="radio"
	 :inline="true" //true = inline | false = block
   :options="['1' => 'Opção 1', '2' => 'Opção 2']"/>
</div>
```

### Checkbox

```php
<div class="col-12 mb-2">
	<x-bootstrap.form.radio-button 
		id="checkbox"
		name="checkbox"
		label="checkbox"
	 :inline="true" //true = inline | false = block
   :options="['1' => 'Opção 1', '2' => 'Opção 2']"/>
</div>

// ou

<x-bootstrap.form.radio-button 
		id="checkbox"
		grid="col-12 mb-2"
		name="checkbox"
		label="checkbox"
	 :inline="checkbox" //true = inline | false = block
   :options="['1' => 'Opção 1', '2' => 'Opção 2']"/>
```
