import { useEffect } from "react";
import { useState } from "react";

export const useNews = () => {
  const [news, setNews] = useState([]);
  const [isLoading, setIsLoading] = useState(true);
  const getData = () => {
    // fetch('/grufercan/api/db/news/noticia1.json', {
    fetch("/api/db/news/noticia1.json", {
      headers: {
        "Content-Type": "application/json",
      },
    })
      .then(async (response) => {
        setIsLoading(false);
        return await response.json();
      })
      .then((newsData) => {
        setNews(newsData);
      });
  };

  useEffect(() => {
    getData();
  }, [isLoading]);

  return { news, isLoading };
};
