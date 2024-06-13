<?php
/* Template Name: Landing Page */

get_header();
get_template_part('components/breadcrumb'); ?>

<div class="page-wrapper">

    <!-- Services Details Start -->
    <section class="services-details">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="services-details__right">
                        <h3 class="services-details__title-1">Estás a pensar em iniciar a tua jornada no mundo digital?</h3>
                        <p class="services-details__text-1">Temos a solução ideal para ti! Com o nosso serviço de desenvolvimento de websites Low-cost, simplificamos todo o processo para ti. Basta partilhares a tua visão connosco e encarregamo-nos do resto!</p>
                        <h3 class="services-details__title-2">Design exclusivo</h3>
                        <p class="services-details__text-2">Receberás um layout personalizado para o teu website, com um design exclusivo. Preenche o formulário, envia-nos o conteúdo que desejas e nós enviaremos o teu layout. Terás liberdade para efetuar quaisquer alterações necessárias e deixar o teu website exatamente ao teu gosto!
</p>
                        <h3 class="services-details__title-2">Low-cost</h3>
                        <p class="services-details__text-2"> Tudo isto por apenas 199€! Em até 10 dias, terás o teu website disponível e pronto para conquistar o mundo online</p>
                        <h3 class="services-details__title-2">Oferta Domínio</h3>
                        <p class="services-details__text-2"> E como se isso não bastasse, oferecemos também um domínio.pt gratuito durante o primeiro ano e alojamento web no primeiro mês.</p>
                        
                        <div class="services-details__cta">
                            <a href="<?php echo esc_url(home_url('/formulario-briefing')); ?>" class="thm-btn services-details__cta-btn">Preencha o formulário</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="services-details__sidebar">
                        <div class="services-details__services-list">
                            <ul class="services-details__services list-unstyled">
                                <h3 class="services-details__title-1">Conheça mais serviços</h3>
                                <li><a href="<?php echo home_url('/website-development'); ?>">Sites imersivos<span class="fa fa-arrow-right"></span></a></li>
                                <li><a href="<?php echo home_url('/app-development'); ?>">Identidade visual<span class="fa fa-arrow-right"></span></a></li>
                                <li><a href="<?php echo home_url('/digital-marketing'); ?>">Gestão de redes sociais<span class="fa fa-arrow-right"></span></a></li>
                                <li><a href="<?php echo home_url('/graphic-designing'); ?>">Captação de fotografias<span class="fa fa-arrow-right"></span></a></li>
                                <li class="active"><a href="<?php echo home_url('/content-writting'); ?>">Lojas virtuais<span class="fa fa-arrow-right"></span></a></li>
                            </ul>
                        </div>
                        <div class="banner-one">
                            <div class="banner-one__img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/resources/banner-one-img.png" alt="">
                            </div>
                            <h3 class="banner-one__title">Procuras <br> um website <br> mais<br> personalizado?</h3>
                            <div class="banner-one__btn-box">
                                <a href="<?php echo home_url('/contactar'); ?>" class="banner-one__btn thm-btn">Fale com um especialista</a>
                            </div>
                        </div>
                       
                </div>
            </div>
        </div>
    </section>
    <!-- Services Details End -->

    <!-- Benefícios Start -->
    <section class="services-three">
        <div class="services-three__bg" style="background-image: url(assets/images/backgrounds/services-three-bg.jpg);"></div>
        <div class="container">
            <div class="services-three__top">
                <div class="row">
                    <div class="col-xl-7 col-lg-6">
                        <div class="services-three__left">
                            <div class="section-title text-left">
                                <p class="about-one__text-1"><span>//</span> Os nossos serviços <span>//</span></p>
                                <h2 class="section-title__title">O que oferecemos <br> aos nossos clientes</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6">
                        <div class="services-three__right">
                            <p class="services-three__text">Oferecemos uma gama completa de soluções para atender às suas necessidades digitais, desde o design de websites até ao marketing de conteúdos.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="services-three__bottom">
                <ul class="services-three__services-list list-unstyled">
                    <li>
                        <div class="services-three__single wow fadeInUp" data-wow-delay="100ms">
                            <div class="services-three__single-inner">
                                <div class="services-three__single-bg" style="background-image: url(assets/images/backgrounds/services-three-single-bg.jpg);"></div>
                                <div class="services-three__icon">
                                    <span class="icon-webpage"></span>
                                </div>
                                <h3 class="services-three__title"><a href="website-development.html">Soluções de Websites</a></h3>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="services-three__single wow fadeInUp" data-wow-delay="200ms">
                            <div class="services-three__single-inner">
                                <div class="services-three__single-bg" style="background-image: url(assets/images/backgrounds/services-three-single-bg.jpg);"></div>
                                <div class="services-three__icon">
                                    <span class="icon-growth"></span>
                                </div>
                                <h3 class="services-three__title"><a href="graphic-designing.html">Soluções de Design Gráfico</a></h3>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="services-three__single wow fadeInUp" data-wow-delay="300ms">
                            <div class="services-three__single-inner">
                                <div class="services-three__single-bg" style="background-image: url(assets/images/backgrounds/services-three-single-bg.jpg);"></div>
                                <div class="services-three__icon">
                                    <span class="icon-online-shopping"></span>
                                </div>
                                <h3 class="services-three__title"><a href="digital-marketing.html">Soluções de Marketing</a></h3>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="services-three__single wow fadeInUp" data-wow-delay="400ms">
                            <div class="services-three__single-inner">
                                <div class="services-three__single-bg" style="background-image: url(assets/images/backgrounds/services-three-single-bg.jpg);"></div>
                                <div class="services-three__icon">
                                    <span class="icon-planning"></span>
                                </div>
                                <h3 class="services-three__title"><a href="content-writting.html">Soluções de Conteúdo</a></h3>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="services-three__single wow fadeInUp" data-wow-delay="500ms">
                            <div class="services-three__single-inner">
                                <div class="services-three__single-bg" style="background-image: url(assets/images/backgrounds/services-three-single-bg.jpg);"></div>
                                <div class="services-three__icon">
                                    <span class="icon-app-development"></span>
                                </div>
                                <h3 class="services-three__title"><a href="app-development.html">Soluções de Aplicações</a></h3>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- Benefícios End -->

   <!-- Testemunhos Start -->
   <section class="testimonial-two">
        <div class="container">
            <div class="row">
            <div class="section-title text-left">
                                <p class="about-one__text-1"><span>//</span> Nossos clientes <span>//</span></p>
                                <h2 class="section-title__title">O que eles dizem<br>sobre nossos sites</h2>
                            </div>
                <div class="col-lg-6">
                    <div class="testimonial-two__item" >
                        <div class="testimonial-two__inner-content">
                            <div class="testimonial-two__inner-content-box">
                                <p class="testimonial-two__text">Já sou cliente a muitos anos, dessa vez precisei de criar um site para a clínica mas estava com orçamento limitado pedi a equipe pra fazermos uma landing page, gostei muito, é otimo pra quem está começando, eles entram em contato com a gente pra apresentar o layout, tive sempre a par de tudo. Valeu muito a pena</p>
                                <h3 class="testimonial-two__client-name">Joselma Marques<span> .MyFeet - Brasil</span></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="testimonial-two__item">
                        <div class="testimonial-two__inner-content">
                            <div class="testimonial-two__inner-content-box">
                                <p class="testimonial-two__text">Foi exatamente o que pedi, o meu site ficou muito giro, entraram em contacto comigo para dar algumas recomendações para deixar o meu website melhor, são mesmo muito bons, eu recomendo. </p>
                                <h3 class="testimonial-two__client-name">Ana Pereira <span> .Cliente da MadreAgency - Porto<span> .</span></h3>
                            </div>
                        </div>
                    </div>
                </div>
              
               
            </div>
        </div>
    </section>
    <!-- Testemunhos End -->

    <!-- FAQ Start -->
    <section class="faq-page">
        <div class="container">
            <div class="section-title text-left">
                <p class="about-one__text-1"><span>//</span> As nossas perguntas frequentes <span>//</span></p>
                <h2 class="section-title__title">Perguntas frequentes e respostas</h2>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="faq-page__right">
                        <div class="accrodion-grp" data-grp-name="faq-one-accrodion">
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>O que acontece aos meus dados se eu cancelar?</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>Os seus dados permanecerão seguros e confidenciais. Poderá solicitar uma cópia dos mesmos antes de cancelar.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accrodion active">
                                <div class="accrodion-title">
                                    <h4>Até quantas aterações tenho direito no meu site?</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>Podes alterar quando quiser no processo de desenvolvimento do layout. Desde que não saia do briefing inicial. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>Meu site terá custos além dos 199€?</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>Não, porém podes escolher se após o lançamento do website o teu alojamento continuará connosco ou irá escolher outro alojamento, a migração terá custo de 5.99€ caso queira sair de nosso alojamento web.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>Terei suporte e manutenção gratuita durante quanto tempo?</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>Após o lançamento terá um mês de suporte e manutenção. Após esse periodo podes solicitar manutenção e suporte incluídos ao ter o site site em nosso alojamento web. Desde 29,90.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>Quais atividades são realizadas no desenvolvimento?</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>As atividades incluem a criação de design, desenvolvimento de funcionalidades, testes de qualidade e a implementação final.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>Poderei ter uma loja online?</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>O nosso serviço de website lowcost não está incluso lojas online, mas podes falar com um especialista da equipa de web para saber as melhores soluções pra si.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>Posso contactar a equipa de vendas para conhecer outros serviços?</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>Estamos sempre prontos para conversar consigo totalmente sem compromisso.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- FAQ End -->


</div>

<?php get_footer(); ?>
