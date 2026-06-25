<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <?php if ( ! is_front_page() ) : ?>
  <meta name="description" content="<?php echo esc_attr( get_the_excerpt() ?: get_bloginfo( 'description' ) ); ?>">
  <?php else : ?>
  <meta name="description" content="AWAREmed Health & Wellness Resource Center — Physician-led integrative and functional medicine in Johnson City, TN. Book a consultation with Dr. Dalal Akoury, MD.">
  <?php endif; ?>
  <meta property="og:type" content="website">
  <meta property="og:title" content="<?php bloginfo( 'name' ); ?> — <?php bloginfo( 'description' ); ?>">
  <meta property="og:description" content="Integrative & functional medicine — Johnson City, TN.">
  <meta property="og:url" content="<?php echo esc_url( home_url( '/' ) ); ?>">
  <meta property="og:site_name" content="AWAREmed">
  <meta name="twitter:card" content="summary_large_image">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<a class="skip-link" href="#main-content">Skip to main content</a>

<!-- Utility Bar -->
<div class="utility-bar" role="complementary" aria-label="Contact information">
  <div class="wrap">
    <div class="utility-info">
      <span>
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
        <a href="tel:+14234306170">(423) 430-6170</a>
      </span>
      <span>
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
        <a href="mailto:awaremed@gmail.com">awaremed@gmail.com</a>
      </span>
      <span>
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
        1604 Lamons Lane, Suite 202 &middot; Johnson City, TN 37604
      </span>
    </div>
    <nav class="lang-switcher" aria-label="Language">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="active" hreflang="en" lang="en">EN</a>
      <a href="<?php echo esc_url( home_url( '/ar/' ) ); ?>" hreflang="ar" lang="ar">AR</a>
      <a href="<?php echo esc_url( home_url( '/fr/' ) ); ?>" hreflang="fr" lang="fr">FR</a>
      <a href="<?php echo esc_url( home_url( '/es/' ) ); ?>" hreflang="es" lang="es">ES</a>
    </nav>
  </div>
</div>

<!-- Main Header -->
<header class="site-header" id="site-header" role="banner">
  <div class="header-inner">

    <!-- Brand -->
    <a class="brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="AWAREmed Home">
      <?php if ( function_exists( 'get_custom_logo' ) && has_custom_logo() ) : ?>
        <?php echo get_custom_logo(); ?>
      <?php else : ?>
        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/logo.png' ); ?>"
             alt="AWAREmed" height="52" loading="eager"
             onerror="this.style.display='none'">
        <div class="brand-text">
          <strong>AWAREmed</strong>
          <span>Health &amp; Wellness Resource Center</span>
        </div>
      <?php endif; ?>
    </a>

    <!-- Primary Nav -->
    <nav id="primary-nav" aria-label="Primary navigation">
      <ul class="primary-nav" role="list">

        <li role="none">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" role="menuitem"><?php esc_html_e( 'Home', 'awaremed' ); ?></a>
        </li>

        <!-- Services Mega Menu -->
        <li role="none">
          <a href="<?php echo esc_url( home_url( '/#services' ) ); ?>" aria-haspopup="true" aria-expanded="false" role="menuitem">
            <?php esc_html_e( 'Services', 'awaremed' ); ?>
            <svg class="caret" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
          </a>
          <div class="mega-menu" role="menu" aria-label="Services submenu">

            <a class="mega-item" href="<?php echo esc_url( home_url( '/services/functional-medicine/' ) ); ?>" role="menuitem">
              <span class="mega-icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 3H5a2 2 0 00-2 2v4m6-6h10a2 2 0 012 2v4M9 3v18m0 0h10a2 2 0 002-2V9M9 21H5a2 2 0 01-2-2V9m0 0h18"/></svg>
              </span>
              <div class="mega-item-text">
                <strong>Functional Medicine</strong>
                <span>Root-cause, whole-person care</span>
              </div>
            </a>

            <a class="mega-item" href="<?php echo esc_url( home_url( '/services/iv-therapy/' ) ); ?>" role="menuitem">
              <span class="mega-icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/></svg>
              </span>
              <div class="mega-item-text">
                <strong>IV Therapy</strong>
                <span>Intravenous nutrient infusions</span>
              </div>
            </a>

            <a class="mega-item" href="<?php echo esc_url( home_url( '/services/regenerative-medicine/' ) ); ?>" role="menuitem">
              <span class="mega-icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
              </span>
              <div class="mega-item-text">
                <strong>Regenerative Medicine</strong>
                <span>PRP, stem-cell &amp; peptide therapy</span>
              </div>
            </a>

            <a class="mega-item" href="<?php echo esc_url( home_url( '/services/hormone-optimization/' ) ); ?>" role="menuitem">
              <span class="mega-icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="3"/><path d="M12 1v2M12 21v2M4.22 4.22l1.42 1.42M18.36 18.36l1.42 1.42M1 12h2M21 12h2M4.22 19.78l1.42-1.42M18.36 5.64l1.42-1.42"/></svg>
              </span>
              <div class="mega-item-text">
                <strong>Hormone Optimization</strong>
                <span>BHRT &amp; hormonal balance</span>
              </div>
            </a>

            <a class="mega-item" href="<?php echo esc_url( home_url( '/services/weight-management/' ) ); ?>" role="menuitem">
              <span class="mega-icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"/></svg>
              </span>
              <div class="mega-item-text">
                <strong>Weight Management</strong>
                <span>Medical, sustainable weight loss</span>
              </div>
            </a>

            <a class="mega-item" href="<?php echo esc_url( home_url( '/services/preventive-care/' ) ); ?>" role="menuitem">
              <span class="mega-icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
              </span>
              <div class="mega-item-text">
                <strong>Preventive Care</strong>
                <span>Proactive health optimisation</span>
              </div>
            </a>

            <a class="mega-item" href="<?php echo esc_url( home_url( '/services/diagnostic-testing/' ) ); ?>" role="menuitem">
              <span class="mega-icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
              </span>
              <div class="mega-item-text">
                <strong>Diagnostic Testing</strong>
                <span>Advanced labs &amp; biomarker panels</span>
              </div>
            </a>

            <a class="mega-item" href="<?php echo esc_url( home_url( '/services/nutritional-therapy/' ) ); ?>" role="menuitem">
              <span class="mega-icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 3v1m0 16v1M4.22 4.22l.707.707M18.364 18.364l.707.707M1 12h1M21 12h1M4.22 19.78l.707-.707M18.364 5.636l.707-.707"/><circle cx="12" cy="12" r="4"/></svg>
              </span>
              <div class="mega-item-text">
                <strong>Nutritional Therapy</strong>
                <span>Therapeutic nutrition &amp; supplements</span>
              </div>
            </a>

          </div><!-- .mega-menu -->
        </li>

        <li role="none">
          <a href="<?php echo esc_url( home_url( '/#about' ) ); ?>" role="menuitem"><?php esc_html_e( 'About', 'awaremed' ); ?></a>
        </li>

        <li role="none">
          <a href="<?php echo esc_url( home_url( '/#testimonials' ) ); ?>" role="menuitem"><?php esc_html_e( 'Testimonials', 'awaremed' ); ?></a>
        </li>

        <li role="none">
          <a href="<?php echo esc_url( home_url( '/#faq' ) ); ?>" role="menuitem"><?php esc_html_e( 'FAQ', 'awaremed' ); ?></a>
        </li>

        <li role="none">
          <a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>" role="menuitem"><?php esc_html_e( 'Blog', 'awaremed' ); ?></a>
        </li>

      </ul>
    </nav>

    <!-- Header CTA -->
    <div class="header-cta">
      <a href="tel:+14234306170" class="btn btn-outline btn-sm">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
        Call Now
      </a>
      <a href="<?php echo esc_url( home_url( '/#contact' ) ); ?>" class="btn btn-primary btn-sm">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
        Book Consultation
      </a>
    </div>

    <!-- Mobile Toggle -->
    <button class="nav-toggle" aria-label="Open menu" aria-expanded="false" aria-controls="primary-nav">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" aria-hidden="true">
        <line x1="3" y1="6" x2="21" y2="6"/>
        <line x1="3" y1="12" x2="21" y2="12"/>
        <line x1="3" y1="18" x2="21" y2="18"/>
      </svg>
    </button>

  </div><!-- .header-inner -->
</header>
