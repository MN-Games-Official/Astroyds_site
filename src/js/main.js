/**
 * @file main.js
 * @description Main application script for Astroyds site.
 * Handles UI interactions, animations, accessibility, and form logic.
 * Pure vanilla JS — no dependencies.
 */
'use strict';

/** @namespace App */
const App = (() => {
  /* ───────────────────── State ───────────────────── */

  /** @type {boolean} Whether reduced-motion is preferred */
  const prefersReducedMotion =
    window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  /** @type {boolean} Whether OS dark mode is active */
  let isDarkMode =
    window.matchMedia('(prefers-color-scheme: dark)').matches;

  /** @type {boolean} Tracks header shadow state to avoid redundant DOM writes */
  let headerScrolled = false;

  /* ───────────────────── Utilities ───────────────────── */

  /**
   * Shorthand querySelector.
   * @param {string} sel - CSS selector.
   * @param {Element} [root=document] - Root element.
   * @returns {Element|null}
   */
  const qs = (sel, root = document) => root.querySelector(sel);

  /**
   * Shorthand querySelectorAll.
   * @param {string} sel - CSS selector.
   * @param {Element} [root=document] - Root element.
   * @returns {NodeListOf<Element>}
   */
  const qsa = (sel, root = document) => root.querySelectorAll(sel);

  /**
   * Safely add an event listener, returning a cleanup function.
   * @param {EventTarget} target
   * @param {string} event
   * @param {EventListenerOrEventListenerObject} handler
   * @param {AddEventListenerOptions} [opts]
   * @returns {() => void} Cleanup function.
   */
  const on = (target, event, handler, opts) => {
    target.addEventListener(event, handler, opts);
    return () => target.removeEventListener(event, handler, opts);
  };

  /* ───────────────────── Toast Notification System ───────────────────── */

  /**
   * Display a toast notification.
   * @param {string} message - Text to show.
   * @param {'success'|'error'|'info'} [type='info'] - Visual variant.
   * @param {number} [duration=4000] - Time in ms before auto-dismiss.
   */
  const showToast = (message, type = 'info', duration = 4000) => {
    let container = qs('#toast-container');
    if (!container) {
      container = document.createElement('div');
      container.id = 'toast-container';
      container.setAttribute('aria-live', 'polite');
      container.style.cssText =
        'position:fixed;bottom:1.5rem;right:1.5rem;z-index:9999;display:flex;flex-direction:column;gap:.5rem;';
      document.body.appendChild(container);
    }

    const toast = document.createElement('div');
    toast.className = `toast toast--${type}`;
    toast.setAttribute('role', 'status');
    toast.textContent = message;
    toast.style.cssText =
      'padding:.75rem 1.25rem;border-radius:.5rem;color:#fff;font-size:.875rem;opacity:0;transform:translateY(.5rem);transition:opacity .3s,transform .3s;';

    const bgMap = { success: '#22c55e', error: '#ef4444', info: '#3b82f6' };
    toast.style.backgroundColor = bgMap[type] || bgMap.info;

    container.appendChild(toast);
    requestAnimationFrame(() => {
      toast.style.opacity = '1';
      toast.style.transform = 'translateY(0)';
    });

    setTimeout(() => {
      toast.style.opacity = '0';
      toast.style.transform = 'translateY(.5rem)';
      toast.addEventListener('transitionend', () => toast.remove(), { once: true });
    }, duration);
  };

  /* ───────────────────── Mobile Menu Toggle ───────────────────── */

  /** Initialise the mobile hamburger menu. */
  const initMobileMenu = () => {
    const toggle = qs('[data-menu-toggle]');
    const menu = qs('[data-menu]');
    if (!toggle || !menu) return;

    on(toggle, 'click', () => {
      const expanded = toggle.getAttribute('aria-expanded') === 'true';
      toggle.setAttribute('aria-expanded', String(!expanded));
      menu.classList.toggle('is-open');
      menu.setAttribute('aria-hidden', String(expanded));
    });
  };

  /* ───────────────────── Scroll-Based Animations ───────────────────── */

  /**
   * Observe elements with `[data-animate]` and add `is-visible` class
   * when they enter the viewport.
   */
  const initScrollAnimations = () => {
    if (prefersReducedMotion) {
      qsa('[data-animate]').forEach((el) => el.classList.add('is-visible'));
      return;
    }

    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            entry.target.classList.add('is-visible');
            observer.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.15 }
    );

    qsa('[data-animate]').forEach((el) => observer.observe(el));
  };

  /* ───────────────────── Smooth Scroll for Anchors ───────────────────── */

  /** Enable smooth-scroll behaviour for in-page anchor links. */
  const initSmoothScroll = () => {
    on(document, 'click', (e) => {
      const link = e.target.closest('a[href^="#"]');
      if (!link) return;
      const target = qs(link.getAttribute('href'));
      if (!target) return;
      e.preventDefault();
      target.scrollIntoView({ behavior: prefersReducedMotion ? 'auto' : 'smooth' });
    });
  };

  /* ───────────────────── Header Scroll Behaviour ───────────────────── */

  /** Add shadow & background to header when the page is scrolled. */
  const initHeaderScroll = () => {
    const header = qs('header');
    if (!header) return;

    const update = () => {
      const scrolled = window.scrollY > 50;
      if (scrolled === headerScrolled) return;
      headerScrolled = scrolled;
      header.classList.toggle('header--scrolled', scrolled);
    };

    on(window, 'scroll', update, { passive: true });
    update();
  };

  /* ───────────────────── Cookie Consent ───────────────────── */

  /**
   * Manage the cookie-consent banner.
   * Stores decision in localStorage and conditionally loads analytics.
   */
  const initCookieConsent = () => {
    const consent = localStorage.getItem('cookie_consent');
    if (consent !== null) {
      if (consent === 'accepted') loadAnalytics();
      return;
    }

    const banner = qs('[data-cookie-banner]');
    if (!banner) return;
    banner.removeAttribute('hidden');

    const accept = qs('[data-cookie-accept]', banner);
    const decline = qs('[data-cookie-decline]', banner);

    if (accept) {
      on(accept, 'click', () => {
        localStorage.setItem('cookie_consent', 'accepted');
        banner.setAttribute('hidden', '');
        loadAnalytics();
      });
    }

    if (decline) {
      on(decline, 'click', () => {
        localStorage.setItem('cookie_consent', 'declined');
        banner.setAttribute('hidden', '');
      });
    }
  };

  /** Conditionally load the analytics module. */
  const loadAnalytics = () => {
    if (typeof window.initClarity === 'function') {
      window.initClarity();
    }
  };

  /* ───────────────────── Chat Widget ───────────────────── */

  /** Toggle a mock chat panel open/closed. */
  const initChatWidget = () => {
    const btn = qs('[data-chat-toggle]');
    const panel = qs('[data-chat-panel]');
    if (!btn || !panel) return;

    on(btn, 'click', () => {
      const open = panel.classList.toggle('is-open');
      btn.setAttribute('aria-expanded', String(open));
      panel.setAttribute('aria-hidden', String(!open));
    });
  };

  /* ───────────────────── Language Selector ───────────────────── */

  /** Simple dropdown toggle for the language selector. */
  const initLanguageSelector = () => {
    const trigger = qs('[data-lang-toggle]');
    const dropdown = qs('[data-lang-dropdown]');
    if (!trigger || !dropdown) return;

    on(trigger, 'click', (e) => {
      e.stopPropagation();
      const open = dropdown.classList.toggle('is-open');
      trigger.setAttribute('aria-expanded', String(open));
    });

    on(document, 'click', () => {
      dropdown.classList.remove('is-open');
      trigger.setAttribute('aria-expanded', 'false');
    });
  };

  /* ───────────────────── Contact Form ───────────────────── */

  /**
   * Validate and submit the contact form via AJAX.
   * Reads a CSRF token from a meta tag or hidden input.
   */
  const initContactForm = () => {
    const form = qs('[data-contact-form]');
    if (!form) return;

    on(form, 'submit', async (e) => {
      e.preventDefault();

      if (!validateForm(form)) return;

      const csrfToken =
        qs('meta[name="csrf-token"]')?.getAttribute('content') ||
        qs('input[name="_token"]', form)?.value ||
        '';

      const data = new FormData(form);

      try {
        const res = await fetch(form.action || '/api/contact', {
          method: 'POST',
          headers: { 'X-CSRF-Token': csrfToken },
          body: data,
        });

        if (res.ok) {
          showToast('Message sent successfully!', 'success');
          form.reset();
        } else {
          showToast('Something went wrong. Please try again.', 'error');
        }
      } catch {
        showToast('Network error. Please check your connection.', 'error');
      }
    });
  };

  /**
   * Basic client-side validation for a form.
   * @param {HTMLFormElement} form
   * @returns {boolean} Whether the form is valid.
   */
  const validateForm = (form) => {
    let valid = true;

    qsa('[required]', form).forEach((field) => {
      const wrapper = field.closest('.form-group') || field.parentElement;
      const errorEl = qs('.field-error', wrapper);
      if (!field.value.trim()) {
        valid = false;
        field.classList.add('is-invalid');
        if (errorEl) errorEl.textContent = 'This field is required.';
      } else {
        field.classList.remove('is-invalid');
        if (errorEl) errorEl.textContent = '';
      }
    });

    const email = qs('input[type="email"]', form);
    if (email && email.value && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email.value)) {
      valid = false;
      email.classList.add('is-invalid');
      const errorEl = qs('.field-error', email.closest('.form-group') || email.parentElement);
      if (errorEl) errorEl.textContent = 'Please enter a valid email.';
    }

    return valid;
  };

  /* ───────────────────── Newsletter Subscription ───────────────────── */

  /** Handle newsletter subscription form if present. */
  const initNewsletter = () => {
    const form = qs('[data-newsletter-form]');
    if (!form) return;

    on(form, 'submit', async (e) => {
      e.preventDefault();
      const emailInput = qs('input[type="email"]', form);
      if (!emailInput || !emailInput.value.trim()) {
        showToast('Please enter your email address.', 'error');
        return;
      }

      try {
        const res = await fetch(form.action || '/api/newsletter', {
          method: 'POST',
          headers: { 'Content-Type': 'application/json' },
          body: JSON.stringify({ email: emailInput.value.trim() }),
        });

        if (res.ok) {
          showToast('Subscribed! Check your inbox.', 'success');
          form.reset();
        } else {
          showToast('Subscription failed. Try again later.', 'error');
        }
      } catch {
        showToast('Network error. Please try again.', 'error');
      }
    });
  };

  /* ───────────────────── Back-to-Top Button ───────────────────── */

  /** Show/hide a back-to-top button and scroll to top on click. */
  const initBackToTop = () => {
    const btn = qs('[data-back-to-top]');
    if (!btn) return;

    const toggle = () => {
      btn.classList.toggle('is-visible', window.scrollY > 400);
    };

    on(window, 'scroll', toggle, { passive: true });
    on(btn, 'click', () => {
      window.scrollTo({ top: 0, behavior: prefersReducedMotion ? 'auto' : 'smooth' });
    });
    toggle();
  };

  /* ───────────────────── Deferred Animations ───────────────────── */

  /**
   * Use requestIdleCallback (with fallback) to schedule non-critical
   * decorative animations that shouldn't block the main thread.
   * @param {() => void} cb
   */
  const deferNonCritical = (cb) => {
    if (prefersReducedMotion) return;
    if ('requestIdleCallback' in window) {
      window.requestIdleCallback(cb, { timeout: 2000 });
    } else {
      setTimeout(cb, 200);
    }
  };

  /* ───────────────────── Dark Mode Detection ───────────────────── */

  /** Listen to OS-level dark mode changes and update a data attribute. */
  const initDarkModeDetection = () => {
    const mq = window.matchMedia('(prefers-color-scheme: dark)');
    const apply = (dark) => {
      isDarkMode = dark;
      document.documentElement.setAttribute('data-theme', dark ? 'dark' : 'light');
    };
    apply(mq.matches);
    on(mq, 'change', (e) => apply(e.matches));
  };

  /* ───────────────────── Keyboard Accessibility ───────────────────── */

  /** Close open modals / dropdowns on Escape key. */
  const initKeyboardHelpers = () => {
    on(document, 'keydown', (e) => {
      if (e.key !== 'Escape') return;

      // Close open dropdowns
      qsa('.is-open').forEach((el) => {
        el.classList.remove('is-open');
        const toggle = qs(`[aria-controls="${el.id}"]`);
        if (toggle) toggle.setAttribute('aria-expanded', 'false');
      });

      // Close chat panel
      const chatPanel = qs('[data-chat-panel].is-open');
      if (chatPanel) {
        chatPanel.classList.remove('is-open');
        const chatBtn = qs('[data-chat-toggle]');
        if (chatBtn) chatBtn.setAttribute('aria-expanded', 'false');
      }
    });
  };

  /* ───────────────────── Page Transition Animations ───────────────────── */

  /** Fade the page in on load and out on navigation. */
  const initPageTransitions = () => {
    if (prefersReducedMotion) return;

    document.body.classList.add('page-enter');
    requestAnimationFrame(() => document.body.classList.add('page-enter-active'));

    on(document, 'click', (e) => {
      const link = e.target.closest('a[href]');
      if (
        !link ||
        link.getAttribute('href').startsWith('#') ||
        link.target === '_blank' ||
        link.origin !== window.location.origin
      ) {
        return;
      }
      e.preventDefault();
      document.body.classList.add('page-exit');
      setTimeout(() => {
        window.location.href = link.href;
      }, 300);
    });
  };

  /* ───────────────────── Lazy-Load Images ───────────────────── */

  /** Lazy-load images bearing `data-src` via IntersectionObserver. */
  const initLazyImages = () => {
    const images = qsa('img[data-src]');
    if (!images.length) return;

    if (!('IntersectionObserver' in window)) {
      images.forEach((img) => { img.src = img.dataset.src; });
      return;
    }

    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (!entry.isIntersecting) return;
          const img = entry.target;
          img.src = img.dataset.src;
          if (img.dataset.srcset) img.srcset = img.dataset.srcset;
          img.removeAttribute('data-src');
          observer.unobserve(img);
        });
      },
      { rootMargin: '200px' }
    );

    images.forEach((img) => observer.observe(img));
  };

  /* ───────────────────── Active Navigation Highlighting ───────────────────── */

  /** Highlight the nav link whose section is currently in view. */
  const initActiveNav = () => {
    const sections = qsa('section[id]');
    const navLinks = qsa('nav a[href^="#"]');
    if (!sections.length || !navLinks.length) return;

    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (!entry.isIntersecting) return;
          const id = entry.target.id;
          navLinks.forEach((link) => {
            link.classList.toggle(
              'is-active',
              link.getAttribute('href') === `#${id}`
            );
          });
        });
      },
      { rootMargin: '-40% 0px -55% 0px' }
    );

    sections.forEach((sec) => observer.observe(sec));
  };

  /* ───────────────────── Bootstrap ───────────────────── */

  /**
   * Main initialisation — called on DOMContentLoaded.
   * Registers all feature modules.
   */
  const init = () => {
    initDarkModeDetection();
    initMobileMenu();
    initHeaderScroll();
    initSmoothScroll();
    initScrollAnimations();
    initCookieConsent();
    initChatWidget();
    initLanguageSelector();
    initContactForm();
    initNewsletter();
    initBackToTop();
    initKeyboardHelpers();
    initPageTransitions();
    initLazyImages();
    initActiveNav();

    deferNonCritical(() => {
      qsa('[data-defer-animate]').forEach((el) => el.classList.add('is-ready'));
    });
  };

  /* ───────────────────── Entry Point ───────────────────── */

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init);
  } else {
    init();
  }

  /* Expose minimal public API for external callers if needed */
  return { showToast };
})();
