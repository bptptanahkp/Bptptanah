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

        'public/lib/bootstrap/css/bootstrap.min.css',
        'public/lib/font-awesome/css/font-awesome.min.css',
        'public/lib/animate/animate.min.css',
        'public/lib/ionicons/css/ionicons.min.css',
        'public/lib/owlcarousel/assets/owl.carousel.min.css',
        'public/lib/lightbox/css/lightbox.min.css',
        'public/lib/style.css'
        
        
    ], 'public/css/halamanuser.css');

    mix.scripts([

        'public/lib/jquery/jquery.min.js',
        'public/lib/jquery/jquery-migrate.min.js',
        'public/lib/bootstrap/js/bootstrap.bundle.min.js',
        'public/lib/easing/easing.min.js',
        'public/lib/superfish/hoverIntent.js',
        'public/lib/superfish/superfish.min.js',
        'public/lib/wow/wow.min.js',
        'public/lib/waypoints/waypoints.min.js',
        'public/lib/counterup/counterup.min.js',
        'public/lib/owlcarousel/owl.carousel.min.js',
        'public/lib/isotope/isotope.pkgd.min.js',
        'public/lib/lightbox/js/lightbox.min.js',
        'public/lib/touchSwipe/jquery.touchSwipe.min.js',
        'public/lib/contactform.js',
        'public/lib/main.js'

    ], 'public/js/halamanuser.js');   
     