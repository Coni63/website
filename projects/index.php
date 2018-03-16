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
							<li class="menu-item"><a class="smoothScroll" href="#p2" title="<?= _PROJECT_2 ?>"><span class="fa-stack fa-lg"><strong class="fa-stack-1x">P2</strong></span></a></li>
							<li class="menu-item"><a class="smoothScroll" href="#p3" title="<?= _PROJECT_3 ?>"><span class="fa-stack fa-lg"><strong class="fa-stack-1x">P3</strong></span></a></li>
							<li class="menu-item"><a class="smoothScroll" href="#p4" title="<?= _PROJECT_4 ?>"><span class="fa-stack fa-lg"><strong class="fa-stack-1x">P4</strong></span></a></li>
							<li class="menu-item"><a class="smoothScroll" href="#p5" title="<?= _PROJECT_5 ?>"><span class="fa-stack fa-lg"><strong class="fa-stack-1x">P5</strong></span></a></li>
							<li class="menu-item"><a class="smoothScroll" href="#p6" title="<?= _PROJECT_6 ?>"><span class="fa-stack fa-lg"><strong class="fa-stack-1x">P6</strong></span></a></li>
							<li class="menu-item"><a class="smoothScroll" href="#p7" title="<?= _PROJECT_7 ?>"><span class="fa-stack fa-lg"><strong class="fa-stack-1x">P7</strong></span></a></li>
							<li class="menu-item"><a class="smoothScroll" href="#p8" title="<?= _PROJECT_8 ?>"><span class="fa-stack fa-lg"><strong class="fa-stack-1x">P8</strong></span></a></li>
							<li class="menu-item"><a class="smoothScroll" href="#p9" title="<?= _PROJECT_9 ?>"><span class="fa-stack fa-lg"><strong class="fa-stack-1x">P9</strong></span></a></li>
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


	<section id="head" name="head"></section>
	<div id="intro">
		<div class="container animated wow fadeInDown">
			<div class="row">
				
				<div class="col-lg-2 col-lg-offset-1">
					<h5><?= mb_strtoupper(TITLE) ?></h5>
				</div>
				<div class="col-lg-6">
					<p><?= HEAD ?></p>
				</div>				
			</div>
		</div>
	</div>


	<section id="p2" name="p2"></section>
	<div class="container desc animated wow fadeInDown">
		<div class="row">
				<div class="col-lg-2 col-lg-offset-1">
					<h5><?= mb_strtoupper(_PROJECT_2) ?></h5>
					<h5><?= mb_strtoupper(_P2_DATE) ?></h5>
				</div>
                <div class="col-lg-6 pro"> 
                    <p><t><?= _P2_TITLE ?></t></p>
                    <p><more>
                        <?= _P2_DESC ?>
                    </more></p>
                </div>
                <div class="col-lg-3 pro">
				    <p>
                        <a href="files/p2/Analysez%20des%20donn%C3%A9es%20nutritionnelles.pdf" target="_blank"><i class="fa fa-download fa-lg"></i></a> <sm><?= _DL_REPORT ?></sm><br>
                        <a href="files/p2/Presentation-Projet_2.pdf" target="_blank"><i class="fa fa-download fa-lg"></i></a> <sm><?= _DL_PPT ?></sm>
                    </p>
                </div>
        </div>
	</div>

	<hr>
	
    <section id="p3" name="p3"></section>
	<div class="container desc animated wow fadeInDown">
		<div class="row">
				<div class="col-lg-2 col-lg-offset-1">
					<h5><?= mb_strtoupper(_PROJECT_3) ?></h5>
					<h5><?= mb_strtoupper(_P3_DATE) ?></h5>
				</div>
                <div class="col-lg-6 pro"> 
                    <p><t><?= _P3_TITLE ?></t></p>
                    <p><more>
                        <?= _P3_DESC ?>
                    </more></p>
                </div>
                <div class="col-lg-3 pro">
				    <p>
                        <a href="files/p3/D%C3%A9veloppez%20un%20moteur%20de%20recommandations%20de%20films.pdf" target="_blank"><i class="fa fa-download fa-lg"></i></a> <sm><?= _DL_REPORT ?></sm><br>
                        <a href="files/p3/Presentation-projet_3.pdf" target="_blank"><i class="fa fa-download fa-lg"></i></a> <sm><?= _DL_PPT ?></sm>
                    </p>
                </div>
        </div>
	</div>
	
	<hr>
	
	<section id="p4" name="p4"></section>
	<div class="container desc animated wow fadeInDown">
		<div class="row">
				<div class="col-lg-2 col-lg-offset-1">
					<h5><?= mb_strtoupper(_PROJECT_4) ?></h5>
					<h5><?= mb_strtoupper(_P4_DATE) ?></h5>
				</div>
                <div class="col-lg-6 pro"> 
                    <p><t><?= _P4_TITLE ?></t></p>
                    <p><more>
                        <?= _P4_DESC ?>
                    </more></p>
                </div>
                <div class="col-lg-3 pro">
				    <p>
                        <a href="files/p4/Fiche%20de%20Synth%C3%A8se.pdf" target="_blank"><i class="fa fa-download fa-lg"></i></a> <sm><?= _DL_FICHE ?></sm><br>
                        <a href="files/p4/Anticiper%20le%20retard%20des%20vols.pdf" target="_blank"><i class="fa fa-download fa-lg"></i></a> <sm><?= _DL_REPORT ?></sm><br>
                        <a href="files/p4/Presentation-projet_4.pdf" target="_blank"><i class="fa fa-download fa-lg"></i></a> <sm><?= _DL_PPT ?></sm>
                    </p>
                </div>
        </div>
	</div>
	
	<hr>
	
	<section id="p5" name="p5"></section>
	<div class="container desc animated wow fadeInDown">
		<div class="row">
				<div class="col-lg-2 col-lg-offset-1">
					<h5><?= mb_strtoupper(_PROJECT_5) ?></h5>
					<h5><?= mb_strtoupper(_P5_DATE) ?></h5>
				</div>
                <div class="col-lg-6 pro"> 
                    <p><t><?= _P5_TITLE ?></t></p>
                    <p><more>
                        <?= _P5_DESC ?>
                    </more></p>
                </div>
                <div class="col-lg-3 pro">
				    <p>
                        <a href="files/p5/Fiche%20de%20Synth%C3%A8se.pdf" target="_blank"><i class="fa fa-download fa-lg"></i></a> <sm><?= _DL_FICHE ?></sm><br>
                        <a href="files/p5/Presentation_projet_5.pdf" target="_blank"><i class="fa fa-download fa-lg"></i></a> <sm><?= _DL_PPT ?></sm>
                    </p>
                </div>
        </div>
	</div>
	
	<hr>
	
	<section id="p6" name="p6"></section>
	<div class="container desc animated wow fadeInDown">
		<div class="row">
				<div class="col-lg-2 col-lg-offset-1">
					<h5><?= mb_strtoupper(_PROJECT_6) ?></h5>
					<h5><?= mb_strtoupper(_P6_DATE) ?></h5>
				</div>
                <div class="col-lg-6 pro"> 
                    <p><t><?= _P6_TITLE ?></t></p>
                    <p><more>
                        <?= _P6_DESC ?>
                    </more></p>
                </div>
                <div class="col-lg-3 pro">
				    <p>
                        <a href="files/p6/Fiche%20de%20Synth%C3%A8se.pdf" target="_blank"><i class="fa fa-download fa-lg"></i></a> <sm><?= _DL_FICHE ?></sm><br>
                        <a href="files/p6/Tag%20Recommander.pdf" target="_blank"><i class="fa fa-download fa-lg"></i></a> <sm><?= _DL_REPORT ?></sm><br>
                        <a href="files/p6/Presentation_p6.pdf" target="_blank"><i class="fa fa-download fa-lg"></i></a> <sm><?= _DL_PPT ?></sm>
                    </p>
                </div>
        </div>
	</div>
	
	<hr>
	
	<section id="p7" name="p7"></section>
	<div class="container desc animated wow fadeInDown">
		<div class="row">
				<div class="col-lg-2 col-lg-offset-1">
					<h5><?= mb_strtoupper(_PROJECT_7) ?></h5>
					<h5><?= mb_strtoupper(_P7_DATE) ?></h5>
				</div>
                <div class="col-lg-6 pro"> 
                    <p><t><?= _P7_TITLE ?></t></p>
                    <p><more>
                        <?= _P7_DESC ?>
                    </more></p>
                </div>
                <div class="col-lg-3 pro">
				    <p>
                        <a href="files/p7/Fiche%20de%20Synth%C3%A8se.pdf" target="_blank"><i class="fa fa-download fa-lg"></i></a> <sm><?= _DL_FICHE ?></sm><br>
                        <a href="files/p7/Presentation_p7.pdf" target="_blank"><i class="fa fa-download fa-lg"></i></a> <sm><?= _DL_PPT ?></sm>
                    </p>
                </div>
        </div>
	</div>
	
	<hr>
   
	<section id="p8" name="p8"></section>
	<div class="container desc animated wow fadeInDown">
		<div class="row">
				<div class="col-lg-2 col-lg-offset-1">
					<h5><?= mb_strtoupper(_PROJECT_8) ?></h5>
					<h5><?= mb_strtoupper(_P8_DATE) ?></h5>
				</div>
                <div class="col-lg-6 pro"> 
                    <p><t><?= _P8_TITLE ?></t></p>
                    <p><more>
                        <?= _P8_DESC ?>
                    </more></p>
                </div>
                <div class="col-lg-3 pro">
				    <p>
                        <a href="files/p8/Fiche%20de%20Synth%C3%A8se.pdf" target="_blank"><i class="fa fa-download fa-lg"></i></a> <sm><?= _DL_FICHE ?></sm><br>
                        <a href="files/p8/Rapport%20-%20Light.pdf" target="_blank"><i class="fa fa-download fa-lg"></i></a> <sm><?= _DL_REPORT ?></sm><br>
                        <a href="files/p8/Rapport%20-%20Light.pdf" target="_blank"><i class="fa fa-download fa-lg"></i></a> <sm><?= _DL_PPT ?></sm>
                    </p>
                </div>
        </div>
	</div>
	
	<hr>
	
	<section id="p9" name="p9"></section>
	<div class="container desc animated wow fadeInDown">
		<div class="row">
				<div class="col-lg-2 col-lg-offset-1">
					<h5><?= mb_strtoupper(_PROJECT_9) ?></h5>
					<h5><?= mb_strtoupper(_P9_DATE) ?></h5>
				</div>
                <div class="col-lg-6 pro"> 
                    <p><t><?= _P9_TITLE ?></t></p>
                    <p><more>
                        <?= _P9_DESC ?>
                    </more></p>
                </div>
                <div class="col-lg-3 pro">
				    <p>
                        <a href="files/p9/Fiche%20de%20Synth%C3%A8se.pdf" target="_blank"><i class="fa fa-download fa-lg"></i></a> <sm><?= _DL_FICHE ?></sm><br>
                        <a href="files/p9/Image%20Segmentation.pdf" target="_blank"><i class="fa fa-download fa-lg"></i></a> <sm><?= _DL_REPORT ?></sm><br>
                        <a href="files/p9/Presentation_projet_9.pdf" target="_blank"><i class="fa fa-download fa-lg"></i></a> <sm><?= _DL_PPT ?></sm>
                    </p>
                </div>
        </div>
	</div>
	
	<hr>

	
	
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
