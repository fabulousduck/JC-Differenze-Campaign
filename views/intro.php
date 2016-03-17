

<div id="up"></div>
<div id="introImageContainer" class="parallax-window" data-parallax="scroll" data-speed="0.6" data-image-src="img/afb.png">
    
    <div id="containerHeader" class="containerHeader fadeIn">
    <div id="introLogoContainer">
        <img src="img/cloudie.png">
    </div>
    <div id="introTextContainer">
        <img src="img/REMOSTEPS-3.png">
    </div>
    
    <div id="introQuoteContainer">
        <p>
            <i>
                <b>
                    <?php
                        error_reporting(0);
                        $l= $_GET['lang'] ?: "ENG";
                        echo quoteContentDataGrep($l);
                    ?>
                </b>
            </i>
        </p>
    </div>
        <div id="introButton">
            <a href="#nav1">
                <?php 
                    error_reporting(0);
                    $l= $_GET['lang'] ?: "ENG";
                    echo headerButtonContentDataGrep($l);
                ?>
            </a>
        </div>
    </div>
</div>


<!--sorry babe-->
