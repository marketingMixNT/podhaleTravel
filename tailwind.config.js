/** @type {import('tailwindcss').Config} */
export default {
    darkMode: "selector",
    content: ["./resources/**/*.blade.php"],
    theme: {
        extend: {
            screens: {
                xxs: "390px",
                xs: "450px",
                max: "2200px",
            },
            fontFamily: {
                heading: ["IBM Plex Sans", "sans-serif"],
                text: ["IBM Plex Sans", "sans-serif"],
            },
            colors: {
                primary: {
                    400: "#2f4571",
                    600: "#00205a",
                },
                secondary: {
                    400: "#ba0d2f",
                    600: "#a13137",
                },
                fontDark: "#333333",
                fontLight: "#ffffff",

                bgLight: {
                    200: "#ffffff",
                    400: "#fafafa",
                    600: "#dfe2e4",
                    800: "#d1d4d6",
                },
                bgDark: {
                    200: "",
                    400: "",
                    600: "",
                    800: "#000000",
                },
            },
        },
    },
    plugins: [require("@tailwindcss/typography")],
};
