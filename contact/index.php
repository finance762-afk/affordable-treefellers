<?php
$pageTitle       = "Contact Affordable Treefellers | Free Estimates in Shawnee, KS";
$pageDescription = "Contact Affordable Treefellers for a free tree service estimate in Shawnee, KS. Call (816) 509-3232 or fill out the form. Licensed and insured. 24/7 emergency service.";
$canonicalUrl    = "https://affordabletreefellers.com/contact";
$ogImage         = "https://i.imgur.com/BPmnacY.jpeg";
$currentPage     = "contact";
$heroImage       = "";
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
      "email": "bigvermont@hotmail.com",
      "url": "https://affordabletreefellers.com",
      "address": {
        "@type": "PostalAddress",
        "addressLocality": "Shawnee",
        "addressRegion": "KS",
        "addressCountry": "US"
      },
      "openingHoursSpecification": [
        {
          "@type": "OpeningHoursSpecification",
          "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],
          "opens": "09:00",
          "closes": "17:00"
        }
      ]
    },
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://affordabletreefellers.com" },
        { "@type": "ListItem", "position": 2, "name": "Contact", "item": "https://affordabletreefellers.com/contact" }
      ]
    }
  ]
}';

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php';
?>

<main id="main-content">

  <!-- Breadcrumbs -->
  <div class="breadcrumbs" style="padding-top: var(--space-lg);">
    <div class="container">
      <a href="/">Home</a> <span>/</span> <strong>Contact</strong>
    </div>
  </div>

  <!-- Contact Section -->
  <section>
    <div class="container">
      <div style="text-align: center; margin-bottom: var(--space-2xl);">
        <h1>Contact Affordable Treefellers</h1>
        <p class="prose-centered" style="color: var(--text-light); margin-top: var(--space-md);">Get a free estimate for any tree service in the Shawnee, KS area. Fill out the form or call us directly — we typically respond within a few hours during business hours.</p>
      </div>

      <div class="split" style="align-items: flex-start;">

        <!-- Form -->
        <div data-animate="fade-up">
          <h2 style="font-size: 1.4rem; margin-bottom: var(--space-lg);">Request a Free Estimate</h2>
          <form action="https://formsubmit.co/bigvermont@hotmail.com" method="POST">
            <!-- Hidden Fields -->
            <input type="hidden" name="_next" value="https://affordabletreefellers.com/thank-you">
            <input type="hidden" name="_captcha" value="false">
            <input type="text" name="_honey" style="display: none;">
            <input type="hidden" name="_template" value="table">
            <input type="hidden" name="_subject" value="New Contact Form Submission — Affordable Treefellers">
            <input type="hidden" name="_cc" value="CustomerService@pageoneinsights.com">

            <div class="form-group">
              <input type="text" id="name" name="name" placeholder=" " required>
              <label for="name">Your Name</label>
            </div>

            <div class="form-group">
              <input type="tel" id="phone" name="phone" placeholder=" " required>
              <label for="phone">Phone Number</label>
            </div>

            <div class="form-group">
              <input type="email" id="email" name="email" placeholder=" " required>
              <label for="email">Email Address</label>
            </div>

            <div class="form-group">
              <select id="service" name="service" required>
                <option value="" disabled selected></option>
                <option value="Tree Removal">Tree Removal</option>
                <option value="Tree Trimming & Pruning">Tree Trimming &amp; Pruning</option>
                <option value="Stump Grinding">Stump Grinding</option>
                <option value="Storm Damage / Emergency">Storm Damage / Emergency</option>
                <option value="Commercial Tree Care">Commercial Tree Care</option>
                <option value="Lot Clearing">Lot Clearing</option>
                <option value="Other">Other</option>
              </select>
              <label for="service">Service Needed</label>
            </div>

            <div class="form-group">
              <textarea id="message" name="message" placeholder=" " rows="5"></textarea>
              <label for="message">Tell Us About Your Project</label>
            </div>

            <button type="submit" class="btn-primary" style="width: 100%; text-align: center;">Send Message</button>
          </form>
        </div>

        <!-- Sidebar -->
        <div data-animate="fade-up">

          <!-- Emergency Callout -->
          <div style="background: #b91c1c; color: #fff; padding: var(--space-xl); border-radius: 4px; text-align: center; margin-bottom: var(--space-xl);">
            <i class="icon-zap" style="font-size: 2rem; margin-bottom: var(--space-sm); display: block;"></i>
            <h3 style="color: #fff; font-size: 1.2rem; margin-bottom: var(--space-sm);">Tree Emergency?</h3>
            <p style="font-size: 0.9rem; margin-bottom: var(--space-md); opacity: 0.9;">Fallen tree on your home, vehicle, or blocking your driveway? Don't wait for a form response.</p>
            <a href="tel:+18165093232" style="font-family: 'Oswald', sans-serif; font-size: 1.5rem; font-weight: 700; color: var(--accent); display: block;">Call (816) 509-3232</a>
            <p style="font-size: 0.8rem; margin-top: var(--space-sm); opacity: 0.75;">Available 24/7 for emergencies</p>
          </div>

          <!-- Contact Info -->
          <div style="background: var(--bg-alt); padding: var(--space-xl); border-radius: 4px;">
            <h3 style="font-size: 1.1rem; margin-bottom: var(--space-lg);">Contact Information</h3>

            <div style="display: flex; flex-direction: column; gap: var(--space-lg);">
              <div style="display: flex; align-items: flex-start; gap: var(--space-md);">
                <i class="icon-phone" style="color: var(--primary); font-size: 1.2rem; margin-top: 3px;"></i>
                <div>
                  <strong>Phone</strong><br>
                  <a href="tel:+18165093232" style="color: var(--primary); font-weight: 600;">(816) 509-3232</a>
                </div>
              </div>

              <div style="display: flex; align-items: flex-start; gap: var(--space-md);">
                <i class="icon-mail" style="color: var(--primary); font-size: 1.2rem; margin-top: 3px;"></i>
                <div>
                  <strong>Email</strong><br>
                  <a href="mailto:bigvermont@hotmail.com" style="color: var(--primary);">bigvermont@hotmail.com</a>
                </div>
              </div>

              <div style="display: flex; align-items: flex-start; gap: var(--space-md);">
                <i class="icon-clock" style="color: var(--primary); font-size: 1.2rem; margin-top: 3px;"></i>
                <div>
                  <strong>Hours</strong><br>
                  Mon&ndash;Sat: 9:00 AM &ndash; 5:00 PM<br>
                  <span style="color: var(--accent); font-weight: 600;">Emergency: 24/7</span>
                </div>
              </div>

              <div style="display: flex; align-items: flex-start; gap: var(--space-md);">
                <i class="icon-map-pin" style="color: var(--primary); font-size: 1.2rem; margin-top: 3px;"></i>
                <div>
                  <strong>Service Area</strong><br>
                  Shawnee, KS<br>
                  <span style="color: var(--text-light); font-size: 0.9rem;">Serving a 30&ndash;40 mile radius across the Kansas City, KS metro</span>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </div>
  </section>

  <!-- Map -->
  <section class="bg-alt">
    <div class="container">
      <h2 class="section-title" style="text-align: center;">Find Us in Shawnee, KS</h2>
      <div style="border-radius: 4px; overflow: hidden; margin-top: var(--space-lg); aspect-ratio: 16/9;">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d99194.04783068956!2d-94.80837!3d39.0417!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87c08d6b8e6c4c1d%3A0x8e1c8e7b6c3e8a0!2sShawnee%2C%20KS!5e0!3m2!1sen!2sus!4v1700000000000!5m2!1sen!2sus"
          width="100%"
          height="100%"
          style="border: 0; display: block;"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
          title="Affordable Treefellers service area map centered on Shawnee, KS">
        </iframe>
      </div>
    </div>
  </section>

  <!-- Closing CTA -->
  <section>
    <div class="container">
      <div class="closing-cta">
        <h2 class="section-title">Prefer to Talk? Give Us a Call.</h2>
        <p class="prose-centered" style="text-align: center; color: var(--text-light);">Most estimates can be scheduled the same week. Call us directly and we'll set up a time that works for you.</p>
        <a href="tel:+18165093232" class="cta-phone">(816) 509-3232</a>
      </div>
    </div>
  </section>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
