<?php get_header(); ?>

<main id="main-content">
  <div class="wrap" style="padding:60px 0;max-width:880px">
    <?php while ( have_posts() ) : the_post(); ?>
      <article>
        <h1><?php the_title(); ?></h1>
        <p class="form-note" style="margin-bottom:24px"><?php echo esc_html( get_the_date() ); ?></p>
        <div class="prose"><?php the_content(); ?></div>
      </article>
    <?php endwhile; ?>
  </div>
</main>

<?php get_footer(); ?>
