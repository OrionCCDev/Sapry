import daisyui from 'daisyui';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                'picto-primary': '#9929fb',
                'picto-primary-dark': '#650fa0',
                'soft-white': '#f0f1f3',
                'soft-dark': '#87909d',
            },
            screens: {
                'xxs': '340px',
                'xs': '363px',
                'xxl': '1320px',
            },
        },
    },
    plugins: [daisyui],
    daisyui: {
        themes: ['light', 'dark', 'cupcake'],
    },
}

