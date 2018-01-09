
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

//require('./bootstrap');

//window.Vue = require('vue');

//import VeeValidate from 'vee-validate';
//Vue.use(VeeValidate);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

//Vue.component('FormFieldCompenent', require('./components/FormFieldCompenent.vue'));

//const app = new Vue({
    //el: '#app',
//});

//var Inputmask = require('inputmask');

$(document).ready(function(){
    //
    var fDataNasc = $("#data-nascimento");
    var fCelular = $("#celular");
    var fCep = $("#cep");
    //
    // Field Data Nascimento
    //
    // Datepicker function
    fDataNasc.datepicker({
        format: 'dd/mm/yyyy',
        language: 'pt-BR',
        startView: 2,
        autoclose: true
    });
    //
    // Field Celular functions
    //
    // Mask function
    fCelular.inputmask({
        "greedy": false,
        "clearMaskOnLostFocus": true,
        "clearIncomplete": true,
        "autoUnmask": true,
        "mask": "(99) 99999-9999"
    });
    //
    // Field CEP
    //
    // Mask function
    fCep.inputmask({
        "greedy": false,
        "clearMaskOnLostFocus": true,
        "clearIncomplete": true,
        "autoUnmask": true,
        "mask": "99999-999"
    });
    //
});

//# sourceMappingURL=app.js.map