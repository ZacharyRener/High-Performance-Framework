import React from "react";
import ReactDOM from "react-dom";
import WhitepaperFilters from "./_whitepaper-filters";

export default class Videos {
  constructor() {
    this.loadFilters();
  }

  loadFilters() {
    ReactDOM.render(
      <WhitepaperFilters
        searchText="Search Videos"
        pageSlug="/insights/webinars"
      />,
      document.querySelector("#wp-filter-root")
    );
  }
}
