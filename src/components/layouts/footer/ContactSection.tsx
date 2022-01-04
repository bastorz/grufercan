import React from 'react';
import { mdiChevronRightCircleOutline } from '@mdi/js';
import Icon from '@mdi/react';
import { useTranslation } from 'react-i18next';

export const ContactSection: React.FC = () => {
  const { t } = useTranslation();
  return (
    <div className="flex w-full md:flex-row flex-col gap-4 md:gap-0 pt-20">
      <div className="flex flex-col justify-between w-full md:w-1/3 bg-secondary md:aspect-square p-3 md:p-10 text-center md:text-left">
        <span className="text-3xl md:text-4xl lg:text-6xl text-white">
          {t('footer.contact')}
        </span>
        <div className="w-full md:flex hidden justify-end ">
          <Icon
            path={mdiChevronRightCircleOutline}
            size={'5vw'}
            className="text-white"
          />
        </div>
      </div>
      <div className="flex flex-col gap-4 w-full md:w-2/3 px-4 justify-between">
        <input
          placeholder="NOMBRE Y APELLIDOS/EMPRESA"
          className="bg-contrast h-12 px-4 py-3"
        ></input>
        <input
          placeholder="E-MAIL"
          type="email"
          className="bg-contrast h-12 px-4 py-3"
        ></input>
        <input
          placeholder="TELÉFONO"
          type="tel"
          className="bg-contrast h-12 px-4 py-3"
        ></input>
        <textarea
          placeholder="MENSAJE"
          className="bg-contrast h-full px-4 py-3"
        ></textarea>
      </div>
    </div>
  );
};
