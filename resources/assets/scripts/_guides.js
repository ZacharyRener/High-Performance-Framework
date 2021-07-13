import React from "react";
import ReactDOM from "react-dom";
import WhitepaperFilters from "./_whitepaper-filters";

export default class Guides {
  constructor() {
    this.loadFilters();
  }

  loadFilters() {
    ReactDOM.render(
      <WhitepaperFilters
        searchText="Search Guides"
        pageSlug="/insights/guides"
      />,
      document.querySelector("#wp-filter-root")
    );
  }
}
