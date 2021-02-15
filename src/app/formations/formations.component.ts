import { Component, OnInit, Input } from '@angular/core';

@Component({
  selector: 'app-formations',
  templateUrl: './formations.component.html',
  styleUrls: ['./formations.component.scss']
})
export class FormationsComponent implements OnInit {
  @Input() includeReveal: boolean;
  @Input() viewFactor: number;
  @Input() duration: number;
  @Input() viewport_too_small: boolean;
  
  formations = [
    {
      "date" : "2017 - 2018",
      "title" : "Master Of Data Sciences",
      "description" : "Online Classes (OpenClassrooms & CentralSupelec)",
      "urls" : [
        {
          "text" : "OpenClassrooms's path", 
          "url" : "https://openclassrooms.com/paths/data-scientist"
        }
      ],
      "location" : "E-Learning"
    },
    {
      "date" : "2010 - 2013",
      "title" : "Mechanical Engineer - IFMA",
      "description" : "Pole Machines, Mechanisms and Systems",
      "urls" : [
        {
          "text" : "IFMA's website", 
          "url" : "https://www.sigma-clermont.fr/fr/homepage"
        }
      ],
      "location" : "Clermont-Ferrand (France, 63)"
    }, 
    {
      "date" : "2008 - 2010",
      "title" : "High School Preparatory Classes",
      "description" : "Section Physics, Chemistry and Enginnering Sciences",
      "urls" : [
        {
          "text" : "Website of the 1<sup>st</sup> year @ Auxerre", 
          "url" : "http://lyc89-amyot.ac-dijon.fr/category/les-etudes/classes-preparatoires/"
        },
        {
          "text" : "Website of the 2<sup>nd</sup> year @ Troyes", 
          "url" : "http://prepas.troyes.free.fr/"
        }
      ],
      "location" : "Auxerre (France, 89) in 1<sup>st</sup> year and Troyes (France, 10) in 2<sup>nd</sup> year"
    }, 
    {
      "date" : "2008",
      "title" : "General Certificate of Education Advanced Levels",
      "description" : "Option Enginnering Sciences - with Distinction",
      "location" : "Sens (89)",
      "urls" : []
    }  
  ]

  constructor() { }

  ngOnInit() {
  }

}
