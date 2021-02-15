import { Component, OnInit, Input } from '@angular/core';

@Component({
  selector: 'app-skills-other',
  templateUrl: './skills-other.component.html',
  styleUrls: ['./skills-other.component.scss']
})
export class SkillsOtherComponent implements OnInit {
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
      "label" : "Cryptography",
      "value" : 60,
      "prepend" : "", 
      "append" : "%",
      "text" : "",
      "max" : 100,
    },
    {
      "label" : "Software Development",
      "value" : 60,
      "prepend" : "", 
      "append" : "%",
      "text" : "",
      "max" : 100,
    },
    {
      "label" : "User Interface (UI)",
      "value" : 60,
      "prepend" : "", 
      "append" : "%",
      "text" : "",
      "max" : 100,
    },
    {
      "label" : "User eXperience (UX)",
      "value" : 40,
      "prepend" : "", 
      "append" : "%",
      "text" : "",
      "max" : 100,
    }
  ];

  projects = [
    {
      "title" : "Learning Cryptography",  
      "content" : `For a few months, I got interested in cryptography. I wanted to understand how it works, what are the processes and maths involved<br><br>
 
      As a result, I looked at the 3 principles phases of cryptography:
      <ul>
        <li>
          Creation of the symmetrical key (with Diffie-Hellman Key Exchange Protocol) and asymmetrical keys (used with RSA).
        </li>
        <li>
          Different algorithms for the encryption based on the key such as AES, RSA, Triple DES and Elliptical Curve Cryptography.
        </li>
        <li>
          Several "Mode Operations" such as CTR (CounTeR ) or CBC (Cipher Block Chaining)
        </li>
        <li>
          Possible vulnerabilities such as Man in the Middle during DH Key Exchange or Discrete-Log attacks.
        </li>
      </ul>
      <br>
      Those scripts are available on the "scripts" section of the old version of my site
      `,  
      "url" : "old/scripts/",
      "url_text" : "Scripts"
    },
    {
      "title" : "Software Development",  
      "content" : `Over time, I got skill in multiple parts of Software Development such as :
      <ul>
        <li>
          <span class="markup">Conception</span>: At work, we are using Balsamiq to do quick iterations of what the client would like to see the interface.
        </li>
        <li>
          <span class="markup">Specification</span>: Most of this part was evolving overtime as we were in Agile Methodology. However, before to start, there is a review with the Product Owner to ensure we are aligned on the scope.
        </li>
        <li>
          <span class="markup">Programming</span>: This part depends on the demand, I can develop website using Django or Flask. For Software, I know basics of QT5 using pyQT + QT Designer or tkinter.
        </li>
        <li>
          <span class="markup">Documentation</span>: For API, the documentation was done using Swagger. For the code, it was mainly the README.md or embedded Docstrings.  
        </li>
        <li>
          <span class="markup">Testing</span>: I have bases on testing principle thanks to Codingame. I only implemented it few times at work (I'm not really doing it on personnal work). The library I used is "unittest" 
        </li>
        <li>
          <span class="markup">Revision Control</span>: For personnal work, I'm using github, at work we have DevOps Repos. It's identical in term of use. The only thing I never used is CI/CD features.
        </li>
      </ul>
      `,  
      "url" : "",
      "url_text" : ""
    },
    {
      "title" : "UI / UX",  
      "content" : `
      <span class="markup">UI</span>:I have quite good bases in UI. Using Bootstrap / Materialize, 
      I'm able to build quite good responsive websites. I also follow few YouTube channels presenting latest trends in CSS. 
      However, I'm not an expert in CSS for complex behavior.
      <br><br>
      <span class="markup">UX</span>: My skill in this domain is lower than UI because I understand quite well how UX impact 
      the adherence of the end user of the tool. I'm able in some cases to make things user-friendly for user, but I have no 
      knowledge in Adobe tools to create my own components / glyphicons / animations. 
      `,
      "url" : "",
      "url_text" : ""
    }
  ]


  description = `For a few months in 2019, I got interested in <span class="markup">Cryptography</span>. 
                 I learned a lot regarding <span class="markup">Number Theory</span> and why and how cryptography works. I've learned and implemented most common 
                 Asymmetrical and Symmetrical cryptosystem such as <span class="markup">RSA</span>, <span class="markup">AES</span>, <span class="markup">Triple DES</span> 
                 and <span class="markup">Elliptical Curve Cryptography</span>. I also looked at encryption Mode operation (<span class="markup">Block Cipher Technics</span>) 
                 and <span class="markup">Key Exchange Protocol</span> (<span class="markup">Diffie-Hellman Key exchange</span>). To finish, I had a look at vulnerabilities 
                 and attacks with the most common one which is the <span class="markup">Discrete Log Attack</span> with for example the algorithm <span class="markup">Baby Step Giant Step</span>.<br><br>

                 By doing some projects, I also developed knowledge in <span class="markup">Software Development</span>. At work, we are using <span class="markup">Agile Methodology</span> and 
                 <span class="markup">MS Azure DevOps</span>. Most of the tools created must be documented (depends on the project complexity) on the <span class="markup">repository</span> 
                 using the README.md and also inside the code itself. The code must also be <span class="markup">tested</span> including a minimum <span class="markup">Coverage</span>. 
                 All APIs must be also documented using <span class="markup">Swagger</span> and available on the website.<br><br>
  
                 Regarding  <span class="markup">User Interface</span> and <span class="markup">User eXperience</span>, I have good basics at thinking about <span class="markup">user-friendly</span> layouts. 
                 We are using also  <span class="markup">Balsamiq</span> as a mockup tool. In css, I have enough basics to transfer this to a webpage in a quite  <span class="markup">responsive</span> design. 
                 However, my skills are limited to existing components, I never learned how to create my own component using for example Adobe Illustrator or any SVG tool. I'm also not an expert in (S)CSS. 
                `;
  
  tags = ["User Interface", "User Experience", "Cryptography", "Discrete Log Attack", "Software Development", "Balsamiq", "Git", "DevOps", "Agile Methodology", "Unit-tested", "Coverage", "Documentation", "Swagger", "Azure"]; 

  constructor() { }

  ngOnInit() {
  }

}
