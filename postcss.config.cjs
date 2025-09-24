module.exports = {
    plugins: {
<<<<<<< HEAD
=======
        'tailwindcss/nesting': 'postcss-nesting',
>>>>>>> a3dca9d (.)
        'postcss-import': {
            resolve(id) {
                return require.resolve(id);
            },
        },
<<<<<<< HEAD
        '@tailwindcss/postcss': {},
=======
        tailwindcss: {},
>>>>>>> a3dca9d (.)
        autoprefixer: {},
    },
}
