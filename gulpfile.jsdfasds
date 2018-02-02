var elixir = require('laravel-elixir');
require('laravel-elixir-livereload');
require('laravel-elixir-compress');


/*




*/

var production = elixir.config.production;
var basejs = [

];

elixir(function(mix) {
    mix


        // editor
        .scripts([
                'wp/wp-includes/js/jquery/jquery.js',
                'wp/wp-includes/js/jquery/jquery-migrate.min.js',
                'wp/wp-content/plugins/social-share-button/js/ssb-scripts.js',
                'wp/wp-content/plugins/social-share-button/js/jquery.tablednd.js',
                'wp/wp-content/plugins/social-share-button/ParaAdmin/js/ParaAdmin.js',
                'wp/wp-content/plugins/Layerslider/static/js/layerslider.kreaturamedia.jquery.js',
                'wp/wp-content/plugins/Layerslider/static/js/greensock.js',
                'wp/wp-content/plugins/Layerslider/static/js/layerslider.transitions.js',
                'wp/wp-content/plugins/carousel-horizontal-posts-content-slider/assets/js/caroufredsel/jquery.transit.min.js',
                'wp/wp-content/plugins/carousel-horizontal-posts-content-slider/assets/js/caroufredsel/jquery.carouFredSel-6.2.1-packed.js',
                'wp/wp-content/plugins/carousel-horizontal-posts-content-slider/assets/js/caroufredsel/jquery.touchSwipe.min.js',
                'wp/wp-content/plugins/carousel-horizontal-posts-content-slider/assets/js/script.js',
                'wp/wp-content/plugins/responsive-lightbox-lite/assets/nivo-lightbox/nivo-lightbox.min.js',
                'wp/wp-content/plugins/responsive-lightbox-lite/assets/inc/script.js',
                'wp/wp-content/plugins/meet-my-team/public/assets/js/public.min.js',
        ], 'public/assets/js/header_scripts.js')



        .styles([
            'wp/wp-content/themes/connect2ozweb/style.css',
            'wp/wp-content/themes/connect2ozweb/connect2ozweb-responsive.css',
            'wp/wp-content/themes/connect2ozweb/normalize.css',
            'wp/wp-content/themes/connect2ozweb/font-awesome-4.3.0/css/font-awesome.css',
            'wp/wp-content/themes/connect2ozweb/css/colorbox.css',
            'wp/wp-content/plugins/social-share-button/css/ssb-style.css',
            'wp/wp-content/plugins/social-share-button/css/ssb-admin.css',
            'wp/wp-content/plugins/social-share-button/ParaAdmin/css/ParaAdmin.css',
            'wp/wp-content/plugins/testimonials-widget/includes/libraries/bxslider-4/dist/jquery.bxslider.css',
            'wp/wp-content/plugins/testimonials-widget/assets/css/testimonials-widget.css',
            'wp/wp-content/plugins/Layerslider/static/css/layerslider.css',
            /*'https://fonts.googleapis.com/css?family=Lato:100,300,regular,700,900%7COpen+Sans:300%7CIndie+Flower:regular%7COswald:300,regular,700&#038;subset=latin',
            */'wp/wp-content/plugins/carousel-horizontal-posts-content-slider/assets/css/custom-style.css',
            'wp/wp-content/plugins/contact-form-7/includes/css/styles.css',
            'wp/wp-content/plugins/custom-facebook-feed/css/cff-style.css',
            /*'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css',*/
            'wp/wp-content/plugins/easy-author-image/css/easy-author-image.css',
            'wp/wp-content/plugins/jquery-validation-for-contact-form-7/css/jvcf7_validate.css',
            'wp/wp-content/plugins/responsive-lightbox-lite/assets/nivo-lightbox/nivo-lightbox.css',
            'wp/wp-content/plugins/responsive-lightbox-lite/assets/nivo-lightbox/themes/default/default.css',
            'wp/wp-content/plugins/wp-pagenavi/pagenavi-css.css',
            'wp/wp-content/plugins/meet-my-team/public/assets/css/public.min.css',
            /* '//fonts.googleapis.com/css?family=Source+Sans+Pro%3A300%2C400%2C700%2C300italic%2C400italic%2C700italic%7CBitter%3A400%2C700&#038;subset=latin%2Clatin-ext',
            */'wp/wp-content/themes/connect2ozweb/genericons/genericons.css',
            'wp/wp-content/themes/connect2ozweb/style.css',
        ], 'public/assets/css/header_style.css')

        .copy([
            'resources/assets/fonts/googlefont'
        ], 'public/build/assets/fonts/googlefont')





        .version([

            'assets/css/styles.css',
            'assets/js/scripts.js',


        ]);

    if (production) {
        mix.compress();
    }
});
