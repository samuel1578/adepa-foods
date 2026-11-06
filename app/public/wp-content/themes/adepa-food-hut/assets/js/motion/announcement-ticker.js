/**
 * ADEPA Food Hut — Announcement Ticker Module.
 *
 * Sequentially flashes one announcement at a time through the homepage
 * ticker: fade the current message out, swap, fade the next one in, then
 * hold. The sequence loops through every message indefinitely.
 *
 * Reduced-motion users still get every message in order; CSS removes the
 * fade transitions so messages simply change.
 *
 * @package ADEPA_Food_Hut
 */

(function () {
    'use strict';

    window.ADEPA = window.ADEPA || {};
    var Motion = window.ADEPA.Motion || {};

    var AnnouncementTicker = {
        holdTimer: null,
        swapTimer: null,
        index: 0,
        items: [],
        container: null,

        /**
         * Initialize the sequential announcement ticker.
         */
        init: function () {
            var track = Motion.query ? Motion.query('.adepa-ticker__track') : document.querySelector('.adepa-ticker__track');
            if (!track) {
                return;
            }

            this.container = track;
            this.items = Motion.queryAll ? Motion.queryAll('.adepa-ticker__set', track) : Array.prototype.slice.call(track.querySelectorAll('.adepa-ticker__set'));

            if (this.items.length < 2) {
                return;
            }

            // Exactly one message is visible, starting with the first in order.
            this.index = 0;
            this.items.forEach(function (item, idx) {
                if (idx === 0) {
                    item.classList.add('is-active');
                } else {
                    item.classList.remove('is-active');
                }
            });

            this.start();
        },

        /**
         * Schedule the next swap after the current message has been held.
         */
        start: function () {
            var self = this;
            var hold = (Motion.config && Motion.config.tickerInterval) ? Motion.config.tickerInterval : 3500;

            this.stop();
            this.holdTimer = setTimeout(function () {
                self.next();
            }, hold);
        },

        /**
         * Clear the pending hold timer.
         */
        stop: function () {
            if (this.holdTimer) {
                clearTimeout(this.holdTimer);
                this.holdTimer = null;
            }
        },

        /**
         * Fade the current message out, then fade the next one in and loop.
         */
        next: function () {
            var self = this;
            var fade = (Motion.config && Motion.config.tickerFade) ? Motion.config.tickerFade : 500;
            var current = this.items[this.index];

            this.stop();

            // Phase one: fade the current message out.
            if (current) {
                current.classList.remove('is-active');
            }

            this.swapTimer = setTimeout(function () {
                // Phase two: fade the next message in and keep the sequence running.
                self.index = (self.index + 1) % self.items.length;

                var incoming = self.items[self.index];
                if (incoming) {
                    incoming.classList.add('is-active');
                }

                self.start();
            }, fade);
        },

        /**
         * Destroy/cleanup module.
         */
        destroy: function () {
            this.stop();
            if (this.swapTimer) {
                clearTimeout(this.swapTimer);
                this.swapTimer = null;
            }
            this.items = [];
            this.container = null;
        }
    };

    if (Motion.register) {
        Motion.register('AnnouncementTicker', AnnouncementTicker);
    } else {
        Motion.AnnouncementTicker = AnnouncementTicker;
    }
}());
