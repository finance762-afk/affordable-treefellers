<?php
$pageTitle       = "Lot & Land Clearing in Shawnee, KS | Affordable Treefellers LLC";
$pageDescription = "Professional lot and land clearing in Shawnee, KS. Tree removal, brush clearing, and site prep for construction and development. Licensed, insured. Call (816) 509-3232.";
$canonicalUrl    = "https://affordabletreefellers.com/services/lot-land-clearing";
$ogImage         = "https://i.imgur.com/XcCQgIQ.jpeg";
$currentPage     = "services";
$heroImage       = "https://i.imgur.com/XcCQgIQ.jpeg";
$useSwiper       = false;
$useTilt         = false;
$useTyped        = false;
$schemaMarkup    = '{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "Lot & Land Clearing",
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
      "description": "Complete lot and land clearing services for construction prep, fence installation, and overgrown property cleanup in the Shawnee, KS area.",
      "url": "https://affordabletreefellers.com/services/lot-land-clearing"
    },
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://affordabletreefellers.com" },
        { "@type": "ListItem", "position": 2, "name": "Services", "item": "https://affordabletreefellers.com/services" },
        { "@type": "ListItem", "position": 3, "name": "Lot & Land Clearing", "item": "https://affordabletreefellers.com/services/lot-land-clearing" }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How much does lot clearing cost in Shawnee, KS?",
          "acceptedAnswer": { "@type": "Answer", "text": "Lot clearing costs depend on acreage, density of vegetation, tree count, and stump removal needs. Small residential lots (under 1/4 acre) with moderate brush start around $1,500-$3,000. Larger or heavily wooded parcels can range from $3,000-$10,000+. We provide free on-site estimates for every clearing project." }
        },
        {
          "@type": "Question",
          "name": "Do you handle stump removal during land clearing?",
          "acceptedAnswer": { "@type": "Answer", "text": "Yes. Our clearing service includes tree removal, brush clearing, and stump grinding as a complete package. Stumps are ground below grade so the lot is ready for construction, grading, or landscaping." }
        },
        {
          "@type": "Question",
          "name": "Can you clear just part of a property?",
          "acceptedAnswer": { "@type": "Answer", "text": "Absolutely. Many projects only need a specific section cleared — a fence line, a building pad, or an overgrown back portion of the lot. We clear exactly what you need and leave the rest undisturbed." }
        }
      ]
    },
    {
      "@type": "HowTo",
      "name": "How Land Clearing Works with Affordable Treefellers",
      "step": [
        { "@type": "HowToStep", "position": 1, "name": "Site Walk and Estimate", "text": "We walk the property with you, mark the clearing boundaries, and provide a firm project quote." },
        { "@type": "HowToStep", "position": 2, "name": "Tree and Brush Removal", "text": "Trees are felled, limbed, and removed. Brush is cut and cleared from the site." },
        { "@type": "HowToStep", "position": 3, "name": "Chipping and Processing", "text": "Our Vermeer BC1000 chipper processes all wood and brush debris on-site, reducing material to manageable chips." },
        { "@type": "HowToStep", "position": 4, "name": "Stump Grinding and Finish", "text": "All stumps are ground below grade and the lot is left clean and ready for the next phase of your project." }
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
  <section class="page-hero" style="background-image: url('https://i.imgur.com/XcCQgIQ.jpeg');">
    <div class="container">
      <h1>Lot &amp; Land Clearing in Shawnee, KS</h1>
      <p>Complete site clearing for new construction, fence lines, and overgrown properties. Trees, brush, and stumps — all handled.</p>
    </div>
  </section>

  <!-- Breadcrumbs -->
  <div class="breadcrumbs">
    <div class="container">
      <a href="/">Home</a> <span>/</span> <a href="/services">Services</a> <span>/</span> <strong>Lot &amp; Land Clearing</strong>
    </div>
  </div>

  <!-- Answer-First Opening -->
  <section>
    <div class="container">
      <div class="split">
        <div class="prose" data-animate="fade-up">
          <p style="font-size: 1.1rem; line-height: 1.7;">Lot clearing in Shawnee, KS starts around <strong>$1,500 for small residential parcels</strong> and scales up based on acreage, tree density, and whether stump grinding is included. Most residential lots clear in 1&ndash;3 days. Affordable Treefellers provides lot and land clearing services for homeowners, builders, and property developers across Shawnee, Kansas and the greater Kansas City, KS area.</p>
          <p>Building pad for new construction, fence line, neglected lot, or space for landscaping — we bring the crew and equipment to handle the full scope. Trees, brush, stumps, and debris get removed and processed on-site with our Vermeer chipper.</p>
        </div>
        <div class="svc-img" data-animate="wipe-right">
          <img src="https://i.imgur.com/RW6NMwI.jpeg" alt="Overgrown brush requiring lot clearing in Shawnee, KS" width="800" height="600" loading="lazy">
        </div>
      </div>
    </div>
  </section>

  <!-- Answer Blocks -->
  <section class="bg-alt">
    <div class="container">
      <div class="answer-block" data-animate="fade-up">
        <h2>How Much Does Lot Clearing Cost in Shawnee, KS?</h2>
        <p class="prose">Cost depends on the size of the area, the density and size of trees, and whether stump grinding is included. Small residential lots (under 1/4 acre) with moderate brush typically run <strong>$1,500&ndash;$3,000</strong>. Medium parcels with a mix of trees and brush range <strong>$3,000&ndash;$6,000</strong>. Larger or heavily wooded commercial parcels can run <strong>$6,000&ndash;$10,000+</strong>. Every clearing project gets a free on-site walk-through and firm quote.</p>
      </div>
      <div class="answer-block" data-animate="fade-up">
        <h3>What's Included in a Land Clearing Job?</h3>
        <p class="prose">Our full clearing service covers everything: <strong>tree felling and removal</strong>, <strong>brush and undergrowth clearing</strong>, <strong>on-site chipping and debris processing</strong>, and <strong>stump grinding below grade</strong>. When we're done, your lot is clean and ready for the next phase — grading, construction, fencing, or landscaping. We don't leave piles of debris behind.</p>
      </div>
    </div>
  </section>

  <!-- What We Clear For (Split Reverse) -->
  <section>
    <div class="container">
      <div class="split-reverse">
        <div data-animate="fade-up">
          <span class="eyebrow-label">Common Projects</span>
          <h2 class="section-title">What People Clear Land For</h2>
          <ul class="check-list">
            <li><i data-lucide="check"></i> <span><strong>New construction</strong> — building pads, driveways, and utility access for new homes or additions</span></li>
            <li><i data-lucide="check"></i> <span><strong>Fence installation</strong> — clearing a clean line for new fencing along property boundaries</span></li>
            <li><i data-lucide="check"></i> <span><strong>Overgrown lot cleanup</strong> — restoring neglected or vacant properties to usable condition</span></li>
            <li><i data-lucide="check"></i> <span><strong>Commercial development</strong> — site prep for retail, office, or parking lot construction</span></li>
            <li><i data-lucide="check"></i> <span><strong>Garden or pool sites</strong> — clearing a specific area for landscaping, gardens, or outdoor structures</span></li>
            <li><i data-lucide="check"></i> <span><strong>Fire mitigation</strong> — creating defensible space around structures by removing overgrown brush</span></li>
          </ul>
          <p class="prose" style="margin-top: var(--space-md); color: var(--text-light);">Don't need the whole lot cleared? We handle partial clearing too — just the section you need, leaving the rest untouched.</p>
        </div>
        <div class="svc-img" data-animate="wipe-right">
          <img src="https://i.imgur.com/pIAnpuf.jpeg" alt="Wood chipper processing brush during lot clearing in Shawnee, Kansas" width="800" height="600" loading="lazy">
        </div>
      </div>
    </div>
  </section>

  <!-- Mid-Page CTA -->
  <section style="padding: 0;">
    <div class="container">
      <div class="inline-cta" data-animate="fade-up">
        <h2>Got a Lot That Needs Clearing?</h2>
        <a href="tel:+18165093232" class="cta-phone">(816) 509-3232</a>
        <p>Free on-site walk-through and firm project quote. No hidden fees.</p>
        <a href="/contact" class="btn-primary">Request Your Estimate</a>
      </div>
    </div>
  </section>

  <!-- Process (Vertical timeline variant) -->
  <section>
    <div class="container">
      <div style="max-width: 700px;">
        <span class="eyebrow-label">Our Process</span>
        <h2 class="section-title">How We Clear a Lot</h2>
        <div class="process-vertical" style="margin-top: var(--space-xl);">
          <div class="step" data-animate="fade-up">
            <span class="step-marker">1</span>
            <h3>Site Walk &amp; Estimate</h3>
            <p>We walk the property with you, mark the clearing boundaries, identify any trees to preserve, and give a firm project price.</p>
          </div>
          <div class="step" data-animate="fade-up">
            <span class="step-marker">2</span>
            <h3>Tree Felling &amp; Brush Removal</h3>
            <p>Trees are felled, limbed, and sectioned. Brush and undergrowth are cut and staged for processing.</p>
          </div>
          <div class="step" data-animate="fade-up">
            <span class="step-marker">3</span>
            <h3>On-Site Chipping</h3>
            <p>All wood and brush is processed through our Vermeer BC1000 chipper. Chips can be spread on-site or hauled away per your preference.</p>
          </div>
          <div class="step" data-animate="fade-up">
            <span class="step-marker">4</span>
            <h3>Stump Grinding &amp; Final Cleanup</h3>
            <p>All stumps are ground below grade. The lot is left clean, level, and ready for grading, construction, or landscaping.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Equipment Note -->
  <section class="bg-alt">
    <div class="container">
      <div class="split">
        <div class="svc-img" data-animate="wipe-right">
          <img src="https://i.imgur.com/XcCQgIQ.jpeg" alt="Cleared residential lot ready for construction or fencing in Shawnee, KS" width="800" height="600" loading="lazy">
        </div>
        <div data-animate="fade-up">
          <h2 class="section-title">The Right Equipment for the Job</h2>
          <p class="prose">Land clearing is equipment-intensive work. We bring what's needed so the job moves efficiently and the site is left clean:</p>
          <ul class="check-list" style="margin-top: var(--space-md);">
            <li><i data-lucide="check"></i> <span><strong>Stihl professional chainsaws</strong> — MS 461 and MS 661 for felling and bucking</span></li>
            <li><i data-lucide="check"></i> <span><strong>Bucket truck</strong> — 60+ foot reach for tall trees that need sectional removal</span></li>
            <li><i data-lucide="check"></i> <span><strong>Vermeer BC1000 chipper</strong> — processes all wood and brush debris on-site</span></li>
            <li><i data-lucide="check"></i> <span><strong>Commercial stump grinder</strong> — grinds stumps 6&ndash;12 inches below grade</span></li>
          </ul>
          <div class="equipment-callout" style="margin-top: var(--space-lg);">
            <i data-lucide="truck"></i>
            <p><strong>USDOT #3421117</strong> — All equipment is DOT-registered for safe highway transport. Licensed and insured for both residential and commercial clearing work.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section>
    <div class="container">
      <div style="text-align: center; margin-bottom: var(--space-2xl);">
        <h2 class="section-title">Land Clearing Questions</h2>
      </div>
      <div class="faq-list">
        <div class="faq-item">
          <button class="faq-question" aria-expanded="false">
            How much does lot clearing cost in Shawnee, KS?
            <i data-lucide="chevron-down"></i>
          </button>
          <div class="faq-answer" role="region">
            <div class="faq-answer-inner">Small residential lots under 1/4 acre with moderate brush start around $1,500&ndash;$3,000. Larger or heavily wooded parcels range from $3,000&ndash;$10,000+ depending on tree count and whether stumps need grinding. Free on-site estimates for every project.</div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-question" aria-expanded="false">
            Do you handle stump removal during land clearing?
            <i data-lucide="chevron-down"></i>
          </button>
          <div class="faq-answer" role="region">
            <div class="faq-answer-inner">Yes. Our clearing service includes tree removal, brush clearing, and stump grinding as a complete package. All stumps are ground below grade so the lot is ready for construction, grading, or landscaping.</div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-question" aria-expanded="false">
            Can you clear just part of a property?
            <i data-lucide="chevron-down"></i>
          </button>
          <div class="faq-answer" role="region">
            <div class="faq-answer-inner">Absolutely. Many projects only need a specific section — a fence line, a building pad, or the overgrown back portion of the lot. We clear exactly the area you mark and leave everything else untouched.</div>
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
          <a href="/services/stump-grinding" class="related-link"><i data-lucide="circle-dot"></i> Stump Grinding</a>
          <a href="/services/commercial-residential-tree-care" class="related-link"><i data-lucide="building-2"></i> Commercial &amp; Residential Care</a>
        </div>
      </div>
      <div class="closing-cta">
        <h2 class="section-title">Clear the Way for Your Next Project</h2>
        <p class="prose-centered" style="text-align: center; color: var(--text-light);">Fence line, building pad, or full parcel — we handle it. Call for a free site walk-through and firm project quote.</p>
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
