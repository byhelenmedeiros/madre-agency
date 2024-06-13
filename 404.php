<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package Madre_Agency
 */

get_header();
?>

<?php get_template_part('components/breadcrumb'); ?>


    <!--Error Page Start-->
    <section class="error-page">
        <div class="error-page__bg" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/backgrounds/error-page-bg.png);">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="error-page__inner">
                        <div class="error-page__title-box">
                            <div class="error-page__title-shape-1 img-bounce">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shapes/error-page-title-shape-1.png" alt="">
                            </div>
                            <h2 class="error-page__title">4 <span>4</span></h2>
                        </div>
                        <h3 class="error-page__tagline">Oops! Esta página não existe.</h3>
                        <p class="error-page__text">The page you are looking for does not exist.</p>
                        <form class="error-page__form" action="<?php echo esc_url(home_url('/')); ?>" method="get">
                            <div class="error-page__form-input">
                                <input type="search" placeholder="Pesquise aqui" name="s">
                                <button type="submit"><i class="icon-magnifying-glass"></i></button>
                            </div>
                        </form>
                        <div class="error-page__btn-box">
                            <a href="<?php echo home_url(); ?>" class="thm-btn error-page__btn">Voltar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Error Page End-->
</div><!-- /.page-wrapper -->

<?php
get_footer();
?>
