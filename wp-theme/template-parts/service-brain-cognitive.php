<?php
// Repurposed as Preventive Care service page
$cta = home_url( '/#contact' );
$related = array(
  array( 'title' => 'Functional Medicine',   'slug' => 'functional-medicine' ),
  array( 'title' => 'Diagnostic Testing',    'slug' => 'diagnostic-testing' ),
  array( 'title' => 'Nutritional Therapy',   'slug' => 'nutritional-therapy' ),
  array( 'title' => 'Weight Management',     'slug' => 'weight-management' ),
);
?>
<?php get_header(); ?>
<main id="main-content">

<section class="service-hero" aria-label="Preventive Care">
  <div class="wrap">
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <a href="<?php echo esc_url( home_url('/') ); ?>">Home</a><span aria-hidden="true">/</span>
      <a href="<?php echo esc_url( home_url('/#services') ); ?>">Services</a><span aria-hidden="true">/</span>
      <span class="current" aria-current="page">Preventive Care</span>
    </nav>
    <span class="eyebrow">Proactive Health Optimisation</span>
    <h1>Preventive Care</h1>
    <p class="lead">The best disease is the one you never develop. Our comprehensive preventive care programs identify risk factors years before symptoms appear, giving you the knowledge and tools to protect your future health.</p>
    <div class="service-hero-meta">
      <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg> Evidence-based prevention</span>
      <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg> Physician-supervised</span>
    </div>
  </div>
</section>

<section class="service-content">
  <div class="wrap">
    <div class="service-layout">
      <div class="service-main">

        <h2>The Future of Medicine Is Prevention</h2>
        <p>Conventional medicine excels at treating disease — but what if you could prevent disease from developing in the first place? Preventive care at AWAREmed is rooted in the principle that chronic diseases like cardiovascular disease, diabetes, cancer, and neurodegeneration develop over decades, and that early intervention can dramatically change your health trajectory.</p>
        <p>Dr. Akoury combines advanced biomarker screening, genetic analysis, and personalised wellness programming to help you identify your risks and take meaningful action before disease takes hold.</p>

        <h2>What's Included in Our Preventive Care Assessment</h2>
        <div class="benefit-cards">
          <div class="benefit-card"><h4>Advanced Cardiovascular Risk Panel</h4><p>Beyond standard cholesterol — we measure ApoB, Lp(a), oxidised LDL, hs-CRP, homocysteine, and other markers that reveal true cardiovascular risk.</p></div>
          <div class="benefit-card"><h4>Cancer Risk Profiling</h4><p>Epigenetic testing, inflammatory markers, and cancer-related biomarkers to identify elevated risk early when intervention is most effective.</p></div>
          <div class="benefit-card"><h4>Metabolic Health Assessment</h4><p>Comprehensive evaluation of insulin sensitivity, blood sugar regulation, metabolic syndrome risk, and pre-diabetes indicators.</p></div>
          <div class="benefit-card"><h4>Brain Health &amp; Cognitive Screening</h4><p>Assessment of neuroinflammation, cognitive biomarkers, and lifestyle risk factors for Alzheimer's and other neurodegenerative conditions.</p></div>
          <div class="benefit-card"><h4>Bone Density &amp; Musculoskeletal Health</h4><p>DEXA scan interpretation, bone turnover markers, and muscle health assessment to prevent osteoporosis and sarcopenia.</p></div>
          <div class="benefit-card"><h4>Gut-Immune Axis Evaluation</h4><p>Assessment of gut microbiome diversity, intestinal permeability, and immune function — the foundation of long-term preventive health.</p></div>
        </div>

        <h2>Who Should Prioritise Preventive Care?</h2>
        <ul>
          <li>Adults over 35 seeking to proactively protect their long-term health</li>
          <li>Individuals with a family history of heart disease, cancer, diabetes, or dementia</li>
          <li>High-achieving professionals seeking to maintain peak cognitive and physical performance</li>
          <li>Anyone who wants to understand their biological age versus chronological age</li>
          <li>Patients who have been told they are "pre-diabetic" or have borderline risk factors</li>
          <li>Those interested in longevity science and health span optimisation</li>
        </ul>

        <h2>Our Preventive Care Process</h2>
        <div class="process-steps">
          <div class="process-step"><div class="step-num">1</div><div class="step-content"><h4>Risk Factor &amp; History Review</h4><p>Comprehensive review of your personal and family medical history, lifestyle, diet, stress levels, and environmental exposures to map your individual risk landscape.</p></div></div>
          <div class="process-step"><div class="step-num">2</div><div class="step-content"><h4>Advanced Preventive Testing</h4><p>Targeted laboratory panels, optional genetic testing, and biomarker screening designed to surface risks years or decades before conventional screening would detect them.</p></div></div>
          <div class="process-step"><div class="step-num">3</div><div class="step-content"><h4>Personalised Prevention Plan</h4><p>A detailed, actionable roadmap covering nutrition, supplementation, exercise, sleep, stress management, environmental modifications, and any necessary medical interventions.</p></div></div>
          <div class="process-step"><div class="step-num">4</div><div class="step-content"><h4>Annual Monitoring &amp; Updates</h4><p>Your prevention plan evolves as your health and life circumstances change. Annual re-assessments ensure your strategy remains current and effective.</p></div></div>
        </div>

      </div>

      <aside class="service-sidebar">
        <div class="sidebar-cta">
          <h3>Invest in Your Future Health</h3>
          <p>Book a comprehensive preventive care assessment with Dr. Akoury.</p>
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
    <h2 style="color:#fff;margin-bottom:16px">Don't Wait for Disease — Prevent It</h2>
    <p style="color:rgba(255,255,255,0.85);max-width:520px;margin:0 auto 32px">Book a comprehensive preventive care assessment and take control of your health destiny before disease takes control of you.</p>
    <a href="<?php echo esc_url( $cta ); ?>" class="btn btn-outline" style="border-color:rgba(255,255,255,0.6);color:#fff">Book Preventive Assessment</a>
  </div>
</section>

</main>
<?php get_footer(); ?>
