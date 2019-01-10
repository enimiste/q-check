const {mix} = require('laravel-mix');
require('laravel-mix-merge-manifest');

mix.setPublicPath('../../public').mergeManifest();

mix.js(__dirname + '/Resources/assets/js/app.js', 'js/agentcontrole.js')
    .sass(__dirname + '/Resources/assets/sass/app.scss', 'css/agentcontrole.css')
    .extract(['jquery', 'vue', 'lodash', 'bootstrap', 'axios']);

if (mix.inProduction()) {
    mix.version();
}