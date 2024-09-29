<?php
/**
 * The template for displaying the footer.
 *
 * @package OceanWP WordPress theme
 */

?>

	</main><!-- #main -->


<?php

// Footer pour la page 'home'
if (is_page('home')) {
    echo '<div class="footer-home"><ol class="image-list">';
    $imageSrc = get_stylesheet_directory_uri() . '/assets/Planty6.png'; // Lien relatif vers l'image
    for ($i = 1; $i <= 16; $i++) {
        echo "<li><img src=\"$imageSrc\" alt=\"Image $i\"></li>";
    }
    echo '</ol></div>'; // Fermeture de la div footer-home
    echo '<div class="footer-container"><p class="footer-text"><a href="' . home_url() . '">Mentions légales</a></p></div>'; // Fermeture de la div footer-container
}


// Footer pour la page 'nous-rencontrer'
if (is_page('nous-rencontrer')) {
    echo '<div class="footer-nous-rencontrer"><ol class="image-list">';
    $imageSrc = get_stylesheet_directory_uri() . '/assets/Planty6.png'; // Lien relatif vers l'image
    for ($i = 1; $i <= 16; $i++) {
        echo "<li><img src=\"$imageSrc\" alt=\"Image $i\"></li>";
    }
    echo '</ol></div>'; // Fermeture de la div footer-nous-rencontrer
    echo '<div class="footer-container"><p class="footer-text"><a href="' . home_url() . '">Mentions légales</a></p></div>'; // Fermeture de la div footer-container
}


// Footer pour la page 'commander'
if (is_page('commander')) {
    echo '<div class="footer-container"><p class="footer-text"><a href="' . home_url() . '">Mentions légales</a></p>';
}
?>
    <?php wp_footer(); ?>
</footer>
</body>
</html>