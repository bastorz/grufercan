import { graphql, useStaticQuery } from 'gatsby';
import { Helmet } from 'react-helmet';
import React from 'react';
interface ISEO {
  description?: string;
  lang?: string;
  meta?: any[];
  title: string;
}
export const SEO: React.FC<ISEO> = ({
  description = '',
  lang = 'es',
  meta = [],
  title,
}) => {
  const { site } = useStaticQuery(
    graphql`
      query {
        site {
          siteMetadata {
            title
            description
            author
            keywords
          }
        }
      }
    `,
  );
  const keywords = site.siteMetadata.keywords;
  const metaDescription = description || site.siteMetadata.description;
  const defaultTitle = site.siteMetadata?.title;
  return (
    <Helmet
      htmlAttributes={{
        lang,
      }}
      title={title}
      titleTemplate={defaultTitle ? `${defaultTitle} - %s` : undefined}
      meta={[
        {
          name: `description`,
          content: metaDescription,
        },
        {
          name: `keywords`,
          content: keywords,
        },
        {
          property: `og:title`,
          content: title,
        },
        {
          property: `og:description`,
          content: metaDescription,
        },
        {
          property: `og:type`,
          content: `website`,
        },
        // {
        //   name: `twitter:card`,
        //   content: `summary`,
        // },
        // {
        //   name: `twitter:creator`,
        //   content: site.siteMetadata?.author || ``,
        // },
        // {
        //   name: `twitter:title`,
        //   content: title,
        // },
        // {
        //   name: `twitter:description`,
        //   content: metaDescription,
        // },
      ].concat(meta)}
    />
  );
};
