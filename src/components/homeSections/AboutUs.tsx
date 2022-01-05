import React from 'react';
import Icon from '@mdi/react';
import { mdiChevronDownCircleOutline } from '@mdi/js';
import { Carousel } from 'react-responsive-carousel';
import portada1 from '../../images/portada/portada-1.jpg';
import mapa from '../../images/portada/mapa-canarias.svg';

import 'react-responsive-carousel/lib/styles/carousel.min.css';
import { navigate } from 'gatsby';
export const AboutUs: React.FC = () => {
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
            Últimas noticias
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
          <span className="w-full text-7xl text-primary">QUIÉNES SOMOS</span>
          <img src={mapa} alt="mapa islas canarias" />
        </div>
        <div className="flex flex-col w-full gap-2 md:w-2/3">
          <p className="text-lg text-primary">
            <b>Grufercan</b> es una cooperativa de ferreterías, su modelo de
            gestión se basa en facilitar el desarrollo de la actividad comercial
            de los socios a través de la adqui- sición de productos que los
            posicionen de forma más competitiva, diferenciado- ra y rentable
            dentro de su zona de influencia.
          </p>
          <p className="text-lg text-primary">
            Grufercan tiene representación en las islas de Lanzarote,
            Fuerteventura, Gran Canaria, La Palma y Tenerife, con un total de 6
            socios y 10 puntos de venta.
          </p>
          <p className="text-lg text-primary">
            Comienza su andadura en el año 2004 en la isla de Lanzarote, para
            trasladarse posteriormente al Puerto de La Cruz y La Laguna antes de
            asentarse definitiva- mente en Santa Cruz de Tenerife, su sede
            actual, en 2015.
          </p>
          <p className="text-lg text-primary">
            Su volumen de compra supera los 30 millones de euros anuales,
            agrupado en un porfolio de productos de importación bajo su marca
            propia, y los acuerdos globales con las principales marcas del
            sector de la Construcción, Ferretería y Bricolaje.
          </p>
          <p className="text-lg text-primary">
            Uno de sus proyectos destacados es el desarrollo de su marca propia,
            SEVEN- CA, que a día de hoy supone _____ de importaciones desde Asia
            de productos como, mamparas de baño, calentadores de agua...
          </p>
          <p className="text-lg text-primary">
            Actualmente se encuentran desarrollando nuevos vías de negocio
          </p>
        </div>
      </div>
    </div>
  );
};
