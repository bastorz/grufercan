import { useEffect } from 'react';
import { useState } from 'react';
import { handleErrors } from '../utils';
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
          return [];
        }
      })
      .then((newsData) => {
        setNews(newsData);
      });
  };
  const addNews = async ({
    title,
    subtitle,
    image,
  }: {
    title: string;
    subtitle: string;
    image: any;
  }): Promise<any> => {
    try {
      const formData = new FormData();
      formData.append('file', image);
      await fetch(`${process.env.GATSBY_BASE_URL}/imageUploader.php`, {
        method: 'post',
        body: formData,
      }).then(handleErrors);
      await fetch(`${process.env.GATSBY_BASE_URL}/index.php`, {
        method: 'post',
        body: JSON.stringify({ title, subtitle, imgUrl: image.name }),
      });
      setIsLoading(true);
      return true;
    } catch (e: any) {
      console.log('ERROR: ', e.message);
      return false;
    }
  };

  useEffect(() => {
    getData();
  }, [isLoading]);

  return { news, isLoading, addNews };
};
