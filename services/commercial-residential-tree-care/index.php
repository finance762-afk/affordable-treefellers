<?php
$pageTitle       = "Commercial & Residential Tree Care in Shawnee, KS | Affordable Treefellers";
$pageDescription = "Professional tree care for homes, businesses, HOAs, and property managers in Shawnee, KS. Trimming, removal, maintenance plans. USDOT #3421117. Call (816) 509-3232.";
$canonicalUrl    = "https://affordabletreefellers.com/services/commercial-residential-tree-care";
$ogImage         = "https://i.imgur.com/c9RF7k9.jpeg";
$currentPage     = "services";
$heroImage       = "https://i.imgur.com/c9RF7k9.jpeg";
$useSwiper       = false;
$useTilt         = false;
$useTyped        = false;
$schemaMarkup    = '{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "Commercial & Residential Tree Care",
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
      "description": "Ongoing tree maintenance for homeowners, property managers, HOAs, and commercial properties in the Shawnee, KS area.",
      "url": "https://affordabletreefellers.com/services/commercial-residential-tree-care"
    },
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://affordabletreefellers.com" },
        { "@type": "ListItem", "position": 2, "name": "Services", "item": "https://affordabletreefellers.com/services" },
        { "@type": "ListItem", "position": 3, "name": "Commercial & Residential Tree Care", "item": "https://affordabletreefellers.com/services/commercial-residential-tree-care" }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Do you offer recurring tree maintenance plans?",
          "acceptedAnswer": { "@type": "Answer", "text": "Yes. We offer annual and semi-annual maintenance plans for residential and commercial properties. Plans typically include scheduled trimming, deadwood removal, and hazard assessments. Contact us to build a plan that fits your property and budget." }
        },
        {
          "@type": "Question",
          "name": "Can you handle tree work for HOAs and apartment complexes?",
          "acceptedAnswer": { "@type": "Answer", "text": "Absolutely. We serve HOAs, apartment communities, office parks, and multi-unit properties across the Kansas City, KS area. We coordinate with property managers on scheduling, provide liability certificates, and handle the full scope of tree work on the property." }
        },
        {
          "@type": "Question",
          "name": "Are you insured for commercial tree work?",
          "acceptedAnswer": { "@type": "Answer", "text": "Yes. Affordable Treefellers LLC carries liability insurance and is registered with the U.S. Department of Transportation (USDOT #3421117). We provide certificates of insurance to property managers and HOAs before starting work." }
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
  <section class="page-hero" style="background-image: url('https://i.imgur.com/c9RF7k9.jpeg');">
    <div class="container">
      <h1>Commercial &amp; Residential Tree Care in Shawnee, KS</h1>
      <p>Reliable tree service for homeowners, property managers, HOAs, and businesses across the Kansas City, KS area.</p>
    </div>
  </section>

  <!-- Breadcrumbs -->
  <div class="breadcrumbs">
    <div class="container">
      <a href="/">Home</a> <span>/</span> <a href="/services">Services</a> <span>/</span> <strong>Commercial &amp; Residential Tree Care</strong>
    </div>
  </div>

  <!-- Answer-First Opening -->
  <section>
    <div class="container">
      <div class="prose" data-animate="fade-up">
        <p style="font-size: 1.1rem; line-height: 1.7;">Whether you're a homeowner with a few backyard trees or a property manager responsible for dozens across a commercial campus, Affordable Treefellers provides the same level of professional service at a fair price. We handle <a href="/services/tree-trimming-pruning" style="color: var(--primary); font-weight: 600;">trimming</a>, <a href="/services/tree-removal" style="color: var(--primary); font-weight: 600;">removal</a>, <a href="/services/stump-grinding" style="color: var(--primary); font-weight: 600;">stump grinding</a>, and ongoing maintenance plans for properties of every size in Shawnee, Kansas and throughout the greater Kansas City, KS metro area.</p>
        <p>Affordable Treefellers LLC is a licensed and insured tree service company based in Shawnee, Kansas. USDOT #3421117. Since 2013, we've served homeowners, landlords, HOAs, apartment communities, office parks, retail centers, and municipal properties across Johnson County and the surrounding area.</p>
      </div>
    </div>
  </section>

  <!-- Answer Blocks -->
  <section class="bg-alt">
    <div class="container">
      <div class="answer-block" data-animate="fade-up">
        <h2>How Much Does Commercial Tree Care Cost in Shawnee?</h2>
        <p class="prose">Costs depend on the scope of work and number of trees. Residential trimming for a few trees typically runs <strong>$150&ndash;$1,200</strong>. Commercial maintenance contracts for multi-property accounts are quoted per visit based on tree count and service type. We provide free assessments for both residential and commercial properties — no obligation, firm pricing.</p>
      </div>
      <div class="answer-block" data-animate="fade-up">
        <h3>What Does a Tree Maintenance Plan Include?</h3>
        <p class="prose">Our maintenance plans include scheduled trimming, deadwood removal, and hazard assessments. Annual plans cover one visit per year; semi-annual plans cover spring and fall service. Plan members get priority scheduling after storms and consistent year-to-year pricing without surprises.</p>
      </div>
    </div>
  </section>

  <!-- Who We Serve (Grid) -->
  <section>
    <div class="container">
      <div style="text-align: center; margin-bottom: var(--space-2xl);">
        <span class="eyebrow-label">Who We Serve</span>
        <h2 class="section-title">Tree Care for Every Property Type</h2>
      </div>
      <div class="grid-2" data-stagger>
        <div class="card" style="border-radius: 4px;" data-animate="fade-up">
          <h3><i class="lucide-home" style="color: var(--primary); margin-right: var(--space-sm);"></i> Homeowners</h3>
          <p class="prose" style="margin-top: var(--space-sm); color: var(--text-light);">Most of our work is for residential homeowners — trimming shade trees away from rooflines, removing dead trees before they fall, and grinding old stumps. One tree or ten, we treat every yard the same.</p>
        </div>
        <div class="card" style="border-radius: 4px;" data-animate="fade-up">
          <h3><i class="lucide-building-2" style="color: var(--primary); margin-right: var(--space-sm);"></i> Property Managers &amp; Landlords</h3>
          <p class="prose" style="margin-top: var(--space-sm); color: var(--text-light);">We provide scheduled maintenance for multi-unit properties and rental portfolios. One point of contact, one invoice, consistent service across all your properties.</p>
        </div>
        <div class="card" style="border-radius: 4px;" data-animate="fade-up">
          <h3><i class="lucide-users" style="color: var(--primary); margin-right: var(--space-sm);"></i> HOAs &amp; Communities</h3>
          <p class="prose" style="margin-top: var(--space-sm); color: var(--text-light);">Common areas, entry features, and neighborhood tree canopy need consistent care. We coordinate with HOA boards on timing, scope, and insurance requirements for community tree work.</p>
        </div>
        <div class="card" style="border-radius: 4px;" data-animate="fade-up">
          <h3><i class="lucide-store" style="color: var(--primary); margin-right: var(--space-sm);"></i> Commercial Properties</h3>
          <p class="prose" style="margin-top: var(--space-sm); color: var(--text-light);">Office parks, retail centers, restaurants, and church campuses. We schedule around business hours, maintain clean sites, and provide liability certificates upfront.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Split: Maintenance Plans -->
  <section>
    <div class="container">
      <div class="split">
        <div class="svc-img" data-animate="wipe-right">
          <img src="https://i.imgur.com/kleywYF.jpeg" alt="Affordable Treefellers crew with chipper performing tree care at residential property" width="800" height="600" loading="lazy">
        </div>
        <div data-animate="fade-up">
          <h2 class="section-title">Ongoing Maintenance Plans</h2>
          <p class="prose">Trees don't stop growing after one trim. Kansas weather, fast-growing species, and the sheer number of trees on most properties mean tree work is ongoing. Our maintenance plans take the guesswork out:</p>
          <ul class="check-list" style="margin-top: var(--space-md);">
            <li><i class="lucide-check"></i> <span><strong>Annual plans</strong> — scheduled trimming, deadwood removal, and hazard assessment once a year</span></li>
            <li><i class="lucide-check"></i> <span><strong>Semi-annual plans</strong> — spring and fall service to prep for storm season and winter loads</span></li>
            <li><i class="lucide-check"></i> <span><strong>Priority scheduling</strong> — plan members get moved to the front of the line after storms</span></li>
            <li><i class="lucide-check"></i> <span><strong>Consistent pricing</strong> — no year-to-year price surprises when you stay on a plan</span></li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Mid-Page CTA -->
  <section style="padding: 0;">
    <div class="container">
      <div class="inline-cta" data-animate="fade-up">
        <h2>Build a Maintenance Plan for Your Property</h2>
        <a href="tel:+18165093232" class="cta-phone">(816) 509-3232</a>
        <p>We'll assess your property and recommend a plan that fits your needs and budget.</p>
        <a href="/contact" class="btn-primary">Get Started</a>
      </div>
    </div>
  </section>

  <!-- Why Work With Us -->
  <section>
    <div class="container">
      <div class="split-reverse">
        <div data-animate="fade-up">
          <h2 class="section-title">Why Property Managers Choose Us</h2>
          <ul class="benefit-list">
            <li>
              <span class="benefit-icon"><i class="lucide-user-check"></i></span>
              <span><strong>Owner-Operated</strong> — Eric oversees every commercial account personally. One point of contact, not a call center.</span>
            </li>
            <li>
              <span class="benefit-icon"><i class="lucide-file-check"></i></span>
              <span><strong>Insurance Certificates</strong> — COIs provided before work begins. Liability and workers' comp coverage.</span>
            </li>
            <li>
              <span class="benefit-icon"><i class="lucide-truck"></i></span>
              <span><strong>USDOT Registered</strong> — DOT #3421117. Equipment transported legally and safely.</span>
            </li>
            <li>
              <span class="benefit-icon"><i class="lucide-clock"></i></span>
              <span><strong>Flexible Scheduling</strong> — Work around business hours, tenant schedules, and HOA meeting timelines.</span>
            </li>
          </ul>
        </div>
        <div class="svc-img" data-animate="wipe-right">
          <img src="https://i.imgur.com/4Wuvaqu.jpeg" alt="Affordable Treefellers trucks with stripped trunk during commercial tree work" width="800" height="600" loading="lazy">
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section class="bg-alt">
    <div class="container">
      <div style="text-align: center; margin-bottom: var(--space-2xl);">
        <h2 class="section-title">Commercial &amp; Residential Tree Care Questions</h2>
      </div>
      <div class="faq-list">
        <div class="faq-item">
          <button class="faq-question" aria-expanded="false">
            Do you offer recurring tree maintenance plans?
            <i class="lucide-chevron-down"></i>
          </button>
          <div class="faq-answer" role="region">
            <div class="faq-answer-inner">Yes. We offer annual and semi-annual plans that include scheduled trimming, deadwood removal, and hazard assessments. Plans are customized to your property's tree count, species, and maintenance goals. Contact us to build one that fits your budget.</div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-question" aria-expanded="false">
            Can you handle tree work for HOAs and apartment complexes?
            <i class="lucide-chevron-down"></i>
          </button>
          <div class="faq-answer" role="region">
            <div class="faq-answer-inner">Absolutely. We work with HOAs, apartment communities, and multi-unit properties throughout the KC metro. We coordinate scheduling with property management, provide insurance certificates, and handle the full scope of tree work across the property.</div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-question" aria-expanded="false">
            Are you insured for commercial tree work?
            <i class="lucide-chevron-down"></i>
          </button>
          <div class="faq-answer" role="region">
            <div class="faq-answer-inner">Yes. We carry liability insurance and are registered with the U.S. Department of Transportation (USDOT #3421117). Certificates of insurance are provided to property managers and HOAs before any work begins.</div>
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
          <a href="/services/tree-trimming-pruning" class="related-link"><i class="lucide-scissors"></i> Tree Trimming &amp; Pruning</a>
          <a href="/services/tree-removal" class="related-link"><i class="lucide-axe"></i> Tree Removal</a>
          <a href="/services/lot-land-clearing" class="related-link"><i class="lucide-trees"></i> Lot &amp; Land Clearing</a>
        </div>
      </div>
      <div class="closing-cta">
        <h2 class="section-title">One Call Covers Your Entire Property</h2>
        <p class="prose-centered" style="text-align: center; color: var(--text-light);">Whether it's a single backyard tree or a 50-property portfolio, we'll give you a straight answer and a fair price. Call today for a free assessment.</p>
        <a href="tel:+18165093232" class="cta-phone">(816) 509-3232</a>
        <div class="cta-buttons">
          <a href="/contact" class="btn-primary">Get a Free Assessment</a>
          <a href="/services" class="btn-secondary">All Services</a>
        </div>
      </div>
      <p class="last-updated">Last Updated: <?php echo date('F Y'); ?></p>
    </div>
  </section>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
