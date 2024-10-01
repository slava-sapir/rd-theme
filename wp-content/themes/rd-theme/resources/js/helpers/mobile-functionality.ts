document.addEventListener("DOMContentLoaded", () => {
  const dropdowns = document.querySelectorAll<HTMLLIElement>("li.relative");

  addDropdownListeners();
  // Function to close all dropdowns
  function closeAllDropdowns() {
    dropdowns.forEach((dropdown) => {
      const dropdownContent =
        dropdown.querySelector<HTMLUListElement>(".dropdown-content");
      const svgIcon = dropdown.querySelector<SVGElement>("svg");
      if (dropdownContent && !dropdownContent.classList.contains("hidden")) {
        dropdownContent.classList.add("hidden");
        if (svgIcon) {
          svgIcon.classList.remove("rotate-180");
        }
      }
    });
  }

  // Function to Add event listeners for each dropdown
  function addDropdownListeners() {
    dropdowns.forEach((dropdown) => {
      const toggleButton =
        dropdown.querySelector<HTMLAnchorElement>("a[role='button']");
      const dropdownContent =
        dropdown.querySelector<HTMLUListElement>(".dropdown-content");
      const svgIcon = toggleButton?.querySelector<SVGElement>("svg");

      if (toggleButton && dropdownContent && svgIcon) {
       
        toggleButton.addEventListener("click", (event) => {
          event.preventDefault();
          event.stopPropagation();
          dropdownContent.classList.toggle("hidden");
          dropdownContent.classList.toggle("opacity-100");
          dropdownContent.classList.toggle("opacity-0");
          dropdownContent.classList.toggle("max-h-0");
          dropdownContent.classList.toggle("max-h-96");

          svgIcon.classList.toggle("rotate-180");
        });

        dropdownContent.classList.add(
          "transition-all",
          "duration-300",
          "ease-in-out",
          "overflow-hidden",
          "max-h-0",
          "opacity-0"
        );

        const subDropdowns = dropdown.querySelectorAll<HTMLLIElement>(
          ".dropdown-content ul.relative"
        );

        subDropdowns.forEach((subDropdown) => {
          const subToggleButton =
            subDropdown.querySelector<HTMLAnchorElement>("a[role='button']");
          const subDropdownContent =
            subDropdown.querySelector<HTMLUListElement>(".dropdown-content");
          const subSvgIcon = subToggleButton?.querySelector<SVGElement>("svg");

          if (subToggleButton && subDropdownContent && subSvgIcon) {
            subToggleButton.addEventListener("click", (event) => {
              event.preventDefault();
              event.stopPropagation();

              subDropdownContent.classList.toggle("hidden");
              subDropdownContent.classList.toggle("opacity-100");
              subDropdownContent.classList.toggle("opacity-0");
              subDropdownContent.classList.toggle("max-h-0");
              subDropdownContent.classList.toggle("max-h-96");
              subSvgIcon.classList.toggle("rotate-90");
            });
            subDropdownContent.classList.add(
              "transition-all",
              "duration-300",
              "ease-in-out",
              "overflow-hidden",
              "max-h-0",
              "opacity-0"
            );
          }
        });
      }
    });
  }

  // Close all dropdowns when clicking outside
  document.addEventListener("click", (event) => {
    if (!(event.target as HTMLElement).closest("li.relative")) {
      closeAllDropdowns();
    }
  });
});
