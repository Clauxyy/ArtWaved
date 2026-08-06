/**
 * ArtWave theme scripts.
 */
(function () {
  'use strict';

  document.addEventListener('DOMContentLoaded', function () {
    var toggle = document.getElementById('aw-menu-toggle');
    var nav = document.getElementById('aw-nav');

    // --- Toggle meniu mobil ---
    if (toggle && nav) {
      toggle.addEventListener('click', function () {
        var isOpen = nav.classList.toggle('is-open');
        toggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
      });

      // Închide meniul la click pe un link (mobile)
      nav.addEventListener('click', function (e) {
        if (e.target.closest('a')) {
          nav.classList.remove('is-open');
          toggle.setAttribute('aria-expanded', 'false');
        }
      });
    }

    // --- Evidențiază linkul paginii curente, dar NICIODATĂ pe Contact ---
    if (nav) {
      var links = nav.querySelectorAll('a');
      var currentPath = window.location.pathname;

      // Elimină slash‑urile de la început/sfârșit pentru comparare
      var cleanCurrentPath = currentPath.replace(/^\/|\/$/g, '');

      links.forEach(function (link) {
        var href = link.getAttribute('href');
        if (!href) return;

        // Verifică dacă este linkul de Contact (atât după href, cât și după text)
        var isContact = href.includes('contact') || link.textContent.trim().toLowerCase() === 'contact';

        // Dacă este Contact, sărim peste (nu adăugăm is-active)
        if (isContact) {
          return;
        }

        // Curățăm href-ul linkului
        var linkPath = href.replace(/^\/|\/$/g, '');

        // Caz special: link către homepage (goale sau 'index.php')
        var isHome = (linkPath === '' || linkPath === 'index.php');

        if (isHome) {
          // Dacă pagina curentă este homepage, adaugă is-active
          if (cleanCurrentPath === '' || cleanCurrentPath === 'index.php' || cleanCurrentPath === '') {
            link.classList.add('is-active');
          }
        } else {
          // Compară linkPath cu pagina curentă (suportă subdirectoare)
          if (cleanCurrentPath === linkPath || cleanCurrentPath.indexOf(linkPath) === 0) {
            link.classList.add('is-active');
          }
        }
      });
    }
  });
})();