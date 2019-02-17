let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 */

mix.sass('src/sass/core.scss', 'assets/css')
  .js('src/js/core.js', 'assets/js');
