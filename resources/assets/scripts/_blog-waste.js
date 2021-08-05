import ReactDOM from "react-dom";
import React from "react";
import Blog from "./library/_blog";

export default class TheWasteBlog {
  constructor() {
    this.renderBlogComponenent();
  }

  renderBlogComponenent() {
    ReactDOM.render(
      <Blog category="16" filters="false" />,
      document.querySelector("#blog-root")
    );
  }
}
