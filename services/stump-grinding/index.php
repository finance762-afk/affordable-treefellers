<?php
$pageTitle       = "Stump Grinding & Removal in Shawnee, KS | Affordable Treefellers";
$pageDescription = "Affordable stump grinding in Shawnee, KS. Stumps ground 6-12 inches below grade for clean yards and new construction. Licensed and insured. Free estimates — call (816) 509-3232.";
$canonicalUrl    = "https://affordabletreefellers.com/services/stump-grinding";
$ogImage         = "https://i.imgur.com/FtWpS3D.jpeg";
$currentPage     = "services";
$heroImage       = "https://i.imgur.com/FtWpS3D.jpeg";
$useSwiper       = false;
$useTilt         = false;
$useTyped        = false;
$schemaMarkup    = '{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "Stump Grinding & Removal",
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
      "description": "Stump grinding 6-12 inches below grade for residential and commercial properties in the Shawnee, KS area.",
      "url": "https://affordabletreefellers.com/services/stump-grinding"
    },
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://affordabletreefellers.com" },
        { "@type": "ListItem", "position": 2, "name": "Services", "item": "https://affordabletreefellers.com/services" },
        { "@type": "ListItem", "position": 3, "name": "Stump Grinding", "item": "https://affordabletreefellers.com/services/stump-grinding" }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How much does stump grinding cost in Shawnee, KS?",
          "acceptedAnswer": { "@type": "Answer", "text": "Stump grinding in the Shawnee area typically costs $100 to $500+ per stump depending on diameter, root spread, and accessibility. Small stumps (under 12 inches) start around $100-$150. Large stumps (24+ inches) range from $250-$500+. Multi-stump discounts are available." }
        },
        {
          "@type": "Question",
          "name": "How deep does stump grinding go?",
          "acceptedAnswer": { "@type": "Answer", "text": "We grind stumps 6 to 12 inches below grade level. This is deep enough to cover with soil, reseed grass, plant new landscaping, or pour a concrete pad. Deeper grinding is available if needed for specific construction requirements." }
        },
        {
          "@type": "Question",
          "name": "Can I plant a new tree where the stump was ground?",
          "acceptedAnswer": { "@type": "Answer", "text": "Yes, but we recommend waiting 1-2 seasons. The wood chips decompose and the soil needs time to settle. For best results, remove the excess grindings, backfill with quality topsoil, and plant the new tree slightly offset from the original location." }
        }
      ]
    },
    {
      "@type": "HowTo",
      "name": "How Stump Grinding Works",
      "step": [
        { "@type": "HowToStep", "position": 1, "name": "Assessment", "text": "We measure the stump diameter, check for underground utilities, and assess accessibility for equipment." },
        { "@type": "HowToStep", "position": 2, "name": "Area Prep", "text": "Clear rocks, debris, and any obstacles around the stump. Mark underground utility lines if applicable." },
        { "@type": "HowToStep", "position": 3, "name": "Grinding", "text": "The stump grinder chips the wood 6-12 inches below grade level, working across the entire root flare." },
        { "@type": "HowToStep", "position": 4, "name": "Backfill and Level", "text": "The hole is backfilled with the wood grindings and leveled for a clean finish. Topsoil is available if requested." }
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
  <section class="page-hero" style="background-image: url('https://i.imgur.com/FtWpS3D.jpeg');">
    <div class="container">
      <h1>Stump Grinding &amp; Removal in Shawnee, KS</h1>
      <p>Reclaim your yard. We grind stumps below grade so you can reseed, landscape, or build over the spot.</p>
    </div>
  </section>

  <!-- Breadcrumbs -->
  <div class="breadcrumbs">
    <div class="container">
      <a href="/">Home</a> <span>/</span> <a href="/services">Services</a> <span>/</span> <strong>Stump Grinding &amp; Removal</strong>
    </div>
  </div>

  <!-- Answer-First Opening + Image (Asymmetric layout) -->
  <section>
    <div class="container">
      <div class="grid-asym">
        <div class="prose" data-animate="fade-up">
          <p style="font-size: 1.1rem; line-height: 1.7;">Stump grinding in Shawnee, KS costs <strong>$100 to $500+ per stump</strong> depending on diameter, root spread, and site access. Most residential stumps take 30&ndash;90 minutes to grind. Affordable Treefellers provides stump grinding and removal for homeowners and commercial properties across the Shawnee, Kansas area and the greater Kansas City, KS metro.</p>
          <p>A leftover stump isn't just an eyesore — it's a tripping hazard, a mower obstacle, and an invitation for termites, carpenter ants, and fungal growth. We grind every stump 6&ndash;12 inches below grade level so you can reclaim that space for grass, a garden bed, a patio, or new construction.</p>
          <p>Stump grinding is also available as an add-on to any <a href="/services/tree-removal" style="color: var(--primary); font-weight: 600;">tree removal</a> job — often at a discounted rate when bundled with the removal.</p>
        </div>
        <div class="svc-img" data-animate="wipe-right">
          <img src="https://i.imgur.com/XcCQgIQ.jpeg" alt="Cleared lot after stump grinding and land clearing in Shawnee, KS" width="600" height="450" loading="lazy">
        </div>
      </div>
    </div>
  </section>

  <!-- Answer Blocks -->
  <section class="bg-alt">
    <div class="container">
      <div class="answer-block" data-animate="fade-up">
        <h2>How Much Does Stump Grinding Cost in Shawnee?</h2>
        <p class="prose">Cost depends on stump diameter and accessibility. Small stumps (under 12 inches) run <strong>$100&ndash;$150</strong>. Medium stumps (12&ndash;24 inches) cost <strong>$150&ndash;$300</strong>. Large stumps (24+ inches) range from <strong>$250&ndash;$500+</strong>. Have multiple stumps? We offer multi-stump discounts — the more stumps, the lower the per-stump price. Every estimate is free, and we measure on-site so there are no surprises.</p>
      </div>
      <div class="answer-block" data-animate="fade-up">
        <h3>Stump Grinding vs. Full Stump Removal — Which Do You Need?</h3>
        <p class="prose">Stump grinding chips the stump below the soil surface and is the right choice for 90% of residential situations. It's faster, less invasive, and doesn't leave a massive hole in your yard. Full stump removal (extracting the entire root ball) is only necessary for specific construction projects that require complete root clearance. We'll advise which approach fits your situation during the estimate.</p>
      </div>
    </div>
  </section>

  <!-- When to Grind (Split) -->
  <section>
    <div class="container">
      <div class="split-reverse">
        <div data-animate="fade-up">
          <h2 class="section-title">Why You Shouldn't Leave That Stump</h2>
          <ul class="check-list">
            <li><i data-lucide="check"></i> <span><strong>Tripping hazard</strong> — especially in yards where kids play or guests walk</span></li>
            <li><i data-lucide="check"></i> <span><strong>Pest magnet</strong> — decaying stumps attract termites, carpenter ants, and beetles</span></li>
            <li><i data-lucide="check"></i> <span><strong>Fungal spread</strong> — root rot and fungi can spread to healthy trees nearby</span></li>
            <li><i data-lucide="check"></i> <span><strong>Mowing obstacle</strong> — stumps damage mower blades and make lawn care frustrating</span></li>
            <li><i data-lucide="check"></i> <span><strong>Regrowth suckers</strong> — some species send up shoots that require constant cutting</span></li>
            <li><i data-lucide="check"></i> <span><strong>Property value</strong> — stumps reduce curb appeal and can complicate property sales</span></li>
          </ul>
        </div>
        <div class="svc-img" data-animate="wipe-right">
          <img src="https://i.imgur.com/Fy5sXIJ.jpeg" alt="Cut logs in yard after tree removal awaiting stump grinding in Kansas" width="800" height="600" loading="lazy">
        </div>
      </div>
    </div>
  </section>

  <!-- Mid-Page CTA -->
  <section style="padding: 0;">
    <div class="container">
      <div class="inline-cta" data-animate="fade-up">
        <h2>Get Rid of That Stump</h2>
        <a href="tel:+18165093232" class="cta-phone">(816) 509-3232</a>
        <p>Free on-site estimates. Multi-stump discounts available.</p>
        <a href="/contact" class="btn-primary">Request Your Estimate</a>
      </div>
    </div>
  </section>

  <!-- Process -->
  <section>
    <div class="container">
      <div style="text-align: center; margin-bottom: var(--space-2xl);">
        <span class="eyebrow-label">Our Process</span>
        <h2 class="section-title">How Stump Grinding Works</h2>
      </div>
      <div class="process-grid">
        <div class="process-step" data-animate="fade-up">
          <div class="step-number">1</div>
          <h3>Assess &amp; Measure</h3>
          <p>We measure the stump, check for underground utilities, and confirm equipment access to the site.</p>
        </div>
        <div class="process-step" data-animate="fade-up">
          <div class="step-number">2</div>
          <h3>Clear the Area</h3>
          <p>Rocks, debris, and obstacles are removed from around the stump so the grinder can work efficiently.</p>
        </div>
        <div class="process-step" data-animate="fade-up">
          <div class="step-number">3</div>
          <h3>Grind Below Grade</h3>
          <p>The grinder chips the stump 6&ndash;12 inches below grade, working across the entire root flare.</p>
        </div>
        <div class="process-step" data-animate="fade-up">
          <div class="step-number">4</div>
          <h3>Backfill &amp; Level</h3>
          <p>We backfill the hole with wood grindings and level the area. Topsoil available on request for reseeding.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- After Grinding -->
  <section class="bg-alt">
    <div class="container">
      <div class="split">
        <div class="svc-img" data-animate="wipe-right">
          <img src="https://i.imgur.com/FtWpS3D.jpeg" alt="Vermeer BC1000 chipper used for stump grinding jobs in Shawnee, Kansas" width="800" height="600" loading="lazy">
        </div>
        <div data-animate="fade-up">
          <h2 class="section-title">What Happens After Grinding?</h2>
          <p class="prose">After the stump is ground, you're left with a pile of wood chips filling the hole. Most homeowners leave these in place and let them decompose naturally — they break down into the soil within a season. If you want to reseed grass immediately, we can haul away the chips and bring in topsoil for a clean starting surface.</p>
          <p class="prose" style="margin-top: var(--space-md);"><strong>Can you plant a new tree where the stump was?</strong> Yes, but wait 1&ndash;2 seasons for the grindings to decompose and the soil to settle. Plant the new tree slightly offset from the original stump location for best root establishment.</p>
          <div class="equipment-callout" style="margin-top: var(--space-lg);">
            <i data-lucide="settings"></i>
            <p><strong>Professional-Grade Equipment</strong> — We use a commercial stump grinder that handles stumps of any diameter, from 6-inch ornamentals to 36-inch hardwood trunks. The Vermeer BC1000 chipper processes all debris on-site.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section>
    <div class="container">
      <div style="text-align: center; margin-bottom: var(--space-2xl);">
        <h2 class="section-title">Stump Grinding Questions</h2>
      </div>
      <div class="faq-list">
        <div class="faq-item">
          <button class="faq-question" aria-expanded="false">
            How much does stump grinding cost in Shawnee, KS?
            <i data-lucide="chevron-down"></i>
          </button>
          <div class="faq-answer" role="region">
            <div class="faq-answer-inner">$100&ndash;$500+ depending on stump diameter. Small stumps under 12 inches start at $100&ndash;$150. Large stumps over 24 inches run $250&ndash;$500+. Multi-stump discounts make it more affordable when you have several to do at once.</div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-question" aria-expanded="false">
            How deep does stump grinding go?
            <i data-lucide="chevron-down"></i>
          </button>
          <div class="faq-answer" role="region">
            <div class="faq-answer-inner">We grind 6&ndash;12 inches below grade level. This is deep enough to reseed grass, install landscaping, or pour a concrete pad. Deeper grinding is available for specific construction projects that need complete root clearance.</div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-question" aria-expanded="false">
            Can I plant a new tree where the stump was ground?
            <i data-lucide="chevron-down"></i>
          </button>
          <div class="faq-answer" role="region">
            <div class="faq-answer-inner">Yes. Wait 1&ndash;2 seasons for the wood chips to decompose and soil to settle. Remove excess grindings, add quality topsoil, and plant the new tree slightly offset from the original location for best root development.</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Related + Closing CTA -->
  <section class="bg-alt">
    <div class="container">
      <div style="margin-bottom: var(--space-2xl);">
        <h3>Related Services</h3>
        <div class="related-services" style="margin-top: var(--space-md);">
          <a href="/services/tree-removal" class="related-link"><i data-lucide="axe"></i> Tree Removal</a>
          <a href="/services/lot-land-clearing" class="related-link"><i data-lucide="trees"></i> Lot &amp; Land Clearing</a>
          <a href="/services/commercial-residential-tree-care" class="related-link"><i data-lucide="building-2"></i> Commercial &amp; Residential Care</a>
        </div>
      </div>
      <div class="closing-cta">
        <h2 class="section-title">Stop Mowing Around That Stump</h2>
        <p class="prose-centered" style="text-align: center; color: var(--text-light);">A stump grind takes under an hour for most residential stumps. Call us today for a free estimate and get your yard back.</p>
        <a href="tel:+18165093232" class="cta-phone">(816) 509-3232</a>
        <div class="cta-buttons">
          <a href="/contact" class="btn-primary">Get a Free Estimate</a>
          <a href="/services" class="btn-secondary">All Services</a>
        </div>
      </div>
      <p class="last-updated">Last Updated: <?php echo date('F Y'); ?></p>
    </div>
  </section>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
