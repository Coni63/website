import { Component, OnInit, Input} from '@angular/core';

@Component({
  selector: 'app-skills-fullstack',
  templateUrl: './skills-fullstack.component.html',
  styleUrls: ['./skills-fullstack.component.scss']
})
export class SkillsFullstackComponent implements OnInit {
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
      "label" : "Front-end",
      "value" : 70,
      "prepend" : "", 
      "append" : "%",
      "text" : "",
      "max" : 100,
    },
    {
      "label" : "Back-end",
      "value" : 80,
      "prepend" : "", 
      "append" : "%",
      "text" : "",
      "max" : 100,
    },
    {
      "label" : "Databases",
      "value" : 70,
      "prepend" : "", 
      "append" : "%",
      "text" : "",
      "max" : 100,
    },
    {
      "label" : "DevOps",
      "value" : 40,
      "prepend" : "", 
      "append" : "%",
      "text" : "",
      "max" : 100,
    }
  ];

  projects = [
    {
      "title" : "First sites",  
      "content" : `I started to develop website quite a long time ago (around 2010) mainly in PHP. I've done a few websites providing
      some data to browser plugins developed in JS running on GreaseMonkey. <br><br>
      
      At this time, I was not using Frameworks and decomposing Front-End and Back-end. Everything was written in php pages and the database was MySQL.
      `,  
      "url" : "",
      "url_text" : ""
    },
    {
      "title" : "Previous version of nicolasmine.com",  
      "content" : `In 2018, I decided to create my personal website. As I knew mainly PHP (and not Symfony), I did it without using Frameworks.<br><br>

      I also took the opportunity of doing this website to make it in English and in French with a selection based on cookies. 
      As a result, I learn also cookies management, optimisation such as caching, defer/async loading and so on. It has been a good learning.`,  
      "url" : "http://www.nicolasmine.com/old",
      "url_text" : "Website"
    },
    {
      "title" : "Latest version of nicolasmine.com",  
      "content" : `Based on some learning at work (see next projects), I decided to do a new version of my website using the latest 
      technologies such as Django as Backend and Angular for the Front-End. <br><br> 
      
      However hosting a website with Django and a Database is more expensive. As a result, I decided to focus only on the Front-End. 
      To be realistic, I still separated the content to the layout by using reusable components. This makes me quite simple to bind to a
       REST API done for example with Django.
      `,  
      "url" : "",
      "url_text" : ""
    },
    {
      "title" : "Flask Websites for the Master",  
      "content" : `During the master, we had to deploy some models using Flask or Django. 
      Due to the simplicity of Falsk in comparisons of Django, I used this framework.<br><br>

      The simple website displays a form to submit to a service which is running the model and return the result. 
      This webiste has been hosted in Python Anywhere (free version).<br><br>

      The only drawback of this solution is when the prediction takes a lot of time. There is no system of queue 
      created and a separated worked to avoid latencies. This architecture is something I never created.
      `,  
      "url" : "http://coni57.pythonanywhere.com/",
      "url_text" : "Website"
    },
    {
      "title" : "Website at Work",  
      "content" : `At work, to acquire some data in order to make models, I had to develop a quite complicated website.<br><br>

      At the beginning the project was planned to be quite small. I started it using Flask as I already had more experiences with this framework.
      Due to demands of internal clients, the scope quickly went big. As a result, there were a refactoring to move on Django + 
      Django REST Framework for the backend. The frontend was still developed using JQuery.<br><br>

      This project makes me discover how to unittest a Django application, get the coverage (coverage of the application must be above 90%) and also use authentication using
      either LDAP or the Windows Authentication provided on IIS. This was the major learning for me.<br><br>

      For another project, I also tested NodeJS for the backend and Angular 8 for the frontend in order to have a full MEAN stack application. 
      However, this application has been developed only for test. As a result, there is no tests, coverage, authentication created on this one
      (this would be a full discovery)`,  
      "url" : "",
      "url_text" : ""
    },
    {
      "title" : "API at Work",  
      "content" : `For the website presented previously or another project linked to an Excel file, I had to develop an API. <br><br> 
      
      On the first project, the database being done in Mongo, there we no Models created. Each API was bound to a route and the behavior coded
      (read content, valid content, apply changed).<br><br>
      
      On the other project, I used a Model and on Django Rest Framework I used the APIView builtin class. 
      This is more complicated to use because some specific things are difficult to implement/understand. However, on most cases, it is a lot faster 
      to set in only few lines (serializer and API). <br><br>
      
      As a result, I'm able to write my own API or use already implemented solutions (but this is not my preferred option so far, 
        maybe with more experience, it will become my favourite approach)
      `,  
      "url" : "",
      "url_text" : ""
    }
  ];

  description = `I started to learn programming by making some <span class="markup">JavaScript</span>'s plugin in <span class="markup">Greasemonkey/Tampermonkey</span>.<br><br>

                For some scripts, I had to make simple websites with minimal databases communications. At this time, I did it in <span class="markup">PHP</span>. 
                I also developped my previous website in <span class="markup">PHP</span>.<br><br>

                With Python and the Master in Data Science, I made few simple websites to run some models (more API-like). This was done using <span class="markup">Flask</span>, a web application microframework. 
                I also started to discover <span class="markup">Django</span> which is a lot more complete and forces myself to switch the design to a more <span class="markup">Model-View-Template</span> approach.<br><br>

                At work, there were more opportunities to develop skills on this domain. I had to develop small and medium scale <span class="markup">API</span>'s and for some of them a 
                <span class="markup">Frontend</span> to let the user interact with those <span class="markup">APIs</span> in a user-friendly environment. Most of them were started by using the knowledge 
                I already had using <span class="markup">JQuery</span> to call <span class="markup">API</span> and <span class="markup">Bootstrap 3</span> for the 
                <span class="markup">Frontend</span> component library.
                This approach was more following <span class="markup">Model-View-component</span> approach as I was not using <span class="markup">Jinja</span> template renderer. 
                One of the project started to get bigger and bigger, at this stage, we realize the scalability limits of JQuery. So, I also started to learn <span class="markup">Angular 8</span> in order to be able 
                to refactor the website with a more solid/scalable application.<br><br>

                For the Backend, I used <span class="markup">Django 2.2.5</span> and <span class="markup">Django-REST-Framework</span>. As a database, some projects are using 
                <span class="markup">MongoDB</span> and some other <span class="markup">MS SQL Server </span>. The development guideline at work also makes me discover 
                <span class="markup">Unit-testing</span> and <span class="markup">Code Coverage</span>. I also got some constrains regarding <span class="markup">Authentication</span> 
                with or without <span class="markup">LDAP</span> I also have basic knowledge of <span class="markup">NodeJS</span> 
                in order to be able to create <span class="markup">MEAN</span> Stack application<br><br>
                `;
  
  tags = ["JavaScript", "JQuery", "Greasemonkey/Tampermonkey", "Django", "Flask", "NodeJS", "MongoDB", "MS SQL Server", "Bootstrap", "API", "Django-REST-Framework", 
          "Angular8", "Jinja", "Frontend", "Backend", "PHP", "git", "DevOps", "unittest", "coverage", "authentication", "LDAP"]; 


  constructor() { }

  ngOnInit() {
  }

}
