import { Component, OnInit, Input } from '@angular/core';

@Component({
  selector: 'app-skills-competitive',
  templateUrl: './skills-competitive.component.html',
  styleUrls: ['./skills-competitive.component.scss']
})
export class SkillsCompetitiveComponent implements OnInit {
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
      "label" : "Average Rank",
      "value" : 1250,
      "max" : 1250 / (1-(1250/1700000)),
      "prepend" : "", 
      "append" : "/1.7m",
      "text" : "",
    },
    {
      "label" : "Best Comp. Rank",
      "value" : 747,
      "max" : 747 / (1-(747/3507)),
      "prepend" : "", 
      "append" : "/3507",
      "text" : "",
    },
    {
      "label" : "Puzzles Solved",
      "value" : 250,
      "max" : 250,
      "prepend" : "", 
      "append" : "+",
      "text" : "",
    },
    {
      "label" : "# Competitions",
      "value" : 8,
      "max" : 8,
      "prepend" : "", 
      "append" : "",
      "text" : "",
    }
  ];

  projects = [
    {
      "title" : "Training",  
      "content" : `Codingame proposes hundreds puzzles requiring various knowledges and complexity to solve. From it, we can separates 3 types of puzzles:<br><br>
      
      <ul>
        <li>
          "Official Puzzles" : They are only a few of them (around 50) with all difficulties. 
          They all require different skills from graph exploration, recursion, grid games, ... 
          I finished most of them but there is still some hard of very hard which are not solved yet. 
        </li>
        <li>
          "Community Puzzles" : There is plenty of them. They were merged with official puzzles. Some of them are really good and fun.
          However, it has sometimes less interest, a bad explanation and the level is not relevant (because only best player can approve them). 
          I've done only a fraction of them so far (around 150).
        </li>
        <li>
          "Clash Of Code" : This is a short competition of 15 minutes maximum where you have to solve a puzzle with 
          specific rules (fastest possible, shortest code, or guess based on input / output). This is done in a lobby versus other players. 
          The ranking on each lobby update your "ELO" score. I've done more than 400 puzzles so far and my best rank is 7/121.000.
        </li>
      </ul>
      <br><br>
      I really like those kind of puzzle but the time required to solve them all is nearly infinite. 
      I often have phases where I spend a lot of time on it and then a break.
      `,  
      "url" : "https://github.com/Coni63/CG_repo",
      "url_text" : "Github"
    },
    {
      "title" : "Competition",  
      "content" : `Codingame proposes also few times a year a 1-week competition 
      where you are fighting other players on a specific tournament (only 1 vs 1 games). There is league and each League has a Boss.
      Rules evolves over Leagues. Your rank is based on how you perform over opponents.
      After a time, the game can also be played out of the competition still versus other players.
      At the start, I've spent also a lot of time playing on this kind of competition but the motivation decreased.
      My best ranking on a competition was 747 / 3507 on a game where you have to conquer as much as possible a board.
      `, 
      "url" : "",
      "url_text" : ""
    }
  ]


  description = `Most of my learning regarding Python (before Data-Science) was done on <span class="markup">Codingame</span>. 
                 It proposes several hundreds of puzzles to solve with nice animations, making the learning very fun. I started on this website in 2014 
                 when there were only a few members (around 50k) and few puzzles (around 50). The popularity increased a lot and the content with it. 
                 It has now more than 1.7 million users and proposes tools for recruiters.<br><br>

                 On this website, I learned a lot regarding <span class="markup">data structure</span>, <span class="markup">optimizations</span>, 
                 <span class="markup">time complexity</span> and <span class="markup">space complexity</span>. Depending on the puzzle to solve, 
                 it requires skills in multiple domains such as <span class="markup">Graph Theory</span>, <span class="markup">Board games</span>,
                 <span class="markup">Memoization</span>, <span class="markup">Queues/Stack</span>, <span class="markup">Object-Oriented Programming</span>. 
                 Based on my activity on the website, I'm in average in top 1250 on around 1.7 million user (top 0.1% Worldwide)<br><br>

                 It also proposes from time to time some 1-week <span class="markup">Competitions</span> where members are confronting each others 
                 to have the best <span class="markup">Artificial Intelligence</span> on a 1 vs 1 game with rules evolving with Leagues. Due to the time required and the interest 
                 in some competitions. I did not participate recently to one of it. My best ranking was 747/3507 (Gold League - 5/6) and most of the others, I was around top 33% (Silver League - 4/6). 
                 `;
  
  tags = ["Codingame", "Time complexity", "Space complexity", "Optimization", "Graph Theory", "Board games", "Memoization", "Queues/Stack", "Object-Oriented Programming", "Artificial Intelligence"]; 

  constructor() { }

  ngOnInit() {
  }

}
