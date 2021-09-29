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

document.addEventListener("DOMContentLoaded", () => {
  load("single-leadership", () => new SingleLeadership());
  load("page", () => new Global());
  load("archive", () => new Global());
  load("search", () => new Global());
  load("404", () => new Global());
  load("home", () => new Home());
  if (document.querySelector("#sticky-sections .navigation") != null) {
    load("page", () => new StickySections());
  }
  load("single", () => new Global());
  load("post-type-archive-project", () => new Experience());
  load("single-project", () => new SingleProject());
  load("page-template-template-blog", () => new TheBlog());
  load("post-type-archive-leadership", () => new Experience());
  load("template-library-item", () => new Whitepapers());
  load("template-library-item", () => new Guides());
  load("page-template-template-webinar", () => new Webinars());
});
