const plugin = require('tailwindcss/plugin')
const colors = require('tailwindcss/colors')

module.exports = {
  purge: [
    './twig-views/**/*.twig',
    './src/**/*.html',
    './src/**/*.vue',
    './src/**/*.jsx',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    fontFamily: {
      'sans': ['Rubik', 'Sans-serif']
    },
    extend: {
      colors: {
      },
    },
  },
  variants: {
    extend: {
      borderWidth: ['first', 'last'],
      backgroundColor: ['odd','even'],
    }
  },
  plugins: [
    require('@tailwindcss/forms'),
  ],
}
