<?php
/* Template Name: About */

get_header();
?>
<?php get_template_part('components/breadcrumb'); ?>

<!--About Three Start-->
<section class="about-three">
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
                        <h2 class="section-title__title"><?php esc_html_e('Conheça a Madre!', 'textdomain'); ?></h2>
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
                        <a href="<?php echo esc_url(home_url('/#madre/')); ?>" class="about-three__btn thm-btn"><?php esc_html_e('Saiba mais', 'textdomain'); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--About Three End-->

<!--Missão e Valores Start-->
<section class="mission-values">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-7">
                <div class="services-details__right">
                    <div class="services-details__img">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/services/services-details-img-1.jpg" alt="">
                    </div>
                    <h3 class="services-details__title-1"><?php esc_html_e('Missão e Valores', 'textdomain'); ?></h3>
                    <p class="services-details__text-1"><?php esc_html_e('Na Agência Madre, somos apaixonados pelo que fazemos. A nossa missão é criar conteúdos de valor que ajudem as empresas a crescer e prosperar. Acreditamos que bons conteúdos devem ser partilhados e, por isso, dedicamo-nos a produzir materiais que realmente façam a diferença.', 'textdomain'); ?></p>
                    <h3 class="services-details__title-2 my-3"><?php esc_html_e('Porquê escolher-nos?', 'textdomain'); ?></h3>
                    <ul class="services-details__points list-unstyled">
                        <li>
                            <div class="icon">
                                <span class="icon-success"></span>
                            </div>
                            <div class="text">
                                <p><?php esc_html_e('Equipa jovem e criativa', 'textdomain'); ?><br><?php esc_html_e('Paixão pelo que fazemos', 'textdomain'); ?></p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <span class="icon-job-promotion"></span>
                            </div>
                            <div class="text">
                                <p><?php esc_html_e('Inovação constante', 'textdomain'); ?><br><?php esc_html_e('Novas ideias e abordagens', 'textdomain'); ?></p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <span class="icon-megaphone"></span>
                            </div>
                            <div class="text">
                                <p><?php esc_html_e('Qualidade superior', 'textdomain'); ?><br><?php esc_html_e('Compromisso com resultados', 'textdomain'); ?></p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <span class="icon-coding"></span>
                            </div>
                            <div class="text">
                                <p><?php esc_html_e('Colaboração eficaz', 'textdomain'); ?><br><?php esc_html_e('Trabalho em equipa', 'textdomain'); ?></p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Missão e Valores End-->

<?php
get_footer();
?>
