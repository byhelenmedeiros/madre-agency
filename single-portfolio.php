<?php
get_header();
?>

<!-- Page Header Start -->

<?php get_template_part('components/breadcrumb'); ?>

<!-- Page Header End -->
<?php get_template_part('components/wordslider'); ?>

<!-- Portfolio Details Start -->
<section class="portfolio-details py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="portfolio-details__img mb-4">
                    <?php if (has_post_thumbnail()) {
                        the_post_thumbnail('full', array('class' => 'img-fluid'));
                    } ?>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="portfolio-details__content">
                    <h3 class="portfolio-details__title mb-4"><?php the_title(); ?></h3>
                    <div class="portfolio-details__text"><?php the_content(); ?></div>
                    <?php 
                    $challenges = get_post_meta(get_the_ID(), 'portfolio_challenges', true); 
                    if ($challenges && is_array($challenges)) :
                    ?>
                    <div class="portfolio-details__points-box mt-4">
                        <h4>Desafios do Projeto</h4>
                        <ul class="list-unstyled portfolio-details__points">
                            <?php foreach ($challenges as $challenge) : ?>
                            <li class="d-flex align-items-center">
                                <span class="fa fa-check mr-2"></span>
                                <p class="mb-0"><?php echo esc_html($challenge); ?></p>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="portfolio-details__info">
                    <ul class="list-group list-group-flush portfolio-details__info-list">
                        <li class="list-group-item"><strong>Data:</strong> <?php echo esc_html(get_post_meta(get_the_ID(), 'portfolio_date', true)); ?></li>
                        <li class="list-group-item"><strong>Serviços:</strong> <?php echo esc_html(get_post_meta(get_the_ID(), 'portfolio_services', true)); ?></li>
                        <li class="list-group-item"><strong>Cliente:</strong> <?php echo esc_html(get_post_meta(get_the_ID(), 'portfolio_client', true)); ?></li>
                        <li class="list-group-item"><strong>Localização:</strong> <?php echo esc_html(get_post_meta(get_the_ID(), 'portfolio_location', true)); ?></li>
                    </ul>
                    <div class="portfolio-details__social mt-4">
                        <?php 
                        $socials = get_post_meta(get_the_ID(), 'portfolio_social', true);
                        if ($socials && is_array($socials)) :
                            foreach ($socials as $social) :
                                if (is_array($social) && isset($social['url'], $social['platform'])) :
                        ?>
                        <a href="<?php echo esc_url($social['url']); ?>" class="mr-2"><i class="fab fa-<?php echo esc_attr($social['platform']); ?>"></i></a>
                        <?php
                                endif;
                            endforeach;
                        endif;
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12">
                <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-between project-details__pagination">
                        <li class="page-item next">
                            <?php previous_post_link('%link', '<i class="icon-left-arrow1"></i> Anterior'); ?>
                        </li>
                        <li class="page-item previous">
                            <?php next_post_link('%link', 'Próximo <i class="icon-right-arrow"></i>'); ?>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- Portfolio Details End -->

<!-- Similar Portfolio Start -->
<section class="smillar-portfolio py-5 bg-light">
    <div class="container">
        <div class="section-title text-center mb-4">
            <p class="section-title__tagline"><span>//</span>Os nossos trabalhos semelhante <span>//</span></p>
            <h2 class="section-title__title">Explore portfólios semelhantes que<br> podes gostar.</h2>
        </div>
        <div class="row">
            <?php
            $related_portfolios = new WP_Query(array(
                'post_type' => 'portfolio',
                'posts_per_page' => 3,
                'post__not_in' => array(get_the_ID()),
                'orderby' => 'rand'
            ));
            if ($related_portfolios->have_posts()) :
                while ($related_portfolios->have_posts()) : $related_portfolios->the_post();
            ?>
            <div class="col-xl-4 col-lg-4">
                <div class="smillar-portfolio__single">
                    <div class="smillar-portfolio__img-box">
                        <div class="smillar-portfolio__img">
                            <?php if (has_post_thumbnail()) {
                                the_post_thumbnail('full', array('class' => 'img-fluid'));
                            } ?>
                        </div>
                        <div class="smillar-portfolio__content">
                            <p class="smillar-portfolio__sub-title"><?php echo esc_html(get_post_meta(get_the_ID(), 'portfolio_services', true)); ?></p>
                            <h3 class="smillar-portfolio__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                endwhile;
                wp_reset_postdata();
            endif;
            ?>
        </div>
    </div>
</section>
<!-- Similar Portfolio End -->

<?php
get_footer();
?>
