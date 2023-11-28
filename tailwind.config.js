module.exports = {
	content: [
		'../../themes/wp-theme-susantokun/assets/js/*.js',
		'../../themes/wp-theme-susantokun/assets/index.html',
		'../../themes/wp-theme-susantokun/classes/*.php',
		'../../themes/wp-theme-susantokun/inc/*.php',
		'../../themes/wp-theme-susantokun/template-parts/*.php',
		'../../themes/wp-theme-susantokun/templates/*.php',
		'../../themes/wp-theme-susantokun/*.php',
		'../../plugins/popular-posts-tailwindcss/*.php',
		'../../plugins/recent-posts-tailwindcss/*.php',
	],
	darkMode: 'class', // or 'media' or 'class'
	presets: [require('./tailwind-preset-one')],
	theme: {
		extend: {},
	},
	variants: {
		extend: {
			opacity: ['disabled'],
			backgroundColor: ['odd'],
		},
	},
	plugins: [],
};
