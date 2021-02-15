import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

import {NgsRevealModule} from 'ngx-scrollreveal';
import { NgxGaugeModule } from 'ngx-gauge';
import { FontAwesomeModule } from '@fortawesome/angular-fontawesome'

// loading components 
import { AppComponent } from './app.component';
import { SocialsComponent } from './socials/socials.component';
import { ExperiencesComponent } from './experiences/experiences.component';
import { FormationsComponent } from './formations/formations.component';
import { SkillsMechanicsComponent } from './skills-mechanics/skills-mechanics.component';
import { SkillsDataComponent } from './skills-data/skills-data.component';
import { SkillsFullstackComponent } from './skills-fullstack/skills-fullstack.component';
import { SkillsCompetitiveComponent } from './skills-competitive/skills-competitive.component';
import { SkillsOtherComponent } from './skills-other/skills-other.component';
import { TitleComponent } from './title/title.component';
import { ProjectListComponent } from './project-list/project-list.component';
import { SkillsLanguagesComponent } from './skills-languages/skills-languages.component';
import { BooksComponent } from './books/books.component';
import { NavComponent } from './nav/nav.component';
import { BackgroundComponent } from './background/background.component';


@NgModule({
  declarations: [
    AppComponent,
    ExperiencesComponent,
    FormationsComponent,
    SkillsMechanicsComponent,
    SkillsDataComponent,
    SkillsFullstackComponent,
    SkillsCompetitiveComponent,
    SkillsOtherComponent,
    SocialsComponent,
    TitleComponent,
    ProjectListComponent,
    SkillsLanguagesComponent,
    BooksComponent,
    NavComponent,
    BackgroundComponent
  ],
  imports: [
    BrowserModule,
    FontAwesomeModule,
    NgsRevealModule,
    NgxGaugeModule,
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
