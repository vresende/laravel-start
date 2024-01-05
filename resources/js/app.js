import './bootstrap';
import '~bootstrap';
import Choices from "choices.js";

document.addEventListener('DOMContentLoaded', function () {
    var elements = document.querySelectorAll('.js-choice');
    if (elements.length > 0) {
        elements.forEach(function (element) {
            new Choices(element, {
                loadingText: 'Carregando...',
                noResultsText: 'Nenhum resultado encontrado',
                noChoicesText: 'Não há opções para escolher',
                itemSelectText: 'aperte "Enter" para selecionar',
                uniqueItemText: 'Apenas valores únicos podem ser adicionados',
                customAddItemText: 'Apenas valores que correspondem a condições específicas podem ser adicionados',
            });
        });
    }
});

import Flatpickr from "flatpickr";
import {Portuguese} from "flatpickr/dist/l10n/pt.js";

document.addEventListener('DOMContentLoaded', function () {
    var datePickers = document.querySelectorAll('.datepicker');
    datePickers.forEach(function (picker) {
        var config = {};
        var attrs = picker.attributes;
        for (var i = 0; i < attrs.length; i++) {
            if (attrs[i].name.startsWith('data-')) {
                var option = attrs[i].name.substring(5).replace(/-./g, function (x) {
                    return x[1].toUpperCase();
                });
                try {
                    console.log(option)
                    // Tentar converter a string JSON em um objeto JavaScript
                    config[option] = JSON.parse(attrs[i].value);
                } catch (e) {
                    // Se falhar, usar o valor como string
                    config[option] = attrs[i].value;
                }
            }
        }
        console.log(Portuguese)
        Flatpickr.defaultConfig = Object.assign(Flatpickr.defaultConfig, {
            locale: Portuguese,
            // dateFormat: "d/m/Y",
        });
        new Flatpickr('.datepicker', config); // Use 'new' para criar uma nova instância
    });
});


//TOAST

document.addEventListener('DOMContentLoaded', function() {
    window.addEventListener('toast', event => {
        Swal.fire({
            title: event.detail.title || 'Atenção',
            text: event.detail.text || '',
            icon: event.detail.icon || 'info',
            timer: event.detail.timer || 3000,
            toast: true,
            position: event.detail.position || 'top-end',
            showConfirmButton: false,
            timerProgressBar: true,
        });
    });
});



