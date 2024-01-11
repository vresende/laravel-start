import './bootstrap';
import '~bootstrap';
import Choices from "choices.js";
import Swiper from "swiper/bundle";

window.Swiper = Swiper;
import AOS from 'aos';
import Flatpickr from "flatpickr";
import {Portuguese} from "flatpickr/dist/l10n/pt.js";
import Zoomist from "zoomist";
import Inputmask from 'inputmask';
document.addEventListener('DOMContentLoaded', function () {
    var elementChoices = document.querySelectorAll('.js-choice');
    if (elementChoices.length > 0) {
        elementChoices.forEach(function (element) {
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

// Datepicker
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
                    // Tentar converter a string JSON em um objeto JavaScript
                    config[option] = JSON.parse(attrs[i].value);
                } catch (e) {
                    // Se falhar, usar o valor como string
                    config[option] = attrs[i].value;
                }
            }
        }
        Flatpickr.defaultConfig = Object.assign(Flatpickr.defaultConfig, {
            locale: Portuguese,
            // dateFormat: "d/m/Y",
        });
        new Flatpickr('.datepicker', config); // Use 'new' para criar uma nova instância
    });

// Toast
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

// AOS - Animate elements html
    AOS.init();

    //zoomist
    var elementZooms = document.querySelectorAll('.zoomist-container');
    if (elementZooms.length > 0) {
        elementZooms.forEach(function (element) {
            new Zoomist(element, {
                maxScale: 4,
                bounds: true,
                // if you need slider
                slider: true,
                // if you need zoomer
                zoomer: true
            });
        });
    }

});


// Inputmask

document.addEventListener('DOMContentLoaded', () => {
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
    masks['mask-rg'] = '99.999.999-9';
    Inputmask.extendDefinitions({
        '9': {
            validator: "[0-9Xx]",
            casing: "upper" // Converte para maiúsculas
        }
    });
    function applyMask(el) {
        Inputmask.remove(el);
        Object.keys(masks).forEach(maskClass => {
            if (el.classList.contains(maskClass)) {
                Inputmask(masks[maskClass]).mask(el);
            }
        });
    }

    function updateMasks() {
        document.querySelectorAll('.mask-phone, .mask-cpf, .mask-rg, .mask-creditcard, .mask-date').forEach(el => {
            applyMask(el);
        });
    }

    // Aplica máscaras ao carregar a página
    updateMasks();

    // Observa mudanças no DOM e atualiza máscaras conforme necessário
    const observer = new MutationObserver(mutations => {
        mutations.forEach(mutation => {
            if (mutation.type === 'childList') {
                mutation.addedNodes.forEach(node => {
                    if (node.nodeType === 1) { // Element node
                        if (node.matches('.mask-phone, .mask-cpf, .mask-rg, .mask-creditcard, .mask-date')) {
                            applyMask(node);
                        }
                    }
                });
            }
            if (mutation.type === 'attributes' && mutation.attributeName === 'class') {
                applyMask(mutation.target);
            }
        });
    });

    observer.observe(document.body, { childList: true, subtree: true, attributes: true, attributeFilter: ['class'] });
});
