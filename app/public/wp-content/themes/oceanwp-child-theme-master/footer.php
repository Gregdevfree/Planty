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
    echo '<div class="footer-home"><h2>Pied de page pour la page home</h2>';
    echo '<div class="footer-container"><p class="footer-text"><a href="' . home_url() . '">Mentions légales</a></p>';
}

// Footer pour la page 'nous-rencontrer'
if (is_page('nous-rencontrer')) {
    echo '<div class="footer-nous-rencontrer"><h2>Pied de page pour la page nous-rencontrer</h2>';
    echo '<div class="footer-container"><p class="footer-text"><a href="' . home_url() . '">Mentions légales</a></p>';
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