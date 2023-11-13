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

mix.js('node_modules/jquery/dist/jquery.min.js', 'public/js')
    .js('node_modules/bootstrap/dist/js/bootstrap.min.js', 'public/js')
    .js('node_modules/bootstrap/dist/js/bootstrap.bundle.min.js', 'public/js')
    .css('node_modules/bootstrap/dist/css/bootstrap.min.css', 'public/css')
    .js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        //
    ]);
