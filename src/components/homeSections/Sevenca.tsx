import React from 'react';
import { useTranslation } from 'react-i18next';
import { Carousel } from 'react-responsive-carousel';
import logoSevenca from '../../images/partners/logos/logo-sevenca.png';
import sevenca1 from '../../images/sevenca/sevenca-1.jpg';
import sevenca2 from '../../images/sevenca/sevenca-2.jpg';
export const Sevenca: React.FC = () => {
  const { t } = useTranslation();
  return (
    <div className="flex flex-col w-full gap-4 md:flex-row" id="sevenca">
      <div className="flex flex-col items-center w-full px-20 pt-16 md:w-2/5 bg-contrast">
        <div className="flex items-center justify-center bg-white w-80 h-80">
          <img src={logoSevenca} alt="sevenca logo" className="p-2" />
        </div>
        <div className="py-10 text-xl text-justify w-80 text-primary ">
          <p className="mb-4">
            <b>SEVENCA</b> {t('home.sections.sevenca.paragraph1')}
          </p>
          <p>{t('home.sections.sevenca.paragraph2')}</p>
        </div>
      </div>
      <div className="flex flex-col items-center w-full px-20 py-16 md:w-3/5 h-min bg-contrast">
        <span className="text-4xl font-extrabold text-center text-primary">
          {t('home.sections.sevenca.gallery')}
        </span>
        <Carousel
          dynamicHeight={true}
          autoPlay={true}
          interval={10000}
          infiniteLoop={true}
          showArrows={false}
          showThumbs={false}
          showStatus={false}
          className="py-10"
        >
          <div key="slide-1">
            <img src={sevenca1} className="aspect-video" />
          </div>
          <div key="slide-2" className="aspect-video">
            <img src={sevenca2} />
          </div>
        </Carousel>
      </div>
    </div>
  );
};
