<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Nicolas MINE">
    <link rel="shortcut icon" href="static/ico/favicon.png">

    <title>Nicolas MINE - Acceuil</title>
    
    <link rel='stylesheet' type='text/css' href="static/css/animate.css">
    <link rel='stylesheet' type='text/css' href="static/css/bootstrap.min.css">
    <link rel='stylesheet' type='text/css' href="static/css/style.<?=filemtime('static/css/style.css');?>.css">
    <link rel='stylesheet' type='text/css' href="static/full_libs/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel='stylesheet' type='text/css' href="static/css/font_lato.css">
    <link rel='stylesheet' type='text/css' href="static/css/font_railway.css">

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

  <body data-spy="scroll" data-offset="0" data-target="#nav" class="page">
    <div class="site-body">
        <div id="section-topbar">
            <div id="topbar-inner">
                <div class="container">
                    <div class="row">
                        <div class="dropdown">
                            <ul id="nav" class="nav">
                                <li class="menu-item"><a class="smoothScroll" href="#menu" title="Menu"><i class="fa fa-th-large"></i></a></li>
                                <li class="menu-item"><a class="smoothScroll" href="#news" title="News"><i class="fa fa-archive"></i></a></li>
                            </ul> 
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>

        <div id="flags">
            <img src="static/img/flags_fr.png" class="lang_selector" id="fr"/><br>
            <img src="static/img/flags_us.png" class="lang_selector" id="en"/>
        </div>

        <div id="headerwrap">
            <div class="container animated wow fadeInDown">
                <div class="row centered">
                    <img src="static/img/profil.png" class="profile" alt="profil">
                    <div class="col-lg-12">
                        <h1>Nicolas MINÉ</h1>
                        <h3><?= _WELCOME ?></h3> 
                    </div>
                </div>
            </div>
        </div>

        <section id="menu" name="menu"></section>
        <div id="intro">
            <div class="container animated wow fadeInDown">
                <div class="row">
                    <div class="col-md-4 text-center animated wow fadeInDown">
                        <a href="scripts/">
                            <div style="height:100px;">
                                <i class="fa fa-code fa-4x middle"  aria-hidden="true" style="color:#f2f2f2"></i>
                            </div>
                        </a>
                        <span class="separator"></span>
                        <h2 class="white"><?= _MENU1_TITLE ?></h2>
                        <p><?= _MENU1_DESC ?></p>  
                    </div>
                    <div class="col-md-4 text-center animated wow fadeInDown">
                        <a href="about_me/">
                            <div style="height:100px;">
                                <i class="fa fa-user-circle-o fa-4x middle" aria-hidden="true" style="color:#f2f2f2"></i>
                            </div>
                        </a>
                        <span class="separator"></span>
                        <h2 class="white"><?= _MENU2_TITLE ?></h2>
                        <p><?= _MENU2_DESC ?></p>
                    </div>
                    <div class="col-md-4 text-center animated wow fadeInDown">
                        <a href="learn_python/">
                            <div style="height:100px;">
                                <i class="fa fa-book fa-4x middle"  aria-hidden="true" style="color:#f2f2f2"></i>
                            </div>
                        </a>
                        <span class="separator"></span>
                        <h2 class="white"><?= _MENU3_TITLE ?></h2>
                        <p><?= _MENU3_DESC ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 text-center animated wow fadeInDown">
                        <a href="news/">
                            <div style="height:100px;">
                                <i class="fa fa-twitter fa-4x middle"  aria-hidden="true" style="color:#f2f2f2"></i>
                            </div>
                        </a>
                        <span class="separator"></span>
                        <h2 class="white"><?= _MENU4_TITLE ?></h2>
                        <p><?= _MENU4_DESC ?></p>
                    </div>
                    <div class="col-md-4 text-center animated wow fadeInDown">
                        <a href="projects/">
                            <div style="height:100px;">
                                <i class="fa fa-graduation-cap fa-4x middle"  aria-hidden="true" style="color:#f2f2f2"></i>
                            </div>
                        </a>
                        <span class="separator"></span>
                        <h2 class="white"><?= _MENU6_TITLE ?></h2>
                        <p><?= _MENU6_DESC ?></p>
                    </div>
                    <div class="col-md-4 text-center animated wow fadeInDown">
                        <a href="misc/">
                            <div style="height:100px;">
                                <i class="fa fa-hashtag fa-4x middle"  aria-hidden="true" style="color:#f2f2f2"></i>
                            </div>
                        </a>
                        <span class="separator"></span>
                        <h2 class="white"><?= _MENU5_TITLE ?></h2>
                        <p><?= _MENU5_DESC ?></p>
                    </div>
                </div>
            </div>
        </div>
        
        
        <div id="red-ribbon">
            <div class="container animated wow fadeInDown">
                <?= _BREAK ?>
            </div>
        </div>
        
        
        <section id="news" name="news"></section>
        <iframe id="iframe1" src="" frameborder="0" width="100%" height="500px"   scrolling="yes">  
            <p>Your browser does not support iframes.</p>
        </iframe>
	</div>
  
  	<footer class="site-footer">
		<div class="wrapper">
			<div class="rights">
				<p><i class="fa fa-copyright" aria-hidden="true"></i>
				Based on a template from <a href="http://www.blacktie.co">BLACKTIE.CO</a></p>
			</div>
			<div class="right">
				<p>Version <?= _VERSION ?></p>
			</div>
<!--
			<nav>
				<ul>
					<li><a href="#">About</a></li>
					<li><a href="#">FAQ</a></li>
					<li><a href="#">Services</a></li>
					<li><a href="#">Blog</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
			</nav>
-->
		</div>		
	</footer>
   
    <script type="text/javascript" src="static/js/jquery.min.js"></script>
    <script type="text/javascript" src="static/js/smoothscroll.js" defer></script> 
    <script type="text/javascript" src="static/js/bootstrap.min.js"></script>
    <script type="text/javascript" defer>
       $(function(){
            $(".lang_selector").click(function(){
                event.preventDefault();
                let selected_lang = $(this).attr("id");
                $.post(
                    "webservices/select_lang.php", 
                    {"language": selected_lang}, 
                    function(e) {
                        window.location.reload(true);
                    }
                );
            });
        });
    </script>
    <script defer>
        function setIframeSrc() {
            var s = "news.php";
            var iframe1 = document.getElementById('iframe1');
            if ( -1 == navigator.userAgent.indexOf("MSIE") ) {
                iframe1.src = s;
            } else {
                iframe1.location = s;
            }
        }
        setIframeSrc()
    </script>
</body>
</html>