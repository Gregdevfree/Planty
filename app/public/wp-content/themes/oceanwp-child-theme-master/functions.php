<?php
/**
 * OceanWP Child Theme Functions
 *
 * When running a child theme (see http://codex.wordpress.org/Theme_Development
 * and http://codex.wordpress.org/Child_Themes), you can override certain
 * functions (those wrapped in a function_exists() call) by defining them first
 * in your child theme's functions.php file. The child theme's functions.php
 * file is included before the parent theme's file, so the child theme
 * functions will be used.
 *
 * Text Domain: oceanwp
 * @link http://codex.wordpress.org/Plugin_API
 *
 */

/**
 * Load the parent style.css file
 *
 * @link http://codex.wordpress.org/Child_Themes
 */
function oceanwp_child_enqueue_parent_style() {

	// Dynamically get version number of the parent stylesheet (lets browsers re-cache your stylesheet when you update the theme).
	$theme   = wp_get_theme( 'OceanWP' );
	$version = $theme->get( 'Version' );

	// Load the stylesheet.
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'oceanwp-style' ), $version );
	
}

add_action( 'wp_enqueue_scripts', 'oceanwp_child_enqueue_parent_style' );

// Ajout d'un filtre pour modifier les éléments de menu WP
add_filter( 'wp_nav_menu_items', 'nav_menu_add_admin', 10, 2 );

// Fonction pour ajouter l'élément Admin à la deuxième position dans le menu
function nav_menu_add_admin( $items, $args ) {
    if ( is_user_logged_in() ) {
        // Créer l'élément "Admin"
        $admin_item = '<li class="menu_item"><a href="' . admin_url() . '">Admin</a></li>';

        // Convertir les éléments de menu en tableau pour faciliter la modification
        $menu_items = explode('</li>', $items);
        
        // Ajouter l'élément "Admin" à la deuxième position
        array_splice($menu_items, 1, 0, $admin_item); // Insert après le premier élément
        
        // Reconvertir le tableau en chaîne de caractères
        $items = implode('</li>', $menu_items);
    }
    
    return $items;
}
function add_commander_button_to_menu( $items, $args ) {
    // Condition pour n'ajouter le bouton que dans le menu principal
    if ( $args->theme_location == 'main_menu' ) {

        // Définition du bouton HTML pour "Commander"
        $commander_button = '<li id="menu-item-commander" class="menu-item">
            <a href="http://planty.local/commander/" class="menu-link commander-button">
                <span class="text-wrap">Commander</span>
            </a>
        </li>';

        // Injecter le bouton à la troisième position dans le menu (avant le troisième élément)
        $menu_items = explode('</li>', $items);  // On divise chaque item de menu
        array_splice($menu_items, 2, 0, $commander_button);  // On insère le bouton à la 3ème position (index 2)

        // Retourner le menu réassemblé
        $items = implode('</li>', $menu_items);
    }

    return $items;
}
add_filter( 'wp_nav_menu_items', 'add_commander_button_to_menu', 10, 2 );
