/**
 * @file analytics.js
 * @description Microsoft Clarity analytics loader with consent checks.
 * Dynamically injects the Clarity tracking script only when the user has
 * accepted cookies. Exposes helpers for future event tracking.
 * Pure vanilla JS. No dependencies.
 */
'use strict';

/**
 * @namespace Analytics
 * @description IIFE module for analytics initialisation and event tracking.
 */
const Analytics = (() => {
  /** @type {boolean} Guard against duplicate initialisation */
  let clarityLoaded = false;

  /**
   * Check whether the user has accepted analytics cookies.
   * @returns {boolean}
   */
  const isAnalyticsEnabled = () =>
    localStorage.getItem('cookie_consent') === 'accepted';

  /**
   * Initialise Microsoft Clarity by dynamically injecting its script.
   * No-ops if consent has not been granted or if already loaded.
   * @param {string} [trackingId=''] - Clarity project ID.
   */
  const initClarity = (trackingId = '') => {
    if (clarityLoaded) return;
    if (!isAnalyticsEnabled()) return;
    if (!trackingId) return;

    const script = document.createElement('script');
    script.type = 'text/javascript';
    script.async = true;
    script.src = `https://www.clarity.ms/tag/${encodeURIComponent(trackingId)}`;
    document.head.appendChild(script);

    clarityLoaded = true;
  };

  /**
   * Placeholder for custom event tracking.
   * Can be extended to call Clarity's API or any future analytics provider.
   * @param {string} eventName - Name of the event.
   * @param {Record<string, unknown>} [payload={}] - Optional metadata.
   */
  const trackEvent = (eventName, payload = {}) => {
    if (!isAnalyticsEnabled() || !clarityLoaded) return;
    // Future implementation: forward to analytics provider
    // e.g. window.clarity?.('event', eventName, payload);
  };

  /**
   * Global helper so the main app can trigger Clarity loading after consent.
   * Exposed on `window` for cross-module access.
   */
  window.initClarity = initClarity;

  return { initClarity, isAnalyticsEnabled, trackEvent };
})();
