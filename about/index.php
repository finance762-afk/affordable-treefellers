<?php
$pageTitle       = "About Affordable Treefellers | Tree Service in Shawnee, KS Since 2013";
$pageDescription = "Affordable Treefellers LLC — a skilled tree service team based in Shawnee, KS. Founded by Eric Frauenknecht in 2013. Licensed, insured, USDOT #3421117. Serving the Kansas City, KS area.";
$canonicalUrl    = "https://affordabletreefellers.com/about";
$ogImage         = "https://i.imgur.com/ZTry5Cq.jpeg";
$currentPage     = "about";
$heroImage       = "https://i.imgur.com/ZTry5Cq.jpeg";
$useSwiper       = false;
$useTilt         = false;
$useTyped        = false;
$schemaMarkup    = '{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Organization",
      "name": "Affordable Treefellers LLC",
      "url": "https://affordabletreefellers.com",
      "logo": "https://i.imgur.com/uviMLZK.png",
      "foundingDate": "2013",
      "founder": {
        "@type": "Person",
        "name": "Eric Frauenknecht"
      },
      "address": {
        "@type": "PostalAddress",
        "addressLocality": "Shawnee",
        "addressRegion": "KS",
        "addressCountry": "US"
      },
      "telephone": "+18165093232",
      "email": "bigvermont@hotmail.com",
      "description": "Licensed and insured tree service company serving the Shawnee, KS area since 2013. Tree removal, trimming, stump grinding, storm damage cleanup, and land clearing."
    },
    {
      "@type": "Person",
      "name": "Eric Frauenknecht",
      "jobTitle": "Owner",
      "worksFor": {
        "@type": "Organization",
        "name": "Affordable Treefellers LLC"
      },
      "address": {
        "@type": "PostalAddress",
        "addressLocality": "Shawnee",
        "addressRegion": "KS"
      }
    },
    {
      "@type": "LocalBusiness",
      "name": "Affordable Treefellers LLC",
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "5",
        "reviewCount": "45"
      }
    },
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://affordabletreefellers.com" },
        { "@type": "ListItem", "position": 2, "name": "About", "item": "https://affordabletreefellers.com/about" }
      ]
    }
  ]
}';

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php';
?>

<main id="main-content">

  <!-- Hero -->
  <section class="page-hero" style="background-image: url('https://i.imgur.com/ZTry5Cq.jpeg');">
    <div class="container">
      <h1>About Affordable Treefellers</h1>
      <p>Local tree service crew based in Shawnee, KS. Fair prices, reliable work since 2013.</p>
    </div>
  </section>

  <!-- Breadcrumbs -->
  <div class="breadcrumbs">
    <div class="container">
      <a href="/">Home</a> <span>/</span> <strong>About</strong>
    </div>
  </div>

  <!-- Answer-First + Identity -->
  <section>
    <div class="container">
      <div class="prose">
        <p style="font-size: 1.1rem; line-height: 1.7;">Affordable Treefellers LLC is a licensed and insured tree service company based in Shawnee, Kansas. Founded by Eric Frauenknecht in 2013, the company has grown into a skilled team that handles <a href="/services/tree-removal" style="color: var(--primary); font-weight: 600;">tree removal</a>, <a href="/services/tree-trimming-pruning" style="color: var(--primary); font-weight: 600;">trimming</a>, <a href="/services/stump-grinding" style="color: var(--primary); font-weight: 600;">stump grinding</a>, <a href="/services/storm-damage-cleanup" style="color: var(--primary); font-weight: 600;">storm damage cleanup</a>, and <a href="/services/lot-land-clearing" style="color: var(--primary); font-weight: 600;">land clearing</a> for residential and commercial properties within a 30&ndash;40 mile radius of Shawnee, KS.</p>
      </div>
    </div>
  </section>

  <!-- Company Story (About Composition) -->
  <section class="bg-alt">
    <div class="container">
      <div class="about-grid">
        <div class="about-image-wrap reveal-left">
          <img class="about-image-primary" src="https://i.imgur.com/ZTry5Cq.jpeg" alt="Eric Frauenknecht, owner of Affordable Treefellers in Shawnee, KS" width="800" height="1000" loading="lazy">
          <img class="about-image-secondary" src="https://i.imgur.com/cgdK3ZI.jpeg" alt="Affordable Treefellers crew member on the job in Kansas" width="600" height="750" loading="lazy">
        </div>
        <div class="reveal-right">
          <span class="section-subtitle">our story</span>
          <h2 class="section-title">Built on <span class="text-accent">hard work</span>, not overhead</h2>
          <div class="prose">
            <p>Affordable Treefellers has been serving the Shawnee and Kansas City, KS area since 2013. Eric Frauenknecht founded the company because he saw too many tree outfits overcharging for basic work. The idea was simple: show up, do the job right, charge a fair price.</p>
            <p>That idea turned into a real business. Today the crew handles everything from routine trimming to full lot clearing to middle-of-the-night storm calls. The team runs on reliable equipment, clear communication, and the kind of work ethic you'd expect from a local outfit — not a franchise.</p>
            <p>The company is still based in Shawnee, still locally owned, and still answers the phone when you call. The staff makes this business work. They're the ones in the bucket trucks, running the chippers, and making sure your yard looks right when the job is done.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Stats Strip with Watermark -->
  <section>
    <span class="stat-watermark" aria-hidden="true">2013</span>
    <div class="container" style="position: relative; z-index: 1;">
      <div class="stats-grid">
        <div class="stat-block reveal-up">
          <div class="stat-number">10+</div>
          <div class="stat-label">Years Serving Kansas</div>
        </div>
        <div class="stat-block reveal-up reveal-delay-1">
          <div class="stat-number">2013</div>
          <div class="stat-label">Established</div>
        </div>
        <div class="stat-block reveal-up reveal-delay-2">
          <div class="stat-number">KS</div>
          <div class="stat-label">Local &amp; Insured</div>
        </div>
        <div class="stat-block reveal-up reveal-delay-3">
          <div class="stat-number">100%</div>
          <div class="stat-label">Own Trucks &amp; Equipment</div>
        </div>
      </div>
    </div>
  </section>

  <!-- Equipment & Capabilities -->
  <section class="bg-alt">
    <div class="container">
      <div class="split-reverse">
        <div class="reveal-right">
          <span class="section-subtitle">our equipment</span>
          <h2 class="section-title">Full <span class="text-accent">equipment</span> fleet</h2>
          <div class="prose">
            <p>We own all our own trucks and equipment — no rentals, no subcontractor gear, no waiting on third parties. Everything we need to take down a tree, grind a stump, or clear a lot rolls up in our trucks on day one.</p>
          </div>
          <ul class="check-list" style="margin-top: var(--space-md);">
            <li><i data-lucide="check"></i> <span><strong>Bucket trucks</strong> — 60+ foot reach for high canopy trimming and sectional removal without climbing</span></li>
            <li><i data-lucide="check"></i> <span><strong>Wood chippers</strong> — process all branches and brush on-site, reducing debris to manageable chips</span></li>
            <li><i data-lucide="check"></i> <span><strong>Professional chainsaws</strong> — heavy-duty saws for precision cutting on jobs large and small</span></li>
            <li><i data-lucide="check"></i> <span><strong>Commercial stump grinders</strong> — handle stumps of any diameter, grinding 6&ndash;12 inches below grade</span></li>
            <li><i data-lucide="check"></i> <span><strong>Rigging systems</strong> — for controlled removal of trees in tight spaces near structures and power lines</span></li>
          </ul>
          <div class="equipment-callout" style="margin-top: var(--space-lg);">
            <i data-lucide="shield-check"></i>
            <p><strong>USDOT #3421117</strong> — All equipment is registered with the U.S. Department of Transportation for safe, legal highway transport. Fully licensed and insured.</p>
          </div>
        </div>
        <div class="reveal-left" style="display: flex; flex-direction: column; gap: var(--space-md);">
          <div class="svc-img">
            <img src="https://i.imgur.com/1KvudFj.jpeg" alt="Affordable Treefellers truck ready for tree service in Shawnee, Kansas" width="800" height="600" loading="lazy">
          </div>
          <div class="svc-img">
            <img src="https://i.imgur.com/BvsalRQ.jpeg" alt="Affordable Treefellers work truck used for tree service jobs in Kansas" width="800" height="600" loading="lazy">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Mid CTA -->
  <section style="padding: 0;">
    <div class="container">
      <div class="inline-cta reveal-up">
        <h2>Work With a Crew That Shows Up</h2>
        <a href="tel:+18165093232" class="cta-phone">(816) 509-3232</a>
        <p>Free estimates. Fair prices. No surprises.</p>
        <a href="/contact" class="btn-primary">Get a Free Estimate</a>
      </div>
    </div>
  </section>

  <!-- Values / Promise -->
  <section>
    <div class="container">
      <div class="split">
        <div class="svc-img reveal-left">
          <img src="https://i.imgur.com/Cc181DF.jpeg" alt="Worker with chainsaw cutting trunk during tree service job in Kansas" width="800" height="600" loading="lazy">
        </div>
        <div class="reveal-right">
          <span class="section-subtitle">what you can expect</span>
          <h2 class="section-title">Our <span class="text-accent">promise</span> to you</h2>
          <ul class="benefit-list">
            <li>
              <span class="benefit-icon"><i data-lucide="users"></i></span>
              <span><strong>Crew you can count on</strong> — the same experienced team shows up, does the work, and gets it done right.</span>
            </li>
            <li>
              <span class="benefit-icon"><i data-lucide="dollar-sign"></i></span>
              <span><strong>Honest pricing</strong> — the quote we give is the price you pay. No hidden fees, no pressure upsells, no per-branch surprises after we start.</span>
            </li>
            <li>
              <span class="benefit-icon"><i data-lucide="clock"></i></span>
              <span><strong>Show up when we say we will</strong> — we respect your time. Scheduled appointments are kept, not bumped for bigger jobs.</span>
            </li>
            <li>
              <span class="benefit-icon"><i data-lucide="sparkles"></i></span>
              <span><strong>Clean site when we leave</strong> — every branch, every chip, every piece of debris. Your yard looks better than before we arrived.</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- The Team -->
  <section class="bg-alt">
    <div class="container">
      <div style="text-align: center; margin-bottom: var(--space-2xl);">
        <span class="section-subtitle">the team</span>
        <h2 class="section-title">The <span class="text-accent">people</span> behind the work</h2>
        <p class="prose-centered" style="color: var(--text-light);">This isn't a one-man operation. The team makes the business work.</p>
      </div>
      <div class="grid-3">
        <div class="svc-img reveal-up">
          <img src="https://i.imgur.com/ZTry5Cq.jpeg" alt="Eric Frauenknecht, owner of Affordable Treefellers" width="600" height="450" loading="lazy">
          <p style="text-align: center; margin-top: var(--space-sm); font-weight: 600;">Eric Frauenknecht, Owner</p>
        </div>
        <div class="svc-img reveal-up reveal-delay-1">
          <img src="https://i.imgur.com/cgdK3ZI.jpeg" alt="Affordable Treefellers crew member on the job" width="600" height="450" loading="lazy">
          <p style="text-align: center; margin-top: var(--space-sm); font-weight: 600;">The Crew</p>
        </div>
        <div class="svc-img reveal-up reveal-delay-2">
          <img src="https://i.imgur.com/t56i219.jpeg" alt="Affordable Treefellers brand supporter in company hat" width="600" height="450" loading="lazy">
          <p style="text-align: center; margin-top: var(--space-sm); font-weight: 600;">Affordable Treefellers Family</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Credentials -->
  <section>
    <div class="container">
      <div style="text-align: center; margin-bottom: var(--space-2xl);">
        <span class="section-subtitle">credentials</span>
        <h2 class="section-title">Credentials &amp; <span class="text-accent">licensing</span></h2>
      </div>
      <div class="grid-3" style="text-align: center;">
        <div class="reveal-up">
          <div style="font-size: 2.5rem; color: var(--primary); margin-bottom: var(--space-sm);"><i data-lucide="shield-check"></i></div>
          <h3 style="font-size: 1rem;">Licensed &amp; Insured</h3>
          <p style="color: var(--text-light); font-size: 0.9rem; margin-top: var(--space-xs);">Full liability insurance coverage on every job</p>
        </div>
        <div class="reveal-up reveal-delay-1">
          <div style="font-size: 2.5rem; color: var(--primary); margin-bottom: var(--space-sm);"><i data-lucide="truck"></i></div>
          <h3 style="font-size: 1rem;">USDOT #3421117</h3>
          <p style="color: var(--text-light); font-size: 0.9rem; margin-top: var(--space-xs);">Registered with the U.S. Department of Transportation for equipment transport</p>
        </div>
        <div class="reveal-up reveal-delay-2">
          <div style="font-size: 2.5rem; color: var(--primary); margin-bottom: var(--space-sm);"><i data-lucide="calendar-check"></i></div>
          <h3 style="font-size: 1rem;">Established 2013</h3>
          <p style="color: var(--text-light); font-size: 0.9rem; margin-top: var(--space-xs);">Over a decade of tree work in the Shawnee and Kansas City, KS area</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Work Photo -->
  <section class="bg-alt">
    <div class="container">
      <div class="split-reverse">
        <div class="reveal-right">
          <span class="section-subtitle">service area</span>
          <h2 class="section-title">Serving Shawnee and <span class="text-accent">beyond</span></h2>
          <div class="prose">
            <p>Affordable Treefellers serves residential and commercial properties within a 30&ndash;40 mile radius of Shawnee, KS. That includes Overland Park, Olathe, Lenexa, Merriam, De Soto, Bonner Springs, and communities across Johnson County, Wyandotte County, and Leavenworth County.</p>
            <p>The process is always the same — call us, get a free on-site estimate, and hear a straightforward price. No corporate overhead, no franchise fees passed on to you. Just a local crew that knows Kansas trees and does the work right.</p>
          </div>
          <div style="margin-top: var(--space-lg); display: flex; gap: var(--space-md); flex-wrap: wrap;">
            <a href="/service-area" class="btn-secondary">View Service Area</a>
            <a href="/services" class="btn-secondary">Our Services</a>
          </div>
        </div>
        <div class="svc-img reveal-left">
          <img src="https://i.imgur.com/mbhx05O.jpeg" alt="Affordable Treefellers worker with ladder at residential tree service job" width="800" height="600" loading="lazy">
        </div>
      </div>
    </div>
  </section>

  <!-- Closing CTA -->
  <section class="closing-cta" style="background: linear-gradient(135deg, #0A0A0A 0%, #1A1A1A 60%, var(--primary-dark) 100%); color: #fff; overflow: hidden;">
    <i class="floating-accent float-animate-slow" data-lucide="trees" aria-hidden="true" style="top: 10%; left: 6%; font-size: 10rem; color: #ffffff; opacity: 0.05;"></i>
    <i class="floating-accent float-animate" data-lucide="leaf" aria-hidden="true" style="bottom: 12%; right: 8%; font-size: 8rem; color: var(--accent); opacity: 0.08;"></i>
    <div class="container" style="position: relative; z-index: 1;">
      <div class="closing-cta">
        <span class="section-subtitle" style="color: var(--accent);">let's get started</span>
        <h2 class="section-title" style="color: #fff;">Ready to <span class="text-accent" style="color: var(--accent);">work with us</span>?</h2>
        <p class="prose-centered" style="text-align: center; color: rgba(255,255,255,0.85);">Dead tree over your roof or just need a trim before storm season? Call us. Straight answer, fair price, no runaround.</p>
        <a href="tel:+18165093232" class="cta-phone" style="color: var(--accent);">(816) 509-3232</a>
        <div class="cta-buttons">
          <a href="/contact" class="btn-primary" style="background: var(--accent); color: #1a1a1a; box-shadow: 0 4px 0 #c48a1e;">Get a Free Estimate</a>
          <a href="/services" class="btn-secondary" style="border-color: #fff; color: #fff;">View Our Services</a>
        </div>
      </div>
    </div>
  </section>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
