import './bootstrap';
import '~bootstrap';
import Choices from "choices.js";

//Carrega o select com as opções
const choices = new Choices('.js-choice',{
    loadingText: 'Carregando...',
    noResultsText: 'Nenhum resultado encontrado',
    noChoicesText: 'Não há opções para escolher',
    itemSelectText: 'aperte "Enter" para selecionar',
    uniqueItemText: 'Apenas valores únicos podem ser adicionados',
    customAddItemText: 'Apenas valores que correspondem a condições específicas podem ser adicionados',

});




