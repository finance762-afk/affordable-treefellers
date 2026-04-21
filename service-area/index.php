<?php
$pageTitle       = "Tree Service Areas | Shawnee, KS & Surrounding Communities | Affordable Treefellers";
$pageDescription = "Affordable Treefellers serves Shawnee, Overland Park, Olathe, Lenexa, and communities across the Kansas City, KS metro. 30-40 mile service radius. Call (816) 509-3232.";
$canonicalUrl    = "https://affordabletreefellers.com/service-area";
$ogImage         = "https://i.imgur.com/aZemz7o.jpeg";
$currentPage     = "service-area";
$heroImage       = "https://i.imgur.com/aZemz7o.jpeg";
$useSwiper       = false;
$useTilt         = false;
$useTyped        = false;
$schemaMarkup    = '{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "LocalBusiness",
      "name": "Affordable Treefellers LLC",
      "telephone": "+18165093232",
      "address": {
        "@type": "PostalAddress",
        "addressLocality": "Shawnee",
        "addressRegion": "KS",
        "addressCountry": "US"
      },
      "areaServed": [
        { "@type": "City", "name": "Shawnee", "containedInPlace": { "@type": "State", "name": "Kansas" } },
        { "@type": "City", "name": "Overland Park", "containedInPlace": { "@type": "State", "name": "Kansas" } },
        { "@type": "City", "name": "Olathe", "containedInPlace": { "@type": "State", "name": "Kansas" } },
        { "@type": "City", "name": "Lenexa", "containedInPlace": { "@type": "State", "name": "Kansas" } },
        { "@type": "City", "name": "Merriam", "containedInPlace": { "@type": "State", "name": "Kansas" } },
        { "@type": "City", "name": "Mission", "containedInPlace": { "@type": "State", "name": "Kansas" } },
        { "@type": "City", "name": "Prairie Village", "containedInPlace": { "@type": "State", "name": "Kansas" } },
        { "@type": "City", "name": "Leawood", "containedInPlace": { "@type": "State", "name": "Kansas" } },
        { "@type": "City", "name": "De Soto", "containedInPlace": { "@type": "State", "name": "Kansas" } },
        { "@type": "City", "name": "Bonner Springs", "containedInPlace": { "@type": "State", "name": "Kansas" } }
      ]
    },
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://affordabletreefellers.com" },
        { "@type": "ListItem", "position": 2, "name": "Service Area", "item": "https://affordabletreefellers.com/service-area" }
      ]
    }
  ]
}';

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php';
?>

<main id="main-content">

  <!-- Hero -->
  <section class="page-hero" style="background-image: url('https://i.imgur.com/aZemz7o.jpeg');">
    <div class="container">
      <h1>Tree Service Areas in Shawnee, KS &amp; Surrounding Communities</h1>
      <p>Serving the Kansas side of the KC metro within a 30&ndash;40 mile radius of Shawnee, KS.</p>
    </div>
  </section>

  <!-- Breadcrumbs -->
  <div class="breadcrumbs">
    <div class="container">
      <a href="/">Home</a> <span>/</span> <strong>Service Area</strong>
    </div>
  </div>

  <!-- Identity + Overview -->
  <section>
    <div class="container">
      <div class="prose" data-animate="fade-up">
        <p style="font-size: 1.1rem; line-height: 1.7;">Affordable Treefellers LLC provides <a href="/services/tree-removal" style="color: var(--primary); font-weight: 600;">tree removal</a>, <a href="/services/tree-trimming-pruning" style="color: var(--primary); font-weight: 600;">trimming</a>, <a href="/services/stump-grinding" style="color: var(--primary); font-weight: 600;">stump grinding</a>, <a href="/services/storm-damage-cleanup" style="color: var(--primary); font-weight: 600;">storm damage cleanup</a>, and <a href="/services/lot-land-clearing" style="color: var(--primary); font-weight: 600;">land clearing</a> within a 30&ndash;40 mile radius of Shawnee, Kansas. We serve the <strong>Kansas side only</strong> of the Kansas City metropolitan area — covering Johnson County, Wyandotte County, Leavenworth County, and parts of Douglas County.</p>
        <p>Downtown Overland Park, a rural lot outside De Soto, a neighborhood in Bonner Springs — we cover it all. Our bucket trucks, chippers, and crew are equipped to get to you. <a href="/services/storm-damage-cleanup" style="color: var(--primary); font-weight: 600;">Emergency storm service</a> is available 24/7 across the entire service area.</p>
      </div>
    </div>
  </section>

  <!-- Service Area Map -->
  <section class="bg-alt">
    <div class="container">
      <div style="text-align: center; margin-bottom: var(--space-lg);">
        <h2 class="section-title">Our Service Area</h2>
        <p style="color: var(--text-light);">30&ndash;40 mile radius from Shawnee, KS — Kansas side only</p>
      </div>
      <div style="border-radius: 4px; overflow: hidden; aspect-ratio: 16/9;">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d198388.0!2d-94.88!3d38.96!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87c08d6b8e6c4c1d%3A0x8e1c8e7b6c3e8a0!2sShawnee%2C%20KS!5e0!3m2!1sen!2sus!4v1700000000000!5m2!1sen!2sus"
          width="100%"
          height="100%"
          style="border: 0; display: block;"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
          title="Affordable Treefellers service area centered on Shawnee, KS">
        </iframe>
      </div>
    </div>
  </section>

  <!-- Communities Served -->
  <section>
    <div class="container">
      <div style="text-align: center; margin-bottom: var(--space-2xl);">
        <h2 class="section-title">Communities We Serve</h2>
      </div>

      <div class="grid-3" data-stagger>

        <!-- Johnson County -->
        <div data-animate="fade-up">
          <h3 style="font-size: 1.1rem; margin-bottom: var(--space-md); color: var(--primary);"><i data-lucide="map-pin" style="margin-right: var(--space-xs);"></i> Johnson County</h3>
          <ul class="check-list">
            <li><i data-lucide="check"></i> <span><strong>Shawnee</strong> — our home base</span></li>
            <li><i data-lucide="check"></i> <span><strong>Overland Park</strong></span></li>
            <li><i data-lucide="check"></i> <span><strong>Olathe</strong></span></li>
            <li><i data-lucide="check"></i> <span><strong>Lenexa</strong></span></li>
            <li><i data-lucide="check"></i> <span><strong>Merriam</strong></span></li>
            <li><i data-lucide="check"></i> <span><strong>Mission</strong></span></li>
            <li><i data-lucide="check"></i> <span><strong>Prairie Village</strong></span></li>
            <li><i data-lucide="check"></i> <span><strong>Leawood</strong></span></li>
            <li><i data-lucide="check"></i> <span><strong>Gardner</strong></span></li>
            <li><i data-lucide="check"></i> <span><strong>Spring Hill</strong></span></li>
            <li><i data-lucide="check"></i> <span><strong>De Soto</strong></span></li>
            <li><i data-lucide="check"></i> <span><strong>Edgerton</strong></span></li>
          </ul>
        </div>

        <!-- Wyandotte County -->
        <div data-animate="fade-up">
          <h3 style="font-size: 1.1rem; margin-bottom: var(--space-md); color: var(--primary);"><i data-lucide="map-pin" style="margin-right: var(--space-xs);"></i> Wyandotte County</h3>
          <ul class="check-list">
            <li><i data-lucide="check"></i> <span><strong>Kansas City, KS</strong></span></li>
            <li><i data-lucide="check"></i> <span><strong>Bonner Springs</strong></span></li>
            <li><i data-lucide="check"></i> <span><strong>Edwardsville</strong></span></li>
          </ul>
          <h3 style="font-size: 1.1rem; margin: var(--space-xl) 0 var(--space-md); color: var(--primary);"><i data-lucide="map-pin" style="margin-right: var(--space-xs);"></i> Leavenworth County</h3>
          <ul class="check-list">
            <li><i data-lucide="check"></i> <span><strong>Basehor</strong></span></li>
            <li><i data-lucide="check"></i> <span><strong>Tonganoxie</strong></span></li>
            <li><i data-lucide="check"></i> <span><strong>Leavenworth</strong></span></li>
          </ul>
        </div>

        <!-- Douglas County / Extended -->
        <div data-animate="fade-up">
          <h3 style="font-size: 1.1rem; margin-bottom: var(--space-md); color: var(--primary);"><i data-lucide="map-pin" style="margin-right: var(--space-xs);"></i> Extended Area</h3>
          <ul class="check-list">
            <li><i data-lucide="check"></i> <span><strong>Lawrence area</strong> (edge of range)</span></li>
            <li><i data-lucide="check"></i> <span><strong>Eudora</strong></span></li>
          </ul>
          <div style="background: var(--bg-alt); padding: var(--space-lg); border-radius: 4px; margin-top: var(--space-xl);">
            <p style="font-size: 0.95rem; line-height: 1.6; color: var(--text-light);"><strong style="color: var(--text);">Not sure if you're in our area?</strong> If you're within roughly 40 miles of Shawnee on the Kansas side, we can probably get to you. Call and ask — we'll let you know.</p>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Services Available -->
  <section class="bg-alt">
    <div class="container">
      <div style="text-align: center; margin-bottom: var(--space-2xl);">
        <h2 class="section-title">Services Available Across Our Area</h2>
        <p class="prose-centered" style="color: var(--text-light);">Every service we offer is available to every community in our service radius. Here's what we do:</p>
      </div>
      <div class="grid-3" data-stagger>
        <a href="/services/tree-removal" class="service-card" data-animate="fade-up">
          <div class="card-icon"><i data-lucide="axe"></i></div>
          <h3>Tree Removal</h3>
          <p>Dead, hazardous, and unwanted trees removed safely with our bucket trucks and professional equipment.</p>
          <span class="card-link">Learn More <i data-lucide="arrow-right"></i></span>
        </a>
        <a href="/services/tree-trimming-pruning" class="service-card" data-animate="fade-up">
          <div class="card-icon"><i data-lucide="scissors"></i></div>
          <h3>Tree Trimming &amp; Pruning</h3>
          <p>Crown thinning, deadwood removal, and clearance trimming for healthy, well-maintained trees.</p>
          <span class="card-link">Learn More <i data-lucide="arrow-right"></i></span>
        </a>
        <a href="/services/stump-grinding" class="service-card" data-animate="fade-up">
          <div class="card-icon"><i data-lucide="circle-dot"></i></div>
          <h3>Stump Grinding</h3>
          <p>Stumps ground 6&ndash;12 inches below grade so you can reclaim your yard.</p>
          <span class="card-link">Learn More <i data-lucide="arrow-right"></i></span>
        </a>
        <a href="/services/storm-damage-cleanup" class="service-card" data-animate="fade-up">
          <div class="card-icon"><i data-lucide="cloud-lightning"></i></div>
          <h3>Storm Damage Cleanup</h3>
          <p>24/7 emergency response for fallen trees and storm debris across the entire service area.</p>
          <span class="card-link">Learn More <i data-lucide="arrow-right"></i></span>
        </a>
        <a href="/services/commercial-residential-tree-care" class="service-card" data-animate="fade-up">
          <div class="card-icon"><i data-lucide="building-2"></i></div>
          <h3>Commercial &amp; Residential</h3>
          <p>Ongoing maintenance for homeowners, property managers, and commercial properties.</p>
          <span class="card-link">Learn More <i data-lucide="arrow-right"></i></span>
        </a>
        <a href="/services/lot-land-clearing" class="service-card" data-animate="fade-up">
          <div class="card-icon"><i data-lucide="trees"></i></div>
          <h3>Lot &amp; Land Clearing</h3>
          <p>Complete site clearing for construction, fencing, and overgrown property cleanup.</p>
          <span class="card-link">Learn More <i data-lucide="arrow-right"></i></span>
        </a>
      </div>
    </div>
  </section>

  <!-- Closing CTA -->
  <section>
    <div class="container">
      <div class="closing-cta">
        <h2 class="section-title">Need Tree Service in the Kansas City, KS Area?</h2>
        <p class="prose-centered" style="text-align: center; color: var(--text-light);">Call us to confirm your location is in our service area and schedule a free on-site estimate. If you're on the Kansas side within about 40 miles of Shawnee, we can get to you.</p>
        <a href="tel:+18165093232" class="cta-phone">(816) 509-3232</a>
        <div class="cta-buttons">
          <a href="/contact" class="btn-primary">Get a Free Estimate</a>
          <a href="/services" class="btn-secondary">View All Services</a>
        </div>
      </div>
    </div>
  </section>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
