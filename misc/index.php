<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Nicolas MINE">
    <link rel="shortcut icon" href="../static/ico/favicon.png">

    <title>Nicolas MINE - Misc</title>
    
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
                            <li class="menu-item"><a class="smoothScroll" href="#website" title="<?= _SECTION_AT ?>"><i class="fa fa-at"></i></a></li>
                            <li class="menu-item"><a class="smoothScroll" href="#twitter" title="<?= _SECTION_TWEET ?>"><i class="fa fa-twitter"></i></a></li>
                            <li class="menu-item"><a class="smoothScroll" href="#github" title="<?= _SECTION_GITHUB ?>"><i class="fa fa-github-alt"></i></a></li>
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
					<h5><?= mb_strtoupper(_TITLE_AT) ?></h5>
				</div>
				<div class="col-lg-6">
					<p>
						<?= _HEADER_MISC ?>
					</p>
				</div>
			</div>
		</div>
	</div>
    
    
    <section id="up" name="up"></section>
    
	<div class="container desc animated wow fadeInDown">
	    <section id="website" name="website"></section>
		<div class="row">
            <div class="col-sm-2 col-sm-offset-1">
                <h5><?= mb_strtoupper(_TITLE_AT) ?></h5>
            </div>
            <div class="col-sm-6">
                <p>
                    <t><a href="https://techcrunch.com/" target="_blank">Tech Crunch</a></t>
                    <br>
                    <t><a href="https://blogs.nvidia.com/" target="_blank">NVidia Blog</a></t>
                    <br>
                    <t><a href="http://ai-magazine.com/#/" target="_blank">AI Magazine</a></t>
                    <br>
                    <t><a href="https://www.meetup.com/fr-FR/LuxRgroup/" target="_blank">Meetup - Data Science Lux</a></t>
                    <br>
                    <t><a href="https://ai.google/education#?modal_active=none" target="_blank">Learn with Google AI</a></t>
                    <br>
                    <t><a href="https://booking.ai/" target="_blank">Booking.datasciences</a></t>
                </p>
            </div>
		</div>
		
		<hr>
	
	    <section id="twitter" name="twitter"></section>
		<div class="row">
            <div class="col-sm-2 col-sm-offset-1">
                <h5><?= mb_strtoupper(_TITLE_TWEET) ?></h5>
            </div>
            
            <div class="col-sm-6">
                <p>
                    <t><a href="https://twitter.com/search?q=%23MachineLearning" target="_blank">#MachineLearning</a></t>
                    <br>
                    <t><a href="https://twitter.com/search?q=%23DataScience" target="_blank">#DataScience</a></t>
                    <br>
                    <t><a href="https://twitter.com/search?q=%23AI" target="_blank">#AI</a></t>
                    <br>
                    <t><a href="https://twitter.com/search?q=%23reinforcementlearning" target="_blank">#reinforcementlearning</a></t>
                    <br>
                    <t><a href="https://twitter.com/ml_review" target="_blank">@ml_review</a></t>
                    <br>
                    <t><a href="https://twitter.com/OriolVinyalsML" target="_blank">@OriolVinyalsML</a></t>
                    <br>
                    <t><a href="https://twitter.com/NvidiaAI" target="_blank">@NvidiaAI</a></t>
                    <br>
                    <t><a href="https://twitter.com/techreview" target="_blank">@techreview</a></t>
                    <br>
                    <t><a href="https://twitter.com/Sciences_Avenir" target="_blank">@Sciences_Avenir</a></t>
                    <br>
                    <t><a href="https://twitter.com/sciencemagazine" target="_blank">@sciencemagazine</a></t>
                    <br>
                    <t><a href="https://twitter.com/TechCrunch" target="_blank">@TechCrunch</a></t>
                    <br>
                    <t><a href="https://twitter.com/timoreilly" target="_blank">@timoreilly</a></t>
                    <br>
                    <t><a href="https://twitter.com/OpenAI" target="_blank">@OpenAI</a></t>
                    <br>
                    <t><a href="https://twitter.com/sirajraval" target="_blank">@sirajraval</a></t>
                    <br>
                    <t><a href="https://twitter.com/TensorFlow" target="_blank">@TensorFlow</a></t>
                    <br>
                    <t><a href="https://twitter.com/CodinGame" target="_blank">@CodinGame</a></t>
                    <br>
                    <t><a href="https://twitter.com/nvidia" target="_blank">@nvidia</a></t>             
                    <br>
                    <t><a href="https://twitter.com/TEDTalks" target="_blank">@TEDTalks</a></t>    
                    <br>
                    <t><a href="https://twitter.com/aureliengeron" target="_blank">@aureliengeron</a></t>    
                </p>
            </div>
		</div>
		
		<hr>
		       
        <section id="github" name="github"></section>
		<div class="row">
            <div class="col-sm-2 col-sm-offset-1">
                <h5><?= mb_strtoupper(_TITLE_GITHUB) ?></h5>
            </div>
            
            <div class="col-sm-6">
                <p>
                    <t><a href="https://github.com/kingfengji/gcForest" target="_blank">Implementation of gcForest (also name Deep Forest)</a></t><br>
                    <t><a href="https://github.com/alberduris/Reinforcement_Learning_AI_Video_Games" target="_blank">Exercices from Siraj's Raval Challenges</a></t><br>
                    <t><a href="https://github.com/lmcinnes/umap" target="_blank">Implementation of UMAP (Uniform Manifold Approximation and Projection)</a></t><br>
                    <t><a href="https://github.com/reinforceio/tensorforce" target="_blank">Tensorforce (Librairy for Reinforcement Learning)</a></t><br>
                </p>
            </div>
        </div>
		
	</div>

    <script type="text/javascript" src="../static/js/jquery.min.js"></script>
    <script type="text/javascript" src="../static/js/smoothscroll.js" defer></script> 
    <script type="text/javascript" src="../static/js/bootstrap.min.js"></script>
    <script type="text/javascript" defer>
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
    <script async src="//platform.twitter.com/widgets.js" charset="utf-8" defer></script>   
</body>
</html>