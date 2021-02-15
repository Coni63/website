import { Component, OnInit, Input } from '@angular/core';
import { faExternalLinkSquareAlt, faChevronCircleDown, faChevronCircleUp } from '@fortawesome/free-solid-svg-icons'; // see in folder for naming

@Component({
  selector: 'app-project-list',
  templateUrl: './project-list.component.html',
  styleUrls: ['./project-list.component.scss']
})
export class ProjectListComponent implements OnInit {
  @Input() content: string;
  @Input() title: string;
  @Input() url: string;
  @Input() url_text: string;
  @Input() index: number;

  link = faExternalLinkSquareAlt;
  up = faChevronCircleUp;
  down = faChevronCircleDown;

  isExpand:boolean=true;

  constructor() { }

  ngOnInit() {
  }

  isExpandToggle(){
    this.isExpand=!this.isExpand;
 }

}