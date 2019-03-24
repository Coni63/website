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
                <p><t><?= _NEWS57_TITLE ?></t><br/>
                    <?= _NEWS57_DESC ?>
                </p>
            </div>
            
            <div class="col-lg-3">
                <p><sm><?= _NEWS57_DATE ?></sm></p>
            </div>
            
            <div class="col-lg-6 col-lg-offset-3">
                <p><t><?= _NEWS56_TITLE ?></t><br/>
                    <?= _NEWS56_DESC ?>
                </p>
            </div>
            
            <div class="col-lg-3">
                <p><sm><?= _NEWS56_DATE ?></sm></p>
            </div>
            
            <div class="col-lg-6 col-lg-offset-3">
                <p><t><?= _NEWS55_TITLE ?></t><br/>
                    <?= _NEWS55_DESC ?>
                </p>
            </div>
            
            <div class="col-lg-3">
                <p><sm><?= _NEWS55_DATE ?></sm></p>
            </div>
            
            <div class="col-lg-6 col-lg-offset-3">
                <p><t><?= _NEWS54_TITLE ?></t><br/>
                    <?= _NEWS54_DESC ?>
                </p>
            </div>
            
            <div class="col-lg-3">
                <p><sm><?= _NEWS54_DATE ?></sm></p>
            </div>
            
            <div class="col-lg-6 col-lg-offset-3">
                <p><t><?= _NEWS53_TITLE ?></t><br/>
                    <?= _NEWS53_DESC ?>
                </p>
            </div>
            
            <div class="col-lg-3">
                <p><sm><?= _NEWS53_DATE ?></sm></p>
            </div>
            
            <div class="col-lg-6 col-lg-offset-3">
                <p><t><?= _NEWS52_TITLE ?></t><br/>
                    <?= _NEWS52_DESC ?>
                </p>
            </div>
            
            <div class="col-lg-3">
                <p><sm><?= _NEWS52_DATE ?></sm></p>
            </div>
            
            <div class="col-lg-6 col-lg-offset-3">
                <p><t><?= _NEWS51_TITLE ?></t><br/>
                    <?= _NEWS51_DESC ?>
                </p>
            </div>
            
            <div class="col-lg-3">
                <p><sm><?= _NEWS51_DATE ?></sm></p>
            </div>
            
            <div class="col-lg-6 col-lg-offset-3">
                <p><t><?= _NEWS50_TITLE ?></t><br/>
                    <?= _NEWS50_DESC ?>
                </p>
            </div>
            
            <div class="col-lg-3">
                <p><sm><?= _NEWS50_DATE ?></sm></p>
            </div>
            
            <div class="col-lg-6 col-lg-offset-3">
                <p><t><?= _NEWS49_TITLE ?></t><br/>
                    <?= _NEWS49_DESC ?>
                </p>
            </div>
            
            <div class="col-lg-3">
                <p><sm><?= _NEWS49_DATE ?></sm></p>
            </div>
            
            <div class="col-lg-6 col-lg-offset-3">
                <p><t><?= _NEWS48_TITLE ?></t><br/>
                    <?= _NEWS48_DESC ?>
                </p>
            </div>
            
            <div class="col-lg-3">
                <p><sm><?= _NEWS48_DATE ?></sm></p>
            </div>
            
            <div class="col-lg-6 col-lg-offset-3">
                <p><t><?= _NEWS47_TITLE ?></t><br/>
                    <?= _NEWS47_DESC ?>
                </p>
            </div>
            
            <div class="col-lg-3">
                <p><sm><?= _NEWS47_DATE ?></sm></p>
            </div>
            
            <div class="col-lg-6 col-lg-offset-3">
                <p><t><?= _NEWS46_TITLE ?></t><br/>
                    <?= _NEWS46_DESC ?>
                </p>
            </div>
            
            <div class="col-lg-3">
                <p><sm><?= _NEWS46_DATE ?></sm></p>
            </div>
            
            <div class="col-lg-6 col-lg-offset-3">
                <p><t><?= _NEWS45_TITLE ?></t><br/>
                    <?= _NEWS45_DESC ?>
                </p>
            </div>
            
            <div class="col-lg-3">
                <p><sm><?= _NEWS45_DATE ?></sm></p>
            </div>
            
            <div class="col-lg-6 col-lg-offset-3">
                <p><t><?= _NEWS44_TITLE ?></t><br/>
                    <?= _NEWS44_DESC ?>
                </p>
            </div>
            
            <div class="col-lg-3">
                <p><sm><?= _NEWS44_DATE ?></sm></p>
            </div>
            
            <div class="col-lg-6 col-lg-offset-3">
                <p><t><?= _NEWS43_TITLE ?></t><br/>
                    <?= _NEWS43_DESC ?>
                </p>
            </div>
            
            <div class="col-lg-3">
                <p><sm><?= _NEWS43_DATE ?></sm></p>
            </div>
            
            <div class="col-lg-6 col-lg-offset-3">
                <p><t><?= _NEWS42_TITLE ?></t><br/>
                    <?= _NEWS42_DESC ?>
                </p>
            </div>
            
            <div class="col-lg-3">
                <p><sm><?= _NEWS42_DATE ?></sm></p>
            </div>
            
            <div class="col-lg-6 col-lg-offset-3">
                <p><t><?= _NEWS41_TITLE ?></t><br/>
                    <?= _NEWS41_DESC ?>
                </p>
            </div>
            
            <div class="col-lg-3">
                <p><sm><?= _NEWS41_DATE ?></sm></p>
            </div>
            
            <div class="col-lg-6 col-lg-offset-3">
                <p><t><?= _NEWS40_TITLE ?></t><br/>
                    <?= _NEWS40_DESC ?>
                </p>
            </div>
            
            <div class="col-lg-3">
                <p><sm><?= _NEWS40_DATE ?></sm></p>
            </div>
            
            <div class="col-lg-6 col-lg-offset-3">
                <p><t><?= _NEWS39_TITLE ?></t><br/>
                    <?= _NEWS39_DESC ?>
                </p>
            </div>
            
            <div class="col-lg-3">
                <p><sm><?= _NEWS39_DATE ?></sm></p>
            </div>
            
            <div class="col-lg-6 col-lg-offset-3">
                <p><t><?= _NEWS38_TITLE ?></t><br/>
                    <?= _NEWS38_DESC ?>
                </p>
            </div>
            
            <div class="col-lg-3">
                <p><sm><?= _NEWS38_DATE ?></sm></p>
            </div>
            
            <div class="col-lg-6 col-lg-offset-3">
                <p><t><?= _NEWS37_TITLE ?></t><br/>
                    <?= _NEWS37_DESC ?>
                </p>
            </div>
            
            <div class="col-lg-3">
                <p><sm><?= _NEWS37_DATE ?></sm></p>
            </div>
            
            <div class="col-lg-6 col-lg-offset-3">
                <p><t><?= _NEWS36_TITLE ?></t><br/>
                    <?= _NEWS36_DESC ?>
                </p>
            </div>
            
            <div class="col-lg-3">
                <p><sm><?= _NEWS36_DATE ?></sm></p>
            </div>
            
            <div class="col-lg-6 col-lg-offset-3">
                <p><t><?= _NEWS35_TITLE ?></t><br/>
                    <?= _NEWS35_DESC ?>
                </p>
            </div>
            
            <div class="col-lg-3">
                <p><sm><?= _NEWS35_DATE ?></sm></p>
            </div>
            
            <div class="col-lg-6 col-lg-offset-3">
                <p><t><?= _NEWS34_TITLE ?></t><br/>
                    <?= _NEWS34_DESC ?>
                </p>
            </div>
            
            <div class="col-lg-3">
                <p><sm><?= _NEWS34_DATE ?></sm></p>
            </div>
            
            <div class="col-lg-6 col-lg-offset-3">
                <p><t><?= _NEWS33_TITLE ?></t><br/>
                    <?= _NEWS33_DESC ?>
                </p>
            </div>
            
            <div class="col-lg-3">
                <p><sm><?= _NEWS33_DATE ?></sm></p>
            </div>
        </div>
        <br>
        <hr>
    </div>
</html>