/** @type {import('tailwindcss').Config} */
import container_queries from "@tailwindcss/container-queries";
import forms from "@tailwindcss/forms";
import typography from "@tailwindcss/typography";
import daisyui from "daisyui";

module.exports = {
    content: [
        './*.php',
        './template-parts/*.php',
        './resources/**/*.js',
    ],
    theme: {
        screens: {
            sm:   '576px',
            md:   '768px',
            lg:   '992px',
            xl:   '1200px',
            xxl:  '1400px',
            xxxl: '1520px',
        },
        colors: {
            'off-black':   '#232323',
            'off-white':   '#F1F1F1',
            'grey':        '#747479',
            'button-grey': '#565656',
            'blue':        '#28397E',
            'link-blue':   '#1E87F0',
            'orange':      '#F06822',
            'green':       '#569C40',
        },
        fontFamily: {
            sans: ['neue-haas-grotesk-display', 'sans-serif'],
        },
        container: {
            center: true,
            padding: '1rem',
            screens: {
                sm:   '540px',
                md:   '720px',
                lg:   '960px',
                xl:   '1140px',
                xxl:  '1320px',
                xxxl: '1440px',
            }
        },
        extend: {
            fontSize: {
                h1: 'calc(48 / 16)rem',
                h2: 'calc(44 / 16)rem',
                h3: 'calc(36 / 16)rem',
                h4: 'calc(24 / 16)rem',
                h5: 'calc(20 / 16)rem',
                h6: 'calc(18 / 16)rem',
                p:  'calc(20 / 16)rem',
            },
        },
    },
    plugins: [
        function ({ addBase, theme }) {
            addBase({
                h1: { fontSize: theme('fontSize.h1') },
                h2: { fontSize: theme('fontSize.h2') },
                h3: { fontSize: theme('fontSize.h3') },
                h4: { fontSize: theme('fontSize.h4') },
                h5: { fontSize: theme('fontSize.h5') },
                h6: { fontSize: theme('fontSize.h6') },
                p: { fontSize: theme('fontSize.p') },
            });
        },
        container_queries,
        forms,
        typography,
        daisyui,
    ],
}

