import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms'
import typography from '@tailwindcss/typography'
import daisyui from 'daisyui'
import colors from 'tailwindcss/colors';

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
    theme: {
        extend: {
            fontFamily: {
                sans: ['Inter var', ...defaultTheme.fontFamily.sans],
            },
            colors: {
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
                },
            },
        },
    },
    plugins: [
        forms,
        typography,
        daisyui,
        require("flowbite/plugin"),
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
    ],
    daisyui: {
        themes: ['light', 'dark'],
    },
}