/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        extend: {
            screens: {
                xs: "400px",
            },
            colors: {
                primaryColor: {
                    100: "#f4564b",
                    200: "#ea473a",
                    300: "#e03628",
                    400: "#da251d",
                    500: "#c71a0f",
                    600: "#c71a0f",
                    700: "#b3190e",
                },
                secondaryColor: "#2d3134",
            },
        },
    },
    plugins: [require("flowbite/plugin")],
};
