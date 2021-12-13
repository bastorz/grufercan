import React from "react";
import { Footer } from "./footer/Footer";
import { Header } from "./header/Header";

const Layout = ({ children }) => {
  return (
    <div className="min-h-screen flex flex-col">
      <div>
        <Header />
      </div>
      <div className="flex flex-grow bg-gray-200">{children}</div>
      <div>
        <Footer />
      </div>
    </div>
  );
};

export default Layout;
