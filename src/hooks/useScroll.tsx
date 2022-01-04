import { useRef } from 'react';

/**
 * Usage:
 *  const ScrollDemo = () => {
 *   const [executeScroll, elRef] = useScroll()
 *   useEffect(executeScroll, [])
 *
 *   return <div ref={elRef}>Element to scroll to</div>
 *  }
 */
export const useScroll = () => {
  const elRef = useRef<null | HTMLDivElement>(null);
  const executeScroll = () => elRef.current && elRef.current.scrollIntoView();

  return [executeScroll, elRef];
};
