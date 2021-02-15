import { Component, OnInit, Input } from '@angular/core';

@Component({
  selector: 'app-skills-data',
  templateUrl: './skills-data.component.html',
  styleUrls: ['./skills-data.component.scss']
})
export class SkillsDataComponent implements OnInit {
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
      "label" : "Supervised Lear...",
      "value" : 80,
      "prepend" : "", 
      "append" : "%",
      "text" : "",
      "max" : 100,
    },
    {
      "label" : "Unsupervised Lear...",
      "value" : 70,
      "prepend" : "", 
      "append" : "%",
      "text" : "",
      "max" : 100,
    },
    {
      "label" : "Reinforcement Le...",
      "value" : 50,
      "prepend" : "", 
      "append" : "%",
      "text" : "",
      "max" : 100,
    },
    {
      "label" : "Data Engineering",
      "value" : 60,
      "prepend" : "", 
      "append" : "%",
      "text" : "",
      "max" : 100,
    }
  ];

  projects = [
    {
      "title" : "Kaggle Competition - Image segmentation",  
      "content" : `The purpose of this project was to segment Cells Nucleis on medical images.<br><br> To detect them, 
      the model U-Net has been adapted to this specific task. 
      The result was not as good as expected with issues with the stability during the training. I've tried a U-Net extended 
      which takes the same image with multiple preprocessing to help the model to segment the image. 
      The result was clearly better.<br><br> To finish, the Post-Processing has been implemented to extract 
      every nucleus using watershed and prepare the submission file.`,  
      "url" : "https://github.com/Coni63/OC_DS/tree/master/P9",
      "url_text" : "Github"
    },
    {
      "title" : "Segmentation of customer's behavior",  
      "content" : `Based on purchases history of given customers, this project proposes to create a clustering of customer based on their behaviors (customer segmentation).<br><br>
      It uses NLP to perform a first clustering of articles per naming (there is no categories provided) 
      and then several processing steps on order to reach a clustering of all clients in reasonable amount of clusters.<br><br>
      To finish, a Classifier has been trained in order to classify other/future customers.
      `,  
      "url" : "https://www.kaggle.com/coni57/customer-segmentation",
      "url_text" : "Kaggle"
    },
    {
      "title" : "Implementation fo the DOSNES",  
      "content" : `For one project, I wanted to have a manifold projecting data on a Sphere but not using a stereographic projection.<br><br> 
      The only algorithm I found which is doing that was the DOubly Stochastic Neighbor Embedding on a Sphere (DOSNES) 
      published by Yao Lu on Sep. 2016 on ArXiv.<br><br> There were no Python implementation so I used their publication and a MatLab implementation
      to create one using sklearn method's naming. 
      `,  
      "url" : "https://github.com/Coni63/DOSNES",
      "url_text" : "Github"
    },
    {
      "title" : "Movie Recommander in 3D",  
      "content" : `This project uses Machine Learning Algorithms visualize movies, in a 3D space, based on similarities (kind of recommendation system). <br><br>
      From a Dataset provided by IMDb, a subset of movie has been extracted. Data have been completed/improved by using OMDb API. <br><br>
      After a phase a cleanup/preparation, the tSNE, and DOSNES algorithm have been used to represent movies in a smaller dimension. 
      The rendering has been done in JavaScript using WebGL with three.js. 
      `,  
      "url" : "https://coni63.github.io/",
      "url_text" : "Github"
    },
    {
      "title" : "ArXiv - Heartbeat Classification",  
      "content" : `On the <a href="https://arxiv.org/abs/1805.00794">ArXviv 1805.00794</a>, a team of researchers proposed a model able to 
      detect cardiovascular dysfunction based on ECGs. <br><br>
      They provides all informations about their model, dataset and training. As a result, I decided to implement the model and try to reach the 
      same result.<br><br>
      This has been achieved and I realized that their publication is right, but not for the good reason. In reality, the model was overfitting 
      a lot due to the dataset splitting system. I published a notebook on Kaggle to present my work. It has so far 50+ likes.
      `,  
      "url" : "https://www.kaggle.com/coni57/model-from-arxiv-1805-00794",
      "url_text" : "Kaggle"
    },
    {
      "title" : "Other Projects",  
      "content" : `For more than a year, I was doing 1 project a week. Most of them were about Data Science, I will not present them all 
      in this section for readability purposes. <br><br>
      They are all present in the attached repository. I've tried to do project to cover as much fields as possible in Data Science such 
      as Forecasting, Sentiment Analysis, Supervised and Unsupervised Learning, Audio Classification, Fraud Detection, Bayesian Network... 
      `,  
      "url" : "https://github.com/Coni63/website/tree/master/scripts/solution",
      "url_text" : "Github"
    }

    
  ]


  description = `While learning programming and mainly Artificial Intelligence on Codingame, I discovered the Data Science. This domain interest me a lot and I decided to learn it for personal knowledge. 
                 Being very interested in this domain, I started to read some books (see last part) and follow some Openclassrooms courses. After a year, I decided to register at OpenClassroom's 
                 Master to have a recognized certification.<br><br>

                 This Master is composed of 9 projects to realize and present to a jury. During the complete path, we have a mentor (someone working for at least 2 years in the domain) to guide you during the formation.
                 It passes through multiple part of Data Science from <span class="markup">Regression</span>, <span class="markup">Classification</span>, <span class="markup">Clustering</span>, 
                 <span class="markup">Data pre-processing</span> for example with <span class="markup">Natural Language Processing</span> up to <span class="markup">Neural Networks</span>.<br><br>

                 After this Master, I kept learning this fast-changing domain by doing multiple projects. You can find some summary below with the link to the repository mainly to learn more about 
                 Neural Network such as <span class="markup">Convolutionnal Neural Networks</span> or <span class="markup">Recurrent Neural Networks</span>.<br><br>

                 I also started to learn the <span class="markup">Reinforcement Learning</span> to start to understand how <span class="markup">Artificial Intelligence</span> works. I've done few projects but it quickly takes a lot 
                 a training time/power to see some results. I went through most classical models on simple environments from <span class="markup">Q-Learning</span> to <span class="markup">Double Dueling Deep-Q Learning</span>
                 or also <span class="markup">Proximal Policy Optimization</span>`;
  
  tags = ["Regression", "Classification",  "Clustering", "Data pre-processing", "Natural Language Processing", "Neural Networks", "Feed-Forward Neural Networks", "Convolutionnal Neural Networks", "Recurrent Neural Networks", 
  "Reinforcement Learning", "Artificial Intelligence", "Q-learning", "DeepQ Learning", "Double Dueling DeepQ Learning", "Proximal Policy Optimization", "Scikit-Learn", "Matplotlib", "Seaborn", "Librosa", "Scikit-image", 
  "TensorFlow (1.x)", "Keras", "Numpy", "Scipy"]; 

  constructor() { }

  ngOnInit() {
  }

}
