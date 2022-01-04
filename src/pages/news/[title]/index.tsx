import { mdiChevronDownCircleOutline } from '@mdi/js';
import Icon from '@mdi/react';
import { Link } from 'gatsby';
import React, { useEffect, useState } from 'react';
import { useTranslation } from 'react-i18next';
import { SEO } from '../../../components/SEO';
import { useNews } from '../../../services/news/useNews';

const News: React.FC = (newsProps: any) => {
  const currentNewsId = newsProps?.location.state.newsId;

  const formatDate = (date: string): string => {
    const timestamp = Date.parse(date);
    return new Date(timestamp).toLocaleDateString();
  };
  const { news, isLoading } = useNews();
  const [filteredNews, setFilteredNews] = useState<any[]>();
  const [currentNews, setCurrentNews] = useState<any>();
  const { i18n } = useTranslation();
  const getLanguage = () => i18n.language || window.localStorage.i18nextLng;
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
        lang={getLanguage()}
      />
      <div className="flex flex-col">
        <div className="flex flex-col w-full py-20">
          <div className="w-full py-10 px-10 lg:px-32 text-6xl md:text-6xl lg:text-9xl text-primary">
            <h1>NOTICIAS</h1>
          </div>
          {currentNews && (
            <div className="grid grid-cols-5 gap-10 md:gap-0">
              <div className="col-span-5 md:col-span-3 lg:col-span-2">
                <div className="text-primary flex w-full flex-col items-center px-10 lg:px-32 gap-10 overflow-hidden">
                  <h2 className="text-4xl font-bold">{currentNews.title}</h2>
                  <p className="text-justify text-xl leading-tight">
                    {currentNews.subtitle}
                  </p>
                </div>
              </div>
              <div className="col-span-5 md:col-span-2 px-10 md:px-0 relative">
                <img
                  src={`http://localhost:8001/uploads/${currentNews.imgUrl}`}
                  alt={currentNews.title}
                  className="aspect-square w-full"
                />
                <div className="lg:hidden block absolute top-0 md:right-5 right-20">
                  <div className=" w-full bg-primary p-8 text-left">
                    <span className="md:text-3xl lg:text-4xl text-white">
                      <span>{formatDate(currentNews.date)}</span>
                    </span>
                  </div>
                </div>
              </div>
              <div className="hidden lg:block lg:col-span-1">
                <div className=" w-full bg-primary aspect-square p-8 text-left">
                  <span className="md:text-3xl lg:text-4xl text-white">
                    <span>{formatDate(currentNews.date)}</span>
                  </span>
                </div>
              </div>
            </div>
          )}
        </div>

        {filteredNews && (
          <div className="grid grid-cols-1 md:grid-cols-2 gap-10 px-10 md:px-32 text-primary">
            {filteredNews.map((news, i) => (
              <div className="flex flex-col gap-4 relative" key={i}>
                <img
                  src={`http://localhost:8001/uploads/${news.imgUrl}`}
                  alt={news.title}
                  className="aspect-video w-full"
                />
                <div className=" absolute top-5 right-0">
                  <div className=" w-full bg-secondary px-6 py-2 text-center text-primary">
                    <span className="text-xl lg:text-2xl font-bold">
                      {formatDate(news.date)}
                    </span>
                  </div>
                </div>
                <h2 className="text-4xl font-bold">{news.title}</h2>
                <p className="text-justify text-xl leading-tight">
                  {news.subtitle.length > 400
                    ? `${news.subtitle.slice(0, 400)}...`
                    : news.subtitle}
                </p>
                <Link
                  to={'/news/' + news.title.replace(/ /g, '-')}
                  state={{ newsId: news.id }}
                >
                  <div className="flex gap-10 items-center cursor-pointer w-full justify-end">
                    <span className="text-xl font-bold">SEGUIR LEYENDO</span>
                    <Icon path={mdiChevronDownCircleOutline} size={2} />
                  </div>
                </Link>
              </div>
            ))}
          </div>
        )}
      </div>
    </>
  );
};
export default News;
