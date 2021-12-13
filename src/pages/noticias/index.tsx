import React from "react";
import { useNews } from "../../services/news/useNews";

const NewsPage = () => {
  const { news } = useNews();

  return (
    <div className="flex-grow flex bg-teal-200">
      <div className="flex flex-col space-y-10">
        {news.allNewsJson.edges.map((item, i) => {
          return (
            <div className="flex flex-col">
              <div className="flex" key={i}>
                {item.node.title}
              </div>
              <div className="flex" key={i}>
                {item.node.subtitle}
              </div>
            </div>
          );
        })}
      </div>
    </div>
  );
};

export default NewsPage;
