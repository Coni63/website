import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.scss']
})
export class AppComponent {
  title = 'nicolasmine';
  showEarth: boolean;
  includeReveal: boolean;
  viewFactor: number;
  duration: number;
  viewport_too_small : boolean;

  constructor() { }
  
  ngOnInit() {
    this.viewport_too_small = !this.isLarger(576);
    this.showEarth = this.isLarger(1180);
    this.includeReveal = this.isLarger(1180);
    this.viewFactor = this.isLarger(1180) ? 0.2 : 0;
    this.duration = this.isLarger(1180) ? 600 : 0;
    window.onresize = () => {
      this.viewport_too_small = !this.isLarger(576);
      this.showEarth = this.isLarger(1180);
      this.includeReveal = this.isLarger(1180);
      this.viewFactor = this.isLarger(1180) ? 0.2 : 0;
      this.duration = this.isLarger(1180) ? 600 : 0;
    };

  }

  isLarger(breakpoint): boolean {
    return document.documentElement.clientWidth > breakpoint;
  }

}
