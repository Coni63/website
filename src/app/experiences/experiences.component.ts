import { Component, OnInit, Input } from '@angular/core';

@Component({
  selector: 'app-experiences',
  templateUrl: './experiences.component.html',
  styleUrls: ['./experiences.component.scss']
})
export class ExperiencesComponent implements OnInit {
  @Input() includeReveal: boolean;
  @Input() viewFactor: number;
  @Input() duration: number;
  @Input() viewport_too_small: boolean;
  
  experiences = [
    {
      "date" : "01/2019 - Today",
      "title" : "Digitization Specialist",
      "description": "As part of the Digitization team, our objective is to serve operational teams with digital solutions. This result is various tasks such as developing APIs and/or websites, create some predictive models, parsing historical files, ...",
      "company": "HUSKY",
      "urls" : [{
        "text" : "Official Website", 
        "url" : "http://www.husky.co/EN-US/Beverage-Packaging-Overview.aspx"
      }],
      "type" : "work",
      "name" : "Current Job"
    },
    {
      "date" : "11/2014 - 12/2018",
      "title" : "Industrial Designer",
      "description": "Design of PET injection Molds (for plastic bottles preforms). Creation of Excel tools to simplify some tasks using VBA, Support of project's coordination",
      "company": "HUSKY",
      "urls" : [{
        "text" : "Official Website", 
        "url" : "http://www.husky.co/EN-US/Beverage-Packaging-Overview.aspx"
      }],
      "type" : "work"
    },
    {
      "date" : "04/2013 - 09/2013",
      "title" : "Industrial project of end of studies - Designing a curved chain",
      "description": "During this project, I had to research an alternative to the current low-efficient system to cut branches on a tree. One of the alternatives was to design a curved chainsaw. This is the solution I had to investigate on. At the end of the project, a mechanical and thermal analysis has been done and a prototype was started",
      "company": "ISI Process",
      "urls" : [{
        "text" : "Official Website", 
        "url" : "http://www.isi-process.com/"
      }],
      "type" : "project",
      "name" : "3<sup>rd</sup> year Internship"
    },
    {
      "date" : "05/2012 - 09/2012",
      "title" : "Development and qualification of materials",
      "description": "During this intership, I participated to the logistics and tests for the development and validation of equipments to perform a reparation in an highly radioactive area. To simplify gestion of material, I've set-up an Access Database for equipment management and documentation then extended to other projects",
      "company": "AREVA",
      "urls" : [{
        "text" : "Official Website", 
        "url" : "http://www.areva-np.com/"
      }],
      "type" : "project",
      "name" : "2<sup>nd</sup> year Internship"
    }
  ]

  constructor() { }

  ngOnInit() {
  }

}
