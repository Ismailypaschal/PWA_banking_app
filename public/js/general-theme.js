
  const root = document.documentElement;
  const toggleBtn = document.getElementById('theme-toggle');

  // Load saved theme on page load
  const savedTheme = localStorage.getItem('theme');

  if (savedTheme === 'light') {
    root.classList.remove('dark');
  } else {
    root.classList.add('dark'); // default
  }



