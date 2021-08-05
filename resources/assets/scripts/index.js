// import "./../styles/main.scss";

import load from "./load";
import "./library/_navbar";
import Home from "./_home";
import Global from "./_global";
import Experience from "./_experience";
import SingleProject from "./_single-project";
import TheBlog from "./_blog";
import StickySections from "./library/_sticky-sections";
import Whitepapers from "./_whitepapers";
import Webinars from "./_webinars";
import Guides from "./_guides";
import SingleLeadership from "./_single-leadership";
import TheWasteBlog from "./_blog-waste";
import TheDemandsBlog from "./_blog-demands";
import TheDesignBlog from "./_blog-design";

document.addEventListener("DOMContentLoaded", () => {
  load("page", () => new Global());
  load("home", () => new Home());
  if (document.querySelector("#sticky-sections .navigation") != null) {
    load("page", () => new StickySections());
  }
  load("single", () => new Global());
  load("page-template-template-projects", () => new Experience());
  load("single-project", () => new SingleProject());
  load("page-template-template-blog", () => new TheBlog());
  load("page-template-template-leadership", () => new Experience());
  load("page-template-template-whitepapers", () => new Whitepapers());
  load("page-template-template-guides", () => new Guides());
  load("page-template-template-webinar", () => new Webinars());
  load("single-leadership", () => new SingleLeadership());
  load("page-template-template-blog-waste", () => new TheWasteBlog());
  load("page-template-template-blog-demands", () => new TheDemandsBlog());
  load("page-template-template-blog-design", () => new TheDesignBlog());
});
