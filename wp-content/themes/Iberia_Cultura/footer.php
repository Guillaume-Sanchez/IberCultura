<?php wp_footer() ?>

<footer>
    <div class="footer-iberia">
        <div class="footer-iberia-content">
            <img class="logo-iberia-footer" src="<?=get_template_directory_uri()?>/assets/images/Logo_Iberia_3.png" alt="logo-iberia">
            <p>Tous droits réservés &copy; Iberia Cultura 2020</p>
        </div>
        <nav class="nav-footer-iberia">
            <?php wp_nav_menu([
            'theme_location' => 'footer',
            ])
            ?>
        </nav>
    </div>
    <p class="author">Auteur du thème :  <a href="https://www.guillaume-sanchez.fr">guillaume-sanchez.fr</a></p>
</footer>
</body>
</html>