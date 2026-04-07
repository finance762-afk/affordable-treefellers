<!-- Navigation -->
<nav class="navbar" aria-label="Main navigation">
  <div class="container">
    <a href="/" class="navbar-logo">
      <img src="https://i.imgur.com/uviMLZK.png" alt="Affordable Treefellers LLC" width="200" height="50" class="logo-img">
    </a>

    <ul class="navbar-links">
      <li><a href="/" <?php if ($currentPage === 'home') echo 'aria-current="page"'; ?>>Home</a></li>
      <li><a href="/services" <?php if ($currentPage === 'services') echo 'aria-current="page"'; ?>>Services</a></li>
      <li><a href="/service-area" <?php if ($currentPage === 'service-area') echo 'aria-current="page"'; ?>>Service Area</a></li>
      <li><a href="/about" <?php if ($currentPage === 'about') echo 'aria-current="page"'; ?>>About</a></li>
      <li><a href="/contact" <?php if ($currentPage === 'contact') echo 'aria-current="page"'; ?>>Contact</a></li>
    </ul>

    <a href="tel:+18165093232" class="navbar-phone">
      <i class="lucide-phone"></i>
      (816) 509-3232
    </a>

    <button class="hamburger" aria-label="Toggle menu" aria-expanded="false">
      <span></span>
      <span></span>
      <span></span>
    </button>
  </div>
</nav>

<!-- Mobile Menu -->
<div class="mobile-menu">
  <a href="/" <?php if ($currentPage === 'home') echo 'aria-current="page"'; ?>>Home</a>
  <a href="/services" <?php if ($currentPage === 'services') echo 'aria-current="page"'; ?>>Services</a>
  <a href="/service-area" <?php if ($currentPage === 'service-area') echo 'aria-current="page"'; ?>>Service Area</a>
  <a href="/about" <?php if ($currentPage === 'about') echo 'aria-current="page"'; ?>>About</a>
  <a href="/contact" <?php if ($currentPage === 'contact') echo 'aria-current="page"'; ?>>Contact</a>
  <a href="tel:+18165093232" class="mobile-menu-phone">
    <i class="lucide-phone"></i>
    (816) 509-3232
  </a>
</div>
