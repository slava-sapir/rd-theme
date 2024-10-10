export default [
  {
    pattern: /(small|narrow|medium)-container/,
  },
  "text-4xl",
  "text-green/50",
  {
    pattern: /gap-x-(3|5|50px|100px)/,
    variants: ["sm", "md", "lg", "xl", "2xl", "3xl"],
  },
  {
    pattern: /col-span-(3|4|6|9)/,
    variants: ["sm", "md", "lg", "xl", "2xl", "3xl"],
  },
  {
    pattern: /bg-custom-gradient-(blue|dark)/,
  },
];