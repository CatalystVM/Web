import plugin from 'tailwindcss/plugin'
import colors from 'tailwindcss/colors'

/** @type {import('tailwindcss').Config} */
module.exports = {
    mode: "jit",
    content: [
        "./assets/**/*.css",
        "./components/*.{vue,js}",
        "./components/**/*.{vue,js}",
        "./pages/*.vue",
        "./pages/**/*.vue",
        "./plugins/**/*.{js,ts}",
        "./*.{vue,js,ts}",
        "./nuxt.config.{js,ts}",
    ],
    plugins: [
        require('@tailwindcss/typography'),
        require("daisyui")
    ],
    //darkMode: ['class', '[data-mode="dark"]'],

    daisyui: {
        themes: [
            {
                dark: {
                    ...require("daisyui/src/colors/themes")["[data-theme=dark]"],
                    'base-100': '#0b0c1b',
                    'primary': '#0b0c1b',
                    'secondary': '#1a1b2e',

                    'info': colors.blue[600]
                }
            }
        ]
    },

    theme: {
        extend: {
            colors: {
                dark: '#0b0c1b',
                semi_dark: '#1a1b2e',

                info_hover: colors.blue[800]

            },
            screens: {
                sm: '640px',
                md: '768px',
                lg: '1024px',
                xl: '1280px',
                '2xl': '1536px',
            },
            spacing: {
                16: '4rem',
                17: '4.25rem',
                18: '4.50rem',
                19: '4.75rem',
                20: '5rem',
            },
            fontFamily: {
                sans: ['Open Sans'],
                serif: ['SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace', 'serif'],
                roboto: ['Roboto', 'sans-serif'],
                poppins: ['Poppins', 'sans-serif'],
                jetbrains: ["JetBrains Mono", "sans-serif"],
                body: ['Roboto', 'sans-serif']
            },
            minWidth: {
                56: '14rem',
                60: '15rem',
                64: '16rem',
                68: '17rem',
                72: '18rem'
            },
            maxWidth: {
                '1/12': '08.333334%',
                '2/12': '16.666667%',
                '3/12': '25%',
                '4/12': '33.333334%',
                '5/12': '41.666667%',
                '6/12': '50%',
                '7/12': '58.333333%',
                '8/12': '66.666667%',
                '9/12': '75%',
                '10/12': '83.333334%',
                '11/12': '91.666667%'
            }
        }
    }
};