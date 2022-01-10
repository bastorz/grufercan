import React from 'react';
import Icon from '@mdi/react';
import { mdiChevronDownCircleOutline } from '@mdi/js';
import { Carousel } from 'react-responsive-carousel';
import portada1 from '../../images/portada/portada-1.jpg';
import mapa from '../../images/portada/mapa-canarias.svg';
import { useTranslation } from 'react-i18next';
import 'react-responsive-carousel/lib/styles/carousel.min.css';
import { navigate } from 'gatsby';
export const AboutUs: React.FC = () => {
  const { t } = useTranslation();
  return (
    <div className="flex flex-col pb-20 bg-contrast">
      <div className="flex flex-col justify-between w-full gap-4 md:flex-row md:gap-0">
        <div className="w-full px-10 pt-20 md:w-2/3 md:px-20 lg:px-40">
          <Carousel
            autoPlay={true}
            interval={10000}
            infiniteLoop={true}
            showArrows={false}
            showThumbs={false}
            showStatus={false}
          >
            <div key="slide-1">
              <img src={portada1} className="aspect-auto" />
            </div>
            <div key="slide-2" className="aspect-auto">
              <img src={portada1} />
            </div>
          </Carousel>
        </div>

        <div
          onClick={() => navigate('/#latestNews')}
          className="flex-col justify-between hidden w-full p-3 text-center cursor-pointer md:flex md:w-1/3 bg-secondary md:aspect-square md:p-10 md:text-left"
        >
          <span className="text-3xl text-white md:text-4xl lg:text-6xl">
            {t('home.sections.aboutUs.latestNews')}
          </span>
          <div className="justify-end w-full ">
            <Icon
              path={mdiChevronDownCircleOutline}
              size={'5vw'}
              className="text-white"
            />
          </div>
        </div>
      </div>
      <div
        id="aboutUs"
        className="flex flex-col w-full gap-20 px-10 md:flex-row md:px-20 lg:px-40 pt-28"
      >
        <div className="flex flex-col w-full text-center md:w-1/3 md:text-right">
          <span className="w-full text-5xl md:text-7xl text-primary">
            {t('home.sections.aboutUs.aboutUs')}
          </span>
          <img src={mapa} alt="mapa islas canarias" />
        </div>
        <div className="flex flex-col w-full gap-2 md:w-2/3">
          <p className="text-lg text-primary">
            {t('home.sections.aboutUs.text.paragraph1')}
          </p>
          <p className="text-lg text-primary">
            {t('home.sections.aboutUs.text.paragraph2')}
          </p>
          <p className="text-lg text-primary">
            {t('home.sections.aboutUs.text.paragraph3')}
          </p>
          <p className="text-lg text-primary">
            {t('home.sections.aboutUs.text.paragraph4')}
          </p>
          <p className="text-lg text-primary">
            {t('home.sections.aboutUs.text.paragraph5')}
          </p>
        </div>
      </div>
    </div>
  );
};
