/**
 * ADEPA Food Hut — Hero Image Rotation Module.
 *
 * Implements smooth 3-image crossfade hero rotation with 1.5s interval,
 * 600ms crossfade, hover pause, touch support, and reduced-motion compliance.
 *
 * @package ADEPA_Food_Hut
 */

(function () {
    'use strict';

    window.ADEPA = window.ADEPA || {};
    var Motion = window.ADEPA.Motion || {};

    var HeroRotation = {
        timer: null,
        currentIndex: 0,
        images: [],
        container: null,
        isPaused: false,

        /**
         * Initialize the hero rotation.
         */
        init: function () {
            var media = Motion.query ? Motion.query('.adepa-hero__media') : document.querySelector('.adepa-hero__media');
            if (!media) {
                return;
            }

            this.container = media;
            this.images = Motion.queryAll ? Motion.queryAll('.adepa-hero__image', media) : Array.prototype.slice.call(media.querySelectorAll('.adepa-hero__image'));

            if (this.images.length < 2) {
                return;
            }

            // Ensure first image is active immediately
            this.images.forEach(function (img, idx) {
                if (idx === 0) {
                    img.classList.add('adepa-hero__image--active');
                    img.classList.add('is-active');
                    img.setAttribute('aria-hidden', 'false');
                } else {
                    img.classList.remove('adepa-hero__image--active');
                    img.classList.remove('is-active');
                    img.setAttribute('aria-hidden', 'true');
                }
            });

            this.currentIndex = 0;

            // Check reduced motion preference
            var reduced = Motion.prefersReducedMotion ? Motion.prefersReducedMotion() : (window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches);
            if (reduced) {
                return;
            }

            this.bindEvents();
            this.start();
        },

        /**
         * Bind interaction listeners (hover pause, touch pause).
         */
        bindEvents: function () {
            var self = this;
            if (!this.container) {
                return;
            }

            this.container.addEventListener('mouseenter', function () {
                self.pause();
            });

            this.container.addEventListener('mouseleave', function () {
                self.resume();
            });

            this.container.addEventListener('touchstart', function () {
                self.pause();
            }, { passive: true });

            this.container.addEventListener('touchend', function () {
                self.resume();
            }, { passive: true });

            this.container.addEventListener('focusin', function () {
                self.pause();
            });

            this.container.addEventListener('focusout', function () {
                self.resume();
            });
        },

        /**
         * Start the rotation timer.
         */
        start: function () {
            var self = this;
            var interval = (Motion.config && Motion.config.heroInterval) ? Motion.config.heroInterval : 1500;

            this.stop();
            this.isPaused = false;

            this.timer = setInterval(function () {
                if (!self.isPaused) {
                    self.next();
                }
            }, interval);
        },

        /**
         * Stop the rotation timer.
         */
        stop: function () {
            if (this.timer) {
                clearInterval(this.timer);
                this.timer = null;
            }
        },

        /**
         * Pause rotation.
         */
        pause: function () {
            this.isPaused = true;
        },

        /**
         * Resume rotation.
         */
        resume: function () {
            this.isPaused = false;
        },

        /**
         * Advance to the next image with smooth crossfade.
         */
        next: function () {
            var nextIndex = (this.currentIndex + 1) % this.images.length;
            this.goTo(nextIndex);
        },

        /**
         * Transition to a specific image index.
         *
         * @param {number} targetIndex
         */
        goTo: function (targetIndex) {
            if (targetIndex === this.currentIndex || !this.images[targetIndex]) {
                return;
            }

            var current = this.images[this.currentIndex];
            var next = this.images[targetIndex];

            if (current) {
                current.classList.remove('adepa-hero__image--active');
                current.classList.remove('is-active');
                current.setAttribute('aria-hidden', 'true');
            }

            if (next) {
                next.classList.add('adepa-hero__image--active');
                next.classList.add('is-active');
                next.setAttribute('aria-hidden', 'false');
            }

            this.currentIndex = targetIndex;
        },

        /**
         * Destroy/cleanup module.
         */
        destroy: function () {
            this.stop();
            this.images = [];
            this.container = null;
        }
    };

    if (Motion.register) {
        Motion.register('HeroRotation', HeroRotation);
    } else {
        Motion.HeroRotation = HeroRotation;
    }
}());
