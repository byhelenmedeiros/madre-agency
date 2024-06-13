<?php
/**
 * Template Name: Blog
 *
 * @package Madre_Agency
 */

get_header();
?>

<!--Page Header Start-->
<section class="page-header">
    <div class="page-header__bg" style="background-image: url(<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/backgrounds/bg.png);"></div>
    <div class="container">
        <div class="page-header__inner">
            <h2><?php esc_html_e('Confira o nosso blog', 'textdomain'); ?></h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('Início', 'textdomain'); ?></a></li>
                <li><span>/</span></li>
                <li class="active"><?php esc_html_e('BLOG', 'textdomain'); ?></li>
            </ul>
        </div>
    </div>
</section>
<!--Page Header End-->

<!--Blog Page Start-->
<section class="blog-page">
    <div class="container">
        <div class="row">
            <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 6,
                'paged' => $paged
            );
            $blog_query = new WP_Query($args);
            if ($blog_query->have_posts()) :
                while ($blog_query->have_posts()) : $blog_query->the_post();
            ?>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="blog-one__single">
                        <div class="blog-one__img-box">
                            <div class="blog-one__img">
                                <?php if (has_post_thumbnail()) {
                                    the_post_thumbnail('medium_large');
                                } ?>
                            </div>
                            <div class="blog-one__date">
                                <p><?php echo esc_html(get_the_date('d M')); ?></p>
                            </div>
                        </div>
                        <div class="blog-one__content">
                            <ul class="blog-one__meta list-unstyled">
                                <li>
                                    <p><span class="fas fa-tags"></span><?php the_category(', '); ?></p>
                                </li>
                                <li>
                                    <p><span class="fas fa-comments"></span><?php comments_number('0 Comentário', '1 Comentário', '% Comentários'); ?></p>
                                </li>
                            </ul>
                            <div class="blog-one__title-box">
                                <h3 class="blog-one__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            </div>
                            <div class="blog-one__btn-box">
                                <a href="<?php the_permalink(); ?>"><span class="icon-right-lg-arrow"></span></a>
                                <a href="<?php the_permalink(); ?>" class="blog-one__btn"><?php esc_html_e('LER MAIS', 'textdomain'); ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
                endwhile;
                wp_reset_postdata();
            else :
                echo '<p>' . esc_html__('No posts found', 'textdomain') . '</p>';
            endif;
            ?>
        </div>
        <!-- Pagination -->
        <div class="pagination">
            <?php
            echo paginate_links(array(
                'total' => $blog_query->max_num_pages,
                'prev_text' => __('« Anterior', 'textdomain'),
                'next_text' => __('Próxima »', 'textdomain'),
            ));
            ?>
        </div>
    </div>
</section>
<!--Blog Page End-->

<?php
get_footer();
?>
