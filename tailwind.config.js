/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./src/**/*.{js,ts,jsx,tsx,mdx}",
    "./app/**/*.{js,ts,jsx,tsx,mdx}",
    "./pages/**/*.{js,ts,jsx,tsx,mdx}",
    "./components/**/*.{js,ts,jsx,tsx,mdx}",
  ],
  darkMode: 'class',
  theme: {
    extend: {
      colors: {
        dark: {
          bg: '#080b11',
          surface: '#0f172a',
          card: '#1e293b',
          border: '#334155',
        },
        cyan: {
          accent: '#06b6d4',
          glow: '#22d3ee',
        },
        emerald: {
          accent: '#10b981',
        }
      },
      fontFamily: {
        sans: ['Inter', 'sans-serif'],
      },
      backgroundImage: {
        'hero-gradient': 'radial-gradient(ellipse 80% 80% at 50% -20%, rgba(120,119,198,0.15), rgba(255,255,255,0))',
        'card-gradient': 'linear-gradient(135deg, rgba(30, 41, 59, 0.7) 0%, rgba(15, 23, 42, 0.8) 100%)',
        'glow-gradient': 'radial-gradient(circle at center, rgba(6, 182, 212, 0.15) 0%, transparent 70%)',
      }
    },
  },
  plugins: [],
};
