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