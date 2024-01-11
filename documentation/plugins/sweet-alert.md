# Sweet Alert

O uso de alertas e envio de alertas deverá ser enviado através do Controller.

há duas maneiras de fazer o uso dos alertas, via evento disparado, que poderá ser usado via livewire, ou diretamente no controller ou em alguma view blade. Os exemplo abaixo mostram como chamar ele através do código PHP;

A documentação completa, pode ser feita vista em:
[https://github.com/realrashid/sweet-alert/blob/master/docs/README.md](https://github.com/realrashid/sweet-alert/blob/master/docs/README.md)

### **Success Alert**

```php
alert()->success('SuccessAlert','Lorem ipsum dolor sit amet.');
```

### **Info Alert**

```php
alert()->info('InfoAlert','Lorem ipsum dolor sit amet.');
```

### **Warning Alert**

```php
alert()->warning('InfoAlert','Lorem ipsum dolor sit amet.');
```

### **Error Alert**

```php
alert()->error('ErrorAlert','Lorem ipsum dolor sit amet.');
```

### **Question Alert**

```php
alert()->question('ErrorAlert','Lorem ipsum dolor sit amet.');
```

### Image **Alert**

```php
alert()->image('Image Title!','Image Description','Image URL','Image Width','Image Height','Image Alt');
```

### Image **Alert**

```php
alert()->image('Image Title!','Image Description','Image URL','Image Width','Image Height','Image Alt');
```

### HTML Alert

```php
alert()->html('<i>HTML</i> <u>example</u>',"
  You can use <b>bold text</b>,
  <a href='//github.com'>links</a>
  and other HTML tags
",'success');
```

### HTML Alert

```php
alert()->html('<i>HTML</i> <u>example</u>',"
  You can use <b>bold text</b>,
  <a href='//github.com'>links</a>
  and other HTML tags
",'success');
```
