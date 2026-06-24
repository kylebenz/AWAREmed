<?php
/**
 * AWAREmed Theme Functions
 */

if ( ! defined( 'ABSPATH' ) ) exit;

/* ------------------------------------------------------------------
   Theme Setup
------------------------------------------------------------------ */
function awaremed_setup() {
    load_theme_textdomain( 'awaremed', get_template_directory() . '/languages' );

    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'gallery', 'caption', 'style', 'script' ) );
    add_theme_support( 'custom-logo', array(
        'height'      => 80,
        'width'       => 240,
        'flex-height' => true,
        'flex-width'  => true,
    ) );

    register_nav_menus( array(
        'primary' => __( 'Primary Navigation', 'awaremed' ),
        'footer'  => __( 'Footer Navigation', 'awaremed' ),
    ) );
}
add_action( 'after_setup_theme', 'awaremed_setup' );

/* ------------------------------------------------------------------
   Enqueue Styles & Scripts
------------------------------------------------------------------ */
function awaremed_scripts() {
    $v = '1.0.0';

    wp_enqueue_style(
        'google-fonts',
        'https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;600;700&family=Nunito+Sans:wght@300;400;600;700&display=swap',
        array(),
        null
    );

    wp_enqueue_style(
        'awaremed-style',
        get_template_directory_uri() . '/assets/styles.css',
        array( 'google-fonts' ),
        $v
    );

    wp_enqueue_script(
        'awaremed-site',
        get_template_directory_uri() . '/assets/site.js',
        array(),
        $v,
        true
    );

    // Pass ajaxurl for form submission
    wp_localize_script( 'awaremed-site', 'awaremed_ajax', array(
        'ajaxurl' => admin_url( 'admin-ajax.php' ),
        'nonce'   => wp_create_nonce( 'awaremed_contact' ),
    ) );
}
add_action( 'wp_enqueue_scripts', 'awaremed_scripts' );

/* ------------------------------------------------------------------
   Contact Form Handler (AJAX)
------------------------------------------------------------------ */
function awaremed_handle_contact() {
    check_ajax_referer( 'awaremed_contact', 'nonce' );

    $name      = sanitize_text_field( $_POST['name'] ?? '' );
    $email     = sanitize_email( $_POST['email'] ?? '' );
    $phone     = sanitize_text_field( $_POST['phone'] ?? '' );
    $service   = sanitize_text_field( $_POST['service'] ?? '' );
    $visit     = sanitize_text_field( $_POST['visit-type'] ?? '' );
    $message   = sanitize_textarea_field( $_POST['message'] ?? '' );

    if ( empty( $name ) || empty( $email ) || ! is_email( $email ) ) {
        wp_send_json_error( array( 'message' => 'Please provide a valid name and email address.' ) );
    }

    $to      = get_option( 'admin_email' );
    $subject = 'AWAREmed Consultation Request from ' . $name;
    $body    = "Name: {$name}\nEmail: {$email}\nPhone: {$phone}\nService Interest: {$service}\nVisit Type: {$visit}\n\nMessage:\n{$message}";
    $headers = array(
        'Content-Type: text/plain; charset=UTF-8',
        'Reply-To: ' . $name . ' <' . $email . '>',
    );

    $sent = wp_mail( $to, $subject, $body, $headers );

    if ( $sent ) {
        wp_send_json_success( array( 'message' => 'Your request has been sent. We will be in touch soon.' ) );
    } else {
        wp_send_json_error( array( 'message' => 'There was a problem sending your request. Please call us directly at (423) 430-6170.' ) );
    }
}
add_action( 'wp_ajax_awaremed_contact',        'awaremed_handle_contact' );
add_action( 'wp_ajax_nopriv_awaremed_contact', 'awaremed_handle_contact' );

/* ------------------------------------------------------------------
   Schema / Structured Data
------------------------------------------------------------------ */
function awaremed_schema_output() {
    if ( ! is_front_page() ) return;
    ?>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "MedicalBusiness",
  "name": "AWAREmed Health & Wellness Resource Center",
  "description": "Physician-led integrative and functional medicine practice in Johnson City, TN.",
  "url": "<?php echo esc_url( home_url( '/' ) ); ?>",
  "telephone": "+14234306170",
  "email": "awaremed@gmail.com",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "1604 Lamons Lane, Suite 202",
    "addressLocality": "Johnson City",
    "addressRegion": "TN",
    "postalCode": "37604",
    "addressCountry": "US"
  },
  "physician": {
    "@type": "Physician",
    "name": "Dr. Dalal Akoury, MD"
  }
}
</script>
    <?php
}
add_action( 'wp_head', 'awaremed_schema_output' );

/* ------------------------------------------------------------------
   Custom Excerpt Length
------------------------------------------------------------------ */
function awaremed_excerpt_length( $length ) {
    return 25;
}
add_filter( 'excerpt_length', 'awaremed_excerpt_length' );

/* ------------------------------------------------------------------
   Disable WordPress Emoji (cleaner output)
------------------------------------------------------------------ */
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );

/* ------------------------------------------------------------------
   Custom Logo Helper
------------------------------------------------------------------ */
function awaremed_get_logo() {
    if ( function_exists( 'get_custom_logo' ) && has_custom_logo() ) {
        return get_custom_logo();
    }
    return '<img src="' . esc_url( get_template_directory_uri() . '/assets/logo.png' ) . '"
         alt="' . esc_attr( get_bloginfo( 'name' ) ) . '"
         class="brand-logo"
         onerror="this.style.display=\'none\';this.nextSibling.style.display=\'block\'">';
}
