import { Component, OnInit, Input } from '@angular/core';

@Component({
  selector: 'app-books',
  templateUrl: './books.component.html',
  styleUrls: ['./books.component.scss']
})
export class BooksComponent implements OnInit {
  @Input() includeReveal: boolean;
  @Input() viewFactor: number;
  @Input() duration: number;
  
  description = `
  On my path of learning new skills, I bought several books (in addition of several YouTube channels). 
  You can find them below with the link to Amazon. They are not in order or purchases, but in order of interest 
  for the <span class="markup">Data Science</span>. That explains the position of "Programmation Efficace" 
  even if it's a really good book for competitive programming.
  `;

  books = [
    {
      "src" : "assets/HandsOn.jpg",
      "alt" : "HandsOn",
      "url" : "https://www.amazon.fr/Hands-Machine-Learning-Scikit-Learn-TensorFlow/dp/1491962291/",
      "url_text" : "Amazon"
    },
    {
      "src" : "assets/Learning_tensorflow.jpg",
      "alt" : "Learning_tensorflow",
      "url" : "https://www.amazon.fr/Learning-Tensorflow-Guide-Building-Systems/dp/1491978511/",
      "url_text" : "Amazon"
    },
    {
      "src" : "assets/Learning-Scipy.jpg",
      "alt" : "Learning-Scipy",
      "url" : "https://www.amazon.fr/Learning-Numerical-Scientific-Computing-2015-02-26/dp/B01K2W1Y82/",
      "url_text" : "Amazon"
    },
    {
      "src" : "assets/deep_learning.jpg",
      "alt" : "deep_learning",
      "url" : "https://www.amazon.fr/Deep-Learning-Ian-Goodfellow-ebook/dp/B01MRVFGX4",
      "url_text" : "Amazon"
    },
    {
      "src" : "assets/ArtificialIntelligence.jpg",
      "alt" : "ArtificialIntelligence",
      "url" : "https://www.amazon.fr/Artificial-Intelligence-Modern-Approach-Global-ebook/dp/B01HEY2P66/ref=dp_kinw_strp_1",
      "url_text" : "Amazon"
    },
    {
      "src" : "assets/ReinforcementLearning.jpg",
      "alt" : "ReinforcementLearning",
      "url" : "https://www.amazon.fr/Reinforcement-Learning-Introduction-Richard-Sutton-ebook/dp/B008H5Q8VA/ref=dp_kinw_strp_1",
      "url_text" : "Amazon"
    },
    {
      "src" : "assets/formule_du_savoir.jpg",
      "alt" : "formule_du_savoir",
      "url" : "https://www.amazon.fr/formule-savoir-philosophie-unifi%C3%A9e-th%C3%A9or%C3%A8me/dp/2759822605",
      "url_text" : "Amazon"
    },
    {
      "src" : "assets/ProgrammationEfficace.jpg",
      "alt" : "ProgrammationEfficace",
      "url" : "https://www.amazon.fr/Programmation-Efficace-Algorithmes-Compris-Python/dp/2340010055/",
      "url_text" : "Amazon"
    }
  ]

  constructor() { }

  ngOnInit() {
  }

}
