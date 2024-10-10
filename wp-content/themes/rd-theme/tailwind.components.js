const plugin = require("tailwindcss/plugin");

const container_defaults = {
  maxWidth: "100%",
  marginLeft: "auto",
  marginRight: "auto",
  paddingLeft: "1rem",
  paddingRight: "1rem",
};

export const narrowContainer = plugin(({ addComponents, theme, e }) => {
  addComponents({
    ".narrow-container": {
      ...container_defaults,
      ...{
        "@screen sm": {
          maxWidth: theme("containers.sm"),
        },
        "@screen md": {
          maxWidth: theme("containers.md"),
        },
      },
    },
  });
});

export const smallContainer = plugin(({ addComponents, theme, e }) => {
  addComponents({
    ".small-container": {
      ...container_defaults,
      ...{
        "@screen sm": {
          maxWidth: theme("containers.sm"),
        },
        "@screen md": {
          maxWidth: theme("containers.md"),
        },
        "@screen lg": {
          maxWidth: theme("containers.lg"),
        },
      },
    },
  });
});

export const mediumContainer = plugin(({ addComponents, theme, e }) => {
  addComponents({
    ".medium-container": {
      ...container_defaults,
      ...{
        "@screen sm": {
          maxWidth: theme("containers.sm"),
        },
        "@screen md": {
          maxWidth: theme("containers.md"),
        },
        "@screen lg": {
          maxWidth: theme("containers.lg"),
        },
        "@screen xl": {
          maxWidth: theme("containers.xl"),
        },
      },
    },
  });
});
