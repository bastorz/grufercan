import { Link } from "gatsby";
import React, { useState } from "react";
import { useTranslation } from "react-i18next";
export const CookiesDialog = () => {
  const [acceptedCookies, setAcceptedCookies] = useState(false);
  const { t } = useTranslation();
  return (
    <>
      {/* {!acceptedCookies && localStorage.getItem('gfccookies') === null && (
        <div className="fixed z-50 w-screen md:w-[35vw] p-10 bg-primary border-2 border-white rounded-sm bottom-10 right-0 md:right-10 opacity-[97%] text-justify">
          <div className="flex flex-col gap-2">
            <div className="text-white">
              {t('cookiesDialog.text1')}
              <Link className="underline underline-offset-2" to="/cookies">
                {t('cookiesDialog.here')}
              </Link>{' '}
              {t('cookiesDialog.text2')}{' '}
              <Link className="underline underline-offset-2" to="/privacy">
                {t('cookiesDialog.privacy')}
              </Link>{' '}
              &{' '}
              <Link className="underline underline-offset-2" to="/legal">
                {t('cookiesDialog.legal')}.
              </Link>
            </div>
            <div className="flex justify-center w-full gap-4">
              <button
                className="px-6 py-2 text-black bg-white rounded-md"
                onClick={() => (location.href = 'http://www.google.com')}
              >
                {t('cookiesDialog.decline')}
              </button>
              <button
                className="px-6 py-2 bg-black rounded-md text-contrast"
                onClick={() => {
                  localStorage.setItem('gfccookies', 'accepted');
                  setAcceptedCookies(true);
                }}
              >
                {t('cookiesDialog.accept')}
              </button>
            </div>
          </div>
        </div>
      )} */}
    </>
  );
};
