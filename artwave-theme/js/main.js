/**
 * ArtWave theme scripts.
 */
(function () {
  'use strict';

  document.addEventListener('DOMContentLoaded', function () {
    var toggle = document.getElementById('aw-menu-toggle');
    var nav = document.getElementById('aw-nav');

    if (toggle && nav) {
      toggle.addEventListener('click', function () {
        var isOpen = nav.classList.toggle('is-open');
        toggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
      });

      // Close the menu when a link is tapped (mobile).
      nav.addEventListener('click', function (e) {
        if (e.target.closest('a')) {
          nav.classList.remove('is-open');
          toggle.setAttribute('aria-expanded', 'false');
        }
      });
    }

    // Highlight the "Home" link on load to match the original design.
    var firstLink = nav ? nav.querySelector('a') : null;
    if (firstLink) {
      firstLink.classList.add('is-active');
    }
  });
})();
