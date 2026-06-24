<?php get_header(); ?>

<main id="main-content">
  <div class="wrap" style="padding:60px 0;max-width:880px">
    <?php while ( have_posts() ) : the_post(); ?>
      <h1><?php the_title(); ?></h1>
      <div class="prose"><?php the_content(); ?></div>
    <?php endwhile; ?>
  </div>
</main>

<?php get_footer(); ?>
