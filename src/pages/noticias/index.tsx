import { graphql } from 'gatsby';
import { GatsbyImage, getImage } from 'gatsby-plugin-image';
import React, { useState } from 'react';
import { Key } from 'react';
import { Image } from '../../components/Image';
import { SEO } from '../../components/SEO';
import { useNews } from '../../services/news/useNews';

const NewsPage = ({ data }: any) => {
  console.log('DATA: ', data);
  //make generic
  const bla = getImage(data.allFile.edges[0].node);
  const { news, isLoading, addNews } = useNews();
  console.log('NEWS: ', news);
  const [image, setImage] = useState<any>();
  const submit = async (event: React.SyntheticEvent) => {
    console.log('img', image);
    event.preventDefault();
    try {
      await addNews({
        title: 'Nueva noticia',
        subtitle: 'Subtitulo',
        image,
      });
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
      <div className="flex flex-col w-full">
        <div className="flex flex-grow bg-teal-200">
          <div className="flex flex-col space-y-10">
            {!isLoading &&
              news.length > 0 &&
              news.map((item: any, i: Key) => {
                return (
                  <div className="flex flex-col w-full" key={i}>
                    <div className="flex">{item.title}</div>
                    <div className="flex">{item.subtitle}</div>
                    {bla && <GatsbyImage image={bla} alt="ha" />}
                    {/* <Image /> */}
                    {/* <img
                      src={`${process.env.GATSBY_BASE_URL}/db/news/images/${item.imgUrl}`}
                      alt={item.title}
                      width={300}
                    /> */}
                  </div>
                );
              })}
          </div>
        </div>

        <form onSubmit={submit} encType="multipart/form-data">
          <input
            onChange={(e) => {
              if (e.target.files) {
                setImage(e.target.files[0]);
              }
            }}
            name="image"
            id="image"
            type="file"
          />
          <button className="bg-white">Add news</button>
        </form>
      </div>
    </>
  );
};
export const query = graphql`
  {
    allFile(filter: { sourceInstanceName: { eq: "images" } }) {
      edges {
        node {
          childImageSharp {
            gatsbyImageData(
              width: 200
              placeholder: DOMINANT_COLOR
              formats: [AUTO, WEBP, AVIF]
            )
          }
        }
      }
    }
  }
`;
export default NewsPage;
