<div id="introImageContainer">
    <div id="introLogoContainer">
        <img src="img/cloudie.png">
    </div>
    <div id="introTextContainer">
        <img src="img/REMOSTEPS-3.png">
    </div>
    <div id="introQuoteContainer">
        <p><i><b><?php $l= isset($_GET['la']) ?: "srb";
                        switch ($l) {
                            case "eng":
                                echo "Become independant!";
                                break;
                            case "ned":
                                echo "Wordt onafhankelijk!";
                                break;
                            case "esp":
                                echo "convertido en independiente!";
                                break;
                            case "srb":
                                echo "постати независна!";
                                break;
                            default:
                                echo "Become independant!";
                        } ?></b></i></p>
    </div>
    <div id="introButton">
        <p>Discover how</p>
    </div>
</div>

