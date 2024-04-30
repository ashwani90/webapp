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
    .vue()
    .sass('resources/sass/app.scss', 'public/css')
    .css('resources/css/app.css', 'public/css')
    .css('resources/css/blog.css', 'public/css')
    .css('resources/css/custom.css', 'public/css')
    .css('resources/css/jkinda.css', 'public/css')
    .css('resources/css/main_comp.css', 'public/css')
    .css('resources/css/single-blog.css', 'public/css')
    .css('resources/css/remo.css', 'public/css')
    .css('resources/css/style.css', 'public/css')
    .css('resources/css/swiper.css', 'public/css')
    .css('resources/css/font-icons.min.css', 'public/css')
    ;
