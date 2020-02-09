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
    'resources/css/admin/style.css',
    'resources/css/admin/shared.css',
    'resources/css/admin/materialdesignicons.min.css'
], 'public/css/all.css');

mix.scripts([
    'resources/js/admin/apexcharts.min.js',
    'resources/js/admin/Chart.min.js',
    'resources/js/admin/chartjs.addon.js',
    'resources/js/admin/core.js',
    'resources/js/admin/dashboard.js',
    'resources/js/admin/template.js'
], 'public/js/all.js');
