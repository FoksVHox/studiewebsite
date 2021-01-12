const mix = require('laravel-mix');
require('mix-tailwindcss');

mix.sass('css/app.scss', 'css/style.css')
    .tailwind('./tailwind.config.js')