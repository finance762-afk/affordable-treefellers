<?php
$pageTitle       = "Page Not Found | Affordable Treefellers";
$pageDescription = "The page you're looking for doesn't exist. Return to the Affordable Treefellers homepage or browse our tree services.";
$canonicalUrl    = "https://affordabletreefellers.com/404";
$ogImage         = "https://i.imgur.com/BPmnacY.jpeg";
$currentPage     = "";
$heroImage       = "";
$useSwiper       = false;
$useTilt         = false;
$useTyped        = false;
$schemaMarkup    = '';

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php';
?>

<main id="main-content">

  <section style="min-height: 60vh; display: flex; align-items: center;">
    <div class="container" style="text-align: center;">
      <div style="font-size: clamp(4rem, 10vw, 8rem); font-family: 'Oswald', sans-serif; font-weight: 700; color: var(--primary); line-height: 1;">404</div>
      <h1 style="font-size: clamp(1.4rem, 3vw, 2rem); margin: var(--space-md) 0;">Page Not Found</h1>
      <p class="prose-centered" style="color: var(--text-light); margin-bottom: var(--space-xl);">The page you're looking for doesn't exist or may have been moved. Let's get you back on track.</p>
      <div style="display: flex; gap: var(--space-md); justify-content: center; flex-wrap: wrap;">
        <a href="/" class="btn-primary">Back to Home</a>
        <a href="/services" class="btn-secondary">View Our Services</a>
        <a href="/contact" class="btn-secondary">Contact Us</a>
      </div>
      <p style="margin-top: var(--space-2xl); color: var(--text-light); font-size: 0.95rem;">Need help now? Call <a href="tel:+18165093232" style="color: var(--primary); font-weight: 700;">(816) 509-3232</a></p>
    </div>
  </section>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
