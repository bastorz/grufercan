import React from 'react';
import { mdiChevronRightCircleOutline } from '@mdi/js';
import Icon from '@mdi/react';
import { useTranslation } from 'react-i18next';

export const ContactSection: React.FC = () => {
  const { t } = useTranslation();
  return (
    <div
      className="flex flex-col w-full gap-4 pt-20 md:flex-row md:gap-0"
      id="contact"
    >
      <div className="flex flex-col justify-between w-full p-3 text-center md:w-1/3 bg-secondary md:aspect-square md:p-10 md:text-left">
        <span className="text-3xl text-white md:text-4xl lg:text-6xl">
          {t('footer.contact')}
        </span>
        <div className="justify-end hidden w-full md:flex ">
          <Icon
            path={mdiChevronRightCircleOutline}
            size={'5vw'}
            className="text-white"
          />
        </div>
      </div>
      <div className="flex flex-col justify-between w-full gap-4 px-4 md:w-2/3">
        <input
          placeholder={t('footer.contactFields.name')}
          className="h-12 px-4 py-3 bg-contrast"
        ></input>
        <input
          placeholder={t('footer.contactFields.email')}
          type="email"
          className="h-12 px-4 py-3 bg-contrast"
        ></input>
        <input
          placeholder={t('footer.contactFields.phone')}
          type="tel"
          className="h-12 px-4 py-3 bg-contrast"
        ></input>
        <textarea
          placeholder={t('footer.contactFields.message')}
          className="h-full px-4 py-3 bg-contrast"
        ></textarea>
      </div>
    </div>
  );
};
