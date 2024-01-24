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
        "solid-sm" : "8px 8px 0px 0px rgba(15,23,42)",
      }
    },
  },
  plugins: [],
}

