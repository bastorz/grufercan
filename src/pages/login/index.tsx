import { graphql, navigate } from 'gatsby';
import React, { useState } from 'react';
import { Key } from 'react';
import { SEO } from '../../components/SEO';
import { useLogin } from '../../services/auth/useLogin';
import { useNews } from '../../services/news/useNews';

const LoginPage = () => {
  const { login } = useLogin();

  const submit = async (event: React.SyntheticEvent) => {
    event.preventDefault();
    try {
      const correctLogin = await login({
        email: 'hey',
        password: 'dwadwa',
      });
      if (correctLogin) {
        navigate('/noticias');
      }
    } catch (e: any) {
      console.log('ERROR', e);
    }
  };
  return (
    <>
      <SEO
        title="Noticias"
        description="Aquí puedes encontrar tus noticias"
        lang="es"
      />

      <div className="flex w-full h-[90vh]">
        <div className="m-auto">
          <form onSubmit={submit}>
            <div className="flex flex-col w-full space-y-2">
              <label>Email</label>
              <input
                // onChange={(e) => {
                //   if (e.target.files) {
                //     setImage(e.target.files[0]);
                //   }
                // }}
                name="mail"
                id="mail"
                type="mail"
              />
              <input
                // onChange={(e) => {
                //   if (e.target.files) {
                //     setImage(e.target.files[0]);
                //   }
                // }}
                name="password"
                id="password"
                type="password"
              />
              <button className="bg-white">Login</button>
            </div>
          </form>
        </div>
      </div>
    </>
  );
};
export default LoginPage;
