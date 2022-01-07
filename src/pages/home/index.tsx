import { navigate } from 'gatsby';
import React from 'react';
import { SEO } from '../../components/SEO';
import { isLoggedIn } from '../../services/auth/auth';

const Ferreteria1Page = () => {
  // if (!isLoggedIn()) {
  //   navigate('/login');
  //   return null;
  // }
  return (
    <>
      <SEO
        title="Ferretería"
        description="Aquí puedes encontrar tus herramientas"
        lang="es"
      />
      <div className="flex flex-grow bg-lime-200">Ferr 1 page</div>
    </>
  );
};

export default Ferreteria1Page;
