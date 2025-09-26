<?php
// Template Name: Lei do bem
?>

<?php
$infos_cards = [
    [
        'text' => 'Retorno de 20 a 27% dos valores investidos em P&DI como dedução para IRPJ'
    ],
    [
        'text' => 'Redução de 50% do IPI'
    ],
    [
        'text' => 'Depreciação integral de maquinários e aparelhos'
    ],
    [
        'text' => 'Alíquota zero de IRRF para marcas e patentes no exterior'
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
        'text' => 'Tenham auferido lucro no período referente aos dispêndios;'
    ],
    [
        'text' => 'Invistam em pesquisa e desenvolvimento (P&DI).'
    ],
];
?>

<?php get_header(); ?>

<main id="pg-solutions" role="main">
    <section class="section-hero" aria-labelledby="hero-title"
        style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/hero-lei-do-bem.webp');">
        <div class="container">
            <div class="hero-infos">
                <p class="hero-subtitle">soluções > Lei do bem</p>
                <h1 id="hero-title">Transforme investimento em inovação em economia fiscal.</h1>
                <p>A FNC te ajuda a aplicar corretamente a Lei do Bem e aproveitar todos os benefícios tributários que
                    sua empresa tem direito.</p>
            </div>

            <div class="container-form">
                <div class="form-intro">
                    <h3>Descubra se você se enquadra na Lei do Bem e veja quanto pode economizar com o apoio da nossa
                        Consultoria.</h3>

                    <p>Preencha o formulário e receba mais informações.</p>
                </div>

                <?php echo do_shortcode('[contact-form-7 id="9b72e6f" title="Formulário Lei do bem"]'); ?>
            </div>
        </div>
    </section>

    <section class="section-block" aria-labelledby="section-title">
        <div class="container">
            <h2 id="section-title">O que é a Lei do Bem?</h2>
            <p>A Lei do Bem (Lei nº 11.196/2005) é um importante incentivo fiscal destinado às empresas que realizam
                investimentos em pesquisa, desenvolvimento e inovação. Ao aderir ao benefício, é possível deduzir uma
                parcela significativa desses investimentos diretamente do Imposto de Renda (IRPJ) e da Contribuição
                Social
                sobre o Lucro Líquido (CSLL), gerando economia tributária com segurança jurídica.</p>
    </section>

    <section class="section-infos" aria-labelledby="infos-title">
        <div class="container">
            <div class="infos-intro">
                <h2 id="infos-title">Como a Lei do Bem pode ajudar sua empresa?</h2>

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
</main>

<?php get_footer(); ?>