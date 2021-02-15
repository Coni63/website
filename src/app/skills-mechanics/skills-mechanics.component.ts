import { Component, OnInit, Input} from '@angular/core';

@Component({
  selector: 'app-skills-mechanics',
  templateUrl: './skills-mechanics.component.html',
  styleUrls: ['./skills-mechanics.component.scss']
})
export class SkillsMechanicsComponent implements OnInit {
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
      "label" : "TC 11 / NX 10",
      "value" : 75,
      "prepend" : "", 
      "append" : "%",
      "text" : "",
      "max" : 100,
    },
    {
      "label" : "Catia",
      "value" : 50,
      "prepend" : "", 
      "append" : "%",
      "text" : "@School",
      "max" : 100,
    },
    {
      "label" : "Baan IV",
      "value" : 50,
      "prepend" : "", 
      "append" : "%",
      "text" : "",
      "max" : 100,
    },
    {
      "label" : "GD&T",
      "value" : 75,
      "prepend" : "", 
      "append" : "%",
      "text" : "",
      "max" : 100,
    }
  ];

  description = `My initial formation was in Mechanical Engineering at IFMA in which I followed a specilization in Machines, Mechanism ans Systems.<br><br>

                 In the formation, I was mainly using <span class="markup">Catia V5</span>. After my classes, I worked at Husky for <span class="markup">4 years</span>
                 as a <span class="markup">Production Designer</span>. My work consisted of designing a <span class="markup">PET injection <a href="https://www.husky.co/FR-FR/Molds.aspx" target="_blank">
                 mold</a></span> for a preform. This mold is composed of a <span class="markup">Stack</span> (parts having the role of molding the part and cooling it) 
                 and the <span class="markup">Shoe</span> (Parts holding the stack such as plates, ejection cams, ...). I was making around <span class="markup">40 molds a 
                 years</span>. <br><br>
                The CAD Software was <span class="markup">Siemens Unigraphics NX10</span> and <span class="markup">Siemens TeamCenter 11</span>. This includes the creation of the <span class="markup">3D model</span> and <span class="markup">Specification Drawing</span>. 
                 In this position, we are also responsible of making the <span class="markup">Bill Of Materials</span> (BOM) using <span class="markup">BaaN IV</span> which is one of Husky 
                 <span class="markup">ERP system</span>.<br><br>
                 
                 However, I'm not interested anymore in this kind of position. A mix between programming and CAD Design is however something insteresting. 
                 For example, I may be interested in creating algorithms to optimize geometries.`;
  
  tags = ["CAD Software", "Catia V5", "Unigraphics 10", "TeamCenter 11", "ERP System", "BaaN IV"]; 

  constructor() { }

  ngOnInit() {
  }

}
