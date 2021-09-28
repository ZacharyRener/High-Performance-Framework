export default class SingleProject {
  constructor() {
    this.addCss();
    this.initCarousel();
    console.log("hello world");
  }

  addCss() {
    jQuery("#firstSlide").css("display", "block");
  }

  initCarousel() {
    setTimeout(() => {
      jQuery("div.project-gallery").customCarousel({
        slides: "div.slide",
        btnPrev: "a.btn-prev",
        btnNext: "a.btn-next",
        pagerLinks: ".thumbnails .thumb-slide",
        event: "click",
        circularRotation: false,
        useSwipe: true,
        autoRotation: false,
        autoHeight: true,
        switchTime: 3000,
        animSpeed: 500,
      });
    }, 5000);
  }
}
