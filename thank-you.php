<?php
$pageTitle       = "Thank You | Affordable Treefellers";
$pageDescription = "Thank you for contacting Affordable Treefellers. We will be in touch soon.";
$canonicalUrl    = "https://affordabletreefellers.com/thank-you";
$ogImage         = "https://i.imgur.com/BPmnacY.jpeg";
$currentPage     = "";
$heroImage       = "";
$useSwiper       = false;
$useTilt         = false;
$useTyped        = false;
$schemaMarkup    = '';
$noindex         = true;

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php';
?>

<main id="main-content">

  <section style="min-height: 60vh; display: flex; align-items: center;">
    <div class="container" style="text-align: center;">
      <div style="font-size: 3rem; color: var(--primary); margin-bottom: var(--space-md);"><i data-lucide="check-circle"></i></div>
      <h1 style="font-size: clamp(1.6rem, 3vw, 2.2rem);">Thank You!</h1>
      <p class="prose-centered" style="color: var(--text-light); margin: var(--space-lg) auto; font-size: 1.1rem;">Your message has been received. We typically respond within a few hours during business hours (Mon&ndash;Fri, 9:00 AM &ndash; 5:00 PM).</p>
      <div style="background: var(--bg-alt); padding: var(--space-xl); border-radius: 4px; max-width: 500px; margin: var(--space-xl) auto;">
        <p style="font-weight: 600; margin-bottom: var(--space-sm);">Need a faster response?</p>
        <p style="color: var(--text-light); font-size: 0.95rem; margin-bottom: var(--space-md);">Call us directly — especially for emergency tree work.</p>
        <a href="tel:+18165093232" style="font-family: 'Oswald', sans-serif; font-size: 1.5rem; font-weight: 700; color: var(--primary);">(816) 509-3232</a>
      </div>
      <div style="margin-top: var(--space-2xl);">
        <a href="/" class="btn-primary">Back to Home</a>
      </div>
    </div>
  </section>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
