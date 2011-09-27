<?php
/**
 * @package PalaceCafe
 */

get_header(); ?>

  <div id="header">
    <a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/logo_sans_bar.jpg"></a>
  </div>

  <div id="main">
    <div id="sidebar">
    <!-- nav -->
      <?php get_sidebar(); ?>
    <!-- /nav -->
    </div>
    <div id="content">
      <img class="seperator" src="<?php bloginfo('template_directory'); ?>/images/linedots.jpg"/>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      <div class="article">
      <!-- .article -->
        <?php the_content('<p>Read the rest of this page &raquo;</p>'); ?>

        <?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
      <!-- /.article -->
      </div>
<?php endwhile; ?>

<?php get_footer(); ?>
