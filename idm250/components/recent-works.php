<?php
// https://developer.wordpress.org/reference/classes/wp_query/
$arg = [
    'post_type' => 'idm-projects',
    'post_status' => 'publish',
    'posts_per_page' => 4,
    'order' => 'DESC'
];
$project_query = new WP_Query($arg);
?>

<section class="featured-works">
  <h2>About Me</h2>
  <div class="works">
    <?php
    while ($project_query->have_posts()) : $project_query->the_post(); ?>
    <div class="works__column">
      <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
      </h2>
            <h3>The link above will go to my projects
      </h3>
    </div>

    <div class="container">
        <p>My name is Joey McQuillan. This website is a showcase of the work that I have made over the past 3 years as a student at Drexel student majoring in User Experience and Interactive Design (UX/ID for short), I cherish the art that I create, either making a website with coding, making a desgin of it then doing usability tests, making videos, writing scripts for said videos, and I absolutely adore running.  </p>
    </div>
    <?php
    endwhile;
    wp_reset_postdata();
  ?>
  </div>
</section>