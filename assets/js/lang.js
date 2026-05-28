function setLang(lang) {
  document.body.classList.toggle('danish', lang === 'da');
  document.getElementById('btn-en').classList.toggle('active', lang === 'en');
  document.getElementById('btn-da').classList.toggle('active', lang === 'da');
  localStorage.setItem('lang', lang);
}

// Restore saved preference on page load
const saved = localStorage.getItem('lang');
if (saved === 'da') setLang('da');
