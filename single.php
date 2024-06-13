<?php
get_header();
?>

<!--Page Header Start-->
<section class="page-header">
    <?php 
    // Obtém a URL da imagem destacada
    $featured_image_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
    ?>
    <div class="page-header__bg" style="background-image: url(<?php echo esc_url($featured_image_url); ?>);">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <h2><?php the_title(); ?></h2>
        </div>
    </div>
</section>
<!--Page Header End-->


<!--Blog Details Start-->
<section class="blog-details">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-7">
                <div class="blog-details__left">
                    <div class="blog-details__img">
                       
                        <div class="blog-details__date-box">
                            <p><?php echo get_the_date('d M'); ?></p>
                        </div>
                    </div>
                    <div class="blog-details__content">
                        <ul class="blog-details__meta list-unstyled">
                            <li>
                                <a href="<?php echo get_permalink(); ?>"><i class="fas fa-tags"></i><?php the_category(', '); ?></a>
                            </li>
                            <li>
                                <a href="<?php echo get_permalink(); ?>"><i class="fas fa-comments"></i><?php comments_number('0 Comments', '1 Comment', '% Comments'); ?></a>
                            </li>
                        </ul>
                        <h3 class="blog-details__title"><?php the_title(); ?></h3>
                        <div class="blog-details__text-1">
                            <?php the_content(); ?>
                        </div>
                        <div class="blog-details__bottom">
                            <p class="blog-details__tags">
                                <span>Tags</span>
                                <?php the_tags('', ', ', ''); ?>
                            </p>
                            <div class="blog-details__social">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="blog-details__pagenation">
                            <div class="blog-details__pagenation-left">
                                <?php
                                $prev_post = get_previous_post();
                                if (!empty($prev_post)): ?>
                                   
                                    <div class="blog-details__pagenation-left-content">
                                        <p class="blog-details__pagenation-left-date"> <i class="fas fa-clock"></i><?php echo get_the_date('d M, Y', $prev_post->ID); ?></p>
                                        <h4 class="blog-details__pagenation-left-title"><a href="<?php echo get_permalink($prev_post->ID); ?>"><?php echo get_the_title($prev_post->ID); ?></a></h4>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="blog-details__pagenation-right">
                                <?php
                                $next_post = get_next_post();
                                if (!empty($next_post)): ?>
                                    <div class="blog-details__pagenation-right-content">
                                        <p class="blog-details__pagenation-right-date"> <i class="fas fa-clock"></i><?php echo get_the_date('d M, Y', $next_post->ID); ?></p>
                                        <h4 class="blog-details__pagenation-right-title"><a href="<?php echo get_permalink($next_post->ID); ?>"><?php echo get_the_title($next_post->ID); ?></a></h4>
                                    </div>
                                   
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="comment-one">
                            <h3 class="comment-one__title"><?php comments_number('0 comments', '1 comment', '% comments'); ?></h3>
                            <?php
                            if (have_comments()):
                                wp_list_comments(array(
                                    'style' => 'div',
                                    'short_ping' => true,
                                    'avatar_size' => 60,
                                    'callback' => 'my_custom_comments'
                                ));
                            endif;
                            ?>
                        </div>
                        <div class="comment-form">
                            <h3 class="comment-form__title">Gostou do conteúdo? <br></h3>
                            <?php
                            comment_form(array(
                                'class_form' => 'contact-form-validated',
                                'title_reply_before' => '<div class="comment-form__title">',
                                'title_reply_after' => '</div>',
                                'submit_button' => '<button type="submit" class="thm-btn comment-form__btn">Enviar comentário</button>',
                                'comment_field' => '<div class="row"><div class="col-xl-12"><div class="comment-form__input-box text-message-box"><textarea name="comment" placeholder="Escreva um comentário"></textarea></div></div></div>',
                                'fields' => array(
                                    'author' => '<div class="row"><div class="col-xl-6"><div class="comment-form__input-box"><input type="text" name="author" placeholder="Nome"></div></div>',
                                    'email' => '<div class="col-xl-6"><div class="comment-form__input-box"><input type="email" name="email" placeholder="Email address"></div></div></div>',
                                ),
                            ));
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-5">
                <div class="sidebar">
                    <div class="sidebar__single sidebar__search">
                        <form action="<?php echo home_url('/'); ?>" class="sidebar__search-form" method="get">
                            <input type="search" name="s" placeholder="Pesquisar" value="<?php echo get_search_query(); ?>">
                            <button type="submit"><i class="icon-magnifying-glass"></i></button>
                        </form>
                    </div>
                    <div class="sidebar__single sidebar__post">
                        <h3 class="sidebar__title">Últimos conteúdos </h3>
                        <ul class="sidebar__post-list list-unstyled">
                            <?php
                            $recent_posts = wp_get_recent_posts(array(
                                'numberposts' => 5,
                                'post_status' => 'publish',
                            ));
                            foreach ($recent_posts as $post) :
                                ?>
                                <li>
                                 
                                    <div class="sidebar__post-content">
                                        <h3>
                                            <span class="sidebar__post-content-meta"><i class="fa fa-clock"></i><?php echo get_the_date('d M, Y', $post['ID']); ?></span>
                                            <a href="<?php echo get_permalink($post['ID']) ?>"><?php echo $post['post_title'] ?></a>
                                        </h3>
                                    </div>
                                </li>
                                <?php
                            endforeach;
                            wp_reset_query();
                            ?>
                        </ul>
                    </div>
                    <div class="sidebar__single sidebar__category">
                        <h3 class="sidebar__title">Categorias</h3>
                        <ul class="sidebar__category-list list-unstyled">
                            <?php
                            wp_list_categories(array(
                                'title_li' => '',
                            ));
                            ?>
                        </ul>
                    </div>
                    <div class="sidebar__single sidebar__project">
                        <h3 class="sidebar__title">Veja os nossos projetos</h3>
                        <div class="sidebar__project-box">
                            <div class="sidebar__project-carousel owl-carousel owl-theme thm-owl__carousel"
                                data-owl-options='{
                                    "loop": true,
                                    "autoplay": true,
                                    "margin": 30,
                                    "nav": false,
                                    "dots": true,
                                    "smartSpeed": 500,
                                    "autoplayTimeout": 10000,
                                    "navText": ["<span class=\"icon-right-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"],
                                    "responsive": {
                                        "0": {
                                            "items": 1
                                        },
                                        "768": {
                                            "items": 1
                                        },
                                        "992": {
                                            "items": 1
                                        },
                                        "1200": {
                                            "items": 1
                                        }
                                    }
                                }'>
                                <?php
                                $related_portfolios = new WP_Query(array(
                                    'post_type' => 'portfolio',
                                    'posts_per_page' => 5,
                                    'orderby' => 'rand',
                                ));
                                if ($related_portfolios->have_posts()) :
                                    while ($related_portfolios->have_posts()) : $related_portfolios->the_post();
                                ?>
                               
                                <?php
                                    endwhile;
                                    wp_reset_postdata();
                                endif;
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar__single sidebar__tags">
                        <h3 class="sidebar__title">Tags</h3>
                        <div class="sidebar__tags-list">
                            <?php the_tags('', ' ', ''); ?>
                        </div>
                    </div>
                    <div class="sidebar__single sidebar__comments">
                        <h3 class="sidebar__title">Comentários</h3>
                        <ul class="sidebar__comments-list list-unstyled">
                            <?php
                            $recent_comments = get_comments(array(
                                'number' => 5,
                                'status' => 'approve'
                            ));
                            foreach ($recent_comments as $comment) :
                                ?>
                                <li>
                                    <div class="sidebar__comments-icon">
                                        <i class="fas fa-comment"></i>
                                    </div>
                                    <div class="sidebar__comments-text-box">
                                        <p><?php echo $comment->comment_author; ?> on <a href="<?php echo get_permalink($comment->comment_post_ID); ?>"><?php echo get_the_title($comment->comment_post_ID); ?></a></p>
                                    </div>
                                </li>
                                <?php
                            endforeach;
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Blog Details End-->

<?php get_footer(); ?>
