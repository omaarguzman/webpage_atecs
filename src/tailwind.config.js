import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                jmapaBlueLight: "#eaf0f2",
                jmapaBlue: "#173c69",
                jmapaBlueDark: "#1a2759",
                jmapaYellow: "#fab06f",
                jmapaBlue2: "#c5e2f6",
                jmapaBlue3: "#c5d9f6",
            },
        },
    },

    plugins: [forms],
};
