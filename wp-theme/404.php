<?php get_header(); ?>

<main id="main-content">
  <div class="wrap" style="padding:80px 0;text-align:center">
    <span class="eyebrow">404</span>
    <h1>Page not found</h1>
    <p class="lead">The page you're looking for doesn't exist or has been moved.</p>
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-green" style="margin-top:16px">Return to Home</a>
  </div>
</main>

<?php get_footer(); ?>
