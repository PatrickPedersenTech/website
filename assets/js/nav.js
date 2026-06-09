// Highlight nav links based on current page and scroll position
// Excludes the CV pill button from scroll spy

const navLinks = Array.from(document.querySelectorAll('.nav-links a'));

// ── HAMBURGER TOGGLE ──
const hamburger = document.getElementById('navHamburger');
const navMenu = document.getElementById('navLinks');

if (hamburger && navMenu) {
  hamburger.addEventListener('click', () => {
    const isOpen = navMenu.classList.toggle('open');
    hamburger.classList.toggle('open', isOpen);
    hamburger.setAttribute('aria-expanded', isOpen);
  });

  // Close menu when a link is clicked
  navMenu.querySelectorAll('a').forEach(link => {
    link.addEventListener('click', () => {
      navMenu.classList.remove('open');
      hamburger.classList.remove('open');
      hamburger.setAttribute('aria-expanded', false);
    });
  });

  // Close menu when clicking outside
  document.addEventListener('click', (e) => {
    if (!navMenu.contains(e.target) && !hamburger.contains(e.target)) {
      navMenu.classList.remove('open');
      hamburger.classList.remove('open');
      hamburger.setAttribute('aria-expanded', false);
    }
  });
}

function setActive(id) {
  navLinks.forEach(link => {
    const href = link.getAttribute('href');
    // Match either /#section or just #section, and exact page paths like /cv/
    const matches =
      href === `/#${id}` ||
      href === `#${id}` ||
      (id === 'page' && window.location.pathname !== '/' && href === window.location.pathname);
    link.classList.toggle('active', matches);
  });
}

function initScrollSpy() {
  const sections = document.querySelectorAll('section[id], div[id="hero"]');
  if (!sections.length) return;

  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          setActive(entry.target.id);
        }
      });
    },
    {
      rootMargin: '-40% 0px -55% 0px',
      threshold: 0,
    }
  );

  sections.forEach(section => observer.observe(section));
}

// On non-index pages, highlight the matching nav link by pathname
function initPageActive() {
  const path = window.location.pathname;
  if (path === '/') return;
  navLinks.forEach(link => {
    link.classList.toggle('active', link.getAttribute('href') === path);
  });
}

if (window.location.pathname === '/') {
  initScrollSpy();
} else {
  initPageActive();
}
