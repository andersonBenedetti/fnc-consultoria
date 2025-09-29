<?php
// Template Name: FINEP
?>

<?php
$infos_cards = [
    [
        'text' => 'Financiamento com condições facilitadas e carência estendida'
    ],
    [
        'text' => 'Acesso a programas e editais temáticos'
    ],
    [
        'text' => 'Apoio à modernização industrial'
    ],
    [
        'text' => 'Atuação complementar com lei do bem, lei da informática, MOVER e outros benefícios fiscais'
    ],
];

$benefits_list = [
    [
        'text' => 'Apurem pelo lucro presumido ou real;'
    ],
    [
        'text' => 'Tenham regularidade fiscal (CND ou CPEN);'
    ],
    [
        'text' => 'Tenham auferido lucro no período referente aos dispêndios;'
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
        style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/hero-finep.webp');">
        <div class="container">
            <div class="hero-infos">
                <p class="hero-subtitle">soluções > FINEP</p>
                <h1 id="hero-title">FINEP: financiamento estratégico para empresas que investem em inovação.</h1>
                <p>Suporte completo para que sua empresa acesse o financiamento ideal com segurança e assertividade.</p>
            </div>

            <div class="container-form">
                <div class="form-intro">
                    <h3>Descubra se seu projeto se enquadra nos critérios da FINEP e como captar recursos com segurança.
                    </h3>

                    <p>Preencha o formulário e receba mais informações.</p>
                </div>

                <?php echo do_shortcode('[contact-form-7 id="9b72e6f" title="Formulário Lei do bem"]'); ?>
            </div>
        </div>
    </section>

    <section class="section-block" aria-labelledby="section-title">
        <div class="container">
            <h2 id="section-title">O que é a FINEP?</h2>
            <p>A FINEP (Financiadora de Estudos e Projetos) é uma empresa pública vinculada ao Ministério da Ciência,
                Tecnologia e Inovação, que oferece apoio financeiro a projetos de Pesquisa, Desenvolvimento e Inovação
                (P&DI).</p>
            <p>Por meio de financiamentos com juros reduzidos e subvenções econômicas, a FINEP possibilita a promoção do
                avanço tecnológico de empresas, universidades e instituições, aliando a competitividade do mercado ao
                conhecimento intelectual no cenário brasileiro.</p>
    </section>

    <section class="section-infos" aria-labelledby="infos-title">
        <div class="container">
            <div class="infos-intro">
                <h2 id="infos-title">Como a FINEP pode ajudar sua empresa?</h2>

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

    <section class="section-contact" aria-labelledby="contact-title">
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