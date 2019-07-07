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

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');  
     
    mix.styles([

        'resources/assets/assetsadmin2/fontawesome-free/css/all.min.css',
        'resources/assets/assetsadmin2/css/sb-admin-2.min.css',
        'resources/assets/css/libs/font-awesome.css'
 
    ], 'public/css/b-admin2.css');

    mix.scripts([

        'resources/assets/assetsadmin2/jquery/jquery.min.js',
        'resources/assets/assetsadmin2/bootstrap/js/bootstrap.bundle.min.js',
        'resources/assets/assetsadmin2/jquery-easing/jquery.easing.min.js',
        'resources/assets/assetsadmin2/js/sb-admin-2.min.js',
        'resources/assets/assetsadmin2/chart.js/Chart.min.js',
        'resources/assets/assetsadmin2/js/demo/chart-area-demo.js',
        'resources/assets/assetsadmin2/js/demo/chart-pie-demo.js'

    ], 'public/js/b-admin2.js');   
     