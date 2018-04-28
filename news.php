<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Nicolas MINE">

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

    <div class="container desc animated wow fadeInDown">
        <div class="row">
            <div class="col-lg-2 col-lg-offset-1">
                <h5>NEWS</h5>
            </div>
            
            <div class="col-lg-6">
                <p><t><?= _NEWS24_TITLE ?></t><br/>
                    <?= _NEWS24_DESC ?>
                </p>
            </div>
            
            <div class="col-lg-3">
                <p><sm><?= _NEWS24_DATE ?></sm></p>
            </div>
            
            <div class="col-lg-6 col-lg-offset-3">
                <p><t><?= _NEWS23_TITLE ?></t><br/>
                    <?= _NEWS23_DESC ?>
                </p>
            </div>
            
            <div class="col-lg-3">
                <p><sm><?= _NEWS23_DATE ?></sm></p>
            </div>
            
            <div class="col-lg-6 col-lg-offset-3">
                <p><t><?= _NEWS22_TITLE ?></t><br/>
                    <?= _NEWS22_DESC ?>
                </p>
            </div>
            
            <div class="col-lg-3">
                <p><sm><?= _NEWS22_DATE ?></sm></p>
            </div>
            
            <div class="col-lg-6 col-lg-offset-3">
                <p><t><?= _NEWS21_TITLE ?></t><br/>
                    <?= _NEWS21_DESC ?>
                </p>
            </div>
            
            <div class="col-lg-3">
                <p><sm><?= _NEWS21_DATE ?></sm></p>
            </div>
            
            <div class="col-lg-6 col-lg-offset-3">
                <p><t><?= _NEWS20_TITLE ?></t><br/>
                    <?= _NEWS20_DESC ?>
                </p>
            </div>
            
            <div class="col-lg-3">
                <p><sm><?= _NEWS20_DATE ?></sm></p>
            </div>
            
            <div class="col-lg-6 col-lg-offset-3">
                <p><t><?= _NEWS19_TITLE ?></t><br/>
                    <?= _NEWS19_DESC ?>
                </p>
            </div>
            
            <div class="col-lg-3">
                <p><sm><?= _NEWS19_DATE ?></sm></p>
            </div>
            
            <div class="col-lg-6 col-lg-offset-3">
                <p><t><?= _NEWS18_TITLE ?></t><br/>
                    <?= _NEWS18_DESC ?>
                </p>
            </div>
            
            <div class="col-lg-3">
                <p><sm><?= _NEWS18_DATE ?></sm></p>
            </div>
            
            <div class="col-lg-6  col-lg-offset-3">
                <p><t><?= _NEWS17_TITLE ?></t><br/>
                    <?= _NEWS17_DESC ?>
                </p>
            </div>
            
            <div class="col-lg-3">
                <p><sm><?= _NEWS17_DATE ?></sm></p>
            </div>
            
            <div class="col-lg-6  col-lg-offset-3">
                <p><t><?= _NEWS16_TITLE ?></t><br/>
                    <?= _NEWS16_DESC ?>
                </p>
            </div>
            
            <div class="col-lg-3">
                <p><sm><?= _NEWS16_DATE ?></sm></p>
            </div>

            <div class="col-lg-6  col-lg-offset-3">
                <p><t><?= _NEWS15_TITLE ?></t><br/>
                    <?= _NEWS15_DESC ?>
                </p>
            </div>
            
            <div class="col-lg-3">
                <p><sm><?= _NEWS15_DATE ?></sm></p>
            </div>
           
            <div class="col-lg-6  col-lg-offset-3">
                <p><t><?= _NEWS14_TITLE ?></t><br/>
                    <?= _NEWS14_DESC ?>
                </p>
            </div>
            
            <div class="col-lg-3">
                <p><sm><?= _NEWS14_DATE ?></sm></p>
            </div>
           
            <div class="col-lg-6 col-lg-offset-3">
                <p><t><?= _NEWS13_TITLE ?></t><br/>
                    <?= _NEWS13_DESC ?>
                </p>
            </div>
            
            <div class="col-lg-3">
                <p><sm><?= _NEWS13_DATE ?></sm></p>
            </div>
           
            <div class="col-lg-6 col-lg-offset-3">
                <p><t><?= _NEWS12_TITLE ?></t><br/>
                    <?= _NEWS12_DESC ?>
                </p>
            </div>
            
            <div class="col-lg-3">
                <p><sm><?= _NEWS12_DATE ?></sm></p>
            </div>
           
            <div class="col-lg-6 col-lg-offset-3">
                <p><t><?= _NEWS11_TITLE ?></t><br/>
                    <?= _NEWS11_DESC ?>
                </p>
            </div>

            <div class="col-lg-3">
                <p><sm><?= _NEWS11_DATE ?></sm></p>
            </div>

            <div class="col-lg-6 col-lg-offset-3">
                <p><t><?= _NEWS10_TITLE ?></t><br/>
                    <?= _NEWS10_DESC ?>
                </p>
            </div>

            <div class="col-lg-3">
                <p><sm><?= _NEWS10_DATE ?></sm></p>
            </div>

            <div class="col-lg-6 col-lg-offset-3">
                <p><t><?= _NEWS9_TITLE ?></t><br/>
                    <?= _NEWS9_DESC ?>
                </p>
            </div>

            <div class="col-lg-3">
                <p><sm><?= _NEWS9_DATE ?></sm></p>
            </div>

            <div class="col-lg-6 col-lg-offset-3">
                <p><t><?= _NEWS8_TITLE ?></t><br/>
                    <?= _NEWS8_DESC ?>
                </p>
            </div>

            <div class="col-lg-3">
                <p><sm><?= _NEWS8_DATE ?></sm></p>
            </div>

            <div class="col-lg-6 col-lg-offset-3">
                <p><t><?= _NEWS7_TITLE ?></t><br/>
                    <?= _NEWS7_DESC ?>
                </p>
            </div>

            <div class="col-lg-3">
                <p><sm><?= _NEWS7_DATE ?></sm></p>
            </div>

            <div class="col-lg-6 col-lg-offset-3">
                <p><t><?= _NEWS6_TITLE ?></t><br/>
                    <?= _NEWS6_DESC ?>
                </p>
            </div>

            <div class="col-lg-3">
                <p><sm><?= _NEWS6_DATE ?></sm></p>
            </div>

            <div class="col-lg-6 col-lg-offset-3">
                <p><t><?= _NEWS5_TITLE ?></t><br/>
                    <?= _NEWS5_DESC ?>
                </p>
            </div>

            <div class="col-lg-3">
                <p><sm><?= _NEWS5_DATE ?></sm></p>
            </div>

            <div class="col-lg-6 col-lg-offset-3">
                <p><t><?= _NEWS4_TITLE ?></t><br/>
                    <?= _NEWS4_DESC ?>
                </p>
            </div>

            <div class="col-lg-3">
                <p><sm><?= _NEWS4_DATE ?></sm></p>
            </div>

            <div class="col-lg-6 col-lg-offset-3">
                <p><t><?= _NEWS3_TITLE ?></t><br/>
                    <?= _NEWS3_DESC ?>
                </p>
            </div>

            <div class="col-lg-3">
                <p><sm><?= _NEWS3_DATE ?></sm></p>
            </div>

            <div class="col-lg-6 col-lg-offset-3">
                <p><t><?= _NEWS2_TITLE ?></t><br/>
                    <?= _NEWS2_DESC ?>
                </p>
            </div>

            <div class="col-lg-3">
                <p><sm><?= _NEWS2_DATE ?></sm></p>
            </div>

            <div class="col-lg-6 col-lg-offset-3">
                <p><t><?= _NEWS1_TITLE ?></t><br/>
                    <?= _NEWS1_DESC ?>
                </p>
            </div>
            <div class="col-lg-3">
                <p><sm><?= _NEWS1_DATE ?></sm><br/>
                </p>
            </div>
        </div>
        <br>
        <hr>
    </div>
</html>