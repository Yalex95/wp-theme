/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./*.php","./**/*.php"],
  theme: {
    extend: {
      fontFamily: {
        sans: ['Exo', 'sans-serif'],
      },
      colors:{
        primary:{
          dark: '#1D1E1C',
          DEFAULT: '#1D1E1C',
        },
        green: {
          light: '#63D635',
          DEFAULT: '#63D635',
        },
        green: {
          dark: '#4CAA31',
          DEFAULT: '#4CAA31',
        },
        red: {
          accent: '#E6323B',
          DEFAULT: '#E6323B',
        },
      }
    },
  },
  plugins: [],
}

