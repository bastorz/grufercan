import * as React from 'react';
import { AboutUs } from '../components/homeSections/AboutUs';
import { Ambi } from '../components/homeSections/Ambi';
import { GrufercanTop } from '../components/homeSections/GrufercanTop';
import { LatestNews } from '../components/homeSections/LatestNews';
import { Partners } from '../components/homeSections/Partners';
import { Providers } from '../components/homeSections/Providers';
import { Sevenca } from '../components/homeSections/Sevenca';
import { SEO } from '../components/SEO';

const IndexPage = () => {
  return (
    <>
      <SEO title="Inicio" description="Página de inicio Grufercan" lang="es" />
      <div className="flex flex-col w-full">
        <GrufercanTop />
        <AboutUs />
        <Partners />
        <Sevenca />
        <Ambi />
        <Providers />
        <LatestNews />
      </div>
    </>
  );
};

export default IndexPage;
