<?php
// Template Name: Contato
?>

<?php get_header(); ?>

<main id="pg-solutions" role="main">
    <section class="section-hero secondary" aria-labelledby="hero-title"
        style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/hero-contato.webp');">
        <div class="container">
            <div class="hero-infos">
                <p class="hero-subtitle">Contato</p>
                <h1 id="hero-title">Entre em contato e descubra como podemos contribuir com o crescimento da sua
                    empresa.</h1>
                <p>Entre em contato e descubra como podemos apoiar sua empresa com inteligência tributária.</p>
            </div>
        </div>
    </section>

    <section class="section-form" aria-labelledby="form-title">
        <div class="container">
            <div class="container-form">
                <div class="form-intro">
                    <h3 id="form-title">Descubra se sua empresa pode acessar incentivos fiscais com o suporte técnico da
                        FNC.</h3>
                    <p>Preencha o formulário e receba mais informações.</p>
                </div>

                <?php echo do_shortcode('[contact-form-7 id="9b72e6f" title="Formulário Lei do bem"]'); ?>
            </div>

            <address class="contact-info">
                <a href="tel:+554899990000" class="contact-item">
                    <div class="contact-header">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/icons/streamline-logos_whatsapp-logo.svg"
                            alt="Telefone/WhatsApp" width="41" height="41">
                        <h3>Telefone/WhatsApp</h3>
                    </div>
                    <p>48 9999 0000</p>
                </a>

                <a href="mailto:contato@fncconsultoria.com.br" class="contact-item">
                    <div class="contact-header">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/icons/marketeq_envelope.svg"
                            alt="E-mail" width="41" height="41">
                        <h3>E-mail</h3>
                    </div>
                    <p>contato@fncconsultoria.com.br</p>
                </a>

                <a href="https://maps.google.com/?q=R.+Gen.+Augusto+Soares+dos+Santos,+100,+sala+165,+Parque+Industrial+Lagoinha,+Ribeirão+Preto,+SP"
                    target="_blank" rel="noopener noreferrer" class="contact-item">
                    <div class="contact-header">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/icons/teenyicons_pin-outline.svg"
                            alt="Endereço" width="41" height="41">
                        <h3>Endereço</h3>
                    </div>
                    <p>R. Gen. Augusto Soares dos Santos, 100, sala 165, Parque Industrial Lagoinha, Ribeirão Preto/SP
                    </p>
                </a>
            </address>
        </div>
    </section>
</main>

<?php get_footer(); ?>