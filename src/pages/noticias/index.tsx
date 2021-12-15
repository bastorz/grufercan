import React from 'react';
import { ReactChild, ReactFragment, ReactPortal, Key } from 'react';
import { useNews } from '../../services/news/useNews';

const NewsPage = () => {
  const { news, isLoading, addNews } = useNews();

  const submit = async () => {
    try {
      await addNews({ title: 'Nueva noticia', subtitle: 'Subtitulo' });
    } catch (e: any) {
      console.log('ERROR');
    }
  };
  return (
    <div className="flex flex-col w-full">
      <div className="flex flex-grow bg-teal-200">
        <div className="flex flex-col space-y-10">
          {!isLoading &&
            news.length > 0 &&
            news.map((item: any, i: Key) => {
              return (
                <div className="flex flex-col" key={i}>
                  <div className="flex">{item.title}</div>
                  <div className="flex">{item.subtitle}</div>
                </div>
              );
            })}
        </div>
      </div>
      <button className="bg-white" onClick={submit}>
        Add news
      </button>
    </div>
  );
};
export default NewsPage;
