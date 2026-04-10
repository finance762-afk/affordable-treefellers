<!-- Footer -->
<footer>
  <div class="footer-main">
    <div class="container">
      <div class="footer-grid">

        <!-- Company Info -->
        <div class="footer-info">
          <h3 class="footer-logo">Affordable Treefellers</h3>
          <p class="footer-entity">Affordable Treefellers LLC is a licensed and insured tree service company based in Shawnee, Kansas, serving the greater Kansas City, KS area within a 30&ndash;40 mile radius. Affordable Treefellers specializes in tree removal, tree trimming, and stump grinding. Contact: <a href="tel:+18165093232">(816) 509-3232</a> | <a href="mailto:bigvermont@hotmail.com">bigvermont@hotmail.com</a>. USDOT #3421117. Licensed and insured.</p>
        </div>

        <!-- Quick Links -->
        <div class="footer-links">
          <h4>Quick Links</h4>
          <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/services">Services</a></li>
            <li><a href="/services/tree-removal">Tree Removal</a></li>
            <li><a href="/services/tree-trimming-pruning">Tree Trimming</a></li>
            <li><a href="/services/stump-grinding">Stump Grinding</a></li>
            <li><a href="/service-area">Service Area</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/contact">Contact</a></li>
          </ul>
        </div>

        <!-- Contact -->
        <div class="footer-contact">
          <h4>Contact Us</h4>
          <p><a href="tel:+18165093232"><i data-lucide="phone"></i> (816) 509-3232</a></p>
          <p><a href="mailto:bigvermont@hotmail.com"><i data-lucide="mail"></i> bigvermont@hotmail.com</a></p>
          <p><i data-lucide="map-pin"></i> Shawnee, Kansas</p>
          <p><i data-lucide="clock"></i> Mon&ndash;Fri 9:00 AM &ndash; 5:00 PM</p>
          <p style="font-size: 0.85rem; color: rgba(255,255,255,0.7); margin-top: 2px;">Closed weekends, but you can still reach us anytime at <a href="tel:+18165093232" style="color: var(--accent);">(816) 509-3232</a> for questions or emergencies.</p>
          <p><i data-lucide="zap"></i> 24/7 Emergency Service</p>
        </div>

        <!-- Social -->
        <div class="footer-social">
          <h4>Find Us Online</h4>
          <div class="social-icons">
            <a href="https://www.facebook.com/p/Affordable-Treefellers-100064671924544/" aria-label="Facebook" target="_blank" rel="noopener"><i data-lucide="external-link"></i></a>
            <a href="https://share.google/3DjlcRF61q4CUGWuE" aria-label="Google Business Profile" target="_blank" rel="noopener"><i data-lucide="star"></i></a>
            <a href="https://www.yelp.com/biz/affordable-treefellers-kansas-city" aria-label="Yelp" target="_blank" rel="noopener"><i data-lucide="message-circle"></i></a>
            <a href="https://nextdoor.com/pages/affordable-treefellers-shawnee-ks/" aria-label="Nextdoor" target="_blank" rel="noopener"><i data-lucide="home"></i></a>
          </div>
        </div>

      </div>
    </div>
  </div>

  <div class="footer-bottom">
    <div class="container">
      <p>&copy; <?php echo date('Y'); ?> Affordable Treefellers LLC. All rights reserved.</p>
      <p><a href="https://pageoneinsights.com" rel="dofollow" target="_blank">Web Design &amp; Hosting by Page One Insights, LLC</a></p>
    </div>
  </div>
</footer>

<!-- Back to Top -->
<button class="back-to-top" aria-label="Back to top">
  <i data-lucide="chevron-up"></i>
</button>

<!-- Lucide Icons -->
<script src="https://unpkg.com/lucide@latest/dist/umd/lucide.min.js"></script>
<script>lucide.createIcons();</script>

<!-- Scripts -->
<script src="/assets/js/animations.js" defer></script>
<script src="/assets/js/effects.js" defer></script>

<!-- Conditional CDN Scripts -->
<?php if (!empty($useSwiper)): ?>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js" defer></script>
<?php endif; ?>
<?php if (!empty($useTilt)): ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.8.1/vanilla-tilt.min.js" defer></script>
<?php endif; ?>
<?php if (!empty($useTyped)): ?>
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.1.0/dist/typed.umd.js" defer></script>
<?php endif; ?>

</body>
</html>
