<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<a href="#main-content" class="skip-link"><?php esc_html_e( 'Skip to main content', 'awaremed' ); ?></a>

<!-- ================================================================
     UTILITY BAR
================================================================ -->
<div class="utility-bar" role="banner">
  <div class="util-inner wrap">
    <span class="util-disclaimer"><?php esc_html_e( 'Educational content only — not medical advice. Individual results vary.', 'awaremed' ); ?></span>
    <div class="util-right">
      <a href="tel:+14234306170">(423) 430-6170</a>
      <a href="<?php echo esc_url( home_url( '/#contact' ) ); ?>" class="btn btn-orange btn-sm"><?php esc_html_e( 'Book a Consultation', 'awaremed' ); ?></a>
      <span class="util-lang">
        <?php
        /*
         * Language switcher — if using WPML or Polylang, replace with their
         * language switcher function (e.g. do_action('wpml_add_language_selector')).
         * Default static links below for manual multilingual setup:
         */
        $current_lang = defined( 'ICL_LANGUAGE_CODE' ) ? ICL_LANGUAGE_CODE : ( get_locale() === 'ar' ? 'ar' : ( get_locale() === 'fr_FR' ? 'fr' : ( get_locale() === 'es_ES' ? 'es' : 'en' ) ) );
        ?>
        <?php echo $current_lang === 'en' ? '<strong>EN</strong>' : '<a href="' . esc_url( home_url( '/' ) ) . '">EN</a>'; ?>
        &nbsp;|&nbsp;
        <?php echo $current_lang === 'ar' ? '<strong>AR</strong>' : '<a href="' . esc_url( home_url( '/ar/' ) ) . '">AR</a>'; ?>
        &nbsp;|&nbsp;
        <?php echo $current_lang === 'fr' ? '<strong>FR</strong>' : '<a href="' . esc_url( home_url( '/fr/' ) ) . '">FR</a>'; ?>
        &nbsp;|&nbsp;
        <?php echo $current_lang === 'es' ? '<strong>ES</strong>' : '<a href="' . esc_url( home_url( '/es/' ) ) . '">ES</a>'; ?>
      </span>
    </div>
  </div>
</div>

<!-- ================================================================
     SITE HEADER & NAVIGATION
================================================================ -->
<header class="site-header" role="banner">
  <div class="header-inner wrap">

    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="<?php bloginfo( 'name' ); ?> Home">
      <?php
      if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) {
          the_custom_logo();
      } else {
      ?>
      <img src="https://assets.cdn.filesafe.space/VICaX0SdHaI41cp5dwWa/media/686c0e8a6b73c6044cfeeda0.png"
           alt="<?php bloginfo( 'name' ); ?>"
           class="brand-logo"
           onerror="this.style.display='none';this.nextSibling.style.display='block'">
      <span style="display:none;font-family:'Playfair Display',Georgia,serif;font-size:1.3rem;font-weight:700;color:#0c5f84;">AWAREmed</span>
      <?php } ?>
    </a>

    <button class="nav-toggle" aria-expanded="false" aria-label="<?php esc_attr_e( 'Open menu', 'awaremed' ); ?>" aria-controls="primary-nav">
      <span></span><span></span><span></span>
    </button>

    <nav class="primary-nav" id="primary-nav" role="navigation" aria-label="<?php esc_attr_e( 'Main navigation', 'awaremed' ); ?>">
      <?php
      if ( has_nav_menu( 'primary' ) ) {
          wp_nav_menu( array(
              'theme_location' => 'primary',
              'menu_class'     => '',
              'container'      => false,
          ) );
      } else {
          // Fallback single-page anchor navigation
      ?>
      <ul>
        <li><a href="<?php echo esc_url( home_url( '/#home' ) ); ?>"><?php esc_html_e( 'Home', 'awaremed' ); ?></a></li>
        <li class="has-sub">
          <a href="<?php echo esc_url( home_url( '/#about' ) ); ?>"><?php esc_html_e( 'About', 'awaremed' ); ?> <span class="caret">&#9660;</span></a>
          <ul class="submenu">
            <li><a href="<?php echo esc_url( home_url( '/#about' ) ); ?>"><?php esc_html_e( 'About AWAREmed', 'awaremed' ); ?></a></li>
            <li><a href="<?php echo esc_url( home_url( '/#dr-akoury' ) ); ?>"><?php esc_html_e( 'Dr. Dalal Akoury, MD', 'awaremed' ); ?></a></li>
          </ul>
        </li>
        <li class="has-sub">
          <a href="<?php echo esc_url( home_url( '/#services' ) ); ?>"><?php esc_html_e( 'Services', 'awaremed' ); ?> <span class="caret">&#9660;</span></a>
          <ul class="submenu">
            <li><a href="<?php echo esc_url( home_url( '/#integrative-oncology' ) ); ?>"><?php esc_html_e( 'Integrative Oncology Support', 'awaremed' ); ?></a></li>
            <li><a href="<?php echo esc_url( home_url( '/#iv-therapy' ) ); ?>"><?php esc_html_e( 'IV Therapy &amp; Hydration', 'awaremed' ); ?></a></li>
            <li><a href="<?php echo esc_url( home_url( '/#hormone-optimization' ) ); ?>"><?php esc_html_e( 'Hormone Optimization (BHRT)', 'awaremed' ); ?></a></li>
            <li><a href="<?php echo esc_url( home_url( '/#regenerative-medicine' ) ); ?>"><?php esc_html_e( 'Regenerative Medicine', 'awaremed' ); ?></a></li>
            <li><a href="<?php echo esc_url( home_url( '/#chelation-detox' ) ); ?>"><?php esc_html_e( 'Chelation &amp; Detoxification', 'awaremed' ); ?></a></li>
            <li><a href="<?php echo esc_url( home_url( '/#gut-health' ) ); ?>"><?php esc_html_e( 'Gut Health &amp; Functional Medicine', 'awaremed' ); ?></a></li>
            <li><a href="<?php echo esc_url( home_url( '/#brain-cognitive' ) ); ?>"><?php esc_html_e( 'Brain &amp; Cognitive Wellness', 'awaremed' ); ?></a></li>
            <li><a href="<?php echo esc_url( home_url( '/#skin-anti-aging' ) ); ?>"><?php esc_html_e( 'Skin &amp; Anti-Aging', 'awaremed' ); ?></a></li>
          </ul>
        </li>
        <li><a href="<?php echo esc_url( home_url( '/#patient-education' ) ); ?>"><?php esc_html_e( 'Patient Education', 'awaremed' ); ?></a></li>
        <li><a href="<?php echo esc_url( home_url( '/#new-patients' ) ); ?>"><?php esc_html_e( 'New Patients', 'awaremed' ); ?></a></li>
        <li><a href="<?php echo esc_url( home_url( '/#contact' ) ); ?>"><?php esc_html_e( 'Contact', 'awaremed' ); ?></a></li>
      </ul>
      <?php } ?>
    </nav>

    <a href="<?php echo esc_url( home_url( '/#contact' ) ); ?>" class="btn btn-green header-cta"><?php esc_html_e( 'Request a Consultation', 'awaremed' ); ?></a>

  </div>
</header>
