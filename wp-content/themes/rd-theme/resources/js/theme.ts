import { MobileMenuHandler } from "./components/toggle-mobile";
import { DropdownManager } from "./components/mobile-functionality";
import { Counter } from "./components/counter";
import { NavbarHandler } from "./components/header-scroll";

document.addEventListener("DOMContentLoaded", () => {
  new NavbarHandler();
  new DropdownManager();
  new MobileMenuHandler();
  const counters = document.querySelectorAll(".counter");
  counters.forEach((counterElement: Element) => {
    new Counter(counterElement);
  });
});