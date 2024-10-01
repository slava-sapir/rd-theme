const plugin = require('tailwindcss/plugin')

export const narrowContainer = plugin(
    ({addComponents, theme, e}) => {
        addComponents({
            '.narrow-container': {
                maxWidth: '100%',
                marginLeft: 'auto',
                marginRight: 'auto',
                paddingLeft: '1rem',
                paddingRight: '1rem',
                '@screen sm': {
                    maxWidth: theme('containers.sm'),
                },
                '@screen md': {
                    maxWidth: theme('containers.md'),
                },
            }
        })
    },
);

export const smallContainer = plugin(
    ({addComponents, theme, e}) => {
        addComponents({
            '.small-container': {
                maxWidth: '100%',
                marginLeft: 'auto',
                marginRight: 'auto',
                paddingLeft: '1rem',
                paddingRight: '1rem',
                '@screen sm': {
                    maxWidth: theme('containers.sm'),
                },
                '@screen md': {
                    maxWidth: theme('containers.md'),
                },
                '@screen lg': {
                    maxWidth: theme('containers.lg'),
                }
            }
        })
    },
);