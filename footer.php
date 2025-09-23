<?php
$footer_menu_solucoes = [
    ['label' => 'Lei do Bem', 'url' => '#'],
    ['label' => 'Lei da Informática', 'url' => '#'],
    ['label' => 'Compliance Fiscal', 'url' => '#'],
    ['label' => 'MOVER', 'url' => '#'],
    ['label' => 'FINEP', 'url' => '#'],
];

$footer_menu_institucional = [
    ['label' => 'Sobre a FNC', 'url' => '#'],
    ['label' => 'Lei da Informática', 'url' => '#'],
    ['label' => 'Compliance Fiscal', 'url' => '#'],
    ['label' => 'MOVER', 'url' => '#'],
    ['label' => 'FINEP', 'url' => '#'],
];
?>

<footer id="footer">
    <div class="container">
        <div class="footer-content">
            <div class="footer-column">
                <a href="/" class="logo" aria-label="Voltar para página inicial">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo-footer.svg"
                        alt="Logo FNC - Voltar para página inicial" loading="lazy" width="142" height="51">
                </a>

                <ul>
                    <li>
                        <a href="#">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/icons/whatsapp-footer.svg"
                                alt="Logo WhatsApp" loading="lazy" width="18" height="18">
                            <span>48 9999 0000</span>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/icons/email-footer.svg" alt="Email"
                                loading="lazy" width="18" height="18">
                            <span>contato@fncconsultoria.com.br</span>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/icons/local-footer.svg" alt="Maps"
                                loading="lazy" width="18" height="18">
                            <span>R. Gen. Augusto Soares dos Santos, 100, sala 165, Parque Industrial Lagoinha, Ribeirão
                                Preto/SP</span>
                        </a>
                    </li>
                </ul>
            </div>

            <nav class="footer-column" aria-labelledby="footer-solucoes">
                <h3 id="footer-solucoes">Nossas soluções</h3>
                <ul>
                    <?php
                    foreach ($footer_menu_solucoes as $item) {
                        echo '<li><a class="footer-link" href="' . esc_url($item['url']) . '" aria-label="' . esc_html($item['label']) . '">' . esc_html($item['label']) . '</a></li>';
                    }
                    ?>
                </ul>
            </nav>

            <nav class="footer-column" aria-labelledby="footer-institucional">
                <h3 id="footer-institucional">Institucional</h3>
                <ul>
                    <?php
                    foreach ($footer_menu_institucional as $item) {
                        echo '<li><a class="footer-link" href="' . esc_url($item['url']) . '" aria-label="' . esc_html($item['label']) . '">' . esc_html($item['label']) . '</a></li>';
                    }
                    ?>
                </ul>
            </nav>

            <nav class="footer-column" aria-labelledby="footer-social">
                <ul class="footer-social">
                    <li>
                        <a href="#" title="Siga no Instagram" target="_blank" rel="noopener noreferrer">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/icons/instagram-footer.svg"
                                alt="Instagram" loading="lazy" width="23" height="23">
                        </a>
                    </li>

                    <li>
                        <a href="#" title="Siga no Facebook" target="_blank" rel="noopener noreferrer">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/icons/facebook-footer.svg"
                                alt="Facebook" loading="lazy" width="21" height="21">
                        </a>
                    </li>

                    <li>
                        <a href="#" title="Siga no LinkedIn" target="_blank" rel="noopener noreferrer">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/icons/linkedin-footer.svg"
                                alt="LinkedIn" loading="lazy" width="22" height="22">
                        </a>
                    </li>
                </ul>
            </nav>
        </div>

        <div class="footer-bottom">
            <p>FNC Consultoria. Todos os direitos reservados.</p>
            <p>Desenvolvido por <a href="#" rel="noopener noreferrer" target="_blank">Blume Web Studio</a></p>
        </div>
    </div>
</footer>

<a href="https://wa.me/554899210021" class="whatsapp-float" target="_blank" aria-label="Fale conosco no WhatsApp">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/icons/whatsapp-footer.svg" alt="WhatsApp" width="40"
        height="40">
</a>

<script>
    const app = new Vue({
        el: '#app',
        data: {
            activeMenu: false,
        },
        created() { },
        methods: {}
    });
</script>

</div>
<script src="<?php echo get_template_directory_uri(); ?>/js/swiper-bundle.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/slider.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/popup.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/toggle.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/load-more.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/success-form.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/reset-filters-back.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/summary-toggle.js"></script>
<script type="text/javascript"
    src="https://d335luupugsy2.cloudfront.net/js/rdstation-forms/stable/rdstation-forms.min.js"></script>
<script type="text/javascript">
    new RDStationForms('site-08-2025-faad81bf493f4bd2d703').createForm();
</script>
<?php wp_footer(); ?>
</body>

</html>