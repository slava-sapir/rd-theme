document.addEventListener("DOMContentLoaded", () => {
  const header = document.getElementById("header");
  const navbar = document.querySelector(".navbar");
  const navbarStart = document.querySelector(".navbar-start");
  const navbarItems = document.querySelectorAll(".navbar-item a");
  const icon = document.querySelector(".navbar-item img") as HTMLImageElement;
  const svg = document.querySelector(".navbar-item svg") as HTMLImageElement;
  const btnSvg = document.querySelector(".btn-circle svg") as HTMLImageElement;

  const onScroll = () => {
    const scrollPosition = window.scrollY;

    if (scrollPosition > 100) {
      applyFixedHeader();
    } else {
      resetHeader();
    }
  };

  const applyFixedHeader = () => {
    if (header && navbar && navbarStart && navbarItems && icon && svg && btnSvg) {
      header.classList.replace("absolute", "fixed");
      header.style.position = "fixed";
      header.style.top = "0";
      navbar.classList.replace("bg-blue", "bg-white");
      navbarStart.classList.remove("brightness-0", "invert");

      navbarItems.forEach((item) => {
        item.classList.replace("text-white", "text-off-black");
      });
      icon.style.filter = "invert(1)";
      svg.style.filter = "invert(1)";
      btnSvg.setAttribute("stroke", "black");
    }
  };

  const resetHeader = () => {
    if (header && navbar && navbarStart && navbarItems && icon && svg && btnSvg) {
      header.classList.replace("fixed", "absolute");
      navbar.classList.replace("bg-white", "bg-blue");
      navbarStart.classList.add("brightness-0", "invert");

      navbarItems.forEach((item) => {
        item.classList.replace("text-off-black", "text-white");
      });

      icon.style.filter = "invert(0)";
      svg.style.filter = "invert(0)";
      btnSvg.setAttribute("stroke", "white");
    }
  };

  if (header && navbar && navbarStart && navbarItems.length > 0) {
    window.addEventListener("scroll", onScroll);
  } else {
    console.error("Header, navbar, navbarStart, or navbarItems not found");
  }
});

