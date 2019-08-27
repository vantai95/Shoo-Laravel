const {mix} = require('laravel-mix');

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

mix.setResourceRoot('../')
    .js(['resources/assets/js/vendor.js'], 'public/js')
    .sass('resources/assets/sass/admin.scss', 'public/css')
    .sass('resources/assets/sass/user.scss', 'public/css')
    .sass('resources/assets/sass/user_styles.scss', 'public/css')
    .scripts(['resources/assets/js/mmConversionTagV4.js'], 'public/js/mmConversionTagV4.js')
    .scripts(['resources/assets/js/admin.js'], 'public/js/admin.js')
    .scripts(['resources/assets/js/user.js'], 'public/js/user.js');
