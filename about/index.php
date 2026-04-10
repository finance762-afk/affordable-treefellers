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
      <div class="prose" data-animate="fade-up">
        <p style="font-size: 1.1rem; line-height: 1.7;">Affordable Treefellers LLC is a licensed and insured tree service company based in Shawnee, Kansas. Founded by Eric Frauenknecht in 2013, the company has grown into a skilled team that handles <a href="/services/tree-removal" style="color: var(--primary); font-weight: 600;">tree removal</a>, <a href="/services/tree-trimming-pruning" style="color: var(--primary); font-weight: 600;">trimming</a>, <a href="/services/stump-grinding" style="color: var(--primary); font-weight: 600;">stump grinding</a>, <a href="/services/storm-damage-cleanup" style="color: var(--primary); font-weight: 600;">storm damage cleanup</a>, and <a href="/services/lot-land-clearing" style="color: var(--primary); font-weight: 600;">land clearing</a> for residential and commercial properties within a 30&ndash;40 mile radius of Shawnee, KS.</p>
      </div>
    </div>
  </section>

  <!-- Company Story (Split) -->
  <section class="bg-alt">
    <div class="container">
      <div class="split">
        <div class="trust-img-wrap" data-animate="wipe-right">
          <img src="https://i.imgur.com/ZTry5Cq.jpeg" alt="Eric Frauenknecht, owner of Affordable Treefellers in Shawnee, KS" width="800" height="600" loading="lazy">
          <span class="trust-img-accent">Serving Shawnee Since 2013</span>
        </div>
        <div data-animate="fade-up">
          <span class="eyebrow-label">Our Story</span>
          <h2 class="section-title">Built on Hard Work, Not Overhead</h2>
          <div class="prose">
            <p>Affordable Treefellers has been serving the Shawnee and Kansas City, KS area since 2013. Eric Frauenknecht founded the company because he saw too many tree outfits overcharging for basic work. The idea was simple: show up, do the job right, charge a fair price.</p>
            <p>That idea turned into a real business. Today the crew handles everything from routine trimming to full lot clearing to middle-of-the-night storm calls. The team runs on reliable equipment, clear communication, and the kind of work ethic you'd expect from a local outfit — not a franchise.</p>
            <p>The company is still based in Shawnee, still locally owned, and still answers the phone when you call. The staff makes this business work. They're the ones in the bucket truck, running the chipper, and making sure your yard looks right when the job is done.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Equipment & Capabilities -->
  <section>
    <div class="container">
      <div class="split-reverse">
        <div data-animate="fade-up">
          <span class="eyebrow-label">Our Equipment</span>
          <h2 class="section-title">The Right Tools for Every Job</h2>
          <div class="prose">
            <p>Having the right equipment means we can handle jobs safely, efficiently, and without subcontracting — which keeps your costs down and the quality consistent. Our fleet includes:</p>
          </div>
          <ul class="check-list" style="margin-top: var(--space-md);">
            <li><i data-lucide="check"></i> <span><strong>Bucket truck</strong> — 60+ foot reach for high canopy trimming and sectional removal without climbing</span></li>
            <li><i data-lucide="check"></i> <span><strong>Vermeer BC1000 wood chipper</strong> — processes all branches and brush on-site, reducing debris to manageable chips</span></li>
            <li><i data-lucide="check"></i> <span><strong>Stihl professional chainsaws</strong> — MS 461 and MS 661 models for precision cutting on jobs large and small</span></li>
            <li><i data-lucide="check"></i> <span><strong>Commercial stump grinder</strong> — handles stumps of any diameter, grinding 6&ndash;12 inches below grade</span></li>
            <li><i data-lucide="check"></i> <span><strong>Rigging systems</strong> — for controlled removal of trees in tight spaces near structures and power lines</span></li>
          </ul>
          <div class="equipment-callout" style="margin-top: var(--space-lg);">
            <i data-lucide="shield-check"></i>
            <p><strong>USDOT #3421117</strong> — All equipment is registered with the U.S. Department of Transportation for safe, legal highway transport. Fully licensed and insured.</p>
          </div>
        </div>
        <div style="display: flex; flex-direction: column; gap: var(--space-md);">
          <div class="svc-img" data-animate="wipe-right">
            <img src="https://i.imgur.com/1KvudFj.jpeg" alt="Affordable Treefellers truck ready for tree service in Shawnee, Kansas" width="800" height="600" loading="lazy">
          </div>
          <div class="svc-img" data-animate="wipe-right">
            <img src="https://i.imgur.com/BvsalRQ.jpeg" alt="Affordable Treefellers work truck used for tree service jobs in Kansas" width="800" height="600" loading="lazy">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Mid CTA -->
  <section style="padding: 0;">
    <div class="container">
      <div class="inline-cta" data-animate="fade-up">
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
        <div class="svc-img" data-animate="wipe-right">
          <img src="https://i.imgur.com/Cc181DF.jpeg" alt="Worker with chainsaw cutting trunk during tree service job in Kansas" width="800" height="600" loading="lazy">
        </div>
        <div data-animate="fade-up">
          <h2 class="section-title">What You Can Expect</h2>
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
        <h2 class="section-title">The People Behind the Work</h2>
        <p class="prose-centered" style="color: var(--text-light);">This isn't a one-man operation. The team makes the business work.</p>
      </div>
      <div class="grid-3" data-stagger>
        <div class="svc-img" data-animate="fade-up">
          <img src="https://i.imgur.com/ZTry5Cq.jpeg" alt="Eric Frauenknecht, owner of Affordable Treefellers" width="600" height="450" loading="lazy">
          <p style="text-align: center; margin-top: var(--space-sm); font-weight: 600;">Eric Frauenknecht, Owner</p>
        </div>
        <div class="svc-img" data-animate="fade-up">
          <img src="https://i.imgur.com/cgdK3ZI.jpeg" alt="Affordable Treefellers crew member on the job" width="600" height="450" loading="lazy">
          <p style="text-align: center; margin-top: var(--space-sm); font-weight: 600;">The Crew</p>
        </div>
        <div class="svc-img" data-animate="fade-up">
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
        <h2 class="section-title">Credentials &amp; Licensing</h2>
      </div>
      <div class="grid-3" style="text-align: center;" data-stagger>
        <div data-animate="fade-up">
          <div style="font-size: 2.5rem; color: var(--primary); margin-bottom: var(--space-sm);"><i data-lucide="shield-check"></i></div>
          <h3 style="font-size: 1rem;">Licensed &amp; Insured</h3>
          <p style="color: var(--text-light); font-size: 0.9rem; margin-top: var(--space-xs);">Full liability insurance coverage on every job</p>
        </div>
        <div data-animate="fade-up">
          <div style="font-size: 2.5rem; color: var(--primary); margin-bottom: var(--space-sm);"><i data-lucide="truck"></i></div>
          <h3 style="font-size: 1rem;">USDOT #3421117</h3>
          <p style="color: var(--text-light); font-size: 0.9rem; margin-top: var(--space-xs);">Registered with the U.S. Department of Transportation for equipment transport</p>
        </div>
        <div data-animate="fade-up">
          <div style="font-size: 2.5rem; color: var(--primary); margin-bottom: var(--space-sm);"><i data-lucide="calendar-check"></i></div>
          <h3 style="font-size: 1rem;">Established 2013</h3>
          <p style="color: var(--text-light); font-size: 0.9rem; margin-top: var(--space-xs);">Over a decade of tree work in the Shawnee and Kansas City, KS area</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Work Photo -->
  <section>
    <div class="container">
      <div class="split-reverse">
        <div data-animate="fade-up">
          <h2 class="section-title">Serving Shawnee and Beyond</h2>
          <div class="prose">
            <p>Affordable Treefellers serves residential and commercial properties within a 30&ndash;40 mile radius of Shawnee, KS. That includes Overland Park, Olathe, Lenexa, Merriam, De Soto, Bonner Springs, and communities across Johnson County, Wyandotte County, and Leavenworth County.</p>
            <p>The process is always the same — call us, get a free on-site estimate, and hear a straightforward price. No corporate overhead, no franchise fees passed on to you. Just a local crew that knows Kansas trees and does the work right.</p>
          </div>
          <div style="margin-top: var(--space-lg); display: flex; gap: var(--space-md); flex-wrap: wrap;">
            <a href="/service-area" class="btn-secondary">View Service Area</a>
            <a href="/services" class="btn-secondary">Our Services</a>
          </div>
        </div>
        <div class="svc-img" data-animate="wipe-right">
          <img src="https://i.imgur.com/mbhx05O.jpeg" alt="Affordable Treefellers worker with ladder at residential tree service job" width="800" height="600" loading="lazy">
        </div>
      </div>
    </div>
  </section>

  <!-- Closing CTA -->
  <section class="bg-alt">
    <div class="container">
      <div class="closing-cta">
        <h2 class="section-title">Ready to Work With Us?</h2>
        <p class="prose-centered" style="text-align: center; color: var(--text-light);">Dead tree over your roof or just need a trim before storm season? Call us. Straight answer, fair price, no runaround.</p>
        <a href="tel:+18165093232" class="cta-phone">(816) 509-3232</a>
        <div class="cta-buttons">
          <a href="/contact" class="btn-primary">Get a Free Estimate</a>
          <a href="/services" class="btn-secondary">View Our Services</a>
        </div>
      </div>
    </div>
  </section>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
