import React from 'react';
import { Footer } from './footer/Footer';
import { Header } from './header/Header';

const Layout: React.FC = ({ children }) => {
  return (
    <div className="flex flex-col min-h-screen">
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
