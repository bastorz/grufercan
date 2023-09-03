import {
  mdiChevronLeftCircleOutline,
  mdiChevronRightCircleOutline,
} from "@mdi/js";
import Icon from "@mdi/react";
import React, { useState } from "react";
import { useTranslation } from "react-i18next";
import { Carousel } from "react-responsive-carousel";
import { SEO } from "../../../components/SEO";
import { useLanguage } from "../../../hooks/useLanguage";
import { getPartnerImages } from "../../../components/PartnersImages";
const PartnersPage = (partnersProp: any) => {
  const { language } = useLanguage();
  const partner = partnersProp?.location.state?.partner;
  const [selectedImage, setSelectedImage] = useState(0);
  const { t } = useTranslation();
  const updateCurrentSlide = (index: number) => {
    if (selectedImage !== index) {
      setSelectedImage(index);
    }
  };
  const handleNextSlide = () => {
    if (selectedImage === getPartnerImages(partner?.id)?.length) {
      setSelectedImage(0);
    } else {
      setSelectedImage(selectedImage + 1);
    }
  };
  const handlePreviousSlide = () => {
    if (selectedImage === 0) {
      setSelectedImage(1);
    } else {
      setSelectedImage(selectedImage - 1);
    }
  };
  return (
    <>
      <SEO
        title={partner?.name}
        description={t(`partners.${partner?.id}`)}
        lang={language}
      />

      <div className="flex flex-col w-full px-10 lg:px-32">
        <div className="flex flex-col items-center w-full text-3xl text-center lg:mb-20 text-primary lg:text-6xl">
          <h1>{t("home.sections.partners.partners")}</h1>
          <img
            src={partner?.logo}
            alt={partner?.name + " logo"}
            className="max-w-[200px] p-2 transform  lg:hidden"
          />
        </div>
        <div className="relative flex flex-col gap-4 p-4 text-white lg:grid lg:divide-x-2 lg:grid-cols-5 bg-primary lg:p-14">
          <div className="col-span-1">
            <a href={partner?.url} target="_blank" rel="noopener noreferrer">
              <h2 className="text-2xl font-bold lg:text-4xl">
                {partner?.name}
              </h2>
            </a>
          </div>
          <div className="col-span-3 text-lg lg:px-10">
            <p>{t(`partners.${partner?.id}`)}</p>
          </div>
          <div className="absolute top-0 items-center justify-center hidden w-32 h-32 bg-white lg:flex right-16">
            <a href={partner?.url} target="_blank" rel="noopener noreferrer">
              <img
                src={partner?.logo}
                alt={partner?.name + " logo"}
                className="p-2"
              />
            </a>
          </div>
        </div>
        <div className="px-4 py-10 lg:px-36 bg-primary">
          <div className="flex items-center gap-4">
            <div
              onClick={handlePreviousSlide}
              className="text-white cursor-pointer"
            >
              <Icon
                path={mdiChevronLeftCircleOutline}
                size={"5vw"}
                className="transition duration-200 hover:scale-105"
              />
            </div>
            <Carousel
              autoPlay={true}
              interval={10000}
              infiniteLoop={true}
              showArrows={false}
              showThumbs={false}
              showStatus={false}
              selectedItem={selectedImage}
              onChange={updateCurrentSlide}
            >
              {getPartnerImages(partner?.id)?.map((partnerImage, i) => (
                <div
                  key={`slide-${i + 1}`}
                  className="flex justify-center h-full"
                >
                  <img src={partnerImage} className="object-contain" />
                </div>
              ))}
              {/* <div key="slide-1">
                <img src={partner?.background} className="aspect-auto " />
              </div>
              <div key="slide-2" className="aspect-auto ">
                <img src={partner?.background} />
              </div> */}
            </Carousel>
            <div
              onClick={handleNextSlide}
              className="text-white cursor-pointer"
            >
              <Icon
                path={mdiChevronRightCircleOutline}
                size={"5vw"}
                className="transition duration-200 hover:scale-105"
              />
            </div>
          </div>
        </div>
      </div>
    </>
  );
};
export default PartnersPage;
