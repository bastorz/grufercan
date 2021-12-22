import React from 'react';

import App from './src/_app';
import Layout from './src/components/layouts/Layout';
import { navigate } from 'gatsby';
import { isLoggedIn } from './src/services/auth/auth';

export const wrapRootElement = ({ element, props }) => {
  return <App {...props}>{element}</App>;
};

export const wrapPageElement = ({ element, props }) => {
  return <Layout {...props}>{element}</Layout>;
};
export const onRouteUpdate = ({ location, prevLocation }) => {
  const protectedRoutes = ['/ferreteria1', '/noticias'];
  if (!isLoggedIn()) {
    protectedRoutes.forEach((route) => {
      if (location.pathname === route || location.pathname === route + '/') {
        navigate('/login');
      }
    });
  }
};
