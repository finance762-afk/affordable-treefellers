/* ============================================
   ANIMATIONS.JS — Scroll Reveal & Counters
   ============================================ */

document.addEventListener('DOMContentLoaded', () => {

  /* --- Enable animations (elements visible by default until JS confirms) --- */
  document.documentElement.classList.add('js-ready');

  /* --- Scroll Reveal (fade-up, wipe-right) --- */
  const animElements = document.querySelectorAll('[data-animate]');
  if (animElements.length) {
    const revealObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('in-view');
          revealObserver.unobserve(entry.target);
        }
      });
    }, { threshold: 0.15 });

    animElements.forEach(el => revealObserver.observe(el));
  }

  /* --- Stagger Grid Children --- */
  const staggerGrids = document.querySelectorAll('[data-stagger]');
  if (staggerGrids.length) {
    const staggerObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const children = entry.target.children;
          Array.from(children).forEach((child, i) => {
            const delay = Math.min(i * 100, 400);
            child.style.transitionDelay = delay + 'ms';
            child.classList.add('in-view');
          });
          staggerObserver.unobserve(entry.target);
        }
      });
    }, { threshold: 0.15 });

    staggerGrids.forEach(grid => staggerObserver.observe(grid));
  }

  /* --- Stat Counter Animation --- */
  const counters = document.querySelectorAll('[data-count]');
  if (counters.length) {
    const counterObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const el = entry.target;
          const target = parseInt(el.getAttribute('data-count'), 10);
          const suffix = el.getAttribute('data-suffix') || '';
          const prefix = el.getAttribute('data-prefix') || '';
          const duration = 2000;
          const start = performance.now();

          function update(now) {
            const elapsed = now - start;
            const progress = Math.min(elapsed / duration, 1);
            const eased = 1 - Math.pow(1 - progress, 3);
            const current = Math.floor(eased * target);
            el.textContent = prefix + current.toLocaleString() + suffix;
            if (progress < 1) requestAnimationFrame(update);
          }
          requestAnimationFrame(update);
          counterObserver.unobserve(el);
        }
      });
    }, { threshold: 0.3 });

    counters.forEach(counter => counterObserver.observe(counter));
  }

});
