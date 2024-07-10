/** @type {import('tailwindcss').Config} */
export default {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
    ],
    theme: {
      extend: {
        colors: {
          'custom-azulito': '#031749',
          'custom-claro': '#404B62',
        },
      },
    },
    plugins: [],
  }