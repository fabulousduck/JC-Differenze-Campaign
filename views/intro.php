


<div id="introImageContainer" class="parallax-window" data-parallax="scroll" data-speed="0.6" data-image-src="img/afb.jpg">
    <div id="introLogoContainer">
        <img src="img/cloudie.png">
    </div>
    <div id="introTextContainer">
        <img src="img/REMOSTEPS-3.png">
    </div>
    <div id="introQuoteContainer">
        <p><i><b><?php     error_reporting(0);
                         $l= $_GET['lang'] ?: "ENG";
                        switch ($l) {
                            case "ENG":
                                echo "Become independant!";
                                break;
                            case "NED":
                                echo "Wordt onafhankelijk!";
                                break;
                            case "ESP":
                                echo "convertido en independiente!";
                                break;
                            case "SRB":
                                echo "постати независна!";
                                break;
                            default:
                                echo "Become independant!";
                        } ?></b></i></p>
    </div>
    <div id="introButton">
        <a class="hvr-rectangle-out" href="#home"><?php error_reporting(0);
                                                                                                                $l= $_GET['lang'] ?: "ENG";
                                                                                                                switch ($l) {
                                                                                                                    case "ENG" :
                                                                                                                        echo "discover how";
                                                                                                                        break;
                                                                                                                    case "NED" :
                                                                                                                        echo "ontdek hoe";
                                                                                                                        break;
                                                                                                                    case "ESP" :
                                                                                                                        echo "descubrir cómo";
                                                                                                                        break;
                                                                                                                    case "SRB" :
                                                                                                                        echo "откријте како";
                                                                                                                        break;
                                                                                                                    default :
                                                                                                                        echo "discover how";
                                                                                                                        break;
                                                                                                                }?> </a>
    </div>
</div>


