const defaultTheme = require("tailwindcss/defaultTheme");
const colors = require("tailwindcss/colors");

module.exports = {
	theme: {
		container: {
			center: true,
		},
		colors: {
			transparent: "transparent",
			current: "currentColor",
			black: "#000",
			white: "#fff",

			gray: colors.coolGray,
			blue: colors.blue,
			red: colors.red,
			green: colors.emerald,
			yellow: colors.amber,
			orange: colors.orange,

			primary: {
				darkest: "#1E40AF",
				dark: "#1D4ED8",
				DEFAULT: "#2563EB",
				light: "#3B82F6",
				lightest: "#60A5FA",
			},

			// primary: {
			// 	100: "#d3e3fe",
			// 	200: "#a8c8fe",
			// 	lightest: "#7cacfd",
			// 	light: "#5191fd",
			// 	DEFAULT: "#2575fc",
			// 	dark: "#1e5eca",
			// 	darkest: "#164697",
			// 	800: "#0f2f65",
			// 	900: "#071732",
			// },
		},
		fontFamily: {
			sans: ["Ubuntu", ...defaultTheme.fontFamily.sans],
		},
		extend: {
			fontSize: {
				"2xs": ".625rem",
			},
			colors: {
				codeigniter: {
					DEFAULT: "#ee4323",
					dark: "#C3371D",
					light: "#F1654B",
				},
				laravel: {
					DEFAULT: "#ff2d20",
					dark: "#D1251B",
					light: "#FF5348",
				},
				reactjs: {
					DEFAULT: "#61dafb",
					dark: "#50B3CE",
					light: "#7DE0FB",
				},
				vuejs: {
					DEFAULT: "#41b883",
					dark: "#36976C",
					light: "#63C499",
				},
				wordpress: {
					DEFAULT: "#464646",
					dark: "#3A3A3A",
					light: "#676767",
				},
				blogger: {
					DEFAULT: "#f06a35",
					dark: "#C5572C",
					light: "#F28559",
				},
				tailwindcss: {
					DEFAULT: "#3fc4c1",
					dark: "#1ea5bb",
					light: "#11cdb5",
				},
				bootstrap: {
					DEFAULT: "#6639b6",
					dark: "#542F95",
					light: "#815DC3",
				},
				semanticui: {
					DEFAULT: "#34bdb2",
					dark: "#2B9B92",
					light: "#58C9C0",
				},
				androidstudio: {
					DEFAULT: "#88ba54",
					dark: "#77a74b",
					light: "#8abf4e",
				},
				vscode: {
					DEFAULT: "#0179cb",
					dark: "#0164A7",
					light: "#2F91D4",
				},
				atom: {
					DEFAULT: "#65c587",
					dark: "#0ca473",
					light: "#b2e198",
				},
				facebook: "#4267B2",
				line: "#007700",
				linkedin: "#0077b5",
				telegram: "#0061A1",
				twitter: "#3b7ab7",
				whatsapp: "#00871A",
				// facebook: "#4267B2",
				// line: "#00c300",
				// linkedin: "#0077b5",
				// telegram: "#0088cc",
				// twitter: "#55acee",
				// whatsapp: "#25d366",
			},
			typography: (theme) => ({
				DEFAULT: {
					css: {
						a: {
							color: theme("colors.primary.DEFAULT"),
							"&:hover": {
								color: theme("colors.primary.dark"),
								textDecoration: "none",
							},
						},
						pre: "none",
						code: "none",
					},
				},

				dark: {
					css: {
						color: theme("colors.gray.300"),
						a: {
							color: theme("colors.primary.lightest"),
							"&:hover": {
								color: theme("colors.primary.light"),
								textDecoration: "none",
							},
						},

						h1: {
							color: theme("colors.gray.200"),
						},
						h2: {
							color: theme("colors.gray.200"),
						},
						h3: {
							color: theme("colors.gray.200"),
						},
						h4: {
							color: theme("colors.gray.200"),
						},

						strong: {
							color: theme("colors.gray.300"),
						},
						pre: "none",
						code: "none",
						figcaption: {
							color: theme("colors.gray.400"),
						},
						blockquote: {
							color: theme("colors.gray.400"),
						},

						thead: {
							color: theme("colors.gray.200"),
							borderColor: theme("colors.gray.700"),
						},
						tbody: {
							color: theme("colors.gray.300"),
							tr: {
								borderColor: theme("colors.gray.800"),
							},
						},
						ol: {
							li: {
								"&:before": {
									color: theme("colors.gray.400"),
								},
							},
						},
						ul: {
							li: {
								"&:before": {
									backgroundColor: theme("colors.gray.400"),
								},
							},
						},
					},
				},
			}),
		},
	},

	variants: {
		extend: {
			ringOpacity: ["dark"],
			typography: ["dark"],
		},
	},
	plugins: [require("@tailwindcss/typography")],
};
