const elixir = require('laravel-elixir');
require('laravel-elixir-postcss');

Elixir.config.sourcemaps = true;
Elixir.config.assetsPath = './resources/assets/';
Elixir.config.publicPath = './public/assets/';

var paths = {
    srcFront      : Elixir.config.assetsPath + 'front/',
    destFront     : Elixir.config.publicPath + 'front/',
    srcDashboard  : Elixir.config.assetsPath + 'dashboard/',
    destDashboard : Elixir.config.publicPath + 'dashboard/',
    node          : './node_modules/'
};

elixir((mix) => {
    // <START> Frontend Compilation
    processors = [
        require('precss'),
        require('postcss-assets')({
            baseUrl: 'public/',
            loadPaths: ['assets/front/img/'],
            relative: true,
            cachebuster: true
        }),
        require('autoprefixer')({
            browsers: ['last 2 version', 'safari 5', 'opera 12.1', 'ios 6', 'android 4']
        }),
        require('cssnano')({
            convertValues: {
                length: false
            },
            discardComments: {
                removeAll: true
            }
        }),
    ];

    mix.postcss('app.css', {
        srcDir  : paths.srcFront  + 'sass/',
        output  : paths.destFront + 'css/',
        plugins : processors
    });

    mix.scripts([
        paths.node + 'jquery/dist/jquery.min.js',
        paths.node + 'slick-carousel/slick/slick.js',
        paths.node + 'waypoints/lib/jquery.waypoints.min.js',
        paths.node + 'waypoints/src/shortcuts/inview.js',
        paths.node + 'intl-tel-input/build/js/intlTelInput.min.js',
        'components/*.js',
        'app.js',
    ],  paths.destFront  + 'js/app.min.js', paths.srcFront + 'js');
    // <END> Frontend Compilation

    mix.browserSync({
        proxy: 'tokenbox.tokenbox',
        port: 8000,
        files: ['public/**/*.css', 'public/**/*.js']
    });
});
