import { mdiChevronRightCircleOutline } from '@mdi/js';
import Icon from '@mdi/react';
import { Link } from 'gatsby';
import React, { useEffect, useState } from 'react';
import { Section, useScrollSection } from 'react-scroll-section';
import { useNews } from '../../services/news/useNews';

export const LatestNews: React.FC = () => {
  const { news, isLoading } = useNews();
  const [latestNews, setLatestNews] = useState<{
    id: string;
    title: string;
    subtitle: string;
    imgUrl: string;
    date: string;
  }>();
  useEffect(() => {
    if (!isLoading && news) setLatestNews(news[news.length - 1]);
  }, [isLoading, news]);
  const formatDate = (date: string): string => {
    const timestamp = Date.parse(date);
    return new Date(timestamp).toLocaleDateString();
  };
  return (
    <Section id="latestNews">
      <div className="flex flex-col w-full py-20" id="latestNews">
        <div className="w-full py-10 text-center text-7xl text-primary">
          <span>ÚLTIMAS NOTICIAS</span>
        </div>
        {latestNews && (
          <div className="grid grid-cols-5 gap-10 md:gap-0">
            <div className="col-span-5 md:col-span-3 lg:col-span-2">
              <div className="text-primary flex w-full flex-col items-center px-10 lg:px-32 gap-10 overflow-hidden">
                <span className="text-4xl font-bold">{latestNews.title}</span>
                <p className="text-justify text-xl leading-tight">
                  {latestNews.subtitle.length > 400
                    ? `${latestNews.subtitle.slice(0, 400)}...`
                    : latestNews.subtitle}
                </p>
                <Link
                  to={'/news/' + latestNews.title.replace(/ /g, '-')}
                  state={{ newsId: latestNews.id }}
                >
                  <div className="flex gap-10 items-center cursor-pointer">
                    <span className="text-3xl font-bold">SEGUIR LEYENDO</span>
                    <Icon path={mdiChevronRightCircleOutline} size={3.5} />
                  </div>
                </Link>
              </div>
            </div>
            <div className="col-span-5 md:col-span-2 px-10 md:px-0 relative">
              <img
                src={`http://localhost:8001/uploads/${latestNews.imgUrl}`}
                alt={latestNews.title}
                className="aspect-square w-full"
              />
              <div className="lg:hidden block absolute top-0 md:right-5 right-20">
                <div className=" w-full bg-primary p-8 text-left">
                  <span className="md:text-3xl lg:text-4xl text-white">
                    <span>{formatDate(latestNews.date)}</span>
                  </span>
                </div>
              </div>
            </div>
            <div className="hidden lg:block lg:col-span-1">
              <div className=" w-full bg-primary aspect-square p-8 text-left">
                <span className="md:text-3xl lg:text-4xl text-white">
                  <span>{formatDate(latestNews.date)}</span>
                </span>
              </div>
            </div>
          </div>
        )}
      </div>
    </Section>
  );
};
