document.addEventListener("DOMContentLoaded", function () {
  // Select all elements with the class 'counter'
  const counters: NodeListOf<Element> = document.querySelectorAll(".counter");

  counters.forEach((counter: Element) => {
    const targetAttr: string | null = counter.getAttribute("data-target");
    const target: number = targetAttr ? parseInt(targetAttr) : 0; // Safely handle null
    let count: number = 0;
    let started: boolean = false;
    const increment: number = target / 100;

    function updateCounter(): void {
      count += increment;
      if (count < target) {
        counter.textContent = Math.ceil(count).toString(); // Update counter with rounded number
        setTimeout(updateCounter, 20); // Adjust the speed
      } else {
        counter.textContent = target.toString(); // Set the counter to the final number
      }
    }

    // Add hover event listener for each counter
    counter.addEventListener("mouseover", function () {
      if (!started) {
        started = true;
        updateCounter();
      }
    });
  });
});
