import { Link } from "gatsby";
import React from "react";
import { useTranslation } from "react-i18next";

export const Header = () => {
  const { t, i18n } = useTranslation();
  return (
    <div className="bg-red-200 flex justify-between">
      <div>
        <Link to="/">logo</Link>
      </div>

      <div className="flex space-x-7">
        <ul className="flex space-x-4">
          <li>
            <button
              className="p-2 hover:bg-red-400"
              onClick={() => {
                i18n.changeLanguage("en");
              }}
            >
              EN
            </button>
          </li>
          <li>
            <button
              className="p-2 hover:bg-red-400"
              onClick={() => {
                i18n.changeLanguage("es");
              }}
            >
              ES
            </button>
          </li>
        </ul>

        <ul className="flex space-x-4">
          <li className="p-2 hover:bg-red-400">
            <Link to="/ferreteria1">ferreteria1</Link>
          </li>
          <li className="p-2 hover:bg-red-400">
            <Link to="/noticias">{t("general.navigation.news")}</Link>
          </li>
        </ul>
      </div>
    </div>
  );
};
