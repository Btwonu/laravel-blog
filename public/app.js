const html = document.querySelector('html');
const themeToggle = document.querySelector('.js-theme-toggle');

const toggleTheme = (e) => {
	let theme = e.target.checked ? 'dark' : 'cupcake';

	html.dataset.theme = theme;

	localStorage.setItem('theme', theme);
};

const setThemeFromState = () => {
	let theme = localStorage.getItem('theme');


	if (!theme) {
		theme = 'cupcake';
	}

	if (theme == 'dark') {
		themeToggle.checked = true;
	}

	html.dataset.theme = theme;
};

themeToggle.addEventListener('change', toggleTheme);
setThemeFromState();