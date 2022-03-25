if (process.env.STAGING && !process.env.MAMP) {
  require("dotenv").config({
    path: `.env.${process.env.NODE_ENV}.staging`,
  });
} else if (process.env.MAMP && !process.env.STAGING) {
  require("dotenv").config({
    path: `.env.${process.env.NODE_ENV}.mamp`,
  });
} else {
  require("dotenv").config({
    path: `.env.${process.env.NODE_ENV}`,
  });
}
module.exports = {
  pathPrefix: "/grufercan/",
  siteMetadata: {
    siteUrl: "https://www.grufercan.com",
    title: "Grufercan",
    description: "Example description",
    author: "medanosol",
    keywords:
      "grufercan, grufercan tenerife, ferreteria, ferreteria tenerife, noticias ferreteria, noticias grufercan",
  },
  plugins: [
    {
      resolve: `gatsby-plugin-typescript`,
      options: {
        isTSX: true, // defaults to false
        jsxPragma: `React`, // defaults to "React"
        allExtensions: true, // defaults to false
      },
    },
    "gatsby-plugin-image",
    {
      resolve: `gatsby-plugin-sharp`,
      options: {
        defaults: {
          formats: [`auto`, `webp`],
          placeholder: `tracedSVG`,
          quality: 50,
          breakpoints: [750, 1080, 1366, 1920],
          backgroundColor: `transparent`,
          tracedSVGOptions: {},
          blurredOptions: {},
          jpgOptions: {},
          pngOptions: {},
          webpOptions: {},
          avifOptions: {},
        },
      },
    },
    "gatsby-transformer-sharp",
    "gatsby-plugin-postcss",
    "gatsby-plugin-react-helmet",
    {
      resolve: "gatsby-plugin-manifest",
      options: {
        icon: "src/images/logo-md.jpg",
      },
    },
    "gatsby-plugin-mdx",
    {
      resolve: "gatsby-source-filesystem",
      options: {
        name: "pages",
        path: "./src/pages/",
      },
      __key: "pages",
    },
    // 'gatsby-transformer-json',
    // {
    //   resolve: 'gatsby-source-filesystem',
    //   options: {
    //     name: 'news',
    //     path: `${__dirname}/api_dev/db/news/`,
    //   },
    // },
    {
      resolve: "gatsby-plugin-htaccess",
      options: {
        RewriteBase: true,
      },
    },
    // {
    //   resolve: `gatsby-plugin-htaccess-redirects`,
    //   options: {
    //     prefix: "<IfModule mod_rewrite.c>\nRewriteEngine On",
    //     suffix: "</IfModule>",
    //   },
    // },
  ],
};
