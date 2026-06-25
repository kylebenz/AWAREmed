<?php
$cta = home_url( '/#contact' );
$related = array(
  array( 'title' => 'Functional Medicine',  'slug' => 'functional-medicine' ),
  array( 'title' => 'Weight Management',    'slug' => 'weight-management' ),
  array( 'title' => 'Diagnostic Testing',  'slug' => 'diagnostic-testing' ),
  array( 'title' => 'Nutritional Therapy', 'slug' => 'nutritional-therapy' ),
);
?>
<?php get_header(); ?>
<main id="main-content">

<section class="service-hero" aria-label="Hormone Optimization">
  <div class="wrap">
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <a href="<?php echo esc_url( home_url('/') ); ?>">Home</a><span aria-hidden="true">/</span>
      <a href="<?php echo esc_url( home_url('/#services') ); ?>">Services</a><span aria-hidden="true">/</span>
      <span class="current" aria-current="page">Hormone Optimization</span>
    </nav>
    <span class="eyebrow">Bioidentical Hormone Therapy (BHRT)</span>
    <h1>Hormone Optimization</h1>
    <p class="lead">Restore the hormonal balance that drives your energy, mood, metabolism, and vitality. Dr. Akoury's precision programs help both men and women feel their absolute best at every stage of life.</p>
    <div class="service-hero-meta">
      <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg> Bioidentical hormones</span>
      <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg> Physician-supervised BHRT</span>
    </div>
  </div>
</section>

<section class="service-content">
  <div class="wrap">
    <div class="service-layout">
      <div class="service-main">

        <h2>The Importance of Hormonal Balance</h2>
        <p>Hormones regulate virtually every function in the human body — from metabolism and energy production to mood, sleep, sexual function, bone density, and cognitive performance. When hormones fall out of balance, the effects are far-reaching and profoundly impact quality of life.</p>
        <p>Hormonal decline is a natural part of aging, but it doesn't have to be accepted as inevitable. With precise testing and bioidentical hormone replacement therapy (BHRT), Dr. Akoury helps patients restore optimal hormonal levels — and with them, their vitality, clarity, and well-being.</p>

        <h2>Signs You May Have a Hormonal Imbalance</h2>
        <ul>
          <li>Persistent fatigue despite adequate sleep</li>
          <li>Weight gain — especially abdominal — despite diet and exercise</li>
          <li>Decreased libido and sexual dysfunction</li>
          <li>Mood swings, irritability, anxiety, or depression</li>
          <li>Brain fog and difficulty concentrating</li>
          <li>Hot flashes, night sweats, and sleep disturbances</li>
          <li>Loss of muscle mass and decreased strength</li>
          <li>Thinning hair, dry skin, or brittle nails</li>
          <li>Irregular or absent menstrual cycles</li>
        </ul>

        <h2>What We Treat</h2>
        <div class="benefit-cards">
          <div class="benefit-card"><h4>Female Hormone Imbalance</h4><p>Perimenopause, menopause, PCOS, estrogen dominance, progesterone deficiency, and adrenal hormone dysfunction in women.</p></div>
          <div class="benefit-card"><h4>Male Hormone Decline</h4><p>Testosterone deficiency (Low T), andropause, reduced vitality, erectile dysfunction, and age-related hormonal decline in men.</p></div>
          <div class="benefit-card"><h4>Thyroid Disorders</h4><p>Hypothyroidism, hyperthyroidism, Hashimoto's thyroiditis, and subclinical thyroid dysfunction — including patients told "your levels are normal."</p></div>
          <div class="benefit-card"><h4>Adrenal Health</h4><p>Adrenal fatigue, chronic stress-induced cortisol dysregulation, DHEA deficiency, and HPA-axis imbalance.</p></div>
        </div>

        <h2>Our Hormone Optimization Process</h2>
        <div class="process-steps">
          <div class="process-step"><div class="step-num">1</div><div class="step-content"><h4>Comprehensive Hormonal Panel</h4><p>We test far more than standard levels — including free and total testosterone, estradiol, progesterone, DHEA-S, cortisol (4-point saliva), full thyroid panel (TSH, free T3, free T4, reverse T3, thyroid antibodies), insulin, and more.</p></div></div>
          <div class="process-step"><div class="step-num">2</div><div class="step-content"><h4>Symptom &amp; History Review</h4><p>Lab results are interpreted in the context of your symptoms, age, medical history, and lifestyle — because "optimal" is different from "within normal range."</p></div></div>
          <div class="process-step"><div class="step-num">3</div><div class="step-content"><h4>Personalised BHRT Protocol</h4><p>We use bioidentical hormones — molecularly identical to those your body produces — in precise doses, forms (creams, pellets, injections), and schedules tailored to your needs.</p></div></div>
          <div class="process-step"><div class="step-num">4</div><div class="step-content"><h4>Ongoing Monitoring &amp; Adjustment</h4><p>Hormone levels are re-tested regularly to fine-tune your protocol, ensuring optimal balance is maintained safely over time.</p></div></div>
        </div>

        <h2>Why Bioidentical vs. Synthetic Hormones?</h2>
        <p>Bioidentical hormones are chemically identical to the hormones your body naturally produces. They are derived from natural plant sources (yam and soy) and compounded to match your precise needs. Many patients and physicians prefer bioidentical hormones because they are metabolised naturally by the body, often with a more favorable safety profile and fewer side effects than synthetic alternatives. Dr. Akoury customises every BHRT protocol based on your lab results, symptoms, risk factors, and goals.</p>

      </div>

      <aside class="service-sidebar">
        <div class="sidebar-cta">
          <h3>Reclaim Your Hormonal Vitality</h3>
          <p>Book a comprehensive hormone evaluation with Dr. Akoury today.</p>
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
    <h2 style="color:#fff;margin-bottom:16px">Feel Like Yourself Again</h2>
    <p style="color:rgba(255,255,255,0.85);max-width:520px;margin:0 auto 32px">Discover how precision hormone optimization can restore your energy, mood, and vitality. Book your consultation today.</p>
    <a href="<?php echo esc_url( $cta ); ?>" class="btn btn-outline" style="border-color:rgba(255,255,255,0.6);color:#fff">Start Your Hormone Journey</a>
  </div>
</section>

</main>
<?php get_footer(); ?>
