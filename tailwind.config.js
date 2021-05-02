const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    darkMode: 'class',

    purge: [
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                black: {
                    200: '#222',
                    300: '#333',
                    400: '#444',
                    500: '#DDD',
                },
                legacyblue: {
                    50: '#EFF',     // Table.element1
                    100: '#40b3ff', // Table.element1.hover
                    450: '#9DF',    // Table.header
                    600: '#99BBCC', // Background
                    800: '#26ABD7', // Navmenu
                    900: '#39C',    // Header
                },
                legacygreen: '#239A55',
            },
        },
    },

    variants: {
        opacity: ['responsive', 'hover', 'focus', 'disabled'],
    },
};
