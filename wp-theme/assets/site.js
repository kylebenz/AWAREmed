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
  var navLinks = document.querySelectorAll('.primary-nav a[href*="#"]');
  function onScroll() {
    var scrollY = window.scrollY + 100;
    var current = '';
    sections.forEach(function (sec) {
      if (sec.offsetTop <= scrollY) current = sec.id;
    });
    navLinks.forEach(function (link) {
      link.classList.remove('active');
      if (link.getAttribute('href').endsWith('#' + current)) link.classList.add('active');
    });
  }
  window.addEventListener('scroll', onScroll, { passive: true });
  onScroll();

  // AJAX contact form (WordPress)
  var form = document.getElementById('awaremed-contact-form');
  var msgBox = document.getElementById('awaremed-form-msg');
  if (form && typeof awaremed_ajax !== 'undefined') {
    form.addEventListener('submit', function (e) {
      e.preventDefault();
      var submitBtn = form.querySelector('[type="submit"]');
      submitBtn.disabled = true;
      submitBtn.textContent = 'Sending…';
      msgBox.style.display = 'none';
      var data = new FormData(form);
      data.set('nonce', awaremed_ajax.nonce);
      fetch(awaremed_ajax.ajaxurl, { method: 'POST', body: data })
        .then(function (r) { return r.json(); })
        .then(function (res) {
          msgBox.style.display = 'block';
          msgBox.style.padding = '14px 18px';
          msgBox.style.borderRadius = '8px';
          msgBox.style.marginBottom = '18px';
          if (res.success) {
            msgBox.style.background = '#edf7e6';
            msgBox.style.color = '#2a6010';
            msgBox.textContent = res.data.message;
            form.reset();
          } else {
            msgBox.style.background = '#fdecea';
            msgBox.style.color = '#8b1a1a';
            msgBox.textContent = res.data.message;
          }
        })
        .catch(function () {
          msgBox.style.display = 'block';
          msgBox.style.background = '#fdecea';
          msgBox.style.color = '#8b1a1a';
          msgBox.textContent = 'An error occurred. Please call us at (423) 430-6170.';
        })
        .finally(function () {
          submitBtn.disabled = false;
          submitBtn.textContent = 'Send Request';
        });
    });
  }
})();
