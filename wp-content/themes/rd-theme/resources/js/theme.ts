import "./helpers/header-scroll";
import "./helpers/toggle-mobile";
import "./helpers/mobile-functionality";
// import "./helpers/counter";
import { Counter } from "./helpers/counter";
import { NavbarHandler } from "./helpers/header-scroll";

document.addEventListener("DOMContentLoaded", () => {
  const counters = document.querySelectorAll(".counter");
  counters.forEach((counterElement: Element) => {
    new Counter(counterElement);
  });
});

document.addEventListener("DOMContentLoaded", () => {
  new NavbarHandler();
});