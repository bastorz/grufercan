import React from "react";
import { Iframe } from "./Iframe";
import logoMd from "../../../images/logo-md.jpg";
import { ContactSection } from "./ContactSection";
import { Link } from "gatsby";
import { useTranslation } from "react-i18next";
export const Footer = () => {
  const { t } = useTranslation();
  return (
    <>
      <ContactSection />
      <div className="relative flex flex-col items-center justify-between gap-10 p-10 bg-white md:p-20 md:flex-row md:items-stretch">
        <div className="flex flex-col items-center justify-around space-y-4 md:ml-10 md:space-y-0 md:items-stretch">
          <img src={logoMd} alt="grufercan logo" width={250} height={250} />
          <div className="flex flex-col items-center space-y-2 text-xl md:text-2xl text-primary md:items-stretch">
            <div className="flex flex-col font-semibold">
              <span>C. de Fernando Primo de Rivera, 55,</span>
              <span>38006 Santa Cruz de Tenerife</span>
            </div>

            <b>+34 922 631 417</b>
            <b>+34 608 904 429</b>

            <b>administracion@grufercan.es</b>
          </div>
        </div>
        <div className="w-[200px] h-[200px] sm:h-[300px] sm:w-[300px] md:h-[400px] md:w-[400px] mb-10 md:mb-0">
          <Iframe />
        </div>
        <div className="absolute grid grid-cols-3 text-sm text-center divide-x-2 bottom-5 right-5 text-primary divide-primary">
          <Link to="/legal" className="px-2">
            {t("footer.legal")}
          </Link>
          <Link to="/cookies" className="px-2">
            {t("footer.cookies")}
          </Link>
          <Link to="/privacy" className="px-2">
            {t("footer.privacy")}
          </Link>
        </div>
      </div>
    </>
  );
};
