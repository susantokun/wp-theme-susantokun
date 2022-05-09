module.exports = {
	plugins: [
		require("postcss-import"),
		require("tailwindcss"),
		// require("@fullhuman/postcss-purgecss")({
		// 	content: [
		// 		"../../themes/susantokun/*.php",
		// 		"../../themes/susantokun/template-parts/*.php",
		// 		"../../themes/susantokun/templates/*.php",
		// 		"../../themes/susantokun/classes/*.php",
		// 		"../../themes/susantokun/inc/*.php",
		// 		"../../plugins/popular-posts-tailwindcss/*.php",
		// 		"../../plugins/recent-posts-tailwindcss/*.php",
		// 		"../../themes/susantokun/assets/js/app.js",
		// 		"../../themes/susantokun/assets/js/switcher.js",
		// 		"../../themes/susantokun/assets/js/highlight.js",
		// 		"../../themes/susantokun/assets/index.html",
		// 	],
		// 	defaultExtractor: (content) => content.match(/[\w-/:]+(?<!:)/g) || [],
		// }),
		require("autoprefixer"),
	],
};
