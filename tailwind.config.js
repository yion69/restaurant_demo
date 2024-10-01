/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./*.{html,js,php}", "./pages/*/*.{html,js,php}"],
  theme: {
    extend: {
      fontFamily: {
        'note': 'notes',
        'golden': 'GoldenState',
        'front': 'FrontPage',
        'fornire': 'Fornire',
        'newsweekly': 'Newsweekly',
        'monsieur': "Monsieur"
      }
    }
  },
  plugins: [],
}

