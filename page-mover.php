<?php
// Template Name: Mover
?>

<?php
$infos_cards = [
    [
        'text' => 'Isenção ou redução do Imposto de Importação'
    ],
    [
        'text' => 'Alíquotas diferenciadas de IPI'
    ],
    [
        'text' => 'Créditos financeiros entre R$ 0,50 a R$ 3,20 para cada R$ 1,00 investido'
    ],
    [
        'text' => 'Adoção de tecnologia limpa e materiais recicláveis'
    ],
];

$benefits_list = [
    [
        'text' => 'Apurem IRPJ pelo lucro real;'
    ],
    [
        'text' => 'Tenham regularidade fiscal (CND ou CPEN);'
    ],
    [
        'text' => 'Investimento mínimo em P&DI;'
    ],
    [
        'text' => 'Centro de custo específico de P&DI.'
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
        style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/hero-mover.webp');">
        <div class="container">
            <div class="hero-infos">
                <p class="hero-subtitle">soluções > MOVER</p>
                <h1 id="hero-title">Incentivo MOVER: benefícios para empresas que inovam na mobilidade.</h1>
                <p>Nossa consultoria oferece suporte completo na habilitação, gestão e prestação de contas do benefício
                    junto aos órgãos competentes, assegurando conformidade legal e o aproveitamento máximo dos
                    incentivos disponíveis.</p>
            </div>

            <div class="container-form">
                <div class="form-intro">
                    <h3>Descubra se sua empresa pode se beneficiar do programa MOVER com o apoio da nossa consultoria.
                    </h3>

                    <p>Preencha o formulário e receba mais informações.</p>
                </div>

                <?php echo do_shortcode('[contact-form-7 id="9b72e6f" title="Formulário Lei do bem"]'); ?>
            </div>
        </div>
    </section>

    <section class="section-block" aria-labelledby="section-title">
        <div class="container">
            <h2 id="section-title">O que é o MOVER?</h2>
            <p>O Programa MOVER é um incentivo fiscal do Governo Federal que substitui o Rota 2030, voltado para a
                indústria automotiva. Ele estimula a inovação, a descarbonização e a eficiência energética por meio de
                benefícios como créditos financeiros sobre investimentos em P&DI, redução do IPI (IPI Verde) e isenção
                do Imposto de Importação para autopeças sem similar nacional.</p>
            <p>Além de gerar economia tributária, o programa fortalece a competitividade e promove práticas sustentáveis
                no setor automotivo.</p>
    </section>

    <section class="section-infos tertiary" aria-labelledby="infos-title">
        <div class="container">
            <div class="infos-intro">
                <h2 id="infos-title">Como o MOVER pode ajudar sua empresa?</h2>

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
                <p>Empresas do setor automotivo que:</p>
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