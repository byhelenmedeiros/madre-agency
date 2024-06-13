<?php 
/*
Template Name: Marketing
*/

get_header(); ?>

<?php get_template_part('components/breadcrumb'); ?>

<!-- Services Details Start -->
<section class="services-details">
    <div class="container-fluid bg-light py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="services-details__right">
                        <h2 class="services-details__title-1 hover-title"><?php esc_html_e('O Marketing Digital tornou-se crucial para as empresas em Portugal que desejam expandir a sua presença online.', 'textdomain'); ?></h2>
                        <p><?php esc_html_e('Desde táticas de SEO a abordagens nas redes sociais, exploramos todas as possibilidades disponíveis.', 'textdomain'); ?></p>
                        <h4 class="services-three__title"><?php esc_html_e('Com as nossas estratégias de marketing digital, capacitamos a tua empresa a atingir novos níveis. Aumentamos o tráfego do teu website, melhoramos a interação com o público e, claro, impulsionamos as tuas vendas.', 'textdomain'); ?></h4>
                        <p class="services-details__text-3"><?php esc_html_e('Independentemente de seres um negócio local pequeno ou uma grande corporação, possuímos as ferramentas e o know-how necessários para impulsionar o teu crescimento. Deixa os nossos especialistas tratarem da tua estratégia de marketing digital, enquanto te concentras no que fazes de melhor.', 'textdomain'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container py-5">
        <p class="section-title__tagline mt-4 mb-0"><span>//</span> <?php esc_html_e('O que temos para tua empresa', 'textdomain'); ?> <span>//</span></p><br>
        <h3 class="services-details__title-2 hover-title"><?php esc_html_e('Conhece os serviços de marketing digital', 'textdomain'); ?></h3>

        <!-- Static Service Cards Start -->
        <div class="services-three__bottom">
            <ul class="services-three__services-list list-unstyled d-flex flex-wrap">
                <?php
                $services = [
                    ['icon' => 'fas fa-bullhorn', 'title' => 'Marketing de Conteúdo', 'delay' => '100ms'],
                    ['icon' => 'fas fa-share-alt', 'title' => 'Gestão de Redes Sociais', 'delay' => '200ms'],
                    ['icon' => 'fas fa-ad', 'title' => 'Publicidade Online', 'delay' => '300ms'],
                    ['icon' => 'fas fa-search', 'title' => 'SEO', 'delay' => '400ms'],
                    ['icon' => 'fas fa-envelope', 'title' => 'Email Marketing', 'delay' => '500ms'],
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
                        <p><?php esc_html_e('Marketing à tua medida.', 'textdomain'); ?></p>
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
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/services/marketing.webp" alt="<?php esc_attr_e('Nossos Benefícios', 'textdomain'); ?>">
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="services-details__benefit-content">
                            <h3 class="services-details__benefit-title"><?php esc_html_e('Queres impulsionar o teu negócio de forma eficaz e com resultados mensuráveis?', 'textdomain'); ?></h3>
                            <p class="services-details__benefit-text"><?php esc_html_e('Junta-te a nós e descobre a diferença que o marketing digital personalizado pode fazer.', 'textdomain'); ?></p>
                            <ul class="services-details__benefit-points list-unstyled">
                                <li>
                                    <div class="icon">
                                        <span class="fa fa-check"></span>
                                    </div>
                                    <div class="text">
                                        <p><?php esc_html_e('Inovação sempre presente.', 'textdomain'); ?></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="fa fa-check"></span>
                                    </div>
                                    <div class="text">
                                        <p><?php esc_html_e('Estratégias personalizadas.', 'textdomain'); ?></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="fa fa-check"></span>
                                    </div>
                                    <div class="text">
                                        <p><?php esc_html_e('Parcerias de confiança.', 'textdomain'); ?></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="fa fa-check"></span>
                                    </div>
                                    <div class="text">
                                        <p><?php esc_html_e('Engajamento contínuo.', 'textdomain'); ?></p>
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
                        <h4><?php esc_html_e('O que é Marketing Digital?', 'textdomain'); ?></h4>
                    </div>
                    <div class="accrodion-content">
                        <div class="inner">
                            <p><?php esc_html_e('O Marketing Digital consiste num conjunto de estratégias e campanhas publicitárias desenvolvidas no ambiente digital e online. O seu principal objetivo é fortalecer a presença online, atrair e manter clientes fiéis, assim como melhorar a reputação da marca.', 'textdomain'); ?></p>
                        </div>
                    </div>
                </div>
                <div class="accrodion active">
                    <div class="accrodion-title">
                        <h4><?php esc_html_e('Quais são as principais táticas de marketing digital?', 'textdomain'); ?></h4>
                    </div>
                    <div class="accrodion-content">
                        <div class="inner">
                            <p><?php esc_html_e('Existem diversas estratégias de marketing digital, tais como a otimização para motores de busca (SEO), o marketing de conteúdo, o envio de emails promocionais, as redes sociais, a publicidade paga e muitas outras.', 'textdomain'); ?></p>
                        </div>
                    </div>
                </div>
                <div class="accrodion">
                    <div class="accrodion-title">
                        <h4><?php esc_html_e('Como é feito o marketing nas redes sociais?', 'textdomain'); ?></h4>
                    </div>
                    <div class="accrodion-content">
                        <div class="inner">
                            <p><?php esc_html_e('O marketing através das redes sociais pode ser dividido em duas formas: orgânico, que consiste na partilha de conteúdo nos vários canais disponíveis, e pago, que implica recorrer a campanhas publicitárias para atingir um público mais vasto. É crucial estabelecer uma estratégia clara e desenvolver material cativante para o envolvimento do público-alvo.', 'textdomain'); ?></p>
                        </div>
                    </div>
                </div>
                <div class="accrodion">
                    <div class="accrodion-title">
                        <h4><?php esc_html_e('Qual é o custo de uma campanha de Marketing Digital?', 'textdomain'); ?></h4>
                    </div>
                    <div class="accrodion-content">
                        <div class="inner">
                            <p><?php esc_html_e('Os custos podem variar bastante dependendo da dimensão do projeto e das estratégias utilizadas. Pode-se optar por custos por hora, que rondam os 25€/h, ou por projeto. É fundamental definir claramente os objetivos e o orçamento disponível.', 'textdomain'); ?></p>
                        </div>
                    </div>
                </div>
                <div class="accrodion">
                    <div class="accrodion-title">
                        <h4><?php esc_html_e('Qual a definição de um plano de Marketing Digital?', 'textdomain'); ?></h4>
                    </div>
                    <div class="accrodion-content">
                        <div class="inner">
                            <p><?php esc_html_e('Um plano de marketing digital é um documento estratégico que estabelece as ações e metas a serem atingidas por meio dos canais digitais. Contempla análises de mercado, identificação do público-alvo, estratégias de conteúdo, otimização para mecanismos de busca, redes sociais e outros elementos.', 'textdomain'); ?></p>
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
                <h3 class="smaller-font">Impulsiona o teu negócio com estratégias <br>de marketing digital <span>eficazes.</span> <a href="<?php echo esc_url(home_url('/marketing-digital')); ?>"><i class="icon-right-arrow1"></i></a>
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
