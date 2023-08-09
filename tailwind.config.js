/** @type {import('tailwindcss').Config} */

const colors = require('tailwindcss/colors')

module.exports = {
  content: [
  "./www/**.{html,css,js,php}",
  "./src/**."
],
  theme: {
    extend: {},
  },
  plugins: [],
}