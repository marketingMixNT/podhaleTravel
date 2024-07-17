/** @type {import('tailwindcss').Config} */
export default {
    content: ["./resources/**/*.blade.php"],
    theme: {
        extend: {
            screens: {
                xxs: "390px",
                xs: "450px",
                "3xl": "1919px",
                max: "2200px",
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
                    300: "#fafafa",
                    400: "#dfe2e4",
                    500: "#d1d4d6",
                    600: "#cfd3d6",
                },
            },
        },
    },
    plugins: [require("@tailwindcss/typography")],
};
