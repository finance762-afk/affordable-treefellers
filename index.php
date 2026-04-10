<?php
$pageTitle       = "Affordable Treefellers | Tree Removal & Trimming in Shawnee, KS";
$pageDescription = "Affordable Treefellers LLC provides professional tree removal, trimming, stump grinding, and storm damage cleanup in Shawnee, KS and the surrounding Kansas City area. Licensed, insured, USDOT #3421117. Call (816) 509-3232.";
$canonicalUrl    = "https://affordabletreefellers.com";
$ogImage         = "https://i.imgur.com/BPmnacY.jpeg";
$currentPage     = "home";
$heroImage       = "https://i.imgur.com/BPmnacY.jpeg";
$useSwiper       = false;
$useTilt         = false;
$useTyped        = false;
$schemaMarkup    = '{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "LocalBusiness",
      "name": "Affordable Treefellers LLC",
      "description": "Professional tree removal, trimming, stump grinding, and storm damage cleanup serving the Shawnee, KS area since 2013.",
      "telephone": "+18165093232",
      "email": "bigvermont@hotmail.com",
      "url": "https://affordabletreefellers.com",
      "address": {
        "@type": "PostalAddress",
        "addressLocality": "Shawnee",
        "addressRegion": "KS",
        "addressCountry": "US"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": "39.0417",
        "longitude": "-94.7203"
      },
      "openingHoursSpecification": [
        {
          "@type": "OpeningHoursSpecification",
          "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday"],
          "opens": "09:00",
          "closes": "17:00"
        }
      ],
      "founder": {
        "@type": "Person",
        "name": "Eric Frauenknecht"
      },
      "foundingDate": "2013",
      "areaServed": {
        "@type": "GeoCircle",
        "geoMidpoint": {
          "@type": "GeoCoordinates",
          "latitude": "39.0417",
          "longitude": "-94.7203"
        },
        "geoRadius": "64374"
      },
      "priceRange": "$$",
      "image": "https://i.imgur.com/BPmnacY.jpeg",
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "5",
        "reviewCount": "45"
      }
    },
    {
      "@type": "Organization",
      "name": "Affordable Treefellers LLC",
      "url": "https://affordabletreefellers.com",
      "logo": "https://i.imgur.com/uviMLZK.png",
      "foundingDate": "2013",
      "founder": { "@type": "Person", "name": "Eric Frauenknecht" },
      "telephone": "+18165093232",
      "email": "bigvermont@hotmail.com",
      "address": {
        "@type": "PostalAddress",
        "addressLocality": "Shawnee",
        "addressRegion": "KS",
        "addressCountry": "US"
      }
    },
    {
      "@type": "WebSite",
      "name": "Affordable Treefellers LLC",
      "url": "https://affordabletreefellers.com",
      "potentialAction": {
        "@type": "SearchAction",
        "target": "https://affordabletreefellers.com/?s={search_term_string}",
        "query-input": "required name=search_term_string"
      }
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How much does tree removal cost in Shawnee, KS?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Tree removal in the Shawnee area typically ranges from $300 to $2,500+ depending on the size of the tree, its location relative to structures or power lines, and how much cleanup is involved. We provide free on-site estimates with a firm price before any work begins."
          }
        },
        {
          "@type": "Question",
          "name": "When is the best time to trim trees in Kansas?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "For most Kansas hardwoods the ideal time to prune is during dormancy from late November through early March. Dead or hazardous limbs should be removed immediately regardless of season."
          }
        },
        {
          "@type": "Question",
          "name": "What does stump grinding involve and how long does it take?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Stump grinding uses a heavy-duty machine to chip the stump 6-12 inches below ground level. Most residential stumps take 30-90 minutes depending on diameter and root spread."
          }
        },
        {
          "@type": "Question",
          "name": "How fast can you respond to storm damage emergencies?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "We offer 24/7 emergency storm response and typically reach properties within our 30-mile service area in under 2 hours."
          }
        },
        {
          "@type": "Question",
          "name": "Are you licensed and insured for tree work in Kansas?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Affordable Treefellers LLC is fully licensed, insured, and registered with the U.S. Department of Transportation (USDOT #3421117). We carry full liability insurance coverage."
          }
        }
      ]
    }
  ]
}';

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php';
?>

<main id="main-content">

  <!-- ===== HERO ===== -->
  <section class="hero" style="background-image: url('https://i.imgur.com/BPmnacY.jpeg');">
    <div class="container">
      <h1>Tree Service You Can Count On in Shawnee, KS</h1>
      <p class="hero-subtitle">Licensed &amp; Insured &bull; Since 2013 &bull; 24/7 Emergency Service</p>
      <a href="tel:+18165093232" class="hero-phone">(816) 509-3232</a>
      <div style="display: flex; gap: var(--space-md); justify-content: center; flex-wrap: wrap; margin-top: var(--space-lg);">
        <a href="/contact" class="btn-primary">Get a Free Estimate</a>
        <a href="/services" class="btn-secondary" style="border-color: #fff; color: #fff;">Our Services</a>
      </div>
    </div>
  </section>

  <!-- ===== TRUST BADGE STRIP ===== -->
  <div class="trust-strip">
    <div class="container">
      <div class="trust-badge"><i data-lucide="shield-check"></i> Licensed &amp; Insured</div>
      <div class="trust-badge"><i data-lucide="calendar-check"></i> 10+ Years Experience</div>
      <div class="trust-badge"><i data-lucide="zap"></i> 24/7 Emergency</div>
      <div class="trust-badge"><i data-lucide="clipboard-check"></i> Free Estimates</div>
      <div class="trust-badge"><i data-lucide="truck"></i> USDOT Registered</div>
    </div>
  </div>

  <!-- ===== ENTITY SENTENCE ===== -->
  <section style="padding: var(--space-2xl) 0;">
    <div class="container">
      <p class="prose-centered" style="text-align: center; color: var(--text-light); font-size: 1.05rem;">Affordable Treefellers LLC is a licensed and insured tree service company based in Shawnee, Kansas, serving residential and commercial properties across the greater Kansas City, KS area.</p>
    </div>
  </section>

  <!-- ===== SERVICES GRID ===== -->
  <section class="bg-alt" id="services">
    <div class="container">
      <div style="text-align: center; margin-bottom: var(--space-2xl);">
        <span class="eyebrow-label">What We Do</span>
        <h2 class="section-title">Our Tree Services</h2>
      </div>
      <div class="grid-3" data-stagger>
        <a href="/services/tree-removal" class="service-card" data-animate="fade-up">
          <div class="card-icon"><i data-lucide="axe"></i></div>
          <h3>Tree Removal</h3>
          <p>Safe removal of dead, dying, or hazardous trees from residential and commercial properties across Shawnee and Johnson County.</p>
          <span class="card-link">Learn More <i data-lucide="arrow-right"></i></span>
        </a>
        <a href="/services/tree-trimming-pruning" class="service-card" data-animate="fade-up">
          <div class="card-icon"><i data-lucide="scissors"></i></div>
          <h3>Tree Trimming &amp; Pruning</h3>
          <p>Precision trimming to maintain tree health, clear structures, and keep your property looking sharp year-round.</p>
          <span class="card-link">Learn More <i data-lucide="arrow-right"></i></span>
        </a>
        <a href="/services/stump-grinding" class="service-card" data-animate="fade-up">
          <div class="card-icon"><i data-lucide="circle-dot"></i></div>
          <h3>Stump Grinding &amp; Removal</h3>
          <p>Complete stump elimination below grade level so you can reclaim your yard without tripping hazards or regrowth.</p>
          <span class="card-link">Learn More <i data-lucide="arrow-right"></i></span>
        </a>
        <a href="/services/storm-damage-cleanup" class="service-card" data-animate="fade-up">
          <div class="card-icon"><i data-lucide="cloud-lightning"></i></div>
          <h3>Storm Damage Cleanup</h3>
          <p>24/7 emergency response for fallen trees, broken limbs, and storm debris blocking roads, roofs, or power lines.</p>
          <span class="card-link">Learn More <i data-lucide="arrow-right"></i></span>
        </a>
        <a href="/services/commercial-residential-tree-care" class="service-card" data-animate="fade-up">
          <div class="card-icon"><i data-lucide="building-2"></i></div>
          <h3>Commercial &amp; Residential Tree Care</h3>
          <p>Ongoing maintenance programs for property managers, HOAs, and homeowners who need consistent, reliable tree work.</p>
          <span class="card-link">Learn More <i data-lucide="arrow-right"></i></span>
        </a>
        <a href="/services/lot-land-clearing" class="service-card" data-animate="fade-up">
          <div class="card-icon"><i data-lucide="trees"></i></div>
          <h3>Lot &amp; Land Clearing</h3>
          <p>Brush removal, tree clearing, and site prep for construction, fencing, or property development projects.</p>
          <span class="card-link">Learn More <i data-lucide="arrow-right"></i></span>
        </a>
      </div>
    </div>
  </section>

  <!-- ===== STAT COUNTERS ===== -->
  <section class="stats-section">
    <div class="container">
      <div class="stats-grid">
        <div class="stat-counter" data-animate="fade-up">
          <div class="stat-number" data-count="10" data-suffix="+">0</div>
          <div class="stat-label">Years Serving Kansas</div>
        </div>
        <div class="stat-counter" data-animate="fade-up">
          <div class="stat-number" data-count="2500" data-suffix="+">0</div>
          <div class="stat-label">Trees Serviced</div>
        </div>
        <div class="stat-counter" data-animate="fade-up">
          <div class="stat-number" data-count="30" data-suffix=" Mi">0</div>
          <div class="stat-label">Service Radius</div>
        </div>
        <div class="stat-counter" data-animate="fade-up">
          <div class="stat-number">24/7</div>
          <div class="stat-label">Emergency Response</div>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== WHY TRUST US (Split Section) ===== -->
  <section>
    <div class="container">
      <div class="split">
        <div class="trust-img-wrap">
          <img src="https://i.imgur.com/ZTry5Cq.jpeg" alt="Eric Frauenknecht, owner of Affordable Treefellers in Shawnee, Kansas" width="800" height="600" loading="lazy">
          <span class="trust-img-accent">Serving Shawnee Since 2013</span>
        </div>
        <div class="trust-content" data-animate="fade-up">
          <span class="eyebrow-label">Why Shawnee Trusts Us</span>
          <h2 class="section-title">Built on Hard Work, Not Overhead</h2>
          <p class="prose">Affordable Treefellers has been doing tree work in Shawnee and the KC metro since 2013. The company started small and grew because we show up on time, charge fair prices, and clean up after ourselves. Our crew handles everything from routine trims to emergency storm calls — no subcontractors, no runaround.</p>
          <ul class="benefit-list">
            <li>
              <span class="benefit-icon"><i data-lucide="users"></i></span>
              <span><strong>Experienced Crew</strong> &mdash; a team that knows Kansas trees and treats your yard right</span>
            </li>
            <li>
              <span class="benefit-icon"><i data-lucide="dollar-sign"></i></span>
              <span><strong>Fair, Transparent Pricing</strong> &mdash; no hidden fees, no pressure upsells</span>
            </li>
            <li>
              <span class="benefit-icon"><i data-lucide="truck"></i></span>
              <span><strong>Full Equipment Fleet</strong> &mdash; bucket truck, Vermeer chipper, Stihl saws</span>
            </li>
            <li>
              <span class="benefit-icon"><i data-lucide="shield-check"></i></span>
              <span><strong>Licensed &amp; USDOT Registered</strong> &mdash; USDOT #3421117, fully insured</span>
            </li>
          </ul>
          <a href="/about" class="btn-primary" style="align-self: flex-start;">Meet the Team</a>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== WORK GALLERY ===== -->
  <section class="bg-alt">
    <div class="container">
      <div style="text-align: center; margin-bottom: var(--space-2xl);">
        <span class="eyebrow-label">Our Work</span>
        <h2 class="section-title">Real Jobs. Real Results.</h2>
      </div>
      <div class="gallery-grid">
        <div class="gallery-item wide" data-animate="fade-up">
          <img src="https://i.imgur.com/bb6Nte3.jpeg" alt="Massive felled tree trunk in residential yard in Shawnee, KS" width="800" height="600" loading="lazy">
        </div>
        <div class="gallery-item" data-animate="fade-up">
          <img src="https://i.imgur.com/bcIwTki.jpeg" alt="Felled trunk with Stihl chainsaw during tree removal in Shawnee" width="600" height="450" loading="lazy">
        </div>
        <div class="gallery-item" data-animate="fade-up">
          <img src="https://i.imgur.com/Er9wTxc.jpeg" alt="Bucket truck trimming mature tree in Shawnee, Kansas neighborhood" width="600" height="450" loading="lazy">
        </div>
        <div class="gallery-item" data-animate="fade-up">
          <img src="https://i.imgur.com/1KvudFj.jpeg" alt="Affordable Treefellers truck ready for tree service in Shawnee, KS" width="600" height="450" loading="lazy">
        </div>
        <div class="gallery-item" data-animate="fade-up">
          <img src="https://i.imgur.com/BvsalRQ.jpeg" alt="Affordable Treefellers work truck at job site in Kansas" width="600" height="450" loading="lazy">
        </div>
        <div class="gallery-item wide" data-animate="fade-up">
          <img src="https://i.imgur.com/NfefzTe.jpeg" alt="Large felled tree trunk with worker for scale showing tree removal in Kansas" width="800" height="600" loading="lazy">
        </div>
      </div>
    </div>
  </section>

  <!-- ===== HOW IT WORKS ===== -->
  <section>
    <div class="container">
      <div style="text-align: center; margin-bottom: var(--space-2xl);">
        <span class="eyebrow-label">How It Works</span>
        <h2 class="section-title">Four Steps to a Safer Property</h2>
      </div>
      <div class="process-grid">
        <div class="process-step" data-animate="fade-up">
          <div class="step-number">1</div>
          <h3>Call for an Estimate</h3>
          <p>Give us a call or fill out the form. We'll get the details and schedule a time that works for you.</p>
        </div>
        <div class="process-step" data-animate="fade-up">
          <div class="step-number">2</div>
          <h3>On-Site Assessment</h3>
          <p>We come to your property, evaluate the job, and give you a straightforward price — no surprises.</p>
        </div>
        <div class="process-step" data-animate="fade-up">
          <div class="step-number">3</div>
          <h3>Professional Service</h3>
          <p>Our crew handles the work safely with the right equipment — bucket truck, chipper, and professional-grade saws.</p>
        </div>
        <div class="process-step" data-animate="fade-up">
          <div class="step-number">4</div>
          <h3>Complete Cleanup</h3>
          <p>We haul away all debris and leave your yard cleaner than we found it. No mess, no hassle.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== STORM DAMAGE CTA (Signature Section) ===== -->
  <section class="storm-cta" style="background-image: url('https://i.imgur.com/AxHfkOk.jpeg');">
    <div class="container">
      <div style="max-width: 650px;">
        <h2>Storm Hit Your Property? We're On It.</h2>
        <p class="prose" style="color: rgba(255,255,255,0.9); font-size: 1.1rem;">Fallen trees don't wait until business hours — and neither do we. Affordable Treefellers provides 24/7 emergency storm damage cleanup across the Kansas City, KS area. Downed trees on your roof, across your driveway, or tangled in power lines — call now and we'll be there.</p>
        <a href="tel:+18165093232" class="storm-phone">(816) 509-3232</a>
        <br>
        <a href="/services/storm-damage-cleanup" class="btn-primary" style="background: var(--accent); box-shadow: 0 4px 0 #c48a1e;">Emergency Services <i data-lucide="arrow-right"></i></a>
        <div class="storm-badge"><i data-lucide="clock"></i> Average response under 2 hours in our service area</div>
      </div>
    </div>
  </section>

  <!-- ===== FAQ ===== -->
  <section class="bg-alt">
    <div class="container">
      <div style="text-align: center; margin-bottom: var(--space-2xl);">
        <span class="eyebrow-label">Common Questions</span>
        <h2 class="section-title">What Homeowners Ask Us</h2>
      </div>
      <div class="faq-list">

        <div class="faq-item">
          <button class="faq-question" aria-expanded="false">
            How much does tree removal cost in Shawnee, KS?
            <i data-lucide="chevron-down"></i>
          </button>
          <div class="faq-answer" role="region">
            <div class="faq-answer-inner">
              Tree removal in the Shawnee area typically ranges from $300 to $2,500+ depending on the size of the tree, its location relative to structures or power lines, and how much cleanup is involved. Small ornamental trees on open lots run lower, while large hardwoods near homes or utility lines require more equipment and crew time. We provide free on-site estimates with a firm price before any work begins — no surprises.
            </div>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-question" aria-expanded="false">
            When is the best time to trim trees in Kansas?
            <i data-lucide="chevron-down"></i>
          </button>
          <div class="faq-answer" role="region">
            <div class="faq-answer-inner">
              For most Kansas hardwoods — oaks, elms, maples — the ideal time to prune is during dormancy from late November through early March. This reduces disease risk and lets the tree heal before spring growth. However, dead or hazardous limbs should be removed immediately regardless of season. Storm-damaged branches are always an emergency priority. We trim year-round and can advise on the best timing for your specific trees.
            </div>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-question" aria-expanded="false">
            What does stump grinding involve and how long does it take?
            <i data-lucide="chevron-down"></i>
          </button>
          <div class="faq-answer" role="region">
            <div class="faq-answer-inner">
              Stump grinding uses a heavy-duty machine to chip the stump 6–12 inches below ground level. Most residential stumps take 30–90 minutes depending on diameter and root spread. After grinding, we backfill the hole with the wood chips and level the area so you can reseed, landscape, or build over the spot. We handle stumps of any size — from small ornamentals to 3-foot-diameter hardwood trunks.
            </div>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-question" aria-expanded="false">
            How fast can you respond to storm damage emergencies?
            <i data-lucide="chevron-down"></i>
          </button>
          <div class="faq-answer" role="region">
            <div class="faq-answer-inner">
              We offer 24/7 emergency storm response and typically reach properties within our 30-mile service area in under 2 hours. If a tree is on your house, blocking your driveway, or threatening power lines, call us immediately at <a href="tel:+18165093232">(816) 509-3232</a>. We prioritize safety hazards and work directly with insurance adjusters to document the damage for your claim.
            </div>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-question" aria-expanded="false">
            Are you licensed and insured for tree work in Kansas?
            <i data-lucide="chevron-down"></i>
          </button>
          <div class="faq-answer" role="region">
            <div class="faq-answer-inner">
              Yes. Affordable Treefellers LLC is fully licensed, insured, and registered with the U.S. Department of Transportation (USDOT #3421117). We carry full liability insurance coverage. This protects you as the property owner — if anything goes wrong on the job, you're covered. We're happy to provide proof of insurance before any work begins.
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ===== CLOSING CTA ===== -->
  <section class="closing-cta">
    <div class="container">
      <h2 class="section-title">Ready to Get Started?</h2>
      <p class="prose-centered" style="text-align: center; color: var(--text-light); font-size: 1.1rem;">One branch or an entire tree — we handle it. Free estimates, fair prices, and no job too big or small across the Shawnee, KS area.</p>
      <a href="tel:+18165093232" class="cta-phone">(816) 509-3232</a>
      <div class="cta-buttons">
        <a href="/contact" class="btn-primary">Request a Free Estimate</a>
        <a href="/services" class="btn-secondary">View All Services</a>
      </div>
    </div>
  </section>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
