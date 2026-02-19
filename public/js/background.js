
const root = document.documentElement;
const toggleBtn = document.getElementById('theme-toggle');
const hideBtn = document.getElementById('hide-btn');
const amount = document.getElementById('amount');
const hidden = document.getElementById('hidden');

// Load saved theme on page load
const savedTheme = localStorage.getItem('theme');

if (savedTheme === 'light') {
  root.classList.remove('dark');
} else {
  root.classList.add('dark'); // default
}

// Toggle and persist theme
toggleBtn.addEventListener('click', () => {
  const isDark = root.classList.toggle('dark');
  localStorage.setItem('theme', isDark ? 'dark' : 'light');
});

hideBtn.addEventListener('click', () => {
  saveValue = hidden.innerText;
  
  if (amount.innerText !== '****') {
    amount.innerText = '****';
  } else {
    amount.innerHTML = Number(saveValue).toLocaleString('en-US', { style: 'currency', currency: 'USD' });
  }
});

