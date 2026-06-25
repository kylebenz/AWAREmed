// AWAREmed — site interactions
'use strict';

/* =====================================================================
   UTILITIES
===================================================================== */
function qs(sel, ctx) { return (ctx || document).querySelector(sel); }
function qsa(sel, ctx) { return Array.from((ctx || document).querySelectorAll(sel)); }
function on(el, ev, fn, opts) { if (el) el.addEventListener(ev, fn, opts); }

/* =====================================================================
   HEADER — SCROLL STATE & MOBILE TOGGLE
===================================================================== */
(function () {
  var header = qs('#site-header');
  var toggle = qs('#mobile-toggle');
  var nav    = qs('#primary-nav');

  on(window, 'scroll', function () {
    if (!header) return;
    header.classList.toggle('scrolled', window.scrollY > 40);
    var btt = qs('#back-to-top');
    if (btt) btt.hidden = window.scrollY < 400;
  }, { passive: true });

  on(toggle, 'click', function () {
    var open = toggle.getAttribute('aria-expanded') === 'true';
    toggle.setAttribute('aria-expanded', String(!open));
    nav.classList.toggle('open', !open);
    document.body.classList.toggle('nav-open', !open);
  });

  // Close nav on outside click
  on(document, 'click', function (e) {
    if (nav && nav.classList.contains('open') && !header.contains(e.target)) {
      nav.classList.remove('open');
      document.body.classList.remove('nav-open');
      if (toggle) toggle.setAttribute('aria-expanded', 'false');
    }
  });

  // Close nav when a nav link is clicked
  qsa('.nav-link', nav).forEach(function (link) {
    on(link, 'click', function () {
      nav.classList.remove('open');
      document.body.classList.remove('nav-open');
      if (toggle) toggle.setAttribute('aria-expanded', 'false');
    });
  });
})();

/* =====================================================================
   MEGA MENU
===================================================================== */
(function () {
  var triggers = qsa('.mega-trigger');
  triggers.forEach(function (btn) {
    var menuId = btn.getAttribute('aria-controls');
    var menu   = qs('#' + menuId);

    on(btn, 'click', function (e) {
      e.stopPropagation();
      var open = btn.getAttribute('aria-expanded') === 'true';
      // Close all
      triggers.forEach(function (t) {
        t.setAttribute('aria-expanded', 'false');
        var m = qs('#' + t.getAttribute('aria-controls'));
        if (m) m.classList.remove('open');
      });
      if (!open) {
        btn.setAttribute('aria-expanded', 'true');
        if (menu) menu.classList.add('open');
      }
    });

    // Close on outside click
    on(document, 'click', function () {
      btn.setAttribute('aria-expanded', 'false');
      if (menu) menu.classList.remove('open');
    });

    // Keyboard: Escape closes
    on(btn, 'keydown', function (e) {
      if (e.key === 'Escape') {
        btn.setAttribute('aria-expanded', 'false');
        if (menu) menu.classList.remove('open');
        btn.focus();
      }
    });
  });
})();

/* =====================================================================
   SMOOTH SCROLL — anchor links
===================================================================== */
(function () {
  on(document, 'click', function (e) {
    var link = e.target.closest('a[href^="#"]');
    if (!link) return;
    var id = link.getAttribute('href').slice(1);
    if (!id) return;
    var target = qs('#' + id);
    if (!target) return;
    e.preventDefault();
    var offset = 80; // header height
    var top = target.getBoundingClientRect().top + window.scrollY - offset;
    window.scrollTo({ top: top, behavior: 'smooth' });
  });
})();

/* =====================================================================
   SERVICES — Tab Navigation & Dropdown
===================================================================== */
(function () {
  var tabs     = qsa('.svc-tab');
  var dropdown = qs('#svc-dropdown');
  var navWrap  = qs('.svc-nav-wrap');
  var offset   = 140; // sticky header + tab nav height

  function scrollToService(id) {
    var el = qs('#' + id);
    if (!el) return;
    var top = el.getBoundingClientRect().top + window.scrollY - offset;
    window.scrollTo({ top: top, behavior: 'smooth' });
  }

  function setActiveTab(targetId) {
    tabs.forEach(function (t) {
      var active = t.dataset.target === targetId;
      t.classList.toggle('active', active);
      t.setAttribute('aria-selected', String(active));
    });
    if (dropdown) dropdown.value = targetId;
  }

  tabs.forEach(function (tab) {
    on(tab, 'click', function () {
      var targetId = tab.dataset.target;
      setActiveTab(targetId);
      scrollToService(targetId);
    });
  });

  on(dropdown, 'change', function () {
    var targetId = dropdown.value;
    setActiveTab(targetId);
    scrollToService(targetId);
  });

  // Update active tab on scroll
  var blocks = qsa('.svc-block');
  on(window, 'scroll', function () {
    if (!blocks.length) return;
    var scrollPos = window.scrollY + offset + 20;
    var active = null;
    blocks.forEach(function (block) {
      if (block.getBoundingClientRect().top + window.scrollY <= scrollPos) {
        active = block.id;
      }
    });
    if (active) setActiveTab(active);
  }, { passive: true });

  // Sticky nav: make tab bar sticky when scrolled past services section header
  var svcSection = qs('#services');
  if (svcSection && navWrap) {
    on(window, 'scroll', function () {
      var svcTop = svcSection.getBoundingClientRect().top;
      navWrap.classList.toggle('stuck', svcTop < 80);
    }, { passive: true });
  }
})();

/* =====================================================================
   SCROLL REVEAL — Intersection Observer
===================================================================== */
(function () {
  if (!window.IntersectionObserver) return;

  var revealOpts = { threshold: 0.12, rootMargin: '0px 0px -60px 0px' };
  var revealObs = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
        revealObs.unobserve(entry.target);
      }
    });
  }, revealOpts);

  qsa('.reveal, .reveal-left, .reveal-right').forEach(function (el) {
    revealObs.observe(el);
  });

  // Stagger children
  var staggerObs = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
      if (entry.isIntersecting) {
        var children = Array.from(entry.target.children);
        children.forEach(function (child, i) {
          child.style.transitionDelay = (i * 0.08) + 's';
          child.classList.add('visible');
        });
        staggerObs.unobserve(entry.target);
      }
    });
  }, revealOpts);

  qsa('.stagger').forEach(function (el) {
    Array.from(el.children).forEach(function (child) {
      child.classList.add('reveal');
    });
    staggerObs.observe(el);
  });
})();

/* =====================================================================
   COUNTER ANIMATION
===================================================================== */
(function () {
  if (!window.IntersectionObserver) return;

  function easeOut(t) { return 1 - Math.pow(1 - t, 3); }

  function animateCounter(el) {
    var target   = parseInt(el.dataset.target, 10);
    var duration = 1800;
    var start    = null;

    function step(ts) {
      if (!start) start = ts;
      var elapsed  = ts - start;
      var progress = Math.min(elapsed / duration, 1);
      el.textContent = Math.round(easeOut(progress) * target).toLocaleString();
      if (progress < 1) requestAnimationFrame(step);
    }
    requestAnimationFrame(step);
  }

  var counterObs = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
      if (entry.isIntersecting) {
        animateCounter(entry.target);
        counterObs.unobserve(entry.target);
      }
    });
  }, { threshold: 0.5 });

  qsa('.counter').forEach(function (el) { counterObs.observe(el); });
})();

/* =====================================================================
   HERO PARTICLES
===================================================================== */
(function () {
  var container = qs('.hero-particles');
  if (!container) return;
  var particles = qsa('.particle', container);
  particles.forEach(function (p, i) {
    p.style.setProperty('--delay', (i * 0.7) + 's');
    p.style.setProperty('--size', (8 + Math.random() * 16) + 'px');
    p.style.setProperty('--x', (Math.random() * 100) + '%');
    p.style.setProperty('--y', (Math.random() * 100) + '%');
    p.style.setProperty('--dur', (4 + Math.random() * 6) + 's');
  });
})();

/* =====================================================================
   TESTIMONIAL SLIDER
===================================================================== */
(function () {
  var track   = qs('#testimonial-track');
  var prevBtn = qs('#slider-prev');
  var nextBtn = qs('#slider-next');
  var dotsWrap = qs('#slider-dots');
  if (!track) return;

  var slides  = qsa('.testimonial-slide', track);
  var total   = slides.length;
  var current = 0;
  var autoTimer;

  // Build dots
  slides.forEach(function (_, i) {
    var dot = document.createElement('button');
    dot.className = 'dot' + (i === 0 ? ' active' : '');
    dot.setAttribute('role', 'tab');
    dot.setAttribute('aria-label', 'Go to testimonial ' + (i + 1));
    dot.setAttribute('aria-selected', String(i === 0));
    on(dot, 'click', function () { goTo(i); });
    dotsWrap.appendChild(dot);
  });

  function getDots() { return qsa('.dot', dotsWrap); }

  function goTo(idx) {
    current = (idx + total) % total;
    track.style.transform = 'translateX(-' + (current * 100) + '%)';
    getDots().forEach(function (d, i) {
      d.classList.toggle('active', i === current);
      d.setAttribute('aria-selected', String(i === current));
    });
    slides.forEach(function (s, i) {
      s.setAttribute('aria-hidden', String(i !== current));
    });
    clearInterval(autoTimer);
    autoTimer = setInterval(function () { goTo(current + 1); }, 5500);
  }

  on(prevBtn, 'click', function () { goTo(current - 1); });
  on(nextBtn, 'click', function () { goTo(current + 1); });

  // Touch / swipe
  var startX = 0;
  on(track, 'touchstart', function (e) { startX = e.touches[0].clientX; }, { passive: true });
  on(track, 'touchend', function (e) {
    var diff = startX - e.changedTouches[0].clientX;
    if (Math.abs(diff) > 50) goTo(diff > 0 ? current + 1 : current - 1);
  });

  goTo(0);
})();

/* =====================================================================
   GALLERY — FILTER & LIGHTBOX
===================================================================== */
(function () {
  var filters  = qsa('.gal-filter');
  var items    = qsa('.gal-item');
  var lightbox = qs('#lightbox');
  var lbContent = qs('#lightbox-content');
  var lbClose  = qs('#lightbox-close');

  filters.forEach(function (btn) {
    on(btn, 'click', function () {
      var filter = btn.dataset.filter;
      filters.forEach(function (b) {
        b.classList.remove('active');
        b.setAttribute('aria-pressed', 'false');
      });
      btn.classList.add('active');
      btn.setAttribute('aria-pressed', 'true');

      items.forEach(function (item) {
        var show = filter === 'all' || item.dataset.category === filter;
        item.style.display = show ? '' : 'none';
        item.setAttribute('aria-hidden', String(!show));
      });
    });
  });

  // Lightbox open
  items.forEach(function (item) {
    on(item, 'click', function () {
      if (!lightbox || !lbContent) return;
      var caption = item.querySelector('.gal-caption');
      var img     = item.querySelector('img');
      if (img) {
        lbContent.innerHTML = '<img src="' + img.src + '" alt="' + (img.alt || '') + '" style="max-width:90vw;max-height:80vh;border-radius:8px"/>';
        if (caption) lbContent.innerHTML += '<p style="text-align:center;color:#fff;margin-top:12px">' + caption.textContent + '</p>';
      } else {
        var cap = caption ? caption.textContent : 'Gallery Image';
        lbContent.innerHTML = '<div style="background:rgba(255,255,255,.08);border-radius:12px;padding:80px;color:#fff;text-align:center;font-size:1.2rem">' + cap + '</div>';
      }
      lightbox.hidden = false;
      document.body.style.overflow = 'hidden';
      lbClose.focus();
    });
    item.setAttribute('tabindex', '0');
    item.setAttribute('role', 'button');
    on(item, 'keydown', function (e) {
      if (e.key === 'Enter' || e.key === ' ') { e.preventDefault(); item.click(); }
    });
  });

  function closeLightbox() {
    if (!lightbox) return;
    lightbox.hidden = true;
    document.body.style.overflow = '';
  }

  on(lbClose, 'click', closeLightbox);
  on(lightbox, 'click', function (e) { if (e.target === lightbox) closeLightbox(); });
  on(document, 'keydown', function (e) { if (e.key === 'Escape' && lightbox && !lightbox.hidden) closeLightbox(); });
})();

/* =====================================================================
   FAQ — ACCORDION & SEARCH
===================================================================== */
(function () {
  var items   = qsa('.faq-item');
  var search  = qs('#faq-search');

  items.forEach(function (item) {
    var btn = item.querySelector('.faq-q');
    var ans = item.querySelector('.faq-a');
    if (!btn || !ans) return;

    on(btn, 'click', function () {
      var open = btn.getAttribute('aria-expanded') === 'true';
      // Close all
      items.forEach(function (other) {
        var ob = other.querySelector('.faq-q');
        var oa = other.querySelector('.faq-a');
        if (ob && oa) {
          ob.setAttribute('aria-expanded', 'false');
          oa.hidden = true;
          other.classList.remove('open');
        }
      });
      if (!open) {
        btn.setAttribute('aria-expanded', 'true');
        ans.hidden = false;
        item.classList.add('open');
      }
    });
  });

  on(search, 'input', function () {
    var q = search.value.toLowerCase().trim();
    items.forEach(function (item) {
      var text = item.textContent.toLowerCase();
      var show = !q || text.includes(q);
      item.style.display = show ? '' : 'none';
    });
  });
})();

/* =====================================================================
   CONTACT FORM — AJAX SUBMIT
===================================================================== */
(function () {
  var form    = qs('#contact-form');
  var msg     = qs('#form-msg');
  var submit  = qs('#form-submit');
  if (!form) return;

  on(form, 'submit', function (e) {
    e.preventDefault();

    // Basic validation
    var name  = form.querySelector('[name="name"]').value.trim();
    var email = form.querySelector('[name="email"]').value.trim();
    var consent = form.querySelector('[name="consent"]');

    if (!name || !email || !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
      showMsg('Please provide a valid name and email address.', 'error');
      return;
    }
    if (consent && !consent.checked) {
      showMsg('Please confirm your consent to proceed.', 'error');
      return;
    }

    // Loading state
    var btnText    = submit.querySelector('.btn-text');
    var btnLoading = submit.querySelector('.btn-loading');
    submit.disabled = true;
    if (btnText) btnText.hidden = true;
    if (btnLoading) btnLoading.hidden = false;

    // Check for WordPress AJAX (when embedded in WP)
    if (window.awaremed_ajax && window.awaremed_ajax.ajaxurl) {
      var formData = new FormData(form);
      formData.append('action', 'awaremed_contact');
      formData.append('nonce', window.awaremed_ajax.nonce);

      fetch(window.awaremed_ajax.ajaxurl, { method: 'POST', body: formData })
        .then(function (r) { return r.json(); })
        .then(function (data) {
          if (data.success) {
            showMsg(data.data.message, 'success');
            form.reset();
          } else {
            showMsg(data.data.message, 'error');
          }
        })
        .catch(function () {
          showMsg('There was a problem sending your request. Please call us at (423) 430-6170.', 'error');
        })
        .finally(resetBtn);
    } else {
      // Static HTML fallback — simulate success after brief delay
      setTimeout(function () {
        showMsg('Thank you! Your request has been received. Dr. Akoury\'s team will contact you within 1 business day. For immediate assistance, call (423) 430-6170.', 'success');
        form.reset();
        resetBtn();
      }, 1200);
    }

    function resetBtn() {
      submit.disabled = false;
      if (btnText) btnText.hidden = false;
      if (btnLoading) btnLoading.hidden = true;
    }

    function showMsg(text, type) {
      if (!msg) return;
      msg.textContent = text;
      msg.className = 'form-msg form-msg--' + type;
      msg.hidden = false;
      msg.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
    }
  });
})();

/* =====================================================================
   BUTTON RIPPLE EFFECT
===================================================================== */
(function () {
  on(document, 'click', function (e) {
    var btn = e.target.closest('.btn');
    if (!btn) return;
    var rect = btn.getBoundingClientRect();
    var x = e.clientX - rect.left;
    var y = e.clientY - rect.top;
    var ripple = document.createElement('span');
    ripple.className = 'ripple-effect';
    ripple.style.cssText = 'position:absolute;left:' + x + 'px;top:' + y + 'px;width:0;height:0;border-radius:50%;background:rgba(255,255,255,.35);transform:translate(-50%,-50%);animation:ripple-anim .6s ease-out forwards;pointer-events:none';
    btn.style.position = 'relative';
    btn.style.overflow = 'hidden';
    btn.appendChild(ripple);
    setTimeout(function () { ripple.remove(); }, 700);
  });

  // Inject keyframe once
  if (!qs('#ripple-style')) {
    var style = document.createElement('style');
    style.id = 'ripple-style';
    style.textContent = '@keyframes ripple-anim{to{width:200px;height:200px;opacity:0}}';
    document.head.appendChild(style);
  }
})();

/* =====================================================================
   LEGAL MODAL
===================================================================== */
(function () {
  var modal    = qs('#legal-modal');
  var closeBtn = qs('#legal-modal-close');
  var title    = qs('#legal-modal-title');
  var body     = qs('#legal-modal-body');
  if (!modal || typeof legalContent === 'undefined') return;

  on(document, 'click', function (e) {
    var link = e.target.closest('[data-legal]');
    if (!link) return;
    e.preventDefault();
    var key = link.dataset.legal;
    var content = legalContent[key];
    if (!content) return;
    title.textContent = content.title;
    body.innerHTML = content.body;
    modal.hidden = false;
    document.body.style.overflow = 'hidden';
    closeBtn.focus();
  });

  function closeLegal() {
    modal.hidden = true;
    document.body.style.overflow = '';
  }

  on(closeBtn, 'click', closeLegal);
  on(modal, 'click', function (e) { if (e.target === modal) closeLegal(); });
  on(document, 'keydown', function (e) { if (e.key === 'Escape' && modal && !modal.hidden) closeLegal(); });
})();

/* =====================================================================
   BACK TO TOP
===================================================================== */
(function () {
  var btn = qs('#back-to-top');
  on(btn, 'click', function () {
    window.scrollTo({ top: 0, behavior: 'smooth' });
  });
})();

/* =====================================================================
   LANGUAGE SWITCHER (static HTML stub)
===================================================================== */
function setLang(lang) {
  // In WordPress this redirects to the localised page; here it's a stub
  var map = { en: 'index.html', es: 'index-es.html', fr: 'index-fr.html', ar: 'index-ar.html' };
  if (map[lang] && map[lang] !== 'index.html') {
    window.location.href = map[lang];
  }
}
