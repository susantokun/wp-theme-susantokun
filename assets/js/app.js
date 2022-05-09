// disqus
function load_disqus(disqus_shortname) {
	// Prepare the trigger and target
	var disqus_trigger = jQuery("#disqus_trigger"),
		disqus_target = jQuery("#disqus_thread");

	// Load script asynchronously only when the trigger and target exist
	if (disqus_target && disqus_trigger) {
		jQuery.ajaxSetup({
			cache: true,
		});
		jQuery.getScript("//" + disqus_shortname + ".disqus.com/embed.js");

		jQuery.ajaxSetup({
			cache: false,
		});
		disqus_trigger.remove();
	}
}
$(function () {
	$(".notif-show").on("click", function () {
		$("#overlay-1").addClass("active").focus();
		$("#disqus-notif").addClass("active").focus();
		$("body").addClass("Fixed--active");
	});
	$(".close-1").on("click", function () {
		$("#overlay-1").removeClass("active");
		$("#disqus-notif").removeClass("active");
		$("body").removeClass("Fixed--active");
	});
});

// if (
// 	localStorage.theme === "dark" ||
// 	(!("theme" in localStorage) &&
// 		window.matchMedia("(prefers-color-scheme: dark)").matches)
// ) {
// 	document.querySelector("html").classList.add("dark");
// } else {
// 	document.querySelector("html").classList.remove("dark");
// }
// localStorage.removeItem("theme");
function switchTheme(value) {
	if (value == "dark") {
		document.querySelector("html").classList.remove("light");
		localStorage.setItem("theme", "dark");
		$(".switcher").html(function (index, html) {
			return html.replace(
				/^(.*)$/gm,
				'<button type="button" onclick="switchTheme(\'light\')" class="inline-flex items-center justify-center h-full w-full bg-transparent hover:opacity-80 focus:outline-none" aria-label="Theme Mode"><span class="text-sm icon-moon"></span></button>'
			);
		});
	} else {
		document.querySelector("html").classList.remove("dark");
		localStorage.setItem("theme", "light");
		$(".switcher").html(function (index, html) {
			return html.replace(
				/^(.*)$/gm,
				'<button type="button" onclick="switchTheme(\'dark\')" class="inline-flex items-center justify-center h-full w-full bg-transparent hover:opacity-80 focus:outline-none" aria-label="Theme Mode"><span class="text-sm icon-sun"></span></button>'
			);
		});
	}
	document.querySelector("html").classList.add(localStorage.getItem("theme"));
}

// syntaxHighlight.initSyntaxHighlightOnLoad();

$("#RecentComments a")
	.filter(function () {
		return this.hostname && this.hostname !== location.hostname;
	})
	.attr("rel", "nofollow noopener")
	.attr("target", "_blank");

(function ($) {
	$(document).ready(function () {
		console.log("Hello ma'fren :)");
		document
			.querySelector(":root")
			.style.setProperty("--tw-ring-offset-width", "0px");

		$(".switcher").html(function (index, html) {
			if (localStorage.getItem("theme") == "dark") {
				return html.replace(
					/^(.*)$/gm,
					'<button type="button" onclick="switchTheme(\'light\')" class="inline-flex items-center justify-center h-full w-full bg-transparent hover:opacity-80 focus:outline-none" aria-label="Theme Mode"><span class="text-sm icon-moon"></span></button>'
				);
			} else {
				return html.replace(
					/^(.*)$/gm,
					'<button type="button" onclick="switchTheme(\'dark\')" class="inline-flex items-center justify-center h-full w-full bg-transparent hover:opacity-80 focus:outline-none" aria-label="Theme Mode"><span class="text-sm icon-sun"></span></button>'
				);
			}
		});

		// var $analyticsOff = $(".adsbygoogle:hidden");
		// var $analyticsOn = $(".adsbygoogle:visible");

		// $analyticsOff.each(function () {
		// 	$(this).remove();
		// });
		// $analyticsOn.each(function () {
		// 	(adsbygoogle = window.adsbygoogle || []).push({});
		// });

		// function downloadJSAtOnload() {
		// 	var e = document.createElement("script");
		// 	!(function () {
		// 		var e = document.createElement("script");
		// 		(e.type = "text/javascript"),
		// 			(e.async = !0),
		// 			(e.src =
		// 				"https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"),
		// 			(e.onerror = function () {
		// 				var e;
		// 				((e = document.createElement("div")).id = "antiadblock"),
		// 					(e.innerHTML =
		// 						'<div class="container absolute inset-0 flex items-center justify-center px-4 select-none"><div class="w-full text-white bg-red-600 rounded-md shadow-lg md:w-full lg:w-1/2 xl:w-1/2"><div class="px-2 py-10 text-center"><div class="mb-6 text-xl font-bold md:text-3xl">AD BLOCKER TERDETEKSI...!</div><div class="text-sm md:text-base">Harap pertimbangkan untuk mendukung kami!</br>Silakan nonaktifkan pemblokiran iklan!</div></div></div></div></div>'),
		// 					document.body.append(e),
		// 					(document.body.style.overflow = "hidden"),
		// 					(window.adblock = !0);
		// 			});
		// 		var n = document.getElementsByTagName("script")[0];
		// 		n.parentNode.insertBefore(e, n);
		// 	})(),
		// 		document.body.appendChild(e);
		// }
		// window.addEventListener
		// 	? window.addEventListener("load", downloadJSAtOnload, !1)
		// 	: window.attachEvent
		// 	? window.attachEvent("onload", downloadJSAtOnload)
		// 	: (window.onload = downloadJSAtOnload);

		$(".terminal").html(function (index, html) {
			return html.replace(/^(.*)$/gm, '<span class="cmd">$1</span>');
		});

		// function hideShowNav() {
		// 	prevScrollPosition = window.pageYOffset;
		// 	$(window).scroll(function () {
		// 		var currentScrollPosition = window.pageYOffset;
		// 		if (prevScrollPosition > currentScrollPosition) {
		// 			document.getElementById("navbar").style.top = "0";
		// 		} else {
		// 			document.getElementById("navbar").style.top = "-62px";
		// 		}
		// 		prevScrollPosition = currentScrollPosition;
		// 	});
		// }

		function progressBar() {
			$("#progressbarBottom").css("width", 0 + "%");
			$(window).scroll(function () {
				var scrollPercent = "0";
				var scroll = $(window).scrollTop(),
					dh = $(document).height(),
					wh = $(window).height();
				var scrollPercent = (scroll / (dh - wh)) * 100;
				$("#progressbarBottom").css("width", scrollPercent + "%");
			});
		}

		progressBar();
		// hideShowNav();

		// scroll to top
		var btnTop = $("#scrollToTop");
		btnTop.on("click", function (e) {
			e.preventDefault();
			$("html, body").animate(
				{
					scrollTop: 0,
				},
				"500"
			);
		});

		// scroll to bottom
		var btnBottom = $("#scrollToBottom");
		btnBottom.on("click", function (e) {
			e.preventDefault();
			$("html, body").animate(
				{
					scrollTop: document.body.scrollHeight,
				},
				"500"
			);
		});

		// scroll overlay
		var btnRecentComments = $("#scrollOverlay");
		$(window).scroll(function () {
			if ($(window).scrollTop() > 50) {
				btnRecentComments.addClass("show");
			} else {
				btnRecentComments.removeClass("show");
			}
		});
	});
})(jQuery);
