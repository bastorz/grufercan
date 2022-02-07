import React, { useState } from 'react';
import { mdiChevronRightCircleOutline } from '@mdi/js';
import Icon from '@mdi/react';
import { useTranslation } from 'react-i18next';
import { useMail } from '../../../services/mailer/useMail';
import useWindowSize from '../../../hooks/useWindowSize';
import clsx from 'clsx';

export const ContactSection: React.FC = () => {
  const { t } = useTranslation();
  const { sendContactMail } = useMail();
  const { width } = useWindowSize();
  const [name, setName] = useState<string>();
  const [email, setEmail] = useState<string>();
  const [phone, setPhone] = useState<string>();
  const [message, setMessage] = useState<string>();
  const [emailSent, setEmailSent] = useState<boolean>(false);

  const handleSendContactEmail = async (e: { preventDefault: () => void }) => {
    e.preventDefault();
    if (name && email && phone && message) {
      await sendContactMail({ name, email, phone, message });
      setEmailSent(true);
    }
    console.log('name: ', name);
    console.log('email: ', email);
    console.log('phone: ', phone);
    console.log('message: ', message);
  };
  return (
    <div
      className="flex flex-col w-full gap-4 pt-20 md:flex-row md:gap-0 scroll-mt-20"
      id="contact"
    >
      <div className="flex flex-row items-center order-last w-full p-3 text-center md:items-start justify-evenly md:justify-between md:flex-col md:order-first md:w-1/3 bg-secondary md:aspect-square md:p-10 md:text-left">
        <span className="text-3xl text-white md:text-4xl lg:text-6xl">
          {emailSent ? t('footer.messageSent') : t('footer.contact')}
        </span>
        {!emailSent && (
          <div className="flex md:w-full md:justify-end">
            <button form="contactForm">
              <Icon
                path={mdiChevronRightCircleOutline}
                size={width && width > 768 ? 3 : 2}
                className="text-white transition duration-200 hover:scale-105"
              />
            </button>
          </div>
        )}
      </div>
      <form
        id="contactForm"
        onSubmit={handleSendContactEmail}
        className="flex flex-col justify-between w-full gap-4 px-4 md:w-2/3"
      >
        <input
          placeholder={t('footer.contactFields.name')}
          className={clsx(
            'h-12 px-4 py-3 bg-contrast',
            emailSent && 'text-gray-500',
          )}
          onChange={(e) => setName(e.target.value)}
          required
          disabled={emailSent}
        />
        <input
          placeholder={t('footer.contactFields.email')}
          type="email"
          className={clsx(
            'h-12 px-4 py-3 bg-contrast',
            emailSent && 'text-gray-500',
          )}
          onChange={(e) => setEmail(e.target.value)}
          required
          disabled={emailSent}
        />
        <input
          placeholder={t('footer.contactFields.phone')}
          type="tel"
          className={clsx(
            'h-12 px-4 py-3 bg-contrast',
            emailSent && 'text-gray-500',
          )}
          onChange={(e) => setPhone(e.target.value)}
          required
          disabled={emailSent}
        />
        <textarea
          placeholder={t('footer.contactFields.message')}
          className={clsx(
            'h-full px-4 py-3 bg-contrast',
            emailSent && 'text-gray-500',
          )}
          onChange={(e) => setMessage(e.target.value)}
          required
          disabled={emailSent}
        />
      </form>
    </div>
  );
};
