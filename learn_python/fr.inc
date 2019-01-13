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
define("_MENU3_DESC","Dans cette section, je vous présenterai différents contenus que j'ai découvert en apprenant Python, la Data Science, l'I.A. ou la programmation en générale.");
define("_MENU4_DESC","Dans cette section, je partagerai diverses articles sur des informations ou nouveautés.");
define("_MENU5_DESC","Dans cette section, je partagerai des informations diverses (sites web, compte twitter, etc...). Soyez curieux !");

// Learn Python
define("_TITLE_LP", "APPRENDRE PYTHON");
define("_HEADER_LP", _MENU3_DESC);

define("_LINALG", "Algèbre Linéaire");
define("_NUM_AN", "Analyse Numérique");
define("_ALGO", "Algorithmie");
define("_VULGARISATION", "Vulgarisation");
define("_MULTI_SUB", "Multi Sujets");
define("_TALK", "Conférences");
define("_AI", "Intelligence Artificielle");
define("_RL", "Apprentissage par Renforcement");
define("_PROB", "Probabilités");

define("_SECTION_BOOK", "Livres");
define("_SECTION_YOUTUBE", "Chaines Youtube");
define("_SECTION_SITE", "Sites");

define("_BOOK1_DESC", "Ce livre est le 1er livre que j'ai lu après avoir appris les bases du langage Python. Il m'a permis de bien progresser car il traverse 128 algorithmes divers tout en gardant un œil sur la complexité algorithmique. De ce fait, il ne s'adresse pas aux débutants car certains codes sont assez compliqués. Parmi les sujets abordés, on retrouve du travail sur les chaines de caractères au pathfinding en passant par la géométrie");

define("_BOOK2_DESC", "Ce livre est le 2<sup>nd</sup> livre que j'ai traversé. Il commence par un présentation de la librairie <b>Numpy</b> pour ensuite passer l'utilisation de <b>SciPy</b> en lien avec <b>NumPy</b>. Ce livre présente un bon nombre d'outils pour résoudre des problèmes d'<i>Algèbre Linéaire</i> au <i>Machine Learning</i> en passant par l'<i>Analyse Numérique</i> et le <i>Signal Processing</i>. Etant plus orienté sur une présentation de la librairie, je n'ai pas parcouru tout le livre. C'est surtout un très bon livre à garder sous la main en cas de problèmes.");

define("_BOOK3_DESC", "Ce livre vous ouvre grand les portes du <i>Machine Learning</i>. Il commence par présenter un la résolution d'un problème de <i>régression</i> et de <i>classification</i> avant de vous éclairer sur les différents modèles et comment les optimiser ainsi que comment réduire les dimensions du problème. En partie 2, il aborde les <i>Réseaux de Neurones</i> ainsi que le <i>Deep Learning</i> en se basant sur la Librairie <b>Tensorflow</b>. Ce livre est très complet, sans aller trop dans les détails de chaque modèles. <br/>BONUS : tous les exemples ont un Jupyter Notebook pour tester et aller plus loin");

define("_BOOK4_DESC", "Après avoir lu le livre présenté juste dessus, vous serez surement déçu du contenu de celui-ci. Cependant il est plus complet sur certains points (word embedding, Recurrent Neural Network). De plus, l'auteur présente quelques points basiques sur Tensorflow qui sont intéressant. Si vous voulez un conseil, achetez/lisez-le avant de lire \"Hands on Machine Learning with Scikit-Learn and TensorFlow\"");

define("_BOOK5_DESC", "Très impressionnat livre à propos des IAs. Dans ce millier de pages, vous irez dans le details sur toutes les parties de l'IA (du Tree-Search au Reinforcement Learning). Attention, comparé aux précédent livres, celui-ci ne propose pas de codes dans celui-ci mais fournit quelques codes en ligne pour tester des exercices. Je suis actuellement en pleine lecture de ce livre qui va surement prendre pas mal de temps...");

define("_BOOK6_DESC", "Comparé au livre présenté ci-dessus, celui-ci se concentre uniquement sur l'apprentissage par renforcement. Vous apprendrez les différents types de modèles de ce \"nouveau\" secteur. Je n'ai pas encore commencé la lecture mais je mettrai plus d'infos dès que j'aurai commencé :)");

define("_BOOK7_DESC", "Plus je fais de projets, plus je me rends compte que j'ai besoin d'une compréhension plus profonde du pourquoi et comment un réseau de neurones fonctionne. Ceci pour être en mesure de mettre en place une structure plus complexe qu'un simple NN, RNN ou CNN. Ce livre ne prend en compte que la partie Neural Network et est très complet. Mis à part qu'il n'est pas 100% à jour (ecrit en 2016), c'est une très bonne source de connaissances sur les NN. Il n'y a pas non plus de codes mais seulement du pseudo-code pour comprendre certaines fonctions.");

define("_BOOK8_DESC", "Ce livre aborde la différence entre Statisticiens Fréquentistes et Statisticiens Bayésiens. Il tente de convaincre, avec succès, les lecteurs de changer leur façon de penser pour une approche plus Bayésienne. Cette explication est basée sur de multiples exemples très parlants et parfois déroutants. Le livre est surtout philosophique et n'a que peu de Mathématiques.");

define("_YT1_DESC", "Envie de coder dans la bonne humeur ? Sur cette chaine, vous vous attaquerez à des problèmes et à leur résolution en Javascript avec P5.js ou en Java avec Processing. Chaque problème est résolu avec une explication claire et un algorithme incluant une visualisation de l'algorithme afin de faciliter la compréhension.");

define("_YT2_DESC", "Envie de coder un site sous Python, d'en savoir plus sur le ML et la finance, envie de faire un jeu sur pygame? Cette chaine est faite pour vous! Vous trouverez différentes playlists sur chaque sujets avec un projet mené de A-Z. Seul bémol, parfois les librairies ont évolué entre temps et la syntaxe n'est pas toujours a jour.");

define("_YT3_DESC", "Sur cette chaine, vous trouverez toutes les explications sur le fonctionnement des algorithmes d'intelligence artificiel et comment les mettre en place. Le must-have pour toutes personnes intéressées par cette branche<br/> +1 pour le dynamisme !");

define("_YT4_DESC", "Premier pas dans le Machine Learning ou perdu parmi tous les types de Réseaux de Neurones ? Cette chaine propose des courtes vidéos animées sur le fonctionnement du Machine Learning. Aucun prérequis n'est nécessaire, vous aurez juste une présentation de cette branche et des outils existants");

define("_YT5_DESC", "Une énorme librairie de sujet, de l'angularJS à Linux en passant par le big data, vous trouverez beaucoup de cours intéressant. Un bémol, la qualité du son est parfois mauvais et l'accent (Indien) difficile à comprendre.");

define("_YT6_DESC", "Sur cette chaine, vous aurez un regroupement de présentations sur les dernières avancés des langages de programmation diverses. C'est un équivalent de TEDx pour la programmation");

define("_YT7_DESC", "Voici la chaine des developpeur de chez Google. Vous trouverez dessus beaucoup de contenu à propos de TensorFlow et de leurs outils/innovations en général.");

define("_YT8_DESC", "Cette chaine est une pépite. Si vous souhaitez obtenir plus d’informations sur les dernières avancées en Deep Reinforcement Learning. Il explique les dernières évolutions de manière simple et les rend faciles à comprendre.");

define("_YT9_DESC", "Une présentation des dernières avancées en Data Science et en 3 minutes, cette chaine propose un très bon aperçu des dernières publications. Environ 2 vidéos par semaine, c'est une bonne chaîne à suivre.");

define("_YT10_DESC", "Une chaine Youtube présentant plusieurs concepts mathématiques de manière simple. Ce n'est pas toujours pertinent pour la Data Sciences, mais c'est une très bonne source de connaissances générales.");

define("_YT11_DESC", "Un chaine générique qui parle d’ordinateurs et d’algorithmes. Semblable à Numberphile, c’est un une chaine générique intéressante à suivre");

define("_SITE1_DESC", "Si vous connaissez déjà un peu la programmation et vous en avez marre de coder toujours la même chose, ce site est fait pour vous! Résolvez des puzzles en codant votre propre IA, affrontez d'autres codeurs sur des minis challenges de 5 minutes ou sur des tournois d'une semaine, le choix est large. <br/>NB : Ce site supporte 27 langages différents. A vos claviers !");

define("_SITE2_DESC", "J'ai découvert ce site récemment et pas encore participé aux challenges. A l'instar de Codingame, il propose de datasets pour s'entrainer au Machine Learning. Vous construisez votre modèle, vous proposez les résultats du test set sur le site et vous avez votre précision et classement. Si vous voulez vous attaquer au Machine Learning c'est l'endroit !");

define("_SITE3_DESC", "Devrais-je vraiment présenter ce forum ? Si vous ne connaissez pas, c'est le WikiPedia de la programmation. Vous avez une question? Quelqu'un y a déjà sûrement répondu sur ce site :)");

define("_SITE4_DESC", "Ce site a été créé par Codingame. L'objectif est de fournir du contenu pour apprendre au Codeurs et écrit par les Codeurs. Le site est en bêta mais déjà avec pas mal de contenus très intéressant");
?>