/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./index.html",
    "./src/**/*.{js,ts,jsx,tsx}",
  ],
  theme: {
    extend: {
      fontFamily: {
        sans: ['Plus Jakarta Sans', 'Inter', 'sans-serif'],
        mono: ['JetBrains Mono', 'monospace'],
      },
      colors: {
        rose: {
          950: '#140C13',
          900: '#1E121C',
          800: '#2F192B',
          700: '#4F2145',
          600: '#83286b',
          500: '#ec4899',
          400: '#f43f5e',
          300: '#fda4af',
        }
      }
    },
  },
  plugins: [],
}
