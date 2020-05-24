// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Template renderer for Moodle. Load and render Moodle templates with Mustache.
 *
 * @module     core/templates
 * @package    core
 * @class      templates
 * @copyright  2015 Damyon Wiese <damyon@moodle.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @since      2.9
 */
define(['jquery', './tether', 'core/event', 'core/custom_interaction_events'], function(jQuery, Tether, Event, customEvents) {

    window.jQuery = jQuery;
    window.Tether = Tether;
    M.util.js_pending('theme_space/loader:children');

    require(['theme_space/aria',
            'theme_space/pending',
            'theme_space/util',
            'theme_space/alert',
            'theme_space/button',
            'theme_space/carousel',
            'theme_space/collapse',
            'theme_space/dropdown',
            'theme_space/modal',
            'theme_space/scrollspy',
            'theme_space/tab',
            'theme_space/tooltip',
            'theme_space/popover'],
            function(Aria) {

        // We do twice because: https://github.com/twbs/bootstrap/issues/10547
        jQuery('body').popover({
            trigger: 'focus',
            selector: "[data-toggle=popover][data-trigger!=hover]"
        });

        // Popovers must close on Escape for accessibility reasons.
        customEvents.define(jQuery('body'), [
            customEvents.events.escape,
        ]);
        jQuery('body').on(customEvents.events.escape, '[data-toggle=popover]', function() {
            jQuery(this).popover('hide');
        });

        jQuery("html").popover({
            container: "body",
            selector: "[data-toggle=popover][data-trigger=hover]",
            trigger: "hover",
            delay: {
                hide: 500
            }
        });

        jQuery("html").tooltip({
            container: "body",
            selector: '[data-toggle="tooltip"]'
        });

        // Disables flipping the dropdowns up and getting hidden behind the navbar.
        jQuery.fn.dropdown.Constructor.Default.flip = false;

        jQuery('a[data-toggle="tab"]').on('shown.bs.tab', function(e) {
            var hash = jQuery(e.target).attr('href');
            if (history.replaceState) {
                history.replaceState(null, null, hash);
            } else {
                location.hash = hash;
            }
        });

        var hash = window.location.hash;
        if (hash) {
           jQuery('.nav-link[href="' + hash + '"]').tab('show');
        }

        // We need to call popover automatically if nodes are added to the page later.
        Event.getLegacyEvents().done(function(events) {
            jQuery(document).on(events.FILTER_CONTENT_UPDATED, function() {
                jQuery('body').popover({
                    selector: '[data-toggle="popover"]',
                    trigger: 'focus'
                });

            });
        });

        Aria.init();
        M.util.js_complete('theme_space/loader:children');
    });


    return {};
});
