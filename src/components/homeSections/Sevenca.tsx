import React from 'react';
import { Carousel } from 'react-responsive-carousel';
import logoSevenca from '../../images/partners/logos/logo-sevenca.png';
import sevenca1 from '../../images/sevenca/sevenca-1.jpg';
import sevenca2 from '../../images/sevenca/sevenca-2.jpg';
export const Sevenca: React.FC = () => {
  return (
    <div className="flex flex-col w-full gap-4 md:flex-row">
      <div className="flex flex-col items-center w-full px-20 pt-16 md:w-2/5 bg-contrast">
        <div className="flex items-center justify-center bg-white w-80 h-80">
          <img src={logoSevenca} alt="sevenca logo" className="p-2" />
        </div>
        <div className="py-10 text-xl text-justify w-80 text-primary ">
          <p className="mb-4">
            <b>SEVENCA</b> Marca propia, creada por Grufercan con el objetivo de
            desarrollar diferentes líneas de producto en las que primen la
            relación calidad-precio.
          </p>
          <p>
            Supone una clara apuesta por la mejora del posicionamiento de cada
            uno de los socios en el mercado actual cada vez más competitivo.
            Hemos desarrollado varias líneas de producto: calentadores, mamparas
            de ducha, escaleras domésticas y hormigoneras, seguimos trabajando
            para implementar nuevas líneas próximamente.
          </p>
        </div>
      </div>
      <div className="flex flex-col items-center w-full px-20 py-16 md:w-3/5 h-min bg-contrast">
        <span className="text-4xl font-extrabold text-center text-primary">
          GALERÍA DE PRODUCTOS
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
