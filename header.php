<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
    <title>
        <?php if (is_front_page() || is_home()) {
            echo get_bloginfo('name');
        } else {
            echo wp_title('');
        } ?>
    </title>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <script src="<?php echo get_template_directory_uri(); ?>/js/vue.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Albert+Sans:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/swiper-bundle.min.css" />
    <?php wp_head(); ?>
</head>

<body>

    <div id="app">

        <?php
        $menu_items = [
            ['label' => 'Sobre nós', 'url' => '/sobre-nos/'],
            ['label' => 'Soluções', 'url' => '/solucoes/'],
            ['label' => 'Contato', 'url' => '/contato/'],
        ];
        ?>

        <header id="header" role="banner">
            <div class="container">
                <div class="content">
                    <a href="/" class="logo" aria-label="Ir para a página inicial">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo-fnc.svg"
                            alt="FNC - Voltar para página inicial" loading="lazy" width="150" height="53">
                    </a>

                    <div class="menu-items">
                        <div class="menu-header" :class="{ active: activeMenu }" role="navigation"
                            aria-label="Menu principal">
                            <button class="btn-menu" @click="activeMenu = !activeMenu"
                                :aria-expanded="activeMenu ? 'true' : 'false'" aria-controls="menu"
                                aria-label="Abrir ou fechar menu de navegação">
                                <span></span>
                            </button>
                            <ul class="menu-list" id="menu">
                                <?php
                                foreach ($menu_items as $item) {
                                    $is_external = strpos($item['url'], 'https://wa.me') === 0;

                                    echo '<li><a class="menu-item" href="' . esc_url($item['url']) . '"'
                                        . ($is_external ? ' target="_blank" rel="noopener"' : '')
                                        . ' aria-label="' . esc_html($item['label']) . '">'
                                        . esc_html($item['label']) . '</a></li>';
                                }
                                ?>

                                <li>
                                    <a class="btn" href="#">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/icons/btn-whats.svg"
                                            alt="WhatsApp" width="18" height="18">
                                        Fale com um especialista
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>