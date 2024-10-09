
export class CircularProgressBar {
  private circularBar: HTMLElement;
  private percentValue: HTMLElement;
  private bgcolor: string;
  private opacityColor: string;
  private finalValue: number;
  private speed: number = 10;
  private initialValue: number = 0;

  constructor(
    circularBar: HTMLElement,
    percentValue: HTMLElement,
    bgcolor: string,
    opacityColor: string,
    finalValue: number
  ) {
    this.circularBar = circularBar;
    this.percentValue = percentValue;
    this.bgcolor = bgcolor;
    this.opacityColor = opacityColor;
    this.finalValue = finalValue;
  }

  public start(): void {
    const timer = setInterval(() => {
      this.initialValue += 1;
      this.circularBar.style.background = `conic-gradient(${this.bgcolor} ${
        (this.initialValue / 100) * 360
      }deg, ${this.opacityColor} 0deg)`;
      this.percentValue.innerHTML = `${this.initialValue}%`;

      if (this.initialValue >= this.finalValue) {
        clearInterval(timer);
      }
    }, this.speed);
  }
}






