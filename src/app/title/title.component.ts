import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-title',
  templateUrl: './title.component.html',
  styleUrls: ['./title.component.scss']
})
export class TitleComponent implements OnInit {

  title_small = "HELLO I'M";
  title_large = "NICOLAS MINÉ";
  image_path = "assets/profil.png";
  content = `Being passionated in programming, I learned by myself some languages. The main ones are Python and Javascript, but I also have more or less knowledge 
  in other languages such as VBA, PHP, SQL, R, Java. <br>
  In 2017, I discovered the field of Machine-Learning. I've done several classes and during the winter 2017/2018, I validated a Master in Data Science on OpenclassRooms.<br><br>
  I'm currently working as <span class="markup">Digitization Specialist</span> where I have to use different skills to automate / simplify some tasks / processes. 
  It may be developing APIs, making websites, create some predictive models, parsing of historical files, ... The scope is wide which is interesting as it requires multiple skills.`;

  constructor() { }

  ngOnInit() {
  }

}
