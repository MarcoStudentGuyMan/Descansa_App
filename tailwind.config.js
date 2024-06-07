/** @type {import('tailwindcss').Config} */
export default {
  content: ["./resources/views/**/*.blade.php"],
  theme: {
      extend: {},
      fontFamily: {
          museo: ["MuseoModerno", "sans-serif"],
          inter: ["Inter", "sans-serif"],
      },
  },
  plugins: [],
};
