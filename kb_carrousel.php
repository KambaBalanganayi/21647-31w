<?php
/**
* @package Carrousel
* @version 1.0.0
*
*/
/*
Plugin Name: KB_carrousel
Plugin URI: 
Description: This is my very first Wordpress plugin
Version: 1.0.0
*/

// filemtime()  // retourne en milliseconde le temps de la dernière sauvegarde
// plugin_dir_path() // retourne le chemin du répertoire du plugin
// __FILE__ // le fichier en train de s'exécuter
// wp_enqueue_style() // Intègre le link:css dans la page
// wp_enqueue_script() // intègre le script dans la page
// wp_enqueue_scripts // le hook

function kbc_enqueue()
{
    $version_css = filemtime(plugin_dir_path(__FILE__) ."style.css");
    $version_js = filemtime(plugin_dir_path(__FILE__) ."js/carrousel.js");

    wp_enqueue_style("kbc_style_carrousel",
                    plugin_dir_url(__FILE__) ."style.css",
                    array(),
                    $version_css,
                    false);
    wp_enqueue_script("kbc_js_carrousel",
                    plugin_dir_url(__FILE__) ."js/carrousel.js",
                    array(),
                    $version_js,
                    true);
}
add_action('wp_enqueue_scripts', 'kbc_enqueue');


function genere_boite(){
    $contenu = "
    <button hidden class='btn_modale'></button>
    <div class='carrousel btn_modale'>
        <button class='btn-fermer'> X </button>
        <figure class='carrousel__figure'></figure>
        <form class='carrousel__form'></form>
    </div>";
    return $contenu;
}
add_shortcode('kb_carrousel', 'genere_boite');