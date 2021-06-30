window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', e => {
    if(e.matches){
        document.documentElement.classList.add('dark')
        localStorage.setItem('theme', 'dark-theme');
    } else{
        document.documentElement.classList.remove('dark')
        localStorage.setItem('theme', 'light-theme');
    };
});
// localStorage.removeItem('theme');

// On page load or when changing themes, best to add inline in `head` to avoid FOUC
if (localStorage.getItem('theme') === 'dark-theme') {
    document.documentElement.classList.add('dark')
    localStorage.setItem('theme', 'dark-theme');
} else {
    document.documentElement.classList.remove('dark')
    localStorage.setItem('theme', 'light-theme');
}

if(window.matchMedia('(prefers-color-scheme: dark)').matches){
    document.documentElement.classList.add('dark')
    localStorage.setItem('theme', 'dark-theme');
} else {
    document.documentElement.classList.remove('dark')
    localStorage.setItem('theme', 'light-theme');
}
