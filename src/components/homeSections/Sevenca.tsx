import {
  mdiChevronLeftCircleOutline,
  mdiChevronRightCircleOutline,
} from "@mdi/js";
import Icon from "@mdi/react";
import React, { useState } from "react";
import { useTranslation } from "react-i18next";
import { Carousel } from "react-responsive-carousel";
import useWindowSize from "../../hooks/useWindowSize";
import logoSevenca from "../../images/partners/logos/logo-sevenca.png";
import sevenca1 from "../../images/sevenca/sevenca-1.jpg";
import sevenca2 from "../../images/sevenca/sevenca-2.jpg";
import sevenca3 from "../../images/sevenca/sevenca-3.jpg";
import sevenca4 from "../../images/sevenca/sevenca-4.jpg";
import sevenca5 from "../../images/sevenca/sevenca-5.jpg";
import sevenca6 from "../../images/sevenca/sevenca-6.jpg";
import sevenca7 from "../../images/sevenca/sevenca-7.jpg";
import sevenca8 from "../../images/sevenca/sevenca-8.jpg";
export const Sevenca: React.FC = () => {
  const { t } = useTranslation();
  const [selectedImage, setSelectedImage] = useState(0);
  const { width } = useWindowSize();
  const updateCurrentSlide = (index: number) => {
    if (selectedImage !== index) {
      setSelectedImage(index);
    }
  };
  const handleNextSlide = () => {
    if (selectedImage === 2) {
      setSelectedImage(0);
    } else {
      setSelectedImage(selectedImage + 1);
    }
  };
  const handlePreviousSlide = () => {
    if (selectedImage === 0) {
      setSelectedImage(2);
    } else {
      setSelectedImage(selectedImage - 1);
    }
  };
  return (
    <div
      className="flex flex-col w-full gap-4 md:flex-row scroll-mt-20"
      id="sevenca"
    >
      <div className="flex flex-col items-center w-full px-20 pt-16 md:w-2/5 bg-contrast">
        <div className="flex items-center justify-center bg-white w-80 h-80">
          <img src={logoSevenca} alt="sevenca logo" className="p-2" />
        </div>
        <div className="py-10 text-xl text-justify w-80 text-primary ">
          <p className="mb-4">
            <b>SEVENCA</b> {t("home.sections.sevenca.paragraph1")}
          </p>
          <p>{t("home.sections.sevenca.paragraph2")}</p>
        </div>
      </div>
      <div className="flex flex-col items-center w-full px-4 py-16 md:px-20 md:w-3/5 h-min bg-contrast">
        <span className="text-4xl font-extrabold text-center text-primary">
          {t("home.sections.sevenca.gallery")}
        </span>
        <div className="px-4 py-10 ">
          <div className="flex items-center gap-4">
            <div
              onClick={handlePreviousSlide}
              className="text-white cursor-pointer"
            >
              <Icon
                path={mdiChevronLeftCircleOutline}
                size={width && width > 768 ? 2 : 1.5}
                className="transition duration-200 hover:scale-105 text-primary"
              />
            </div>
            <Carousel
              dynamicHeight={false}
              autoPlay={true}
              interval={5000}
              infiniteLoop={true}
              showArrows={false}
              showThumbs={false}
              showStatus={false}
              selectedItem={selectedImage}
              onChange={updateCurrentSlide}
            >
              <div key="slide-1" className="flex justify-center h-full w-[99%]">
                <img src={sevenca1} className="aspect-video " />
              </div>
              <div key="slide-2" className="flex justify-center h-full w-[99%]">
                <img src={sevenca2} className="aspect-video " />
              </div>
              <div key="slide-3" className="flex justify-center h-full w-[99%]">
                <img src={sevenca3} className="object-contain aspect-video " />
              </div>
              <div key="slide-3" className="flex justify-center h-full w-[99%]">
                <img src={sevenca4} className="object-contain aspect-video " />
              </div>
              <div key="slide-3" className="flex justify-center h-full w-[99%]">
                <img src={sevenca5} className="object-contain aspect-video " />
              </div>
              <div key="slide-3" className="flex justify-center h-full w-[99%]">
                <img src={sevenca6} className="object-contain aspect-video " />
              </div>
              <div key="slide-3" className="flex justify-center h-full w-[99%]">
                <img src={sevenca7} className="object-contain aspect-video " />
              </div>
              <div key="slide-3" className="flex justify-center h-full w-[99%]">
                <img src={sevenca8} className="object-contain aspect-video " />
              </div>
            </Carousel>
            <div
              onClick={handleNextSlide}
              className="text-white cursor-pointer"
            >
              <Icon
                path={mdiChevronRightCircleOutline}
                size={width && width > 768 ? 2 : 1.5}
                className="transition duration-200 hover:scale-105 text-primary"
              />
            </div>
          </div>
        </div>
      </div>
    </div>
  );
};
