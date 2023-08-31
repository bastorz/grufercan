import React from "react";

import App from "./src/_app";
import Layout from "./src/components/layouts/Layout";

export const wrapRootElement = ({ element, props }) => {
  return <App {...props}>{element}</App>;
};

export const wrapPageElement = ({ element, props }) => {
  return <Layout {...props}>{element}</Layout>;
};
