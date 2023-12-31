import { Link, navigate } from "gatsby";
import React, { useEffect, useState } from "react";
import { useTranslation } from "react-i18next";
import logoMd from "../../../images/logo-md.jpg";
import clsx from "clsx";
import { mdiMenu } from "@mdi/js";
import Icon from "@mdi/react";
import { useLanguage } from "../../../hooks/useLanguage";
export const Header = () => {
  const { t, i18n } = useTranslation();
  const { language } = useLanguage();
  const [toggleMenu, setToggleMenu] = useState(false);
  const [isOnTop, setIsOnTop] = useState(true);
  const [screenWidth, setScreenWidth] = useState(
    typeof window !== "undefined" ? window.innerWidth : 800
  );
  const toggleNav = () => {
    setToggleMenu(!toggleMenu);
  };
  useEffect(() => {
    const changeWidth = () => {
      setScreenWidth(window.innerWidth);
    };

    window.addEventListener("resize", changeWidth);
    return () => {
      window.removeEventListener("resize", changeWidth);
    };
  }, []);

  const handleHeaderItemClick = () => {
    screenWidth < 854 && toggleNav();
  };
  useEffect(() => {
    window.onscroll = () => setIsOnTop(window.pageYOffset === 0);
  });
  return (
    <div
      className={clsx(
        "flex justify-between py-4 px-10 items-center gap-4",
        toggleMenu && screenWidth < 854 && "flex-col"
      )}
    >
      <div
        className={clsx(
          "flex justify-between items-center",
          screenWidth < 854 && "w-full"
        )}
      >
        <Link to="/">
          <img
            src={logoMd}
            alt="grufercan logo"
            width={125}
            height={125}
            className={clsx(
              "max-w-[50px] md:max-w-[80px] transition-all ",
              isOnTop ? "lg:max-w-[150px]" : "lg:max-w-[50px]"
            )}
          />
        </Link>
        <div
          className={clsx(
            "block cursor-pointer",
            screenWidth >= 854 && "hidden"
          )}
          onClick={toggleNav}
        >
          <Icon path={mdiMenu} size={1} className="text-primary" />
        </div>
      </div>

      {/* {isLoggedIn() && ( */}
      {(toggleMenu || screenWidth > 854) && (
        <ul
          className={clsx(
            "flex gap-4 uppercase text-primary",
            toggleMenu && screenWidth < 854 && "flex-wrap justify-center"
          )}
        >
          <div
            className={clsx(
              "flex gap-2 px-4",
              toggleMenu && screenWidth < 854 && "w-full justify-center"
            )}
          >
            <div className="w-6 h-6 bg-primary" />
            <div className="w-6 h-6 bg-secondary" />
          </div>
          <li
            onClick={() => {
              navigate("/#aboutUs");
              handleHeaderItemClick();
            }}
            className={clsx("cursor-pointer active:text-contrast")}
          >
            {t("header.aboutUs")}
          </li>
          <li
            onClick={() => {
              navigate("/#partners");
              handleHeaderItemClick();
            }}
            className={clsx("cursor-pointer active:text-contrast")}
          >
            {t("header.partners")}
          </li>
          <li
            onClick={() => {
              navigate("/#sevenca");
              handleHeaderItemClick();
            }}
            className={clsx("cursor-pointer active:text-contrast")}
          >
            {t("header.sevenca")}
          </li>
          <li
            onClick={() => {
              navigate("/#providers");
              handleHeaderItemClick();
            }}
            className={clsx("cursor-pointer active:text-contrast")}
          >
            {t("header.providers")}
          </li>
          <li
            onClick={() => {
              navigate("/blog/#latest");
              handleHeaderItemClick();
            }}
            className={clsx("cursor-pointer active:text-contrast")}
          >
            {t("header.blog")}
          </li>
          <li
            onClick={() => {
              navigate("/#contact");
              handleHeaderItemClick();
            }}
            className={clsx("cursor-pointer active:text-contrast")}
          >
            {t("header.contact")}
          </li>
          {/* <li className="p-2 hover:bg-red-400">
            <button
              className="p-2 hover:bg-red-400"
              onClick={() => {
                logout();
              }}
            >
              Logout
            </button>
          </li> */}
        </ul>
      )}
      {(toggleMenu || screenWidth > 854) && (
        <ul
          className={clsx(
            "flex text-primary text-lg gap-4",
            toggleMenu && screenWidth < 854 && "flex-wrap justify-center"
          )}
        >
          <li>
            <button
              className={clsx(
                language === "en" ? "font-semibold" : "font-light"
              )}
              onClick={() => {
                i18n.changeLanguage("en");
              }}
            >
              EN
            </button>
          </li>
          <li>
            <button
              className={clsx(
                language === "es" ? "font-semibold" : "font-light"
              )}
              onClick={() => {
                i18n.changeLanguage("es");
              }}
            >
              ES
            </button>
          </li>
        </ul>
      )}
      {/* )} */}
    </div>
  );
};
