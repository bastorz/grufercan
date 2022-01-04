import React from 'react';
export const Iframe: React.FC = () => {
  return (
    <div className="w-full relative overflow-hidden pt-[100%]">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3507.3418939249655!2d-16.265814884921113!3d28.469248582482525!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xc41cc862670a913%3A0x93658115eb553265!2sC.%20de%20Fernando%20Primo%20de%20Rivera%2C%2055%2C%2038006%20Santa%20Cruz%20de%20Tenerife!5e0!3m2!1sen!2ses!4v1641198501258!5m2!1sen!2ses"
        className="absolute inset-0 w-full h-full border-none"
        allowFullScreen={false}
        loading="lazy"
      ></iframe>
    </div>
  );
};
