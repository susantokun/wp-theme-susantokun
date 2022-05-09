if (
	localStorage.theme === "dark" ||
	(!("theme" in localStorage) &&
		window.matchMedia("(prefers-color-scheme: dark)").matches)
) {
	document.querySelector("html").classList.add("dark");
} else {
	document.querySelector("html").classList.remove("dark");
}
// localStorage.removeItem("theme");

(function ($) {
	$(document).ready(function () {
		$(".switcher").html(function (index, html) {
			if (localStorage.getItem("theme") == "dark") {
				return html.replace(
					/^(.*)$/gm,
					'<button onclick="switchTheme(\'light\')" class="inline-flex items-center justify-center h-6 px-3 bg-transparent hover:text-primary-lightest dark:hover:text-primary focus:outline-none"><span class="text-base icon-moon"></span></button>'
				);
			} else {
				return html.replace(
					/^(.*)$/gm,
					'<button onclick="switchTheme(\'dark\')" class="inline-flex items-center justify-center h-6 px-3 bg-transparent hover:text-primary-lightest dark:hover:text-primary focus:outline-none"><span class="text-base icon-sun"></span></button>'
				);
			}
		});
	});
})(jQuery);

function switchTheme(value) {
	if (value == "dark") {
		document.querySelector("html").classList.remove("light");
		localStorage.setItem("theme", "dark");
		$(".switcher").html(function (index, html) {
			return html.replace(
				/^(.*)$/gm,
				'<button onclick="switchTheme(\'light\')" class="inline-flex items-center justify-center h-6 px-3 bg-transparent hover:text-primary-lightest dark:hover:text-primary focus:outline-none"><span class="text-base icon-moon"></span></button>'
			);
		});
	} else {
		document.querySelector("html").classList.remove("dark");
		localStorage.setItem("theme", "light");
		$(".switcher").html(function (index, html) {
			return html.replace(
				/^(.*)$/gm,
				'<button onclick="switchTheme(\'dark\')" class="inline-flex items-center justify-center h-6 px-3 bg-transparent hover:text-primary-lightest dark:hover:text-primary focus:outline-none"><span class="text-base icon-sun"></span></button>'
			);
		});
	}
	document.querySelector("html").classList.add(localStorage.getItem("theme"));
}
