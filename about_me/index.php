<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Nicolas MINE">
    <link rel="shortcut icon" href="../static/ico/favicon.png">

    <title>Nicolas MINE - CV</title>
    
    <link rel="stylesheet" type="text/css" href="../static/css/animate.css">
    <link rel="stylesheet" type="text/css" href="../static/css/bootstrap.min.css" >   
    <link rel="stylesheet" type="text/css" href="../static/css/style.<?=filemtime('../static/css/style.css');?>.css">
    <link rel="stylesheet" type="text/css" href="../static/full_libs/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel='stylesheet' type="text/css" href='../static/css/font_lato.css'>
    <link rel='stylesheet' type="text/css" href='../static/css/font_railway.css'>
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


<body data-spy="scroll" data-offset="0" data-target="#nav" >

	<div id="section-topbar">
		<div id="topbar-inner">
			<div class="container">
				<div class="row">
					<div class="dropdown">
						<ul id="nav" class="nav">
							<li class="menu-item"><a class="smoothScroll" href="#about" title="<?= _SECTION_1 ?>"><i class="fa fa-user-o"></i></a></li>
							<li class="menu-item"><a class="smoothScroll" href="#resume" title="<?= _SECTION_2 ?>"><i class="fa fa-graduation-cap"></i></a></li>
							<li class="menu-item"><a class="smoothScroll" href="#work" title="<?= _SECTION_3 ?>"><i class="fa fa-briefcase"></i></a></li>
							<li class="menu-item"><a class="smoothScroll" href="#skillswrap" title="<?= _SECTION_4 ?>"><i class="fa fa-cog"></i></a></li>
							<li class="menu-item"><a class="smoothScroll" href="#portfolio" title="<?= _SECTION_5 ?>"><i class="fa fa-external-link"></i></a></li>
							<li class="menu-item"><a class="smoothScroll" href="#contact" title="<?= _SECTION_6 ?>"><i class="fa fa-envelope"></i></a></li>
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

	<div id="headerwrap">
		<div class="container animated wow fadeInDown">
			<div class="row centered">
			    <img src="../static/img/profil.png" class="profile" alt="profil">
				<div class="col-lg-12">
					<h1>Nicolas MINÉ</h1>
					<h3><?= _SUB1 ?> | <?= _SUB2 ?></h3>
				</div>
			</div>
		</div>
	</div>
	

	<section id="about" name="about"></section>
	<div id="intro">
		<div class="container animated wow fadeInDown">
			<div class="row">
				
				<div class="col-lg-2 col-lg-offset-1">
					<h5><?= mb_strtoupper(_SECTION_1) ?></h5>
				</div>
				<div class="col-lg-6">
					<p><?= _SECTION_1_DESC ?></p>
				</div>
<!--
				<div class="col-lg-3">
					<p><a href="../"><i class="fa fa-download fa-lg"></i></a> <sm>TÉLÉCHARGER MON CV</sm></p>
				</div>
-->
				
			</div>
		</div>
	</div>


	<section id="resume" name="resume"></section>
	<div class="container desc animated wow fadeInDown">
		<div class="row">
            <div class="col-lg-2 col-lg-offset-1">
                <h5><?= mb_strtoupper(_SECTION_2) ?></h5>
            </div>
            
            <div class="col-lg-6">
                <p><t><?= _FORM5_TITLE ?></t><br/>
                    <i><?= _FORM5_LOC ?></i><br/>
                    <a href="https://www.datacamp.com/profile/nicolasmine"><?= _FORM5_URL ?></a>
                </p>
            </div>
            <div class="col-lg-3">
                <p><sm><?= _FORM5_DATE ?></sm><br/>
                <imp><sm><?= _FORM5_INFO ?></sm></imp>
                </p>
            </div>
            
            <div class="col-lg-6 col-lg-offset-3">
                <p><t><?= _FORM4_TITLE ?></t><br/>
                    <i><?= _FORM4_LOC ?></i><br/>
                    <a href="https://openclassrooms.com/paths/data-scientist"><?= _FORM4_URL ?></a>
                </p>
            </div>
            <div class="col-lg-3">
                <p><sm><?= _FORM4_DATE ?></sm>
                </p>
            </div>
           

            <div class="col-lg-6 col-lg-offset-3">
                <p><t><?= _FORM1_TITLE ?></t><br/>
                    <?= _FORM1_SUB ?><br/>
                    <i><?= _FORM1_LOC ?></i><br/>
                    <a href="https://www.sigma-clermont.fr/fr/homepage"><?= _FORM1_URL ?></a>
                </p>
            </div>
            <div class="col-lg-3">
                <p><sm><?= _FORM1_DATE ?></sm><br/>
                </p>
            </div>

            <div class="col-lg-6 col-lg-offset-3">
                <p><t><?= _FORM2_TITLE ?></t><br/>
                    <?= _FORM2_SUB ?><br/>
                    <i><?= _FORM2_LOC ?></i><br/>
                    <a href="http://lyc89-amyot.ac-dijon.fr/category/les-etudes/classes-preparatoires/"><?= _FORM2_URL ?></a><br/>
                    <a href="http://prepas.troyes.free.fr/"><?= _FORM2_URL2 ?></a>
                </p>
            </div>

            <div class="col-lg-3">
                <p><sm><?= _FORM2_DATE ?></sm></p>
            </div>

            <div class="col-lg-6 col-lg-offset-3">
                <p><t><?= _FORM3_TITLE ?></t><br/>
                    <?= _FORM3_SUB ?><br/>
                    <i><?= _FORM3_LOC ?></i>
                </p>
            </div>

            <div class="col-lg-3">
                <p><sm><?= _FORM3_DATE ?></sm></p>
            </div>
		</div>
		<br>
		<hr>
	</div>
	
	<section id="work" name="work"></section>
	<div class="container desc animated wow fadeInDown">
		<div class="row">
				<div class="col-lg-2 col-lg-offset-1">
					<h5><?= mb_strtoupper(_SECTION_3) ?></h5><br/>
					<h7><input type="checkbox" id="show_stage"/>&nbsp;<?= _SWITCH1 ?></h7><br/>
					<h7><input type="checkbox" id="show_projet"/>&nbsp;<?= _SWITCH2 ?></h7>
				</div>
                <div class="col-lg-6 pro"> 
                    <p><t><?= _EXP1_TITLE ?></t><br/>
                        HUSKY - <a href="http://www.husky.co/EN-US/Beverage-Packaging-Overview.aspx"><?= _EXP1_URL ?></a><br/>
                    </p>
                    <p><more>
                        <?= _EXP1_DESC ?>
                    </more></p>
                </div>
                <div class="col-lg-3 pro">
                    <p><sm><?= _EXP1_DATE ?></sm></p>
                    <imp><sm><?= _EXP1_INFO ?></sm></imp>
                </div>

                <div class="col-lg-6 col-lg-offset-3 stage">
                    <p><t><?= _EXP2_TITLE ?></t><br/>
                        ISI Process - <a href="http://www.isi-process.com/"><?= _EXP2_URL ?></a> <br/>
                    </p>
                    <p><more>
                    <?= _EXP2_DESC ?>
                    </more></p>
                </div>
                <div class="col-lg-3 stage">
                    <p><sm><?= _EXP2_DATE ?></sm></p>
                    <imp><sm><?= _EXP2_INFO ?></sm></imp>
                </div>
                
                <div class="col-lg-6 col-lg-offset-3 projet">
                    <p><t><?= _EXP3_TITLE ?></t><br/></p>
                    <p><more><?= _EXP3_DESC ?></more></p>
                </div>
                <div class="col-lg-3 projet">
                    <p><sm><?= _EXP3_DATE ?></sm></p>
                    <imp><sm><?= _EXP3_INFO ?></sm></imp>
                </div>
                
                <div class="col-lg-6 col-lg-offset-3 stage">
                    <p><t><?= _EXP4_TITLE ?></t><br/>
                        SGN Areva (Areva NP) - <a href="http://www.areva-np.com/"><?= _EXP4_URL ?></a> <br/>
                    </p>
                    <p><more><?= _EXP4_DESC ?></more></p>
                </div>
                <div class="col-lg-3 stage">
                    <p><sm><?= _EXP4_DATE ?></sm></p>
                    <imp><sm><?= _EXP4_INFO ?></sm></imp>
                </div>
                
                <div class="col-lg-6 col-lg-offset-3 projet">
                    <p><t><?= _EXP5_TITLE ?></t><br/></p>
                    <p><more>
                    <?= _EXP5_DESC ?>
                    </more></p>
                </div>
                <div class="col-lg-3 projet">
                    <p><sm><?= _EXP5_DATE ?></sm></p>
                    <imp><sm><?= _EXP5_INFO ?></sm></imp>
                </div>
                
                <div class="col-lg-6 col-lg-offset-3 projet">
                    <p><t><?= _EXP6_TITLE ?></t><br/></p>
                    <p><more>
                    <?= _EXP6_DESC ?>
                    </more></p>
                </div>
                <div class="col-lg-3 projet">
                    <p><sm><?= _EXP6_DATE ?></sm></p>
                    <imp><sm><?= _EXP6_INFO ?></sm></imp>
                </div>
		</div>
		<br>
	</div>
	
    <!-- Modal -->
    <div class="modal fade" id="myModalPY" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Python 3.X <img class="title_img" src="../static/img/python.png"/></h4>
                </div>
                <div class="modal-body">
                    <?= _MODAL_PYTHON ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><?= _CLOSE_MODAL ?></button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="myModalJS" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Javascript <img class="title_img" src="../static/img/JavaScript.png"/>&nbsp;<img class="title_img" src="../static/img/jQuery.gif"/></h4>
                </div>
                <div class="modal-body">
                    <?= _MODAL_JS ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><?= _CLOSE_MODAL ?></button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="myModalPHP" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">PHP <img class="title_img" src="../static/img/PHP.png"/></h4>
                </div>
                <div class="modal-body">
                    <?= _MODAL_PHP ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><?= _CLOSE_MODAL ?></button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="myModalHTML" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">HTML - CSS</h4>
                </div>
                <div class="modal-body">
                    <?= _MODAL_HTML ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><?= _CLOSE_MODAL ?></button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="myModalVBA" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">VBA <img class="title_img" src="../static/img/vba.png"/></h4>
                </div>
                <div class="modal-body">
                    <?= _MODAL_VBA ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><?= _CLOSE_MODAL ?></button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="myModalOffice" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Pack office <img class="title_img" src="../static/img/msoffice.png"/></h4>
                </div>
                <div class="modal-body">
                    <?= _MODAL_OFFICE ?>
                    <div class="row">
                      <div class="col-xs-3">
                        <ul>
                            <li>Word</li>
                            <li>Excel</li>
                            <li>Outlook</li>
                            <li>Access</li>
                        </ul>
                      </div>
                      <div class="col-xs-9">                           
                       <span>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                       </span><br/>
                       <span>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star-half-o" aria-hidden="true"></i>
                        </span><br/>
                        <span>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                        </span><br/>
                        <span>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                        </span>
                      </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><?= _CLOSE_MODAL ?></button>
                </div>
            </div>
        </div>
    </div>
	
	<div id="skillswrap">
		<div class="container animated wow fadeInDown">
			<div class="row">
                <div class="col-lg-2 col-lg-offset-1">
                    <h5><?= mb_strtoupper(_SECTION_4) ?></h5>
                </div>
                <div class="col-lg-3 centered">
                    <canvas id="python" height="130" width="130"></canvas>
                    <p>
                        Python 3.X
                        <a href="#myModalPY" data-toggle="modal" data-target="#myModalPY">
                            <span class="fa fa-info-circle fa-lg" ></span>
                        </a>
                    </p>
                    <br>
                </div>
                <div class="col-lg-3 centered">
                    <canvas id="javascript" height="130" width="130"></canvas>
                    <p>Javascript
                        <a href="#myModalJS" data-toggle="modal" data-target="#myModalJS">
                            <span class="fa fa-info-circle fa-lg"></span>
                        </a>
                    </p>
                    <br>
                </div>					
                <div class="col-lg-3 centered">
                    <canvas id="php" height="130" width="130"></canvas>
                    <p>PHP
                        <a href="#myModalPHP" data-toggle="modal" data-target="#myModalPHP">
                            <span class="fa fa-info-circle fa-lg" ></span>
                        </a>
                    </p>
                    <br>
                </div>

                <div class="col-lg-3 col-lg-offset-3 centered">
                    <canvas id="html" height="130" width="130"></canvas>
                    <p>HTML/CSS
                        <a href="#myModalPHP" data-toggle="modal" data-target="#myModalHTML">
                            <span class="fa fa-info-circle fa-lg" ></span>
                        </a>
                    </p>
                    <br>
                </div>
                <div class="col-lg-3 centered">
                    <canvas id="vba" height="130" width="130"></canvas>
                    <p>VBA
                        <a href="#myModal" data-toggle="modal" data-target="#myModalVBA">
                            <span class="fa fa-info-circle fa-lg" ></span>
                        </a>
                    </p>
                    <br>
                </div>
                <div class="col-lg-3 centered">
                    <canvas id="office" height="130" width="130"></canvas>
                    <p>Pack Office
                        <a href="#myModal" data-toggle="modal" data-target="#myModalOffice">
                            <span class="fa fa-info-circle fa-lg" ></span>
                        </a>
                    </p>
                    <br>
                </div>
			</div>
			<br>
		</div>
	</div>
	
	<div class="container desc animated wow fadeInDown" id="portfolio">
		<div class="row">
            <div class="col-lg-2 col-lg-offset-1">
                <h5><?= mb_strtoupper(_SECTION_5) ?></h5>
            </div>
            
            <div class="col-lg-6">
                <p><img class="img-responsive" src="../static/img/ghost_in_the_cell_ld.jpg" alt=""></p>
            </div>
            <div class="col-lg-3">
                <p>Codingame</p>
                <p>
                    <more>
                        <?= _REF1_DESC ?><br/>
                            <span class="marge">Codebuster : </span><span class="pull-right">1076/1979 <i class="fa fa-trophy silver" aria-hidden="true"></i></span><br/>
                            <span class="marge">Fantastic Bits : </span><span class="pull-right">1005/2399 <i class="fa fa-trophy silver" aria-hidden="true"></i></span><br/>
                            <span class="marge">Ghost in the Cell : </span><span class="pull-right">747/3507 <i class="fa fa-trophy gold" aria-hidden="true"></i></span><br/>
                            <span class="marge">Code4Life : </span><span class="pull-right">1365/2360 <i class="fa fa-trophy silver" aria-hidden="true"></i></span><br/>
                        <br/>
                        <a href="https://www.codingame.com/profile/de015f1a510d60cdcd0551896a34c709188072" target="_blank"><?= _REF1_URL ?> &nbsp;<i class="fa fa-external-link" aria-hidden="true"></i></a>
                            <br/><br/>
                            <sm>
                                <i class="fa fa-tag"></i>Python
                                <i class="fa fa-tag"></i>Javascript
                                <i class="fa fa-tag"></i>C++
                            </sm>
                    </more>
                </p>
            </div>

            <div class="col-lg-6 col-lg-offset-3">
                <p><img class="img-responsive" src="../static/img/dorerc.png" alt=""></p>
            </div>
            <div class="col-lg-3">
                <p>DO_RE_RC_BDD</p>
                <p>
                   <more>
                        <?= _REF2_DESC ?> &nbsp;
                        <strike><a href="http://dorercbdd.esy.es/" target="_blank"><?= _REF2_URL ?> &nbsp;<i class="fa fa-external-link" aria-hidden="true"></i></a></strike>
                        <br/><br/>
                        <sm>
                            <i class="fa fa-tag"></i>PHP
                            <i class="fa fa-tag"></i>HTML
                            <i class="fa fa-tag"></i>CSS
                            <i class="fa fa-tag"></i>JavaScript
                            <i class="fa fa-tag"></i>SQL
                        </sm>
                    </more>
                </p>
            </div>

            <div class="col-lg-6 col-lg-offset-3">
                <p><img class="img-responsive" src="../static/img/checklist2.png" alt=""></p>
            </div>
            <div class="col-lg-3">
                <p>Husky ECO</p>
                <p>
                   <more>
                        <?= _REF3_DESC ?>
                        <br/>
                        <a href="http://huskyeco.esy.es/" target="_blank"><?= _REF3_URL ?> &nbsp;<i class="fa fa-external-link" aria-hidden="true"></i></a>
                        <br/><br/>
                        <sm>
                            <i class="fa fa-tag"></i>PHP
                            <i class="fa fa-tag"></i>HTML
                            <i class="fa fa-tag"></i>Bootstrap
                            <i class="fa fa-tag"></i>JQuery
                            <i class="fa fa-tag"></i>SQL
                        </sm>
                    </more>
                </p>
            </div>
		</div>
		<br>
		<br>
	</div>
		
	<section id="contact" name="contact"></section>
	<div id="footwrap">
		<div class="container animated wow fadeInDown">
			<div class="row">
				<div class="col-lg-2 col-lg-offset-1">
					<h5><?= mb_strtoupper(_SECTION_6) ?></h5>
				</div>
				<div class="col-lg-6">
                    <div class="form-horizontal">
                        <div class="form-group">
                            <label for="exampleInputName2"><?= _NAME ?></label>
                            <input type="text" class="form-control" id="name" placeholder="<?= _NAME_PH ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail2"><?= _EMAIL ?></label>
                            <input type="email" class="form-control" id="mail" placeholder="<?= _EMAIL_PH ?>">
                        </div>
                        <div class="form-group ">
                            <label for="exampleInputText"><?= _MESSAGE ?></label>
                            <textarea  class="form-control" id="content" placeholder="<?= _MESSAGE_PH ?>" style="resize: vertical;"></textarea> 
                        </div>
                        <div class="g-recaptcha" data-sitekey="6LfVLywUAAAAAOrwj3Fol81fzvRUEEAiJXqNjUVs"></div>
                        <button id="submit_mail" class="btn btn-default"><?= _SEND ?></button>
                        <?= _COPY ?>
                    </div>
				</div>
				<div class="col-lg-3">
					<p><sm><?= mb_strtoupper(_SECTION_7) ?></sm></p>
					<p>
						<a href="https://github.com/Coni63"><i class="fa fa-github-alt fa-2x" style="color:white"></i></a>
						<a href="http://www.viadeo.com/p/0025ws9hsot1zyn"><i class="fa fa-viadeo fa-2x" style="color:white"></i></a>
						<a href="https://www.linkedin.com/in/nicolas-m-b5a66174/"><i class="fa fa-linkedin fa-2x" style="color:white"></i></a>
						<a href="https://twitter.com/ML_Coni"><i class="fa fa-twitter fa-2x" style="color:white"></i></a>
						<a href="https://stackoverflow.com/users/8044652/nicolas-m"><i class="fa fa-stack-overflow fa-2x" style="color:white"></i></a>
					</p>
					
				    <br/>
				    <p><sm><?= mb_strtoupper(_SECTION_8) ?></sm></p>
					<p>
					    <i class="fa fa-bicycle fa-2x" aria-hidden="true" style="color:white"></i><?= _HOBBIE1 ?> <br/>
						<i class="fa fa-code fa-2x" aria-hidden="true" style="color:white"></i><?= _HOBBIE2 ?> <br/>
						<i class="fa fa-plane fa-2x" aria-hidden="true" style="color:white"></i><?= _HOBBIE3 ?> <br/>
					</p>
				</div>
			</div>
		</div>
	</div>
	
    <script type="text/javascript" src="../static/js/jquery.min.js"></script>
    <script type="text/javascript" src="../static/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../static/js/smoothscroll.js" defer></script> 
    <script type="text/javascript" src="../static/js/Chart.js" defer></script>
    <script type="text/javascript" src="../static/js/notify.min.js" defer></script>
    <script type="text/javascript" src="../static/js/resume.<?=filemtime('../static/js/resume.js');?>.js" defer></script>
    <script type="text/javascript" src="../static/js/contact.<?=filemtime('../static/js/contact.js');?>.js" defer></script>
    <script src='https://www.google.com/recaptcha/api.js' async defer></script>
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
