<!DOCTYPE html>
<html lang="pt-PT">

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php wp_title('|', true, 'right'); ?> <?php bloginfo('name'); ?></title>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php wp_head(); ?>
</head>

<body <?php body_class('custom-cursor'); ?>>
    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>
    <div class="page-wrapper">
    <header class="main-header">
    <nav class="main-menu">
        <div class="main-menu__wrapper">
            <div class="main-menu__wrapper-inner">
                <div class="main-menu__left">
                    <div class="main-menu__logo">
                        <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/resources/logo-1.png" class="img-fluid " alt="Logo"></a>
                    </div>
                    <div class="main-menu__main-menu-box">
                        <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'primary',
                            'menu_class' => 'main-menu__list',
                            'container' => false,
                            'walker' => new Custom_Walker_Nav_Menu() // Utilizando o custom walker para adicionar classes extras
                        ));
                        ?>
                    </div>
                </div>
                <div class="main-menu__right">
                    <div class="main-menu__search-cart-box">
                      
                    </div>
                    <div class="main-menu__btn-box">
                        <a href="<?php echo get_permalink(get_page_by_path('contact')); ?>" class="thm-btn main-menu__btn">Solicitar orçamento</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
<div class="stricky-header stricked-menu main-menu">
    <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
</div><!-- /.stricky-header -->

<div class="mobile-nav__wrapper">
    <div class="mobile-nav__overlay mobile-nav__toggler"></div>
    <div class="mobile-nav__content">
        <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>
        <div class="logo-box">
        <?php if (function_exists('the_custom_logo') && has_custom_logo()) : ?>
    <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
        <?php the_custom_logo(); ?>
    </a>
<?php else : ?>
    <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/resources/logo-1.png" alt="<?php bloginfo('name'); ?>">
    </a>
<?php endif; ?>

        </div>
        <div class="mobile-nav__container">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'menu_class' => 'mobile-menu__list',
                'container' => false,
                'walker' => new Custom_Walker_Nav_Menu() // Utilizando o custom walker para adicionar classes extras
            ));
            ?>
        </div>
        <ul class="mobile-nav__contact list-unstyled">
            <li><i class="fa fa-envelope"></i> <a href="mailto:geral@madreagency.pt">geral@madreagency.pt</a></li>
            <li><i class="fa fa-phone-alt"></i> <a href="tel:+351911156324">+351911156324</a></li>
        </ul>
        <div class="mobile-nav__top">
            <div class="mobile-nav__social">
                <a href="https://www.instagram.com/madreagency.pt/" class="fab fa-linkedin"></a>
                <a href="https://www.facebook.com/madreagency.pt" class="fab fa-facebook-square"></a>
                <a href="#" class="fab fa-instagram"></a>
            </div>
        </div>
    </div>
</div>
