import { mdiChevronRightCircleOutline } from '@mdi/js';
import Icon from '@mdi/react';
import { Link } from 'gatsby';
import React, { useEffect, useState } from 'react';
import { useTranslation } from 'react-i18next';
import { useNews } from '../../services/news/useNews';

export const LatestNews: React.FC = () => {
  const { news, isLoading } = useNews();
  const { t } = useTranslation();
  const [latestNews, setLatestNews] = useState<{
    id: number;
    title: string;
    subtitle: string;
    imgUrl: string;
    date: string;
  }>();
  useEffect(() => {
    if (!isLoading && news) setLatestNews(news.find((news) => news.id === 1));
  }, [isLoading, news]);
  const formatDate = (date: string): string => {
    const timestamp = Date.parse(date);
    return new Date(timestamp).toLocaleDateString();
  };
  return (
    <div className="flex flex-col w-full py-20" id="latestNews">
      <div className="w-full py-10 text-center text-7xl text-primary">
        <span>{t('home.sections.latestNews.latestNews')}</span>
      </div>
      {latestNews && (
        <div className="grid grid-cols-5 gap-10 md:gap-0">
          <div className="col-span-5 md:col-span-3 lg:col-span-2">
            <div className="flex flex-col items-center w-full gap-10 px-10 overflow-hidden text-primary lg:px-32">
              <span className="text-4xl font-bold">{latestNews.title}</span>
              <p className="text-xl leading-tight text-justify">
                {latestNews.subtitle.length > 400
                  ? `${latestNews.subtitle.slice(0, 400)}...`
                  : latestNews.subtitle}
              </p>
              <Link
                to={'/news/' + latestNews.title.replace(/ /g, '-')}
                state={{ newsId: latestNews.id }}
              >
                <div className="flex items-center gap-10 cursor-pointer">
                  <span className="text-3xl font-bold">
                    {t('home.sections.latestNews.keepReading')}
                  </span>
                  <Icon
                    path={mdiChevronRightCircleOutline}
                    size={3.5}
                    className="transition duration-200 hover:scale-105"
                  />
                </div>
              </Link>
            </div>
          </div>
          <div
            className="relative col-span-5 px-10 md:col-span-2 md:px-0 aspect-square"
            style={{
              background: `url(${process.env.GATSBY_LOCALHOST}${process.env.GATSBY_BASE_URL}uploads/${latestNews.imgUrl})`,
              backgroundSize: 'cover',
              backgroundRepeat: 'no-repeat',
            }}
          >
            {/* <img
              src={`${process.env.GATSBY_LOCALHOST}${process.env.GATSBY_BASE_URL}uploads/${latestNews.imgUrl}`}
              alt={latestNews.title}
              className="object-cover"
            /> */}
            <div className="absolute top-0 block lg:hidden md:right-5 right-20">
              <div className="w-full p-8 text-left bg-primary">
                <span className="text-white md:text-3xl lg:text-4xl">
                  <span>{formatDate(latestNews.date)}</span>
                </span>
              </div>
            </div>
          </div>
          <div className="hidden lg:block lg:col-span-1">
            <div className="w-full p-8 text-left bg-primary aspect-square">
              <span className="text-white md:text-3xl lg:text-4xl">
                <span>{formatDate(latestNews.date)}</span>
              </span>
            </div>
          </div>
        </div>
      )}
    </div>
  );
};
