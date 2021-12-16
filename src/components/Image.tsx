import React from 'react';
import { GatsbyImage, getImage } from 'gatsby-plugin-image';
import { graphql, useStaticQuery } from 'gatsby';

export const Image = () => {
  const { images } = useStaticQuery(
    graphql`
      query MyQuery {
        allFile(filter: { sourceInstanceName: { eq: "images" } }) {
          edges {
            node {
              childImageSharp {
                gatsbyImageData(width: 200)
              }
            }
          }
        }
      }
    `,
  );
  // const image = getImage(imageData);
  // console.log('data', images);
  // return <>{image && <GatsbyImage image={image} alt={alt} />}</>;
  return <></>;
};
