const mix = require('laravel-mix');
const path = require('path');

// Configuración principal
mix.options({
    processCssUrls: false,
    postCss: [require('autoprefixer')],
    terser: {
        extractComments: false,
    }
});

// Configuración de alias para paths comunes
mix.webpackConfig({
    resolve: {
        alias: {
            '@': path.resolve('resources/js'),
            '~': path.resolve('resources')
        }
    }
});

// Compilación de CSS
mix.styles([
    "resources/assets/css/theme.css",
    "resources/assets/css/theme.min.css",
    "resources/assets/css/theme-rtl.css",
    "resources/assets/css/theme-rtl.min.css"
], "public/css/vendor.css")
.styles('resources/coreui-x/css/app.css', 'public/css/back-app.css')
.styles([
    "node_modules/toastr/build/toastr.min.css"
], "public/css/toastr.min.css")
.sass('resources/sass/app.scss', 'public/css/app.css');

// Compilación de JavaScript
mix.scripts([
    "resources/assets/js/bootstrap-navbar.js",
    "resources/assets/js/theme.js",
    "resources/assets/js/theme.min.js",
], "public/js/vendor.js")
.scripts([
    "resources/coreui-x/js/app.js",
    "resources/coreui-x/js/app2.js"
], "public/js/back-app.js")
.scripts([
    "node_modules/toastr/build/toastr.min.js"
], "public/js/toastr.min.js")
.js('resources/js/app.js', 'public/js/app.js')
.extract(['jquery', 'bootstrap', 'lazysizes']);

// Copiar assets estáticos
mix.copyDirectory("resources/assets/fonts", "public/fonts")
.copyDirectory("resources/assets/img", "public/img")
.copyDirectory("resources/coreui-x/svg", "public/icons/svg/free")
.copyDirectory("resources/assets2", "public")
.copyDirectory("node_modules/@coreui/icons/fonts", "public/fonts")
.copyDirectory("node_modules/@coreui/icons/svg/flag", "public/svg/flag")
.copyDirectory("node_modules/@coreui/icons/sprites/", "public/icons/sprites")
.copyDirectory("node_modules/@coreui/icons/svg/free/", "public/icons/svg/free");

// Configuración de jQuery
mix.autoload({
    jquery: ['$', 'window.jQuery', 'jQuery']
});

// Configuración para entornos
if (mix.inProduction()) {
    mix.version();
} else {
    mix.sourceMaps()
       .browserSync({
           proxy: '127.0.0.1',
           open: false,
           files: [
               'resources/views/**/*.php',
               'public/js/**/*.js',
               'public/css/**/*.css'
           ]
       });
}
