document.addEventListener("DOMContentLoaded", function () {

  const counters: NodeListOf<Element> = document.querySelectorAll(".counter");

  counters.forEach((counter: Element) => {
    const targetAttr: string | null = counter.getAttribute("data-target");
    const target: number = targetAttr ? parseInt(targetAttr) : 0; 
    let count: number = 0;
    let started: boolean = false;
    const increment: number = target / 100;

    function updateCounter(): void {
      count += increment;
      if (count < target) {
        counter.textContent = Math.ceil(count).toString();
        setTimeout(updateCounter, 20);
      } else {
        counter.textContent = target.toString();
      }
    }

    counter.addEventListener("mouseover", function () {
      if (!started) {
        started = true;
        updateCounter();
      }
    });
  });
  
});
