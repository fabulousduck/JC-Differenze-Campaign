<?php
    $language = $_GET['lang'] ?: "ENG";
    define("LANG",$language);
?>

<footer class="footer">
        
            <ul class="footerList">
                <?php
                    footerDataGrep(LANG);
                ?>
            </ul>
            
            
            
            <div class="socialButtons">
                <div class="icons">
                    <a href="#"><i class="fa fa-facebook-official"></i></a>
                    <a href="#"><i class="fa fa-twitter-square"></i></a>
                    <a href="#"><i class="fa fa-youtube-square"></i></a>
                </div>
            </div>
            
            <div class="copyRights">
                <p>&copy; 2015-<?php $date = date(Y); echo $date; ?> All rights Reserved <a href="#">Bemika Software</a></p>
            </div>
        
    </footer>
