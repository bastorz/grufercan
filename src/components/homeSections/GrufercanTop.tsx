import React from 'react';
export const GrufercanTop: React.FC = () => {
  return (
    <div className="flex justify-between w-full">
      <div className="w-2/3 pl-10 md:pl-20 lg:pl-40 flex flex-col text-primary text-[8vw] font-sans leading-none justify-center">
        <span className="font-medium">
          <span className="font-bold ">GRU</span>PO
        </span>
        <span>
          <span className="font-bold">FER</span>RETEROS
        </span>
        <span>
          <span className="font-bold">CAN</span>ARIO
        </span>
      </div>
      <div className="w-1/3 bg-primary aspect-square" />
    </div>
  );
};
