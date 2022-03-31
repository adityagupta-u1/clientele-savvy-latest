let mix = require('laravel-mix');
require('laravel-mix-polyfill');

mix.js('src/js/app.js', 'dist/js')
   .sass('src/css/_style.scss', 'dist/css')
   .polyfill({
      enabled: true,
      useBuiltIns: "usage",
      targets: "firefox 50, IE 11"
   });