const html = document.querySelector('html');
const themeToggle = document.querySelector('.js-theme-toggle');

const toggleTheme = (e) => {
	if (e.target.checked) {
		html.dataset.theme = 'dark';
	} else {
		html.dataset.theme = 'cupcake';
	}
};

themeToggle.addEventListener('change', toggleTheme);