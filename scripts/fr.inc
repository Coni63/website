<?php
// fichier de langues en francais
 
// Homepage
define("_WELCOME","Bienvenue sur <a href=\"#\" class=\"white\">nicolasmine.com</a>");

define("_MENU1_TITLE","Scripts");
define("_MENU2_TITLE","Qui suis-je ?");
define("_MENU3_TITLE","Apprendre Python");
define("_MENU4_TITLE","News");
define("_MENU5_TITLE","Divers");

define("_MENU1_DESC","Dans cette section, je vous partagerai des scripts que j'ai faits sur Jupyter Notebook avec des explications. Cependant, je ne présenterais pas les puzzles de Codingame car les entrées dépendent souvent de la sortie précédente que l'on donne. Vous pouvez néanmoins vous référez à mon <a href=\"https://github.com/Coni63\" target=\"_blank\">Github</a> mais les scripts ne sont ni commentés ni sur Notebooks");
define("_MENU2_DESC","Envie d'en savoir plus sur moi, jetez un coup d'oeil à mon CV");
define("_MENU3_DESC","Dans cette section, je vous présenterai différents contenus que j'ai découvert en apprenant Python ou la programmation en générale.");
define("_MENU4_DESC","Dans cette section, je partagerai diverses articles sur des informations ou nouveautés.");
define("_MENU5_DESC","Dans cette section, je partagerai des informations diverses (sites web, compte twitter, etc...). Soyez curieux !");

define("_SECTION_UP", "Haut de page");
define("_SECTION_DOWN", "Bas de page");

// Scripts
define("_SHOW_PUZZLE", "Voir le puzzle");
define("_SHOW_SOLUTION", "Voir la solution");
define("_DL_SOLUTION", "Télécharger le Notebook");
define("_SHOW_REPO", "Voir le Repository");
define("_SHOW_VID", "Regarder la vidéo");

define("_TOP_SENTENCE", "Les scripts présents sur cette page sont aussi disponible sur mon <a href=\"https://github.com/Coni63\" target=\"_blank\">Github</a> mais non présentés ou sur notebook");

define("_SECTION_EASY", "Puzzle facile");
define("_SECTION_MEDIUM", "Puzzle moyen");
define("_SECTION_HARD", "Puzzle difficile");
define("_SECTION_V_HARD", "Puzzle très difficile");
define("_SECTION_COMMUNITY", "Puzzle de la Communauté");
define("_SECTION_OTHER", "Autres");

define("_TITLE_CG", _MENU1_TITLE);
define("_HEADER_CG", _MENU1_DESC);

define("_PUZZLE1_TITLE", "Encodage de Chuck Norris");
define("_PUZZLE1_DESC", "Dans ce puzzle, l'objectif est d'encoder en code \"unaire\" une phrase.");

define("_PUZZLE2_TITLE", "Défibrillateur le plus proche");
define("_PUZZLE2_DESC", "Dans ce puzzle, l'objectif est de trouver le plus proche defibrillateur d'une position connaissant toutes les positions des defibrillateurs");

define("_PUZZLE3_TITLE", "Automate Cellulaire");
define("_PUZZLE3_DESC", "Dans ce notebook, nous allons mettre en place un automate cellulaire avec un affichage graphique sur PyQT. Le système utilise est similaire au Jeu de la Vie mais en utilisant un autre pattern");

define("_PUZZLE4_TITLE", "Enveloppe Convexe");
define("_PUZZLE4_DESC", "Dans cet exercice, on va découvrir un algorithme permettant de déterminer l'enveloppe convexe d'un groupe de points.");

define("_PUZZLE5_TITLE", "Pathfinding - Algorithme de Dijkstra");
define("_PUZZLE5_DESC", "Dans cet exercice, on va explorer l'algorithme de recherche de chemins bien connu qu'est Dijkstra");

define("_PUZZLE6_TITLE", "Perceptron");
define("_PUZZLE6_DESC", "Dans ce notebook, l'exercice est de créer et entrainer l'élément élémentaire d'un Réseau de Neurones appelé Perceptron");

define("_PUZZLE7_TITLE", "Le problem du Voyageur de Commerce");
define("_PUZZLE7_DESC", "Dans ce notebook, l'objectif est de créer un algorithme génétique pour trouver une solution acceptable au problème bien connu du Voyageur de Commerce");

define("_PUZZLE8_TITLE", "Matrice Tridiagonale Aléatoire");
define("_PUZZLE8_DESC", "Ce notebook a été fait à la base pour aider quelqu'un sur le forum d'OpenClassRoom. L'objectif était d'observer le changement des vecteurs propres à cause de bruit dans une Matrice Tridiagonale");

define("_PUZZLE9_TITLE", "ML - Regression - Auto MPG Dataset");
define("_PUZZLE9_DESC", "L'objectif dans ce notebook est de créer un modèle de consommation de voiture basé sur les infos de la voiture. Le Dataset est disponible <a href=\"https://archive.ics.uci.edu/ml/datasets/auto+mpg\" target=\"_blank\">ici</a>");

define("_PUZZLE10_TITLE", "ML - Classification - Iris Dataset");
define("_PUZZLE10_DESC", "Dans ce workbook, nous allons passer au travers du Dataset Iris et mettre en place un Forest Tree Classifier pour visualiser son fonctionnement");

define("_PUZZLE11_TITLE", "ML - Tensorflow - Logistic Classification - Moons Dataset");
define("_PUZZLE11_DESC", "Dans cet exercice, l'objectif est de mettre en place un Classifieur Linéaire et Polynomial sur le Moons Dataset en utilisant Tensorflow");

define("_PUZZLE12_TITLE", "ML - Tensorflow - Exploration d'un Neural Network");
define("_PUZZLE12_DESC", "Dans ce workbook, l'objectif est de voir l'impact de certains paramètres d'un réseau de neurones ou des entrées sur le temps d'apprentissage");

define("_PUZZLE13_TITLE", "ML - Scikit Learn - Estimation de loyer");
define("_PUZZLE13_DESC", "Ce workbook présente l'exporation d'un dataset de loyer en fonction de l'arrondissement. L'exercice est issue d'un cours sur OpenClassRoom");

define("_PUZZLE14_TITLE", "ML - Scikit Learn - Kaggle - Credit Card Fraud");
define("_PUZZLE14_DESC", "Dans ce workbook, nous allons explorer un dataset très déséquilibré à propos des fraudes sur les cartes de crédits trouvé sur <a href=\"https://www.kaggle.com/dalpozz/creditcardfraud\" target=\"_blank\">Kaggle</a>. Sur ce dataset, nous verrons l'avantage de <b>l'undersampling</b> pour entrainer le PCA afin de simplifier le modèle.");

define("_PUZZLE15_TITLE", "ML - Scikit Learn / Keras - Kaggle - Human Resources Analytics");
define("_PUZZLE15_DESC", "Dans ce workbook, nous allons explorer un dataset à propos des des raisons de quitter une entreprise trouvé sur <a href=\"https://www.kaggle.com/ludobenistant/hr-analytics\" target=\"_blank\">Kaggle</a>.");

define("_PUZZLE16_TITLE", "ML - Keras - Introduction aux RNNs avec la Grammaire de Reber");
define("_PUZZLE16_DESC", "Ce workbook est une introduction aux Recurrent Neural Network utilisé pour les données \"temporelles\". Pour cette introduction, nous allons nous interesser à un dataset fait avec la grammaire de Reber");

define("_PUZZLE17_TITLE", "ML - FBProphet - Prediction du retard des vols ");
define("_PUZZLE17_DESC", "Pendant le Master de Data Science, nous devions faire un modèle capable de prédire le retard des vols des avions en fonction de divers paramètres (date/heure/aéroport/...). Durant ce projets, divers modeles ont été testés. Dans ce notebook, nous allons explorer une librairie appelé FBProphet afin de trouver une pattern dans les données temporelles.");

define("_PUZZLE18_TITLE", "ML - Scikit Learn - Test du UMAP sur le clustering d'articles");
define("_PUZZLE18_DESC", "UMAP est un tout nouveau algorithme proposé sur <a href=\"https://arxiv.org/abs/1802.03426\">Arxiv</a>. Pour le tester, une amélioration sur le clustering fait lors du projet 5 du parcours de Data Science va être testé. Pour ce faire, les articles vont être convertis dans une matrice TF-IDF, le LSA sera ensuite appliqué afin d'avoir une matrice dense puis pour finir, le KMeans sera utilisé afin de prédire les clusters. Pour la partie visualsation, le TSNE ainsi que UMAP vont être testés.");

define("_PUZZLE19_TITLE", "ML - Keras - Simulation d'un double pendule avec un RNN");
define("_PUZZLE19_DESC", "Après avoir mis en place un simulateur du double pendule, un dataset va être crée avec pour objectif d'entrainer un RNN sur celui-ci. Avec seulement quelques petits LSTM, une simulation correcte de ce systeme chaotique a été atteinte.");

define("_PUZZLE20_TITLE", "ML - Keras - Simulation d'un double pendule avec un RNN (partie 2)");
define("_PUZZLE20_DESC", "Précédemment, nous avons vu comment modelister un double pendule à l'aide d'un RNN. Pour ce faire, nous avions utilisé un model fixe (longueur des bras et leur masse). Dans ce model, nous allons essayer de faire le meme apprentissage mais avec des paramètres variables et de plus grandes amplitudes angulaires");

define("_PUZZLE21_TITLE", "ML - Keras - Classification Dataset QuickDraw avec 20 classes similaires");
define("_PUZZLE21_DESC", "Dans ce notebook, Différents CNN vont etre testé sur un dataset plus complexe que MNIST d'images faite à la main (20 classes, animaux uniquement, 28x28 en N&B). Les CNN classiques vont etre testés ainsi que les Capsule Networks avant de regarder les mauvaises classifications. On verra que ce sont souvent des erreurs lié au dessinateur...");

define("_PUZZLE22_TITLE", "ML - Numpy - Test de Neuro-Evolution au lieu de l'apprentissage par renforcement");
define("_PUZZLE22_DESC", "Dans ce notebook, l'entrainement d'un Reseau de Neurones a été remplacé par un algorithm d'évolution génétique au lieu de la back-propagation. Après analyse du modèle, un modèle linéaire a été entrainé et réussit presque aussi bien que le Réseaux de Neurones plus complexe.");

define("_PUZZLE23_TITLE", "DA - R - Exploration du classement sur Codingame");
define("_PUZZLE23_DESC", "Apprenant actuellement R, l'exploration du classement extrait du site Codingame permet de mettre en pratique divers points de la formation (modification dataset, utilisation de ggplot, et R markdown). Dans ce Notebook, nous allons donc explorer le classement et la répartition des joueurs dans celui-ci ainsi que des façons de monter rapidement dans le classement.");

define("_PUZZLE24_TITLE", "ML - Tensorflow - DeepDream vidéo");
define("_PUZZLE24_DESC", "Basé sur une playlist de Sentdex, son code a été réutilisé et légèrement modifié afin de créer une Video d'un DeepDream en utilisant le modèle \"inception\". Il n'y a pas de Notebook pour ce projet mais un readme assez complet est présent sur Github.");

define("_PUZZLE25_TITLE", "ML - Keras - Classification audio");
define("_PUZZLE25_DESC", "De facon similaire à MNIST, ce Notebook va explorer le contenu de fichiers audio de manière non supervisée puis effectuer une classification (avec des Reseaux de Neurones classiques, les CNNs et les RNNs).";

define("_PUZZLE26_TITLE", "ML - Keras - Audio Classification FMA");
define("_PUZZLE26_DESC", "Cette semaine nous allons explorer un autre dataset de musique qu'est le FMA dataset. Comme fait précédemment, nous allons essayer de mettre en place un classifieur du style de musique. Durant celui-ci, nous allons voir que le modele qui avait bien fonctionné la semaine dernière était due à de l'overfitting et qu'il ne fonctionne pas si bien qu'espéré en plus d'avoir d'autres inconvénients.");

define("_PUZZLE27_TITLE", "ML - Keras - Segmentation Audio FMA");
define("_PUZZLE27_DESC", "Après avoir testé la classification audio basé sur la reconnaissance de pattern sur la FFT du signal, une nouvelle approche par segmentation et clustering a été testé. Cette methode permet d'exploiter les données comme des données textuelles et a l'avantage d'être compatible avec toute longueur de morceaux");

?>