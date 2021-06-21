const mix = require("laravel-mix");

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
//  ,
//  "resources/assets/vendor/jquery/jquery.min.js",
//  "resources/assets/vendor/bootstrap/js/bootstrap.bundle.min.js",
//  "resources/assets/vendor/jquery.easing/jquery.easing.min.js",
//  "resources/assets/vendor/php-email-form/validate.js",
//  "resources/assets/vendor/waypoints/jquery.waypoints.min.js",
//  "resources/assets/vendor/counterup/jquery.counterup.min.js",
//  "resources/assets/vendor/owl.carousel/owl.carousel.min.js",
//  "resources/assets/vendor/typed.js/typed.min.js",
//  "resources/assets/vendor/venobox/venobox.min.js"
mix.js("resources/js/app.js", "public/js")
    .vue()
    .sass("resources/sass/app.scss", "public/css", {
        implementation: require("node-sass")
    });
mix.browserSync("http://127.0.0.1:8000/");

mix.webpackConfig({
    stats: {
        children: true
    }
});
