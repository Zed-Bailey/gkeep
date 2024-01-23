/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      boxShadow: {
        "solid-sm" : "2px 3px 0px 0px rgba(16,11,51)",
      }
    },
  },
  plugins: [],
}

