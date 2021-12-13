import { graphql } from "gatsby";

export const NEWS = graphql`
  query NEWS {
    allNewsJson {
      edges {
        node {
          title
          subtitle
        }
      }
    }
  }
`;
