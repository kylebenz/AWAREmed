<?php
// Repurposed as Diagnostic Testing service page
$cta = home_url( '/#contact' );
$related = array(
  array( 'title' => 'Functional Medicine',   'slug' => 'functional-medicine' ),
  array( 'title' => 'Preventive Care',       'slug' => 'preventive-care' ),
  array( 'title' => 'Hormone Optimization',  'slug' => 'hormone-optimization' ),
  array( 'title' => 'Weight Management',     'slug' => 'weight-management' ),
);
?>
<?php get_header(); ?>
<main id="main-content">

<section class="service-hero" aria-label="Diagnostic Testing">
  <div class="wrap">
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <a href="<?php echo esc_url( home_url('/') ); ?>">Home</a><span aria-hidden="true">/</span>
      <a href="<?php echo esc_url( home_url('/#services') ); ?>">Services</a><span aria-hidden="true">/</span>
      <span class="current" aria-current="page">Diagnostic Testing</span>
    </nav>
    <span class="eyebrow">Advanced Laboratory &amp; Biomarker Analysis</span>
    <h1>Diagnostic Testing</h1>
    <p class="lead">See your health with unprecedented clarity. Our advanced diagnostic panels go far beyond standard blood tests to reveal hidden imbalances, deficiencies, and dysfunctions — giving Dr. Akoury the precise data needed to craft your personalised treatment plan.</p>
    <div class="service-hero-meta">
      <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg> CLIA-certified labs</span>
      <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg> Physician-interpreted results</span>
    </div>
  </div>
</section>

<section class="service-content">
  <div class="wrap">
    <div class="service-layout">
      <div class="service-main">

        <h2>Why Standard Testing Falls Short</h2>
        <p>Conventional laboratory testing is designed to identify disease — not to optimise health. Standard "normal ranges" represent the average of a population that includes many unhealthy individuals, and are therefore not representative of optimal function. Patients frequently receive "normal" results while experiencing significant symptoms of dysfunction.</p>
        <p>At AWAREmed, we use advanced functional laboratory testing interpreted against optimal reference ranges — giving you a much more meaningful picture of your health. We also use specialty labs that offer tests unavailable through conventional medicine.</p>

        <h2>Our Advanced Diagnostic Panel Options</h2>
        <div class="benefit-cards">
          <div class="benefit-card"><h4>Comprehensive Metabolic &amp; Nutritional Panel</h4><p>Full metabolic panel plus micronutrient assessment covering vitamins, minerals, amino acids, fatty acids, and antioxidants at the intracellular level.</p></div>
          <div class="benefit-card"><h4>Full Hormonal Assessment</h4><p>Comprehensive evaluation of sex hormones, adrenal hormones, thyroid hormones, and metabolic hormones — with free and bound fractions where clinically relevant.</p></div>
          <div class="benefit-card"><h4>Gut Microbiome &amp; GI Health</h4><p>Stool analysis identifying the composition of your gut bacteria, presence of pathogens, digestive enzyme function, intestinal inflammation, and leaky gut markers.</p></div>
          <div class="benefit-card"><h4>Environmental Toxin &amp; Heavy Metal Screening</h4><p>Testing for mercury, lead, arsenic, cadmium, and other heavy metals, as well as pesticides, BPA, phthalates, and other environmental chemical exposures.</p></div>
          <div class="benefit-card"><h4>Genetic &amp; Nutrigenomic Testing</h4><p>DNA analysis revealing how your genetic variants affect hormone metabolism, detoxification pathways, nutrient utilisation, cardiovascular risk, and medication responses.</p></div>
          <div class="benefit-card"><h4>Advanced Cardiovascular Panel</h4><p>Beyond standard lipids — particle size and number, Lp(a), oxidised LDL, ApoB, endothelial function markers, and inflammatory cardiovascular risk factors.</p></div>
        </div>

        <h2>How We Use Your Test Results</h2>
        <ul>
          <li>All results are reviewed by Dr. Akoury personally, not delegated to staff</li>
          <li>Results are interpreted against optimal ranges, not just conventional "normal"</li>
          <li>A comprehensive results review appointment is scheduled to walk you through all findings</li>
          <li>Lab data is integrated with your symptoms, history, and lifestyle context</li>
          <li>Testing directly informs every personalised treatment recommendation</li>
          <li>Follow-up testing tracks the impact of your interventions over time</li>
        </ul>

        <h2>The Diagnostic Process</h2>
        <div class="process-steps">
          <div class="process-step"><div class="step-num">1</div><div class="step-content"><h4>Clinical Assessment</h4><p>Dr. Akoury reviews your symptoms, history, and goals to determine which specific tests will provide the most clinically useful information for your situation.</p></div></div>
          <div class="process-step"><div class="step-num">2</div><div class="step-content"><h4>Sample Collection</h4><p>Most tests require blood, urine, saliva, or stool collection. We use CLIA-certified specialty laboratories to ensure the highest accuracy and reliability.</p></div></div>
          <div class="process-step"><div class="step-num">3</div><div class="step-content"><h4>Results Interpretation</h4><p>Dr. Akoury personally reviews all results, identifying patterns and connections across multiple systems that reveal root causes and treatment priorities.</p></div></div>
          <div class="process-step"><div class="step-num">4</div><div class="step-content"><h4>Treatment Planning</h4><p>A detailed treatment plan is created based on your test results, ensuring every intervention is evidence-based and precisely targeted to your individual biology.</p></div></div>
        </div>

      </div>

      <aside class="service-sidebar">
        <div class="sidebar-cta">
          <h3>Get the Full Picture of Your Health</h3>
          <p>Book advanced diagnostic testing with Dr. Akoury today.</p>
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
    <h2 style="color:#fff;margin-bottom:16px">Knowledge Is the Foundation of Health</h2>
    <p style="color:rgba(255,255,255,0.85);max-width:520px;margin:0 auto 32px">Advanced diagnostic testing gives Dr. Akoury the precise data needed to create a truly personalised treatment plan. Book your assessment today.</p>
    <a href="<?php echo esc_url( $cta ); ?>" class="btn btn-outline" style="border-color:rgba(255,255,255,0.6);color:#fff">Start with Advanced Testing</a>
  </div>
</section>

</main>
<?php get_footer(); ?>
