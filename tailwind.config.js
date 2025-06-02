import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            colors: {
                midnightBlue: '#12132A',
                vividPurple: '#9803C4',
                royalBlue: '#3708A2',
                brightMagenta: '#AC02CB',
                deepSkyBlue: '#1845A3',
                navyBlue: '#0F2B63',
                duskPurple: '#292037',
                deepBurgundy: '#211631',
            },
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },
    plugins: [],
    darkMode: "class",
};
