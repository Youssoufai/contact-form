/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    colors: {
      'lightGreen': 'hsl(148,38%,91%)',
      'mediumGreen': 'hsl(169,82%,27%)',
      'red': 'hsl(0,66%,54%)',
      'white': 'hsl(0, 0%, 100%)',
      'mediumGray': 'hsl(186, 15%, 59%)',
      'darkGray': ' hsl(187, 24%, 22%)',
    },
    extend: {},
  },
  plugins: [],
}

