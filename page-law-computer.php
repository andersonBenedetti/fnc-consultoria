<?php
// Template Name: Lei da informática
?>

<?php
$infos_cards = [
    [
        'text' => 'Crédito financeiro baseado no faturamento bruto dos produtos incentivados'
    ],
    [
        'text' => 'Redução do IPI'
    ],
    [
        'text' => 'Crédito fiscal de até 10,92% sobre o produto objeto da lei da informática'
    ],
    [
        'text' => 'Maior eficiência, modernidade e competitividade no mercado nacional e internacional'
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
        'text' => 'Invistam em pesquisa e desenvolvimento (P&DI);'
    ],
    [
        'text' => 'Realizem auditoria independente (com faturamento acima de 10 milhões);'
    ],
    [
        'text' => 'Tenham sistema de qualidade com a série ISO 9.000.'
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
                <p class="hero-subtitle">soluções > Lei da informática</p>
                <h1 id="hero-title">Lei da Informática: economia fiscal para quem investe em tecnologia.</h1>
                <p>Nossa consultoria oferece suporte completo na habilitação, gestão e prestação de contas do benefício
                    junto aos órgãos competentes, assegurando conformidade legal e o aproveitamento máximo dos
                    incentivos disponíveis.</p>
            </div>

            <div class="container-form">
                <div class="form-intro">
                    <h3>Descubra se sua empresa é elegível à Lei da Informática e saiba como aproveitar o benefício com
                        segurança.</h3>

                    <p>Preencha o formulário e receba mais informações.</p>
                </div>

                <?php echo do_shortcode('[contact-form-7 id="9b72e6f" title="Formulário Lei do bem"]'); ?>
            </div>
        </div>
    </section>

    <section class="section-block" aria-labelledby="section-title">
        <div class="container">
            <h2 id="section-title">O que é a Lei da informática?</h2>
            <p>A Lei da Informática (Lei nº 8.248/1991) é um incentivo fiscal voltado a empresas que produzem bens de
                informática, automação e telecomunicações. Ao investirem em atividades de Pesquisa, Desenvolvimento e
                Inovação (P&DI), essas companhias podem acessar benefícios como a redução do IPI, incentivos de ICMS e
                crédito fiscal de até 10,92% sobre o faturamento dos produtos incentivados.</p>
    </section>

    <section class="section-infos secondary" aria-labelledby="infos-title">
        <div class="container">
            <div class="infos-intro">
                <h2 id="infos-title">Como a Lei da informática pode ajudar sua empresa?</h2>

                <a class="btn" href="#">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/icons/btn-whats.svg" alt="WhatsApp"
                        width="18" height="18">
                    Fale com um especialista
                </a>
            </div>

            <div class="infos-cards">
                <?php foreach ($infos_cards as $card): ?>
                    <div class="infos-card">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/icons/simple-line-icons_check_white.svg"
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
                <p>Empresas dos setores de tecnologia da informação e comunicação:</p>
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

    <section class="section-items secondary" aria-labelledby="items-title">
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
        style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/informatica-contato.webp');">
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