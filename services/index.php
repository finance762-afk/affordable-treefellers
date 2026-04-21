<?php
$pageTitle       = "Tree Services in Shawnee, KS | Affordable Treefellers LLC";
$pageDescription = "Affordable Treefellers provides tree removal, trimming, stump grinding, storm damage cleanup, and land clearing in Shawnee, KS. Licensed and insured. Free estimates — call (816) 509-3232.";
$canonicalUrl    = "https://affordabletreefellers.com/services";
$ogImage         = "https://i.imgur.com/BPmnacY.jpeg";
$currentPage     = "services";
$heroImage       = "https://i.imgur.com/2cjSybQ.jpeg";
$useSwiper       = false;
$useTilt         = false;
$useTyped        = false;
$schemaMarkup    = '{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "LocalBusiness",
      "name": "Affordable Treefellers LLC",
      "description": "Full-service tree care company serving Shawnee, KS and the greater Kansas City, KS area since 2013.",
      "telephone": "+18165093232",
      "url": "https://affordabletreefellers.com",
      "address": {
        "@type": "PostalAddress",
        "addressLocality": "Shawnee",
        "addressRegion": "KS",
        "addressCountry": "US"
      }
    },
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://affordabletreefellers.com" },
        { "@type": "ListItem", "position": 2, "name": "Services", "item": "https://affordabletreefellers.com/services" }
      ]
    }
  ]
}';

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php';
?>

<main id="main-content">

  <!-- Page Hero -->
  <section class="page-hero" style="background-image: url('https://i.imgur.com/2cjSybQ.jpeg');">
    <div class="container">
      <h1>Tree Services in Shawnee, KS</h1>
      <p>Full-service tree care for homes and businesses across Shawnee, KS. Every job comes with a free on-site estimate and a firm price before we start.</p>
    </div>
  </section>

  <!-- Breadcrumbs -->
  <div class="breadcrumbs">
    <div class="container">
      <a href="/">Home</a> <span>/</span> <strong>Services</strong>
    </div>
  </div>

  <!-- Entity + Intro -->
  <section>
    <div class="container">
      <div class="prose-centered" style="text-align: center;">
        <p>Affordable Treefellers LLC is a licensed and insured tree service company based in Shawnee, Kansas. Our crew handles everything from precision trimming and full tree removal to stump grinding, storm damage cleanup, and commercial land clearing — all within a 30&ndash;40 mile radius of Shawnee, KS. USDOT #3421117.</p>
      </div>
    </div>
  </section>

  <!-- Services Grid -->
  <section class="bg-alt">
    <div class="section-divider section-divider--top" aria-hidden="true">
      <svg viewBox="0 0 1440 80" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0,0 L1440,80 L0,80 Z" fill="#ffffff"/>
      </svg>
    </div>
    <div class="container">
      <div style="text-align: center; margin-bottom: var(--space-2xl);">
        <span class="section-subtitle">what we do</span>
        <h2 class="section-title">Full-service <span class="text-accent">tree care</span></h2>
      </div>
      <div class="grid-3">

        <a href="/services/tree-removal" class="services-overview-card card-tint-1 reveal-up">
          <div class="card-img">
            <img src="https://i.imgur.com/bcIwTki.jpeg" alt="Tree removal with chainsaw in Shawnee, KS" width="600" height="375" loading="lazy">
          </div>
          <div class="card-body">
            <h3>Tree Removal</h3>
            <p>Safe, complete removal of dead, hazardous, or unwanted trees. Bucket trucks equipped for any height or access challenge.</p>
            <span class="card-link">Learn More <i data-lucide="arrow-right"></i></span>
          </div>
        </a>

        <a href="/services/tree-trimming-pruning" class="services-overview-card card-tint-2 reveal-up reveal-delay-1">
          <div class="card-img">
            <img src="https://i.imgur.com/Er9wTxc.jpeg" alt="Bucket truck trimming mature tree in Shawnee, Kansas" width="600" height="375" loading="lazy">
          </div>
          <div class="card-body">
            <h3>Tree Trimming &amp; Pruning</h3>
            <p>Crown thinning, deadwood removal, and shaping to keep trees healthy and clear of structures, fences, and power lines.</p>
            <span class="card-link">Learn More <i data-lucide="arrow-right"></i></span>
          </div>
        </a>

        <a href="/services/stump-grinding" class="services-overview-card card-tint-3 reveal-up reveal-delay-2">
          <div class="card-img">
            <img src="https://i.imgur.com/BvsalRQ.jpeg" alt="Affordable Treefellers equipment for stump grinding in Shawnee, KS" width="600" height="375" loading="lazy">
          </div>
          <div class="card-body">
            <h3>Stump Grinding &amp; Removal</h3>
            <p>Grind stumps 6&ndash;12 inches below grade so you can reclaim your yard, reseed, or build without obstruction.</p>
            <span class="card-link">Learn More <i data-lucide="arrow-right"></i></span>
          </div>
        </a>

        <a href="/services/storm-damage-cleanup" class="services-overview-card card-tint-neutral reveal-up reveal-delay-3">
          <div class="card-img">
            <img src="https://i.imgur.com/AxHfkOk.jpeg" alt="Fallen tree near power lines after storm in Kansas" width="600" height="375" loading="lazy">
          </div>
          <div class="card-body">
            <h3>Storm Damage Cleanup</h3>
            <p>24/7 emergency response for fallen trees, broken limbs, and debris from Kansas storms, tornadoes, and ice events.</p>
            <span class="card-link">Learn More <i data-lucide="arrow-right"></i></span>
          </div>
        </a>

        <a href="/services/commercial-residential-tree-care" class="services-overview-card card-tint-1 reveal-up reveal-delay-4">
          <div class="card-img">
            <img src="https://i.imgur.com/c9RF7k9.jpeg" alt="Bucket truck at residential property for tree service" width="600" height="375" loading="lazy">
          </div>
          <div class="card-body">
            <h3>Commercial &amp; Residential Tree Care</h3>
            <p>Ongoing maintenance for homeowners, property managers, HOAs, and commercial lots across the Kansas City, KS metro.</p>
            <span class="card-link">Learn More <i data-lucide="arrow-right"></i></span>
          </div>
        </a>

        <a href="/services/lot-land-clearing" class="services-overview-card card-tint-2 reveal-up reveal-delay-5">
          <div class="card-img">
            <img src="https://i.imgur.com/XcCQgIQ.jpeg" alt="Cleared residential lot ready for construction in Shawnee" width="600" height="375" loading="lazy">
          </div>
          <div class="card-body">
            <h3>Lot &amp; Land Clearing</h3>
            <p>Complete site clearing for new construction, fence lines, and overgrown properties. Trees, brush, and stumps removed.</p>
            <span class="card-link">Learn More <i data-lucide="arrow-right"></i></span>
          </div>
        </a>

      </div>
    </div>
  </section>

  <!-- Closing CTA -->
  <section class="closing-cta" style="background: linear-gradient(135deg, #0A0A0A 0%, #1A1A1A 60%, var(--primary-dark) 100%); color: #fff; overflow: hidden;">
    <i class="floating-accent float-animate-slow" data-lucide="trees" aria-hidden="true" style="top: 10%; left: 6%; font-size: 10rem; color: #ffffff; opacity: 0.05;"></i>
    <i class="floating-accent float-animate" data-lucide="leaf" aria-hidden="true" style="bottom: 12%; right: 8%; font-size: 8rem; color: var(--accent); opacity: 0.08;"></i>
    <div class="container" style="position: relative; z-index: 1;">
      <span class="section-subtitle" style="color: var(--accent);">ready when you are</span>
      <h2 class="section-title" style="color: #fff;">Need <span class="text-accent" style="color: var(--accent);">tree work</span> in Shawnee?</h2>
      <p class="prose-centered" style="text-align: center; color: rgba(255,255,255,0.85); font-size: 1.1rem;">Every job starts with a free estimate and a straightforward price. No hidden fees, no pressure — just honest tree work from a crew that's been doing this since 2013.</p>
      <a href="tel:+18165093232" class="cta-phone" style="color: var(--accent);">(816) 509-3232</a>
      <div class="cta-buttons">
        <a href="/contact" class="btn-primary" style="background: var(--accent); color: #1a1a1a; box-shadow: 0 4px 0 #c48a1e;">Get a Free Estimate</a>
        <a href="/about" class="btn-secondary" style="border-color: #fff; color: #fff;">About Our Team</a>
      </div>
    </div>
  </section>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
