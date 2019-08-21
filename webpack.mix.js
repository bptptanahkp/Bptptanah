const mix = require('laravel-mix');

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
    .sass('resources/assets/sass/app.scss', 'public/css');  
   


	mix.styles([
    	'resources/assets/sweetalert/css/app.css',
    	'resources/assets/sweetalert/css/guide.css',
    	'resources/assets/sweetalert/css/header.css',
    	'resources/assets/sweetalert/css/highlight.css',
    	'resources/assets/sweetalert/css/index.css',
    	'resources/assets/sweetalert/css/normalize.css',
    	'resources/assets/sweetalert/css/table.css',
    	'resources/assets/sweetalert/css/variables.css'

    	],'public/css/sweet.css');

    mix.scripts([

        'resources/assets/sweetalert/js/add-preview-buttons.js',
        'resources/assets/sweetalert/js/index.js',
        'resources/assets/sweetalert/js/landing-text-rotater.js',
        'resources/assets/sweetalert/sweetalert.min.js'

    ],'public/js/sweet.js'); 

    
     