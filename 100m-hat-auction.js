(() => {
  const grid = document.querySelector('#numberGrid');
  const search = document.querySelector('#numberSearch');
  const toast = document.querySelector('#toast');
  let selectedNumber = null;
  let selectedColor = 'Cardinal';
  let toastTimer;
  const menuToggle = document.querySelector('.menu-toggle');
  const primaryNav = document.querySelector('#primaryNav');
  function notify(message) { toast.textContent = message; toast.classList.add('show'); clearTimeout(toastTimer); toastTimer = setTimeout(() => toast.classList.remove('show'), 2200); }
  function selectNumber(number) { const target = grid.querySelector(`[data-number="${number}"]`); if (!target) return; grid.querySelectorAll('button')
    .forEach((button) => button.classList.remove('selected')); 
    target.classList.add('selected'); selectedNumber = number; search.value = number; }
    
  for (let number = 1; number <= 100; number += 1) { const button = document.createElement('button'); button.type = 'button'; button.textContent = number; button.dataset.number = number; button.setAttribute('aria-label', `Founding member number ${number}`); 
  
  
  if ([6,12,19,24,31,43,58,67,78,89].includes(number)) 
    { button.classList.add('taken'); button.disabled = false; button.title = 'Reserved'; }
  
  button.addEventListener('click', () => selectNumber(number)); grid.appendChild(button); }
  document.querySelectorAll('.style-card').forEach((button) => button.addEventListener('click', () => { document.querySelectorAll('.style-card').forEach((option) => { option.classList.remove('active'); option.setAttribute('aria-pressed','false'); }); button.classList.add('active'); button.setAttribute('aria-pressed','true'); selectedColor = button.querySelector('strong').textContent; }));
  search.addEventListener('change', () => { const number = Number(search.value); const option = grid.querySelector(`[data-number="${number}"]`); if (option && !option.disabled) selectNumber(number); else notify('That number is unavailable.'); });
  document.querySelectorAll('.premium-bids button').forEach((button) => button.addEventListener('click', () => { document.querySelectorAll('.premium-bids button').forEach((option) => option.classList.remove('selected')); button.classList.add('selected'); selectNumber(Number(button.dataset.number)); document.querySelector('#reserve').scrollIntoView({behavior:'smooth',block:'start'}); }));
  document.querySelector('.place-bid').addEventListener('click', () => { if (!selectedNumber) { notify('Choose a founding number first.'); document.querySelector('#reserve').scrollIntoView({behavior:'smooth',block:'start'}); return; } notify(`${selectedColor} hat #${selectedNumber} selected.`); });
  document.querySelectorAll('.faq-list article').forEach((article) => { const button = article.querySelector('button'); button.addEventListener('click', () => { const open = article.classList.toggle('open'); button.setAttribute('aria-expanded', String(open)); }); });
  menuToggle.addEventListener('click', () => { const open = primaryNav.classList.toggle('open'); menuToggle.setAttribute('aria-expanded', String(open)); menuToggle.setAttribute('aria-label', open ? 'Close navigation' : 'Open navigation'); });
  primaryNav.querySelectorAll('a').forEach((link) => link.addEventListener('click', () => { primaryNav.classList.remove('open'); menuToggle.setAttribute('aria-expanded', 'false'); menuToggle.setAttribute('aria-label', 'Open navigation'); }));
})();
