<?php
// Repurposed as Nutritional Therapy service page
$cta = home_url( '/#contact' );
$related = array(
  array( 'title' => 'Functional Medicine',   'slug' => 'functional-medicine' ),
  array( 'title' => 'IV Therapy',            'slug' => 'iv-therapy' ),
  array( 'title' => 'Weight Management',     'slug' => 'weight-management' ),
  array( 'title' => 'Diagnostic Testing',    'slug' => 'diagnostic-testing' ),
);
?>
<?php get_header(); ?>
<main id="main-content">

<section class="service-hero" aria-label="Nutritional Therapy">
  <div class="wrap">
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <a href="<?php echo esc_url( home_url('/') ); ?>">Home</a><span aria-hidden="true">/</span>
      <a href="<?php echo esc_url( home_url('/#services') ); ?>">Services</a><span aria-hidden="true">/</span>
      <span class="current" aria-current="page">Nutritional Therapy</span>
    </nav>
    <span class="eyebrow">Therapeutic Nutrition &amp; Supplementation</span>
    <h1>Nutritional Therapy</h1>
    <p class="lead">Food is medicine. Through evidence-based therapeutic nutrition and precision supplementation, we optimise the biochemical environment your body needs to heal, function at peak capacity, and thrive for decades.</p>
    <div class="service-hero-meta">
      <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg> Physician-supervised</span>
      <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M12 3v1m0 16v1"/><circle cx="12" cy="12" r="4"/></svg> Lab-guided protocols</span>
    </div>
  </div>
</section>

<section class="service-content">
  <div class="wrap">
    <div class="service-layout">
      <div class="service-main">

        <h2>Nutrition as Medicine: The AWAREmed Approach</h2>
        <p>Nutrition is the most powerful medicine available — yet it is one of the most overlooked tools in conventional healthcare. Every cellular process in your body depends on the availability of specific nutrients: vitamins, minerals, amino acids, fatty acids, and phytonutrients.</p>
        <p>At AWAREmed, nutritional therapy goes far beyond generic dietary advice. Dr. Akoury uses advanced nutritional testing to identify your specific deficiencies and imbalances, then designs a therapeutic nutrition protocol — including dietary changes and targeted supplementation — to address your unique biochemical needs.</p>

        <h2>What Nutritional Therapy Can Address</h2>
        <ul>
          <li>Chronic fatigue and low energy (mitochondrial dysfunction)</li>
          <li>Inflammatory conditions (arthritis, autoimmunity, IBD)</li>
          <li>Cardiovascular disease risk (cholesterol, blood pressure, arterial inflammation)</li>
          <li>Blood sugar dysregulation and insulin resistance</li>
          <li>Cognitive decline, brain fog, and mood disorders</li>
          <li>Gut health disorders (IBS, leaky gut, SIBO)</li>
          <li>Hormonal imbalances influenced by nutritional status</li>
          <li>Immune system dysfunction and recurrent infections</li>
          <li>Skin conditions (eczema, psoriasis, acne)</li>
          <li>Bone health and osteoporosis prevention</li>
        </ul>

        <h2>Our Nutritional Therapy Services</h2>
        <div class="benefit-cards">
          <div class="benefit-card"><h4>Micronutrient Testing</h4><p>Intracellular testing to identify precisely which vitamins, minerals, amino acids, and antioxidants are deficient at the cellular level — not just in serum.</p></div>
          <div class="benefit-card"><h4>Food Sensitivity Testing</h4><p>IgG and IgA food reactivity testing to identify specific foods triggering chronic inflammation, gut dysfunction, and systemic symptoms.</p></div>
          <div class="benefit-card"><h4>Therapeutic Dietary Protocols</h4><p>Evidence-based dietary plans tailored to your condition — anti-inflammatory, elimination, ketogenic, Mediterranean, or other therapeutic approaches as clinically indicated.</p></div>
          <div class="benefit-card"><h4>Precision Supplementation</h4><p>Pharmaceutical-grade, clinically dosed supplement protocols targeting your specific deficiencies and therapeutic goals — not generic multivitamins.</p></div>
          <div class="benefit-card"><h4>Gut Microbiome Nutrition</h4><p>Prebiotic and probiotic strategies, along with dietary fibre and phytonutrient planning, to cultivate a diverse, health-promoting gut microbiome.</p></div>
          <div class="benefit-card"><h4>Detoxification Nutrition</h4><p>Dietary and supplementation support for the liver's phase I and II detoxification pathways, enhancing the body's ability to process and eliminate toxins.</p></div>
        </div>

        <h2>The Nutritional Therapy Process</h2>
        <div class="process-steps">
          <div class="process-step"><div class="step-num">1</div><div class="step-content"><h4>Nutritional Assessment</h4><p>Detailed dietary recall, symptom review, and health goals discussion. We understand your food preferences, cultural background, and any dietary restrictions before making recommendations.</p></div></div>
          <div class="process-step"><div class="step-num">2</div><div class="step-content"><h4>Advanced Nutritional Testing</h4><p>Micronutrient testing, food sensitivity panels, and other relevant labs to identify the specific nutritional imbalances driving your symptoms.</p></div></div>
          <div class="process-step"><div class="step-num">3</div><div class="step-content"><h4>Personalised Nutrition Protocol</h4><p>A comprehensive, practical nutrition plan with specific dietary guidelines, supplement protocols, meal planning guidance, and tips for sustainable implementation.</p></div></div>
          <div class="process-step"><div class="step-num">4</div><div class="step-content"><h4>Ongoing Coaching &amp; Follow-Up</h4><p>Regular check-ins to track progress, address challenges, refine your protocol, and repeat testing as needed to confirm nutritional optimisation.</p></div></div>
        </div>

      </div>

      <aside class="service-sidebar">
        <div class="sidebar-cta">
          <h3>Optimise Your Nutrition</h3>
          <p>Book a nutritional therapy consultation with Dr. Akoury today.</p>
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
    <h2 style="color:#fff;margin-bottom:16px">Let Food Be Your Medicine</h2>
    <p style="color:rgba(255,255,255,0.85);max-width:520px;margin:0 auto 32px">Discover how precision nutritional therapy can transform your health at the cellular level. Book your consultation with Dr. Akoury today.</p>
    <a href="<?php echo esc_url( $cta ); ?>" class="btn btn-outline" style="border-color:rgba(255,255,255,0.6);color:#fff">Book Nutrition Consultation</a>
  </div>
</section>

</main>
<?php get_footer(); ?>
