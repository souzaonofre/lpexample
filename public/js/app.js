
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
    var fNome = $("#nome");
    var fEmail = $("#email");
    var fDataNasc = $("#data-nascimento");
    var fCelular = $("#celular");
    var fCep = $("#cep");
    //
    var fEndereco = $("#endereco");
    var fBairro = $("#bairro");
    var fCidade = $("#cidade");
    var fUf = $("#uf");
    //
    // Field Nome
    //
    // Focus function
    fNome.focus();
    //
    // on Blur event handlers
    // Nome
    fNome.on('blur', function() {
        if (this.value !== '' && this.value !== null) {
            $(this.parentElement).removeClass('has-error');
            $("#nome-error").addClass('hidden');
        }
    });
    // Email
    fEmail.on('blur', function() {
        if (this.value !== '' && this.value !== null) {
            $(this.parentElement).removeClass('has-error');
            $("#email-error").addClass('hidden');
        }
    });
    // Celular
    fCelular.on('blur', function() {
        if (this.value !== '' && this.value !== null) {
            $(this.parentElement).removeClass('has-error');
            $("#celular-error").addClass('hidden');
        }
    });
    // on Blur event
    fDataNasc.on('blur', function() {
        if (this.value !== '' && this.value !== null) {
            $(this.parentElement).removeClass('has-error');
            $("#data-nasc-error").addClass('hidden');
        }
    });
    // on Blur event
    fCep.on('blur', function() {
        if (this.value !== '' && this.value !== null) {
            $(this.parentElement).removeClass('has-error');
            $("#cep-error").addClass('hidden');
        }
    });



    //
    // Datepicker
    //
    fDataNasc.datepicker({
        format: 'dd/mm/yyyy',
        language: 'pt-BR',
        startView: 2,
        autoclose: true
    });
    //
    // InpuMask functions
    //
    // Celular
    fCelular.inputmask({
        "greedy": false,
        "clearMaskOnLostFocus": true,
        "clearIncomplete": true,
        "autoUnmask": true,
        "mask": "(99) 99999-9999"
    });
    // CEP
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