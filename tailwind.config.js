const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
    darkMode: 'class',
    theme: {
        extend: {
            colors: {
                'bg-light': '#F9F9F9',
                'bg-dark': '#18181b',
                'primary': '#016C9E',
                'highlight': '#9CF1FF',
                'white': '#ffffff',
                'black': '#000000',
                'badge-bg': '#E0F2FF',
                'badge-text': '#0C4A6E',
                'heading': '#222222',
                'paragraph': '#71717A',
                'zinc-500': '#71717A',
                'zinc-700': '#3F3F46',
                'sky-100': '#E0F2FE',
                'sky-900': '#0C4A6E',
                'text-dark': '#222222',
            },
            fontFamily: {
                'inter-tight': ['Inter Tight', 'sans-serif'],
                'switzer': ['Switzer', 'sans-serif'],
                'general-sans': ['General Sans Variable', 'sans-serif'],
            },
            spacing: {
                '32.33': '32.33px',
                '439.33': '439.33px',
                '1440': '1440px',
                '100': '100px',
                '164': '164px',
                '588': '588px',
                '331': '331px',
            },
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
        './resources/views/**/*.blade.php',
    ],
    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
    ],
}
