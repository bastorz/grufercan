import React from 'react';
import '../i18n';
import { CookiesDialog } from './components/CookiesDialog';
import './styles/index.css';
const App = ({ children }: any) => {
  console.log('Running App!');
  return (
    <React.Suspense fallback={<div>Loading!</div>}>
      <div className="relative">
        <CookiesDialog /> {children}
      </div>
    </React.Suspense>
  );
};
export default App;
