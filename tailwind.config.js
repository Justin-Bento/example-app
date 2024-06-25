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
        day: "#f4f9f9",
        night: "#141819",
        easternblue: {
          50: "#f1fafa",
          100: "#dbf1f2",
          200: "#aedfe2",
          300: "#8bcfd5",
          400: "#54b3bc",
          500: "#3997a1",
          600: "#327b88",
          700: "#2e6570",
          800: "#2d545d",
          900: "#294750",
          950: "#172e35",
        },
      },
    },
  },
  plugins: [],
}

