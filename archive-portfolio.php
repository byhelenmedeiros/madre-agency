<?php
/* Template Name: Portfolio Archive */
get_header();
?>    <!--Page Header Start-->
<section class="page-header">
    <div class="page-header__bg" style="background-image: url(<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/backgrounds/bg.png);">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <h2>O nosso portéfolio</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="<?php echo esc_url(home_url('/')); ?>">Início</a></li>
                <li><span>/</span></li>
              
            </ul>
        </div>
    </div>
</section>
<!--Page Header End-->
<!-- Portfolio Page Start -->
<section class="portfolio-page">
    <div class="container">
        <!-- Página de Título e Introdução -->
        <div class="row">
        <div class="col-xl-7 col-lg-6">
                        <div class="services-three__left">
                            <div class="section-title text-left">
                                <h2 class="section-title__title py-4 hover-title">Veja o que ja fizemos para outras empresas.</h2>
                            </div>
                        </div>
                    </div>
        </div>
        <!-- Fim da Página de Título e Introdução -->

        <div class="row">
            <?php
            $args = array(
                'post_type' => 'portfolio',
                'posts_per_page' => 6,
                'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1)
            );
            $portfolio_query = new WP_Query($args);
            if ($portfolio_query->have_posts()) :
                while ($portfolio_query->have_posts()) : $portfolio_query->the_post();
            ?>
            <!-- Portfolio Single Start -->
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="smillar-portfolio__single">
                    <div class="smillar-portfolio__img-box">
                        <div class="smillar-portfolio__img">
                            <?php if (has_post_thumbnail()) { ?>
                                <img src="<?php the_post_thumbnail_url('medium'); ?>" class="portfolio-thumbnail" alt="<?php the_title_attribute(); ?>">
                            <?php } ?>
                        </div>
                        <div class="smillar-portfolio__content">
                            <p class="smillar-portfolio__sub-title"><?php echo esc_html(get_post_meta(get_the_ID(), 'portfolio_location', true)); ?></p>
                            <h3 class="smillar-portfolio__title  hover-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Portfolio Single End -->
            <?php
                endwhile;
                wp_reset_postdata();
            else :
                echo '<p>' . esc_html__('Nenhum portfólio encontrado', 'textdomain') . '</p>';
            endif;
            ?>
        </div>
        <!-- Pagination -->
        <div class="pagination">
            <?php
            echo paginate_links(array(
                'total' => $portfolio_query->max_num_pages
            ));
            ?>
        </div>
    </div>
</section>
<!-- Portfolio Page End -->

<?php
wp_footer();
get_footer();
?>
