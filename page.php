<?php
/**
 * @package PalaceCafe
 */

get_header(); ?>

  <div id="header">
    <a href="http://palacetulsa.com"><img src="http://palacetulsa.com/wp-content/themes/palace_cafe/images/logo_sans_bar.jpg"></a>
  </div>

  <div id="main">
    <div id="sidebar">
    <!-- nav -->
      <?php get_sidebar(); ?>
    <!-- /nav -->
    </div>
    <div id="content">
      <img class="seperator" src="http://palacetulsa.com/wp-content/themes/palace_cafe/images/linedots.jpg"/>

      <div class="article">
      <!-- .article -->
        <?php the_content('<p>Read the rest of this page &raquo;</p>'); ?>

        <?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
      <!-- /.article -->
      </div>

<?php get_footer(); ?>
