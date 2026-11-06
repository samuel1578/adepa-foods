/**
 * ADEPA Food Hut — Motion Core Architecture.
 *
 * Central configuration, reduced-motion detection, utility functions,
 * and module registry for ADEPA Food Hut motion system.
 *
 * @package ADEPA_Food_Hut
 */

(function () {
    'use strict';

    window.ADEPA = window.ADEPA || {};
    var Motion = window.ADEPA.Motion || {};

    /**
     * Central motion configuration.
     */
    Motion.config = {
        heroInterval: 1500,     // 1.5 seconds rotation requirement
        heroTransition: 600,   // 600ms crossfade requirement
        carouselInterval: 3500, // Featured dishes carousel
        staggerDelay: 120,     // Staggered brand-story delay
        tickerInterval: 3500,  // Announcement hold time before swapping
        tickerFade: 500,       // Announcement fade-out/fade-in duration
        threshold: 0.12
    };

    /**
     * Check if user prefers reduced motion.
     *
     * @return {boolean}
     */
    Motion.prefersReducedMotion = function () {
        return window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    };

    /**
     * Safe querySelector.
     *
     * @param {string} selector
     * @param {Element|Document} [context]
     * @return {Element|null}
     */
    Motion.query = function (selector, context) {
        context = context || document;
        return context.querySelector(selector);
    };

    /**
     * Safe querySelectorAll returning an Array.
     *
     * @param {string} selector
     * @param {Element|Document} [context]
     * @return {Element[]}
     */
    Motion.queryAll = function (selector, context) {
        context = context || document;
        return Array.prototype.slice.call(context.querySelectorAll(selector));
    };

    /**
     * Registry for motion modules.
     */
    Motion.modules = {};

    /**
     * Register a motion module.
     *
     * @param {string} name
     * @param {Object} module
     */
    Motion.register = function (name, module) {
        Motion.modules[name] = module;
    };

    window.ADEPA.Motion = Motion;
}());
