import { graphql, useStaticQuery } from "gatsby";
import { useEffect } from "react";

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

  const getNews = async () => {
    const response = await fetch("/api/db/news/noticia1.json", {
      headers: {
        "Content-Type": "application/json",
      },
    });

    const data = await response.json();

    console.log("data: ", data);
  };

  useEffect(() => {
    getNews();
  }, []);

  return { news: news };
};
