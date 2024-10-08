
export class NavbarHandler {
  private navbar: HTMLElement | null;
  private navbarStart: HTMLElement | null;
  private navbarItems: NodeListOf<HTMLAnchorElement>;
  private icon: HTMLImageElement | null;
  private svg: HTMLImageElement | null;
  private btnSvg: HTMLImageElement | null;

  constructor() {
    this.navbar = document.querySelector(".navbar");
    this.navbarStart = document.querySelector(".navbar-start");
    this.navbarItems = document.querySelectorAll(".navbar-item a");
    this.icon = document.getElementById("phone-icon") as HTMLImageElement;
    this.svg = document.querySelector("#mobileMenuBtn svg") as HTMLImageElement;
    this.btnSvg = document.querySelector(".btn-circle svg") as HTMLImageElement;

    this.initialize();
  }

  private initialize() {
    if (this.navbar && this.navbarStart && this.navbarItems.length > 0) {
      window.addEventListener("scroll", () => this.onScroll());
    } else {
      console.error("Header, navbar, navbarStart, or navbarItems not found");
    }
  }

  private onScroll() {
    const scrollPosition = window.scrollY;
    if (scrollPosition > 100) {
      this.applyFixedHeader();
    } else {
      this.resetHeader();
    }
  }

  private applyFixedHeader() {
    if (
      this.navbar &&
      this.navbarStart &&
      this.icon &&
      this.svg &&
      this.btnSvg
    ) {
      this.navbar.classList.replace("bg-blue", "bg-white");
      this.navbarStart.classList.remove("brightness-0", "invert");

      this.navbarItems.forEach((item) => {
        item.classList.replace("text-white", "text-off-black");
      });

      this.icon.style.filter = "invert(1)";
      this.svg.style.filter = "invert(1)";
      this.btnSvg.setAttribute("stroke", "black");
    }
  }

  private resetHeader() {
    if (
      this.navbar &&
      this.navbarStart &&
      this.icon &&
      this.svg &&
      this.btnSvg
    ) {
      this.navbar.classList.replace("bg-white", "bg-blue");
      this.navbarStart.classList.add("brightness-0", "invert");

      this.navbarItems.forEach((item) => {
        item.classList.replace("text-off-black", "text-white");
      });

      this.icon.style.filter = "invert(0)";
      this.svg.style.filter = "invert(0)";
      this.btnSvg.setAttribute("stroke", "white");
    }
  }
}

// document.addEventListener("DOMContentLoaded", () => {
//   new NavbarHandler();
// });
