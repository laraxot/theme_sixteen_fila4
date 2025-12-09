<<<<<<< HEAD
import { defineConfig } from 'vite';
import laravel, { refreshPaths } from 'laravel-vite-plugin'
import path from 'path';
import tailwindcss from '@tailwindcss/vite'

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
=======
//const dotenvExpand = require('dotenv-expand');
//dotenvExpand(
//	require('dotenv').config({ path: '../../.env' /*, debug: true*/ }),
//);

import { defineConfig } from 'vite';
import laravel, { refreshPaths } from 'laravel-vite-plugin'



export default defineConfig({
    build: {
        //outDir: '../../../public_html/build/ewall',
        outDir: './public',
        emptyOutDir: false,
        manifest: 'manifest.json',
        //rollupOptions: {
        //    output: {
        //        entryFileNames: `assets/[name].js`,
        //        chunkFileNames: `assets/[name].js`,
        //        assetFileNames: `assets/[name].[ext]`
        //    }
        //}
    },
    ssr: {
        noExternal: ['chart.js/**']
    },
    plugins: [
        laravel({
            publicDirectory: '../../../public_html/',
            // buildDirectory: 'assets/',
            input: [
                //__dirname + '/resources/sass/app.scss',
                //__dirname + '/resources/scss/app-mix.scss',
                __dirname + '/resources/css/app.css',
                __dirname + '/resources/js/app.js',
                // Aggiungiamo i CSS di Filament
                //__dirname + '/vendor/filament/**/*.css',
>>>>>>> a3dca9d (.)
            ],
            refresh: [
                ...refreshPaths,
                'app/Livewire/**',
            ],
        }),
<<<<<<< HEAD
        tailwindcss(),
    ],
    build: {
        outDir: './public',
        emptyOutDir: false,
        manifest: 'manifest.json',
        rollupOptions: {
            output: {
                manualChunks: {
                    // Core vendor libraries
                    'vendor-core': ['alpinejs', 'livewire'],
                    // UI libraries
                    'vendor-ui': ['bootstrap-italia'],
                    // Chart libraries
                    'vendor-charts': ['chart.js'],
                    // Map libraries
                    'vendor-maps': ['leaflet'],
                    // Utility libraries
                    'vendor-utils': ['lodash', 'moment']
                },
                // Optimize chunk names
                chunkFileNames: (chunkInfo) => {
                    const facadeModuleId = chunkInfo.facadeModuleId ? chunkInfo.facadeModuleId.split('/').pop().replace('.js', '') : 'chunk';
                    return `js/[name]-[hash].js`;
                },
                entryFileNames: 'js/[name]-[hash].js',
                assetFileNames: (assetInfo) => {
                    const info = assetInfo.name.split('.');
                    const ext = info[info.length - 1];
                    if (/\.(css)$/.test(assetInfo.name)) {
                        return `css/[name]-[hash].${ext}`;
                    }
                    if (/\.(png|jpe?g|gif|svg|webp|ico)$/.test(assetInfo.name)) {
                        return `images/[name]-[hash].${ext}`;
                    }
                    if (/\.(woff2?|eot|ttf|otf)$/.test(assetInfo.name)) {
                        return `fonts/[name]-[hash].${ext}`;
                    }
                    return `assets/[name]-[hash].${ext}`;
                }
            }
        },
        // Minification settings
        minify: 'terser',
        terserOptions: {
            compress: {
                drop_console: true,
                drop_debugger: true,
                pure_funcs: ['console.log', 'console.info', 'console.debug', 'console.warn']
            },
            mangle: {
                safari10: true
            }
        },
        // Source maps for production debugging
        sourcemap: false,
        // Target modern browsers
        target: 'es2015',
        // CSS code splitting
        cssCodeSplit: true,
        // Asset inlining threshold
        assetsInlineLimit: 4096
    },
    // Development server settings
    server: {
        hmr: {
            host: 'localhost'
        }
    },
    // Optimize dependencies
    optimizeDeps: {
        include: [
            'alpinejs',
            'livewire',
            'bootstrap-italia',
            'chart.js',
            'leaflet',
            'lodash',
            'moment'
        ]
    },
});
=======
    ],
    resolve: {
        alias: {
            '@': '/resources',
        },
    },
});


/*
import collectModuleAssetsPaths from './../../vite-module-loader.js';

async function getConfig() {
    const paths = [
        'resources/css/app.css',
        'resources/js/app.js',
    ];
    const allPaths = await collectModuleAssetsPaths(paths, 'Modules');

    return defineConfig({
        plugins: [
            laravel({
                input: allPaths,
                refresh: true,
            })
        ]
    });
}

export default getConfig();
*/

/*
var $from = './resources/dist';
var $to = '../../../public_html/themes/Five/dist';
console.log('from :' + $from);
console.log('to :' + $to);

//mix.copyDirectory($from, $to);
viteStaticCopy({
    targets: [
        {
            src: $from,
            dest: $to
        }
    ]
})
*/
>>>>>>> a3dca9d (.)
