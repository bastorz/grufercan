import { Link } from 'gatsby';
import React, { useState } from 'react';
import { Footer } from './footer/Footer';
import { Header } from './header/Header';

const Layout: React.FC = ({ children }) => {
  const [acceptedCookies, setAcceptedCookies] = useState(false);
  return (
    <div className="relative flex flex-col min-h-screen">
      {!acceptedCookies && localStorage.getItem('gfccookies') === null && (
        <div className="fixed z-50 w-screen md:w-[35vw] p-10 bg-primary border-2 border-white rounded-sm bottom-10 right-0 md:right-10 opacity-[97%] text-justify">
          <div className="flex flex-col gap-2">
            <div className="text-white">
              Esta web únicamente utiliza cookies propias con finalidad técnica,
              no recaba ni cede datos de carácter personal de usuarios sin su
              conocimiento. Para obtener más información de nuestra política de
              cookies pulse{' '}
              <Link className="underline underline-offset-2" to="/cookies">
                aquí
              </Link>
              . También puede consultar nuestra{' '}
              <Link className="underline underline-offset-2" to="/privacy">
                Política de privacidad
              </Link>{' '}
              y{' '}
              <Link className="underline underline-offset-2" to="/legal">
                Aviso Legal
              </Link>
            </div>
            <div className="flex justify-center w-full gap-4">
              <button
                className="px-6 py-2 text-black bg-white rounded-md"
                onClick={() => (location.href = 'http://www.google.com')}
              >
                Rechazar
              </button>
              <button
                className="px-6 py-2 bg-black rounded-md text-contrast"
                onClick={() => {
                  localStorage.setItem('gfccookies', 'accepted');
                  setAcceptedCookies(true);
                }}
              >
                Aceptar
              </button>
            </div>
          </div>
        </div>
      )}

      <div>
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
