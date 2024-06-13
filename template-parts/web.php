<?php
/*
Template Name: Website Development
*/
get_header();
?>

    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header__bg" style="background-image: url(<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/backgrounds/page-header-bg.jpg);">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <h2><?php the_title(); ?></h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
                    <li><span>/</span></li>
                    <li><a href="<?php echo esc_url(home_url('/services/')); ?>">Services</a></li>
                    <li><span>/</span></li>
                    <li class="active"><?php the_title(); ?></li>
                </ul>
            </div>
        </div>
    </section>
    <!--Page Header End-->

    <!--Services Details Start-->
    <section class="services-details">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-5">
                    <div class="services-details__sidebar">
                        <div class="services-details__services-list">
                            <ul class="services-details__services list-unstyled">
                                <li class="active">
                                    <a href="<?php echo esc_url(home_url('/website-development/')); ?>">Website development<span class="fa fa-arrow-right"></span></a>
                                </li>
                                <li>
                                    <a href="<?php echo esc_url(home_url('/app-development/')); ?>">App development<span class="fa fa-arrow-right"></span></a>
                                </li>
                                <li>
                                    <a href="<?php echo esc_url(home_url('/digital-marketing/')); ?>">Digital marketing<span class="fa fa-arrow-right"></span></a>
                                </li>
                                <li>
                                    <a href="<?php echo esc_url(home_url('/graphic-designing/')); ?>">Graphic designing<span class="fa fa-arrow-right"></span></a>
                                </li>
                                <li>
                                    <a href="<?php echo esc_url(home_url('/content-writing/')); ?>">Content writing<span class="fa fa-arrow-right"></span></a>
                                </li>
                            </ul>
                        </div>
                        <div class="banner-one">
                            <div class="banner-one__img">
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/resources/banner-one-img.png" alt="">
                            </div>
                            <h3 class="banner-one__title">Are you
                                <br> looking
                                <br> for a digital
                                <br> marketing?</h3>
                            <div class="banner-one__btn-box">
                                <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="banner-one__btn thm-btn">Contact</a>
                            </div>
                        </div>
                        <div class="services-details__documents">
                            <div class="icon">
                                <span class="icon-pdf-file"></span>
                            </div>
                            <div class="content">
                                <h3><a href="#">Project agreement form</a></h3>
                                <p>3.9KB</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-7">
                    <div class="services-details__right">
                        <div class="services-details__img">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/services/services-details-img-2.jpg" alt="">
                        </div>
                        <h3 class="services-details__title-1">Website development</h3>
                        <p class="services-details__text-1">There are many variations of passages of lorem ipsum is simply free text available in the market, but the majority time you put aside to be in our office. Lorem ipsum dolor sit amet, consectetLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <p class="services-details__text-2">Helping clients to solve application development problems</p>
                        <p class="services-details__text-3">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur.</p>
                        <h3 class="services-details__title-2">Why choose?</h3>
                        <ul class="services-details__points list-unstyled">
                            <li>
                                <div class="icon">
                                    <span class="icon-success"></span>
                                </div>
                                <div class="text">
                                    <p>Best creative
                                        <br> agency</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-job-promotion"></span>
                                </div>
                                <div class="text">
                                    <p>99% success
                                        <br> rate</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-megaphone"></span>
                                </div>
                                <div class="text">
                                    <p>Quality
                                        <br> marketing</p>
                                </div>
                            </li>
                        </ul>
                        <div class="services-details__benefit">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="services-details__benefit-img">
                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/services/services-details-benefit-img.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="services-details__benefit-content">
                                        <h3 class="services-details__benefit-title">Our benefits</h3>
                                        <p class="services-details__benefit-text">Get the best digital marketing from the aspro agency of excellence</p>
                                        <ul class="services-details__benefit-points list-unstyled">
                                            <li>
                                                <div class="icon">
                                                    <span class="fa fa-check"></span>
                                                </div>
                                                <div class="text">
                                                    <p>Cost Effective</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="fa fa-check"></span>
                                                </div>
                                                <div class="text">
                                                    <p>Equal Opportunities</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="fa fa-check"></span>
                                                </div>
                                                <div class="text">
                                                    <p>Creates High Brand Awareness</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="fa fa-check"></span>
                                                </div>
                                                <div class="text">
                                                    <p>Higher ROI</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="services-details__faq">
                            <div class="accrodion-grp" data-grp-name="faq-one-accrodion">
                                <div class="accrodion">
                                    <div class="accrodion-title">
                                        <h4>What happens to my data if I cancel?</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>There are many variations of passages of available but the have suffered alteration in that some form by injected randomised words which don’t look even as slightly believable now.</p>
                                        </div><!-- /.inner -->
                                    </div>
                                </div>
                                <div class="accrodion  active">
                                    <div class="accrodion-title">
                                        <h4>What are the different types of marketing solutions?</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>There are many variations of passages of available but the have suffered alteration in that some form by injected randomised words which don’t look even as slightly believable now.</p>
                                        </div><!-- /.inner -->
                                    </div>
                                </div>
                                <div class="accrodion">
                                    <div class="accrodion-title">
                                        <h4>How often should i work on the digital marketing?</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>There are many variations of passages of available but the have suffered alteration in that some form by injected randomised words which don’t look even as slightly believable now.</p>
                                        </div><!-- /.inner -->
                                    </div>
                                </div>
                                <div class="accrodion">
                                    <div class="accrodion-title">
                                        <h4>Are social media good for the business growth?</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>There are many variations of passages of available but the have suffered alteration in that some form by injected randomised words which don’t look even as slightly believable now.</p>
                                        </div><!-- /.inner -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Services Details End-->
    </div><!-- /.page-wrapper -->

    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="<?php echo esc_url(home_url('/')); ?>" aria-label="logo image"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/resources/logo-1.png" width="40" alt="" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:needhelp@packageName__.com">needhelp@aspro.com</a>
                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:666-888-0000">666 888 0000</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__top">
                <div class="mobile-nav__social">
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-facebook-square"></a>
                    <a href="#" class="fab fa-pinterest-p"></a>
                    <a href="#" class="fab fa-instagram"></a>
                </div><!-- /.mobile-nav__social -->
            </div><!-- /.mobile-nav__top -->
        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->

    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form action="#">
                <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
                <input type="text" id="search" placeholder="Search Here..." />
                <button type="submit" aria-label="search submit" class="thm-btn">
                    <i class="icon-magnifying-glass"></i>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>
    <!-- /.search-popup -->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="icon-right-arrow"></i></a>
</div><!-- /.page-wrapper -->

<?php get_footer(); ?>
