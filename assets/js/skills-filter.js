const cards = Array.from(document.querySelectorAll('.skill-card'));
const filterBtns = document.querySelectorAll('.filter-btn');
const searchInput = document.getElementById('searchInput');
const countVisible = document.getElementById('countVisible');
const countTotal = document.getElementById('countTotal');
const noResults = document.getElementById('noResults');

countTotal.textContent = cards.length;

let activeFilter = 'all';
let searchTerm = '';

function update() {
  let visible = 0;
  cards.forEach(card => {
    const matchFilter = activeFilter === 'all' || card.dataset.category === activeFilter;
    const matchSearch = card.dataset.name.includes(searchTerm);
    if (matchFilter && matchSearch) {
      card.classList.remove('hidden');
      visible++;
    } else {
      card.classList.add('hidden');
    }
  });
  countVisible.textContent = visible;
  noResults.style.display = visible === 0 ? 'block' : 'none';
}

filterBtns.forEach(btn => {
  btn.addEventListener('click', () => {
    filterBtns.forEach(b => b.classList.remove('active'));
    btn.classList.add('active');
    activeFilter = btn.dataset.filter;
    update();
  });
});

searchInput.addEventListener('input', () => {
  searchTerm = searchInput.value.toLowerCase().trim();
  update();
});
