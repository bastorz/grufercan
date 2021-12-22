import { navigate } from 'gatsby';
import Cookies from 'universal-cookie';
export const isBrowser = () => typeof window !== 'undefined';
export const isLoggedIn = () => {
  const cookies = new Cookies();
  const token = cookies.get('gfcbtoken');
  console.log('Is logged', token);
  if (isBrowser() && token) {
    return true;
  } else {
    return false;
  }
};
// export const handleLogin = ({ username, password }) => {
//   if (username === `john` && password === `pass`) {
//     return setUser({
//       username: `john`,
//       name: `Johnny`,
//       email: `johnny@example.org`,
//     });
//   }
//   return false;
// };
// export const isLoggedIn = () => {

//   return !!user.username;
// };
export const logout = () => {
  const cookies = new Cookies();
  cookies.remove('gfcbtoken', { path: '/' });
  navigate('/login');
};
