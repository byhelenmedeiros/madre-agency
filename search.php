<?php
get_header();
?>

<!--Page Header Start-->
<section class="page-header">
    <div class="page-header__bg" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/backgrounds/page-header-bg.jpg);">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <h2>Search Results for: <?php echo get_search_query(); ?></h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="<?php echo home_url(); ?>">Home</a></li>
                <li><span>/</span></li>
                <li class="active">Search Results</li>
            </ul>
        </div>
    </div>
</section>
<!--Page Header End-->

<!--Blog Page Start-->
<section class="blog-page">
    <div class="container">
        <div class="row">
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="blog-one__single">
                            <div class="blog-one__img-box">
                                <div class="blog-one__img">
                                    <?php if ( has_post_thumbnail() ) {
                                        the_post_thumbnail('full');
                                    } ?>
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
                                    <li>
                                        <p><span class="fas fa-comments"></span><?php comments_number('0 Comments', '1 Comment', '% Comments'); ?></p>
                                    </li>
                                </ul>
                                <div class="blog-one__title-box">
                                    <h3 class="blog-one__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                </div>
                                <div class="blog-one__btn-box">
                                    <a href="<?php the_permalink(); ?>"><span class="icon-right-lg-arrow"></span></a>
                                    <a href="<?php the_permalink(); ?>" class="blog-one__btn">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php else : ?>
                <p>No posts found for: <?php echo get_search_query(); ?></p>
            <?php endif; ?>
        </div>
        <!-- Pagination -->
        <div class="pagination">
            <?php
            echo paginate_links(array(
                'total' => $wp_query->max_num_pages
            ));
            ?>
        </div>
    </div>
</section>
<!--Blog Page End-->

<?php get_footer(); ?>