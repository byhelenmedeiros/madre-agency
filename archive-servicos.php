<?php
/*
Template Name: Services
*/
get_header();
?>

<!-- Page Wrapper -->
<div class="page-wrapper">

    <!-- Page Header Start -->
    <section class="page-header">
        <div class="page-header__bg" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/backgrounds/page-header-bg.jpg);">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <h2>Nossos serviços</h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="<?php echo home_url(); ?>">Início</a></li>
                    <li><span>/</span></li>
                    <li class="active">Serviços</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- Page Header End -->
  <!-- Services One Start -->
  <section class="services-one">
        <div class="container">
            <div class="row">
                <!-- Dynamic Service Items Start -->
                <?php
                $args = array(
                    'post_type' => 'servicos',
                    'posts_per_page' => 3,
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'servicos_category',
                            'field'    => 'slug',
                            'terms'    => array('web', 'marketing', 'design'),
                        ),
                    ),
                );
                $query = new WP_Query($args);

                if ($query->have_posts()) {
                    $delay = 100;
                    while ($query->have_posts()) {
                        $query->the_post();
                        $term_list = wp_get_post_terms(get_the_ID(), 'servicos_category', array("fields" => "slugs"));
                        $term_slug = !empty($term_list) ? $term_list[0] : '';
                        $service_image = get_the_post_thumbnail_url(get_the_ID(), 'full');
                        ?>
                        <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="<?php echo $delay; ?>ms">
                            <div class="services-one__single">
                                <div class="services-one__img-box">
                                    <div class="services-one__img">
                                        <img src="<?php echo $service_image ? $service_image : get_template_directory_uri() . '/assets/images/backgrounds/bg.png'; ?>" alt="<?php the_title(); ?>">
                                    </div>
                                    <div class="services-one__content">
                                        <h3 class="services-one__title"><a href="<?php echo home_url('' . $term_slug); ?>"><?php the_title(); ?></a></h3>
                                        <div class="services-one__icon">
                                            <span class="icon-layer"></span>
                                        </div>
                                    </div>
                                    <div class="services-one__hover-content">
                                        <h3 class="services-one__hover-title"><a href="<?php echo home_url('' . $term_slug); ?>"><?php the_title(); ?></a></h3>
                                        <p class="services-one__hover-text"><?php the_excerpt(); ?></p>
                                        <div class="services-one__hover-arrow">
                                            <a href="<?php echo home_url('' . $term_slug); ?>"><span class="icon-down-arrow"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                        $delay += 100;
                    }
                    wp_reset_postdata();
                } else {
                    echo '<p>No services found.</p>';
                }
                ?>
                <!-- Dynamic Service Items End -->
            </div>
        </div>
    </section>
    <!-- Services One End -->

    <!-- Services Three Start -->
    <section class="services-three">
        <div class="services-three__bg" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/backgrounds/services-three-bg.jpg);"></div>
        <div class="container">
            <div class="services-three__top">
                <div class="row">
                    <div class="col-xl-7 col-lg-6">
                        <div class="services-three__left">
                            <div class="section-title text-left">
                                <p class="section-title__tagline"><span>//</span> nossos serviços <span>//</span></p>
                                <h2 class="section-title__title">O que fazemos para a tua empresa</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6">
                        <div class="services-three__right">
                            <p class="services-three__text">Conheça nossos principais serviços nas áreas de Web, Marketing e Design, desenvolvidos para atender tuas necessidades com a melhor qualidade.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="services-three__bottom">
                <div class="row">
                    <!-- Dynamic Service Categories Start -->
                    <?php
                    $terms = get_terms(array(
                        'taxonomy' => 'servicos_category',
                        'slug' => array('web', 'marketing', 'design'),
                    ));

                    foreach ($terms as $term) {
                        $args = array(
                            'post_type' => 'servicos',
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'servicos_category',
                                    'field'    => 'slug',
                                    'terms'    => $term->slug,
                                ),
                            ),
                            'posts_per_page' => 7,
                        );
                        $query = new WP_Query($args);

                        if ($query->have_posts()) {
                            // Determine icon based on category
                            $icon_class = '';
                            if ($term->slug == 'web') {
                                $icon_class = 'fa fa-globe';
                            } elseif ($term->slug == 'marketing') {
                                $icon_class = 'fa fa-bullhorn';
                            } elseif ($term->slug == 'design') {
                                $icon_class = 'fa fa-paint-brush';
                            }
                            ?>
                            <div class="col-md-4">
                                <div class="services-three__single wow fadeInUp" data-wow-delay="100ms">
                                    <div class="services-three__single-inner">
                                        <div class="services-three__single-bg" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/backgrounds/bg.png);"></div>
                                        <div class="services-three__icon">
                                            <span class="<?php echo $icon_class; ?>"></span>
                                        </div>
                                        <h3 class="services-three__title"><?php echo esc_html($term->name); ?></h3>
                                        <div class="services-details__services-list">
                                            <ul class="services-details__services list-unstyled">
                                                <?php
                                                while ($query->have_posts()) {
                                                    $query->the_post();
                                                    $services = get_post_meta(get_the_ID(), '_services', true);
                                                    if (!empty($services)) {
                                                        foreach ($services as $service) {
                                                            echo '<li><a href="' . esc_url($service['link']) . '">' . esc_html($service['name']) . '<span class="fa fa-arrow-right"></span></a></li>';
                                                        }
                                                    } else {
                                                        echo '<li><a href="' . get_the_permalink() . '">' . get_the_title() . '<span class="fa fa-arrow-right"></span></a></li>'; // Fallback if no meta services found
                                                    }
                                                }
                                                ?>
                                            </ul>
                                        </div>
                                        <a href="<?php echo get_term_link($term); ?>" class="thm-btn product__all-btn">Ver mais serviços</a>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }

                        wp_reset_postdata();
                    }
                    ?>
                    <!-- Dynamic Service Categories End -->
                </div>
            </div>
        </div>
    </section>
    <!-- Services Three End -->

    <!-- CTA Two Start -->
<section class="cta-two">
    <div class="cta-two__bg" style="background-image: url(<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/backgrounds/bg.png);"></div>
    <div class="container">
        <div class="cta-two__inner">
            <div class="cta-two__title-box">
                <h3 class="smaller-font">Descobre como os nossos serviços podem transformar o teu 
                     <span>negócio.</span><a href="<?php echo esc_url(home_url('/servicos')); ?>"><i class="icon-right-arrow1"></i></a>
                </h3>
            </div>
            <div class="cta-two__btn">
                <a href="<?php echo esc_url(home_url('/contactar')); ?>">Fala com um especialista
                  </a>
            </div>
        </div>
    </div>
</section>
<!-- CTA Two End -->


</div>
<!-- Page Wrapper End -->

<?php get_footer(); ?>
