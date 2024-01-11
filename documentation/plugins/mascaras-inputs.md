# Máscaras em inputs

para aplicar máscaras basta usar uma das classes abaixo

```php
const masks = {
        'mask-phone': '(99) 99999-9999',
        'mask-cpf': '999.999.999-99',
        'mask-cnpj': '99.999.999/9999-99',
        'mask-rg': '99.999.999-9',
        'mask-creditcard': '9999 9999 9999 9999',
        'mask-date': '99/99/9999',
        'mask-ean': '9999 9999 9999 9',
        'mask-price-brl': {
            mask: 'currency',
            options: {
                radixPoint: ',',
                groupSeparator: '.',
                digits: 2,
                autoGroup: true,
                prefix: 'R$ ',
                rightAlign: false,
                removeMaskOnSubmit: true
            }
        },
        'mask-cep': '99999-999',
        'mask-pis': '999.99999.99-9',
        'mask-renavam': '99999999999', // Renavam é um número de 11 dígitos
        'mask-placa-mercosul': 'AAA9A99', // Padrão Mercosul
        'mask-placa': 'AAA-9999', // Padrão antigo brasileiro
        'mask-titulo-eleitor': '9999 9999 9999',
        'mask-processo-judicial': '9999999-99.9999.9.99.9999',
    };
```

    };
