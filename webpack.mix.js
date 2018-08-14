let mix = require('laravel-mix');
let ImageminPlugin = require( 'imagemin-webpack-plugin' ).default;


//Image Optimization
mix.webpackConfig( {
    plugins: [
        new ImageminPlugin( {
//            disable: process.env.NODE_ENV !== 'production', // Disable during development
            pngquant: {
                quality: '95-100',
            },
            test: /\.(jpe?g|png|gif|svg)$/i,
        } ),
    ],
} )

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
   .js('resources/assets/js/external_files/freelancer.js', 'public/js/external_js_files')
   .js('resources/assets/js/external_files/jquery.easing.js', 'public/js/external_js_files')
   .sass('resources/assets/sass/app.scss', 'public/css')
   .sass('resources/assets/sass/home.scss', 'public/css');

mix.copy( 'resources/assets/images', 'public/images', true );
