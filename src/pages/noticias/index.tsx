import React from 'react';
import { ReactChild, ReactFragment, ReactPortal, Key } from 'react';
import { useNews } from '../../services/news/useNews';

const NewsPage = () => {
  const { news } = useNews();

  return (
    <div className="flex flex-grow bg-teal-200">
      <div className="flex flex-col space-y-10">
        {news &&
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
  );
};
export default NewsPage;
