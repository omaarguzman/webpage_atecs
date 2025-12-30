import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    darkMode: false,

    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
                // sans: ['Inter', 'sans-serif'],
                
            },

            fontSize: {
                '8xl': '96px',
            },

            colors: {
                jmapaBlueLight: "#eaf0f2",
                jmapaBlue: "#173c69",
                jmapaBlueDark: "#1a2759",
                jmapaYellow: "#fab06f",
                jmapaBlueE: "#c5e2f6",
                jmapaBlueD: "#c5d9f6",
                jmapaWhite: "#FFFFFF",
                jmapaGray: "#919192",
                jmapaRed: "#D20103",
                jmapaGreen: "#36990D",
                jmapaBlueDark2: "#131721"
            },

            backgroundImage: {
                'bannerPagos': "url('/banner/silder/BannerPago.png')",
                'bannerSlider': "url('/banner/slider/BannerSilder.png')"
            }
        },

        container: {
            center: true,
        },
    },

    plugins: [
        forms,
    ],
};
