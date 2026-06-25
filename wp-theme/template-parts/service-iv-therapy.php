<?php
$cta = home_url( '/#contact' );
$related = array(
  array( 'title' => 'Functional Medicine',   'slug' => 'functional-medicine' ),
  array( 'title' => 'Nutritional Therapy',   'slug' => 'nutritional-therapy' ),
  array( 'title' => 'Regenerative Medicine', 'slug' => 'regenerative-medicine' ),
  array( 'title' => 'Preventive Care',       'slug' => 'preventive-care' ),
);
?>
<?php get_header(); ?>
<main id="main-content">

<section class="service-hero" aria-label="IV Therapy">
  <div class="wrap">
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <a href="<?php echo esc_url( home_url('/') ); ?>">Home</a><span aria-hidden="true">/</span>
      <a href="<?php echo esc_url( home_url('/#services') ); ?>">Services</a><span aria-hidden="true">/</span>
      <span class="current" aria-current="page">IV Therapy</span>
    </nav>
    <span class="eyebrow">Intravenous Nutrient Infusions</span>
    <h1>IV Therapy</h1>
    <p class="lead">Experience the fastest, most effective way to replenish your body with essential vitamins, minerals, and antioxidants — delivered directly into your bloodstream for 100% cellular absorption.</p>
    <div class="service-hero-meta">
      <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg> 30–90 min sessions</span>
      <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg> Physician-formulated</span>
    </div>
  </div>
</section>

<section class="service-content">
  <div class="wrap">
    <div class="service-layout">
      <div class="service-main">

        <h2>What Is IV Therapy?</h2>
        <p>Intravenous (IV) therapy is the administration of nutrients, vitamins, minerals, amino acids, antioxidants, and fluids directly into the bloodstream through a small catheter. Unlike oral supplementation — which loses a significant portion of nutrients to digestive breakdown — IV delivery ensures 100% bioavailability, getting nutrients to your cells immediately and efficiently.</p>
        <p>At AWAREmed, every IV infusion is physician-formulated by Dr. Akoury based on your specific health needs, lab results, and wellness goals. We do not offer one-size-fits-all drips — your infusion is a precision therapeutic tool.</p>

        <h2>Who Benefits from IV Therapy?</h2>
        <ul>
          <li>Individuals with chronic fatigue or low energy</li>
          <li>Athletes seeking faster recovery and peak performance</li>
          <li>Patients with immune system challenges or recurrent illness</li>
          <li>Those with digestive disorders limiting oral nutrient absorption</li>
          <li>People experiencing dehydration, hangovers, or jet lag</li>
          <li>Individuals undergoing cancer treatment seeking supportive care</li>
          <li>Patients with vitamin deficiencies (B12, vitamin C, magnesium, zinc)</li>
          <li>Anyone seeking enhanced mental clarity, mood, and cognitive function</li>
          <li>Anti-aging and longevity-focused patients</li>
        </ul>

        <h2>Our IV Therapy Menu</h2>
        <div class="benefit-cards">
          <div class="benefit-card"><h4>Myers' Cocktail</h4><p>The classic IV infusion combining magnesium, B vitamins, vitamin C, and calcium to combat fatigue, migraines, fibromyalgia, and immune dysfunction.</p></div>
          <div class="benefit-card"><h4>High-Dose Vitamin C</h4><p>Powerful antioxidant therapy used to boost immunity, support cancer patients, accelerate healing, and combat oxidative stress.</p></div>
          <div class="benefit-card"><h4>NAD+ Infusion</h4><p>Nicotinamide adenine dinucleotide — the molecule of cellular energy. NAD+ IV therapy supports brain function, addiction recovery, and anti-aging.</p></div>
          <div class="benefit-card"><h4>Glutathione Push</h4><p>The master antioxidant that detoxifies cells, brightens skin, protects neurons, and supports liver function.</p></div>
          <div class="benefit-card"><h4>Immune Boost</h4><p>A concentrated blend of vitamin C, zinc, selenium, B vitamins, and immune-modulating nutrients to defend against illness and accelerate recovery.</p></div>
          <div class="benefit-card"><h4>Custom Formulations</h4><p>Dr. Akoury designs bespoke IV protocols based on your lab work and health goals — no generic drip bags.</p></div>
        </div>

        <h2>The IV Therapy Session: What to Expect</h2>
        <div class="process-steps">
          <div class="process-step"><div class="step-num">1</div><div class="step-content"><h4>Pre-Treatment Assessment</h4><p>A brief review of your current health status, vitals, and any recent labs to ensure the selected infusion is appropriate for you that day.</p></div></div>
          <div class="process-step"><div class="step-num">2</div><div class="step-content"><h4>IV Placement</h4><p>A small, painless catheter is placed in a peripheral vein. Our experienced team minimises discomfort throughout.</p></div></div>
          <div class="process-step"><div class="step-num">3</div><div class="step-content"><h4>Relaxation During Infusion</h4><p>Sessions last 30–90 minutes depending on your protocol. Relax in our comfortable therapy suite — read, work, or simply unwind.</p></div></div>
          <div class="process-step"><div class="step-num">4</div><div class="step-content"><h4>Post-Infusion Monitoring</h4><p>After your infusion, we monitor you briefly to ensure you feel well before you leave. Many patients notice increased energy and mental clarity within hours.</p></div></div>
        </div>

        <h2>Is IV Therapy Safe?</h2>
        <p>Yes — when administered by a qualified physician. At AWAREmed, all IV infusions are ordered and supervised by Dr. Akoury, a board-certified physician with extensive experience in IV nutrient therapy. We conduct appropriate pre-screening and use pharmaceutical-grade nutrients in sterile conditions. Side effects are rare and typically minor.</p>

      </div>

      <aside class="service-sidebar">
        <div class="sidebar-cta">
          <h3>Book Your IV Infusion</h3>
          <p>Physician-formulated drips tailored to your unique health needs.</p>
          <a href="<?php echo esc_url( $cta ); ?>" class="btn btn-primary">Schedule Now</a>
          <div class="sidebar-contact"><a href="tel:+14234306170">(423) 430-6170</a></div>
        </div>
        <div class="sidebar-info">
          <h4>Session Details</h4>
          <div class="sidebar-info-item">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
            <span><strong>Duration:</strong> 30–90 minutes</span>
          </div>
          <div class="sidebar-info-item">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
            <span><strong>Supervised by:</strong> Dr. Dalal Akoury, MD</span>
          </div>
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
    <h2 style="color:#fff;margin-bottom:16px">Ready to Recharge at the Cellular Level?</h2>
    <p style="color:rgba(255,255,255,0.85);max-width:520px;margin:0 auto 32px">Book your personalised IV therapy session with Dr. Akoury and experience the difference precision nutrition makes.</p>
    <a href="<?php echo esc_url( $cta ); ?>" class="btn btn-outline" style="border-color:rgba(255,255,255,0.6);color:#fff">Book IV Therapy Session</a>
  </div>
</section>

</main>
<?php get_footer(); ?>
