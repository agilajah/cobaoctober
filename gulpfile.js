var elixir = require('laravel-elixir');
require('laravel-elixir-livereload');


elixir.config.assetsPath = "themes/taleus20/assets";
elixir.config.publicPath = "themes/taleus20/assets/compiled";


elixir(function(mix){
  mix.sass('style.scss ');

  mix.scripts([
    'jquery.js',
    'app.js'
  ]);


  mix.livereload([
    'themes/taleus20/assets/compiled/css/style.css',
    'themes/taleus20/**/*.htm',
    'themes/taleus20/assets/compiled/js/*.js'
  ])
})
