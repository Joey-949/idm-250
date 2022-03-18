<?php
/* Template Name: Archive Template */
?>

<?php get_header(); ?>

<?php
get_template_part(
    'components/heros/home-hero',
    null,
    [
        'heading' => 'Joey McQuillan ',
        'body' => 'Designer and Web Developer'
    ]
);
?>
<section class="featured-works">
  <h2>About Me</h2>
  <div class="works">
    <div class="works__column">
      <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
      </h2>
    </div>

    <div class="container">
        <p>My name is Joey McQuillan. This website is a showcase of the work that I have made over the past 3 years as a student at Drexel student majoring in User Experience and Interactive Design (UX/ID for short), I cherish the art that I create, either making a website with coding, making a desgin of it then doing usability tests, making videos, writing scripts for said videos, and I absolutely adore running.  </p>
    </div>
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

