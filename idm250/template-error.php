<?php
/* Template Name: 404 ERROR */
?>

<?php get_header(); ?>



<?php while (have_posts()) : the_post(); ?>
<div class="" style="max-width: 800px; margin: 0 auto;">
  <h1 class=""><?php the_title();?>
  </h1>

  <div class="">
    <!-- start content -->
    <?php the_content(); ?>
    <!-- end content -->
  </div>
</div>
<?php endwhile; ?>

<?php get_footer();
