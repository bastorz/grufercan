export const handleErrors = (response: { ok: any; statusText: string }) => {
  if (!response.ok) {
    throw Error(response.statusText);
  }
  return response;
};
