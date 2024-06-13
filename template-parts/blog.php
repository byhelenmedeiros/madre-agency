<section class="blog-one bg-light">
    <div class="container">
        <div class="section-title text-left">
            <p class="section-title__tagline"><span>//</span> nossos posts recentes <span>//</span></p>
            <h2 class="section-title__title">Mantenha-se atualizado com os<br> artigos do nosso blog</h2>
        </div>
        <div class="row">
            <?php
            // Query para os posts mais recentes
            $blog_query = new WP_Query(array(
                'post_type' => 'post',
                'posts_per_page' => 3
            ));

            if ($blog_query->have_posts()) :
                while ($blog_query->have_posts()) : $blog_query->the_post(); ?>
                    <div class="col-xl-4 col-lg-4">
                        <div class="blog-one__single">
                            <div class="blog-one__img-box">
                                <div class="blog-one__img" style="overflow: hidden;">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php if (has_post_thumbnail()) {
                                            the_post_thumbnail('medium_large', array('style' => 'width: 100%; height: auto;'));
                                        } ?>
                                    </a>
                                </div>
                                <div class="blog-one__date">
                                    <p><?php echo get_the_date('d M'); ?></p>
                                </div>
                            </div>
                            <div class="blog-one__content">
                                <ul class="blog-one__meta list-unstyled">
                                    <li>
                                        <p><span class="fas fa-tags"></span><?php the_category(', '); ?></p>
                                    </li>
                                  
                                </ul>
                                <div class="blog-one__title-box">
                                    <h3 class="blog-one__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                </div>
                                <div class="blog-one__btn-box">
                                    <a href="<?php the_permalink(); ?>"><span class="icon-right-lg-arrow"></span></a>
                                    <a href="<?php the_permalink(); ?>" class="blog-one__btn">LEIA MAIS</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile;
                wp_reset_postdata();
            else : ?>
                <p><?php esc_html_e('Nenhum post encontrado.', 'madre-agency'); ?></p>
            <?php endif; ?>
        </div>
    </div>
</section>
