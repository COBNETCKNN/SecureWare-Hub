module.exports = {
  content: require('fast-glob').sync([
      './**/*.php'
  ]),
  theme: {
    container: {
      screens: {
        sm: '600px',
        md: '769px',
        lg: '1025px',
        xl: '1460px',
        '2xl': '1460px',
      },
    },
    extend: {
      fontFamily: {
        kanit: ["Kanit", "sans-serif"],
      },
      colors: {
        slate: '#DDE6ED',
    },
    },
  },
  plugins: [],
}