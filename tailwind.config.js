/** @type {import('tailwindcss').Config} config */
const config = {
  content: ['./index.php', './app/**/*.php', './resources/**/*.{php,vue,js}'],
  theme: {
    extend: {
      colors: {}, // Extend Tailwind's default colors
      screens: {
        'woo-md': '769px',
        // => @media (min-width: 769px) { to correct woocommerce bug }
      },
    },
  },
  plugins: [],
};

export default config;
