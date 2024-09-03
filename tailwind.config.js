// const autoprefixer = require("autoprefixer");

/** @type {import('tailwindcss').Config} */
export default {
  content: ["./resources/**/*.blade.php",
            './resources/js/**/*.js',
            './resources/css/**/*.css',
  ],
  theme: {
    fontFamily: {
      body: ["Bebas Neue", "sans-serif"],
    },   
    extend: {  
            colors: {
                blue: "#0147FF",
                customBlack: "#282828", 
                white: "#ffffff",  
                bgWhite: "#F7F7F7",
            },
            screens: {
                mobile: '380px', 
                md: "460px",
                tablet: "768px",
                laptop: "1024px",
                hd: "1200px", 
                full: "1600px",
                "3xl": "1920px",
            },  
        },
  },
  plugins: [
    function({ addUtilities }) {
      addUtilities({
        '.container': {
          'max-width': '1300px',
          'margin': '0 auto',
        },  
      })
    }, 
  ],
}