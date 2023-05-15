const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
    theme: {
        extend: {
            fontFamily: {
                sans: ['Inter var', ...defaultTheme.fontFamily.sans],
            },
            dropShadow: {
                'light-sm': '0 2px 4px rgba(255, 255, 255, 0.3)',
                'light-md': '0 4px 6px rgba(255, 255, 255, 0.3)',
                'light': '0 4px 6px rgba(255, 255, 255, 0.3)',
                'light-lg': '0 6px 8px rgba(255, 255, 255, 0.3)',
                'dark-sm': '0 2px 4px rgba(0, 0, 0, 0.4)',
                'dark-md': '0 4px 6px rgba(0, 0, 0, 0.4)',
                'dark': '0 4px 6px rgba(0, 0, 0, 0.4)',
                'dark-lg': '0 6px 8px rgba(0, 0, 0, 0.4)',
              }
        },
    },
    variants: {
        extend: {
            backgroundColor: ['active'],
        }
    },
    content: [
        './app/**/*.php',
        './resources/**/*.html',
        './resources/**/*.js',
        './resources/**/*.jsx',
        './resources/**/*.ts',
        './resources/**/*.tsx',
        './resources/**/*.php',
        './resources/**/*.vue',
        './resources/**/*.twig',
    ],
    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
    ],
}
