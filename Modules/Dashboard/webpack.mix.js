const { mix } = require('laravel-mix');
require('laravel-mix-merge-manifest');

mix.setPublicPath('../../public').mergeManifest();

mix.js(__dirname + '/Resources/assets/js/app.js', 'js/dashboard.js')
    .sass( __dirname + '/Resources/assets/sass/app.scss', 'css/dashboard.css')
    .extract(['jquery', 'vue', 'lodash', 'bootstrap', 'axios']);

if (mix.inProduction()) {
    mix.version();
}