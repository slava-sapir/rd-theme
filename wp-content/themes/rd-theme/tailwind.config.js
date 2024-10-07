/** @type {import('tailwindcss').Config} */
import container_queries from "@tailwindcss/container-queries";
import forms from "@tailwindcss/forms";
import typography from "@tailwindcss/typography";
import daisyui from "daisyui";

import {smallContainer, narrowContainer} from "./tailwind.components";

const base_font_size = 16;
const breakpoints = {
    'xs': '0px',
    'sm': '576px',
    'md': '720px',
    'lg': '960px',
    'xl': '1200px',
    '2xl': '1400px',
    '3xl': '1520px'
}

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
      sm: breakpoints.sm,
      md: breakpoints.md,
      lg: breakpoints.lg,
      xl: breakpoints.xl,
      "2xl": breakpoints["2xl"],
      "3xl": breakpoints["3xl"],
    },
    colors: {
      white: "#FFFFFF",
      "off-black": "#232323",
      "off-white": "#F1F1F1",
      grey: "#747479",
      "light-grey": "#E8E8E8",
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
    },
    extend: {
      fontSize: {
        h1: 48 / base_font_size + "rem",
        h2: 44 / base_font_size + "rem",
        h3: 36 / base_font_size + "rem",
        h4: 24 / base_font_size + "rem",
        h5: 20 / base_font_size + "rem",
        h6: 18 / base_font_size + "rem",
        p: 15 / base_font_size + "rem",
      },
      containers: {
        sm: breakpoints.sm,
        md: breakpoints.md,
        lg: breakpoints.lg,
        xl: breakpoints.xl,
        "2xl": breakpoints["2xl"],
        "3xl": breakpoints["3xl"],
      },
      backgroundImage: {
        "custom-gradient-blue":
          "linear-gradient(0deg, rgba(22, 73, 127, 0.90) 0%, rgba(22, 73, 127, 0.90) 100%)",
        "custom-gradient-dark":
          "linear-gradient(0deg, rgba(58, 58, 56, 0.90) 0%, rgba(58, 58, 56, 0.90) 100%)",
      },
    },
  },
  safelist: [
    "small-container",
    "narrow-container",
    "text-4xl",
    "text-green/50",
    "gap-x-5",
    "gap-x-[50px]",
    "gap-x-[100px]",
    "col-span-3",
    "col-span-4",
    "col-span-6",
    "col-span-9",
    "bg-custom-gradient-blue",
    "bg-custom-gradient-dark",
  ],
  plugins: [
    // function ({addBase, theme}) {
    //     addBase({
    //         h1: {fontSize: theme('fontSize.h1')},
    //         h2: {fontSize: theme('fontSize.h2')},
    //         h3: {fontSize: theme('fontSize.h3')},
    //         h4: {fontSize: theme('fontSize.h4')},
    //         h5: {fontSize: theme('fontSize.h5')},
    //         h6: {fontSize: theme('fontSize.h6')},
    //         p: {fontSize: theme('fontSize.p')},
    //     });
    // },
    smallContainer,
    narrowContainer,
    container_queries,
    forms,
    typography,
    daisyui,
  ],
};
