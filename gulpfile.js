var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix)
{
     mix .sass('app.scss', 'resources/assets/css/app.scss.output')
         .styles ('resources/assets/css/app.scss.output', 'public/css/all.css')
         .scripts
        ([
            '../../../node_modules/jquery/dist/jquery.js',
            '../../../node_modules/bootstrap-sass/assets/javascripts/bootstrap.js',
            '../../../node_modules/vue/dist/vue.js',
            '../../../node_modules/vue-resource/dist/vue-resource.js'
        ], 'public/js/app.js')
         .copy('node_modules/font-awesome/fonts', 'public/fonts')
         .version(['css/all.css', 'js/app.js']);
});