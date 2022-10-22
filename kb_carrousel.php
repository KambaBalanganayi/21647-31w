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

function genere_boite(){
    $contenu = "<div class='carrousel'>Carrousel</div>";
    return $contenu;
}
add_shortcode('kb_carrousel', 'genere_boite');