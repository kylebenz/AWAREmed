<?php
/**
 * Main template fallback — WordPress requires this file.
 * Front page content is handled by front-page.php.
 */
get_header(); ?>

<main id="main-content">
  <div class="wrap" style="padding:60px 0">
    <?php if ( have_posts() ) : ?>
      <div class="grid g3">
        <?php while ( have_posts() ) : the_post(); ?>
          <article class="card">
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <p><?php the_excerpt(); ?></p>
            <a href="<?php the_permalink(); ?>" class="btn btn-outline btn-sm">Read more</a>
          </article>
        <?php endwhile; ?>
      </div>
      <div style="margin-top:40px;text-align:center">
        <?php the_posts_pagination(); ?>
      </div>
    <?php else : ?>
      <p><?php esc_html_e( 'No posts found.', 'awaremed' ); ?></p>
    <?php endif; ?>
  </div>
</main>

<?php get_footer(); ?>
