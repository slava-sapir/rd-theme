
window.onload = () => {
  const circularBar = document.querySelector(".circular-bar") as HTMLElement;
  const percentValue = document.querySelector(".percent") as HTMLElement;

  let initialValue = 0;
  const finalValue = 70;
  const speed = 10;
  const color1 = "#569C40";
  const color2 = "#ABCEA0";

  if (circularBar && percentValue) {
    const timer = setInterval(() => {
      initialValue += 1;

      // circularBar.style.background = `conic-gradient(#4285f4 ${
      //   (initialValue / 100) * 360
      // }deg, #e8f0f7 0deg)`;
     circularBar.style.background = `conic-gradient(${color1} ${
       (initialValue / 100) * 360
     }deg, ${color2} 0deg)`;
      percentValue.innerHTML = `${initialValue}%`;

      if (initialValue >= finalValue) {
        clearInterval(timer);
      }
    }, speed);
  }
};

