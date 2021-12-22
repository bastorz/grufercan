import * as React from 'react';
import { useTranslation } from 'react-i18next';

const IndexPage = () => {
  const { t } = useTranslation();

  return (
    <div>
      <div>Home page!</div>
      <div>{t('translate.this')}</div>
    </div>
  );
};

export default IndexPage;
