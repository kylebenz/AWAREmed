<?php
$cta = home_url( '/#contact' );
$related = array(
  array( 'title' => 'Functional Medicine',  'slug' => 'functional-medicine' ),
  array( 'title' => 'IV Therapy',           'slug' => 'iv-therapy' ),
  array( 'title' => 'Hormone Optimization', 'slug' => 'hormone-optimization' ),
  array( 'title' => 'Preventive Care',      'slug' => 'preventive-care' ),
);
?>
<?php get_header(); ?>
<main id="main-content">

<section class="service-hero" aria-label="Regenerative Medicine">
  <div class="wrap">
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <a href="<?php echo esc_url( home_url('/') ); ?>">Home</a><span aria-hidden="true">/</span>
      <a href="<?php echo esc_url( home_url('/#services') ); ?>">Services</a><span aria-hidden="true">/</span>
      <span class="current" aria-current="page">Regenerative Medicine</span>
    </nav>
    <span class="eyebrow">Advanced Healing Therapies</span>
    <h1>Regenerative Medicine</h1>
    <p class="lead">Harness your body's own extraordinary healing intelligence. Our regenerative protocols — including PRP, peptide therapy, and exosomes — restore tissue, reduce inflammation, and reverse the cellular effects of aging and injury.</p>
    <div class="service-hero-meta">
      <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg> Physician-supervised</span>
      <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg> Minimally invasive</span>
    </div>
  </div>
</section>

<section class="service-content">
  <div class="wrap">
    <div class="service-layout">
      <div class="service-main">

        <h2>What Is Regenerative Medicine?</h2>
        <p>Regenerative medicine harnesses biological mechanisms to repair, regenerate, or replace damaged tissues and cells. Rather than simply managing symptoms, regenerative therapies aim to restore normal function by stimulating the body's own healing processes.</p>
        <p>At AWAREmed, Dr. Akoury combines the latest evidence-based regenerative protocols with her deep expertise in integrative medicine to offer treatments that address musculoskeletal injuries, chronic pain, autoimmune conditions, neurodegeneration, and the cellular effects of aging.</p>

        <h2>Our Regenerative Medicine Therapies</h2>
        <div class="benefit-cards">
          <div class="benefit-card"><h4>Platelet-Rich Plasma (PRP)</h4><p>A concentration of your own growth factors, extracted from your blood and reinjected to accelerate healing of joints, tendons, ligaments, and skin.</p></div>
          <div class="benefit-card"><h4>Peptide Therapy</h4><p>Short-chain amino acid sequences that signal cellular repair, fat loss, muscle growth, immune regulation, and growth hormone release.</p></div>
          <div class="benefit-card"><h4>Exosome Therapy</h4><p>Cell-derived vesicles that carry powerful regenerative signals, reducing inflammation and promoting tissue repair at the molecular level.</p></div>
          <div class="benefit-card"><h4>Ozone Therapy</h4><p>Medical ozone stimulates oxygen metabolism, reduces inflammatory burden, and creates an environment hostile to pathogens while supporting regeneration.</p></div>
          <div class="benefit-card"><h4>Prolotherapy</h4><p>An injection of dextrose solution that triggers a localised healing response in loose or damaged ligaments and tendons.</p></div>
          <div class="benefit-card"><h4>Growth Factor Therapy</h4><p>Targeted delivery of specific growth factors to stimulate cellular renewal, collagen production, and tissue restoration throughout the body.</p></div>
        </div>

        <h2>Conditions Treated</h2>
        <ul>
          <li>Joint pain and osteoarthritis (knee, hip, shoulder)</li>
          <li>Tendon and ligament injuries</li>
          <li>Chronic musculoskeletal pain and sports injuries</li>
          <li>Neurodegenerative conditions and cognitive decline</li>
          <li>Autoimmune and inflammatory disorders</li>
          <li>Sexual dysfunction and hormonal decline</li>
          <li>Skin aging, hair loss, and wound healing</li>
          <li>Post-surgical recovery acceleration</li>
          <li>Chronic fatigue and mitochondrial dysfunction</li>
        </ul>

        <h2>The Process</h2>
        <div class="process-steps">
          <div class="process-step"><div class="step-num">1</div><div class="step-content"><h4>Comprehensive Evaluation</h4><p>Dr. Akoury evaluates your symptoms, medical history, and imaging to determine which regenerative therapies are most appropriate for your condition.</p></div></div>
          <div class="process-step"><div class="step-num">2</div><div class="step-content"><h4>Personalised Protocol Design</h4><p>A customised regenerative program is designed, potentially combining multiple modalities — e.g., PRP with peptides and nutritional support.</p></div></div>
          <div class="process-step"><div class="step-num">3</div><div class="step-content"><h4>In-Office Procedure</h4><p>Most regenerative treatments are performed in our comfortable Johnson City clinic with minimal downtime. Local anesthetic is used where appropriate.</p></div></div>
          <div class="process-step"><div class="step-num">4</div><div class="step-content"><h4>Recovery &amp; Monitoring</h4><p>Post-procedure guidance is provided, and Dr. Akoury monitors your healing response closely, adjusting your protocol based on progress.</p></div></div>
        </div>

      </div>

      <aside class="service-sidebar">
        <div class="sidebar-cta">
          <h3>Explore Regenerative Options</h3>
          <p>Discover which regenerative therapies are right for your condition.</p>
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
    <h2 style="color:#fff;margin-bottom:16px">Activate Your Body's Healing Potential</h2>
    <p style="color:rgba(255,255,255,0.85);max-width:520px;margin:0 auto 32px">Schedule a regenerative medicine consultation and discover how advanced healing therapies can restore your function and vitality.</p>
    <a href="<?php echo esc_url( $cta ); ?>" class="btn btn-outline" style="border-color:rgba(255,255,255,0.6);color:#fff">Book Consultation</a>
  </div>
</section>

</main>
<?php get_footer(); ?>
