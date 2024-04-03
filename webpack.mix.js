const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js').js('resources/js/jquery.js', 'public/js').js('resources/js/carousel.js', 'public/js').js('resources/js/swiper.js', 'public/js')
    .postCss('resources/css/style.css', 'public/css', [
        //
    ]).postCss('resources/css/jkinda.css', 'public/css', [
        //
    ]).postCss('resources/css/remo.css', 'public/css', [
        //
    ])
    .postCss('resources/css/swiper.css', 'public/css', [
        //
    ]).postCss('resources/css/fontawesome-project/css/all.min.css', 'public/css', [
        //
    ]);
