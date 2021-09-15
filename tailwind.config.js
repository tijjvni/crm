const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    mode: 'jit',
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
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
              transparent: 'transparent',
              current: 'currentColor',
              primary: {
                light: '#545389',
                DEFAULT: '#272B5c',
                dark: '#000032',
              },
              secondary: {
                light: '#c49837',
                DEFAULT: '#bdc2ff',
                dark: '#9e7419',
              },
              gray: {
                light: '#f3f4f6',
                DEFAULT: '#6b7280',
                dark: '#374151',
              },
              success: {
                light: '#7cfc9c',
                DEFAULT: '#25b849',
                dark: '#015726',
              },
              warning: {
                light: '#f2bb61',
                DEFAULT: '#e8a12e',
                dark: '#694306',
              },
              danger: {
                light: '#fc554c',
                DEFAULT: '#e33b32',
                dark: '#910b04',
              },
            },            
        },
    },


    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
