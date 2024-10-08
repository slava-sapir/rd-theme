import { MobileMenuHandler } from "./components/toggle-mobile";
import { DropdownManager } from "./components/mobile-functionality";
import { Counter } from "./components/counter";
import { NavbarHandler } from "./components/header-scroll";
import { CircularProgressBar } from "./components/progress";

document.addEventListener("DOMContentLoaded", () => {

  new NavbarHandler();
  new DropdownManager();
  new MobileMenuHandler();

  const counters = document.querySelectorAll(".counter");
  counters.forEach((counterElement: Element) => {
    new Counter(counterElement);
  });

  window.onload = () => {
    const circularBars = document.querySelectorAll(".circular-bar");

    circularBars.forEach((circularBar) => {
      const percentValue = circularBar.querySelector(".percent") as HTMLElement;
      const bgcolor = circularBar.getAttribute("data-bgcolor") || "#000";
      const opacityColor =
        circularBar.getAttribute("data-opacitycolor") || "#fff";
      const finalValue = parseInt(
        circularBar.getAttribute("data-percent") || "0"
      );

      // Initialize the progress bar for each circularBar element
      const progressBar = new CircularProgressBar(
        circularBar as HTMLElement,
        percentValue,
        bgcolor,
        opacityColor,
        finalValue
      );
      progressBar.start();
    });
  };


});