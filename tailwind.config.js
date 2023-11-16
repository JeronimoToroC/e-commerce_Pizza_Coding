import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        fontFamily: {
            'roboto': ['Roboto'],
            'montserrat': ['Montserrat'],
        },
        colors: {
            transparent: 'transparent',
            current: 'currentColor',
            'black': '#000000',
            'white': '#ffffff',
            'green': {
                '50': '#f6faf3',
                '100': '#e9f5e3',
                '200': '#d3eac8',
                '300': '#afd89d',
                '400': '#82bd69',
                '500': '#61a146',
                '600': '#4c8435',
                '700': '#3d692c',
                '800': '#345427',
                '900': '#2b4522',
                '950': '#13250e',
            },
            'yellow': {
                '50': '#fff7ed',
                '100': '#ffecd5',
                '200': '#fed9aa',
                '300': '#fdc074',
                '400': '#fba63c',
                '500': '#f99416',
                '600': '#ea870c',
                '700': '#c2710c',
                '800': '#9a5e12',
                '900': '#7c4d12',
                '950': '#432807',
            },
            'blue': {
                '50': '#eafeff',
                '100': '#cafbff',
                '200': '#9cf4ff',
                '300': '#58eaff',
                '400': '#0cd5ff',
                '500': '#00b8ea',
                '600': '#0091c4',
                '700': '#00739e',
                '800': '#0b5c7f',
                '900': '#0e4d6b',
                '950': '#011e2d',
            },
            'red': {
                '50': '#fdf4f3',
                '100': '#fde6e3',
                '200': '#fcd1cc',
                '300': '#f8b1a9',
                '400': '#f28377',
                '500': '#ea6d5f',
                '600': '#d43f2e',
                '700': '#b23123',
                '800': '#932c21',
                '900': '#7b2a21',
                '950': '#42120d',
            },
            'gray': {
                '50': '#f6f6f6',
                '100': '#e7e7e7',
                '200': '#d1d1d1',
                '300': '#b0b0b0',
                '400': '#888888',
                '500': '#6d6d6d',
                '600': '#5d5d5d',
                '700': '#4f4f4f',
                '800': '#454545',
                '900': '#3d3d3d',
                '950': '#2e2e2e',
            },
            // ...
        },
    },

    plugins: [forms, typography],
};
