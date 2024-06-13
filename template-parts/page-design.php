<?php 
/*
Template Name: Design Gráfico
*/

get_header(); ?>

<!-- Page Header Start -->
<?php get_template_part('components/breadcrumb'); ?>

<!-- Services Details Start -->
<section class="services-details">
    <div class="container-fluid bg-light py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="services-details__right">
                        <h2 class="services-details__title-1 hover-title"><?php esc_html_e('O Design Gráfico é a cara da tua marca.', 'textdomain'); ?></h2>
                        <p><?php esc_html_e('Criamos identidades visuais impactantes e peças gráficas que comunicam a essência do teu negócio.', 'textdomain'); ?></p>
                        <h4 class="services-three__title"><?php esc_html_e('Com as nossas soluções de design gráfico, garantimos que a tua marca se destaque no mercado e crie conexões emocionais com o teu público.', 'textdomain'); ?></h4>
                        <p class="services-details__text-3"><?php esc_html_e('Desde logotipos a materiais de marketing, a nossa equipa de designers talentosos está pronta para transformar a tua visão em realidade.', 'textdomain'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container py-5">
        <p class="section-title__tagline mt-4 mb-0"><span>//</span> <?php esc_html_e('O que oferecemos', 'textdomain'); ?> <span>//</span></p><br>
        <h3 class="services-details__title-2 hover-title"><?php esc_html_e('Conhece os nossos serviços de design gráfico', 'textdomain'); ?></h3>

        <!-- Static Service Cards Start -->
        <div class="services-three__bottom">
            <ul class="services-three__services-list list-unstyled d-flex flex-wrap">
                <?php
                $services = [
                    ['icon' => 'fas fa-paint-brush', 'title' => 'Identidade Visual', 'delay' => '100ms'],
                    ['icon' => 'fas fa-palette', 'title' => 'Design de Logotipos', 'delay' => '200ms'],
                    ['icon' => 'fas fa-image', 'title' => 'Materiais de Marketing', 'delay' => '300ms'],
                    ['icon' => 'fas fa-video', 'title' => 'Edição de Vídeo para Redes Sociais', 'delay' => '400ms'],
                    ['icon' => 'fas fa-share-alt', 'title' => 'Design para Redes Sociais', 'delay' => '500ms'],
                ];

                foreach ($services as $service) : ?>
                    <li class="col-md-4 d-flex align-items-stretch mb-4">
                        <div class="services-three__single wow fadeInUp" data-wow-delay="<?php echo esc_attr($service['delay']); ?>">
                            <div class="services-three__single-inner">
                                <div class="services-three__icon">
                                    <i class="<?php echo esc_attr($service['icon']); ?>"></i>
                                </div>
                                <h3 class="services-three__title"><a href="#"><?php echo esc_html($service['title']); ?></a></h3>
                            </div>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <!-- Static Service Cards End -->
    </div>

    <!-- Background Light Section Start -->
    <div class="container-fluid bg-light py-5">
        <div class="container">
            <p class="section-title__tagline"><span>//</span> <?php esc_html_e('Escolhe a MADRE', 'textdomain'); ?> <span>//</span></p>
            <h3 class="services-details__title-2"><?php esc_html_e('Porquê escolher-nos?', 'textdomain'); ?></h3>
            <ul class="services-details__points list-unstyled">
                <li>
                    <div class="icon">
                        <span class="icon-success"></span>
                    </div>
                    <div class="text">
                        <p><?php esc_html_e('Design à tua medida.', 'textdomain'); ?></p>
                    </div>
                </li>
                <li>
                    <div class="icon">
                        <span class="icon-job-promotion"></span>
                    </div>
                    <div class="text">
                        <p><?php esc_html_e('Resultados mensuráveis.', 'textdomain'); ?></p>
                    </div>
                </li>
                <li>
                    <div class="icon">
                        <span class="icon-megaphone"></span>
                    </div>
                    <div class="text">
                        <p><?php esc_html_e('Crescimento digital garantido.', 'textdomain'); ?></p>
                    </div>
                </li>
            </ul>
            <div class="services-details__benefit">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="services-details__benefit-img">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/services/designer-grafico-portugal.webp" alt="<?php esc_attr_e('Nossos Benefícios', 'textdomain'); ?>">
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="services-details__benefit-content">
                            <h3 class="services-details__benefit-title"><?php esc_html_e('Queres atualizar e modernizar a tua marca? Tens boas ideias mas precisas de as colocar em prática?', 'textdomain'); ?></h3>
                            <p class="services-details__benefit-text"><?php esc_html_e('Junta-te a nós e descobre a diferença que o design gráfico personalizado pode fazer.', 'textdomain'); ?></p>
                            <ul class="services-details__benefit-points list-unstyled">
                                <li>
                                    <div class="icon">
                                        <span class="fa fa-check"></span>
                                    </div>
                                    <div class="text">
                                        <p><?php esc_html_e('Identidades visuais únicas.', 'textdomain'); ?></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="fa fa-check"></span>
                                    </div>
                                    <div class="text">
                                        <p><?php esc_html_e('Materiais de marketing criativos.', 'textdomain'); ?></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="fa fa-check"></span>
                                    </div>
                                    <div class="text">
                                        <p><?php esc_html_e('Design inovador.', 'textdomain'); ?></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="fa fa-check"></span>
                                    </div>
                                    <div class="text">
                                        <p><?php esc_html_e('Edição de vídeo profissional.', 'textdomain'); ?></p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Background Light Section End -->

    <div class="container py-5">
        <p class="section-title__tagline"><span>//</span> <?php esc_html_e('FAQ', 'textdomain'); ?> <span>//</span></p>
        <h3 class="services-details__title-2"><?php esc_html_e('Perguntas frequentes', 'textdomain'); ?></h3>
        <div class="services-details__faq m-5">
            <div class="accrodion-grp" data-grp-name="faq-one-accrodion">
                <div class="accrodion">
                    <div class="accrodion-title">
                        <h4><?php esc_html_e('O que é Design Gráfico?', 'textdomain'); ?></h4>
                    </div>
                    <div class="accrodion-content">
                        <div class="inner">
                            <p><?php esc_html_e('Design Gráfico é a arte de criar conteúdos visuais para comunicar mensagens. Aplicando técnicas de design e estética, é possível transmitir mensagens de forma clara e impactante.', 'textdomain'); ?></p>
                        </div>
                    </div>
                </div>
                <div class="accrodion active">
                    <div class="accrodion-title">
                        <h4><?php esc_html_e('Quais são os principais serviços de design gráfico?', 'textdomain'); ?></h4>
                    </div>
                    <div class="accrodion-content">
                        <div class="inner">
                            <p><?php esc_html_e('Os principais serviços incluem design de logotipos, identidade visual, materiais de marketing, design de apresentações, design de embalagens e design de publicações.', 'textdomain'); ?></p>
                        </div>
                    </div>
                </div>
                <div class="accrodion">
                    <div class="accrodion-title">
                        <h4><?php esc_html_e('Como o design gráfico pode beneficiar minha empresa?', 'textdomain'); ?></h4>
                    </div>
                    <div class="accrodion-content">
                        <div class="inner">
                            <p><?php esc_html_e('O design gráfico pode ajudar a criar uma identidade visual forte, comunicar a mensagem da marca de forma eficaz e atrair e engajar clientes potenciais.', 'textdomain'); ?></p>
                        </div>
                    </div>
                </div>
                <div class="accrodion">
                    <div class="accrodion-title">
                        <h4><?php esc_html_e('Qual é o custo de um projeto de design gráfico?', 'textdomain'); ?></h4>
                    </div>
                    <div class="accrodion-content">
                        <div class="inner">
                            <p><?php esc_html_e('Os custos variam conforme a complexidade do projeto e o tipo de design necessário. É fundamental definir claramente os objetivos e o orçamento disponível.', 'textdomain'); ?></p>
                        </div>
                    </div>
                </div>
                
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Services Details End -->

<!-- CTA Two Start -->
<section class="cta-two">
    <div class="cta-two__bg" style="background-image: url(<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/backgrounds/bg.png);"></div>
    <div class="container">
        <div class="cta-two__inner">
            <div class="cta-two__title-box">
                <h3 class="smaller-font">Eleva o teu negócio <br>com design profissional e <span>criativo.</span>
                    <a href="<?php echo esc_url(home_url('/design')); ?>"><i class="icon-right-arrow1"></i></a>
                </h3>
            </div>
            <div class="cta-two__btn">
                <a href="<?php echo esc_url(home_url('/contactar')); ?>">Fala com um especialista
                 
            </div>
        </div>
    </div>
</section>
<!-- CTA Two End -->


<?php get_footer(); ?>
