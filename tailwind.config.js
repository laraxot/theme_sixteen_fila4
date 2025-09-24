import defaultTheme from 'tailwindcss/defaultTheme';
<<<<<<< HEAD
=======
import preset from "./vendor/filament/support/tailwind.config.preset";
>>>>>>> a3dca9d (.)
import forms from '@tailwindcss/forms'
import typography from '@tailwindcss/typography'
import daisyui from 'daisyui'
import colors from 'tailwindcss/colors';

<<<<<<< HEAD
/** @type {import('tailwindcss').Config} */
export default {
    darkMode: 'class',
    content: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.css',
        './vendor/filament/**/*.blade.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
        './assets/**/*.js',
        './assets/**/*.css',
        '../../app/Filament/**/*.php',
        '../../resources/views/**/*.blade.php',
        '../../vendor/filament/**/*.blade.php',
        '../../Modules/**/Filament/**/*.php',
        '../../Modules/**/resources/views/**/*.blade.php',
        '../../storage/framework/views/*.php',
        '../../vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './node_modules/flowbite/**/*.js',
        '../../../public_html/vendor/**/*.blade.php',
        './app/Filament/**/*.php',
        './resources/views/filament/**/*.blade.php',
        './vendor/filament/**/*.blade.php',
    ],
=======
module.exports = {
     presets: [preset],
    darkMode: 'class',
>>>>>>> a3dca9d (.)
    theme: {
        extend: {
            fontFamily: {
                sans: ['Inter var', ...defaultTheme.fontFamily.sans],
            },
            colors: {
<<<<<<< HEAD
                // Colori AGID (Agenzia per l'Italia Digitale)
                'italia-blue': {
                    50: '#e6f2ff',
                    100: '#b3d9ff',
                    200: '#80bfff',
                    300: '#4da6ff',
                    400: '#1a8cff',
                    500: '#0066CC', // Primary blue AGID
                    600: '#0052a3',
                    700: '#003d7a',
                    800: '#002952',
                    900: '#001429',
                },
                'italia-green': {
                    50: '#e6f7f0',
                    100: '#b3e6d1',
                    200: '#80d5b2',
                    300: '#4dc493',
                    400: '#1ab374',
                    500: '#00B373', // Success green AGID
                    600: '#008f5c',
                    700: '#006b45',
                    800: '#00472e',
                    900: '#002317',
                },
                'italia-red': {
                    50: '#fce8ea',
                    100: '#f7b3b8',
                    200: '#f27e86',
                    300: '#ed4954',
                    400: '#e81422',
                    500: '#D9364F', // Error red AGID
                    600: '#ae2b3f',
                    700: '#83202f',
                    800: '#58151f',
                    900: '#2d0a0f',
                },
                'italia-yellow': {
                    50: '#fff8e6',
                    100: '#ffecb3',
                    200: '#ffe080',
                    300: '#ffd44d',
                    400: '#ffc81a',
                    500: '#F5A623', // Warning yellow AGID
                    600: '#c4851c',
                    700: '#936315',
                    800: '#62420e',
                    900: '#312107',
=======
                // Colori Bootstrap Italia
                'italia-blue': {
                    50: '#eff6ff',
                    100: '#dbeafe', 
                    200: '#bfdbfe',
                    300: '#93c5fd',
                    400: '#60a5fa',
                    500: '#0066CC', // Primary blue Bootstrap Italia
                    600: '#0059B3',
                    700: '#004C99',
                    800: '#003F80',
                    900: '#003366',
                },
                'italia-green': {
                    50: '#f0fdf4',
                    100: '#dcfce7',
                    200: '#bbf7d0',
                    300: '#86efac',
                    400: '#4ade80',
                    500: '#00B373', // Success green Bootstrap Italia
                    600: '#009959',
                    700: '#00804D',
                    800: '#006640',
                    900: '#004D33',
                },
                'italia-red': {
                    50: '#fef2f2',
                    100: '#fee2e2',
                    200: '#fecaca',
                    300: '#fca5a5',
                    400: '#f87171',
                    500: '#D9364F', // Error red Bootstrap Italia
                    600: '#CC1F38',
                    700: '#B31829',
                    800: '#99141F',
                    900: '#800F17',
                },
                'italia-yellow': {
                    50: '#fffbeb',
                    100: '#fef3c7',
                    200: '#fde68a',
                    300: '#fcd34d',
                    400: '#fbbf24',
                    500: '#FFB400', // Warning yellow Bootstrap Italia
                    600: '#E6A200',
                    700: '#CC9100',
                    800: '#B37F00',
                    900: '#996D00',
                },
                primary: {
                    50: '#eff6ff',
                    100: '#dbeafe',
                    200: '#bfdbfe', 
                    300: '#93c5fd',
                    400: '#60a5fa',
                    500: '#0066CC',
                    600: '#0059B3',
                    700: '#004C99',
                    800: '#003F80',
                    900: '#003366',
                },
                secondary: colors.gray,
                success: {
                    50: '#f0fdf4',
                    100: '#dcfce7',
                    200: '#bbf7d0',
                    300: '#86efac',
                    400: '#4ade80',
                    500: '#00B373',
                    600: '#009959',
                    700: '#00804D',
                    800: '#006640',
                    900: '#004D33',
                },
                warning: {
                    50: '#fffbeb',
                    100: '#fef3c7',
                    200: '#fde68a',
                    300: '#fcd34d',
                    400: '#fbbf24',
                    500: '#FFB400',
                    600: '#E6A200',
                    700: '#CC9100',
                    800: '#B37F00',
                    900: '#996D00',
                },
                danger: {
                    50: '#fef2f2',
                    100: '#fee2e2',
                    200: '#fecaca',
                    300: '#fca5a5',
                    400: '#f87171',
                    500: '#D9364F',
                    600: '#CC1F38',
                    700: '#B31829',
                    800: '#99141F',
                    900: '#800F17',
>>>>>>> a3dca9d (.)
                },
            },
        },
    },
<<<<<<< HEAD
=======
    variants: {
        extend: {
            backgroundColor: ['active'],
        }
    },

    content: [
        '../../app/Filament/**/*.php',
        '../../resources/views/**/*.blade.php',
        '../../vendor/filament/**/*.blade.php',
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./assets/**/*.js",
        "./assets/**/*.css",
        "./resources/views/**/*.blade.php",
        "./resources/views/filament/**/*.blade.php",
        "./app/Filament/**/*.php",
        "./vendor/filament/**/*.blade.php",
        "../../app/Filament/**/*.php",
        "../../resources/views/**/*.blade.php",
        "../../vendor/filament/**/*.blade.php",
        "../../Modules/**/Filament/**/*.php",
        "../../Modules/**/resources/views/**/*.blade.php",
        "../../storage/framework/views/*.php",
        "../../vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "../../Themes/**/resources/views/**/*.blade.php",
        "./node_modules/flowbite/**/*.js",
        "../../../public_html/vendor/**/*.blade.php",
        "../../../public_html/vendor/**/*.blade.php",
        "./node_modules/flowbite/**/*.js",
        "./resources/views/**/*.blade.php",  //----------- e' un tema !!!!
        "../../Themes/**/resources/views/**/*.blade.php",  //----------- e' un tema !!!!
        "../../../public_html/vendor/**/*.blade.php",
        "../../Themes/**/resources/views/**/*.blade.php",
        "./node_modules/flowbite/**/*.js",
        "./resources/views/**/*.blade.php",  //----------- e' un tema !!!!
        "../../Themes/**/resources/views/**/*.blade.php",  //----------- e' un tema !!!!
        "../../Themes/**/resources/views/**/*.blade.php",
        "./node_modules/flowbite/**/*.js",
        "./resources/views/**/*.blade.php",  //----------- e' un tema !!!!
        "../../Themes/**/resources/views/**/*.blade.php",  //----------- e' un tema !!!!
        "../../../public_html/vendor/**/*.blade.php",
        "../../Themes/**/resources/views/**/*.blade.php",
        "./node_modules/flowbite/**/*.js",
        "./resources/views/**/*.blade.php",  //----------- e' un tema !!!!
        "../../Themes/**/resources/views/**/*.blade.php",  //----------- e' un tema !!!!
        "../../../public_html/vendor/**/*.blade.php",
        "./node_modules/flowbite/**/*.js",
        "./resources/views/**/*.blade.php",  //----------- e' un tema !!!!
        "../../Themes/**/resources/views/**/*.blade.php",  //----------- e' un tema !!!!
        "../../../public_html/vendor/**/*.blade.php",
        "../../Themes/**/resources/views/**/*.blade.php",
        "./node_modules/flowbite/**/*.js",
        "./resources/views/**/*.blade.php",  //----------- e' un tema !!!!
        "../../Themes/**/resources/views/**/*.blade.php",  //----------- e' un tema !!!!
        "../../../public_html/vendor/**/*.blade.php",
    ],
    // Filament preset palette (for compatibility with plugins expecting these keys)
    colors: {
        custom: {
            50: 'rgba(var(--c-50), <alpha-value>)',
            100: 'rgba(var(--c-100), <alpha-value>)',
            200: 'rgba(var(--c-200), <alpha-value>)',
            300: 'rgba(var(--c-300), <alpha-value>)',
            400: 'rgba(var(--c-400), <alpha-value>)',
            500: 'rgba(var(--c-500), <alpha-value>)',
            600: 'rgba(var(--c-600), <alpha-value>)',
            700: 'rgba(var(--c-700), <alpha-value>)',
            800: 'rgba(var(--c-800), <alpha-value>)',
            900: 'rgba(var(--c-900), <alpha-value>)',
            950: 'rgba(var(--c-950), <alpha-value>)',
        },
        danger: {
            50: 'rgba(var(--danger-50), <alpha-value>)',
            100: 'rgba(var(--danger-100), <alpha-value>)',
            200: 'rgba(var(--danger-200), <alpha-value>)',
            300: 'rgba(var(--danger-300), <alpha-value>)',
            400: 'rgba(var(--danger-400), <alpha-value>)',
            500: 'rgba(var(--danger-500), <alpha-value>)',
            600: 'rgba(var(--danger-600), <alpha-value>)',
            700: 'rgba(var(--danger-700), <alpha-value>)',
            800: 'rgba(var(--danger-800), <alpha-value>)',
            900: 'rgba(var(--danger-900), <alpha-value>)',
            950: 'rgba(var(--danger-950), <alpha-value>)',
        },
        gray: {
            50: 'rgba(var(--gray-50), <alpha-value>)',
            100: 'rgba(var(--gray-100), <alpha-value>)',
            200: 'rgba(var(--gray-200), <alpha-value>)',
            300: 'rgba(var(--gray-300), <alpha-value>)',
            400: 'rgba(var(--gray-400), <alpha-value>)',
            500: 'rgba(var(--gray-500), <alpha-value>)',
            600: 'rgba(var(--gray-600), <alpha-value>)',
            700: 'rgba(var(--gray-700), <alpha-value>)',
            800: 'rgba(var(--gray-800), <alpha-value>)',
            900: 'rgba(var(--gray-900), <alpha-value>)',
            950: 'rgba(var(--gray-950), <alpha-value>)',
        },
        info: {
            50: 'rgba(var(--info-50), <alpha-value>)',
            100: 'rgba(var(--info-100), <alpha-value>)',
            200: 'rgba(var(--info-200), <alpha-value>)',
            300: 'rgba(var(--info-300), <alpha-value>)',
            400: 'rgba(var(--info-400), <alpha-value>)',
            500: 'rgba(var(--info-500), <alpha-value>)',
            600: 'rgba(var(--info-600), <alpha-value>)',
            700: 'rgba(var(--info-700), <alpha-value>)',
            800: 'rgba(var(--info-800), <alpha-value>)',
            900: 'rgba(var(--info-900), <alpha-value>)',
            950: 'rgba(var(--info-950), <alpha-value>)',
        },
        primary: {
            50: 'rgba(var(--primary-50), <alpha-value>)',
            100: 'rgba(var(--primary-100), <alpha-value>)',
            200: 'rgba(var(--primary-200), <alpha-value>)',
            300: 'rgba(var(--primary-300), <alpha-value>)',
            400: 'rgba(var(--primary-400), <alpha-value>)',
            500: 'rgba(var(--primary-500), <alpha-value>)',
            600: 'rgba(var(--primary-600), <alpha-value>)',
            700: 'rgba(var(--primary-700), <alpha-value>)',
            800: 'rgba(var(--primary-800), <alpha-value>)',
            900: 'rgba(var(--primary-900), <alpha-value>)',
            950: 'rgba(var(--primary-950), <alpha-value>)',
        },
        success: {
            50: 'rgba(var(--success-50), <alpha-value>)',
            100: 'rgba(var(--success-100), <alpha-value>)',
            200: 'rgba(var(--success-200), <alpha-value>)',
            300: 'rgba(var(--success-300), <alpha-value>)',
            400: 'rgba(var(--success-400), <alpha-value>)',
            500: 'rgba(var(--success-500), <alpha-value>)',
            600: 'rgba(var(--success-600), <alpha-value>)',
            700: 'rgba(var(--success-700), <alpha-value>)',
            800: 'rgba(var(--success-800), <alpha-value>)',
            900: 'rgba(var(--success-900), <alpha-value>)',
            950: 'rgba(var(--success-950), <alpha-value>)',
        },
        warning: {
            50: 'rgba(var(--warning-50), <alpha-value>)',
            100: 'rgba(var(--warning-100), <alpha-value>)',
            200: 'rgba(var(--warning-200), <alpha-value>)',
            300: 'rgba(var(--warning-300), <alpha-value>)',
            400: 'rgba(var(--warning-400), <alpha-value>)',
            500: 'rgba(var(--warning-500), <alpha-value>)',
            600: 'rgba(var(--warning-600), <alpha-value>)',
            700: 'rgba(var(--warning-700), <alpha-value>)',
            800: 'rgba(var(--warning-800), <alpha-value>)',
            900: 'rgba(var(--warning-900), <alpha-value>)',
            950: 'rgba(var(--warning-950), <alpha-value>)',
        },
    },
>>>>>>> a3dca9d (.)
    plugins: [
        forms,
        typography,
        daisyui,
        require("flowbite/plugin"),
<<<<<<< HEAD
        // Plugin personalizzato per Filament 4.x
        function({ addComponents, theme }) {
            addComponents({
                '.filament-button': {
                    '@apply inline-flex items-center justify-center py-2 px-4 font-medium rounded-lg focus:outline-none focus:ring-2 focus:ring-offset-2 transition-colors': {},
                },
                '.filament-button-primary': {
                    '@apply bg-italia-blue-500 text-white hover:bg-italia-blue-600 focus:ring-italia-blue-500': {},
                },
                '.filament-button-success': {
                    '@apply bg-italia-green-500 text-white hover:bg-italia-green-600 focus:ring-italia-green-500': {},
                },
                '.filament-button-warning': {
                    '@apply bg-italia-yellow-500 text-white hover:bg-italia-yellow-600 focus:ring-italia-yellow-500': {},
                },
                '.filament-button-danger': {
                    '@apply bg-italia-red-500 text-white hover:bg-italia-red-600 focus:ring-italia-red-500': {},
                },
                '.filament-input': {
                    '@apply w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-italia-blue-500 focus:border-italia-blue-500': {},
                },
                '.filament-input-error': {
                    '@apply border-italia-red-500 focus:ring-italia-red-500 focus:border-italia-red-500': {},
                },
                '.filament-card': {
                    '@apply bg-white rounded-lg shadow-sm border border-gray-200': {},
                },
                '.filament-modal': {
                    '@apply bg-white rounded-lg shadow-xl border border-gray-200': {},
                },
                '.filament-notification': {
                    '@apply bg-white border border-gray-200 rounded-lg shadow-lg': {},
                },
                '.filament-tooltip': {
                    '@apply absolute bg-gray-900 text-white px-2 py-1 rounded text-sm z-50': {},
                },
            });
        },
=======
>>>>>>> a3dca9d (.)
    ],
    daisyui: {
        themes: ['light', 'dark'],
    },
<<<<<<< HEAD
}
=======
}
>>>>>>> a3dca9d (.)
