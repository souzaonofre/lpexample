"use strict";

var apikeys = {
   app_key: "AwaUJMrbSnF1NYEvb36EhEM5wJkWK74E",
   app_secret: "vZYEVRL0hVPwOACtafW98FS1d0fJPZHttK7GM6hoTrg98tL2"
};

/* NEW FILE */

'use strict';

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
            $('#collapseOne').collapse('hide');
            $('#collapseTwo').collapse('show');
            fEndereco.val(fEndereco.val() + ', ');
            fEndereco.attr('title', "Digite aqui o numero do endereco");
            fEndereco.focus();
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
    //
    if (apikeys) {
        //
        correios.init(apikeys.app_key, apikeys.app_secret);
        $('#cep').correios('#endereco', '#bairro', '#cidade', '#uf', '#loading');
        //
    }
    //
    //
});

//# sourceMappingURL=app.js.map