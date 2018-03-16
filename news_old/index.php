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
					<h5><?= mb_strtoupper(_TITLE_NEWS) ?></h5>
				</div>
				<div class="col-lg-6">
					<p>
						<?= _HEADER_NEWS ?>
					</p>
				</div>
			</div>
		</div>
	</div>
    
    
    <section id="up" name="up"></section>
 
    <div class="container desc animated wow fadeInDown">
		<div class="row">
            <div class="col-lg-8 col-lg-offset-2"> 
                <p><t><?= _DIVERS21_TITLE ?></t><br/>
                    Source : <?= _DIVERS21_SOURCE ?><br>
                    Date : <?= _DIVERS21_DATE ?>
                </p>
                <p><more><?= _DIVERS21_CONTENT ?></more></p>
            </div>
            <div class="col-lg-2 pro">
                <ul>
                    <li class="link_tips"><imp><a class="white" href="https://iamtrask.github.io/2017/03/21/synthetic-gradients/" target="_blank"><?= _SHOW_DIVERS ?></a></imp></li>
                    <li class="link_tips"><imp><a class="white" href="https://www.youtube.com/watch?v=qirjknNY1zo" target="_blank"><?= _SHOW_DIVERS ?></a></imp></li>
                </ul>
            </div>
		</div>
    </div>  
   
    <div class="container desc animated wow fadeInDown">
		<div class="row">
            <div class="col-lg-8 col-lg-offset-2"> 
                <p><t><?= _DIVERS20_TITLE ?></t><br/>
                    Source : <?= _DIVERS20_SOURCE ?><br>
                    Date : <?= _DIVERS20_DATE ?>
                </p>
                <p><more><?= _DIVERS20_CONTENT ?></more></p>
            </div>
            <div class="col-lg-2 pro">
                <ul>
                    <li class="link_tips"><imp><a class="white" href="https://spectrum.ieee.org/tech-talk/robotics/artificial-intelligence/artificial-intelligence-beats-captcha" target="_blank"><?= _SHOW_DIVERS ?></a></imp></li>
                </ul>
            </div>
		</div>
    </div>  
    
    <div class="container desc animated wow fadeInDown">
		<div class="row">
            <div class="col-lg-8 col-lg-offset-2"> 
                <p><t><?= _DIVERS19_TITLE ?></t><br/>
                    Source : <?= _DIVERS19_SOURCE ?><br>
                    Date : <?= _DIVERS19_DATE ?>
                </p>
                <p><more><?= _DIVERS19_CONTENT ?></more></p>
            </div>
            <div class="col-lg-2 pro">
                <ul>
                    <li class="link_tips"><imp><a class="white" href="https://techcrunch.com/2017/10/26/ebay-launches-visual-search-tools-that-let-you-shop-using-photos-from-your-phone-or-web/" target="_blank"><?= _SHOW_DIVERS ?></a></imp></li>
                </ul>
            </div>
		</div>
    </div>  
    
    <div class="container desc animated wow fadeInDown">
		<div class="row">
            <div class="col-lg-8 col-lg-offset-2"> 
                <p><t><?= _DIVERS18_TITLE ?></t><br/>
                    Source : <?= _DIVERS18_SOURCE ?><br>
                    Date : <?= _DIVERS18_DATE ?>
                </p>
                <p><more><?= _DIVERS18_CONTENT ?></more></p>
            </div>
            <div class="col-lg-2 pro">
                <ul>
                    <li class="link_tips"><imp><a class="white" href="https://www.intelnervana.com/reinforcement-learning-coach-intel/" target="_blank"><?= _SHOW_DIVERS ?></a></imp></li>
                </ul>
            </div>
		</div>
    </div>  
   
    <div class="container desc animated wow fadeInDown">
		<div class="row">
            <div class="col-lg-8 col-lg-offset-2"> 
                <p><t><?= _DIVERS17_TITLE ?></t><br/>
                    Source : <?= _DIVERS17_SOURCE ?><br>
                    Date : <?= _DIVERS17_DATE ?>
                </p>
                <p><more><?= _DIVERS17_CONTENT ?></more></p>
            </div>
            <div class="col-lg-2 pro">
                <ul>
                    <li class="link_tips"><imp><a class="white" href="https://futurism.com/facebook-and-intel-are-joining-forces-for-artificial-intelligence/" target="_blank"><?= _SHOW_DIVERS ?></a></imp></li>
                </ul>
            </div>
		</div>
    </div>  
    
    <div class="container desc animated wow fadeInDown">
		<div class="row">
            <div class="col-lg-8 col-lg-offset-2"> 
                <p><t><?= _DIVERS16_TITLE ?></t><br/>
                    Source : <?= _DIVERS16_SOURCE ?><br>
                    Date : <?= _DIVERS16_DATE ?>
                </p>
                <p><more><?= _DIVERS16_CONTENT ?></more></p>
            </div>
            <div class="col-lg-2 pro">
                <ul>
                    <li class="link_tips"><imp><a class="white" href="http://www.zdnet.fr/actualites/a-quoi-peut-bien-servir-l-intelligence-artificielle-dans-votre-entreprise-39858564.htm?utm_content=bufferbacde&utm_medium=social&utm_source=twitter.com&utm_campaign=buffer#xtor=123456" target="_blank"><?= _SHOW_DIVERS ?></a></imp></li>
                </ul>
            </div>
		</div>
    </div>  
    
    <div class="container desc animated wow fadeInDown">
		<div class="row">
            <div class="col-lg-8 col-lg-offset-2"> 
                <p><t><?= _DIVERS15_TITLE ?></t><br/>
                    Source : <?= _DIVERS15_SOURCE ?><br>
                    Date : <?= _DIVERS15_DATE ?>
                </p>
                <p><more><?= _DIVERS15_CONTENT ?></more></p>
            </div>
            <div class="col-lg-2 pro">
                <ul>
                    <li class="link_tips"><imp><a class="white" href="http://physicsforests.com/" target="_blank"><?= _SHOW_DIVERS ?></a></imp></li>
                </ul>
            </div>
		</div>
    </div>  
    
    <div class="container desc animated wow fadeInDown">
		<div class="row">
            <div class="col-lg-8 col-lg-offset-2"> 
                <p><t><?= _DIVERS14_TITLE ?></t><br/>
                    Source : <?= _DIVERS14_SOURCE ?><br>
                    Date : <?= _DIVERS14_DATE ?>
                </p>
                <p><more><?= _DIVERS14_CONTENT ?></more></p>
            </div>
            <div class="col-lg-2 pro">
                <ul>
                    <li class="link_tips"><imp><a class="white" href="https://thenextweb.com/artificial-intelligence/2017/10/20/googles-deepmind-achieves-machine-learning-breakthroughs-at-a-terrifying-pace/" target="_blank"><?= _SHOW_DIVERS ?></a></imp></li>
                </ul>
                <ul>
                    <li class="link_tips"><imp><a class="white" href="https://deepmind.com/blog/alphago-zero-learning-scratch/" target="_blank"><?= _SHOW_DIVERS ?></a></imp></li>
                </ul>
            </div>
		</div>
    </div>  
    
    <div class="container desc animated wow fadeInDown">
		<div class="row">
            <div class="col-lg-8 col-lg-offset-2"> 
                <p><t><?= _DIVERS13_TITLE ?></t><br/>
                    Source : <?= _DIVERS13_SOURCE ?><br>
                    Date : <?= _DIVERS13_DATE ?>
                </p>
                <p><more><?= _DIVERS13_CONTENT ?></more></p>
            </div>
            <div class="col-lg-2 pro">
                <ul>
                    <li class="link_tips"><imp><a class="white" href="https://blog.openai.com/learning-to-cooperate-compete-and-communicate/" target="_blank"><?= _SHOW_DIVERS ?></a></imp></li>
                </ul>
            </div>
		</div>
    </div>  
    
    <div class="container desc animated wow fadeInDown">
		<div class="row">
            <div class="col-lg-8 col-lg-offset-2"> 
                <p><t><?= _DIVERS12_TITLE ?></t><br/>
                    Source : <?= _DIVERS12_SOURCE ?><br>
                    Date : <?= _DIVERS12_DATE ?>
                </p>
                <p><more><?= _DIVERS12_CONTENT ?></more></p>
            </div>
            <div class="col-lg-2 pro">
                <ul>
                    <li class="link_tips"><imp><a class="white" href="http://mashable.com/2017/10/16/wi-fi-wpa2-cracked/#M4QKZan_Tiq6" target="_blank"><?= _SHOW_DIVERS ?></a></imp></li>
                    <li class="link_tips"><imp><a class="white" href="https://www.youtube.com/watch?v=mYtvjijATa4" target="_blank"><?= _SHOW_DIVERS ?></a></imp></li>
                </ul>
            </div>
		</div>
    </div>  
   
    <div class="container desc animated wow fadeInDown">
		<div class="row">
            <div class="col-lg-8 col-lg-offset-2"> 
                <p><t><?= _DIVERS11_TITLE ?></t><br/>
                    Source : <?= _DIVERS11_SOURCE ?><br>
                    Date : <?= _DIVERS11_DATE ?>
                </p>
                <p><more><?= _DIVERS11_CONTENT ?></more></p>
            </div>
            <div class="col-lg-2 pro">
                <ul>
                    <li class="link_tips"><imp><a class="white" href="https://blog.openai.com/competitive-self-play/" target="_blank"><?= _SHOW_DIVERS ?></a></imp></li>
                </ul>
            </div>
		</div>
    </div>   
   
    <div class="container desc animated wow fadeInDown">
		<div class="row">
            <div class="col-lg-8 col-lg-offset-2"> 
                <p><t><?= _DIVERS10_TITLE ?></t><br/>
                    Source : <?= _DIVERS10_SOURCE ?><br>
                    Date : <?= _DIVERS10_DATE ?>
                </p>
                <p><more><?= _DIVERS10_CONTENT ?></more></p>
            </div>
            <div class="col-lg-2 pro">
                <ul>
                    <li class="link_tips"><imp><a class="white" href="https://twitter.com/TensorFlow/status/918239386323554309" target="_blank"><?= _SHOW_DIVERS ?></a></imp></li>
                </ul>
            </div>
		</div>
    </div>   
   
    <div class="container desc animated wow fadeInDown">
		<div class="row">
            <div class="col-lg-8 col-lg-offset-2"> 
                <p><t><?= _DIVERS9_TITLE ?></t><br/>
                    Source : <?= _DIVERS9_SOURCE ?><br>
                    Date : <?= _DIVERS9_DATE ?>
                </p>
                <p><more><?= _DIVERS9_CONTENT ?></more></p>
            </div>
            <div class="col-lg-2 pro">
                <ul>
                    <li class="link_tips"><imp><a class="white" href="https://research.googleblog.com/2017/10/tensorflow-lattice-flexibility.html" target="_blank"><?= _SHOW_DIVERS ?></a></imp></li>
                </ul>
            </div>
		</div>
    </div>  
   
    <div class="container desc animated wow fadeInDown">
		<div class="row">
            <div class="col-lg-8 col-lg-offset-2"> 
                <p><t><?= _DIVERS8_TITLE ?></t><br/>
                    Source : <?= _DIVERS8_SOURCE ?><br>
                    Date : <?= _DIVERS8_DATE ?>
                </p>
                <p><more><?= _DIVERS8_CONTENT ?></more></p>
            </div>
            <div class="col-lg-2 pro">
                <ul>
                    <li class="link_tips"><imp><a class="white" href="https://theneuralperspective.com/2016/12/16/quasi-recurrent-neural-networks/" target="_blank"><?= _SHOW_DIVERS ?></a></imp></li>
                    <li class="link_tips"><imp><a class="white" href="https://arxiv.org/pdf/1611.01576.pdf" target="_blank"><?= _SHOW_DIVERS ?></a></imp></li>
                    <li class="link_tips"><imp><a class="white" href="https://github.com/salesforce/pytorch-qrnn" target="_blank"><?= _SHOW_DIVERS ?></a></imp></li>
                </ul>
            </div>
		</div>
    </div>
   
    <div class="container desc animated wow fadeInDown">
		<div class="row">
            <div class="col-lg-8 col-lg-offset-2"> 
                <p><t><?= _DIVERS7_TITLE ?></t><br/>
                    Source : <?= _DIVERS7_SOURCE ?><br>
                    Date : <?= _DIVERS7_DATE ?>
                </p>
                <p><more><?= _DIVERS7_CONTENT ?></more></p>
            </div>
            <div class="col-lg-2 pro">
                <ul>
                    <li class="link_tips">
                    <imp><a class="white" href="https://developer.nvidia.com/tensorrt" target="_blank"><?= _SHOW_DIVERS ?></a></imp>
                    </li>
                </ul>
            </div>
		</div>
    </div>
    
    <div class="container desc animated wow fadeInDown">
		<div class="row">
            <div class="col-lg-8 col-lg-offset-2"> 
                <p><t><?= _DIVERS6_TITLE ?></t><br/>
                    Source : <?= _DIVERS6_SOURCE ?><br>
                    Date : <?= _DIVERS6_DATE ?>
                </p>
                <p><more><?= _DIVERS6_CONTENT ?></more></p>
            </div>
            <div class="col-lg-2 pro">
                <ul>
                    <li class="link_tips"><imp><a class="white" href="https://news.developer.nvidia.com/turn-your-selfies-into-3d-models/" target="_blank"><?= _SHOW_DIVERS ?></a></imp></li>
                </ul>
            </div>
		</div>
    </div>
    
    <div class="container desc animated wow fadeInDown">
		<div class="row">
            <div class="col-lg-8 col-lg-offset-2"> 
                <p><t><?= _DIVERS5_TITLE ?></t><br/>
                    Source : <?= _DIVERS5_SOURCE ?><br>
                    Date : <?= _DIVERS5_DATE ?>
                </p>
                <p><more><?= _DIVERS5_CONTENT ?></more></p>
            </div>
            <div class="col-lg-2 pro">
                <ul>
                    <li class="link_tips"><imp><a class="white" href="https://blogs.bing.com/search-quality-insights/2017-09/Object-Detection-in-Visual-Search" target="_blank"><?= _SHOW_DIVERS ?></a></imp></li>
                </ul>
            </div>
		</div>
    </div>
    
    <div class="container desc animated wow fadeInDown">
		<div class="row">
            <div class="col-lg-8 col-lg-offset-2"> 
                <p><t><?= _DIVERS4_TITLE ?></t><br/>
                    Source : <?= _DIVERS4_SOURCE ?><br>
                    Date : <?= _DIVERS4_DATE ?>
                </p>
                <p><more><?= _DIVERS4_CONTENT ?></more></p>
            </div>
            <div class="col-lg-2 pro">
                <ul>
                    <li class="link_tips"><imp><a class="white" href="https://www.forbes.com/sites/louiscolumbus/2017/05/13/ibm-predicts-demand-for-data-scientists-will-soar-28-by-2020/#7ea6d31d7e3b" target="_blank"><?= _SHOW_DIVERS ?></a></imp></li>
                </ul>
            </div>
		</div>
    </div>
    
    
    <div class="container desc animated wow fadeInDown">
		<div class="row">
            <div class="col-lg-8 col-lg-offset-2"> 
                <p><t><?= _DIVERS3_TITLE ?></t><br/>
                    Source : <?= _DIVERS3_SOURCE ?><br>
                    Date : <?= _DIVERS3_DATE ?>
                </p>
                <p><more><?= _DIVERS3_CONTENT ?></more></p>
            </div>
            <div class="col-lg-2 pro">
                <ul>
                    <li class="link_tips"><imp><a class="white" href="https://blog.openai.com/more-on-dota-2/" target="_blank"><?= _SHOW_DIVERS ?></a></imp></li>
                </ul>
            </div>
		</div>
    </div>
    
    <div class="container desc animated wow fadeInDown">
		<div class="row">
            <div class="col-lg-8 col-lg-offset-2"> 
                <p><t><?= _DIVERS2_TITLE ?></t><br/>
                    Source : <?= _DIVERS2_SOURCE ?><br>
                    Date : <?= _DIVERS2_DATE ?>
                </p>
                <p><more><?= _DIVERS2_CONTENT ?></more></p>
            </div>
            <div class="col-lg-2 pro">
                <ul>
                    <li class="link_tips"><imp><a class="white" href="https://stackoverflow.blog/2017/06/15/developers-use-spaces-make-money-use-tabs/" target="_blank"><?= _SHOW_DIVERS ?></a></imp></li>
                </ul>
            </div>
		</div>
    </div>
    
    <div class="container desc animated wow fadeInDown">
		<div class="row">
            <div class="col-lg-8 col-lg-offset-2"> 
                <p><t><?= _DIVERS1_TITLE ?></t><br/>
                    Source : <?= _DIVERS1_SOURCE ?><br>
                    Date : <?= _DIVERS1_DATE ?>
                </p>
                <p><more><?= _DIVERS1_CONTENT ?></more></p>
            </div>
            <div class="col-lg-2 pro">
                <ul>
                    <li class="link_tips"><imp><a class="white" href="http://spectrum.ieee.org/computing/software/the-2017-top-programming-languages" target="_blank"><?= _SHOW_DIVERS ?></a></imp></li>
                </ul>
            </div>
		</div>
    </div>
    
    <section id="down" name="down"></section>

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
</body>
</html>