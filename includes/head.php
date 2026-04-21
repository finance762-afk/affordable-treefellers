<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title><?php echo $pageTitle; ?></title>

  <!-- Google Search Console Verification -->
  <meta name="google-site-verification" content="GSC_VERIFICATION_CODE_HERE" />

  <!-- Google Analytics 4 -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-XXXXXXXXXX"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-XXXXXXXXXX', {
      'send_page_view': true,
      'anonymize_ip': true
    });
  </script>

  <meta name="description" content="<?php echo $pageDescription; ?>">
  <link rel="canonical" href="<?php echo $canonicalUrl; ?>">
  <?php if (!empty($noindex)): ?>
  <meta name="robots" content="noindex, nofollow">
  <?php endif; ?>

  <!-- OG Tags -->
  <meta property="og:title" content="<?php echo $pageTitle; ?>">
  <meta property="og:description" content="<?php echo $pageDescription; ?>">
  <meta property="og:image" content="<?php echo $ogImage; ?>">
  <meta property="og:url" content="<?php echo $canonicalUrl; ?>">
  <meta property="og:type" content="<?php echo ($currentPage === 'home') ? 'website' : 'article'; ?>">

  <!-- Google Fonts — Oswald + Lato + Caveat (accent) -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Lato:wght@400;700&family=Caveat:wght@400;600&display=swap" rel="stylesheet">

  <!-- Preload Heading Font -->
  <link rel="preload" as="font" type="font/woff2" href="https://fonts.gstatic.com/s/oswald/v53/TK3_WkUHHAIjg75cFRf3bXL8LICs1_FvsUZiZQ.woff2" crossorigin>

  <!-- Icons — Lucide (loaded in footer) -->

  <!-- Swiper CSS (conditional) -->
  <?php if (!empty($useSwiper)): ?>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
  <?php endif; ?>

  <!-- Stylesheet -->
  <link rel="stylesheet" href="/assets/css/styles.css?v=7">

  <!-- Preconnect / DNS Prefetch -->
  <link rel="dns-prefetch" href="//www.googletagmanager.com">
  <link rel="dns-prefetch" href="//www.google-analytics.com">
  <link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin>

  <!-- Hero Image Preload -->
  <?php if (!empty($heroImage)): ?>
  <link rel="preload" as="image" href="<?php echo $heroImage; ?>">
  <?php endif; ?>

  <!-- Schema JSON-LD -->
  <?php if (!empty($schemaMarkup)): ?>
  <script type="application/ld+json">
  <?php echo $schemaMarkup; ?>
  </script>
  <?php endif; ?>
</head>
<body>
  <!-- Skip to Content -->
  <a href="#main-content" class="skip-link">Skip to main content</a>
