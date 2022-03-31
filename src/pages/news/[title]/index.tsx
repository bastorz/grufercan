import { mdiChevronDownCircleOutline } from '@mdi/js';
import Icon from '@mdi/react';
import dayjs from 'dayjs';
import { Link } from 'gatsby';
import React, { useEffect, useState } from 'react';
import { useTranslation } from 'react-i18next';
import { SEO } from '../../../components/SEO';
import { useLanguage } from '../../../hooks/useLanguage';
import { useNews } from '../../../services/news/useNews';

const News: React.FC = (newsProps: any) => {
  const currentNewsId = newsProps?.location.state?.newsId;
  const formatDate = (date: string): string => {
    return dayjs(date).format('DD/MM/YYYY');
  };
  const { news, isLoading } = useNews();
  const [filteredNews, setFilteredNews] = useState<any[]>();
  const [currentNews, setCurrentNews] = useState<any>();
  const [visibleNews, setVisibleNews] = useState(2);
  const { language } = useLanguage();
  const { t } = useTranslation();
  useEffect(() => {
    if (!isLoading && news) {
      setFilteredNews(news.filter((n) => n.id !== currentNewsId));
      setCurrentNews(news.find((n) => n.id === currentNewsId));
    }
  }, [news, isLoading, newsProps]);

  return (
    <>
      <SEO
        title="Noticias"
        description={currentNews?.description}
        lang={language}
      />
      <div className="flex flex-col">
        <div className="flex flex-col w-full py-20">
          <div className="w-full px-10 py-10 text-6xl lg:px-32 lg:text-9xl text-primary">
            <h1>{t('news.news')}</h1>
          </div>
          {currentNews && (
            <div className="grid grid-cols-5 gap-10 md:gap-0">
              <div className="col-span-5 md:col-span-3 lg:col-span-2">
                <div className="flex flex-col items-center w-full gap-10 px-10 overflow-hidden text-primary lg:px-32">
                  <h2 className="text-4xl font-bold">{currentNews.title}</h2>
                  <p className="text-xl leading-tight text-justify">
                    {currentNews.subtitle}
                  </p>
                </div>
              </div>
              <div className="relative col-span-5 px-10 md:col-span-2 md:px-0">
                <img
                  src={`${process.env.GATSBY_LOCALHOST}${process.env.GATSBY_BASE_URL}uploads/${currentNews.imgUrl}`}
                  alt={currentNews.title}
                  className="object-contain object-right-top w-full aspect-square"
                />
                <div className="absolute top-0 block lg:hidden md:right-5 right-20">
                  <div className="w-full p-8 text-left bg-primary">
                    <span className="text-white md:text-3xl lg:text-4xl">
                      <span>{formatDate(currentNews.date)}</span>
                    </span>
                  </div>
                </div>
              </div>
              <div className="hidden lg:block lg:col-span-1">
                <div className="w-full p-8 text-left bg-primary aspect-square">
                  <span className="text-white md:text-3xl lg:text-4xl">
                    <span>{formatDate(currentNews.date)}</span>
                  </span>
                </div>
              </div>
            </div>
          )}
        </div>

        {filteredNews && (
          <div className="grid grid-cols-1 gap-10 px-10 md:grid-cols-2 md:px-32 text-primary">
            {filteredNews.slice(0, visibleNews).map((news, i) => (
              <div className="relative flex flex-col gap-4" key={i}>
                <img
                  src={`${process.env.GATSBY_LOCALHOST}${process.env.GATSBY_BASE_URL}uploads/${news.imgUrl}`}
                  alt={news.title}
                  className="w-full aspect-video"
                />
                <div className="absolute right-0 top-5">
                  <div className="w-full px-6 py-2 text-center bg-secondary text-primary">
                    <span className="text-xl font-bold lg:text-2xl">
                      {formatDate(news.date)}
                    </span>
                  </div>
                </div>
                <h2 className="text-4xl font-bold">{news.title}</h2>
                <p className="text-xl leading-tight text-justify">
                  {news.subtitle.length > 400
                    ? `${news.subtitle.slice(0, 400)}...`
                    : news.subtitle}
                </p>
                <Link
                  to={'/news/' + news.title.replace(/ /g, '-')}
                  state={{ newsId: news.id }}
                >
                  <div className="flex items-center justify-end w-full gap-10 cursor-pointer">
                    <span className="text-xl font-bold">
                      {t('home.sections.latestNews.keepReading')}
                    </span>
                    <Icon
                      path={mdiChevronDownCircleOutline}
                      size={2}
                      className="transition duration-200 hover:scale-105"
                    />
                  </div>
                </Link>
              </div>
            ))}
          </div>
        )}
        {filteredNews && filteredNews.length > visibleNews && (
          <div
            className="flex flex-col items-center justify-center w-full pt-20 cursor-pointer text-primary"
            onClick={() => setVisibleNews(visibleNews + 2)}
          >
            <span className="text-2xl">{t('news.showMore')}</span>
            <Icon
              path={mdiChevronDownCircleOutline}
              size={4}
              className="transition duration-200 hover:scale-105"
            />
          </div>
        )}
      </div>
    </>
  );
};
export default News;
