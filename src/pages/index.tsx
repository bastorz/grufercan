import * as React from 'react';
import { useTranslation } from 'react-i18next';
import { AboutUs } from '../components/homeSections/AboutUs';
import { GrufercanTop } from '../components/homeSections/GrufercanTop';
import { Partners } from '../components/homeSections/Partners';
import { Providers } from '../components/homeSections/Providers';
import { Sevenca } from '../components/homeSections/Sevenca';
import { SEO } from '../components/SEO';

const IndexPage = () => {
  const { t } = useTranslation();

  return (
    <>
      <SEO title="Inicio" description="Página de inicio Grufercan" lang="es" />
      <div className="flex flex-col w-full">
        <GrufercanTop />
        <AboutUs />
        <Partners />
        <Sevenca />
        <Providers />
      </div>
    </>
  );
};

export default IndexPage;
