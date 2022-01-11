import { useState } from 'react';
export const useMail = () => {
  const [isSending, setIsSending] = useState(false);

  const sendContactMail = async ({
    name,
    email,
    phone,
    message,
  }: {
    name: string;
    email: string;
    phone: string;
    message: string;
  }): Promise<any> => {
    try {
      const formData = new FormData();
      formData.append('email', email);
      formData.append('name', name);
      formData.append('phone', phone);
      formData.append('message', message);
      setIsSending(true);

      await fetch(
        `${process.env.GATSBY_LOCALHOST}${process.env.GATSBY_BASE_URL}api/email`,
        {
          method: 'post',
          body: formData,
        },
      );
      setIsSending(false);
      return true;
    } catch (e: any) {
      console.log('ERROR: ', e.message);
      return false;
    }
  };

  return { sendContactMail, isSending };
};
