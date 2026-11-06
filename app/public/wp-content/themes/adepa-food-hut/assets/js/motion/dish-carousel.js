/**
 * ADEPA Food Hut — Featured Dishes Carousel Module.
 *
 * Implements smooth horizontal carousel navigation for featured dishes,
 * desktop hover pause/resume, mobile touch support, and reduced motion fallback.
 *
 * @package ADEPA_Food_Hut
 */

(function () {
    'use strict';

    window.ADEPA = window.ADEPA || {};
    var Motion = window.ADEPA.Motion || {};

    var DishCarousel = {
        timer: null,
        frame: null,
        container: null,
        dishes: [],
        currentIndex: 0,
        isPaused: false,
        direction: 1,
        isInView: false,
        observer: null,
        resumeTimer: null,

        /**
         * Initialize the dishes carousel.
         */
        init: function () {
            var dishesContainer = Motion.query ? Motion.query('.adepa-dishes') : document.querySelector('.adepa-dishes');
            if (!dishesContainer) {
                return;
            }

            this.container = dishesContainer;
            this.container.style.scrollSnapType = 'none';
            this.container.style.scrollBehavior = 'auto';
            this.dishes = Motion.queryAll ? Motion.queryAll('.adepa-dish', dishesContainer) : Array.prototype.slice.call(dishesContainer.querySelectorAll('.adepa-dish'));

            if (this.dishes.length < 2) {
                return;
            }

            var reduced = Motion.prefersReducedMotion ? Motion.prefersReducedMotion() : (window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches);
            if (reduced) {
                return;
            }

            this.bindEvents();
            this.observeVisibility();
        },

        /**
         * Bind hover, touch, and keyboard interactions.
         */
        bindEvents: function () {
            var self = this;
            if (!this.container) {
                return;
            }

            this.dishes.forEach(function (dish) {
                dish.addEventListener('mouseenter', function () {
                    self.pause();
                });

                dish.addEventListener('mouseleave', function () {
                    self.deferResume();
                });

                dish.addEventListener('focusin', function () {
                    self.pause();
                });

                dish.addEventListener('focusout', function () {
                    self.deferResume();
                });
            });

            this.container.addEventListener('touchstart', function () {
                self.pause();
            }, { passive: true });

            this.container.addEventListener('touchend', function () {
                self.deferResume();
            }, { passive: true });

            this.container.addEventListener('touchcancel', function () {
                self.deferResume();
            }, { passive: true });

        },

        /**
         * Start and stop motion as the section enters or leaves the viewport.
         */
        observeVisibility: function () {
            var self = this;
            var section = this.container.closest('.adepa-featured') || this.container;

            if (!('IntersectionObserver' in window)) {
                this.isInView = true;
                this.start();
                return;
            }

            this.observer = new IntersectionObserver(function (entries) {
                var entry = entries[0];
                self.isInView = entry.isIntersecting;

                if (self.isInView) {
                    self.start();
                } else {
                    self.stop();
                }
            }, { threshold: 0.2 });

            this.observer.observe(section);
        },

        /**
         * Start auto-scroll carousel timer.
         */
        start: function () {
            var self = this;
            var step = 0.6;

            if (this.timer || !this.isInView) {
                return;
            }

            this.timer = window.setInterval(function () {
                if (self.isInView && !self.isPaused && self.container && self.container.scrollWidth > self.container.clientWidth) {
                    var maximum = self.container.scrollWidth - self.container.clientWidth;
                    var nextPosition = self.container.scrollLeft + step * self.direction;

                    if (nextPosition >= maximum) {
                        nextPosition = maximum;
                        self.direction = -1;
                    } else if (nextPosition <= 0) {
                        nextPosition = 0;
                        self.direction = 1;
                    }

                    self.container.scrollLeft = nextPosition;
                }
            }, 50);
        },

        /**
         * Stop carousel timer.
         */
        stop: function () {
            if (this.timer) {
                clearInterval(this.timer);
                this.timer = null;
            }

            if (this.frame) {
                window.cancelAnimationFrame(this.frame);
                this.frame = null;
            }
        },

        /**
         * Pause carousel.
         */
        pause: function () {
            window.clearTimeout(this.resumeTimer);
            this.isPaused = true;
        },

        /**
         * Resume carousel.
         */
        resume: function () {
            this.isPaused = false;
            this.start();
        },

        /**
         * Resume shortly after touch or keyboard interaction settles.
         */
        deferResume: function () {
            var self = this;

            window.clearTimeout(this.resumeTimer);
            this.resumeTimer = window.setTimeout(function () {
                self.resume();
            }, 500);
        },

        /**
         * Advance to the next dish card.
         */
        next: function () {
            if (!this.container || !this.dishes.length) {
                return;
            }

            this.currentIndex = (this.currentIndex + 1) % this.dishes.length;
            var target = this.dishes[this.currentIndex];

            if (target && this.container.scrollTo) {
                var containerLeft = this.container.getBoundingClientRect().left;
                var targetLeft = target.getBoundingClientRect().left;
                var scrollOffset = targetLeft - containerLeft + this.container.scrollLeft;

                this.container.scrollTo({
                    left: scrollOffset,
                    behavior: 'smooth'
                });
            }
        },

        /**
         * Destroy/cleanup carousel.
         */
        destroy: function () {
            this.stop();
            if (this.observer) {
                this.observer.disconnect();
                this.observer = null;
            }
            window.clearTimeout(this.resumeTimer);
            this.dishes = [];
            this.container = null;
        }
    };

    if (Motion.register) {
        Motion.register('DishCarousel', DishCarousel);
    } else {
        Motion.DishCarousel = DishCarousel;
    }
}());
