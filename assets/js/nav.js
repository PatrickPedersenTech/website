// Highlight nav links based on current page and scroll position

const navLinks = document.querySelectorAll('.nav-links a');

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
