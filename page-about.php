<?php
// Template Name: Sobre nós
?>

<?php
$logos = [
    ['arquivo' => 'empresa-1.webp', 'alt' => 'Logo da Empresa 1'],
    ['arquivo' => 'empresa-2.webp', 'alt' => 'Logo da Empresa 2'],
    ['arquivo' => 'empresa-3.webp', 'alt' => 'Logo da Empresa 3'],
    ['arquivo' => 'empresa-4.webp', 'alt' => 'Logo da Empresa 4'],
    ['arquivo' => 'empresa-5.webp', 'alt' => 'Logo da Empresa 5'],
];

$solutions = [
    ['title' => 'Lei do Bem', 'text' => 'Benefício fiscal para empresas que investem em P&DI, possibilitando recuperação do valor investido como dedução no IRPJ e CSLL.', 'link' => '#'],
    ['title' => 'Lei da Informática', 'text' => 'Incentivo fiscal destinado a indústrias dos setores de automação, informática e telecomunicações, que possibilita o aproveitamento de crédito tributário superior a 10% sobre o faturamento dos produtos incentivados.', 'link' => '#'],
    ['title' => 'Compliance Fiscal', 'text' => 'Uso de estratégias legais para reduzir a carga tributária de forma preventiva, possibilitando a otimização da tributação empresarial por meio da fruição de benefícios e incentivos previstos em lei.', 'link' => '#'],
    ['title' => 'MOVER', 'text' => 'Apoio ao setor automotivo por meio de incentivos fiscais que envolvem a redução do IPI e a isenção do Imposto de Importação (II), com o objetivo de estimular a inovação tecnológica e promover ganhos em eficiência energética.', 'link' => '#'],
    ['title' => 'FINEP', 'text' => 'Linha de crédito subsidiada pelo Governo Federal para empresas que investem em P&DI, com foco no desenvolvimento de projetos tecnológicos e no fortalecimento da competitividade.', 'link' => '#'],
];

$theme_uri = get_stylesheet_directory_uri();

$about_cards = [
    [
        'icon' => 'marketeq_chart-column-grow.svg',
        'text' => 'Especialistas em benefícios fiscais para empresas inovadoras'
    ],
    [
        'icon' => 'marketeq_tax.svg',
        'text' => 'Equipe formada por advogados e consultores tributários'
    ],
    [
        'icon' => 'tributaristas.svg',
        'text' => 'Tributaristas como mola propulsora para impulsionar resultados e maximizar operações'
    ],
    [
        'icon' => 'consultoria.svg',
        'text' => 'Consultoria personalizada para atuar nos segmentos de forma global e individualizada'
    ],
];
?>

<?php get_header(); ?>

<main id="pg-about" role="main">
    <section class="section-hero" aria-labelledby="hero-title">
        <div class="container">
            <div class="hero-infos">
                <p class="hero-subtitle">Sobre nós</p>
                <h1 id="hero-title">Somos a FNC Consultoria, referência em inteligência tributária para empresas em
                    crescimento.</h1>
                <p>Especialistas em transformar obrigações fiscais em oportunidades estratégicas para organizações que
                    pensam no longo prazo.</p>
                <a class="btn-bottom" href="#sobre-nos" aria-label="Seção Sobre nós">
                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M10.88 -0.000232697C4.864 -0.000232697 0 4.86377 0 10.8798C0 16.8958 4.864 21.7598 10.88 21.7598C16.896 21.7598 21.76 16.8958 21.76 10.8798C21.76 4.86377 16.896 -0.000232697 10.88 -0.000232697ZM10.88 20.4798C5.568 20.4798 1.28 16.1918 1.28 10.8798C1.28 5.56777 5.568 1.27977 10.88 1.27977C16.192 1.27977 20.48 5.56777 20.48 10.8798C20.48 16.1918 16.192 20.4798 10.88 20.4798Z"
                            fill="white" />
                        <path
                            d="M16.192 9.79151L10.88 15.1035L5.568 9.79151L4.672 10.6875L10.88 16.8955L17.088 10.6875L16.192 9.79151Z"
                            fill="white" />
                        <path d="M10.24 16H11.52V5.12H10.24V16Z" fill="white" />
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <section class="section-customers" aria-labelledby="customers-title">
        <div class="container">
            <h2 id="customers-title">Empresas que confiam em nós para crescer com eficiência fiscal</h2>

            <div class="swiper customers-carousel">
                <div class="swiper-wrapper">
                    <?php
                    foreach ($logos as $logo): ?>
                        <div class="swiper-slide">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/<?php echo esc_attr($logo['arquivo']); ?>"
                                alt="<?php echo esc_attr($logo['alt']); ?>" loading="lazy" width="151" height="102">
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <section class="section-about" aria-labelledby="about-title">
        <div class="container">
            <div class="about-infos">
                <h2 id="about-title">Sobre nós</h2>

                <p>Somos uma consultoria tributária especializada em gerar economia fiscal com segurança jurídica,
                    assegurando total compliance e conformidade com a legislação vigente.</p>

                <p>Acreditamos que a inovação é o motor do desenvolvimento e, por isso, estamos ao lado das empresas que
                    impulsionam o país, promovendo uma tributação justa, estratégica e legalmente embasada.</p>

                <p>Atuamos na otimização de processos fiscais, maximização de créditos e resultados, além de oferecer
                    soluções inovadoras que ampliam a eficiência financeira e a competitividade das companhias.</p>

                <p>Trabalhamos de forma integrada na implementação de benefícios fiscais, incentivos à inovação e
                    planejamento tributário, unindo conhecimento técnico especializado a resultados reais.</p>
            </div>

            <div class="about-cards">
                <?php foreach ($about_cards as $card): ?>
                    <div class="about-card">
                        <img src="<?php echo esc_url($theme_uri . '/icons/' . $card['icon']); ?>"
                            alt="Ícone <?php echo esc_attr($card['text']); ?>" loading="lazy" width="41" height="41">
                        <p><?php echo esc_html($card['text']); ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="section-solutions" aria-labelledby="solutions-title" style="margin-top: 50px;">
        <div class="solutions-infos">
            <h2 id="solutions-title">Conheça nossas soluções</h2>
            <p>95% das empresas elegíveis ainda não aproveitam os incentivos fiscais disponíveis</p>
            <a class="btn" href="/contato" aria-label="Fale com um especialista da FNC Consultoria">Conheça todas nossas
                soluções</a>
        </div>

        <div class="swiper solutions-carousel">
            <div class="swiper-buttons">
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>

            <div class="swiper-wrapper">
                <?php
                foreach ($solutions as $solution): ?>
                    <a href="<?php echo esc_attr($solution['link']); ?>" class="swiper-slide">
                        <h3><?php echo esc_attr($solution['title']); ?></h3>
                        <p><?php echo esc_attr($solution['text']); ?></p>
                        <span class="btn-slide">
                            Conheça
                            <svg width="7" height="7" viewBox="0 0 7 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M2.63352 6.49484L5.62836 3.5L2.63352 0.505155L3.13867 -1.5299e-07L6.63867 3.5L3.13867 7L2.63352 6.49484Z"
                                    fill="white" />
                                <path
                                    d="M6.13379 3.13916L6.13379 3.86081L-0.000230821 3.86081L-0.000230789 3.13916L6.13379 3.13916Z"
                                    fill="white" />
                            </svg>
                        </span>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>