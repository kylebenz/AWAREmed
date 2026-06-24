<footer class="site-footer" aria-label="<?php esc_attr_e( 'Site footer', 'awaremed' ); ?>">
  <div class="wrap footer-grid">

    <div class="foot-col">
      <?php if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) : ?>
        <?php the_custom_logo(); ?>
      <?php else : ?>
        <img src="https://assets.cdn.filesafe.space/VICaX0SdHaI41cp5dwWa/media/686c0e8a6b73c6044cfeeda0.png"
             alt="<?php bloginfo( 'name' ); ?>"
             class="foot-logo"
             onerror="this.style.display='none'">
      <?php endif; ?>
      <p><?php esc_html_e( 'AWAREmed Health &amp; Wellness Resource Center', 'awaremed' ); ?><br>
      <?php esc_html_e( 'Physician-led integrative &amp; functional medicine', 'awaremed' ); ?><br>
      <?php esc_html_e( 'Johnson City, Tennessee', 'awaremed' ); ?></p>
      <div class="foot-contact">
        <a href="tel:+14234306170">(423) 430-6170</a><br>
        <a href="mailto:awaremed@gmail.com">awaremed@gmail.com</a><br>
        1604 Lamons Lane, Suite 202<br>
        Johnson City, TN 37604
      </div>
    </div>

    <div class="foot-col">
      <h3><?php esc_html_e( 'Services', 'awaremed' ); ?></h3>
      <ul>
        <li><a href="<?php echo esc_url( home_url( '/#integrative-oncology' ) ); ?>"><?php esc_html_e( 'Integrative Oncology', 'awaremed' ); ?></a></li>
        <li><a href="<?php echo esc_url( home_url( '/#iv-therapy' ) ); ?>"><?php esc_html_e( 'IV Therapy &amp; Hydration', 'awaremed' ); ?></a></li>
        <li><a href="<?php echo esc_url( home_url( '/#hormone-optimization' ) ); ?>"><?php esc_html_e( 'Hormone Optimization', 'awaremed' ); ?></a></li>
        <li><a href="<?php echo esc_url( home_url( '/#regenerative-medicine' ) ); ?>"><?php esc_html_e( 'Regenerative Medicine', 'awaremed' ); ?></a></li>
        <li><a href="<?php echo esc_url( home_url( '/#chelation-detox' ) ); ?>"><?php esc_html_e( 'Chelation &amp; Detox', 'awaremed' ); ?></a></li>
        <li><a href="<?php echo esc_url( home_url( '/#gut-health' ) ); ?>"><?php esc_html_e( 'Gut Health', 'awaremed' ); ?></a></li>
        <li><a href="<?php echo esc_url( home_url( '/#brain-cognitive' ) ); ?>"><?php esc_html_e( 'Brain &amp; Cognitive', 'awaremed' ); ?></a></li>
        <li><a href="<?php echo esc_url( home_url( '/#skin-anti-aging' ) ); ?>"><?php esc_html_e( 'Skin &amp; Anti-Aging', 'awaremed' ); ?></a></li>
      </ul>
    </div>

    <div class="foot-col">
      <h3><?php esc_html_e( 'About', 'awaremed' ); ?></h3>
      <ul>
        <li><a href="<?php echo esc_url( home_url( '/#about' ) ); ?>"><?php esc_html_e( 'About AWAREmed', 'awaremed' ); ?></a></li>
        <li><a href="<?php echo esc_url( home_url( '/#dr-akoury' ) ); ?>"><?php esc_html_e( 'Dr. Dalal Akoury, MD', 'awaremed' ); ?></a></li>
        <li><a href="<?php echo esc_url( home_url( '/#patient-education' ) ); ?>"><?php esc_html_e( 'Patient Education', 'awaremed' ); ?></a></li>
        <li><a href="<?php echo esc_url( home_url( '/#new-patients' ) ); ?>"><?php esc_html_e( 'New Patients', 'awaremed' ); ?></a></li>
        <li><a href="<?php echo esc_url( home_url( '/#contact' ) ); ?>"><?php esc_html_e( 'Contact &amp; Booking', 'awaremed' ); ?></a></li>
      </ul>
    </div>

    <div class="foot-col">
      <h3><?php esc_html_e( 'Policies', 'awaremed' ); ?></h3>
      <ul>
        <li><a href="<?php echo esc_url( home_url( '/#legal' ) ); ?>"><?php esc_html_e( 'Privacy Policy &amp; HIPAA', 'awaremed' ); ?></a></li>
        <li><a href="<?php echo esc_url( home_url( '/#legal' ) ); ?>"><?php esc_html_e( 'Terms of Use', 'awaremed' ); ?></a></li>
        <li><a href="<?php echo esc_url( home_url( '/#legal' ) ); ?>"><?php esc_html_e( 'Medical Disclaimer', 'awaremed' ); ?></a></li>
      </ul>
      <h3 style="margin-top:20px"><?php esc_html_e( 'Languages', 'awaremed' ); ?></h3>
      <p style="margin:0;line-height:1.9">English &nbsp;&middot;&nbsp; Arabic<br>French &nbsp;&middot;&nbsp; Spanish</p>
    </div>

  </div>

  <div class="footer-disclaimer">
    <div class="wrap">
      <p style="margin:0">
        <strong><?php esc_html_e( 'Medical Disclaimer:', 'awaremed' ); ?></strong>
        <?php esc_html_e( 'All content on this website is provided for general educational and informational purposes only. It is not intended to diagnose, treat, cure, or prevent any disease, and does not create a doctor–patient relationship. Always consult a qualified, licensed healthcare provider for advice specific to your situation. In a medical emergency, call 911 or go to your nearest emergency room.', 'awaremed' ); ?>
      </p>
    </div>
  </div>

  <div class="footer-bottom">
    <div class="wrap">
      <span>&copy; <?php echo esc_html( date( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?>. <?php esc_html_e( 'All rights reserved.', 'awaremed' ); ?></span>
      <span>
        <a href="<?php echo esc_url( home_url( '/#legal' ) ); ?>"><?php esc_html_e( 'Privacy Policy', 'awaremed' ); ?></a> &nbsp;&middot;&nbsp;
        <a href="<?php echo esc_url( home_url( '/#legal' ) ); ?>"><?php esc_html_e( 'Terms of Use', 'awaremed' ); ?></a> &nbsp;&middot;&nbsp;
        <a href="<?php echo esc_url( home_url( '/#legal' ) ); ?>"><?php esc_html_e( 'Medical Disclaimer', 'awaremed' ); ?></a>
      </span>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
