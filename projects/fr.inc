<?php
// fichier de langues en francais

define("TITLE","Projets");
define("HEAD","Envie de voir un résumé des différents projets du Master ? C'est ici !");

define("_DL_PPT", "TÉLÉCHARGER LE POWERPOINT");
define("_DL_FICHE", "TÉLÉCHARGER RÉSUMÉ");
define("_DL_REPORT", "TÉLÉCHARGER LE RAPPORT");
define("_LINK", "LIEN");
define("_URL", "URL DU SITE");

define("_PROJECT_2","Projet 2");
define("_PROJECT_3","Projet 3");
define("_PROJECT_4","Projet 4");
define("_PROJECT_5","Projet 5");
define("_PROJECT_6","Projet 6");
define("_PROJECT_7","Projet 7");
define("_PROJECT_8","Projet 8");
define("_PROJECT_9","Projet 9");
define("_PROJECT_10","Projet 10");
define("_PROJECT_11","Projet 11");
define("_PROJECT_12","Projet 12");

define("_P2_TITLE", "Analyse de données nutritionnelles");
define("_P2_DESC", "Ce premier projet du Parcours de Data Scientist aborde la partie Exploration/Nettoyage du travail de Data Analyst/Data Scientist. </br></br>Dans celui-ci, des données sur des produits alimentaires ainsi que leurs valeurs nutritionnelles étaient fournies mais avec beaucoup de données manquantes ou erronées. L'objectif de ce projet était donc de nettoyer les données incorrectes. En parallèle du nettoyage, une exploration uni variée et multivariée a été faite afin de déterminer les paramètres important à des plats sains (afin d'aider une société à la mise en place de recette saines).");
define("_P2_DATE", "Novembre 2017");

define("_P3_TITLE", "Moteur de recommandation de films");
define("_P3_DESC", "Lors de ce second projet, l'objectif était la mise en place d'algorithme non supervisées sur un dataset de films. A partir d'un film vu par un utilisateur, le moteur doit recommander 5 films similaires que l'utilisateur devrait aussi apprécier.</br></br>Basé sur un dataset simple (seulement 28 informations sur les films étaient disponibles) un nettoyage et une préparation des données a été faite. Par la suite, différents algorithmes de Clustering (ou manifolds) ont été testés et évalués sur la pertinence de la prédiction sur un set de films prédéfinis.");
define("_P3_DATE", "Novembre 2017");

define("_P4_TITLE", "Prédiction du retards de vols");
define("_P4_DESC", "Dans ce projet, nous avons à disposition des informations diverses sur tous les vols aux USA en 2016. Ce dataset très complet regroupe plusieurs millions de vols avec différentes information (compagnie, date et heure de départ/d'arrivée, aéroports de départ et destination, etc...). A partir de ce jeu de données, un modèle de prédiction des retards devait être mis en place.</br></br>Durant ce projet, une restriction sur les modèle a été \"imposé\". Malgré le nombre de données et de la pertinence d'utiliser un Récurrent Neural Network sur ce type de dataset, un modèle linéaire a été mis en place. A titre de comparaison, un modèle temporel (\"ARIMA\") a aussi été testé.");
define("_P4_DATE", "Decembre 2017");

define("_P5_TITLE", "Segmentation du comportement des clients");
define("_P5_DESC", "A partir d'un jeu de données d'articles vendus à des clients, il nous est demandé de faire une segmentation des clients par comportements afin de pouvoir mettre en place un classifieur et ainsi prédire dès les premiers achat d'un client, quel sera son comportement avenir.</br></br>Dans un premier temps, un clustering des article a été fait afin de pouvoir ensuite faire un Bag of Words des articles. Ensuite à l'aide de diverses agrégations pour avoir des features additionnelles (fréquences d'achat, panier moyen, ancienneté du dernier achat, ...) un nouveau dataset par client a été mis en place. A partir de celui-ci, un second clustering a été mis en place pour segmenter les clients. Après une analyse des clusters et des comportements liés, un classifieur a été mis en place afin de prédire dans quelle catégorie un client pourrait être.");
define("_P5_DATE", "Decembre 2017");

define("_P6_TITLE", "Prédiction de tags pour le site Stack Overflow");
define("_P6_DESC", "A partir de l'API Stack Exchange, des milliers de questions posées sur Stack Overflow avec leurs tags ont été téléchargé. A partir de ce jeu de données, des méthodes supervisées et non supervisées ont été mises en places afin de faire un système de prédiction de tags à une question donnée.</br></br>Après une phase de pré-traitement (tokenization, lemmatization), la matrice TF et TF-IDF ont été mise en place. Sur celles-ci les méthodes non supervisées (Latent Dirichlet Allocation et Non Negative Matrix) ont été appliquées pour prédire des tags à l'aide d'un KNN avec la distance de Jenson-Shannon. Pour la méthode supervisée, divers modèles avec régularisation ont été testés sur la matrice TF-IDF avec de bien meilleurs résultats.");
define("_P6_DATE", "Decembre 2017");

define("_P7_TITLE", "Classification de races de chiens");
define("_P7_DESC", "A partir d'un jeu de 10 000 images de chiens, il nous est demandé de réaliser un classifieur permettant de prédire la race du chien seulement sur cette image. Dans un premier temps, avec une méthode classique puis avec les Convolution Neural Networks.</br></br>Pour la méthode classique, une étude des descripteurs SIFT, des couleurs, des moment ainsi que des fréquences ont été fait avec des résultats très faibles. Pour ce qui est de la phase de Transfer Learning, les performances sont très au-dessus avec un classifieur de type Réseaux de Neurones aussi. Pour finir, une entrainement de zéro a été testé afin d'évaluer la pertinence du Transfer Learning sur ce type de tâches.");
define("_P7_DATE", "Janvier 2018");

define("_P8_TITLE", "Veille technologique - Recurrent Neural Networks");
define("_P8_DESC", "Lors de cette veille technologique, j'ai décidé de partir sur les Recurrent Neural Networks étant donné qu'ils n'ont pas été abordés dans cette formation.</br></br>Après une brève présentation du principe et des problèmes posés (notamment Vanishing Gradient), l'état de l'art a été présenté du Simple RNN au Gated Recurrent Unit en passant par le Long Short Term Memory de 1997 et 2000 et un modèle plus récent qu'est le Quasi Recurrent Neural Network (2017). Pour finir, une comparaison de tous ces modèle a été fait afin de regarder leur performances sur un dataset de référence.");
define("_P8_DATE", "Janvier 2018");

define("_P9_TITLE", "Compétition Kaggle - Segmentation d'images");
define("_P9_DESC", "Pour finir la formation, il nous est demandé de participer à une compétition Kaggle ouverte de notre choix. Je me suis tourné sur la compétition de segmentation d'images ou l’objectif est de prédire un masque par noyau de cellules.</br></br>Après une phase de pré-processing, un modèle basé uniquement sur du travail sur les image a été testé. Par la suite, le modèle U-net (mis en place en 2015 pour ce même type de tâche lors d'une précédente compétition avec des résultats bluffant) a été légèrement adapté à mon problème. Le résultats n'étant pas très bon, un second modèle utilisant de multiples images avec un pré-processing différent a été mis en place, permettant une bien meilleure segmentation. Pour finir, une phase de post-processing a été mise en place afin de séparer les cellules et préparer le fichier de soumission.");
define("_P9_DATE", "Février 2018");

define("_P10_TITLE", "Segmentation du comportement des clients (V2)");
define("_P10_DESC", "Lors du P6, j'ai découvert plusieurs algorithmes pour traiter les données textuelles (LDA, LSA et NMF). Durant mon P5, j'avais remarqué que le clustering des articles n'était pas très bon et pouvait être amélioré (améliorant ainsi la classification totale). De ca fait, j'ai recommencé ce projet après la formation avec ces nouvelles connaissances. Le résultat du clustering des articles est bien meilleur. Le nouveau notebook a été partagé sur Kaggle");
define("_P10_DATE", "Mars 2018");

define("_P11_TITLE", "Implementation en Python du DOSNES");
define("_P11_DESC", "Lors du projet de recommandeur de films en 3D, je voulais représenter les données sur une sphere. Le seul algorithme que j'ai trouvé permettant ceci était le DOubly Stochastic Neighbor Embedding on a Sphere (DOSNES) publié par Yao Lu en 2016 sur ArXiv. Cependant, il n'y avait pas d'implementations disponible en Python. De ce fait, je l'ai recrée à partir de leur publication et de leur implementation MatLab en utilisant le même naming que Sklearn. Les véréfication et la gestion d'erreur n'est pas encore implémentée mais l'algorithme est fonctionnel.");
define("_P11_DATE", "Mars 2018");

define("_P12_TITLE", "Recommandeur de films dans un espace 3D");
define("_P12_DESC", "Ce projet utilise le Machine Learning pour représenter les films dans un espace à dimensions en fonction de leurs similarités. A partir des données de IMDb, un sous ensemble de film a été conservé. Ces données ont été completées avec les données de l'API OMDb. Apres une phase de nettoyage/préparation, le t-SNE et le DOSNES ont été utilisés afin de représenter ce dataset dans un espace à 3 dimensions ou plaqués sur une sphere. Le rendu a été fait en JavaScipt en utilisant le WebGL avec Three.js.");
define("_P12_DATE", "Avril 2018");

?>