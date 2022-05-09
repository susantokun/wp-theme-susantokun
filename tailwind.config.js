module.exports = {
	purge: {
		enabled: true,
		content: [
			"../../themes/susantokun/*.php",
			"../../themes/susantokun/template-parts/*.php",
			"../../themes/susantokun/templates/*.php",
			"../../themes/susantokun/classes/*.php",
			"../../themes/susantokun/inc/*.php",
			"../../plugins/popular-posts-tailwindcss/*.php",
			"../../plugins/recent-posts-tailwindcss/*.php",
			"../../themes/susantokun/assets/js/app.js",
			"../../themes/susantokun/assets/js/switcher.js",
			"../../themes/susantokun/assets/js/highlight.js",
			"../../themes/susantokun/assets/index.html",
		],
	},
	darkMode: "class", // or 'media' or 'class'
	presets: [require("./tailwind-preset-one")],
	theme: {
		extend: {},
	},
	variants: {
		extend: {
			opacity: ["disabled"],
			backgroundColor: ["odd"],
		},
	},
	plugins: [],
};
