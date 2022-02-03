import fraper1 from '../images/partners/carousel/Fraper/fraper_1.jpg';
import fraper2 from '../images/partners/carousel/Fraper/fraper_2.jpg';
import fraper3 from '../images/partners/carousel/Fraper/fraper_3.jpg';
import fraper4 from '../images/partners/carousel/Fraper/fraper_4.jpg';
import fraper5 from '../images/partners/carousel/Fraper/fraper_5.jpg';
import fraper6 from '../images/partners/carousel/Fraper/fraper_6_1.jpg';
import fraper7 from '../images/partners/carousel/Fraper/fraper_7.jpg';
import germanMedina1 from '../images/partners/carousel/germanMedina/germanMedina_1.jpg';
import germanMedina2 from '../images/partners/carousel/germanMedina/germanMedina_2.jpg';
import germanMedina3 from '../images/partners/carousel/germanMedina/germanMedina_3.jpg';
import cantera1 from '../images/partners/carousel/cantera/cantera_1.jpg';
import cantera2 from '../images/partners/carousel/cantera/cantera_2.jpg';
import cantera3 from '../images/partners/carousel/cantera/cantera_3.jpg';
import cantera4 from '../images/partners/carousel/cantera/cantera_4.jpg';
import saavedra1 from '../images/partners/carousel/Saavedra/saavedra_1.jpg';
import saavedra2 from '../images/partners/carousel/Saavedra/saavedra_2.jpg';
import sanIsidro1 from '../images/partners/carousel/sanIsidro/sanIsidro_1.jpg';
import sanIsidro2 from '../images/partners/carousel/sanIsidro/sanIsidro_2.jpg';
import ferrocur1 from '../images/partners/carousel/ferrocur/ferrocur_1.png';
import ucanca1 from '../images/partners/carousel/ucanca/ucanca_1.jpg';
import ucanca2 from '../images/partners/carousel/ucanca/ucanca_2.jpg';
import ucanca3 from '../images/partners/carousel/ucanca/ucanca_3.jpg';
import ucanca4 from '../images/partners/carousel/ucanca/ucanca_4.jpg';
export const getPartnerImages = (id: string) => {
  const fraperImages = [
    fraper1,
    fraper2,
    fraper3,
    fraper4,
    fraper5,
    fraper6,
    fraper7,
  ];
  const germanMedinaImages = [germanMedina1, germanMedina2, germanMedina3];
  const canteraImages = [cantera1, cantera2, cantera3, cantera4];
  const saavedraImages = [saavedra1, saavedra2];
  const sanIsidroImages = [sanIsidro1, sanIsidro2];
  const ferrocurImages = [ferrocur1];
  const ucancaImages = [ucanca1, ucanca2, ucanca3, ucanca4];

  switch (id) {
    case 'fraper':
      return fraperImages;
    case 'germanMedina':
      return germanMedinaImages;
    case 'laCantera':
      return canteraImages;
    case 'saavedra':
      return saavedraImages;
    case 'sanIsidro':
      return sanIsidroImages;
    case 'ferrocour':
      return ferrocurImages;
    case 'ucanca':
      return ucancaImages;

    default:
      break;
  }
};
