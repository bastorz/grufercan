import i18n from "i18next";
import LanguageDetector from "i18next-browser-languagedetector";
import { initReactI18next } from "react-i18next";

import en from "./src/locales/en.json";
import es from "./src/locales/es.json";

i18n
  .use(LanguageDetector)
  .use(initReactI18next)
  .init({
    resources: {
      en: { translation: en },
      es: { translation: es },
    },
    fallbackLng: "es",
    supportedLngs: ["es", "en"],
    nonExplicitSupportedLngs: true,
    debug: true,
    interpolation: {
      escapeValue: false,
    },
    react: {
      useSuspense: true,
    },
  });
export default i18n;
