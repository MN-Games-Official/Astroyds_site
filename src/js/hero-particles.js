/**
 * @file hero-particles.js
 * @description Canvas-based particle animation for the hero section (Concept A).
 * Renders floating particles connected by proximity lines, with mouse interaction.
 * Pure vanilla JS. No dependencies.
 */
'use strict';

/**
 * @namespace ParticleHero
 * @description IIFE module for the hero particle system.
 */
const ParticleHero = (() => {
  /* ───────────────────── Constants ───────────────────── */

  /** @type {string} Accent colour used for particles and lines */
  const ACCENT = '#00d4ff';

  /** @type {string} RGBA base derived from ACCENT (without alpha) */
  const ACCENT_RGB = '0, 212, 255';

  /** @type {number} Maximum connection distance (squared for perf) */
  const CONNECT_DIST_SQ = 150 * 150;

  /** @type {number} Mouse influence radius (squared) */
  const MOUSE_RADIUS_SQ = 120 * 120;

  /** @type {number} Strength of mouse attraction (positive = attract) */
  const MOUSE_STRENGTH = 0.02;

  /* ───────────────────── State ───────────────────── */

  /** @type {HTMLCanvasElement|null} */
  let canvas = null;

  /** @type {CanvasRenderingContext2D|null} */
  let ctx = null;

  /** @type {number|null} requestAnimationFrame handle */
  let rafId = null;

  /** @type {{x: number, y: number}} Current mouse position relative to canvas */
  const mouse = { x: -9999, y: -9999 };

  /** @type {Particle[]} Active particle pool */
  let particles = [];

  /** @type {boolean} Whether the system has been initialised */
  let initialised = false;

  /** @type {boolean} Whether the user prefers reduced motion */
  const prefersReducedMotion =
    window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  /* ───────────────────── Particle Class ───────────────────── */

  /**
   * Represents a single particle.
   * @class
   * @param {number} w - Canvas width.
   * @param {number} h - Canvas height.
   */
  function Particle(w, h) {
    this.x = Math.random() * w;
    this.y = Math.random() * h;
    this.vx = (Math.random() - 0.5) * 0.4;
    this.vy = (Math.random() - 0.5) * 0.4;
    this.radius = Math.random() * 2 + 1;
    this.opacity = Math.random() * 0.5 + 0.3;
  }

  /**
   * Update particle position, applying mouse force and boundary wrapping.
   * @param {number} w - Canvas width.
   * @param {number} h - Canvas height.
   */
  Particle.prototype.update = function (w, h) {
    /* Mouse interaction */
    const dx = mouse.x - this.x;
    const dy = mouse.y - this.y;
    const distSq = dx * dx + dy * dy;
    if (distSq < MOUSE_RADIUS_SQ && distSq > 0) {
      const factor = MOUSE_STRENGTH * (1 - distSq / MOUSE_RADIUS_SQ);
      this.vx += dx * factor;
      this.vy += dy * factor;
    }

    /* Damping */
    this.vx *= 0.99;
    this.vy *= 0.99;

    this.x += this.vx;
    this.y += this.vy;

    /* Wrap around edges */
    if (this.x < 0) this.x = w;
    if (this.x > w) this.x = 0;
    if (this.y < 0) this.y = h;
    if (this.y > h) this.y = 0;
  };

  /**
   * Draw the particle onto the canvas context.
   * @param {CanvasRenderingContext2D} context
   */
  Particle.prototype.draw = function (context) {
    context.beginPath();
    context.arc(this.x, this.y, this.radius, 0, Math.PI * 2);
    context.fillStyle = `rgba(${ACCENT_RGB}, ${this.opacity})`;
    context.fill();
  };

  /* ───────────────────── Helpers ───────────────────── */

  /**
   * Determine optimal particle count based on viewport width.
   * @returns {number}
   */
  const getParticleCount = () => {
    const w = window.innerWidth;
    if (w < 480) return 25;
    if (w < 768) return 40;
    if (w < 1200) return 70;
    return 100;
  };

  /**
   * Populate the particles array for the current canvas size.
   */
  const createParticles = () => {
    const count = getParticleCount();
    particles = [];
    for (let i = 0; i < count; i++) {
      particles.push(new Particle(canvas.width, canvas.height));
    }
  };

  /**
   * Draw connection lines between particles that are close enough.
   */
  const drawConnections = () => {
    const len = particles.length;
    for (let i = 0; i < len; i++) {
      for (let j = i + 1; j < len; j++) {
        const dx = particles[i].x - particles[j].x;
        const dy = particles[i].y - particles[j].y;
        const distSq = dx * dx + dy * dy;

        if (distSq < CONNECT_DIST_SQ) {
          const alpha = 1 - distSq / CONNECT_DIST_SQ;
          ctx.strokeStyle = `rgba(${ACCENT_RGB}, ${alpha * 0.25})`;
          ctx.lineWidth = 0.6;
          ctx.beginPath();
          ctx.moveTo(particles[i].x, particles[i].y);
          ctx.lineTo(particles[j].x, particles[j].y);
          ctx.stroke();
        }
      }
    }
  };

  /* ───────────────────── Render Loop ───────────────────── */

  /** Main animation frame callback. */
  const animate = () => {
    ctx.clearRect(0, 0, canvas.width, canvas.height);

    for (let i = 0; i < particles.length; i++) {
      particles[i].update(canvas.width, canvas.height);
      particles[i].draw(ctx);
    }

    drawConnections();
    rafId = requestAnimationFrame(animate);
  };

  /**
   * Render a static frame (used when reduced motion is preferred).
   */
  const renderStatic = () => {
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    for (let i = 0; i < particles.length; i++) {
      particles[i].draw(ctx);
    }
    drawConnections();
  };

  /* ───────────────────── Resize ───────────────────── */

  /** Handle window resize — update canvas size and recreate particles. */
  const onResize = () => {
    if (!canvas) return;
    canvas.width = canvas.parentElement?.offsetWidth || window.innerWidth;
    canvas.height = canvas.parentElement?.offsetHeight || window.innerHeight;
    createParticles();
    if (prefersReducedMotion) renderStatic();
  };

  /** Debounced version of onResize. */
  let resizeTimer = null;
  const debouncedResize = () => {
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(onResize, 150);
  };

  /* ───────────────────── Mouse Tracking ───────────────────── */

  /**
   * Update cached mouse position relative to canvas.
   * @param {MouseEvent} e
   */
  const onMouseMove = (e) => {
    const rect = canvas.getBoundingClientRect();
    mouse.x = e.clientX - rect.left;
    mouse.y = e.clientY - rect.top;
  };

  /** Reset mouse position when cursor leaves the canvas. */
  const onMouseLeave = () => {
    mouse.x = -9999;
    mouse.y = -9999;
  };

  /* ───────────────────── Public API ───────────────────── */

  /**
   * Initialise the particle hero animation on a given canvas element.
   * @param {string} canvasId - The `id` attribute of the target canvas.
   * @returns {boolean} Whether initialisation succeeded.
   */
  const init = (canvasId) => {
    if (initialised) return false;

    canvas = document.getElementById(canvasId);
    if (!canvas || !canvas.getContext) {
      if (canvas) canvas.style.display = 'none';
      return false;
    }

    ctx = canvas.getContext('2d');
    if (!ctx) {
      canvas.style.display = 'none';
      return false;
    }

    /* Size the canvas */
    canvas.width = canvas.parentElement?.offsetWidth || window.innerWidth;
    canvas.height = canvas.parentElement?.offsetHeight || window.innerHeight;

    createParticles();

    if (prefersReducedMotion) {
      renderStatic();
    } else {
      rafId = requestAnimationFrame(animate);
      canvas.addEventListener('mousemove', onMouseMove);
      canvas.addEventListener('mouseleave', onMouseLeave);
    }

    window.addEventListener('resize', debouncedResize);
    initialised = true;
    return true;
  };

  /**
   * Destroy the particle system and free resources.
   */
  const destroy = () => {
    if (!initialised) return;

    if (rafId !== null) {
      cancelAnimationFrame(rafId);
      rafId = null;
    }

    if (canvas) {
      canvas.removeEventListener('mousemove', onMouseMove);
      canvas.removeEventListener('mouseleave', onMouseLeave);
    }

    window.removeEventListener('resize', debouncedResize);
    clearTimeout(resizeTimer);

    if (ctx && canvas) {
      ctx.clearRect(0, 0, canvas.width, canvas.height);
    }

    particles = [];
    canvas = null;
    ctx = null;
    initialised = false;
  };

  return { init, destroy };
})();
