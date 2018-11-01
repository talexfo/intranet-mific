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

mix.styles([
    'resources/assets/plantilla/css/bootstrap.min.css',
], 'public/css/all.css')
.scripts([
    'resources/assets/plantilla/js/bootstrap.min.js'
], 'public/js/all.js');
