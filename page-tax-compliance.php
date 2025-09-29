<?php
// Template Name: Compliance fiscal
?>

<?php
$infos_cards = [
    [
        'text' => 'Cruzamento de dados com a legislação vigente'
    ],
    [
        'text' => 'Identificação de inconsistências em momento prévio'
    ],
    [
        'text' => 'Fruição de benefícios, gerando maior competitividade no mercado'
    ],
    [
        'text' => 'Apresentação de matriz de risco para utilização de créditos'
    ],
];

$benefits_list = [
    [
        'text' => 'Empresas que apurem pelo lucro real ou presumido;'
    ],
    [
        'text' => 'Desenvolvam produtos com classificação de NCM incentivada;'
    ],
    [
        'text' => 'Tenham regularidade fiscal (CND ou CPEN);'
    ],
];

$items = [
    ['title' => '01', 'text' => 'Avaliação de enquadramento e elegibilidade'],
    ['title' => '02', 'text' => 'Estruturação dos relatórios técnicos exigidos pela Receita'],
    ['title' => '03', 'text' => 'Apoio jurídico e contábil para segurança e conformidade'],
    ['title' => '04', 'text' => 'Acompanhamento contínuo até a entrega final'],
];
?>

<?php get_header(); ?>

<main id="pg-solutions" role="main">
    <section class="section-hero" aria-labelledby="hero-title"
        style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/hero-informatica.webp');">
        <div class="container">
            <div class="hero-infos">
                <p class="hero-subtitle">soluções > Compliance fiscal</p>
                <h1 id="hero-title">Compliance fiscal inteligente para resultados sustentáveis</h1>
                <p>Oferecemos soluções que alinham conformidade tributária e visão estratégica para fortalecer o
                    crescimento do seu negócio.</p>
            </div>

            <div class="container-form">
                <div class="form-intro">
                    <h3>Descubra riscos, oportunidades e caminhos para fortalecer o compliance fiscal do seu negócio
                    </h3>

                    <p>Preencha o formulário e receba mais informações.</p>
                </div>

                <?php echo do_shortcode('[contact-form-7 id="9b72e6f" title="Formulário Lei do bem"]'); ?>
            </div>
        </div>
    </section>

    <section class="section-block" aria-labelledby="section-title">
        <div class="container">
            <h2 id="section-title">O que é Compliance fiscal?</h2>
            <p>Identificação de ativos e passivos tributários nas esferas federal e estadual, por meio de tecnologia
                especializada e cruzamento inteligente de dados. A análise abrange os últimos cinco anos da empresa e
                assegura conformidade fiscal, promovendo segurança e eficiência na gestão tributária.</p>
    </section>

    <section class="section-infos" aria-labelledby="infos-title">
        <div class="container">
            <div class="infos-intro">
                <h2 id="infos-title">Como o Compliance fiscal pode ajudar sua empresa?</h2>

                <a class="btn" href="#">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/icons/btn-whats.svg" alt="WhatsApp"
                        width="18" height="18">
                    Fale com um especialista
                </a>
            </div>

            <div class="infos-cards">
                <?php foreach ($infos_cards as $card): ?>
                    <div class="infos-card">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/icons/simple-line-icons_check.svg"
                            alt="Check" width="40" height="40">
                        <p><?php echo esc_html($card['text']); ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="section-benefits" aria-labelledby="benefits-title">
        <div class="container">
            <div class="benefits-intro">
                <h2 id="benefits-title">Quem pode se beneficiar?</h2>

                <a class="btn secondary" href="#">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/icons/btn-whats.svg" alt="WhatsApp"
                        width="18" height="18">
                    Fale com um especialista
                </a>
            </div>

            <div class="list-container">
                <p>Empresas de qualquer setor que:</p>
                <div class="benefits-list">
                    <?php foreach ($benefits_list as $list): ?>
                        <div class="benefits-item">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/icons/simple-line-icons_check.svg"
                                alt="Check" width="11" height="11">
                            <p><?php echo esc_html($list['text']); ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <section class="section-items" aria-labelledby="items-title">
        <div class="container">
            <div class="items-infos">
                <h2 id="items-title">Nós atuamos do diagnóstico à formalização do pleito</h2>
                <p>Isso significa:</p>
            </div>

            <div class="items-container">
                <?php
                foreach ($items as $item): ?>
                    <div class="item-card">
                        <h3><?php echo esc_attr($item['title']); ?></h3>
                        <p><?php echo esc_attr($item['text']); ?></p>
                    </div>
                <?php endforeach; ?>
            </div>

            <a class="btn tertiary" href="/contato" aria-label="Fale com um especialista da FNC Consultoria">Fale com
                um especialista</a>
        </div>
    </section>

    <section class="section-contact secondary" aria-labelledby="contact-title"
        style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/compilance-contato.webp');">
        <h2 id="contact-title"><span>Conte conosco para crescer com eficiência fiscal e</span> potencializar
            resultados</h2>

        <div class="contact-content">
            <a class="btn" href="#">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/icons/btn-whats.svg" alt="WhatsApp" width="18"
                    height="18">
                Fale com um especialista
            </a>
            <p>e descubra as oportunidades para sua empresa</p>
        </div>
    </section>
</main>

<?php get_footer(); ?>