<?php
$pageTitle       = "Storm Damage Cleanup & Emergency Tree Service in Shawnee, KS | Affordable Treefellers";
$pageDescription = "24/7 emergency storm damage tree removal in Shawnee, KS. Fallen trees, broken limbs, and debris cleanup. Licensed, insured, fast response. Call (816) 509-3232 now.";
$canonicalUrl    = "https://affordabletreefellers.com/services/storm-damage-cleanup";
$ogImage         = "https://i.imgur.com/AxHfkOk.jpeg";
$currentPage     = "services";
$heroImage       = "https://i.imgur.com/AxHfkOk.jpeg";
$useSwiper       = false;
$useTilt         = false;
$useTyped        = false;
$schemaMarkup    = '{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "Storm Damage Cleanup & Emergency Tree Service",
      "provider": {
        "@type": "LocalBusiness",
        "name": "Affordable Treefellers LLC",
        "telephone": "+18165093232",
        "address": { "@type": "PostalAddress", "addressLocality": "Shawnee", "addressRegion": "KS", "addressCountry": "US" }
      },
      "areaServed": {
        "@type": "GeoCircle",
        "geoMidpoint": { "@type": "GeoCoordinates", "latitude": "39.0417", "longitude": "-94.7203" },
        "geoRadius": "64374"
      },
      "description": "24/7 emergency storm damage tree removal and cleanup in the Shawnee, KS area.",
      "url": "https://affordabletreefellers.com/services/storm-damage-cleanup"
    },
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://affordabletreefellers.com" },
        { "@type": "ListItem", "position": 2, "name": "Services", "item": "https://affordabletreefellers.com/services" },
        { "@type": "ListItem", "position": 3, "name": "Storm Damage Cleanup", "item": "https://affordabletreefellers.com/services/storm-damage-cleanup" }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How fast can you respond to storm damage in Shawnee?",
          "acceptedAnswer": { "@type": "Answer", "text": "We offer 24/7 emergency response and typically reach properties within our 30-mile service area in under 2 hours. Safety hazards like trees on structures or blocking roads are prioritized." }
        },
        {
          "@type": "Question",
          "name": "Does homeowners insurance cover storm damage tree removal?",
          "acceptedAnswer": { "@type": "Answer", "text": "In most cases, yes. If a storm-damaged tree hits your home, vehicle, or other insured structure, your homeowners policy typically covers removal costs. Trees that fall in an open yard without hitting a structure may not be covered. We work with insurance adjusters and provide the documentation needed for claims." }
        },
        {
          "@type": "Question",
          "name": "A tree fell on my house — what should I do first?",
          "acceptedAnswer": { "@type": "Answer", "text": "First, ensure everyone is safe and evacuate the area if needed. Do not attempt to move the tree yourself. Call us at (816) 509-3232 for emergency removal. Then contact your insurance company to start a claim. We can coordinate directly with your adjuster." }
        }
      ]
    },
    {
      "@type": "LocalBusiness",
      "name": "Affordable Treefellers LLC",
      "aggregateRating": { "@type": "AggregateRating", "ratingValue": "5", "reviewCount": "45" }
    }
  ]
}';

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php';
?>

<main id="main-content">

  <!-- Hero -->
  <section class="page-hero" style="background-image: url('https://i.imgur.com/AxHfkOk.jpeg');">
    <div class="container">
      <h1>Storm Damage Cleanup &amp; Emergency Tree Service in Shawnee, KS</h1>
      <p>24/7 emergency response. Fallen trees, broken limbs, and storm debris — we handle it fast.</p>
      <div style="margin-top: var(--space-lg);">
        <a href="tel:+18165093232" class="btn-primary" style="background: var(--accent); box-shadow: 0 4px 0 #c48a1e; font-size: 1.1rem;">Call Now: (816) 509-3232</a>
      </div>
    </div>
  </section>

  <!-- Breadcrumbs -->
  <div class="breadcrumbs">
    <div class="container">
      <a href="/">Home</a> <span>/</span> <a href="/services">Services</a> <span>/</span> <strong>Storm Damage Cleanup</strong>
    </div>
  </div>

  <!-- Emergency Banner -->
  <div class="trust-strip" style="background: #b91c1c;">
    <div class="container">
      <div class="trust-badge"><i class="icon-zap"></i> 24/7 Emergency Response</div>
      <div class="trust-badge"><i class="icon-clock"></i> Under 2-Hour Response Time</div>
      <div class="trust-badge"><i class="icon-shield-check"></i> Licensed &amp; Insured</div>
      <div class="trust-badge"><i class="icon-file-text"></i> Insurance Claim Support</div>
    </div>
  </div>

  <!-- Answer-First Opening -->
  <section>
    <div class="container">
      <div class="prose" data-animate="fade-up" style="max-width: 100%;">
        <p style="font-size: 1.15rem; line-height: 1.7;"><strong>If a tree is on your house, blocking your driveway, or tangled in power lines, call <a href="tel:+18165093232" style="color: var(--primary);">(816) 509-3232</a> now.</strong> We respond to storm emergencies 24 hours a day, 7 days a week, and typically reach properties in our service area within 2 hours.</p>
      </div>
      <div class="prose" data-animate="fade-up" style="margin-top: var(--space-lg);">
        <p>Affordable Treefellers provides emergency storm damage tree removal and cleanup in Shawnee, Kansas and throughout the greater Kansas City, KS metro area. Kansas sees some of the most severe weather in the country — tornadoes, straight-line winds topping 80 mph, ice storms, and heavy thunderstorms that bring down full-grown trees in seconds. When that happens, you need a crew with the equipment and experience to get your property safe and accessible fast.</p>
        <p>Since 2013, we've responded to hundreds of storm calls across Johnson County. Our bucket truck, chainsaws, and chipper are storm-ready year-round. We work directly with your insurance adjuster and provide the documentation you need for your claim.</p>
      </div>
    </div>
  </section>

  <!-- What We Handle (Split with image) -->
  <section class="bg-alt">
    <div class="container">
      <div class="split">
        <div class="svc-img" data-animate="wipe-right">
          <img src="https://i.imgur.com/AP4RtPl.jpeg" alt="Branch fallen in snowy Kansas neighborhood requiring storm damage cleanup" width="800" height="600" loading="lazy">
        </div>
        <div data-animate="fade-up">
          <span class="eyebrow-label">Emergency Services</span>
          <h2 class="section-title">What We Handle After a Storm</h2>
          <ul class="check-list">
            <li><i class="icon-check"></i> <span><strong>Trees on homes and roofs</strong> — careful removal to minimize further structural damage</span></li>
            <li><i class="icon-check"></i> <span><strong>Trees on vehicles</strong> — safe extraction and debris cleanup</span></li>
            <li><i class="icon-check"></i> <span><strong>Trees blocking roads and driveways</strong> — fast clearance to restore access</span></li>
            <li><i class="icon-check"></i> <span><strong>Hanging limbs and widow makers</strong> — dangerous branches that haven't fallen yet</span></li>
            <li><i class="icon-check"></i> <span><strong>Trees on fences and power lines</strong> — we coordinate with utilities when needed</span></li>
            <li><i class="icon-check"></i> <span><strong>Full yard debris cleanup</strong> — chipping, hauling, and site restoration</span></li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Answer Blocks -->
  <section>
    <div class="container">
      <div class="answer-block" data-animate="fade-up">
        <h2>Does Insurance Cover Storm Damage Tree Removal?</h2>
        <p class="prose">In most cases, <strong>yes</strong>. If a storm-felled tree damages your home, garage, vehicle, or other insured structure, your homeowners policy typically covers the removal cost. Trees that fall in open yard areas without striking a structure may have limited or no coverage — it depends on your specific policy. We work with insurance adjusters regularly and provide detailed documentation, photos, and itemized invoices to support your claim.</p>
      </div>
      <div class="answer-block" data-animate="fade-up">
        <h3>A Tree Fell on My House — What Should I Do First?</h3>
        <p class="prose"><strong>Step 1:</strong> Ensure everyone is safe. If the tree compromised the roof structure, evacuate the area beneath it. <strong>Step 2:</strong> Call us at <a href="tel:+18165093232" style="color: var(--primary); font-weight: 600;">(816) 509-3232</a> for emergency removal. <strong>Step 3:</strong> Contact your insurance company to start a claim. <strong>Step 4:</strong> Tarp any exposed areas to prevent water damage. We can help with emergency tarping during the removal process and coordinate directly with your insurance adjuster.</p>
      </div>
    </div>
  </section>

  <!-- Mid CTA — Emergency -->
  <section class="storm-cta" style="background-image: url('https://i.imgur.com/61rOsrb.jpeg');">
    <div class="container">
      <div style="max-width: 650px;">
        <h2>Don't Wait — Call Now</h2>
        <p class="prose" style="color: rgba(255,255,255,0.9); font-size: 1.1rem;">Every hour a damaged tree sits on your property increases the risk of further damage. Water intrusion through a compromised roof can cause thousands in additional repairs. We respond fast so you can start recovering.</p>
        <a href="tel:+18165093232" class="storm-phone">(816) 509-3232</a>
        <div class="storm-badge"><i class="icon-clock"></i> Answering calls 24/7 — even at 3AM</div>
      </div>
    </div>
  </section>

  <!-- Kansas Storms Section -->
  <section>
    <div class="container">
      <div class="split-reverse">
        <div data-animate="fade-up">
          <h2 class="section-title">Why Kansas Properties Are Especially Vulnerable</h2>
          <p class="prose">The Kansas City metro sits in the heart of Tornado Alley. From late spring through early fall, severe thunderstorms can produce straight-line winds over 80 mph, large hail, and tornadoes that snap trunks like matchsticks. Winter brings ice storms that load branches beyond their breaking point — an inch of ice on a 60-foot oak adds thousands of pounds of stress.</p>
          <p class="prose" style="margin-top: var(--space-md);">Johnson County's mature tree canopy — oaks, elms, maples, cottonwoods — means more exposure when storms hit. Regular <a href="/services/tree-trimming-pruning" style="color: var(--primary); font-weight: 600;">tree trimming</a> reduces wind resistance and removes deadwood before it becomes a projectile, but when a storm overwhelms even healthy trees, we're the crew to call.</p>
        </div>
        <div class="svc-img" data-animate="wipe-right">
          <img src="https://i.imgur.com/AxHfkOk.jpeg" alt="Fallen tree with exposed root ball near power lines after severe storm in Kansas" width="800" height="600" loading="lazy">
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section class="bg-alt">
    <div class="container">
      <div style="text-align: center; margin-bottom: var(--space-2xl);">
        <h2 class="section-title">Storm Damage Questions</h2>
      </div>
      <div class="faq-list">
        <div class="faq-item">
          <button class="faq-question" aria-expanded="false">
            How fast can you respond to storm damage in Shawnee?
            <i class="icon-chevron-down"></i>
          </button>
          <div class="faq-answer" role="region">
            <div class="faq-answer-inner">We typically reach properties within our 30-mile service area in under 2 hours. Safety hazards — trees on structures, blocking roads, or entangled in power lines — are always prioritized. Call <a href="tel:+18165093232">(816) 509-3232</a> any time, day or night.</div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-question" aria-expanded="false">
            Does homeowners insurance cover storm damage tree removal?
            <i class="icon-chevron-down"></i>
          </button>
          <div class="faq-answer" role="region">
            <div class="faq-answer-inner">Usually yes, when a tree damages an insured structure (home, garage, fence, vehicle). Trees that fall in open yard areas may not be covered. We provide documentation and work with adjusters to support your claim. Check your specific policy for details.</div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-question" aria-expanded="false">
            A tree fell on my house — what should I do first?
            <i class="icon-chevron-down"></i>
          </button>
          <div class="faq-answer" role="region">
            <div class="faq-answer-inner">Ensure everyone is safe and evacuate from under compromised areas. Call us for emergency removal, then contact your insurance company. Don't attempt to move the tree yourself. We can assist with emergency tarping to prevent further water damage during removal.</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Related + Closing CTA -->
  <section>
    <div class="container">
      <div style="margin-bottom: var(--space-2xl);">
        <h3>Related Services</h3>
        <div class="related-services" style="margin-top: var(--space-md);">
          <a href="/services/tree-removal" class="related-link"><i class="icon-axe"></i> Tree Removal</a>
          <a href="/services/tree-trimming-pruning" class="related-link"><i class="icon-scissors"></i> Tree Trimming (Storm Prep)</a>
          <a href="/services/stump-grinding" class="related-link"><i class="icon-circle-dot"></i> Stump Grinding</a>
        </div>
      </div>
      <div class="closing-cta">
        <h2 class="section-title">Storm Damage? We're Ready.</h2>
        <p class="prose-centered" style="text-align: center; color: var(--text-light);">Licensed, insured, USDOT-registered, and available around the clock. Call now — we'll be there.</p>
        <a href="tel:+18165093232" class="cta-phone">(816) 509-3232</a>
        <div class="cta-buttons">
          <a href="/contact" class="btn-primary">Contact Us</a>
          <a href="/services" class="btn-secondary">All Services</a>
        </div>
      </div>
      <p class="last-updated">Last Updated: <?php echo date('F Y'); ?></p>
    </div>
  </section>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
