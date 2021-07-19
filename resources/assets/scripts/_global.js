export default class Global {
  constructor() {
    this.handleTrayMenu();
    this.handleLeftNavHover();
    //this.carlElefanteCustomizations();
    //if (window.innerWidth > 768) this.makeOffersSticky();
  }

  handleTrayMenu() {
    document
      .querySelectorAll(".top-level-nav-item.has-dropdown-menu")
      .forEach((page) => {
        page.addEventListener("mouseenter", (e) => {
          e.currentTarget.children[1].children[0].classList.remove("hidden");
        });

        page.addEventListener("mouseleave", (e) => {
          e.currentTarget.children[1].children[0].classList.add("hidden");
        });
      });
  }

  handleLeftNavHover() {
    if (document.querySelector("li.has-children .sub-menu") != null) {
      const leftValue = document
        .querySelector("aside")
        .getBoundingClientRect().left;
      document.querySelectorAll(".navigation > ul > li").forEach((pageItem) => {
        pageItem.addEventListener("click", (e) => {
          if (
            e.clientX > e.currentTarget.children[0].offsetWidth + leftValue ||
            e.clientX == 0
          ) {
            e.preventDefault();
            console.log(true);
            if (e.currentTarget.children[1] != null) {
              if (e.currentTarget.children[1].classList.contains("hidden")) {
                e.currentTarget.children[1].classList.remove("hidden");
                e.currentTarget.classList.add("right-arrow");
              } else {
                e.currentTarget.children[1].classList.add("hidden");
                e.currentTarget.classList.remove("right-arrow");
              }
            }
          }
        });
      });
      document.querySelectorAll(".sub-menu > li > a").forEach((pageItem) => {
        pageItem.addEventListener("click", (e) => {
          e.preventDefault();
          const href = e.currentTarget.href;
          document.location = href;
        });
      });
      if (document.querySelector("li.has-children.active .sub-menu") != null) {
        document.querySelector("li.has-children.active").click();
      }
    }
  }

  makeOffersSticky() {
    if (jQuery(".sidebar-offer").length > 0) {
      let initialOfferLocation = jQuery(".offer-container").offset().top;

      jQuery(window).scroll(function () {
        const headerLocation =
          window.innerHeight >= 700
            ? jQuery("#header").offset().top + 265
            : jQuery("#header").offset().top + 180;
        const offerLocation = jQuery(".offer-container").offset().top;
        console.log(headerLocation);
        if (jQuery(".offer-container").hasClass("fixed-to-bottom")) {
          if (
            jQuery(".offer-container.fixed-to-bottom").offset().top >
            headerLocation
          ) {
            jQuery(".offer-container").removeClass("fixed-to-bottom");
          }
        }

        if (headerLocation >= offerLocation) {
          if (
            document.body.getBoundingClientRect().height - headerLocation <=
            400
          ) {
            // get the height of the offer container
            let height = jQuery(".offer-container").innerHeight();
            // assign that height to offer-spacer
            jQuery(".offer-spacer").attr("style", `height: ${height}px`);
            jQuery(".offer-container").addClass("fixed");
            jQuery(".offer-container").addClass("fixed-to-bottom");
          } else {
            // get the height of the offer container
            let height = jQuery(".offer-container").innerHeight();
            // assign that height to offer-spacer
            jQuery(".offer-spacer").attr("style", `height: ${height}px`);
            jQuery(".offer-container").addClass("fixed");
            jQuery(".offer-container").removeClass("fixed-to-bottom");
          }
        }
        if (headerLocation < initialOfferLocation) {
          // set the height of offer-spacer to zero
          jQuery(".offer-spacer").attr("style", "");
          jQuery(".offer-container").removeClass("fixed");
          jQuery(".offer-container").removeClass("fixed-to-bottom");
        }
      });
    }
  }

  carlElefanteCustomizations() {
    document
      .querySelectorAll(
        ".dropdown-menu-custom > .column:nth-child(2) > .section"
      )
      .forEach((e) => {
        e.classList.add("hidden");
      });

    document
      .querySelectorAll(
        ".dropdown-menu-custom > .column:nth-child(1) > .section"
      )
      .forEach((e) => {
        let childCount = -1;
        e.addEventListener("mouseenter", (el) => {
          const hoveredElement = el.toElement;

          for (
            let i = 0;
            i < hoveredElement.parentElement.children.length;
            i++
          ) {
            const child = hoveredElement.parentElement.children[i];
            if (child === hoveredElement) {
              childCount = i + 1;
              console.log("childCount:", childCount);
            }
          }
          const correspondingColumn = document.querySelector(
            `.dropdown-menu-custom > .column:nth-child(2) > .section:nth-child(${childCount})`
          );
          console.log(
            `.dropdown-menu-custom > .column:nth-child(2) > .section:nth-child(${childCount})`
          );
          correspondingColumn.classList.remove("hidden");
        });

        e.addEventListener("mouseleave", (el) => {
          const correspondingColumn = document.querySelector(
            `.dropdown-menu-custom > .column:nth-child(2) > .section:nth-child(${childCount})`
          );
          console.log(
            `.dropdown-menu-custom > .column:nth-child(2) > .section:nth-child(${childCount})`
          );
          if (
            document.querySelector(
              `.dropdown-menu-custom > .column:nth-child(2) > .section:nth-child(${childCount}):hover`
            ) != null
          ) {
            document
              .querySelector(
                `.dropdown-menu-custom > .column:nth-child(2) > .section:nth-child(${childCount}):hover`
              )
              .addEventListener("mouseleave", (tmp) => {
                correspondingColumn.classList.add("hidden");
              });
          } else {
            correspondingColumn.classList.add("hidden");
          }
        });
      });
  }
}
