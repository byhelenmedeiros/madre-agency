<?php
/**
 * Template Name: Homepage
 *
 * The template for displaying the homepage
 *
 * @package Madre_Agency
 */

get_header();
?>


    <?php get_template_part('template-parts/hero'); ?>


    <?php get_template_part('components/wordslider'); ?>
    <?php get_template_part('components/services'); ?>
    
<!--About Three Start-->
<section class="about-three bg-light">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-12">
                <div class="about-three__left">
                    <div class="about-three__img-box">
                        <div class="about-three__img">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/resources/equipa-madreagency.webp" alt="">
                        </div>
                        <div class="about-three__img-2">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/resources/madreagency-team.webp" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12">
                <div class="about-three__right">
                    <div class="section-title text-left">
                        <p class="section-title__tagline"><span>//</span> <?php esc_html_e('Conheça-nos', 'textdomain'); ?> <span>//</span></p>
                        <h2 class="section-title__title hover-title"><?php esc_html_e('Conheça a Madre!', 'textdomain'); ?></h2>
                    </div>
                    <p class="about-three__text"><?php esc_html_e('Desde 2022 em Viana do Castelo, iniciamos com desenvolvimento de websites, crescemos e nos unimos na Madre! Somos uma equipa jovem e super criativa, pronta para apoiar as empresas a atingirem todo o seu potencial.', 'textdomain'); ?></p>
                    <div class="about-three__progress"></div>
                    <ul class="about-three__points list-unstyled">
                        <li>
                            <div class="icon">
                                <span class="icon-management"></span>
                            </div>
                            <div class="text">
                                <p><?php esc_html_e('Equipa', 'textdomain'); ?><br><?php esc_html_e('Profissional', 'textdomain'); ?></p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <span class="icon-coding"></span>
                            </div>
                            <div class="text">
                                <p><?php esc_html_e('Desenvolvimento', 'textdomain'); ?><br><?php esc_html_e('de Qualidade', 'textdomain'); ?></p>
                            </div>
                        </li>
                    </ul>
                    <div class="about-three__btn-box">
                        <a href="<?php echo esc_url(home_url('/sobre-nos/')); ?>" class="about-three__btn thm-btn"><?php esc_html_e('Saiba mais', 'textdomain'); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--About Three End-->
    <?php get_template_part('template-parts/testimonials'); ?>
    <?php get_template_part('template-parts/blog'); ?>
    <?php get_template_part('template-parts/contact'); ?>
</div>

<?php
get_footer();
?>
