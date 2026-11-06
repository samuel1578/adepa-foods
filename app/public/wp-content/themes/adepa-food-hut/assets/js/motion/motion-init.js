/**
 * ADEPA Food Hut — Motion System Initializer.
 *
 * Coordinates initialization of motion modules with error handling,
 * reduced motion compliance, and global API exposure.
 *
 * @package ADEPA_Food_Hut
 */

(function () {
    'use strict';

    window.ADEPA = window.ADEPA || {};
    var Motion = window.ADEPA.Motion || {};

    /**
     * Initialize all registered motion modules safely.
     */
    Motion.init = function () {
        document.documentElement.classList.add('adepa-motion-ready');

        var modules = Motion.modules || {};
        for (var name in modules) {
            if (Object.prototype.hasOwnProperty.call(modules, name)) {
                var mod = modules[name];
                if (mod && typeof mod.init === 'function') {
                    try {
                        mod.init();
                    } catch (error) {
                        console.warn('[ADEPA Motion] Failed to initialize module ' + name + ':', error);
                    }
                }
            }
        }
    };

    /**
     * Clean up all modules.
     */
    Motion.destroy = function () {
        var modules = Motion.modules || {};
        for (var name in modules) {
            if (Object.prototype.hasOwnProperty.call(modules, name)) {
                var mod = modules[name];
                if (mod && typeof mod.destroy === 'function') {
                    try {
                        mod.destroy();
                    } catch (error) {
                        // ignore cleanup errors
                    }
                }
            }
        }
    };

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', function () {
            Motion.init();
        });
    } else {
        Motion.init();
    }

    window.ADEPA.Motion = Motion;
}());
