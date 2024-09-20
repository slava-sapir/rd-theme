// document.addEventListener("DOMContentLoaded", () => {
//   const header = document.getElementById("header");
//   const navbar = document.querySelector(".navbar");
//   const navbarStart = document.querySelector(".navbar-start");

//   // Type guard to check if header and navbarStart elements exist
//   if (
//     header instanceof HTMLElement &&
//     navbar instanceof HTMLElement &&
//     navbarStart instanceof HTMLElement
//   ) {
//     window.addEventListener("scroll", () => {
//       const scrollPosition = window.scrollY;

//       if (scrollPosition > 100) {
//         header.classList.remove("absolute");
//         header.classList.add("fixed");
//         header.style.position = "fixed";
//         header.style.top = "0";
//         navbar.classList.remove("bg-blue");
//         navbar.classList.add("bg-white");
//         navbarStart.classList.remove("brightness-0", "invert");
//       } else {
//         header.classList.remove("fixed");
//         header.classList.add("absolute");
//         navbarStart.classList.add("brightness-0", "invert");
//         navbar.classList.remove("bg-white");
//         // navbar.classList.add("bg-blue");
//       }
//     });
//   } else {
//     console.error("Header or navbarStart element not found");
//   }
// });

document.addEventListener("DOMContentLoaded", () => {
  const header = document.getElementById("header");
  const navbar = document.querySelector(".navbar");
  const navbarStart = document.querySelector(".navbar-start");

  const onScroll = () => {
    const scrollPosition = window.scrollY;

    if (scrollPosition > 100) {
      applyFixedHeader();
    } else {
      resetHeader();
    }
  };

  const applyFixedHeader = () => {
    if (header && navbar && navbarStart) {
      header.classList.replace("absolute", "fixed");
      header.style.position = "fixed";
      header.style.top = "0";
      navbar.classList.replace("bg-blue", "bg-white");
      navbarStart.classList.remove("brightness-0", "invert");
    }
  };

  const resetHeader = () => {
    if (header && navbar && navbarStart) {
      header.classList.replace("fixed", "absolute");
      navbar.classList.replace("bg-white", "bg-blue");
      navbarStart.classList.add("brightness-0", "invert");
    }
  };

  if (header && navbar && navbarStart) {
    window.addEventListener("scroll", onScroll);
  } else {
    console.error("Header, navbar, or navbarStart element not found");
  }
});
