// AWAREmed — site interactions

(function () {
  // Mobile nav toggle
  var btn = document.querySelector('.nav-toggle');
  var nav = document.getElementById('primary-nav');
  if (btn && nav) {
    btn.addEventListener('click', function () {
      var open = nav.classList.toggle('open');
      btn.setAttribute('aria-expanded', open);
      btn.setAttribute('aria-label', open ? 'Close menu' : 'Open menu');
    });
    nav.addEventListener('click', function (e) {
      if (e.target.tagName === 'A' && !e.target.querySelector('.caret')) {
        nav.classList.remove('open');
        btn.setAttribute('aria-expanded', false);
        btn.setAttribute('aria-label', 'Open menu');
      }
    });
    // Close nav when clicking outside
    document.addEventListener('click', function (e) {
      if (nav.classList.contains('open') && !nav.contains(e.target) && e.target !== btn && !btn.contains(e.target)) {
        nav.classList.remove('open');
        btn.setAttribute('aria-expanded', false);
        btn.setAttribute('aria-label', 'Open menu');
      }
    });
  }

  // Legal tabs
  var tabBtns = document.querySelectorAll('.legal-tab-btn');
  var tabPanels = document.querySelectorAll('.legal-panel');
  tabBtns.forEach(function (btn) {
    btn.addEventListener('click', function () {
      tabBtns.forEach(function (b) { b.classList.remove('active'); });
      tabPanels.forEach(function (p) { p.classList.remove('active'); });
      btn.classList.add('active');
      var target = document.getElementById(btn.dataset.tab);
      if (target) target.classList.add('active');
    });
  });

  // Active nav link highlighting based on scroll
  var sections = document.querySelectorAll('section[id]');
  var navLinks = document.querySelectorAll('.primary-nav a[href^="#"]');
  function onScroll() {
    var scrollY = window.scrollY + 100;
    var current = '';
    sections.forEach(function (sec) {
      if (sec.offsetTop <= scrollY) current = sec.id;
    });
    navLinks.forEach(function (link) {
      link.classList.remove('active');
      if (link.getAttribute('href') === '#' + current) link.classList.add('active');
    });
  }
  window.addEventListener('scroll', onScroll, { passive: true });
  onScroll();
})();
