<?php 
/*
Template Name: Desenvolvimento Web
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
                        <h2 class="services-details__title-1 hover-title"><?php esc_html_e('O desenvolvimento web é essencial para destacar a tua empresa online.', 'textdomain'); ?></h2>
                        <p><?php esc_html_e('Desde sites institucionais a e-commerce, criamos soluções que se adaptam às tuas necessidades.', 'textdomain'); ?></p>
                        <h4 class="services-three__title"><?php esc_html_e('Com as nossas estratégias de desenvolvimento web, garantimos um site rápido, seguro e responsivo. Aumenta a visibilidade da tua marca e melhora a experiência do utilizador.', 'textdomain'); ?></h4>
                        <p class="services-details__text-3"><?php esc_html_e('Independentemente de seres uma pequena empresa local ou uma grande corporação, temos as ferramentas e o know-how necessários para impulsionar o teu crescimento online.', 'textdomain'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container py-5">
        <p class="section-title__tagline mt-4 mb-0"><span>//</span> <?php esc_html_e('O que oferecemos', 'textdomain'); ?> <span>//</span></p><br>
        <h3 class="services-details__title-2 hover-title"><?php esc_html_e('Conhece os nossos serviços de desenvolvimento web', 'textdomain'); ?></h3>

        <!-- Static Service Cards Start -->
        <div class="services-three__bottom">
            <ul class="services-three__services-list list-unstyled d-flex flex-wrap">
                <?php
                $services = [
                    ['icon' => 'fas fa-code', 'title' => 'Desenvolvimento de Sites', 'delay' => '100ms'],
                    ['icon' => 'fas fa-shopping-cart', 'title' => 'E-commerce', 'delay' => '200ms'],
                    ['icon' => 'fas fa-search', 'title' => 'SEO', 'delay' => '300ms'],
                    ['icon' => 'fas fa-tools', 'title' => 'Manutenção de Sites', 'delay' => '400ms'],
                    ['icon' => 'fas fa-tachometer-alt', 'title' => 'Otimização de Performance', 'delay' => '500ms'],
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
            <p class="section-title__tagline"><span>//</span> <?php esc_html_e('Escolha a MADRE', 'textdomain'); ?> <span>//</span></p>
            <h3 class="services-details__title-2"><?php esc_html_e('Porquê escolher-nos?', 'textdomain'); ?></h3>
            <ul class="services-details__points list-unstyled">
                <li>
                    <div class="icon">
                        <span class="icon-success"></span>
                    </div>
                    <div class="text">
                        <p><?php esc_html_e('Desenvolvimento à tua medida.', 'textdomain'); ?></p>
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
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/services/websites.webp" alt="<?php esc_attr_e('Nossos Benefícios', 'textdomain'); ?>">
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="services-details__benefit-content">
                            <h3 class="services-details__benefit-title"><?php esc_html_e('Queres atualizar e modernizar o teu site? Tens boas ideias mas precisas de as colocar em prática?', 'textdomain'); ?></h3>
                            <p class="services-details__benefit-text"><?php esc_html_e('Junta-te a nós e descobre a diferença que o desenvolvimento web personalizado pode fazer.', 'textdomain'); ?></p>
                            <ul class="services-details__benefit-points list-unstyled">
                                <li>
                                    <div class="icon">
                                        <span class="fa fa-check"></span>
                                    </div>
                                    <div class="text">
                                        <p><?php esc_html_e('Websites com Wordpress', 'textdomain'); ?></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="fa fa-check"></span>
                                    </div>
                                    <div class="text">
                                        <p><?php esc_html_e('Formação da equipa para gestão do site', 'textdomain'); ?></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="fa fa-check"></span>
                                    </div>
                                    <div class="text">
                                        <p><?php esc_html_e('Design de interface incluído', 'textdomain'); ?></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="fa fa-check"></span>
                                    </div>
                                    <div class="text">
                                        <p><?php esc_html_e('Websites a preços acessíveis', 'textdomain'); ?></p>
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
                        <h4><?php esc_html_e('O que é Desenvolvimento Web?', 'textdomain'); ?></h4>
                    </div>
                    <div class="accrodion-content">
                        <div class="inner">
                            <p><?php esc_html_e('Desenvolvimento Web envolve a criação e manutenção de sites. Pode ser desde a criação de simples páginas de texto até complexas aplicações web.', 'textdomain'); ?></p>
                        </div>
                    </div>
                </div>
                <div class="accrodion active">
                    <div class="accrodion-title">
                        <h4><?php esc_html_e('Quais são as principais estratégias de desenvolvimento web?', 'textdomain'); ?></h4>
                    </div>
                    <div class="accrodion-content">
                        <div class="inner">
                            <p><?php esc_html_e('As principais estratégias incluem design responsivo, otimização de performance, SEO, segurança web e manutenção contínua.', 'textdomain'); ?></p>
                        </div>
                    </div>
                </div>
                <div class="accrodion">
                    <div class="accrodion-title">
                        <h4><?php esc_html_e('Como melhorar a performance do meu site?', 'textdomain'); ?></h4>
                    </div>
                    <div class="accrodion-content">
                        <div class="inner">
                            <p><?php esc_html_e('Melhorar a performance do teu site envolve otimizar imagens, usar cache, minimizar código CSS e JavaScript, e escolher um bom serviço de alojamento.', 'textdomain'); ?></p>
                        </div>
                    </div>
                </div>
                <div class="accrodion">
                    <div class="accrodion-title">
                        <h4><?php esc_html_e('Qual é o custo de um projeto de desenvolvimento web?', 'textdomain'); ?></h4>
                    </div>
                    <div class="accrodion-content">
                        <div class="inner">
                            <p><?php esc_html_e('Os custos podem variar bastante dependendo da complexidade do projeto e das funcionalidades desejadas. É importante definir claramente os objetivos e o orçamento disponível.', 'textdomain'); ?></p>
                        </div>
                    </div>
                </div>
                <div class="accrodion">
                    <div class="accrodion-title">
                        <h4><?php esc_html_e('O que é um plano de manutenção de site?', 'textdomain'); ?></h4>
                    </div>
                    <div class="accrodion-content">
                        <div class="inner">
                            <p><?php esc_html_e('Um plano de manutenção de site garante que o teu site permaneça atualizado, seguro e a funcionar corretamente, com atualizações regulares e suporte técnico.', 'textdomain'); ?></p>
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
                <h3 class="smaller-font">Converse com de nossos especialista da equipa de desenvolvedores,<br> Vamos renovar o teu 
                    <span>website?</span><a href="<?php echo esc_url(home_url('/desenvolvimento-web')); ?>"><i class="icon-right-arrow1"></i></a>
                </h3>
            </div>
            <div class="cta-two__btn">
                <a href="<?php echo esc_url(home_url('/contactar')); ?>">Fala com um especialista
                  </a>
            </div>
        </div>
    </div>
</section>
<!-- CTA Two End -->


<?php get_footer(); ?>
