import { Component, OnInit, Input } from '@angular/core';

@Component({
  selector: 'app-skills-languages',
  templateUrl: './skills-languages.component.html',
  styleUrls: ['./skills-languages.component.scss']
})
export class SkillsLanguagesComponent implements OnInit {
  @Input() includeReveal: boolean;
  @Input() viewFactor: number;
  @Input() duration: number;
  
  gaugeforegroundColor = "#7090b6";
  gaugebackgroundColor = "#1b2735";
  gaugeThick = 10;
  gaugeType = "full";
  gaugeCap = "round";

  gaugeData = [
    {
      "label" : "Python 3.X",
      "value" : 90,
      "prepend" : "", 
      "append" : "%",
      "text" : "",
      "max" : 100,
    },
    {
      "label" : "Javascript / Jquery",
      "value" : 75,
      "prepend" : "", 
      "append" : "%",
      "text" : "",
      "max" : 100,
    },
    {
      "label" : "HTML / (S)CSS",
      "value" : 60,
      "prepend" : "", 
      "append" : "%",
      "text" : "",
      "max" : 100,
    },
    {
      "label" : "VBA",
      "value" : 70,
      "prepend" : "", 
      "append" : "%",
      "text" : "",
      "max" : 100,
    },    
    {
      "label" : "Angular / TS",
      "value" : 50,
      "prepend" : "", 
      "append" : "%",
      "text" : "",
      "max" : 100,
    },
    {
      "label" : "PHP",
      "value" : 40,
      "prepend" : "", 
      "append" : "%",
      "text" : "",
      "max" : 100,
    },
    {
      "label" : "Java",
      "value" : 30,
      "prepend" : "", 
      "append" : "%",
      "text" : "",
      "max" : 100,
    },
    {
      "label" : "R",
      "value" : 30,
      "prepend" : "", 
      "append" : "%",
      "text" : "",
      "max" : 100,
    },
    {
      "label" : "SQL",
      "value" : 80,
      "prepend" : "", 
      "append" : "%",
      "text" : "",
      "max" : 100,
    },
    {
      "label" : "NoSQL",
      "value" : 65,
      "prepend" : "", 
      "append" : "%",
      "text" : "",
      "max" : 100,
    },
    {
      "label" : "Raspberry",
      "value" : 50,
      "prepend" : "", 
      "append" : "%",
      "text" : "",
      "max" : 100,
    },
    {
      "label" : "Arduino / C++",
      "value" : 30,
      "prepend" : "", 
      "append" : "%",
      "text" : "",
      "max" : 100,
    }
  ];
  
  description = `Previously, I couldn't speak about each knowledge (most basic ones) to avoid too many sections with some of them having less interest. 
  In this part, I wanted to summarize what I know as languages knowing that:
  <ul>
    <li><span class="markup">>=75%</span>: Fully efficient, require research only for specific points or sometimes to save time on finding syntax</li>
    <li><span class="markup">>=50%</span>: Basics present, require tutorials for non basics applications</li>
    <li><span class="markup"><50%</span>: Only few exposures or old ones. The basics need to be refreshed</li>
  </ul>`;

  constructor() { }

  ngOnInit() {
  }

}
