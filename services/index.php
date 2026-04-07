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
      <p>From a single branch to an entire lot, Affordable Treefellers has the crew and equipment to handle it. Every service comes with a free on-site estimate and a firm price before we start.</p>
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
        <p>Affordable Treefellers LLC is a licensed and insured tree service company based in Shawnee, Kansas. Owner Eric Frauenknecht and his crew handle everything from precision trimming and full tree removal to stump grinding, storm damage cleanup, and commercial land clearing — all within a 30&ndash;40 mile radius of Shawnee, KS. USDOT #3421117.</p>
      </div>
    </div>
  </section>

  <!-- Services Grid -->
  <section class="bg-alt">
    <div class="container">
      <div style="text-align: center; margin-bottom: var(--space-2xl);">
        <h2 class="section-title">What We Do</h2>
      </div>
      <div class="grid-3" data-stagger>

        <a href="/services/tree-removal" class="services-overview-card" data-animate="fade-up">
          <div class="card-img">
            <img src="https://i.imgur.com/bcIwTki.jpeg" alt="Tree removal with Stihl chainsaw in Shawnee, KS" width="600" height="375" loading="lazy">
          </div>
          <div class="card-body">
            <h3>Tree Removal</h3>
            <p>Safe, complete removal of dead, hazardous, or unwanted trees. Bucket truck equipped for any height or access challenge.</p>
            <span class="card-link">Learn More <i data-lucide="arrow-right"></i></span>
          </div>
        </a>

        <a href="/services/tree-trimming-pruning" class="services-overview-card" data-animate="fade-up">
          <div class="card-img">
            <img src="https://i.imgur.com/Er9wTxc.jpeg" alt="Bucket truck trimming mature tree in Shawnee, Kansas" width="600" height="375" loading="lazy">
          </div>
          <div class="card-body">
            <h3>Tree Trimming &amp; Pruning</h3>
            <p>Crown thinning, deadwood removal, and shaping to keep trees healthy and clear of structures, fences, and power lines.</p>
            <span class="card-link">Learn More <i data-lucide="arrow-right"></i></span>
          </div>
        </a>

        <a href="/services/stump-grinding" class="services-overview-card" data-animate="fade-up">
          <div class="card-img">
            <img src="https://i.imgur.com/FtWpS3D.jpeg" alt="Vermeer chipper for stump grinding in Shawnee, KS" width="600" height="375" loading="lazy">
          </div>
          <div class="card-body">
            <h3>Stump Grinding &amp; Removal</h3>
            <p>Grind stumps 6&ndash;12 inches below grade so you can reclaim your yard, reseed, or build without obstruction.</p>
            <span class="card-link">Learn More <i data-lucide="arrow-right"></i></span>
          </div>
        </a>

        <a href="/services/storm-damage-cleanup" class="services-overview-card" data-animate="fade-up">
          <div class="card-img">
            <img src="https://i.imgur.com/AxHfkOk.jpeg" alt="Fallen tree near power lines after storm in Kansas" width="600" height="375" loading="lazy">
          </div>
          <div class="card-body">
            <h3>Storm Damage Cleanup</h3>
            <p>24/7 emergency response for fallen trees, broken limbs, and debris from Kansas storms, tornadoes, and ice events.</p>
            <span class="card-link">Learn More <i data-lucide="arrow-right"></i></span>
          </div>
        </a>

        <a href="/services/commercial-residential-tree-care" class="services-overview-card" data-animate="fade-up">
          <div class="card-img">
            <img src="https://i.imgur.com/c9RF7k9.jpeg" alt="Bucket truck at residential property for tree service" width="600" height="375" loading="lazy">
          </div>
          <div class="card-body">
            <h3>Commercial &amp; Residential Tree Care</h3>
            <p>Ongoing maintenance for homeowners, property managers, HOAs, and commercial lots across the Kansas City, KS metro.</p>
            <span class="card-link">Learn More <i data-lucide="arrow-right"></i></span>
          </div>
        </a>

        <a href="/services/lot-land-clearing" class="services-overview-card" data-animate="fade-up">
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
  <section class="closing-cta">
    <div class="container">
      <h2 class="section-title">Need Tree Work in Shawnee?</h2>
      <p class="prose-centered" style="text-align: center; color: var(--text-light); font-size: 1.1rem;">Every job starts with a free estimate and a straightforward price. No hidden fees, no pressure — just honest tree work from a crew that's been doing this since 2013.</p>
      <a href="tel:+18165093232" class="cta-phone">(816) 509-3232</a>
      <div class="cta-buttons">
        <a href="/contact" class="btn-primary">Get a Free Estimate</a>
        <a href="/about" class="btn-secondary">About Our Team</a>
      </div>
    </div>
  </section>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
