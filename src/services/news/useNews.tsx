import { useEffect } from 'react';
import { useState } from 'react';
import Cookies from 'universal-cookie/es6';
import { handleErrors } from '../utils';
export const useNews = () => {
  const [news, setNews] = useState([]);
  const [isLoading, setIsLoading] = useState(true);

  const getData = () => {
    // fetch(`${process.env.GATSBY_BASE_URL}/db/news/noticia1.json`, {
    const cookies = new Cookies();
    const token = cookies.get('gfcbtoken');
    fetch(`http://localhost:8001/api/noticias`, {
      headers: {
        Authorization: 'Bearer ' + token,
        'Content-Type': 'application/json',
        accept: 'application/json',
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
      formData.append('image', image);
      await fetch(`http://localhost:8001/api/upload`, {
        method: 'post',
        body: formData,
      }).then(handleErrors);
      await fetch(`http://localhost:8001/api/noticias`, {
        headers: {
          'Content-Type': 'application/json',
        },
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
