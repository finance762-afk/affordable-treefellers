<?php
$pageTitle       = "Tree Trimming & Pruning in Shawnee, KS | Affordable Treefellers";
$pageDescription = "Professional tree trimming and pruning in Shawnee, KS. Crown thinning, deadwood removal, and shaping for residential and commercial properties. Licensed and insured. Call (816) 509-3232.";
$canonicalUrl    = "https://affordabletreefellers.com/services/tree-trimming-pruning";
$ogImage         = "https://i.imgur.com/Er9wTxc.jpeg";
$currentPage     = "services";
$heroImage       = "https://i.imgur.com/1RZkeHs.jpeg";
$useSwiper       = false;
$useTilt         = false;
$useTyped        = false;
$schemaMarkup    = '{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "Tree Trimming & Pruning",
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
      "description": "Precision tree trimming and pruning for residential and commercial properties in the Shawnee, KS area.",
      "url": "https://affordabletreefellers.com/services/tree-trimming-pruning"
    },
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://affordabletreefellers.com" },
        { "@type": "ListItem", "position": 2, "name": "Services", "item": "https://affordabletreefellers.com/services" },
        { "@type": "ListItem", "position": 3, "name": "Tree Trimming & Pruning", "item": "https://affordabletreefellers.com/services/tree-trimming-pruning" }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "When is the best time to trim trees in Kansas?",
          "acceptedAnswer": { "@type": "Answer", "text": "For most Kansas hardwoods — oaks, elms, maples — the best time to prune is during dormancy from late November through early March. This minimizes disease transmission and allows the tree to heal before spring growth. Dead or hazardous branches should be removed immediately regardless of season." }
        },
        {
          "@type": "Question",
          "name": "How much does tree trimming cost in Shawnee, KS?",
          "acceptedAnswer": { "@type": "Answer", "text": "Tree trimming in the Shawnee area typically costs $150 to $1,200+ depending on tree size, number of trees, and access difficulty. Small ornamental trees start around $150-$300. Large shade trees requiring bucket truck access range from $500 to $1,200+." }
        },
        {
          "@type": "Question",
          "name": "What is the difference between trimming and pruning?",
          "acceptedAnswer": { "@type": "Answer", "text": "Trimming focuses on cutting back overgrowth for shape, clearance, and appearance. Pruning is more targeted — removing specific dead, diseased, or structurally weak branches to improve tree health and safety. We do both, and our on-site assessment determines which approach each tree needs." }
        },
        {
          "@type": "Question",
          "name": "Can you trim branches near power lines?",
          "acceptedAnswer": { "@type": "Answer", "text": "Yes, with proper safety protocols. Our bucket truck provides safe elevated access for trimming near power lines without climbing. For branches in direct contact with high-voltage lines, we coordinate with the local utility company. Never attempt to trim near power lines yourself." }
        }
      ]
    },
    {
      "@type": "HowTo",
      "name": "How Professional Tree Trimming Works",
      "step": [
        { "@type": "HowToStep", "position": 1, "name": "Assessment", "text": "We evaluate each tree for dead, diseased, or structurally weak branches and identify clearance needs." },
        { "@type": "HowToStep", "position": 2, "name": "Access Setup", "text": "Position bucket truck or climbing gear depending on tree height and site conditions." },
        { "@type": "HowToStep", "position": 3, "name": "Precision Cutting", "text": "Remove targeted branches using proper pruning cuts that promote healing and prevent disease entry." },
        { "@type": "HowToStep", "position": 4, "name": "Cleanup", "text": "All branches and debris are chipped on-site and hauled away." }
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
  <section class="page-hero" style="background-image: url('https://i.imgur.com/1RZkeHs.jpeg');">
    <div class="container">
      <h1>Tree Trimming &amp; Pruning in Shawnee, KS</h1>
      <p>Precision trimming to keep your trees healthy, your property safe, and your sight lines clear.</p>
    </div>
  </section>

  <!-- Breadcrumbs -->
  <div class="breadcrumbs">
    <div class="container">
      <a href="/">Home</a> <span>/</span> <a href="/services">Services</a> <span>/</span> <strong>Tree Trimming &amp; Pruning</strong>
    </div>
  </div>

  <!-- Answer-First Opening -->
  <section>
    <div class="container">
      <div class="split-reverse">
        <div class="prose" data-animate="fade-up">
          <p style="font-size: 1.1rem; line-height: 1.7;">Tree trimming in Shawnee, KS typically costs <strong>$150 to $1,200+</strong> depending on the number of trees, their size, and how much work each one needs. Most residential trimming jobs take a few hours to a full day. Affordable Treefellers provides professional tree trimming and pruning for homes and businesses across the Shawnee, Kansas area and throughout the greater Kansas City, KS metro.</p>
          <p>Regular trimming prevents problems before they start — branches against your roof, limbs blocking sight lines, dead wood waiting to drop in the next Kansas storm. Our crew uses a bucket truck for high canopy access and Stihl chainsaws for precise cuts that promote healthy regrowth rather than stress the tree.</p>
        </div>
        <div class="svc-img" data-animate="wipe-right">
          <img src="https://i.imgur.com/Er9wTxc.jpeg" alt="Bucket truck positioned for tree trimming at residential property in Shawnee, KS" width="800" height="600" loading="lazy">
        </div>
      </div>
    </div>
  </section>

  <!-- Answer Block Section -->
  <section class="bg-alt">
    <div class="container">
      <div class="answer-block" data-animate="fade-up">
        <h2>When Is the Best Time to Trim Trees in Kansas?</h2>
        <p class="prose">For most Kansas hardwoods — oaks, elms, maples, and walnuts — the best time to prune is during <strong>dormancy from late November through early March</strong>. Pruning while trees are dormant reduces disease risk (especially oak wilt and Dutch elm disease) and lets wounds seal before spring growth begins. However, dead or hazardous branches should be removed <strong>immediately regardless of season</strong>. Spring-flowering trees like redbuds and dogwoods should ideally be trimmed right after they finish blooming.</p>
      </div>
      <div class="answer-block" data-animate="fade-up">
        <h3>What Is the Difference Between Trimming and Pruning?</h3>
        <p class="prose">Trimming focuses on cutting back overgrowth for shape, clearance, and aesthetics — it's about how the tree looks and what it's touching. Pruning is more surgical: removing specific dead, diseased, or structurally weak branches to improve the tree's health and structural integrity. Most residential jobs involve some of both, and we assess what each tree needs during the free estimate.</p>
      </div>
    </div>
  </section>

  <!-- Types of Trimming -->
  <section>
    <div class="container">
      <div class="split">
        <div class="svc-img" data-animate="wipe-right">
          <img src="https://i.imgur.com/2cjSybQ.jpeg" alt="Affordable Treefellers crew in safety gear performing tree trimming in Kansas" width="800" height="600" loading="lazy">
        </div>
        <div data-animate="fade-up">
          <span class="eyebrow-label">What We Do</span>
          <h2 class="section-title">Trimming Services We Offer</h2>
          <ul class="check-list">
            <li><i class="lucide-check"></i> <span><strong>Crown thinning</strong> — selective removal of inner branches to improve airflow and light penetration</span></li>
            <li><i class="lucide-check"></i> <span><strong>Deadwood removal</strong> — eliminating dead and dying branches before they fall</span></li>
            <li><i class="lucide-check"></i> <span><strong>Crown raising</strong> — removing lower branches for clearance over walkways, driveways, and roofs</span></li>
            <li><i class="lucide-check"></i> <span><strong>Clearance trimming</strong> — cutting back branches from homes, fences, power lines, and other structures</span></li>
            <li><i class="lucide-check"></i> <span><strong>Shaping</strong> — restoring natural form to overgrown or lopsided trees</span></li>
            <li><i class="lucide-check"></i> <span><strong>Vista pruning</strong> — selective thinning to open up views without removing the tree</span></li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Mid-Page CTA -->
  <section style="padding: 0;">
    <div class="container">
      <div class="inline-cta" data-animate="fade-up">
        <h2>Schedule Your Tree Trimming</h2>
        <a href="tel:+18165093232" class="cta-phone">(816) 509-3232</a>
        <p>Free estimates for homes and businesses in the Shawnee, KS area.</p>
        <a href="/contact" class="btn-primary">Request Your Estimate</a>
      </div>
    </div>
  </section>

  <!-- Why Regular Trimming Matters -->
  <section>
    <div class="container">
      <div class="split-reverse">
        <div data-animate="fade-up">
          <h2 class="section-title">Why Regular Trimming Matters in Kansas</h2>
          <p class="prose">Kansas weather is hard on trees. Summer storms, ice loads in winter, straight-line winds, and occasional tornadoes all stress tree canopies. Regular trimming reduces wind resistance, removes deadwood before it becomes a projectile, and helps trees develop strong branch structure that withstands severe weather.</p>
          <p class="prose" style="margin-top: var(--space-md);">Beyond storm prep, trimming improves curb appeal, prevents branches from damaging roofing and siding, keeps sight lines clear for driveways and intersections, and promotes healthy growth patterns that extend your tree's lifespan by decades.</p>
          <div class="equipment-callout" style="margin-top: var(--space-lg);">
            <i class="lucide-truck"></i>
            <p><strong>Bucket Truck Access</strong> — Our 60+ foot bucket truck reaches high canopies safely without climbing, reducing damage to your tree and our crew's risk. Ideal for large oaks, elms, and cottonwoods common in Johnson County.</p>
          </div>
        </div>
        <div class="svc-img" data-animate="wipe-right">
          <img src="https://i.imgur.com/BPmnacY.jpeg" alt="Worker in bucket truck elevated in large tree canopy for trimming in Shawnee" width="800" height="600" loading="lazy">
        </div>
      </div>
    </div>
  </section>

  <!-- Process -->
  <section class="bg-alt">
    <div class="container">
      <div style="text-align: center; margin-bottom: var(--space-2xl);">
        <span class="eyebrow-label">Our Process</span>
        <h2 class="section-title">How Our Trimming Process Works</h2>
      </div>
      <div class="process-vertical">
        <div class="step" data-animate="fade-up">
          <span class="step-marker">1</span>
          <h3>On-Site Assessment</h3>
          <p>We walk your property with you, identify which trees need work, and discuss your goals — clearance, health, storm prep, or aesthetics.</p>
        </div>
        <div class="step" data-animate="fade-up">
          <span class="step-marker">2</span>
          <h3>Free Estimate</h3>
          <p>You get a firm price covering all trees discussed. No per-branch surprises, no upsells after we start.</p>
        </div>
        <div class="step" data-animate="fade-up">
          <span class="step-marker">3</span>
          <h3>Precision Trimming</h3>
          <p>Our crew makes proper pruning cuts at branch collars — not flush cuts or stubs — that promote natural healing and prevent rot.</p>
        </div>
        <div class="step" data-animate="fade-up">
          <span class="step-marker">4</span>
          <h3>Full Cleanup</h3>
          <p>All branches and debris are chipped on-site and hauled away. We rake under every tree we touch.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section>
    <div class="container">
      <div style="text-align: center; margin-bottom: var(--space-2xl);">
        <h2 class="section-title">Tree Trimming Questions</h2>
      </div>
      <div class="faq-list">
        <div class="faq-item">
          <button class="faq-question" aria-expanded="false">
            How much does tree trimming cost in Shawnee, KS?
            <i class="lucide-chevron-down"></i>
          </button>
          <div class="faq-answer" role="region">
            <div class="faq-answer-inner">Trimming typically costs $150&ndash;$1,200+ depending on tree size, count, and difficulty. Small ornamentals start around $150&ndash;$300. Large shade trees requiring bucket truck access run $500&ndash;$1,200+. We provide free estimates and never charge hidden fees.</div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-question" aria-expanded="false">
            When is the best time to trim trees in Kansas?
            <i class="lucide-chevron-down"></i>
          </button>
          <div class="faq-answer" role="region">
            <div class="faq-answer-inner">Most hardwoods should be trimmed during dormancy — late November through early March. Dead or dangerous branches should be removed any time of year. Spring-flowering trees are best trimmed right after blooming. We can advise on the ideal timing for your specific species.</div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-question" aria-expanded="false">
            Can you trim branches near power lines?
            <i class="lucide-chevron-down"></i>
          </button>
          <div class="faq-answer" role="region">
            <div class="faq-answer-inner">Yes. Our bucket truck allows safe, elevated access for trimming near power lines without climbing. For branches in direct contact with high-voltage lines, we coordinate with the local utility. Never attempt to trim near power lines yourself — always call a professional.</div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-question" aria-expanded="false">
            What is the difference between trimming and pruning?
            <i class="lucide-chevron-down"></i>
          </button>
          <div class="faq-answer" role="region">
            <div class="faq-answer-inner">Trimming cuts back overgrowth for shape and clearance. Pruning is more targeted — removing dead, diseased, or structurally weak branches to improve tree health. Most jobs involve some of both. We assess what each tree needs during the free estimate.</div>
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
          <a href="/services/tree-removal" class="related-link"><i class="lucide-axe"></i> Tree Removal</a>
          <a href="/services/storm-damage-cleanup" class="related-link"><i class="lucide-cloud-lightning"></i> Storm Damage Cleanup</a>
          <a href="/services/commercial-residential-tree-care" class="related-link"><i class="lucide-building-2"></i> Commercial &amp; Residential Care</a>
        </div>
      </div>
      <div class="closing-cta">
        <h2 class="section-title">Keep Your Trees Healthy and Your Property Safe</h2>
        <p class="prose-centered" style="text-align: center; color: var(--text-light);">Whether it's one tree or your entire property, we'll give you a straight answer and a fair price. Call today or fill out the form for a free estimate.</p>
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
