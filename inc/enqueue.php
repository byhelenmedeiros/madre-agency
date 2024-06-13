<?php
function madre_agency_enqueue_scripts() {
    // Enfileirar estilos
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/vendors/bootstrap/css/bootstrap.min.css', array(), '4.5.2');
    wp_enqueue_style('animate', get_template_directory_uri() . '/assets/vendors/animate/animate.min.css', array(), '1.0.0');
    wp_enqueue_style('custom-animate', get_template_directory_uri() . '/assets/vendors/animate/custom-animate.css', array(), '1.0.0');
    wp_enqueue_style('fontawesome', get_template_directory_uri() . '/assets/vendors/fontawesome/css/all.min.css', array(), '1.0.0');
    wp_enqueue_style('jarallax', get_template_directory_uri() . '/assets/vendors/jarallax/jarallax.css', array(), '1.0.0');
    wp_enqueue_style('magnific-popup', get_template_directory_uri() . '/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css', array(), '1.0.0');
    wp_enqueue_style('nouislider', get_template_directory_uri() . '/assets/vendors/nouislider/nouislider.min.css', array(), '1.0.0');
    wp_enqueue_style('nouislider-pips', get_template_directory_uri() . '/assets/vendors/nouislider/nouislider.pips.css', array(), '1.0.0');
    wp_enqueue_style('odometer', get_template_directory_uri() . '/assets/vendors/odometer/odometer.min.css', array(), '1.0.0');
    wp_enqueue_style('swiper', get_template_directory_uri() . '/assets/vendors/swiper/swiper.min.css', array(), '1.0.0');
    wp_enqueue_style('aspro-icons', get_template_directory_uri() . '/assets/vendors/aspro-icons/style.css', array(), '1.0.0');
    wp_enqueue_style('tiny-slider', get_template_directory_uri() . '/assets/vendors/tiny-slider/tiny-slider.min.css', array(), '1.0.0');
    wp_enqueue_style('reey-font', get_template_directory_uri() . '/assets/vendors/reey-font/stylesheet.css', array(), '1.0.0');
    wp_enqueue_style('alagambe-font', get_template_directory_uri() . '/assets/vendors/alagambe-font/stylesheet.css', array(), '1.0.0');
    wp_enqueue_style('owl-carousel', get_template_directory_uri() . '/assets/vendors/owl-carousel/owl.carousel.min.css', array(), '1.0.0');
    wp_enqueue_style('owl-carousel-default', get_template_directory_uri() . '/assets/vendors/owl-carousel/owl.theme.default.min.css', array(), '1.0.0');
    wp_enqueue_style('bxslider', get_template_directory_uri() . '/assets/vendors/bxslider/jquery.bxslider.css', array(), '1.0.0');
    wp_enqueue_style('bootstrap-select', get_template_directory_uri() . '/assets/vendors/bootstrap-select/css/bootstrap-select.min.css', array(), '1.0.0');
    wp_enqueue_style('vegas', get_template_directory_uri() . '/assets/vendors/vegas/vegas.min.css', array(), '1.0.0');
    wp_enqueue_style('jquery-ui', get_template_directory_uri() . '/assets/vendors/jquery-ui/jquery-ui.css', array(), '1.0.0');
    wp_enqueue_style('timepicker', get_template_directory_uri() . '/assets/vendors/timepicker/timePicker.css', array(), '1.0.0');
    wp_enqueue_style('twentytwenty', get_template_directory_uri() . '/assets/vendors/twenty-twenty/twentytwenty.css', array(), '1.0.0');
    wp_enqueue_style('aspro', get_template_directory_uri() . '/assets/css/aspro.css', array(), '1.0.0');
    wp_enqueue_style('aspro-responsive', get_template_directory_uri() . '/assets/css/aspro-responsive.css', array(), '1.0.0');
    wp_enqueue_style('madre-agency-style', get_stylesheet_uri());

    // Enfileirar scripts
    wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/vendors/jquery/jquery-3.6.0.min.js', array(), '3.6.0', true);
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/vendors/bootstrap/js/bootstrap.bundle.min.js', array('jquery'), '4.5.2', true);
    wp_enqueue_script('lettering', get_template_directory_uri() . '/assets/vendors/lettering/jquery.lettering.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('circleType', get_template_directory_uri() . '/assets/vendors/circleType/jquery.circleType.js', array('jquery', 'lettering'), '1.0.0', true);
    wp_enqueue_script('jarallax', get_template_directory_uri() . '/assets/vendors/jarallax/jarallax.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('ajaxchimp', get_template_directory_uri() . '/assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('jquery-appear', get_template_directory_uri() . '/assets/vendors/jquery-appear/jquery.appear.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('circle-progress', get_template_directory_uri() . '/assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('magnific-popup', get_template_directory_uri() . '/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('validate', get_template_directory_uri() . '/assets/vendors/jquery-validate/jquery.validate.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('nouislider', get_template_directory_uri() . '/assets/vendors/nouislider/nouislider.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('odometer', get_template_directory_uri() . '/assets/vendors/odometer/odometer.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('swiper', get_template_directory_uri() . '/assets/vendors/swiper/swiper.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('tiny-slider', get_template_directory_uri() . '/assets/vendors/tiny-slider/tiny-slider.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('wnumb', get_template_directory_uri() . '/assets/vendors/wnumb/wNumb.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('wow', get_template_directory_uri() . '/assets/vendors/wow/wow.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('isotope', get_template_directory_uri() . '/assets/vendors/isotope/isotope.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('countdown', get_template_directory_uri() . '/assets/vendors/countdown/countdown.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('owl-carousel', get_template_directory_uri() . '/assets/vendors/owl-carousel/owl.carousel.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('bxslider', get_template_directory_uri() . '/assets/vendors/bxslider/jquery.bxslider.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('bootstrap-select', get_template_directory_uri() . '/assets/vendors/bootstrap-select/js/bootstrap-select.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('vegas', get_template_directory_uri() . '/assets/vendors/vegas/vegas.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('jquery-ui', get_template_directory_uri() . '/assets/vendors/jquery-ui/jquery-ui.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('timepicker', get_template_directory_uri() . '/assets/vendors/timepicker/timePicker.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('circleType', get_template_directory_uri() . '/assets/vendors/circleType/jquery.circleType.js', array('jquery', 'lettering'), '1.0.0', true);
    wp_enqueue_script('lettering', get_template_directory_uri() . '/assets/vendors/circleType/jquery.lettering.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('twentytwenty', get_template_directory_uri() . '/assets/vendors/twenty-twenty/twentytwenty.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('event-move', get_template_directory_uri() . '/assets/vendors/twenty-twenty/jquery.event.move.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('madre-agency-main', get_template_directory_uri() . '/assets/js/aspro.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'madre_agency_enqueue_scripts');
