/** @type {import('tailwindcss').Config} */
import container_queries from "@tailwindcss/container-queries";
import forms from "@tailwindcss/forms";
import typography from "@tailwindcss/typography";
import daisyui from "daisyui";

module.exports = {
  content: [
    "./template-parts/*.php",
    "./blocks/**/*.php",
    "./resources/**/*.js",
    "./index.php",
  ],
  theme: {
    // Merge all screens into one definition
    screens: {
      sm: "576px",
      md: "768px",
      lg: "992px",
      xl: "1200px",
      xxl: "1400px", // Added to the main screen config
      xxxl: "1520px", // Added to the main screen config
    },
    colors: {
      white: "#FFFFFF",
      "off-black": "#232323",
      "off-white": "#F1F1F1",
      grey: "#747479",
      "button-grey": "#565656",
      blue: "#28397E",
      "link-blue": "#1E87F0",
      orange: "#F06822",
      green: "#569C40",
    },
    fontFamily: {
      sans: ["neue-haas-grotesk-display", "sans-serif"],
    },
    container: {
      center: true,
      padding: "1rem",
      // You can now inherit from the main screens definition without redefining
      // screens: {
      //     sm:   '540px',
      //     md:   '720px',
      //     lg:   '960px',
      //     xl:   '1140px',
      //     xxl:  '1320px', // Same as before
      //     xxxl: '1440px', // Same as before
      // }
    },
    extend: {
      fontSize: {
        h1: 48 / 16 + "rem",
        h2: 44 / 16 + "rem",
        h3: 36 / 16 + "rem",
        h4: 24 / 16 + "rem",
        h5: 20 / 16 + "rem",
        h6: 18 / 16 + "rem",
        p: 20 / 16 + "rem",
      },
    },
  },
  safelist: ["text-4xl", "text-green/50"],
  plugins: [
    function ({ addBase, theme }) {
      addBase({
        h1: { fontSize: theme("fontSize.h1") },
        h2: { fontSize: theme("fontSize.h2") },
        h3: { fontSize: theme("fontSize.h3") },
        h4: { fontSize: theme("fontSize.h4") },
        h5: { fontSize: theme("fontSize.h5") },
        h6: { fontSize: theme("fontSize.h6") },
        p: { fontSize: theme("fontSize.p") },
      });
    },
    function ({ addComponents }) {
      addComponents({
        ".container": {
          maxWidth: "100%",
          "@screen sm": {
            maxWidth: "540px",
          },
          "@screen md": {
            maxWidth: "720px",
          },
          "@screen lg": {
            maxWidth: "960px",
          },
          "@screen xl": {
            maxWidth: "1140px",
          },
          "@screen xxl": {
            maxWidth: "1320px",
          },
          "@screen xxxl": {
            maxWidth: "1440px",
          },
        },
        ".small-container": {
          maxWidth: "100%",
          marginLeft: "auto",
          marginRight: "auto",
          paddingLeft: "1rem",
          paddingRight: "1rem",
          "@screen sm": {
            maxWidth: "540px",
          },
          "@screen md": {
            maxWidth: "720px",
          },
          "@screen lg": {
            maxWidth: "960px",
          },
        },
        ".narrow-container": {
          maxWidth: "100%",
          marginLeft: "auto",
          marginRight: "auto",
          paddingLeft: "1rem",
          paddingRight: "1rem",
          "@screen sm": {
            maxWidth: "540px",
          },
          "@screen md": {
            maxWidth: "720px",
          },
        },
      });
    },
    container_queries,
    forms,
    typography,
    daisyui,
  ],
};
