<!-- Footer CTA Bar -->
<div class="footer-cta-bar">
  <div class="wrap">
    <div>
      <h3>Ready to Transform Your Health?</h3>
      <p>Join thousands of patients who have reclaimed their vitality with AWAREmed.</p>
    </div>
    <a href="<?php echo esc_url( home_url( '/#contact' ) ); ?>" class="btn btn-outline" style="border-color:rgba(255,255,255,0.6);color:#fff">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
      Book Your Consultation
    </a>
  </div>
</div>

<footer class="site-footer" aria-label="Site footer">
  <div class="wrap">
    <div class="footer-grid">

      <!-- Brand Column -->
      <div class="footer-brand">
        <?php if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) : ?>
          <?php the_custom_logo(); ?>
        <?php else : ?>
          <div class="brand-text" style="margin-bottom:0">
            <strong style="color:#fff;font-family:var(--font-head);font-size:1.3rem;display:block">AWAREmed</strong>
            <span style="color:var(--teal);font-size:11px;text-transform:uppercase;letter-spacing:.08em">Health &amp; Wellness Resource Center</span>
          </div>
        <?php endif; ?>
        <p>Physician-led integrative and functional medicine practice dedicated to treating root causes and restoring optimal health in Johnson City, Tennessee.</p>
        <div class="footer-social" aria-label="Social media">
          <a href="https://www.facebook.com/awaremed" aria-label="Facebook" rel="noopener noreferrer" target="_blank">
            <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"/></svg>
          </a>
          <a href="https://www.instagram.com/awaremed" aria-label="Instagram" rel="noopener noreferrer" target="_blank">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37z"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/></svg>
          </a>
          <a href="https://www.youtube.com/awaremed" aria-label="YouTube" rel="noopener noreferrer" target="_blank">
            <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M22.54 6.42a2.78 2.78 0 00-1.95-1.96C18.88 4 12 4 12 4s-6.88 0-8.59.46a2.78 2.78 0 00-1.95 1.96A29 29 0 001 12a29 29 0 00.46 5.58 2.78 2.78 0 001.95 1.96C5.12 20 12 20 12 20s6.88 0 8.59-.46a2.78 2.78 0 001.95-1.96A29 29 0 0023 12a29 29 0 00-.46-5.58z"/><polygon points="9.75 15.02 15.5 12 9.75 8.98 9.75 15.02" fill="#0D1B2A"/></svg>
          </a>
          <a href="https://www.linkedin.com/company/awaremed" aria-label="LinkedIn" rel="noopener noreferrer" target="_blank">
            <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"/><circle cx="4" cy="4" r="2"/></svg>
          </a>
        </div>
      </div>

      <!-- Services Column -->
      <div class="footer-col">
        <h4>Services</h4>
        <ul>
          <li><a href="<?php echo esc_url( home_url( '/services/functional-medicine/' ) ); ?>">Functional Medicine</a></li>
          <li><a href="<?php echo esc_url( home_url( '/services/iv-therapy/' ) ); ?>">IV Therapy</a></li>
          <li><a href="<?php echo esc_url( home_url( '/services/regenerative-medicine/' ) ); ?>">Regenerative Medicine</a></li>
          <li><a href="<?php echo esc_url( home_url( '/services/hormone-optimization/' ) ); ?>">Hormone Optimization</a></li>
          <li><a href="<?php echo esc_url( home_url( '/services/weight-management/' ) ); ?>">Weight Management</a></li>
          <li><a href="<?php echo esc_url( home_url( '/services/preventive-care/' ) ); ?>">Preventive Care</a></li>
          <li><a href="<?php echo esc_url( home_url( '/services/diagnostic-testing/' ) ); ?>">Diagnostic Testing</a></li>
          <li><a href="<?php echo esc_url( home_url( '/services/nutritional-therapy/' ) ); ?>">Nutritional Therapy</a></li>
        </ul>
      </div>

      <!-- Quick Links Column -->
      <div class="footer-col">
        <h4>Quick Links</h4>
        <ul>
          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
          <li><a href="<?php echo esc_url( home_url( '/#about' ) ); ?>">About Dr. Akoury</a></li>
          <li><a href="<?php echo esc_url( home_url( '/#testimonials' ) ); ?>">Patient Testimonials</a></li>
          <li><a href="<?php echo esc_url( home_url( '/#faq' ) ); ?>">FAQ</a></li>
          <li><a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>">Health Blog</a></li>
          <li><a href="<?php echo esc_url( home_url( '/#contact' ) ); ?>">Book Consultation</a></li>
          <li><a href="<?php echo esc_url( home_url( '/#gallery' ) ); ?>">Our Facility</a></li>
        </ul>
      </div>

      <!-- Contact Column -->
      <div class="footer-col">
        <h4>Contact Us</h4>
        <div class="footer-contact-item">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
          <span>1604 Lamons Lane, Suite 202<br>Johnson City, TN 37604</span>
        </div>
        <div class="footer-contact-item">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
          <a href="tel:+14234306170">(423) 430-6170</a>
        </div>
        <div class="footer-contact-item">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
          <a href="mailto:awaremed@gmail.com">awaremed@gmail.com</a>
        </div>
        <div class="footer-contact-item">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
          <span>Mon–Fri: 9am – 5pm ET<br>Sat: 10am – 2pm ET</span>
        </div>
      </div>

    </div><!-- .footer-grid -->

    <div class="footer-bottom">
      <div class="footer-bottom-left">
        &copy; <?php echo esc_html( date( 'Y' ) ); ?> AWAREmed Health &amp; Wellness Resource Center. All rights reserved.
      </div>
      <div class="footer-bottom-right">
        <a href="<?php echo esc_url( home_url( '/#legal' ) ); ?>">Privacy Policy</a>
        <a href="<?php echo esc_url( home_url( '/#legal' ) ); ?>">Terms of Service</a>
        <a href="<?php echo esc_url( home_url( '/#legal' ) ); ?>">HIPAA Notice</a>
        <a href="<?php echo esc_url( home_url( '/sitemap.xml' ) ); ?>">Sitemap</a>
      </div>
    </div>

  </div><!-- .wrap -->
</footer>

<?php wp_footer(); ?>
</body>
</html>
