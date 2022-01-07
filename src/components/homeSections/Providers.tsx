import React from "react";
import { useTranslation } from "react-i18next";
import alianzaAlemanBaker from "../../images/providers/Alianza-Aleman-Baker.png";
import barbosa from "../../images/providers/Barbosa.png";
import bellota from "../../images/providers/Bellota.svg";
import centralLobao from "../../images/providers/Central-Lobao.png";
import cercol from "../../images/providers/Cercol.jpg";
import ceys from "../../images/providers/ceys.jpg";
import cromology from "../../images/providers/Cromology.jpg";
import danosa from "../../images/providers/Danosa.jpg";
import elektro3 from "../../images/providers/Elektro3.jpg";
import Genebre from "../../images/providers/Genebre.jpg";
import hikoki from "../../images/providers/HiKOKI.jpg";
import intermas from "../../images/providers/INTERMAS.png";
import jotun from "../../images/providers/Jotun.png";
import lafargeholcim from "../../images/providers/LAFARGEHOLCIM.jpg";
import mt from "../../images/providers/MT.png";
import pinturasCinCanariaas from "../../images/providers/pinturas-cin-canarias.jpg";
import pladur from "../../images/providers/Pladur.gif";
import sirl from "../../images/providers/sirl.jpg";
import soprema from "../../images/providers/Soprema.png";
import stn from "../../images/providers/stn.png";
import tatay from "../../images/providers/Tatay.jpg";
import teicocil from "../../images/providers/Teicocil.png";
import weber from "../../images/providers/weber.jpg";

export const Providers: React.FC = () => {
  const { t } = useTranslation();
  const providerLogos = [
    { url: "https://alianza-ab.com", logo: alianzaAlemanBaker },
    { url: "https://www.barbosa-universal.com", logo: barbosa },
    { url: "https://www.bellota.com", logo: bellota },
    { url: "https://www.centrallobao.pt", logo: centralLobao },
    { url: "https://www.cercol.com/cercol", logo: cercol },
    {
      url: "https://mundoceys.com/?gclid=Cj0KCQiAq7COBhC2ARIsANsPATFQgxsblLiv_lR4J6ESZoQv8EI_4lLZ73BODVaY_V2tUKMrKStmgpgaAlDsEALw_wcB",
      logo: ceys,
    },
    { url: "https://www.cromology.es", logo: cromology },
    { url: "https://www.danosa.com/es-es/", logo: danosa },
    { url: "https://elektro3.com", logo: elektro3 },
    { url: "https://www.genebre.es", logo: Genebre },
    { url: "https://hikoki-powertools.es/es/", logo: hikoki },
    { url: "https://www.intermasgroup.com/es.html", logo: intermas },
    { url: "https://www.jotun.com/es/es/", logo: jotun },
    { url: "https://www.lafargeholcim.es", logo: lafargeholcim },
    { url: "https://www.mtspain.net", logo: mt },
    { url: "https://cin.com/es/", logo: pinturasCinCanariaas },
    { url: "https://www.pladur.com", logo: pladur },
    { url: "http://sirl.pt/es/", logo: sirl },
    { url: "https://www.soprema.es/es/", logo: soprema },
    { url: "https://stnceramica.es", logo: stn },
    { url: "https://www.tatay.com/es", logo: tatay },
    { url: "https://www.teicocil.com/site/", logo: teicocil },
    { url: "https://www.weber.com/ES/es/home/", logo: weber },
  ];

  return (
    <div className="flex flex-col w-full py-20" id="providers">
      <div className="w-full py-10 text-4xl font-extrabold text-center lg:text-7xl text-primary">
        <span>{t("home.sections.providers.providers")}</span>
      </div>
      <div className="flex flex-wrap items-center justify-center gap-[1px]">
        {providerLogos.map((provider, i) => (
          <a
            href={provider.url}
            target="_blank"
            rel="noopener noreferrer"
            key={i}
          >
            <div className="flex items-center justify-center w-64 h-64 border outline outline-1 outline-gray-200">
              <img src={provider.logo} alt="" className="p-10" />
            </div>
          </a>
        ))}
      </div>
    </div>
  );
};
