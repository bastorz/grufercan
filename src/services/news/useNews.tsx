import { useEffect } from 'react';
import { useState } from 'react';

export const useNews = () => {
  const [news, setNews] = useState([]);
  const [isLoading, setIsLoading] = useState(true);
  const getData = () => {
    fetch(`${process.env.GATSBY_BASE_URL}/db/news/noticia1.json`, {
      headers: {
        pragma: 'no-cache',
        'cache-control': 'no-cache',
        'Content-Type': 'application/json',
      },
    })
      .then(async (response) => {
        setIsLoading(false);
        try {
          //if json is empty this will throw an error
          return await response.json();
        } catch (e: any) {
          return [{}];
        }
      })
      .then((newsData) => {
        setNews(newsData);
      });
  };
  const addNews = async ({
    title,
    subtitle,
  }: {
    title: string;
    subtitle: string;
  }): Promise<any> => {
    try {
      await fetch(`${process.env.GATSBY_BASE_URL}/index.php`, {
        method: 'post',
        body: JSON.stringify({ title, subtitle }),
      });
      setIsLoading(true);
    } catch (e: any) {
      return true;
    }
  };

  useEffect(() => {
    getData();
  }, [isLoading]);

  return { news, isLoading, addNews };
};
