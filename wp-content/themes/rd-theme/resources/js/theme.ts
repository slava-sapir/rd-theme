import "./components/header-scroll";
import "./components/toggle-mobile";
import "./components/mobile-functionality";
import { Counter } from './components/counter'; // Adjust the path as necessary

// You can also initiate counters in a separate file if needed
document.addEventListener("DOMContentLoaded", () => {
    const counters = document.querySelectorAll(".counter");

    counters.forEach((counterElement: Element) => {
        new Counter(counterElement);
    });
});