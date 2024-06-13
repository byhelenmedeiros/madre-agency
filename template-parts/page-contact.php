<?php
/**
 * Template Name: Contact Page
 */

get_header();
?>

<?php get_template_part('components/breadcrumb'); ?>

<section class="contact-page">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-6">
                <div class="contact-page__left">
                    <div class="section-title text-left">
                        <p class="section-title__tagline"><span>//</span>Entre em contacto<span>//</span></p>
                        <h2 class="section-title__title  hover-title">Entre em contacto connosco</h2>
                  
                        <h4 class="section-title__text py-4">Estamos ansiosos para ajudá-lo a alcançar os seus objetivos. <br>Vamos dar início a esta jornada juntos!</h4>
                    </div>
                    <ul class="contact-page__points list-unstyled">
                        <li>
                            <div class="icon">
                                <span class="icon-help"></span>
                            </div>
                            <div class="content">
                                <p>Estamos no Whatsapp </p>
                                <h4><a href="tel:+351911156324">+351 911 156 324</a></h4>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <span class="icon-mailbox"></span>
                            </div>
                            <div class="content">
                                <p>O nosso e-mail</p>
                                <h4><a href="mailto:geral@madreagency.pt">geral@madreagency.pt</a></h4>
                            </div>
                        </li>
                       
                    </ul>
                    <div class="contact-page__social">
                    <a href="https://www.facebook.com/madreagency.pt"><i class="fab fa-facebook-square"></i></a>
                            <a href="https://www.instagram.com/madreagency.pt/"><i class="fab fa-instagram"></i></a>
                            <a href="https://www.linkedin.com/company/madreagencypt/"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-7 col-lg-6">
            <?php echo do_shortcode('[contact-form-7 id="9444cb8" title="Formulário de contacto"]'); ?>

    </div>
</section>
<!--Contact Page End-->


<?php get_footer(); ?>
