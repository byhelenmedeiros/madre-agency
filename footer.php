<!-- Site Footer Start -->
<footer class="site-footer">
    <div class="site-footer__bg" style="background-image: url(<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/backgrounds/bg.png);">
    </div>
    <div class="site-footer__top py-5 py-md-5 m-0">
        <div class="container">
            <div class="row text-center text-md-start mx-0">
                <div class="col-xl-2 col-lg-2 col-md-6 mb-4 wow fadeInUp mx-auto text-center text-md-start p-0" data-wow-delay="100ms">
                    <div class="footer-widget__column footer-widget__about mx-auto">
                        <div class="footer-widget__logo">
                            <a href="<?php echo esc_url(home_url('/')); ?>">
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/resources/logo-1.png" alt="Logo Madre Agency" class="img-fluid mx-auto d-block">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 mb-4 wow fadeInUp mx-auto text-center text-md-start p-0" data-wow-delay="200ms">
                    <div class="footer-widget__column footer-widget__contact">
                        <div class="footer-widget__title-box mb-3">
                            <h3 class="footer-widget__title text-white  hover-title"><?php esc_html_e('Contacto', 'textdomain'); ?></h3>
                        </div>
                        <ul class="footer-widget__contact-list list-unstyled">
                            <li>
                                <p><a href="mailto:geral@madreagency.pt" class="text-white">geral@madreagency.pt</a></p>
                            </li>
                            <li>
                                <p><a href="tel:+351911156324" class="text-white">+351 911 156 324</a></p>
                                <p class="text-white">(Chamada para a rede móvel nacional)</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 mb-4 wow fadeInUp mx-auto text-center text-md-start p-0" data-wow-delay="300ms">
                    <div class="footer-widget__column footer-widget__link">
                        <div class="footer-widget__title-box mb-3">
                            <h3 class="footer-widget__title text-white  hover-title"><?php esc_html_e('Explore', 'textdomain'); ?></h3>
                        </div>
                        <ul class="footer-widget__link-list list-unstyled ">
                            <li><a href="<?php echo esc_url(get_permalink(get_page_by_path('sobre-nos'))); ?>" class="text-white  hover-title"><?php esc_html_e('Sobre', 'textdomain'); ?></a></li>
                            <li><a href="<?php echo esc_url(get_permalink(get_page_by_path('services'))); ?>" class="text-white  hover-title"><?php esc_html_e('Serviços', 'textdomain'); ?></a></li>
                            <li><a href="<?php echo esc_url(get_permalink(get_page_by_path('portfolio'))); ?>" class="text-white  hover-title"><?php esc_html_e('Últimos Projetos', 'textdomain'); ?></a></li>
                            <li><a href="<?php echo esc_url(get_permalink(get_page_by_path('blog'))); ?>" class="text-white  hover-title"><?php esc_html_e('Notícias & Mídia', 'textdomain'); ?></a></li>
                            <li><a href="<?php echo esc_url(get_permalink(get_page_by_path('contactar'))); ?>" class="text-white  hover-title"><?php esc_html_e('Contacto', 'textdomain'); ?></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 mb-4 wow fadeInUp mx-auto text-center text-md-start p-0" data-wow-delay="400ms">
                    <div class="footer-widget__column footer-widget__link">
                        <div class="footer-widget__title-box mb-3">
                            <h3 class="footer-widget__title text-white  hover-title"><?php esc_html_e('Estamos nas redes sociais', 'textdomain'); ?></h3>
                        </div>
                        <div class="mc-form__response"></div>
                        <div class="site-footer__social d-flex justify-content-center justify-content-md-start">
                            <a href="https://www.facebook.com/madreagency.pt" target="_blank" rel="noopener noreferrer" class="text-white me-3"><i class="fab fa-facebook-square"></i></a>
                            <a href="https://www.instagram.com/madreagency.pt/" target="_blank" rel="noopener noreferrer" class="text-white me-3"><i class="fab fa-instagram"></i></a>
                            <a href="https://www.linkedin.com/company/madreagencypt/" target="_blank" rel="noopener noreferrer" class="text-white"><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row bg-white text-dark py-3 m-0">
        <div class="col-12">
            <div class="footer-widget__column footer-widget__link text-center">
                <ul class="footer-widget__link-list list-inline mb-3">
                    <li class="list-inline-item"><a href="<?php echo esc_url(home_url('/')); ?>" class="text-dark"><?php esc_html_e('Início', 'textdomain'); ?></a></li>
                    <li class="list-inline-item"><a href="<?php echo esc_url(get_permalink(get_page_by_path('portfolio'))); ?>" class="text-dark"><?php esc_html_e('Portfólio', 'textdomain'); ?></a></li>
                    <li class="list-inline-item"><a href="<?php echo esc_url(get_permalink(get_page_by_path('free-materials'))); ?>" class="text-dark"><?php esc_html_e('Materiais gratuitos', 'textdomain'); ?></a></li>
                    <li class="list-inline-item"><a href="<?php echo esc_url(get_permalink(get_page_by_path('contact'))); ?>" class="text-dark"><?php esc_html_e('Contactar', 'textdomain'); ?></a></li>
                    <li class="list-inline-item"><a href="<?php echo esc_url(get_permalink(get_page_by_path('privacy-policy'))); ?>" class="text-dark"><?php esc_html_e('Políticas de Privacidade', 'textdomain'); ?></a></li>
                    <li class="list-inline-item"><a href="<?php echo esc_url(get_permalink(get_page_by_path('terms-of-use'))); ?>" class="text-dark"><?php esc_html_e('Termos de Uso', 'textdomain'); ?></a></li>
                </ul>
                <div class="inner-container text-center">
                    <p class="site-footer__text text-dark"><?php esc_html_e('Todos os direitos reservados - Feito com ❤️ por', 'textdomain'); ?> <a href="https://madreagency.pt" target="_blank" rel="noopener noreferrer" class="text-dark">Madre Agency</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Site Footer End -->
</div><!-- /.page-wrapper -->
<?php wp_footer(); ?>
</body>
</html>
