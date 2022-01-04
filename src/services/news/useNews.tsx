import { useEffect } from 'react';
import { useState } from 'react';
import { useTranslation } from 'react-i18next';
import Cookies from 'universal-cookie/es6';
import { handleErrors } from '../utils';
export const useNews = () => {
  const { i18n } = useTranslation();
  const getLanguage = () => i18n.language || window.localStorage.i18nextLng;

  const [news, setNews] = useState<
    {
      id: string;
      title: string;
      subtitle: string;
      imgUrl: string;
      date: string;
    }[]
  >([]);
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
        const dataArray:
          | any[]
          | ((
              prevState: {
                id: string;
                title: string;
                subtitle: string;
                imgUrl: string;
                date: string;
              }[],
            ) => {
              id: string;
              title: string;
              subtitle: string;
              imgUrl: string;
              date: string;
            }[]) = [];
        newsData.forEach((data: { noticiasEn: any; noticiasEs: any }) => {
          if (getLanguage() === 'en') {
            if (data.noticiasEn) {
              const noticiasEn = data?.noticiasEn[0];
              delete data.noticiasEn;
              delete data.noticiasEs;
              dataArray.push({ ...data, ...noticiasEn });
            } else {
              const noticiasEs = data?.noticiasEs[0];
              delete data.noticiasEs;
              dataArray.push({ ...data, ...noticiasEs });
            }
          } else {
            if (data.noticiasEs) {
              const noticiasEs = data?.noticiasEs[0];
              delete data.noticiasEs;
              delete data.noticiasEn;
              dataArray.push({ ...data, ...noticiasEs });
            }
          }
        });
        setNews(dataArray);
      });
  };
  const addNews = async ({
    title,
    subtitle,
    image,
    date,
  }: {
    title: string;
    subtitle: string;
    image: any;
    date: any;
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
        body: JSON.stringify({ title, subtitle, imgUrl: image.name, date }),
      });
      setIsLoading(true);
      return true;
    } catch (e: any) {
      console.log('ERROR: ', e.message);
      return false;
    }
  };

  useEffect(() => {
    setNews([]);
    getData();
  }, [i18n.language]);
  useEffect(() => {
    getData();
  }, [isLoading, i18n.language]);

  return { news, isLoading, addNews };
};
