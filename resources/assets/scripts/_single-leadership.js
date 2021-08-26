export default class SingleLeadership {
  constructor() {
    //this.enableFunFactSlider();
    this.customClose();
  }

  enableFunFactSlider() {
    const section = document.querySelector(".fun-fact-slick");
    if (section != null) {
      jQuery(".fun-fact-slick").slick();
    }
  }

  customClose() {
    document
      .querySelector(".card:nth-child(1) > .card-header a")
      .classList.toggle("customClose");
    document.querySelectorAll(".card-header a").forEach((card) => {
      card.addEventListener("click", (e) => {
        e.currentTarget.classList.toggle("customClose");
      });
    });
  }
}
