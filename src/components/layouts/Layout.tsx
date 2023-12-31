import { Link } from "gatsby";
import React, { useState } from "react";
import { Footer } from "./footer/Footer";
import { Header } from "./header/Header";

const Layout: React.FC = ({ children }) => {
  return (
    <div className="flex flex-col min-h-screen">
      <div className="sticky top-0 z-50 bg-white">
        <Header />
      </div>
      <div className="flex flex-grow">{children}</div>
      <div>
        <Footer />
      </div>
    </div>
  );
};

export default Layout;
