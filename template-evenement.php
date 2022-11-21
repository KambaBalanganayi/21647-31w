<?php
/**
* Template Name: Evenement
*
* @package WordPress
* @subpackage igc_31w
*/
?>
 
<?php get_header() ?>
<main>
  <section class="template-evenement-box">
  <?php if (have_posts()): the_post(); ?>
        <?php the_title() ?>
        <?php the_content() ?>     
        <p> venez nous joindre le <?php the_field("date-heure")?>, au <?php the_field('adresse'); ?> </p>   
   <?php endif ?>
  </section>
</main>
<?php get_footer() ?>