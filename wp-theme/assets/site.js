// AWAREmed — Premium Site Interactions v2.0

(function () {
  'use strict';

  /* ----------------------------------------------------------------
     HEADER: scroll state + mobile nav toggle
  ---------------------------------------------------------------- */
  var header = document.querySelector('.site-header');
  var navToggle = document.querySelector('.nav-toggle');
  var primaryNav = document.querySelector('.primary-nav');

  if (header) {
    var onHeaderScroll = function () {
      header.classList.toggle('scrolled', window.scrollY > 40);
    };
    window.addEventListener('scroll', onHeaderScroll, { passive: true });
    onHeaderScroll();
  }

  if (navToggle && primaryNav) {
    navToggle.addEventListener('click', function () {
      var open = primaryNav.classList.toggle('open');
      navToggle.setAttribute('aria-expanded', open);
      navToggle.setAttribute('aria-label', open ? 'Close menu' : 'Open menu');
      document.body.style.overflow = open ? 'hidden' : '';
    });

    // Close on nav link click (mobile)
    primaryNav.addEventListener('click', function (e) {
      var link = e.target.closest('a');
      if (link && !link.closest('.mega-menu') && !link.closest('.dropdown-menu')) {
        primaryNav.classList.remove('open');
        navToggle.setAttribute('aria-expanded', false);
        navToggle.setAttribute('aria-label', 'Open menu');
        document.body.style.overflow = '';
      }
    });

    // Close on outside click
    document.addEventListener('click', function (e) {
      if (
        primaryNav.classList.contains('open') &&
        !primaryNav.contains(e.target) &&
        e.target !== navToggle &&
        !navToggle.contains(e.target)
      ) {
        primaryNav.classList.remove('open');
        navToggle.setAttribute('aria-expanded', false);
        document.body.style.overflow = '';
      }
    });
  }

  /* ----------------------------------------------------------------
     ACTIVE NAV LINK on scroll
  ---------------------------------------------------------------- */
  var sections = document.querySelectorAll('section[id]');
  var navLinks = document.querySelectorAll('.primary-nav a[href*="#"]');

  function updateActiveLink() {
    var scrollY = window.scrollY + 120;
    var current = '';
    sections.forEach(function (sec) {
      if (sec.offsetTop <= scrollY) current = sec.id;
    });
    navLinks.forEach(function (link) {
      link.classList.remove('active');
      var href = link.getAttribute('href') || '';
      if (href.endsWith('#' + current)) link.classList.add('active');
    });
  }
  if (sections.length && navLinks.length) {
    window.addEventListener('scroll', updateActiveLink, { passive: true });
    updateActiveLink();
  }

  /* ----------------------------------------------------------------
     SCROLL REVEAL (Intersection Observer)
  ---------------------------------------------------------------- */
  var revealEls = document.querySelectorAll('.reveal, .reveal-left, .reveal-right, .stagger');
  if (revealEls.length) {
    var revealObserver = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
          revealObserver.unobserve(entry.target);
        }
      });
    }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });
    revealEls.forEach(function (el) { revealObserver.observe(el); });
  }

  /* ----------------------------------------------------------------
     ANIMATED COUNTERS
  ---------------------------------------------------------------- */
  function animateCounter(el) {
    var target = parseFloat(el.dataset.target || el.textContent.replace(/[^0-9.]/g, ''));
    var suffix = el.dataset.suffix || el.textContent.replace(/[0-9.]/g, '');
    var decimals = (target % 1 !== 0) ? 1 : 0;
    var start = 0;
    var duration = 2000;
    var startTime = null;

    function step(timestamp) {
      if (!startTime) startTime = timestamp;
      var progress = Math.min((timestamp - startTime) / duration, 1);
      var eased = 1 - Math.pow(1 - progress, 3);
      var current = start + (target - start) * eased;
      el.textContent = current.toFixed(decimals) + suffix;
      if (progress < 1) requestAnimationFrame(step);
    }
    requestAnimationFrame(step);
  }

  var counterEls = document.querySelectorAll('.stat-num[data-target], .hero-stat-num[data-target]');
  if (counterEls.length) {
    var counterObserver = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          animateCounter(entry.target);
          counterObserver.unobserve(entry.target);
        }
      });
    }, { threshold: 0.5 });
    counterEls.forEach(function (el) { counterObserver.observe(el); });
  }

  /* ----------------------------------------------------------------
     PROGRESS BARS
  ---------------------------------------------------------------- */
  var progressBars = document.querySelectorAll('.progress-bar[data-width]');
  if (progressBars.length) {
    var progressObserver = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.style.width = entry.target.dataset.width + '%';
          progressObserver.unobserve(entry.target);
        }
      });
    }, { threshold: 0.3 });
    progressBars.forEach(function (bar) { progressObserver.observe(bar); });
  }

  /* ----------------------------------------------------------------
     TESTIMONIAL SLIDER
  ---------------------------------------------------------------- */
  var sliderTrack = document.querySelector('.testimonial-track');
  var sliderDots = document.querySelectorAll('.slider-dot');
  var prevBtn = document.querySelector('.slider-btn.prev');
  var nextBtn = document.querySelector('.slider-btn.next');

  if (sliderTrack) {
    var currentSlide = 0;
    var cards = sliderTrack.querySelectorAll('.testimonial-card');
    var cardCount = cards.length;
    var autoSlideInterval;
    var cardWidth = 448; // card width + gap

    function goToSlide(index) {
      currentSlide = ((index % cardCount) + cardCount) % cardCount;
      sliderTrack.style.transform = 'translateX(-' + (currentSlide * cardWidth) + 'px)';
      sliderDots.forEach(function (dot, i) {
        dot.classList.toggle('active', i === currentSlide);
      });
    }

    function startAuto() {
      clearInterval(autoSlideInterval);
      autoSlideInterval = setInterval(function () { goToSlide(currentSlide + 1); }, 5000);
    }

    if (nextBtn) nextBtn.addEventListener('click', function () { goToSlide(currentSlide + 1); startAuto(); });
    if (prevBtn) prevBtn.addEventListener('click', function () { goToSlide(currentSlide - 1); startAuto(); });
    sliderDots.forEach(function (dot, i) {
      dot.addEventListener('click', function () { goToSlide(i); startAuto(); });
    });

    // Touch / swipe support
    var touchStartX = 0;
    sliderTrack.addEventListener('touchstart', function (e) { touchStartX = e.touches[0].clientX; }, { passive: true });
    sliderTrack.addEventListener('touchend', function (e) {
      var delta = touchStartX - e.changedTouches[0].clientX;
      if (Math.abs(delta) > 50) { goToSlide(delta > 0 ? currentSlide + 1 : currentSlide - 1); startAuto(); }
    });

    startAuto();
  }

  /* ----------------------------------------------------------------
     FAQ ACCORDION
  ---------------------------------------------------------------- */
  var faqItems = document.querySelectorAll('.faq-item');
  faqItems.forEach(function (item) {
    var question = item.querySelector('.faq-question');
    var answer = item.querySelector('.faq-answer');
    if (!question || !answer) return;
    question.addEventListener('click', function () {
      var isOpen = question.classList.contains('open');
      // Close all
      faqItems.forEach(function (other) {
        other.querySelector('.faq-question').classList.remove('open');
        var otherAns = other.querySelector('.faq-answer');
        if (otherAns) otherAns.classList.remove('open');
      });
      if (!isOpen) {
        question.classList.add('open');
        answer.classList.add('open');
      }
    });
  });

  /* ----------------------------------------------------------------
     FAQ SEARCH
  ---------------------------------------------------------------- */
  var faqSearch = document.querySelector('.faq-search input');
  if (faqSearch) {
    faqSearch.addEventListener('input', function () {
      var q = faqSearch.value.toLowerCase();
      faqItems.forEach(function (item) {
        var text = item.textContent.toLowerCase();
        item.style.display = text.includes(q) ? '' : 'none';
      });
    });
  }

  /* ----------------------------------------------------------------
     LEGAL TABS
  ---------------------------------------------------------------- */
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

  /* ----------------------------------------------------------------
     GALLERY LIGHTBOX + FILTER
  ---------------------------------------------------------------- */
  var lightbox = document.getElementById('gallery-lightbox');
  var lightboxImg = lightbox && lightbox.querySelector('img');
  var lightboxClose = lightbox && lightbox.querySelector('.lightbox-close');

  if (lightbox) {
    document.querySelectorAll('.gallery-item[data-src]').forEach(function (item) {
      item.addEventListener('click', function () {
        if (lightboxImg) lightboxImg.src = item.dataset.src;
        lightbox.classList.add('open');
        document.body.style.overflow = 'hidden';
      });
    });
    if (lightboxClose) {
      lightboxClose.addEventListener('click', function () { closeLightbox(); });
    }
    lightbox.addEventListener('click', function (e) {
      if (e.target === lightbox) closeLightbox();
    });
    document.addEventListener('keydown', function (e) {
      if (e.key === 'Escape') closeLightbox();
    });
    function closeLightbox() {
      lightbox.classList.remove('open');
      document.body.style.overflow = '';
    }
  }

  var galleryFilters = document.querySelectorAll('.gallery-filter');
  if (galleryFilters.length) {
    galleryFilters.forEach(function (filter) {
      filter.addEventListener('click', function () {
        galleryFilters.forEach(function (f) { f.classList.remove('active'); });
        filter.classList.add('active');
        var category = filter.dataset.filter;
        document.querySelectorAll('.gallery-item').forEach(function (item) {
          var show = category === 'all' || item.dataset.category === category;
          item.style.display = show ? '' : 'none';
        });
      });
    });
  }

  /* ----------------------------------------------------------------
     HERO PLAY BUTTON (video modal or inline)
  ---------------------------------------------------------------- */
  var playBtn = document.querySelector('.hero-play-btn');
  if (playBtn) {
    playBtn.addEventListener('click', function () {
      var videoWrap = document.querySelector('.hero-video-inner');
      var placeholder = videoWrap && videoWrap.querySelector('.hero-video-placeholder');
      var videoUrl = playBtn.dataset.video;
      if (videoUrl && placeholder) {
        var iframe = document.createElement('iframe');
        iframe.src = videoUrl + '?autoplay=1';
        iframe.allow = 'autoplay; fullscreen';
        iframe.style.cssText = 'width:100%;height:100%;border:none;position:absolute;inset:0;';
        placeholder.replaceWith(iframe);
      }
    });
  }

  /* ----------------------------------------------------------------
     AJAX CONTACT FORM
  ---------------------------------------------------------------- */
  var form = document.getElementById('awaremed-contact-form');
  var msgBox = document.getElementById('awaremed-form-msg');

  if (form && typeof awaremed_ajax !== 'undefined') {
    form.addEventListener('submit', function (e) {
      e.preventDefault();
      var submitBtn = form.querySelector('[type="submit"]');
      submitBtn.disabled = true;
      submitBtn.textContent = 'Sending…';
      if (msgBox) msgBox.style.display = 'none';

      var data = new FormData(form);
      data.set('action', 'awaremed_contact');
      data.set('nonce', awaremed_ajax.nonce);

      fetch(awaremed_ajax.ajaxurl, { method: 'POST', body: data })
        .then(function (r) { return r.json(); })
        .then(function (res) {
          if (!msgBox) return;
          msgBox.style.display = 'block';
          if (res.success) {
            msgBox.style.background = '#edf7e6';
            msgBox.style.color = '#2a6010';
            msgBox.textContent = res.data.message;
            msgBox.classList.add('form-msg');
            form.reset();
          } else {
            msgBox.style.background = '#fdecea';
            msgBox.style.color = '#8b1a1a';
            msgBox.textContent = res.data.message;
          }
        })
        .catch(function () {
          if (!msgBox) return;
          msgBox.style.display = 'block';
          msgBox.style.background = '#fdecea';
          msgBox.style.color = '#8b1a1a';
          msgBox.textContent = 'An error occurred. Please call us at (423) 430-6170.';
        })
        .finally(function () {
          submitBtn.disabled = false;
          submitBtn.textContent = 'Book Consultation';
        });
    });
  }

  /* ----------------------------------------------------------------
     RIPPLE EFFECT on .btn-primary
  ---------------------------------------------------------------- */
  document.querySelectorAll('.btn-primary').forEach(function (btn) {
    btn.addEventListener('click', function (e) {
      var rect = btn.getBoundingClientRect();
      var ripple = document.createElement('span');
      ripple.style.cssText = [
        'position:absolute',
        'border-radius:50%',
        'background:rgba(255,255,255,0.35)',
        'pointer-events:none',
        'transform:scale(0)',
        'animation:ripple-anim 0.6s ease-out forwards',
        'width:200px',
        'height:200px',
        'left:' + (e.clientX - rect.left - 100) + 'px',
        'top:' + (e.clientY - rect.top - 100) + 'px',
      ].join(';');
      btn.style.position = 'relative';
      btn.style.overflow = 'hidden';
      btn.appendChild(ripple);
      setTimeout(function () { ripple.remove(); }, 700);
    });
  });

  // Inject ripple keyframe
  var rippleStyle = document.createElement('style');
  rippleStyle.textContent = '@keyframes ripple-anim{to{transform:scale(2.5);opacity:0}}';
  document.head.appendChild(rippleStyle);

})();
