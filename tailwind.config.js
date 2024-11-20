// eslint-disable-next-line jsdoc/valid-types
/** @type {import('tailwindcss').Config} */
// eslint-disable-next-line no-undef
module.exports = {
	darkMode: 'class', // 'media' or 'class'
	content: [
		'./**/*.php', // Include all PHP files in the theme
		'./assets/js/**/*.js', // If using JavaScript files for dynamic components
	],
	theme: {
		extend: {},
	},
	plugins: [],
};

