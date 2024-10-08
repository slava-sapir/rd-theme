// function move(): void {
//   const elem = document.getElementById("myBar") as HTMLElement;

//   if (elem) {
//     let width = 1;
//     const id = setInterval(frame, 10);

//     function frame(): void {
//       if (width >= 50) {
//         clearInterval(id);
//       } else {
//         width++;
//         elem.style.width = width + "%";
//       }
//     }
//   } else {
//     console.error("Element with id 'myBar' not found.");
//   }
// }

// // Trigger the function on window load
// window.onload = () => {
//   move();
// };

window.onload = () => {
  const circularBar = document.querySelector(".circular-bar") as HTMLElement;
  const percentValue = document.querySelector(".percent") as HTMLElement;

  let initialValue = 0;
  const finalValue = 70;
  const speed = 10;

  if (circularBar && percentValue) {
    const timer = setInterval(() => {
      initialValue += 1;

      circularBar.style.background = `conic-gradient(#4285f4 ${
        (initialValue / 100) * 360
      }deg, #e8f0f7 0deg)`;
      percentValue.innerHTML = `${initialValue}%`;

      if (initialValue >= finalValue) {
        clearInterval(timer);
      }
    }, speed);
  }
};

