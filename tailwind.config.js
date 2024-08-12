import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./vendor/awcodes/filament-curator/resources/**/*.blade.php",
    ],

    theme: {
        extend: {
            colors: {
                "white-3": "#f3f3f3",
                black: "#1b1b1b",
                "white-2": "#f4f0f0",
                red: "#c62641",
                white: "#fff",
                gainsboro: "#e6e6e6",
                gray: {
                    100: "rgba(27, 27, 27, 0.8)",
                    200: "rgba(27, 27, 27, 0.6)",
                },
                indianred: {
                    100: "#ed4d69",
                    200: "rgba(237, 77, 105, 0.09)",
                },
            },
            spacing: {},
            fontFamily: {
                "desktop-links": "Poppins",
                "libre-franklin": "'Libre Franklin'",
                inherit: "inherit",
            },
            borderRadius: {
                "781xl": "800px",
                "61xl": "80px",
                xl: "20px",
                "3xs": "10px",
            },
        },
        fontSize: {
            sm: "0.875rem",
            "2xs": "0.688rem",
            xl: "1.25rem",
            base: "1rem",
            "9xl": "1.75rem",
            "3xl": "1.375rem",
            "5xl": "1.5rem",
            lgi: "1.188rem",
            "45xl": "4rem",
            "19xl": "2.375rem",
            "32xl": "3.188rem",
            smi: "0.813rem",
            lg: "1.125rem",
            inherit: "inherit",
        },
        screens: {
            mq1425: {
                raw: "screen and (max-width: 1425px)",
            },
            lg: {
                max: "1200px",
            },
            mq1050: {
                raw: "screen and (max-width: 1050px)",
            },
            mq1025: {
                raw: "screen and (max-width: 1025px)",
            },
            mq1000: {
                raw: "screen and (max-width: 1000px)",
            },
            mq975: {
                raw: "screen and (max-width: 975px)",
            },
            mq825: {
                raw: "screen and (max-width: 825px)",
            },
            mq750: {
                raw: "screen and (max-width: 750px)",
            },
            mq725: {
                raw: "screen and (max-width: 725px)",
            },
            mq700: {
                raw: "screen and (max-width: 700px)",
            },
            mq450: {
                raw: "screen and (max-width: 450px)",
            },
            sm: "480px",
            md: "768px",
            lg: "976px",
            xl: "1440px",
        },
    },
    corePlugins: {
        preflight: false,
    },

    plugins: [forms],
};
