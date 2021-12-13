import { graphql, useStaticQuery } from "gatsby";

export const useNews = () => {
  const news = useStaticQuery(graphql`
    query GetNews {
      allNewsJson {
        edges {
          node {
            title
            subtitle
          }
        }
      }
    }
  `);

  return { news: news };
};
