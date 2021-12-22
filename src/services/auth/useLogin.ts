import { useEffect } from 'react';
import { useState } from 'react';
import Cookies from 'universal-cookie/es6';
import { handleErrors } from '../utils';
export const useLogin = () => {
  const login = async ({
    email,
    password,
  }: {
    email: string;
    password: string;
  }): Promise<any> => {
    const cookies = new Cookies();
    try {
      const formData = new FormData();
      formData.append('email', email);
      formData.append('password', password);

      await fetch(`http://localhost:8001/auth/login`, {
        method: 'post',
        body: formData,
      })
        .then(async (response) => {
          try {
            //if json is empty this will throw an error
            return await response.json();
          } catch (e: any) {
            return [];
          }
        })
        .then((tokenResponse) => {
          if (tokenResponse.code === 200) {
            cookies.set('gfcbtoken', tokenResponse.token.split(' ')[1], {
              path: '/',
            });
            return true;
          } else {
            return false;
          }
        });

      return true;
    } catch (e: any) {
      console.log('ERROR: ', e.message);
      return false;
    }
  };

  return { login };
};
