<?php
// fichier de langues en anglais

define("TITLE","Projects");
define("HEAD","Wants to see some content of training's project ? It's here ! <br><br> All report/summary/powerpoints are in French as the course was in French");

define("_DL_PPT", "DONWLOAD POWERPOINT");
define("_DL_FICHE", "DOWNLOAD SUMMARY");
define("_DL_REPORT", "DOWNLOAD REPORT");


define("_PROJECT_2", "Project 2");
define("_PROJECT_3", "Project 3");
define("_PROJECT_4", "Project 4");
define("_PROJECT_5", "Project 5");
define("_PROJECT_6", "Project 6");
define("_PROJECT_7", "Project 7");
define("_PROJECT_8", "Project 8");
define("_PROJECT_9", "Project 9");

define("_P2_TITLE", "Nutritional data analysis");
define("_P2_DESC", "This first project of the Data Scientist Course covers the Exploration / Cleaning part of the Data Analyst / Data Scientist job.</br></br>We have datas from food products with their nutritional values. On this dataset there were a lot of missing or incorrect data. The purpose of this project was therefore to clean up/filter the incorrect data. In parallel with the cleaning, a univariate and multivariate exploration was done to determine the most important parameters to healthy dishes (in order to help a company to set up healthy recipes).");
define("_P2_DATE", "November 2017");

define("_P3_TITLE", "Movies recommandation engine");
define("_P3_DESC", "During this second project, the objective was to implementate unsupervised algorithms on a dataset of movies. Based on a movie selected by a user, the model must recommend 5 similar movies that should be appreciated too.</br></br>Based on a simple dataset, with only 28 features, a cleaning pahse and data preparation was done. After that, different Clustering algorithms (or manifolds) were tested and evaluated on the relevance of the prediction on a set of predefined movies.");
define("_P3_DATE", "November 2017");

define("_P4_TITLE", "Prediction of flight delays");
define("_P4_DESC", "In this project, we have available various information on all flights in the US in 2016. This dataset includes several millions of flights with different information (company, date and time of departure/arrival, airports of departure and destination, etc ...). From this dataset, a delay prediction model had to be implemented.</br></br>During this project, a restriction on models was \"requested\". Despite the number of data and the relevance of using a Recurrent Neural Network on this type of dataset, a linear model has been set up. As a comparison, a temporal model (\"ARIMA\") has also been tested.");
define("_P4_DATE", "December 2017");

define("_P5_TITLE", "Segmentation of customer's behavior");
define("_P5_DESC", "From a dataset of items sold to customers, we are asked to segment customer's behaviors in order to be able to set up a classifier and then be able to classify as soon as possible, what we be the behavior of a new customer.</br></br>As a first step, a clustering of articles was done in order to be able to then make a Bag of Words articles. Then using various aggregations to have additional features (purchase frequencies, average bill price, time since the last purchase, ...) a new dataset per customer was set up. Starting from this new dataset, a second clustering was set up to segment the clients. After an analysis of clusters and related behaviors, a classifier was put in place to predict which category a client could be.
");
define("_P5_DATE", "December 2017");

define("_P6_TITLE", "Tags prediction for Stack Overflow");
define("_P6_DESC", "From the Stack Exchange API, thousands of questions about Stack Overflow with their tags have been downloaded. From this dataset, supervised and unsupervised methods were put in place to make a system of predicting tags to a given question.</br></br>After a pre-processing phase (tokenization, lemmatization), the TF and TF-IDF matrix were set-up. On these, unsupervised methods (Latent Dirichlet Allocation and Non Negative Matrix) were applied to predict tags using a KNN with the Jenson-Shannon distance. For the supervised method, various models with regularization were tested on the TF-IDF matrix with much better results.");
define("_P6_DATE", "December 2017");

define("_P7_TITLE", "Dog breed classification");
define("_P7_DESC", "From a set of 10,000 dog pictures, we are asked to make a classifier to predict the breed of the dog only in this image. At first, we have to use only classical methods and then usign Convolution Neural Networks (Transfer Learning and Custom CNN).</br></br>For the classical method, a study of SIFT descriptors, colors, moments and image frequencies were done with very low results. For the Transfer Learning phase, performances are highly better with a classifier like Neural Networks. Finally, a training of zero was tested on few models to evaluate the relevance of Transfer Learning on this type of tasks.");
define("_P7_DATE", "January 2018");

define("_P8_TITLE", "Technology watch - Recurrent Neural Networks");
define("_P8_DESC", "During this technology watch, I decided to present Reccurent Neural Networks as there were no project using it.</br></br>After an explaination of the principle and cases of use, I went throught the state-of-art from Simple RNN (70s'), Long Short Term Memory (1997 & 2000), Gated Recurrent Unit (2017) up to Quasi Recurrent Neural Network (2017). A comparaison of all them has been done on a fixed dataset to see performances and training time.
");
define("_P8_DATE", "January 2018");

define("_P9_TITLE", "Kaggle Competition - Image segmentation");
define("_P9_DESC", "To finish the program, we have to participate to an open Kaggle Competition. I decided to work on a competition where we are asked to perform an image segmentation of Cells Nucleis.</br></br>After the pre-processing step, a first model based on image processing has been tried as baseline. After that, the model U-Net (reference model for this task - won ISBT in 2015) has been adapted to this specific task. The result was not as good as expected with issues with stability of training. As a result, I've tried a U-Net extednded which takes multiple inputs with différents pre-processing steps to help the model to segment the image. The result was clearly better. To finish, as step of Post-Processeing has been implemented to extract every nucleis and prepare the submission file. ");
define("_P9_DATE", "February 2018");

?>