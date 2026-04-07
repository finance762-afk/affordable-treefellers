<!-- Navigation -->
<nav class="navbar" aria-label="Main navigation">
  <div class="container">
    <a href="/" class="navbar-logo">
      <img src="https://i.imgur.com/uviMLZK.png" alt="Affordable Treefellers LLC" width="200" height="50" class="logo-img">
    </a>

    <ul class="navbar-links">
      <li><a href="/" <?php if ($currentPage === 'home') echo 'aria-current="page"'; ?>>Home</a></li>
      <li class="has-dropdown">
        <a href="/services" <?php if ($currentPage === 'services') echo 'aria-current="page"'; ?>>Services</a>
        <ul class="dropdown" role="menu" style="display:none">
          <li role="none"><a role="menuitem" href="/services/tree-removal">Tree Removal</a></li>
          <li role="none"><a role="menuitem" href="/services/tree-trimming-pruning">Tree Trimming &amp; Pruning</a></li>
          <li role="none"><a role="menuitem" href="/services/stump-grinding">Stump Grinding</a></li>
          <li role="none"><a role="menuitem" href="/services/storm-damage-cleanup">Storm Damage Cleanup</a></li>
          <li role="none"><a role="menuitem" href="/services/commercial-residential-tree-care">Commercial &amp; Residential</a></li>
          <li role="none"><a role="menuitem" href="/services/lot-land-clearing">Lot &amp; Land Clearing</a></li>
        </ul>
      </li>
      <li><a href="/service-area" <?php if ($currentPage === 'service-area') echo 'aria-current="page"'; ?>>Service Area</a></li>
      <li><a href="/about" <?php if ($currentPage === 'about') echo 'aria-current="page"'; ?>>About</a></li>
      <li><a href="/contact" <?php if ($currentPage === 'contact') echo 'aria-current="page"'; ?>>Contact</a></li>
    </ul>

    <a href="tel:+18165093232" class="navbar-phone">
      <i data-lucide="phone"></i>
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
  <div class="mobile-submenu">
    <a href="/services/tree-removal">Tree Removal</a>
    <a href="/services/tree-trimming-pruning">Trimming &amp; Pruning</a>
    <a href="/services/stump-grinding">Stump Grinding</a>
    <a href="/services/storm-damage-cleanup">Storm Damage</a>
    <a href="/services/commercial-residential-tree-care">Commercial &amp; Residential</a>
    <a href="/services/lot-land-clearing">Lot &amp; Land Clearing</a>
  </div>
  <a href="/service-area" <?php if ($currentPage === 'service-area') echo 'aria-current="page"'; ?>>Service Area</a>
  <a href="/about" <?php if ($currentPage === 'about') echo 'aria-current="page"'; ?>>About</a>
  <a href="/contact" <?php if ($currentPage === 'contact') echo 'aria-current="page"'; ?>>Contact</a>
  <a href="tel:+18165093232" class="mobile-menu-phone">
    <i data-lucide="phone"></i>
    (816) 509-3232
  </a>
</div>
