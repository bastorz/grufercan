import React from 'react';
import '../i18n';
import './styles/index.css';
const App = ({ children }: any) => {
  console.log('Running App!');
  return (
    <React.Suspense fallback={<div>Loading!</div>}>{children}</React.Suspense>
  );
};
export default App;
