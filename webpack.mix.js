let mix = require('laravel-mix');

mix.js('resources/js/app.js', 'dist/');
mix.sass('resources/sass/app.sass', 'dist/', {
    implementation: require('node-sass') 
});

// mix.sass('resources/sass/app.sass', 'public/css', {
//     implementation: require('node-sass')
// });