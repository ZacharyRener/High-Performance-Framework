import React from "react";
import ReactDOM from "react-dom";
import SpireServices from "./library/_spire-services";
import LoadingBar from "./_loadingBar";
import SlickCarousel from "./_slick-carousel";
import TypeIt from "typeit";

function isInViewport(element) {
  const rect = element.getBoundingClientRect();
  return (
    rect.top >= 0 &&
    rect.left >= 0 &&
    rect.bottom <=
      (window.innerHeight || document.documentElement.clientHeight) &&
    rect.right <= (window.innerWidth || document.documentElement.clientWidth)
  );
}

export default class Home {
  constructor() {
    this.handleHiddenHover(".project");
    this.handleHiddenHover(".solution");
    this.matchOfferHeights();
    this.handleIndustryHover();
    //this.renderSlickCarousel();
    this.addTypeAnimation();
    this.handlePathwayHover();
  }

  runAnimation(selector) {
    new TypeIt(selector, {
      speed: 100,
      loop: true,
    })
      .pause(5000)
      .go()
      .pause(1000);
  }

  addTypeAnimation() {
    setTimeout(() => {
      const amountOfSlides = document.querySelectorAll(
        ".home-slider .owl-item"
      ).length;
      console.log(amountOfSlides);
      for (let i = 1; i <= amountOfSlides; i++) {
        this.runAnimation(`.home-slider .owl-item:nth-child(${i}) h2`);
      }
    }, 1000);
  }

  renderSlickCarousel() {
    // For the fullwidth slider section, not the hero slider
    jQuery(".slickCarousel").slick({
      dots: true,
      infinite: true,
      speed: 500,
      slidesToShow: 1,
      slidesToScroll: 1,
      appendDots: jQuery(".dots-container"),
    });
    jQuery("#slickCarouselWrapper .ontainer.for-dots").attr(
      "style",
      `top:${
        jQuery("#slickCarouselWrapper .content-wrapper").position().top - 40
      }px`
    );
  }

  handleHiddenHover(selector) {
    document.querySelectorAll(selector).forEach((project) => {
      project.addEventListener("mouseenter", (e) => {
        if (e.currentTarget.classList.contains("hidden")) {
          e.currentTarget.classList.remove("hidden");
        }
      });
      project.addEventListener("mouseleave", (e) => {
        if (!e.currentTarget.classList.contains("hidden")) {
          e.currentTarget.classList.add("hidden");
        }
      });
    });
  }

  matchOfferHeights() {
    let largestHeight = -1;
    document.querySelectorAll("#home-offers .team-box").forEach((offer) => {
      if (offer.innerHeight > largestHeight) largestHeight = offer.innerHeight;
    });
    document.querySelectorAll("#home-offers .team-box").forEach((offer) => {
      offer.style.innerHeight = largestHeight;
    });
  }

  handleIndustryHover() {
    let industries = document.querySelectorAll(
      ".pathways .a-button .wrapper > a"
    );
    industries.forEach((industry) => {
      industry.addEventListener("mouseenter", (e) => {
        console.log(
          e.currentTarget.children[1].children[0].children[0].classList.add(
            "hover"
          )
        );
      });
      industry.addEventListener("mouseleave", (e) => {
        console.log(
          e.currentTarget.children[1].children[0].children[0].classList.remove(
            "hover"
          )
        );
      });
    });
  }

  handlePathwayHover() {
    document.querySelectorAll(".a-button .wrapper").forEach((pathway) => {
      pathway.addEventListener("mouseenter", (e) => {
        e.currentTarget.classList.toggle("hovered");
      });
      pathway.addEventListener("mouseleave", (e) => {
        e.currentTarget.classList.toggle("hovered");
      });
    });
  }
}
