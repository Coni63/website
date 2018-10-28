<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Nicolas MINE">
    <link rel="shortcut icon" href="../static/ico/favicon.png">

    <title>Nicolas MINE - Learn Python</title>
    
    <link rel="stylesheet" type="text/css" href="../static/css/animate.css">
    <link rel="stylesheet" type="text/css" href="../static/css/bootstrap.min.css" >   
    <link rel="stylesheet" type="text/css" href="../static/css/style.<?=filemtime('../static/css/style.css');?>.css" >
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
                            <li class="menu-item"><a class="smoothScroll" href="#book" title="<?= _SECTION_BOOK ?>"><i class="fa fa-book"></i></a></li>
                            <li class="menu-item"><a class="smoothScroll" href="#youtube" title="<?= _SECTION_YOUTUBE ?>"><i class="fa fa-youtube"></i></a></li>
                            <li class="menu-item"><a class="smoothScroll" href="#site" title="<?= _SECTION_SITE ?>"><i class="fa fa-html5"></i></a></li>
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
		<a href="../index.php" title="Acceuil"><i class="fa fa-home fa-2x white"></i></a>
	</div>
	
	<div id="intro" class="shifted">
		<div class="container animated wow fadeInDown">
			<div class="row">
				<div class="col-lg-2 col-lg-offset-1">
					<h5><?= _TITLE_LP ?></h5>
				</div>
				<div class="col-lg-6">
					<p>
						<?= _HEADER_LP ?>
					</p>
				</div>
			</div>
		</div>
	</div>
   
    <!--BOOK LIST -->
    <section id="book" name="book"></section>
	<div class="container desc animated wow fadeInDown" id="portfolio">
		<div class="row">
            <div class="col-lg-2 col-lg-offset-1">
                <h5><?= mb_strtoupper(_SECTION_BOOK) ?></h5>
            </div>
            
            <div class="col-lg-6">
                <p><img class="img-responsive" src="../static/img/9782340010055.jpg" alt="" width="420"></p>
            </div>
            <div class="col-lg-3">
                <p><img src="../static/img/flags_fr.png"/>&nbsp;<t>Programmation efficace&nbsp;<a href="https://www.amazon.fr/Programmation-Efficace-Algorithmes-Compris-Python/dp/2340010055/" target="_blank"><i class="fa fa-amazon" aria-hidden="true"></i></a><br/></t><br/>
						<i>C.Dürr & J-J. Vie</i><br/>
					</p>
                <p>
                    <more>
                        <?= _BOOK1_DESC ?>
                        <br/>
                        <sm>
                            <i class="fa fa-tag"></i>Python 3
                            <i class="fa fa-tag"></i><?= _ALGO ?>
                        </sm>
                    </more>
                </p>
            </div>

            <div class="col-lg-6 col-lg-offset-3">
                <p><img class="img-responsive" src="../static/img/Learning-Scipy-for-Numerical-and-SDL725926145-1-15db7.jpg" alt="" width="420"></p>
            </div>
            <div class="col-lg-3">
                <p><img src="../static/img/flags_us.png"/>&nbsp;<t>Learning SciPy for Numerical and Scientific Computing&nbsp;<a href="https://www.amazon.fr/Learning-Numerical-Scientific-Computing-2015-02-26/dp/B01K2W1Y82/" target="_blank"><i class="fa fa-amazon" aria-hidden="true"></i></a><br/></t><br/>
						<i>S.J. Rojas G. & E.A. Christensen & F.J. Blanco-Silva</i><br/>
					</p>
                <p>
                    <more>
                        <?= _BOOK2_DESC ?>
                        <br/>
                        <sm>
                            <i class="fa fa-tag"></i>Python 3
                            <i class="fa fa-tag"></i><?= _LINALG ?>
                            <i class="fa fa-tag"></i><?= _NUM_AN ?>
                            <i class="fa fa-tag"></i>Machine Learning
                            <i class="fa fa-tag"></i>Scipy
                            <i class="fa fa-tag"></i>Numpy
                        </sm>
                    </more>
                </p>
            </div>


            <div class="col-lg-6 col-lg-offset-3">
                <p><img class="img-responsive" src="../static/img/images.jpg" alt="" width="420"></p>
            </div>
            <div class="col-lg-3">
                <p><img src="../static/img/flags_us.png"/>&nbsp;<t>Hands-On Machine Learning with Scikit-Learn and TensorFlow&nbsp;<a href="https://www.amazon.fr/Hands-Machine-Learning-Scikit-Learn-TensorFlow/dp/1491962291/" target="_blank"><i class="fa fa-amazon" aria-hidden="true"></i></a><br/></t><br/>
						<i>A. Géron</i><br/>
				</p>
                <p>
                    <more>
                        <?= _BOOK3_DESC ?>
                        <br/>
                        <sm>
                            <i class="fa fa-tag"></i>Python 3
                            <i class="fa fa-tag"></i>Machine Learning
                            <i class="fa fa-tag"></i>Neural Network
                            <i class="fa fa-tag"></i>Tensorflow
                            <i class="fa fa-tag"></i>Panda
                            <i class="fa fa-tag"></i>Numpy
                        </sm>
                    </more>
                </p>
            </div>
            
            <div class="col-lg-6 col-lg-offset-3">
                <p><img class="img-responsive" src="../static/img/Learning_tensorflow.jpg" alt="" width="420"></p>
            </div>
            <div class="col-lg-3">
                <p><img src="../static/img/flags_us.png"/>&nbsp;<t>Learning TensorFlow&nbsp;<a href="https://www.amazon.fr/Learning-Tensorflow-Guide-Building-Systems/dp/1491978511/" target="_blank"><i class="fa fa-amazon" aria-hidden="true"></i></a><br/></t><br/>
						<i>Tom Hope</i><br/>
				</p>
                <p>
                    <more>
                        <?= _BOOK4_DESC ?>
                        <br/>
                        <sm>
                            <i class="fa fa-tag"></i>Python 3
                            <i class="fa fa-tag"></i>Machine Learning
                            <i class="fa fa-tag"></i>Neural Network
                            <i class="fa fa-tag"></i>Tensorflow
                        </sm>
                    </more>
                </p>
            </div>
            
            <div class="col-lg-6 col-lg-offset-3">
                <p><img class="img-responsive" src="../static/img/51ROfnj1yDL.jpg" alt="" width="420"></p>
            </div>
            <div class="col-lg-3">
                <p><img src="../static/img/flags_us.png"/>&nbsp;<t>Artificial Intelligence: A Modern Approach&nbsp;<a href="https://www.amazon.fr/Artificial-Intelligence-Modern-Approach-Global-ebook/dp/B01HEY2P66/ref=dp_kinw_strp_1" target="_blank"><i class="fa fa-amazon" aria-hidden="true"></i></a><br/></t><br/>
						<i>Stuart Russell & Peter Norvig</i><br/>
				</p>
                <p>
                    <more>
                        <?= _BOOK5_DESC ?>
                        <br/>
                        <sm>
                            <i class="fa fa-tag"></i><?= _ALGO ?>
                            <i class="fa fa-tag"></i><?= _AI ?>
                            <i class="fa fa-tag"></i><?= _RL ?>
                        </sm>
                    </more>
                </p>
            </div>
            
            <div class="col-lg-6 col-lg-offset-3">
                <p><img class="img-responsive" src="../static/img/f2c2b2c5f64feb1ecee02f958ac9f3a9.jpg" alt="" width="420"></p>
            </div>
            <div class="col-lg-3">
                <p><img src="../static/img/flags_us.png"/>&nbsp;<t>Reinforcement Learning&nbsp;<a href="https://www.amazon.fr/Reinforcement-Learning-Introduction-Richard-Sutton-ebook/dp/B008H5Q8VA/ref=dp_kinw_strp_1" target="_blank"><i class="fa fa-amazon" aria-hidden="true"></i></a><br/></t><br/>
						<i>Richard S.Sutton & Andrew G. Barto</i><br/>
				</p>
                <p>
                    <more>
                        <?= _BOOK6_DESC ?>
                        <br/>
                        <sm>
                            <i class="fa fa-tag"></i><?= _ALGO ?>
                            <i class="fa fa-tag"></i><?= _AI ?>
                            <i class="fa fa-tag"></i><?= _RL ?>
                        </sm>
                    </more>
                </p>
            </div>
            
            <div class="col-lg-6 col-lg-offset-3">
                <p><img class="img-responsive" src="../static/img/deep_learning.jpg" alt="" width="420"></p>
            </div>
            <div class="col-lg-3">
                <p><img src="../static/img/flags_us.png"/>&nbsp;<t>Deep Learning&nbsp;<a href="https://www.amazon.fr/Deep-Learning-Ian-Goodfellow-ebook/dp/B01MRVFGX4" target="_blank"><i class="fa fa-amazon" aria-hidden="true"></i></a><br/></t><br/>
						<i>I. Goodfellow, Y. Bengio & A. Courville</i><br/>
				</p>
                <p>
                    <more>
                        <?= _BOOK7_DESC ?>
                        <br/>
                        <sm>
                            <i class="fa fa-tag"></i><?= _ALGO ?>
                            <i class="fa fa-tag"></i><?= _AI ?>
                            <i class="fa fa-tag"></i>Neural Networks
                        </sm>
                    </more>
                </p>
            </div>
            
		</div>
		<br>
		<hr>
	</div>
	
	<!--PORTFOLIO DESCRIPTION -->
	<section id="youtube" name="youtube"></section>
	<div class="container desc animated wow fadeInDown" id="portfolio">
		<div class="row">
            <div class="col-lg-2 col-lg-offset-1">
                <h5><?= mb_strtoupper(_SECTION_YOUTUBE) ?></h5>
            </div>
            
            <div class="col-lg-6">
                <p>
                    <iframe width="420" height="315" src="https://www.youtube.com/embed/aKYlikFAV4k"></iframe>
                </p>
            </div>
            <div class="col-lg-3">
                <p><img src="../static/img/flags_us.png"/>&nbsp;<a href="https://www.youtube.com/channel/UCvjgXvBlbQiydffZU7m1_aw">The Coding Train</a></p>
                <p>
                    <more>
                        <?= _YT1_DESC ?>
                        <br/><br/>
                        <sm>
                            <i class="fa fa-tag"></i>Java
                            <i class="fa fa-tag"></i>Javascript
                            <i class="fa fa-tag"></i>P5/Processing
                        </sm>
                    </more>
                </p>
            </div>

            <div class="col-lg-6 col-lg-offset-3">
                <p>
                    <iframe width="420" height="315" src="https://www.youtube.com/embed/q7Bo_J8x_dw"></iframe>
                </p>
            </div>
            <div class="col-lg-3">
                <p><img src="../static/img/flags_us.png"/>&nbsp;<a href="https://www.youtube.com/user/sentdex/featured">Sentdex</a></p>
                <p>
                    <more>
                        <?= _YT2_DESC ?>
                        <br/><br/>
                        <sm>
                            <i class="fa fa-tag"></i>Python
                            <i class="fa fa-tag"></i>Django
                            <i class="fa fa-tag"></i>Machine Learning
                        </sm>
                    </more>
                </p>
            </div>

            <div class="col-lg-6 col-lg-offset-3">
                <p>
                    <iframe width="420" height="315" src="https://www.youtube.com/embed/vOppzHpvTiQ"></iframe>
                </p>
            </div>
            
            <div class="col-lg-3">
                <p><img src="../static/img/flags_us.png"/>&nbsp;<a href="https://www.youtube.com/channel/UCWN3xxRkmTPmbKwht9FuE5A">Siraj Raval</a></p>
                <p>
                    <more>
                        <?= _YT3_DESC ?>
                        <br/><br/>
                        <sm>
                            <i class="fa fa-tag"></i>Python
                            <i class="fa fa-tag"></i>Machine Learning
                            <i class="fa fa-tag"></i>Tensorflow
                        </sm>
                    </more>
                </p>
            </div>
            
            <div class="col-lg-6 col-lg-offset-3">
                <p>
                    <iframe width="420" height="315" src="https://www.youtube.com/embed/b99UVkWzYTQ"></iframe>
                </p>
            </div>
            
            <div class="col-lg-3">
                <p><img src="../static/img/flags_us.png"/>&nbsp;<a href="https://www.youtube.com/channel/UC9OeZkIwhzfv-_Cb7fCikLQ">DeepLearning.TV</a></p>
                <p>
                    <more>
                        <?= _YT4_DESC ?>
                        <br/>
                        <br/>
                        <sm>
                            <i class="fa fa-tag"></i>Machine Learning
                            <i class="fa fa-tag"></i><?= _VULGARISATION ?>
                        </sm>
                    </more>
                </p>
            </div>
            
            <div class="col-lg-6 col-lg-offset-3">
                <p>
                    <iframe width="420" height="315" src="https://www.youtube.com/embed/9qfxLo1rt1Q"></iframe>
                </p>
            </div>
            
            <div class="col-lg-3">
                <p><img src="../static/img/flags_us.png"/>&nbsp;<a href="https://www.youtube.com/channel/UCkw4JCwteGrDHIsyIIKo4tQ">edureka!</a></p>
                <p>
                    <more>
                        <?= _YT5_DESC ?>
                    </more>
                    <br/>
                    <br/>
                    <sm>
                        <i class="fa fa-tag"></i><?= _MULTI_SUB ?>
                    </sm>
                </p>
            </div>
            
            <div class="col-lg-6 col-lg-offset-3">
                <p>
                    <iframe width="420" height="315" src="https://www.youtube.com/embed/vh_gddKS5OU"></iframe>
                </p>
            </div>
            
            <div class="col-lg-3">
                <p><img src="../static/img/flags_us.png"/>&nbsp;<a href="https://www.youtube.com/channel/UCtxCXg-UvSnTKPOzLH4wJaQ">Coding Tech</a></p>
                <p>
                    <more>
                        <?= _YT6_DESC ?>
                    </more>
                    <br/>
                    <br/>
                    <sm>
                        <i class="fa fa-tag"></i><?= _MULTI_SUB ?>
                        <i class="fa fa-tag"></i><?= _VULGARISATION ?>
                    </sm>
                </p>
            </div>
            
            <div class="col-lg-6 col-lg-offset-3">
                <p>
                    <iframe width="420" height="315" src="https://www.youtube.com/embed/2zWSr-3gkWY"></iframe>
                </p>
            </div>
            
            <div class="col-lg-3">
                <p><img src="../static/img/flags_us.png"/>&nbsp;<a href="https://www.youtube.com/channel/UC_x5XG1OV2P6uZZ5FSM9Ttw">Google Developers</a></p>
                <p>
                    <more>
                        <?= _YT7_DESC ?>
                    </more>
                    <br/>
                    <br/>
                    <sm>
                        <i class="fa fa-tag"></i><?= _MULTI_SUB ?>
                        <i class="fa fa-tag"></i><?= _TALK ?>
                    </sm>
                </p>
            </div>
            
            <div class="col-lg-6 col-lg-offset-3">
                <p>
                    <iframe width="420" height="315" src="https://www.youtube.com/embed/0Ey02HT_1Ho"></iframe>
                </p>
            </div>
            
            <div class="col-lg-3">
                <p><img src="../static/img/flags_us.png"/>&nbsp;<a href="https://www.youtube.com/channel/UCNIkB2IeJ-6AmZv7bQ1oBYg">Arxiv Insights</a></p>
                <p>
                    <more>
                        <?= _YT8_DESC ?>
                    </more>
                    <br/>
                    <br/>
                    <sm>
                        <i class="fa fa-tag"></i><?= _AI ?>
                    </sm>
                </p>
            </div>
            
            <div class="col-lg-6 col-lg-offset-3">
                <p>
                    <iframe width="420" height="315" src="https://www.youtube.com/embed/Bv3yat484aQ"></iframe>
                </p>
            </div>
            
            <div class="col-lg-3">
                <p><img src="../static/img/flags_us.png"/>&nbsp;<a href="https://www.youtube.com/user/keeroyz/featured">Two Minute Papers</a></p>
                <p>
                    <more>
                        <?= _YT9_DESC ?>
                    </more>
                    <br/>
                    <br/>
                    <sm>
                        <i class="fa fa-tag"></i><?= _AI ?>
                        <i class="fa fa-tag"></i><?= _RL ?>
                        <i class="fa fa-tag"></i><?= _VULGARISATION ?>
                    </sm>
                </p>
            </div>
            
		</div>
		<br>
		<hr>
	</div>
	

	<section id="site" name="site"></section>
	<div class="container desc animated wow fadeInDown" id="portfolio">
		<div class="row">
            <div class="col-lg-2 col-lg-offset-1">
                <h5><?= mb_strtoupper(_SECTION_SITE) ?></h5>
            </div>
            
            <div class="col-lg-6">
                <p><img class="img-responsive" src="../static/img/CodinGame.jpg" alt=""></p>
            </div>
            <div class="col-lg-3">
                <p><img src="../static/img/flags_fr.png"/>&nbsp;<img src="../static/img/flags_us.png"/>&nbsp;<a href="https://www.codingame.com/" target="_blank">Codingame<i class="fa fa-external-link" aria-hidden="true"></i></a></p>
                <p>
                    <more>
                        <?= _SITE1_DESC ?>
                    </more>
                </p>
            </div>
            
            <div class="col-lg-6 col-lg-offset-3">
                <p><img class="img-responsive" src="../static/img/techio.png" alt=""></p>
            </div>
            <div class="col-lg-3">
                <p><img src="../static/img/flags_us.png"/>&nbsp;<a href="https://tech.io/" target="_blank">Tech.io<i class="fa fa-external-link" aria-hidden="true"></i></a></p>
                <p>
                   <more>
                        <?= _SITE4_DESC ?>
                    </more>
                </p>
            </div>
            
            <div class="col-lg-6 col-lg-offset-3">
                <p><img class="img-responsive" src="../static/img/kaggle.jpg" alt=""></p>
            </div>
            <div class="col-lg-3">
                <p><img src="../static/img/flags_us.png"/>&nbsp;<a href="https://www.kaggle.com/" target="_blank">Kaggle<i class="fa fa-external-link" aria-hidden="true"></i></a></p>
                <p>
                   <more>
                        <?= _SITE2_DESC ?>
                    </more>
                </p>
            </div>

            <div class="col-lg-6 col-lg-offset-3">
                <p><img class="img-responsive" src="../static/img/StackOverflow.jpg" alt=""></p>
            </div>
            <div class="col-lg-3">
                <p><img src="../static/img/flags_us.png"/>&nbsp;<a href="https://stackoverflow.com/" target="_blank">StackOverflow<i class="fa fa-external-link" aria-hidden="true"></i></a></p>
                <p>
                   <more>
                        <?= _SITE3_DESC ?>
                    </more>
                </p>
            </div>
		</div>
		<br>
		<br>
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
</body>
</html>
