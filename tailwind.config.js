const plugin = require("tailwindcss/plugin");

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    darkMode: ['class', '[data-mode="dark"]'],
    theme: {
        extend: {
            colors: {
                dark: "#0b0c1b",
                semi_dark: "#1a1b2e",
            },
            spacing: {
                16: "4rem",
                17: "4.25rem",
                18: "4.50rem",
                19: "4.75rem",
                20: "5rem",
            }
        }
    }
};