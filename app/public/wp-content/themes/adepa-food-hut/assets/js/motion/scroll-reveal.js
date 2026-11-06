/**
 * ADEPA Food Hut — Scroll Reveal & Staggered Motion Module.
 *
 * Handles viewport-triggered reveals, staggered brand-story facts entrance,
 * horizontal slide reveals, and reduced-motion fallback.
 *
 * @package ADEPA_Food_Hut
 */

(function () {
    'use strict';

    window.ADEPA = window.ADEPA || {};
    var Motion = window.ADEPA.Motion || {};

    var ScrollReveal = {
        observer: null,

        /**
         * Initialize scroll reveal module.
         */
        init: function () {
            var selector = '.adepa-reveal, .adepa-facts, .adepa-steps, .adepa-delivery__head, .adepa-areas, .adepa-cta__grid';
            var items = Motion.queryAll ? Motion.queryAll(selector) : Array.prototype.slice.call(document.querySelectorAll(selector));

            if (!items.length) {
                return;
            }

            var reduced = Motion.prefersReducedMotion ? Motion.prefersReducedMotion() : (window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches);

            if (reduced || !('IntersectionObserver' in window)) {
                items.forEach(function (item) {
                    item.classList.add('is-visible');
                });
                return;
            }

            var self = this;
            this.observer = new IntersectionObserver(
                function (entries) {
                    entries.forEach(function (entry) {
                        if (entry.isIntersecting) {
                            entry.target.classList.add('is-visible');
                            self.observer.unobserve(entry.target);
                        }
                    });
                },
                { rootMargin: '0px 0px -8% 0px', threshold: 0.12 }
            );

            items.forEach(function (item) {
                self.observer.observe(item);
            });
        },

        /**
         * Destroy/cleanup observer.
         */
        destroy: function () {
            if (this.observer) {
                this.observer.disconnect();
                this.observer = null;
            }
        }
    };

    if (Motion.register) {
        Motion.register('ScrollReveal', ScrollReveal);
    } else {
        Motion.ScrollReveal = ScrollReveal;
    }
}());
