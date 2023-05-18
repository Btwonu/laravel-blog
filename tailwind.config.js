/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
		flex: {
			'2': '0 0 50%',
			'3': '0 0 33%',
		},
        extend: {},
    },
    plugins: [require("daisyui")],
};
