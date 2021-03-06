<?php
/**
* The template used to display archive content.
* It is better to use specific templates like category.php, tag.php, date.php, author.php
* @link https://codex.wordpress.org/Creating_an_Archive_Index
* @link https://www.usablewp.com/learn-wordpress/building-the-blog/how-to-build-archive-pages-in-wordpress/
*/
get_header(); ?>

<h1 class="container"><?php the_archive_title(); ?>
</h1>
<div class="container sidebar">
  <div class="sidebar-main grid-2">
    <?php
    while (have_posts()) : the_post();
      get_template_part('components/project-teaser');
    endwhile;
    the_posts_pagination(
        [
            'mid_size' => 2,
            'prev_text' => 'Previous',
            'next_text' => 'Next'
        ]
    );
  ?>
  </div>
  <aside class="sidebar-aside">
    <?php dynamic_sidebar('sidebar-primary'); ?>
  </aside>
</div>

<?php get_footer();