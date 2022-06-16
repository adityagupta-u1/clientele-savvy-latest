let mix = require('laravel-mix');
require('laravel-mix-polyfill');
require('laravel-mix-purgecss');

mix.js('src/js/app.js', 'dist/js')
   .sass('src/css/style.scss', 'dist/css')
   .polyfill({
      enabled: true,
      useBuiltIns: "usage",
      targets: "firefox 50, IE 11"
   })
   .purgeCss({ enabled: true });