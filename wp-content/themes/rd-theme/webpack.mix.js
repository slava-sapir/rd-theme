const mix = require('laravel-mix');
require('mix-tailwindcss');

// mix.autoload({
//     'jquery': ['$', 'window.jQuery', 'jQuery']
// });

mix.ts("resources/js/*.ts", "public/js/theme.js");
mix.sass("resources/sass/theme.scss", "public/css/theme.css")
    .tailwind();

mix.minify([
    "public/js/theme.js",
    "public/css/theme.css"
]);