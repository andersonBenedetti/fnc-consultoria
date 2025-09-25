<?php
// Template Name: Home
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
?>

<?php get_header(); ?>

<main id="pg-home" role="main">

    <section class="section-intro" aria-labelledby="intro-title">
        <h1 id="intro-title">Inteligência fiscal aplicada à <span>inovação</span></h1>
        <p>Especialistas em Lei do Bem, Lei da Informática e programas de incentivo fiscal para empresas.</p>
        <a class="btn" href="/contato" aria-label="Fale com um especialista da FNC Consultoria">Fale com um
            especialista</a>
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

    <section class="section-solutions" aria-labelledby="solutions-title">
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

    <section class="section-about" aria-labelledby="about-title">
        <div class="container">
            <div class="about-infos">
                <h1 id="about-title">Sobre nós</h1>
                <p>Somos uma consultoria tributária especializada em gerar economia fiscal com segurança jurídica,
                    assegurando total compliance e conformidade com a legislação vigente.</p>
                <a class="btn" href="/contato" aria-label="Fale com um especialista da FNC Consultoria">Conheça a FNC
                    Consultoria</a>
            </div>

            <div class="about-cards">
                <div class="about-card">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/icons/marketeq_chart-column-grow.svg"
                        alt="icone" loading="lazy" width="41" height="41">
                    <p>Especialistas em benefícios fiscais para empresas inovadoras</p>
                </div>

                <div class="about-card">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/icons/marketeq_tax.svg" alt="icone"
                        loading="lazy" width="41" height="41">
                    <p>Equipe formada por advogados e consultores tributários</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section-results" aria-labelledby="results-title">
        <div class="results-infos container">
            <h2 id="results-title"><span>Conte conosco para crescer com eficiência fiscal e</span> potencializar
                resultados</h2>

            <div class="results-bottom">
                <a class="btn" href="#">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/icons/btn-whats.svg" alt="WhatsApp"
                        width="18" height="18">
                    Agende uma conversa
                </a>
                <p>e descubra as oportunidades para sua empresa</p>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>