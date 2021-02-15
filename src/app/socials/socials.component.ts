import { Component, OnInit } from '@angular/core';
import { faLinkedin, faTwitter, faGithub } from '@fortawesome/free-brands-svg-icons'; // see in folder for naming

@Component({
  selector: 'app-socials',
  templateUrl: './socials.component.html',
  styleUrls: ['./socials.component.scss']
})
export class SocialsComponent implements OnInit {

  twitter = faTwitter;
  linkedin = faLinkedin;
  github = faGithub;
  
  constructor() { }

  ngOnInit() {
  }

}
