let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css')
   .sourceMaps();


//copying the font-awesome fonts
mix.copy('./node_modules/font-awesome/fonts', 'public/fonts');


/**
 * concatenating multiple modules styles into one vendor.css file
 */
mix.styles([
    'node_modules/font-awesome/css/font-awesome.css',
    'node_modules/bootstrap/dist/css/bootstrap.css',
    'node_modules/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css'
], 'public/css/vendor.css');

/**
 * concatenating multiple modules js into one vendor.js file
 */
mix.scripts([
        './node_modules/jquery/dist/jquery.min.js',
        './node_modules/bootstrap/dist/js/bootstrap.min.js',
        './node_modules/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js',
        './node_modules/bootstrap-datepicker/dist/locales/bootstrap-datepicker.pt-BR.min.js',
        './node_modules/inputmask/dist/jquery.inputmask.bundle.js'
    ], 'public/js/vendor.js');


//copying vendors js map files
mix.copy([
        './node_modules/jquery/dist/*.map',
        './node_modules/bootstrap/dist/js/*.map',
        './node_modules/bootstrap-datepicker/dist/js/*.map',

    ],'public/js');
