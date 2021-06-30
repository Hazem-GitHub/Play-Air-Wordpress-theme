document.getElementById('switchTheme').addEventListener('click', function() {
    if(localStorage.getItem('theme') == 'dark-theme') {
        document.documentElement.classList.remove('dark');
        localStorage.setItem('theme', 'light-theme')
    } else {
        document.documentElement.classList.add('dark');
        localStorage.setItem('theme', 'dark-theme');
    }
});
