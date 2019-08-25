<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Nicolas MINE">
    <link rel="shortcut icon" href="../static/ico/favicon.png">

    <title>Nicolas MINE - Scripts</title>
    
    <link rel="stylesheet" type="text/css" href="../static/css/animate.css">
    <link rel="stylesheet" type="text/css" href="../static/css/bootstrap.min.css" >   
    <link rel="stylesheet" type="text/css" href="../static/css/style.<?=filemtime('../static/css/style.css');?>.css">
    <link rel="stylesheet" type="text/css" href="../static/full_libs/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href='../static/css/font_lato.css'>
    <link rel="stylesheet" type="text/css" href='../static/css/font_railway.css'>
</head>

<?php
    session_start();
    $langue = "";
    if (isset($_COOKIE["lang"])){
        if ($_COOKIE["lang"] == "fr" or $_COOKIE["lang"] == "en"){
            $langue = $_COOKIE["lang"];
        }
    }

    if ($langue == ""){
        if(isset($_SESSION['lang'])) {
            if ($_SESSION["lang"] == "fr" or $_SESSION["lang"] == "en"){
                $langue = $_SESSION["lang"];
            }
        }
    }

    if ($langue == "fr"){
        include "fr.inc";
    } else {
        include "en.inc";
    }
?>

<body data-spy="scroll" data-offset="0" data-target="#nav">
       <div id="section-topbar">
        <div id="topbar-inner">
            <div class="container">
                <div class="row">
                    <div class="dropdown">
                        <ul id="nav" class="nav">
                            <li class="menu-item"><a class="smoothScroll" href="#up" title="<?= _SECTION_UP ?>"><i class="fa fa-hand-o-up"></i></a></li>
                            <li class="menu-item"><a class="smoothScroll" href="#down" title="<?= _SECTION_DOWN ?>"><i class="fa fa-hand-o-down"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="clear"></div>
        </div>
    </div>
    
    <div id="flags">
		<img src="../static/img/flags_fr.png" class="lang_selector" id="fr"/><br>
		<img src="../static/img/flags_us.png" class="lang_selector" id="en"/>
	</div>	
		
    <div id="back">
		<a href="../" title="Acceuil"><i class="fa fa-home fa-2x white"></i></a>
	</div>
	
	<div id="intro" class="shifted">
		<div class="container animated wow fadeInDown">
			<div class="row">
				<div class="col-lg-2 col-lg-offset-1">
					<h5><?= mb_strtoupper(_TITLE_CG) ?></h5>
				</div>
				<div class="col-lg-6">
					<p>
						<?= _HEADER_CG ?>
					</p>
				</div>
			</div>
		</div>
	</div>

    <section id="up" name="up"></section>
       
        <div class="container desc animated wow fadeInDown">
		<div class="row">
<!--
            <div class="col-lg-8 col-lg-offset-2"> 
                <p><t><?= _PUZZLE3_TITLE ?></t></p>
                <p><more><?= _PUZZLE3_DESC ?></more></p>
            </div>
            <div class="col-lg-2 pro">
                <ul>
                    <li class="link_tips"><imp><a class="white" href="solution/Cellular_Automaton.html" target="_blank"><?= _SHOW_SOLUTION ?></a></imp></li>
                    <li class="link_tips"><imp><a class="white" href="solution/Cellular_Automaton.ipynb" download="Cellular_Automaton.ipynb"><?= _DL_SOLUTION ?></a></imp></li>
                </ul>
            </div>
-->
            <div class="col-lg-8 col-lg-offset-2"> 
                <p><t><?= _PUZZLE4_TITLE ?></t></p>
                <p><more><?= _PUZZLE4_DESC ?></more></p>
            </div>
            <div class="col-lg-2 pro">
                <ul>
                    <li class="link_tips"><imp><a class="white" href="solution/Convex_Hull.html" target="_blank"><?= _SHOW_SOLUTION ?></a></imp></li>
                    <li class="link_tips"><imp><a class="white" href="solution/Convex_Hull.ipynb" download="Convex_Hull.ipynb"><?= _DL_SOLUTION ?></a></imp></li>
                </ul>
            </div>
            <div class="col-lg-8 col-lg-offset-2"> 
                <p><t><?= _PUZZLE5_TITLE ?></t></p>
                <p><more><?= _PUZZLE5_DESC ?></more></p>
            </div>
            <div class="col-lg-2 pro">
                <ul>
                    <li class="link_tips"><imp><a class="white" href="solution/Pathfinding-Dijkstra_Algorithm.html" target="_blank"><?= _SHOW_SOLUTION ?></a></imp></li>
                    <li class="link_tips"><imp><a class="white" href="solution/Pathfinding-Dijkstra_Algorithm.ipynb" download="Pathfinding-Dijkstra_Algorithm.ipynb"><?= _DL_SOLUTION ?></a></imp></li>
                </ul>
            </div>
            <div class="col-lg-8 col-lg-offset-2"> 
                <p><t><?= _PUZZLE6_TITLE ?></t></p>
                <p><more><?= _PUZZLE6_DESC ?></more></p>
            </div>
            <div class="col-lg-2 pro">
                <ul>
                    <li class="link_tips"><imp><a class="white" href="solution/Perceptron.html" target="_blank"><?= _SHOW_SOLUTION ?></a></imp></li>
                    <li class="link_tips"><imp><a class="white" href="solution/Perceptron.ipynb" download="Perceptron.ipynb"><?= _DL_SOLUTION ?></a></imp></li>
                </ul>
            </div>
            <div class="col-lg-8 col-lg-offset-2"> 
                <p><t><?= _PUZZLE7_TITLE ?></t></p>
                <p><more><?= _PUZZLE7_DESC ?></more></p>
            </div>
            <div class="col-lg-2 pro">
                <ul>
                    <li class="link_tips"><imp><a class="white" href="solution/Traveling_Salesman_Problem.html" target="_blank"><?= _SHOW_SOLUTION ?></a></imp></li>
                    <li class="link_tips"><imp><a class="white" href="solution/Traveling_Salesman_Problem.ipynb" download="Traveling_Salesman_Problem.ipynb"><?= _DL_SOLUTION ?></a></imp></li>
                </ul>
            </div>
            <div class="col-lg-8 col-lg-offset-2"> 
                <p><t><?= _PUZZLE8_TITLE ?></t></p>
                <p><more><?= _PUZZLE8_DESC ?></more></p>
            </div>
            <div class="col-lg-2 pro">
                <ul>
                    <li class="link_tips"><imp><a class="white" href="solution/Tridiagonal_Random_Matrices.html" target="_blank"><?= _SHOW_SOLUTION ?></a></imp></li>
                    <li class="link_tips"><imp><a class="white" href="solution/Tridiagonal_Random_Matrices.ipynb" download="Tridiagonal_Random_Matrices.ipynb"><?= _DL_SOLUTION ?></a></imp></li>
                </ul>
            </div>
            <div class="col-lg-8 col-lg-offset-2"> 
                <p><t><?= _PUZZLE9_TITLE ?></t></p>
                <p><more><?= _PUZZLE9_DESC ?></more></p>
            </div>
            <div class="col-lg-2 pro">
                <ul>
                    <li class="link_tips"><imp><a class="white" href="solution/Auto_MPG_Dataset.html" target="_blank"><?= _SHOW_SOLUTION ?></a></imp></li>
                    <li class="link_tips"><imp><a class="white" href="solution/Auto_MPG_Dataset.ipynb" download="Auto_MPG_Dataset.ipynb"><?= _DL_SOLUTION ?></a></imp></li>
                </ul>
            </div>
            <div class="col-lg-8 col-lg-offset-2"> 
                <p><t><?= _PUZZLE10_TITLE ?></t></p>
                <p><more><?= _PUZZLE10_DESC ?></more></p>
            </div>
            <div class="col-lg-2 pro">
                <ul>
                    <li class="link_tips"><imp><a class="white" href="solution/Iris_Dataset.html" target="_blank"><?= _SHOW_SOLUTION ?></a></imp></li>
                    <li class="link_tips"><imp><a class="white" href="solution/Iris_Dataset.ipynb" download="Iris_Dataset.ipynb"><?= _DL_SOLUTION ?></a></imp></li>
                </ul>
            </div>
            <div class="col-lg-8 col-lg-offset-2"> 
                <p><t><?= _PUZZLE11_TITLE ?></t></p>
                <p><more><?= _PUZZLE11_DESC ?></more></p>
            </div>
            <div class="col-lg-2 pro">
                <ul>
                    <li class="link_tips"><imp><a class="white" href="solution/Moon_Dataset.html" target="_blank"><?= _SHOW_SOLUTION ?></a></imp></li>
                    <li class="link_tips"><imp><a class="white" href="solution/Moon_Dataset.ipynb" download="Moon_Dataset.ipynb"><?= _DL_SOLUTION ?></a></imp></li>
                </ul>
            </div>
            <div class="col-lg-8 col-lg-offset-2"> 
                <p><t><?= _PUZZLE12_TITLE ?></t></p>
                <p><more><?= _PUZZLE12_DESC ?></more></p>
            </div>
            <div class="col-lg-2 pro">
                <ul>
                    <li class="link_tips"><imp><a class="white" href="solution/Neural_Network_Exploration.html" target="_blank"><?= _SHOW_SOLUTION ?></a></imp></li>
                    <li class="link_tips"><imp><a class="white" href="solution/Neural_Network_Exploration.ipynb" download="Neural_Network_Exploration.ipynb"><?= _DL_SOLUTION ?></a></imp></li>
                </ul>
            </div>
            <div class="col-lg-8 col-lg-offset-2"> 
                <p><t><?= _PUZZLE13_TITLE ?></t></p>
                <p><more><?= _PUZZLE13_DESC ?></more></p>
            </div>
            <div class="col-lg-2 pro">
                <ul>
                    <li class="link_tips"><imp><a class="white" href="solution/House_price.html" target="_blank"><?= _SHOW_SOLUTION ?></a></imp></li>
                    <li class="link_tips"><imp><a class="white" href="solution/House_price.ipynb" download="House_price.ipynb"><?= _DL_SOLUTION ?></a></imp></li>
                </ul>
            </div>
            <div class="col-lg-8 col-lg-offset-2"> 
                <p><t><?= _PUZZLE14_TITLE ?></t></p>
                <p><more><?= _PUZZLE14_DESC ?></more></p>
            </div>
            <div class="col-lg-2 pro">
                <ul>
                    <li class="link_tips"><imp><a class="white" href="solution/Credit_Card_Fraud.html" target="_blank"><?= _SHOW_SOLUTION ?></a></imp></li>
                    <li class="link_tips"><imp><a class="white" href="solution/Credit_Card_Fraud.ipynb" download="Credit_Card_Fraud.ipynb"><?= _DL_SOLUTION ?></a></imp></li>
                </ul>
            </div>
            <div class="col-lg-8 col-lg-offset-2"> 
                <p><t><?= _PUZZLE15_TITLE ?></t></p>
                <p><more><?= _PUZZLE15_DESC ?></more></p>
            </div>
            <div class="col-lg-2 pro">
                <ul>
                    <li class="link_tips"><imp><a class="white" href="solution/Employees.html" target="_blank"><?= _SHOW_SOLUTION ?></a></imp></li>
                    <li class="link_tips"><imp><a class="white" href="solution/Employees.ipynb" download="Employees.ipynb"><?= _DL_SOLUTION ?></a></imp></li>
                </ul>
            </div>
            <div class="col-lg-8 col-lg-offset-2"> 
                <p><t><?= _PUZZLE16_TITLE ?></t></p>
                <p><more><?= _PUZZLE16_DESC ?></more></p>
            </div>
            <div class="col-lg-2 pro">
                <ul>
                    <li class="link_tips"><imp><a class="white" href="solution/Reber.html" target="_blank"><?= _SHOW_SOLUTION ?></a></imp></li>
                    <li class="link_tips"><imp><a class="white" href="solution/Reber.ipynb" download="Reber.ipynb"><?= _DL_SOLUTION ?></a></imp></li>
                </ul>
            </div>
            <div class="col-lg-8 col-lg-offset-2"> 
                <p><t><?= _PUZZLE17_TITLE ?></t></p>
                <p><more><?= _PUZZLE17_DESC ?></more></p>
            </div>
            <div class="col-lg-2 pro">
                <ul>
                    <li class="link_tips"><imp><a class="white" href="solution/FBProphet.html" target="_blank"><?= _SHOW_SOLUTION ?></a></imp></li>
                    <li class="link_tips"><imp><a class="white" href="solution/FBProphet.ipynb" download="FBProphet.ipynb"><?= _DL_SOLUTION ?></a></imp></li>
                </ul>
            </div>
            <div class="col-lg-8 col-lg-offset-2"> 
                <p><t><?= _PUZZLE18_TITLE ?></t></p>
                <p><more><?= _PUZZLE18_DESC ?></more></p>
            </div>
            <div class="col-lg-2 pro">
                <ul>
                    <li class="link_tips"><imp><a class="white" href="solution/Test+UMAP+on+Text+Datas.html" target="_blank"><?= _SHOW_SOLUTION ?></a></imp></li>
                    <li class="link_tips"><imp><a class="white" href="solution/Test+UMAP+on+Text+Datas.ipynb" download="Test+UMAP+on+Text+Datas.ipynb"><?= _DL_SOLUTION ?></a></imp></li>
                </ul>
            </div>
            <div class="col-lg-8 col-lg-offset-2"> 
                <p><t><?= _PUZZLE19_TITLE ?></t></p>
                <p><more><?= _PUZZLE19_DESC ?></more></p>
            </div>
            <div class="col-lg-2 pro">
                <ul>
                    <li class="link_tips"><imp><a class="white" href="solution/Double_pendulum.html" target="_blank"><?= _SHOW_SOLUTION ?></a></imp></li>
                    <li class="link_tips"><imp><a class="white" href="solution/Double_pendulum.ipynb" download="Double_pendulum.ipynb"><?= _DL_SOLUTION ?></a></imp></li>
                </ul>
            </div>
            <div class="col-lg-8 col-lg-offset-2"> 
                <p><t><?= _PUZZLE20_TITLE ?></t></p>
                <p><more><?= _PUZZLE20_DESC ?></more></p>
            </div>
            <div class="col-lg-2 pro">
                <ul>
                    <li class="link_tips"><imp><a class="white" href="solution/Double_pendulum2.html" target="_blank"><?= _SHOW_SOLUTION ?></a></imp></li>
                    <li class="link_tips"><imp><a class="white" href="solution/Double_pendulum2.ipynb" download="Double_pendulum2.ipynb"><?= _DL_SOLUTION ?></a></imp></li>
                </ul>
            </div>
            <div class="col-lg-8 col-lg-offset-2"> 
                <p><t><?= _PUZZLE21_TITLE ?></t></p>
                <p><more><?= _PUZZLE21_DESC ?></more></p>
            </div>
            <div class="col-lg-2 pro">
                <ul>
                    <li class="link_tips"><imp><a class="white" href="solution/QuickDraw_classification.html" target="_blank"><?= _SHOW_SOLUTION ?></a></imp></li>
                    <li class="link_tips"><imp><a class="white" href="solution/QuickDraw_classification.ipynb" download="QuickDraw_classification.ipynb"><?= _DL_SOLUTION ?></a></imp></li>
                </ul>
            </div>
            <div class="col-lg-8 col-lg-offset-2"> 
                <p><t><?= _PUZZLE22_TITLE ?></t></p>
                <p><more><?= _PUZZLE22_DESC ?></more></p>
            </div>
            <div class="col-lg-2 pro">
                <ul>
                    <li class="link_tips"><imp><a class="white" href="solution/Neuro_evolution.html" target="_blank"><?= _SHOW_SOLUTION ?></a></imp></li>
                    <li class="link_tips"><imp><a class="white" href="solution/Neuro_evolution.ipynb" download="Neuro_evolution.ipynb"><?= _DL_SOLUTION ?></a></imp></li>
                </ul>
            </div>
            <div class="col-lg-8 col-lg-offset-2"> 
                <p><t><?= _PUZZLE23_TITLE ?></t></p>
                <p><more><?= _PUZZLE23_DESC ?></more></p>
            </div>
            <div class="col-lg-2 pro">
                <ul>
                    <li class="link_tips"><imp><a class="white" href="solution/exploration.html" target="_blank"><?= _SHOW_SOLUTION ?></a></imp></li>
                    <li class="link_tips"><imp><a class="white" href="solution/exploration.Rmd" download="exploration.Rmd"><?= _DL_SOLUTION ?></a></imp></li>
                </ul>
            </div>
            <div class="col-lg-8 col-lg-offset-2"> 
                <p><t><?= _PUZZLE24_TITLE ?></t></p>
                <p><more><?= _PUZZLE24_DESC ?></more></p>
            </div>
            <div class="col-lg-2 pro">
                <ul>
                    <li class="link_tips"><imp><a class="white" href="https://github.com/Coni63/DeepDream" target="_blank"><?= _SHOW_REPO ?></a></imp></li>
                    <li class="link_tips"><imp><a class="white" href="https://www.youtube.com/watch?v=KW3CJ7i6LP4"  target="_blank"><?= _SHOW_VID ?></a></imp></li>
                </ul>
            </div>
            <div class="col-lg-8 col-lg-offset-2"> 
                <p><t><?= _PUZZLE25_TITLE ?></t></p>
                <p><more><?= _PUZZLE25_DESC ?></more></p>
            </div>
            <div class="col-lg-2 pro">
                <ul>
                    <li class="link_tips"><imp><a class="white" href="solution/Audio_mnist.html" target="_blank"><?= _SHOW_SOLUTION ?></a></imp></li>
                    <li class="link_tips"><imp><a class="white" href="solution/Audio_mnist.ipynb" download="Audio_mnist.ipynb"><?= _DL_SOLUTION ?></a></imp></li>
                </ul>
            </div>
            <div class="col-lg-8 col-lg-offset-2"> 
                <p><t><?= _PUZZLE26_TITLE ?></t></p>
                <p><more><?= _PUZZLE26_DESC ?></more></p>
            </div>
            <div class="col-lg-2 pro">
                <ul>
                    <li class="link_tips"><imp><a class="white" href="solution/Classification_FMA.html" target="_blank"><?= _SHOW_SOLUTION ?></a></imp></li>
                    <li class="link_tips"><imp><a class="white" href="solution/Classification_FMA.ipynb" download="Classification_FMA.ipynb"><?= _DL_SOLUTION ?></a></imp></li>
                </ul>
            </div>
            <div class="col-lg-8 col-lg-offset-2"> 
                <p><t><?= _PUZZLE27_TITLE ?></t></p>
                <p><more><?= _PUZZLE27_DESC ?></more></p>
            </div>
            <div class="col-lg-2 pro">
                <ul>
                    <li class="link_tips"><imp><a class="white" href="solution/Audio_Segmentation.html" target="_blank"><?= _SHOW_SOLUTION ?></a></imp></li>
                    <li class="link_tips"><imp><a class="white" href="solution/Audio_Segmentation.ipynb" download="Audio_Segmentation.ipynb"><?= _DL_SOLUTION ?></a></imp></li>
                </ul>
            </div>
            <div class="col-lg-8 col-lg-offset-2"> 
                <p><t><?= _PUZZLE28_TITLE ?></t></p>
                <p><more><?= _PUZZLE28_DESC ?></more></p>
            </div>
            
            <div class="col-lg-2 pro">
                <ul>
                    <li class="link_tips"><imp><a class="white" href="solution/Meta-Data.html" target="_blank"><?= _SHOW_SOLUTION ?> part 1</a></imp></li>
                    <li class="link_tips"><imp><a class="white" href="solution/Meta-Data.ipynb" download="Meta-Data.ipynb"><?= _DL_SOLUTION ?> part 1</a></imp></li>
                    <li class="link_tips"><imp><a class="white" href="solution/Meta-Data-2.html" target="_blank"><?= _SHOW_SOLUTION ?> part 2</a></imp></li>
                    <li class="link_tips"><imp><a class="white" href="solution/Meta-Data-2.ipynb" download="Meta-Data-2.ipynb"><?= _DL_SOLUTION ?> part 2</a></imp></li>
                </ul>
            </div>
            
            <div class="col-lg-8 col-lg-offset-2"> 
                <p><t><?= _PUZZLE29_TITLE ?></t></p>
                <p><more><?= _PUZZLE29_DESC ?></more></p>
            </div>

            <div class="col-lg-2 pro">
                <ul>
                    <li class="link_tips"><imp><a class="white" href="solution/Feature_extraction.html" target="_blank"><?= _SHOW_SOLUTION ?></a></imp></li>
                    <li class="link_tips"><imp><a class="white" href="solution/Feature_extraction.ipynb" download="Feature_extraction.ipynb"><?= _DL_SOLUTION ?></a></imp></li>
                </ul>
            </div>
            
            <div class="col-lg-8 col-lg-offset-2"> 
                <p><t><?= _PUZZLE30_TITLE ?></t></p>
                <p><more><?= _PUZZLE30_DESC ?></more></p>
            </div>

            <div class="col-lg-2 pro">
                <ul>
                    <li class="link_tips"><imp><a class="white" href="solution/Fit_Circle.html" target="_blank"><?= _SHOW_SOLUTION ?></a></imp></li>
                    <li class="link_tips"><imp><a class="white" href="solution/Fit_Circle.ipynb" download="Fit_Circle.ipynb"><?= _DL_SOLUTION ?></a></imp></li>
                    <li class="link_tips"><imp><a class="white" href="https://github.com/Coni63/fit_circle" target="_blank">Github Repo</a></imp></li>
                </ul>
            </div>
            
            <div class="col-lg-8 col-lg-offset-2"> 
                <p><t><?= _PUZZLE31_TITLE ?></t></p>
                <p><more><?= _PUZZLE31_DESC ?></more></p>
            </div>

            <div class="col-lg-2 pro">
                <ul>
                    <li class="link_tips"><imp><a class="white" href="solution/Sentiment_Analysis_API.html" target="_blank"><?= _SHOW_SOLUTION ?> - API</a></imp></li>
                    <li class="link_tips"><imp><a class="white" href="solution/Sentiment_Analysis_API.ipynb" download="Sentiment_Analysis_API.ipynb"><?= _DL_SOLUTION ?> - API</a></imp></li>
                    <li class="link_tips"><imp><a class="white" href="solution/Sentiment_Analysis_Model.html" target="_blank"><?= _SHOW_SOLUTION ?> - Model</a></imp></li>
                    <li class="link_tips"><imp><a class="white" href="solution/Sentiment_Analysis_Model.ipynb" download="Sentiment_Analysis_Model.ipynb"><?= _DL_SOLUTION ?> - Model</a></imp></li>
                </ul>
            </div>
            
            <div class="col-lg-8 col-lg-offset-2"> 
                <p><t><?= _PUZZLE32_TITLE ?></t></p>
                <p><more><?= _PUZZLE32_DESC ?></more></p>
            </div>

            <div class="col-lg-2 pro">
                <ul>
                    <li class="link_tips"><imp><a class="white" href="solution/Analysis+of+Tweets.html" target="_blank"><?= _SHOW_SOLUTION ?></a></imp></li>
                    <li class="link_tips"><imp><a class="white" href="solution/Analysis+of+Tweets.ipynb" download="Analysis+of+Tweets.ipynb"><?= _DL_SOLUTION ?></a></imp></li>
                </ul>
            </div>
            
            <div class="col-lg-8 col-lg-offset-2"> 
                <p><t><?= _PUZZLE33_TITLE ?></t></p>
                <p><more><?= _PUZZLE33_DESC ?></more></p>
            </div>

            <div class="col-lg-2 pro">
                <ul>
                    <li class="link_tips"><imp><a class="white" href="solution/Taquin.html" target="_blank"><?= _SHOW_SOLUTION ?></a></imp></li>
                    <li class="link_tips"><imp><a class="white" href="solution/Taquin.ipynb" download="Taquin.ipynb"><?= _DL_SOLUTION ?></a></imp></li>
                </ul>
            </div>
            
            <div class="col-lg-8 col-lg-offset-2"> 
                <p><t><?= _PUZZLE34_TITLE ?></t></p>
                <p><more><?= _PUZZLE34_DESC ?></more></p>
            </div>

            <div class="col-lg-2 pro">
                <ul>
                    <li class="link_tips"><imp><a class="white" href="solution/CG-Competition.html" target="_blank"><?= _SHOW_SOLUTION ?></a></imp></li>
                    <li class="link_tips"><imp><a class="white" href="solution/CG-Competition.ipynb" download="CG-Competition.ipynb"><?= _DL_SOLUTION ?></a></imp></li>
                </ul>
            </div>
            
            <div class="col-lg-8 col-lg-offset-2"> 
                <p><t><?= _PUZZLE35_TITLE ?></t></p>
                <p><more><?= _PUZZLE35_DESC ?></more></p>
            </div>

            <div class="col-lg-2 pro">
                <ul>
                    <li class="link_tips"><imp><a class="white" href="https://github.com/Coni63/Java_Scripts/tree/master/GeneticAlgo" target="_blank"><?= _SHOW_REPO ?></a></imp></li>
                    <li class="link_tips"><imp><a class="white" href="https://www.youtube.com/watch?v=__pIMpb8p0E" target="_blank"><?= _SHOW_VID ?></a></imp></li>
                </ul>
            </div>
            
            <div class="col-lg-8 col-lg-offset-2"> 
                <p><t><?= _PUZZLE36_TITLE ?></t></p>
                <p><more><?= _PUZZLE36_DESC ?></more></p>
            </div>

            <div class="col-lg-2 pro">
                <ul>
                    <li class="link_tips"><imp><a class="white" href="solution/Heartbeat.html" target="_blank"><?= _SHOW_SOLUTION ?></a></imp></li>
                    <li class="link_tips"><imp><a class="white" href="solution/Heartbeat.ipynb" download="Heartbeat.ipynb"><?= _DL_SOLUTION ?></a></imp></li>
                </ul>
            </div>
            
            
            <div class="col-lg-8 col-lg-offset-2"> 
                <p><t><?= _PUZZLE37_TITLE ?></t></p>
                <p><more><?= _PUZZLE37_DESC ?></more></p>
            </div>

            <div class="col-lg-2 pro">
                <ul>
                    <li class="link_tips"><imp><a class="white" href="https://github.com/Coni63/Java_Scripts/tree/master/code_finder" target="_blank"><?= _SHOW_REPO ?></a></imp></li>
                    <li class="link_tips"><imp><a class="white" href="solution/code_finder.jar" download="solution/code_finder.jar"><?= _DL_JAR ?></a></imp></li>
                </ul>
            </div>
            
            <div class="col-lg-8 col-lg-offset-2"> 
                <p><t><?= _PUZZLE38_TITLE ?></t></p>
                <p><more><?= _PUZZLE38_DESC ?></more></p>
            </div>

            <div class="col-lg-2 pro">
                <ul>
                    <li class="link_tips"><imp><a class="white" href="https://github.com/Coni63/Java_Scripts/tree/master/fractal" target="_blank"><?= _SHOW_REPO ?></a></imp></li>
                    <li class="link_tips"><imp><a class="white" href="solution/fractal.jar" download="solution/fractal.jar"><?= _DL_JAR ?></a></imp></li>
                </ul>
            </div>
            
            <div class="col-lg-8 col-lg-offset-2"> 
                <p><t><?= _PUZZLE39_TITLE ?></t></p>
                <p><more><?= _PUZZLE39_DESC ?></more></p>
            </div>

            <div class="col-lg-2 pro">
                <ul>
                    <li class="link_tips"><imp><a class="white" href="https://github.com/Coni63/Java_Scripts/tree/master/Android/MyApplication" target="_blank"><?= _SHOW_REPO ?> - Android</a></imp></li>
                    <li class="link_tips"><imp><a class="white" href="https://github.com/Coni63/Java_Scripts/tree/master/BT_controller" target="_blank"><?= _SHOW_REPO ?> - Java</a></imp></li>
                </ul>
            </div>
            
            <div class="col-lg-8 col-lg-offset-2"> 
                <p><t><?= _PUZZLE40_TITLE ?></t></p>
                <p><more><?= _PUZZLE40_DESC ?></more></p>
            </div>

            <div class="col-lg-2 pro">
                <ul>
                    <li class="link_tips"><imp><a class="white" href="solution/Air_Madrid.html" target="_blank"><?= _SHOW_SOLUTION ?></a></imp></li>
                    <li class="link_tips"><imp><a class="white" href="solution/Air_Madrid.ipynb" download="Air_Madrid.ipynb"><?= _DL_SOLUTION ?></a></imp></li>
                </ul>
            </div>
            
            <div class="col-lg-8 col-lg-offset-2"> 
                <p><t><?= _PUZZLE41_TITLE ?></t></p>
                <p><more><?= _PUZZLE41_DESC ?></more></p>
            </div>

            <div class="col-lg-2 pro">
                <ul>
                    <li class="link_tips"><imp><a class="white" href="solution/Q-Learning.html" target="_blank"><?= _SHOW_SOLUTION ?></a></imp></li>
                    <li class="link_tips"><imp><a class="white" href="solution/Q-Learning.ipynb" download="Q-Learning.ipynb"><?= _DL_SOLUTION ?></a></imp></li>
                </ul>
            </div>
            
            <div class="col-lg-8 col-lg-offset-2"> 
                <p><t><?= _PUZZLE42_TITLE ?></t></p>
                <p><more><?= _PUZZLE42_DESC ?></more></p>
            </div>

            <div class="col-lg-2 pro">
                <ul>
                    <li class="link_tips"><imp><a class="white" href="solution/Whats_Cooking.html" target="_blank"><?= _SHOW_SOLUTION ?></a></imp></li>
                    <li class="link_tips"><imp><a class="white" href="solution/Whats_Cooking.ipynb" download="Whats_Cooking.ipynb"><?= _DL_SOLUTION ?></a></imp></li>
                </ul>
            </div>
            
            <div class="col-lg-8 col-lg-offset-2"> 
                <p><t><?= _PUZZLE43_TITLE ?></t></p>
                <p><more><?= _PUZZLE43_DESC ?></more></p>
            </div>

            <div class="col-lg-2 pro">
                <ul>
                    <li class="link_tips"><imp><a class="white" href="solution/CartpoleDQN.html" target="_blank"><?= _SHOW_SOLUTION ?></a></imp></li>
                    <li class="link_tips"><imp><a class="white" href="solution/CartpoleDQN.ipynb" download="CartpoleDQN.ipynb"><?= _DL_SOLUTION ?></a></imp></li>
                </ul>
            </div>
            
            <div class="col-lg-8 col-lg-offset-2"> 
                <p><t><?= _PUZZLE44_TITLE ?></t></p>
                <p><more><?= _PUZZLE44_DESC ?></more></p>
            </div>

            <div class="col-lg-2 pro">
                <ul>
                    <li class="link_tips"><imp><a class="white" href="solution/TPOT_and_Black.html" target="_blank"><?= _SHOW_SOLUTION ?></a></imp></li>
                    <li class="link_tips"><imp><a class="white" href="solution/TPOT_and_Black.ipynb" download="TPOT_and_Black.ipynb"><?= _DL_SOLUTION ?></a></imp></li>
                </ul>
            </div>
            
            <div class="col-lg-8 col-lg-offset-2"> 
                <p><t><?= _PUZZLE45_TITLE ?></t></p>
                <p><more><?= _PUZZLE45_DESC ?></more></p>
            </div>

            <div class="col-lg-2 pro">
                <ul>
                    <li class="link_tips"><imp><a class="white" href="solution/Game_Of_Life.html" target="_blank"><?= _SHOW_SOLUTION ?></a></imp></li>
                    <li class="link_tips"><imp><a class="white" href="solution/Game_Of_Life.ipynb" download="Game_Of_Life.ipynb"><?= _DL_SOLUTION ?></a></imp></li>
                </ul>
            </div>
            
            <div class="col-lg-8 col-lg-offset-2"> 
                <p><t><?= _PUZZLE46_TITLE ?></t></p>
                <p><more><?= _PUZZLE46_DESC ?></more></p>
            </div>

            <div class="col-lg-2 pro">
                <ul>
                    <li class="link_tips"><imp><a class="white" href="solution/Policy+Search.html" target="_blank"><?= _SHOW_SOLUTION ?></a></imp></li>
                    <li class="link_tips"><imp><a class="white" href="solution/Policy%20Search.ipynb" download="Policy%20Search.ipynb"><?= _DL_SOLUTION ?></a></imp></li>
                </ul>
            </div>
            
            <div class="col-lg-8 col-lg-offset-2"> 
                <p><t><?= _PUZZLE47_TITLE ?></t></p>
                <p><more><?= _PUZZLE47_DESC ?></more></p>
            </div>

            <div class="col-lg-2 pro">
                <ul>
                    <li class="link_tips"><imp><a class="white" href="solution/PPO.html" target="_blank"><?= _SHOW_SOLUTION ?></a></imp></li>
                    <li class="link_tips"><imp><a class="white" href="solution/PPO.ipynb" download="PPO.ipynb"><?= _DL_SOLUTION ?></a></imp></li>
                </ul>
            </div>
            
            <div class="col-lg-8 col-lg-offset-2"> 
                <p><t><?= _PUZZLE48_TITLE ?></t></p>
                <p><more><?= _PUZZLE48_DESC ?></more></p>
            </div>

            <div class="col-lg-2 pro">
                <ul>
                    <li class="link_tips"><imp><a class="white" href="solution/ETF_project/Preparation.html" target="_blank"><?= _SHOW_SOLUTION ?></a></imp></li>
                    <li class="link_tips"><imp><a class="white" href="solution/ETF_project/Preparation.ipynb" download="Preparation.ipynb"><?= _DL_SOLUTION ?></a></imp></li>
                </ul>
            </div>
            
            <div class="col-lg-8 col-lg-offset-2"> 
                <p><t><?= _PUZZLE49_TITLE ?></t></p>
                <p><more><?= _PUZZLE49_DESC ?></more></p>
            </div>

            <div class="col-lg-2 pro">
                <ul>
                    <li class="link_tips"><imp><a class="white" href="solution/ETF_project/Simple_Model.html" target="_blank"><?= _SHOW_SOLUTION ?></a></imp></li>
                    <li class="link_tips"><imp><a class="white" href="solution/ETF_project/Simple_Model.ipynb" download="Simple_Model.ipynb"><?= _DL_SOLUTION ?></a></imp></li>
                </ul>
            </div>
            
            <div class="col-lg-8 col-lg-offset-2"> 
                <p><t><?= _PUZZLE50_TITLE ?></t></p>
                <p><more><?= _PUZZLE50_DESC ?></more></p>
            </div>

            <div class="col-lg-2 pro">
                <ul>
                    <li class="link_tips"><imp><a class="white" href="solution/ETF_project/Benchmark.html" target="_blank"><?= _SHOW_SOLUTION ?></a></imp></li>
                    <li class="link_tips"><imp><a class="white" href="solution/ETF_project/Benchmark.ipynb" download="Benchmark.ipynb"><?= _DL_SOLUTION ?></a></imp></li>
                </ul>
            </div>
            
            <div class="col-lg-8 col-lg-offset-2"> 
                <p><t><?= _PUZZLE51_TITLE ?></t></p>
                <p><more><?= _PUZZLE51_DESC ?></more></p>
            </div>

            <div class="col-lg-2 pro">
                <ul>
                    <li class="link_tips"><imp><a class="white" href="solution/ETF_project/perf_with_LSTM.html" target="_blank"><?= _SHOW_SOLUTION ?></a></imp></li>
                    <li class="link_tips"><imp><a class="white" href="solution/ETF_project/perf_with_LSTM.ipynb" download="perf_with_LSTM.ipynb"><?= _DL_SOLUTION ?></a></imp></li>
                </ul>
            </div>
            
            <div class="col-lg-8 col-lg-offset-2"> 
                <p><t><?= _PUZZLE52_TITLE ?></t></p>
                <p><more><?= _PUZZLE52_DESC ?></more></p>
            </div>

            <div class="col-lg-2 pro">
                <ul>
                   <li class="link_tips"><imp><a class="white" href="https://github.com/Coni63/Birthday_Bot" target="_blank">Github Repo</a></imp></li>
                    <li class="link_tips"><imp><a class="white" href="solution/Birthday_Extraction.html" target="_blank"><?= _SHOW_SOLUTION ?> - Extraction</a></imp></li>
                    <li class="link_tips"><imp><a class="white" href="solution/Birthday_Extraction.ipynb" download="Birthday_Extraction.ipynb"><?= _DL_SOLUTION ?> - Extraction</a></imp></li>
                    <li class="link_tips"><imp><a class="white" href="solution/Birthday_Exploration.html" target="_blank"><?= _SHOW_SOLUTION ?> - Exploration</a></imp></li>
                    <li class="link_tips"><imp><a class="white" href="solution/Birthday_Exploration.ipynb" download="Birthday_Exploration.ipynb"><?= _DL_SOLUTION ?> - Exploration</a></imp></li>
                </ul>
            </div>
            
            <div class="col-lg-8 col-lg-offset-2"> 
                <p><t><?= _PUZZLE53_TITLE ?></t></p>
                <p><more><?= _PUZZLE53_DESC ?></more></p>
            </div>

            <div class="col-lg-2 pro">
                <ul>
                    <li class="link_tips"><imp><a class="white" href="https://github.com/Coni63/Pose_video" target="_blank"><?= _SHOW_REPO ?></a></imp></li>
                </ul>
            </div>
            
            <div class="col-lg-8 col-lg-offset-2"> 
                <p><t><?= _PUZZLE54_TITLE ?></t></p>
                <p><more><?= _PUZZLE54_DESC ?></more></p>
            </div>

            <div class="col-lg-2 pro">
                <ul>
                    <li class="link_tips"><imp><a class="white" href="solution/Bayesian_Net.html" target="_blank"><?= _SHOW_SOLUTION ?></a></imp></li>
                    <li class="link_tips"><imp><a class="white" href="solution/Bayesian_Net.ipynb" download="Bayesian_Net.ipynb"><?= _DL_SOLUTION ?></a></imp></li>
                </ul>
            </div>
            
            <div class="col-lg-8 col-lg-offset-2"> 
                <p><t><?= _PUZZLE55_TITLE ?></t></p>
                <p><more><?= _PUZZLE55_DESC ?></more></p>
            </div>

            <div class="col-lg-2 pro">
                <ul>
                    <li class="link_tips"><imp><a class="white" href="solution/Stack_Arrangement.html" target="_blank"><?= _SHOW_SOLUTION ?></a></imp></li>
                    <li class="link_tips"><imp><a class="white" href="solution/Stack_Arrangement.ipynb" download="Stack_Arrangement.ipynb"><?= _DL_SOLUTION ?></a></imp></li>
                </ul>
            </div>
            
            <div class="col-lg-8 col-lg-offset-2"> 
                <p><t><?= _PUZZLE56_TITLE ?></t></p>
                <p><more><?= _PUZZLE56_DESC ?></more></p>
            </div>

            <div class="col-lg-2 pro">
                <ul>
                   <li class="link_tips"><imp><a class="white" href="https://github.com/Coni63/Personal_envs_gym" target="_blank">Github Repo</a></imp></li>
                    <li class="link_tips"><imp><a class="white" href="solution/Supervised_Model.html" target="_blank"><?= _SHOW_SOLUTION ?></a></imp></li>
                    <li class="link_tips"><imp><a class="white" href="solution/Supervised_Model.ipynb" download="Supervised_Model.ipynb"><?= _DL_SOLUTION ?></a></imp></li>
                    <li class="link_tips"><imp><a class="white" href="solution/Supervised_full.html" target="_blank"><?= _SHOW_SOLUTION ?></a></imp></li>
                    <li class="link_tips"><imp><a class="white" href="solution/Supervised_full.ipynb" download="Supervised_full.ipynb"><?= _DL_SOLUTION ?></a></imp></li>
                </ul>
            </div>
            
            <div class="col-lg-8 col-lg-offset-2"> 
                <p><t><?= _PUZZLE57_TITLE ?></t></p>
                <p><more><?= _PUZZLE57_DESC ?></more></p>
            </div>

            <div class="col-lg-2 pro">
                <ul>
                    <li class="link_tips"><imp><a class="white" href="solution/bokeh/Filter_decomposition.html" target="_blank"><?= _SHOW_SOLUTION ?></a></imp></li>
                    <li class="link_tips"><imp><a class="white" href="solution/bokeh/Filter_decomposition.ipynb" download="Filter_decomposition.ipynb"><?= _DL_SOLUTION ?></a></imp></li>
                </ul>
            </div>
            
            <div class="col-lg-8 col-lg-offset-2"> 
                <p><t><?= _PUZZLE58_TITLE ?></t></p>
                <p><more><?= _PUZZLE58_DESC ?></more></p>
            </div>

            <div class="col-lg-2 pro">
                <ul>
                    <li class="link_tips"><imp><a class="white" href="https://www.youtube.com/watch?v=7DHE8RnsCQ8" target="_blank"><?= _SHOW_VID ?></a></imp></li>
                    <li class="link_tips"><imp><a class="white" href="solution/test%20tubes.py" download="test%20tubes.py"><?= _DL_SOLUTION ?></a></imp></li>
                </ul>
            </div>
            
            <div class="col-lg-8 col-lg-offset-2"> 
                <p><t><?= _PUZZLE59_TITLE ?></t></p>
                <p><more><?= _PUZZLE59_DESC ?></more></p>
            </div>

            <div class="col-lg-2 pro">
                <ul>
                    <li class="link_tips"><imp><a class="white" href="solution/Sudoku_Solver.html" target="_blank"><?= _SHOW_SOLUTION ?></a></imp></li>
                    <li class="link_tips"><imp><a class="white" href="solution/Sudoku_Solver.ipynb" download="Sudoku_Solver.ipynb"><?= _DL_SOLUTION ?></a></imp></li>
                </ul>
            </div>
            
            <div class="col-lg-8 col-lg-offset-2"> 
                <p><t><?= _PUZZLE60_TITLE ?></t></p>
                <p><more><?= _PUZZLE60_DESC ?></more></p>
            </div>

            <div class="col-lg-2 pro">
                <ul>
                    <li class="link_tips"><imp><a class="white" href="solution/GrapheFB.html" target="_blank"><?= _SHOW_SOLUTION ?></a></imp></li>
                    <li class="link_tips"><imp><a class="white" href="solution/GrapheFB.ipynb" download="GrapheFB.ipynb"><?= _DL_SOLUTION ?></a></imp></li>
                </ul>
            </div>

            <div class="col-lg-8 col-lg-offset-2"> 
                <p><t><?= _PUZZLE61_TITLE ?></t></p>
                <p><more><?= _PUZZLE61_DESC ?></more></p>
            </div>

            <div class="col-lg-2 pro">
                <ul>
                    <li class="link_tips"><imp><a class="white" href="solution/cryptography/TossCoin.html" target="_blank"><?= _SHOW_SOLUTION ?></a></imp></li>
                    <li class="link_tips"><imp><a class="white" href="solution/cryptography/TossCoin.ipynb" download="TossCoin.ipynb"><?= _DL_SOLUTION ?></a></imp></li>
                </ul>
            </div>
            
            <div class="col-lg-8 col-lg-offset-2"> 
                <p><t><?= _PUZZLE62_TITLE ?></t></p>
                <p><more><?= _PUZZLE62_DESC ?></more></p>
            </div>

            <div class="col-lg-2 pro">
                <ul>
                    <li class="link_tips"><imp><a class="white" href="solution/cryptography/RSA.html" target="_blank"><?= _SHOW_SOLUTION ?></a></imp></li>
                    <li class="link_tips"><imp><a class="white" href="solution/cryptography/RSA.ipynb" download="RSA.ipynb"><?= _DL_SOLUTION ?></a></imp></li>
                </ul>
            </div>
            
            <div class="col-lg-8 col-lg-offset-2"> 
                <p><t><?= _PUZZLE63_TITLE ?></t></p>
                <p><more><?= _PUZZLE63_DESC ?></more></p>
            </div>

            <div class="col-lg-2 pro">
                <ul>
                    <li class="link_tips"><imp><a class="white" href="solution/cryptography/DiffieHellman.html" target="_blank"><?= _SHOW_SOLUTION ?></a></imp></li>
                    <li class="link_tips"><imp><a class="white" href="solution/cryptography/DiffieHellman.ipynb" download="DiffieHellman.ipynb"><?= _DL_SOLUTION ?></a></imp></li>
                </ul>
            </div>
            
            <div class="col-lg-8 col-lg-offset-2"> 
                <p><t><?= _PUZZLE64_TITLE ?></t></p>
                <p><more><?= _PUZZLE64_DESC ?></more></p>
            </div>

            <div class="col-lg-2 pro">
                <ul>
                    <li class="link_tips"><imp><a class="white" href="solution/cryptography/Crypto_Algorithms.html" target="_blank"><?= _SHOW_SOLUTION ?></a></imp></li>
                    <li class="link_tips"><imp><a class="white" href="solution/cryptography/Crypto_Algorithms.ipynb" download="Crypto_Algorithms.ipynb"><?= _DL_SOLUTION ?></a></imp></li>
                </ul>
            </div>
            
            <div class="col-lg-8 col-lg-offset-2"> 
                <p><t><?= _PUZZLE65_TITLE ?></t></p>
                <p><more><?= _PUZZLE65_DESC ?></more></p>
            </div>

            <div class="col-lg-2 pro">
                <ul>
                    <li class="link_tips"><imp><a class="white" href="solution/cryptography/DiscreteLog.html" target="_blank"><?= _SHOW_SOLUTION ?></a></imp></li>
                    <li class="link_tips"><imp><a class="white" href="solution/cryptography/DiscreteLog.ipynb" download="DiscreteLog.ipynb"><?= _DL_SOLUTION ?></a></imp></li>
                </ul>
            </div>
            
            <div class="col-lg-8 col-lg-offset-2"> 
                <p><t><?= _PUZZLE66_TITLE ?></t></p>
                <p><more><?= _PUZZLE66_DESC ?></more></p>
            </div>

            <div class="col-lg-2 pro">
                <ul>
                    <li class="link_tips"><imp><a class="white" href="solution/SeamCarving/Seam%20Carving.html" target="_blank"><?= _SHOW_SOLUTION ?></a></imp></li>
                    <li class="link_tips"><imp><a class="white" href="solution/SeamCarving/Seam%20Carving.ipynb" download="SeamCarving.ipynb"><?= _DL_SOLUTION ?></a></imp></li>
                </ul>
            </div>
            
            <div class="col-lg-8 col-lg-offset-2"> 
                <p><t><?= _PUZZLE67_TITLE ?></t></p>
                <p><more><?= _PUZZLE67_DESC ?></more></p>
            </div>

            <div class="col-lg-2 pro">
                <ul>
                    <li class="link_tips"><imp><a class="white" href="solution/CAM/CAM.html" target="_blank"><?= _SHOW_SOLUTION ?></a></imp></li>
                    <li class="link_tips"><imp><a class="white" href="solution/CAM/CAM.ipynb" download="CAM.ipynb"><?= _DL_SOLUTION ?></a></imp></li>
                </ul>
            </div>

            <div class="col-lg-8 col-lg-offset-2"> 
                <p><t><?= _PUZZLE68_TITLE ?></t></p>
                <p><more><?= _PUZZLE68_DESC ?></more></p>
            </div>

            <div class="col-lg-2 pro">
                <ul>
                    <li class="link_tips"><imp><a class="white" href="solution/CAM/SeamCarvingClassification.html" target="_blank"><?= _SHOW_SOLUTION ?></a></imp></li>
                    <li class="link_tips"><imp><a class="white" href="solution/CAM/SeamCarvingClassification.ipynb" download="SeamCarvingClassification.ipynb"><?= _DL_SOLUTION ?></a></imp></li>
                </ul>
            </div>
            
            <div class="col-lg-8 col-lg-offset-2"> 
                <p><t><?= _PUZZLE69_TITLE ?></t></p>
                <p><more><?= _PUZZLE69_DESC ?></more></p>
            </div>

            <div class="col-lg-2 pro">
                <ul>
                    <li class="link_tips"><imp><a class="white" href="solution/SeamCarving/Seam%20Carving%20on%20Dog.html" target="_blank"><?= _SHOW_SOLUTION ?></a></imp></li>
                    <li class="link_tips"><imp><a class="white" href="solution/SeamCarving/Seam%20Carving%20on%20Dog.ipynb" download="Seam%20Carving%20on%20Dog.ipynb"><?= _DL_SOLUTION ?></a></imp></li>
                </ul>
            </div>
            
		</div>
        </div>
    <section id="down" name="down"></section>
    
    <script type="text/javascript" src="../static/js/jquery.min.js"></script>
    <script type="text/javascript" src="../static/js/smoothscroll.js"></script> 
    <script type="text/javascript" src="../static/js/bootstrap.min.js"></script>
    <script type="text/javascript">
       $(function(){
            $(".lang_selector").click(function(){
                event.preventDefault();
                let selected_lang = $(this).attr("id");
                $.post(
                    "../webservices/select_lang.php", 
                    {"language": selected_lang}, 
                    function(e) {
                        window.location.reload(true);
                    }
                );
            });
        });
    </script>
</body>
</html>