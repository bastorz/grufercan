import React from 'react';
import '../i18n';
import './styles/index.css';
import { ScrollingProvider } from 'react-scroll-section';
const App = ({ children }: any) => {
  console.log('Running App!');
  return (
    <ScrollingProvider offset={75}>
      <React.Suspense fallback={<div>Loading!</div>}>{children}</React.Suspense>
    </ScrollingProvider>
  );
};
export default App;
