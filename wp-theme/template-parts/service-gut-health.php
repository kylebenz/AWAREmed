<?php
// Repurposed as Weight Management service page
$cta = home_url( '/#contact' );
$related = array(
  array( 'title' => 'Functional Medicine',  'slug' => 'functional-medicine' ),
  array( 'title' => 'Hormone Optimization', 'slug' => 'hormone-optimization' ),
  array( 'title' => 'Diagnostic Testing',  'slug' => 'diagnostic-testing' ),
  array( 'title' => 'Nutritional Therapy', 'slug' => 'nutritional-therapy' ),
);
?>
<?php get_header(); ?>
<main id="main-content">

<section class="service-hero" aria-label="Weight Management">
  <div class="wrap">
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <a href="<?php echo esc_url( home_url('/') ); ?>">Home</a><span aria-hidden="true">/</span>
      <a href="<?php echo esc_url( home_url('/#services') ); ?>">Services</a><span aria-hidden="true">/</span>
      <span class="current" aria-current="page">Weight Management</span>
    </nav>
    <span class="eyebrow">Medical Weight Loss</span>
    <h1>Weight Management</h1>
    <p class="lead">Achieve sustainable, medically supervised weight loss by addressing the metabolic, hormonal, and lifestyle factors that make weight management uniquely challenging for your body — not just calories and willpower.</p>
    <div class="service-hero-meta">
      <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg> Physician-supervised</span>
      <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"/></svg> Insurance accepted</span>
    </div>
  </div>
</section>

<section class="service-content">
  <div class="wrap">
    <div class="service-layout">
      <div class="service-main">

        <h2>Why Medical Weight Management Is Different</h2>
        <p>Conventional weight loss advice — eat less, move more — ignores the complex biological reality of weight regulation. Hormonal imbalances, gut microbiome dysfunction, insulin resistance, thyroid disorders, sleep deprivation, chronic stress, and genetic predispositions all profoundly impact your ability to lose and maintain weight.</p>
        <p>At AWAREmed, Dr. Akoury takes a comprehensive, root-cause approach to weight management. We identify and correct the underlying biological obstacles that have been working against you, making sustainable weight loss not only achievable but maintainable long-term.</p>

        <h2>We Address the Root Causes of Weight Gain</h2>
        <ul>
          <li>Insulin resistance and blood sugar dysregulation</li>
          <li>Hormonal imbalances (thyroid, cortisol, leptin, ghrelin, testosterone, estrogen)</li>
          <li>Gut microbiome dysfunction and metabolic endotoxemia</li>
          <li>Chronic inflammation driving fat storage</li>
          <li>Nutritional deficiencies impairing metabolism</li>
          <li>Food sensitivities increasing inflammatory load</li>
          <li>Mitochondrial dysfunction reducing energy expenditure</li>
          <li>Sleep disorders and circadian rhythm disruption</li>
          <li>Stress-driven cortisol excess promoting abdominal fat</li>
        </ul>

        <h2>Our Medical Weight Loss Toolkit</h2>
        <div class="benefit-cards">
          <div class="benefit-card"><h4>Comprehensive Metabolic Assessment</h4><p>Advanced labs measuring insulin, blood sugar, hormones, gut health, inflammation, and nutritional status to build a precise picture of your metabolism.</p></div>
          <div class="benefit-card"><h4>Personalised Nutrition Planning</h4><p>Evidence-based dietary protocols tailored to your food sensitivities, metabolic type, cultural preferences, and therapeutic goals — not generic calorie counting.</p></div>
          <div class="benefit-card"><h4>Medical Weight Loss Medications</h4><p>Where appropriate, Dr. Akoury may prescribe evidence-based medications (GLP-1 agonists, thyroid support, metabolic enhancers) under close medical supervision.</p></div>
          <div class="benefit-card"><h4>Hormonal Optimisation</h4><p>Correcting thyroid dysfunction, low testosterone, estrogen dominance, and adrenal imbalances that directly contribute to weight resistance.</p></div>
          <div class="benefit-card"><h4>Gut Health Restoration</h4><p>Healing the gut microbiome to improve metabolic efficiency, reduce inflammatory triggers of weight gain, and enhance nutrient absorption.</p></div>
          <div class="benefit-card"><h4>Lifestyle &amp; Behaviour Coaching</h4><p>Practical, personalised coaching on sleep optimisation, stress management, movement strategies, and behaviour change — the proven foundations of lasting results.</p></div>
        </div>

        <h2>Your Weight Management Journey</h2>
        <div class="process-steps">
          <div class="process-step"><div class="step-num">1</div><div class="step-content"><h4>Comprehensive Medical Evaluation</h4><p>A thorough review of your weight history, medical conditions, medications, lifestyle, diet, and previous weight loss attempts. No judgment — just understanding.</p></div></div>
          <div class="process-step"><div class="step-num">2</div><div class="step-content"><h4>Advanced Metabolic Testing</h4><p>Laboratory panels to identify hormonal, metabolic, and gut-related obstacles to weight loss that are specific to your biology.</p></div></div>
          <div class="process-step"><div class="step-num">3</div><div class="step-content"><h4>Personalised Treatment Plan</h4><p>A comprehensive plan addressing your specific obstacles — combining nutrition, supplementation, possible medication, lifestyle changes, and metabolic support.</p></div></div>
          <div class="process-step"><div class="step-num">4</div><div class="step-content"><h4>Ongoing Support &amp; Accountability</h4><p>Regular follow-up visits to track progress, adjust your plan, celebrate wins, and troubleshoot challenges — ensuring you achieve and maintain your results.</p></div></div>
        </div>

      </div>

      <aside class="service-sidebar">
        <div class="sidebar-cta">
          <h3>Start Your Weight Loss Journey</h3>
          <p>Book a medical weight management consultation with Dr. Akoury.</p>
          <a href="<?php echo esc_url( $cta ); ?>" class="btn btn-primary">Book Consultation</a>
          <div class="sidebar-contact"><a href="tel:+14234306170">(423) 430-6170</a></div>
        </div>
        <div class="related-services">
          <h4>Related Services</h4>
          <?php foreach ( $related as $svc ) : ?>
          <a class="related-link" href="<?php echo esc_url( home_url('/services/'.$svc['slug'].'/') ); ?>">
            <?php echo esc_html( $svc['title'] ); ?>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="9 18 15 12 9 6"/></svg>
          </a>
          <?php endforeach; ?>
        </div>
      </aside>
    </div>
  </div>
</section>

<section style="background:var(--grad-teal);padding:64px 0;text-align:center">
  <div class="wrap">
    <h2 style="color:#fff;margin-bottom:16px">Reach Your Healthiest Weight — For Good</h2>
    <p style="color:rgba(255,255,255,0.85);max-width:520px;margin:0 auto 32px">Stop fighting your biology. Work with it. Book a medical weight management consultation and discover the root causes that have been holding you back.</p>
    <a href="<?php echo esc_url( $cta ); ?>" class="btn btn-outline" style="border-color:rgba(255,255,255,0.6);color:#fff">Begin Your Transformation</a>
  </div>
</section>

</main>
<?php get_footer(); ?>
