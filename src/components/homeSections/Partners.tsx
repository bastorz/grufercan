import { mdiPlusCircleOutline } from '@mdi/js';
import Icon from '@mdi/react';
import React from 'react';
import cantera from '../../images/partners/backgrounds/cantera.jpg';
import ferrocur from '../../images/partners/backgrounds/ferrocur.png';
import fraper from '../../images/partners/backgrounds/fraper.jpg';
import germanMedina from '../../images/partners/backgrounds/german-medina.jpg';
import saavedra from '../../images/partners/backgrounds/saavedra.jpg';
import sanIsidro from '../../images/partners/backgrounds/san-isidro.jpg';
import logoCantera from '../../images/partners/logos/logo-cantera.png';
import logoFerrocur from '../../images/partners/logos/logo-ferrocur.png';
import logoFraper from '../../images/partners/logos/logo-fraper.png';
import logoGermanMedina from '../../images/partners/logos/logo-german-medina.png';
import logoSaavedra from '../../images/partners/logos/logo-saavedra.png';
import logoSanIsidro from '../../images/partners/logos/logo-san-isidro.jpg';

export const Partners = () => {
  const partners = [
    { name: 'Ferretería La Cantera', background: cantera, logo: logoCantera },
    {
      name: 'Ferretería Germán Medina',
      background: germanMedina,
      logo: logoGermanMedina,
    },
    { name: 'Ferrocur', background: ferrocur, logo: logoFerrocur },
    { name: 'Ferretería Saavedra', background: saavedra, logo: logoSaavedra },
    {
      name: 'Ferretería San Isidro',
      background: sanIsidro,
      logo: logoSanIsidro,
    },
    { name: 'Comercial Fraper', background: fraper, logo: logoFraper },
  ];
  return (
    <div className="w-full py-20">
      <div className="w-full text-center text-7xl text-primary">
        <span>SOCIOS</span>
      </div>

      <div className="grid grid-cols-1 gap-4 px-10 pt-20 md:grid-cols-2 lg:grid-cols-3 md:px-20 lg:px-40">
        {partners.map((partner, i) => (
          <div
            className="relative w-full h-full overflow-hidden bg-red-500 cursor-pointer group"
            key={i}
          >
            <span className="absolute z-20 max-w-[200px] text-2xl font-bold text-white inset-8">
              {partner.name}
            </span>
            <div className="absolute top-0 z-20 flex items-center justify-center w-24 h-24 bg-white right-5 aspect-square">
              <img
                src={partner.logo}
                alt={partner.name + ' logo'}
                className="p-2"
              />
            </div>
            <div className="absolute z-20 transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
              <Icon
                path={mdiPlusCircleOutline}
                size={5}
                className="text-white"
                style={{ fontWeight: 200 }}
              />
            </div>
            <img
              src={partner.background}
              alt={partner.name}
              className="z-0 object-cover w-full h-full transition ease-in-out group-hover:scale-110 aspect-square bg-red grayscale contrast-150"
            />
            <div className="absolute inset-0 z-10 bg-primary aspect-square opacity-80" />
          </div>
        ))}
      </div>
    </div>
  );
};
