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

    // Configuración principal
    mix.options({
        processCssUrls: false,
        postCss: [require('autoprefixer')]
    });

    // Compilación de CSS FRONT
    mix.styles([
        "resources/assets/css/bootstrap.min.css",
        "resources/assets/css/elegant-icons.css",
        "resources/assets/css/flaticon.css",
        "resources/assets/css/font-awesome.min.css",
        "resources/assets/css/magnific-popup.css",
        "resources/assets/css/owl.carousel.min.css",
        "resources/assets/css/slicknav.min.css",
        "resources/assets/css/style.css"
    ], "public/css/vendor.css")  // Cambiado a vendor.css para separar estilos
    .sass('resources/sass/app.scss', 'public/css/app.css');

    // Compilación de JavaScript
    mix.scripts([
        "resources/assets/js/jquery-3.3.1.min.js",
        "resources/assets/js/bootstrap.min.js",
        "resources/assets/js/jquery.magnific-popup.min.js",
        "resources/assets/js/mixitup.min.js",
        "resources/assets/js/masonry.pkgd.min.js",
        "resources/assets/js/jquery.slicknav.js",
        "resources/assets/js/owl.carousel.min.js",
        "resources/assets/js/main.js"
    ], "public/js/vendor.js")  // Cambiado a vendor.js para separar scripts
    .js('resources/js/app.js', 'public/js/app.js');

    // Copiar assets estáticos
    mix.copy("resources/assets/fonts", "public/fonts")
    .copy("resources/assets/img", "public/img")
    .copy("resources/assets2", "public");







    // Configuración de jQuery
    mix.autoload({
        jquery: ['$', 'window.jQuery', 'jQuery']
    });

    // BrowserSync (usar solo una instancia)
    mix.browserSync({
        proxy: '127.0.0.1',
        open: false
    });

    // Configuración para entornos
    if (!mix.inProduction()) {
        mix.sourceMaps();
    } else {
        mix.version();
    }
