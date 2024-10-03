export class Counter {
    private target: number;
    private increment: number;
    private count: number = 0;
    private started: boolean = false;
    private counterElement: Element;

    constructor(counterElement: Element) {
        this.counterElement = counterElement;
        const targetAttr: string | null = this.counterElement.getAttribute("data-target");
        this.target = targetAttr ? parseInt(targetAttr) : 0;
        this.increment = this.target / 100;

        this.counterElement.addEventListener("mouseover", () => {
            this.startCounting();
        });
    }

    private startCounting(): void {
        if (!this.started) {
            this.started = true;
            this.updateCounter();
        }
    }

    private updateCounter(): void {
        this.count += this.increment;

        // Set the count to the target value at the end
        if (this.count >= this.target) {
            this.count = this.target;
        }

        this.counterElement.textContent = Math.ceil(this.count).toString();

        if (this.count < this.target) {
            setTimeout(() => this.updateCounter(), 20);
        }
    }
}