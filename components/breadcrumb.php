<?php
/**
 * Breadcrumb Component
 */
?>

<section class="page-header">
<?php if (has_post_thumbnail()) : ?>
        <div class="page-header__bg" style="background-image: url(<?php echo esc_url(get_the_post_thumbnail_url(null, 'full')); ?>);"></div>
    <?php else : ?>
        <div class="page-header__bg" style="background-image: url(<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/backgrounds/page-header-bg.jpg); ?>"></div>
    <?php endif; ?>    <div class="container">
        <div class="page-header__inner">
            <h2><?php the_title(); ?></h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="<?php echo home_url(); ?>">início</a></li>
                <li><span>/</span></li>
                <li class="active"><?php the_title(); ?></li>
            </ul>
        </div>
    </div>
</section>
