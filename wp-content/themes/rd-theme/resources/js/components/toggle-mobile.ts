export class MobileMenuHandler {
  private mobileMenuBtn: HTMLElement | null;
  private mobileMenu: HTMLElement | null;

  constructor() {
    this.mobileMenuBtn = document.getElementById("mobileMenuBtn");
    this.mobileMenu = document.getElementById("mobileMenu");
    this.addMenuToggleListener();
  }

  private addMenuToggleListener(): void {
    if (this.mobileMenuBtn && this.mobileMenu) {
      this.mobileMenuBtn.addEventListener("click", () => {
        this.mobileMenu?.classList.toggle("hidden");
      });
    } else {
      console.error("Mobile menu button or mobile menu element not found");
    }
  }
}

