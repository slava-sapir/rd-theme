export class DropdownManager {
  private dropdowns: NodeListOf<HTMLLIElement>;

  constructor() {
    this.dropdowns = document.querySelectorAll<HTMLLIElement>("li.relative");
    this.addDropdownListeners();
    this.addGlobalClickListener();
  }

  private closeAllDropdowns(): void {
    this.dropdowns.forEach((dropdown) => {
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

  private addDropdownListeners(): void {
    this.dropdowns.forEach((dropdown) => {
      const toggleButton =
        dropdown.querySelector<HTMLAnchorElement>("a[role='button']");
      const dropdownContent =
        dropdown.querySelector<HTMLUListElement>(".dropdown-content");
      const svgIcon = toggleButton?.querySelector<SVGElement>("svg");

      if (toggleButton && dropdownContent && svgIcon) {
        this.setupDropdown(toggleButton, dropdownContent, svgIcon);

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
            this.setupDropdown(
              subToggleButton,
              subDropdownContent,
              subSvgIcon,
              "rotate-90"
            );
          }
        });
      }
    });
  }

  private setupDropdown(
    toggleButton: HTMLAnchorElement,
    dropdownContent: HTMLUListElement,
    svgIcon: SVGElement,
    rotationClass: string = "rotate-180"
  ): void {
    toggleButton.addEventListener("click", (event) => {
      event.preventDefault();
      event.stopPropagation();

      dropdownContent.classList.toggle("hidden");
      dropdownContent.classList.toggle("opacity-100");
      dropdownContent.classList.toggle("opacity-0");
      dropdownContent.classList.toggle("max-h-0");
      dropdownContent.classList.toggle("max-h-96");

      svgIcon.classList.toggle(rotationClass);
    });

    dropdownContent.classList.add(
      "transition-all",
      "duration-300",
      "ease-in-out",
      "overflow-hidden",
      "max-h-0",
      "opacity-0"
    );
  }

  private addGlobalClickListener(): void {
    document.addEventListener("click", (event) => {
      if (!(event.target as HTMLElement).closest("li.relative")) {
        this.closeAllDropdowns();
      }
    });
  }
}