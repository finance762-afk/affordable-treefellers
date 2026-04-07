/* ============================================
   EFFECTS.JS — UI Interactions & Tracking
   ============================================ */

document.addEventListener('DOMContentLoaded', () => {

  /* --- Ripple Effect (optional — add .ripple-btn class) --- */
  document.querySelectorAll('.ripple-btn').forEach(btn => {
    btn.addEventListener('click', function(e) {
      const ripple = document.createElement('span');
      ripple.classList.add('ripple');
      const rect = this.getBoundingClientRect();
      const size = Math.max(rect.width, rect.height);
      ripple.style.width = ripple.style.height = size + 'px';
      ripple.style.left = (e.clientX - rect.left - size / 2) + 'px';
      ripple.style.top = (e.clientY - rect.top - size / 2) + 'px';
      this.appendChild(ripple);
      ripple.addEventListener('animationend', () => ripple.remove());
    });
  });

  /* --- Ticker Pause on Hover (handled via CSS, JS fallback) --- */
  document.querySelectorAll('.ticker-strip').forEach(strip => {
    const track = strip.querySelector('.ticker-track');
    if (!track) return;
    strip.addEventListener('mouseenter', () => track.style.animationPlayState = 'paused');
    strip.addEventListener('mouseleave', () => track.style.animationPlayState = 'running');
  });

  /* --- Mobile Menu Toggle + Scroll Lock --- */
  const hamburger = document.querySelector('.hamburger');
  const mobileMenu = document.querySelector('.mobile-menu');
  if (hamburger && mobileMenu) {
    hamburger.addEventListener('click', () => {
      const isOpen = mobileMenu.classList.toggle('open');
      hamburger.classList.toggle('active');
      hamburger.setAttribute('aria-expanded', isOpen);
      document.body.style.overflow = isOpen ? 'hidden' : '';
    });

    mobileMenu.querySelectorAll('a').forEach(link => {
      link.addEventListener('click', () => {
        mobileMenu.classList.remove('open');
        hamburger.classList.remove('active');
        hamburger.setAttribute('aria-expanded', 'false');
        document.body.style.overflow = '';
      });
    });
  }

  /* --- Navbar Scroll Class --- */
  const navbar = document.querySelector('.navbar');
  if (navbar) {
    const scrollThreshold = 80;
    let ticking = false;
    window.addEventListener('scroll', () => {
      if (!ticking) {
        requestAnimationFrame(() => {
          navbar.classList.toggle('scrolled', window.scrollY > scrollThreshold);
          ticking = false;
        });
        ticking = true;
      }
    });
  }

  /* --- Back to Top --- */
  const backToTop = document.querySelector('.back-to-top');
  if (backToTop) {
    window.addEventListener('scroll', () => {
      backToTop.classList.toggle('visible', window.scrollY > 300);
    });
    backToTop.addEventListener('click', () => {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
  }

  /* --- FAQ Accordion --- */
  document.querySelectorAll('.faq-question').forEach(btn => {
    btn.addEventListener('click', () => {
      const item = btn.parentElement;
      const isOpen = item.classList.contains('active');

      // Close all others
      document.querySelectorAll('.faq-item.active').forEach(openItem => {
        if (openItem !== item) {
          openItem.classList.remove('active');
          openItem.querySelector('.faq-question').setAttribute('aria-expanded', 'false');
        }
      });

      // Toggle current
      item.classList.toggle('active', !isOpen);
      btn.setAttribute('aria-expanded', !isOpen);
    });
  });

  /* --- GA4 Event Stubs — Conversion Tracking --- */

  // Click-to-call tracking
  document.querySelectorAll('a[href^="tel:"]').forEach(el => {
    el.addEventListener('click', () => {
      if (typeof gtag !== 'undefined') {
        gtag('event', 'phone_call', { event_category: 'contact', event_label: el.href });
      }
    });
  });

  // Form submission tracking
  document.querySelectorAll('form').forEach(form => {
    form.addEventListener('submit', () => {
      if (typeof gtag !== 'undefined') {
        gtag('event', 'form_submit', { event_category: 'contact', event_label: window.location.pathname });
      }
    });
  });

});
