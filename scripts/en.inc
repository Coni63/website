<?php
// fichier de langues en anglais

// Homepage
define("_WELCOME","Welcome on <a href=\"#\" class=\"white\">nicolasmine.com</a>");

define("_MENU1_TITLE","Scripts");
define("_MENU2_TITLE","Who am I ?");
define("_MENU3_TITLE","Learn Python");
define("_MENU4_TITLE","News");
define("_MENU5_TITLE","Misc");

define("_MENU1_DESC","In this section, I will share with you some scripts I made on Jupyter Notebook with explainations. Unortunately, it won't present Codingame puzzles as most of inputs are provided every turns and depends on our previous output. You can nevertheless refer to my <a href=\"https://github.com/Coni63\" target=\"_blank\">Github</a> but not presented on Notebook");
define("_MENU2_DESC","Wants to know more about myself, take a look to my Resume");
define("_MENU3_DESC","In this section, I will make you discover some contents (websites, youtube channel, books) I found usefull to learn Python or Programming in general.");
define("_MENU4_DESC","On this section, I will share with you some articles on various information or news");
define("_MENU5_DESC","This section will be a repository of miscelleanous information (websites, twitter account). Be curious !");

define("_SECTION_UP", "Top");
define("_SECTION_DOWN", "Bottom");

// Scripts
define("_SHOW_PUZZLE", "See the puzzle");
define("_SHOW_SOLUTION", "See the solution");
define("_DL_SOLUTION", "Download Notebook");

define("_SECTION_EASY", "Easy Puzzles");
define("_SECTION_MEDIUM", "Medium Puzzles");
define("_SECTION_HARD", "Hard Puzzles");
define("_SECTION_V_HARD", "Very Hard Puzzles");
define("_SECTION_COMMUNITY", "Community Puzzles");
define("_SECTION_OTHER", "Others");

define("_TITLE_CG", _MENU1_TITLE);
define("_HEADER_CG", _MENU1_DESC);

define("_PUZZLE1_TITLE", "Chuck Norris encoding");
define("_PUZZLE1_DESC", "In this puzzle, the objective is to encode a sentence to a \"unary\" encrypted sentence.");

define("_PUZZLE2_TITLE", "Closest Defibrillator");
define("_PUZZLE2_DESC", "In this puzzle, the objective is to return the closest Defibrillator to a given position knowing all defibrillator's positions");

define("_PUZZLE3_TITLE", "Cellular Automaton");
define("_PUZZLE3_DESC", "In this notebook, we gonna create a Cellular Automaton with a visible GUI made on PyQT. It's similar to the Game of Life but using another pattern system");

define("_PUZZLE4_TITLE", "Convex Hull");
define("_PUZZLE4_DESC", "In this exercice, we gonna go thru an algorithm to determine the convex Hull to a set of X-Y points");

define("_PUZZLE5_TITLE", "Pathfinding - Dijkstra Algorithm");
define("_PUZZLE5_DESC", "In this exercice, we gonna explore the well know pathfinding algorithm called Dijkstra");

define("_PUZZLE6_TITLE", "Perceptron");
define("_PUZZLE6_DESC", "The exercice on this notebook is to create a train the elementary element of a Neural Network called Perceptron");

define("_PUZZLE7_TITLE", "Travelling Salesman Problem");
define("_PUZZLE7_DESC", "In this workbook, the objective is to create a Genetic Algorithm to find a good solution to the well known NP-Hard problem called Travelling Salesman Problem");

define("_PUZZLE8_TITLE", "Tridiagonal Random Matrice");
define("_PUZZLE8_DESC", "This workbook has been created to help someone in OpenClassRoom's forum. The idea is to observe the change on Eigenvectors linked to noises in a Tridiagonal Matrix");

define("_PUZZLE9_TITLE", "ML - Regression - Auto MPG Dataset");
define("_PUZZLE9_DESC", "The objective in this workbook is to create a model of car's consumption based on some datas. Datas are available <a href=\"https://archive.ics.uci.edu/ml/datasets/auto+mpg\" target=\"_blank\">here</a>");

define("_PUZZLE10_TITLE", "ML - Classification - Iris Dataset");
define("_PUZZLE10_DESC", "In this workbook, we are going to explore the well known Iris dataset and fit a Forest Tree classifier to visualize how it works");

define("_PUZZLE11_TITLE", "ML - Tensorflow - Logistic Classification - Moons Dataset");
define("_PUZZLE11_DESC", "In this exercice, the objective is to create a (linear and polynomial) Logistic Classifier on Moons dataset using Tensorflow");

define("_PUZZLE12_TITLE", "ML - Tensorflow - Exploration of Neural Network");
define("_PUZZLE12_DESC", "In this workbook, the objective is to see the impact of some parameters of a Neural Network or Features on the training time/speed");

define("_PUZZLE13_TITLE", "ML - Scikit Learn - House rent prices");
define("_PUZZLE13_DESC", "This workbook set up a model to determine the rent based on the surface and district. This exercice is based on an exercice from OpenClassRoom");

define("_PUZZLE14_TITLE", "ML - Scikit Learn - Kaggle - Credit Card Fraud");
define("_PUZZLE14_DESC", "In this workbook, we will explore a very unbalanced dataset about credit card fraud found on <a href=\"https://www.kaggle.com/dalpozz/creditcardfraud\" target=\"_blank\">Kaggle</a>. On this dataset, we will discover the advantage to perform the PCA on an <b>undersampling</b> dataset to simplify the model.");

define("_PUZZLE15_TITLE", "ML - Scikit Learn / Keras - Kaggle - Human Resources Analytics");
define("_PUZZLE15_DESC", "In this workbook, we will explore a dataset regarding reasons to leave a company found on  <a href=\"https://www.kaggle.com/ludobenistant/hr-analytics\" target=\"_blank\">Kaggle</a>.");

define("_PUZZLE16_TITLE", "ML - Keras - Introduction to RNNs with Reber's grammar");
define("_PUZZLE16_DESC", "This workbook introduces Recurrent Neural Network highly used for \"temporals\"'datas. In this introduction we will test some model based on reber's grammar.");

define("_PUZZLE17_TITLE", "ML - FBProphet - Predict delay of flights");
define("_PUZZLE17_DESC", "During the Master of Data Sciences, we had to predict lateness of flight based on date/hour/company/airports/... During this one, I tried multiple models but in this notebook we will discover the librairy called FBProphet used to find pattern in timeseries.");

define("_PUZZLE18_TITLE", "ML - Scikit Learn - Test of UMAP on clustering of articles");
define("_PUZZLE18_DESC", "UMAP is a new Algorithm of dimension's reduction found on <a href=\"https://arxiv.org/abs/1802.03426\">Arxiv</a>. To try it, an improvement has been tried on the clustering of articles from the Project 5 of the Master of Data Science. All articles will be converted to a TF-IDF matrix. Then the Latent Semantic Analysis will be performed on this matrix to have a dense result and a Kmeans will be applied. For the visualisation, the TSNE will be compared with the UMAP.");

define("_PUZZLE19_TITLE", "ML - Keras - Simulation of double pendulum using RNNs");
define("_PUZZLE19_DESC", "After creating a simulator of the double pendulum, a dataset will be created in order to try to train a RNN on it. By using few LSTM, a correct simlution of this chaotic system has been reached.");

define("_PUZZLE20_TITLE", "ML - Keras - Simulation of double pendulum using RNNs (part 2)");
define("_PUZZLE20_DESC", "Previously, we tried to simulate a double pendulum using RNN. To do so, we used fixed model parameters (length and mass). In this workbook we will try to extend this model to simulate a model with also variable parameters and wider initial parameters");


?>