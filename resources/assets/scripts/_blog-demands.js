import ReactDOM from "react-dom";
import React from "react";
import Blog from "./library/_blog";

export default class TheDemandsBlog {
  constructor() {
    this.renderBlogComponenent();
  }

  renderBlogComponenent() {
    ReactDOM.render(
      <Blog category="15" filters="false" />,
      document.querySelector("#blog-root")
    );
  }
}
