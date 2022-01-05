import { useTranslation } from 'react-i18next';

export const useLanguage = () => {
  const { i18n } = useTranslation();
  const language = i18n.language || window.localStorage.i18nextLng;

  return { language };
};
