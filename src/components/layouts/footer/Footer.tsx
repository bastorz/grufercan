import React from 'react';
import { Iframe } from './Iframe';
import logoMd from '../../../images/logo-md.jpg';
import { ContactSection } from './ContactSection';

export const Footer = () => {
  return (
    <>
      <ContactSection />
      <div className="bg-white p-10 md:p-20 flex flex-col md:flex-row justify-between gap-10 items-center md:items-stretch">
        <div className="md:ml-10 flex flex-col justify-around space-y-4 md:space-y-0 items-center md:items-stretch">
          <img src={logoMd} alt="grufercan logo" width={250} height={250} />
          <div className="flex flex-col space-y-2 text-xl md:text-2xl text-primary items-center md:items-stretch">
            <div className="flex flex-col font-semibold">
              <span>C. de Fernando Primo de Rivera, 55,</span>
              <span>38006 Santa Cruz de Tenerife</span>
            </div>

            <b>922 63 14 17</b>
          </div>
        </div>
        <div className="w-[200px] h-[200px] sm:h-[300px] sm:w-[300px] md:h-[400px] md:w-[400px] ">
          <Iframe />
        </div>
      </div>
    </>
  );
};
