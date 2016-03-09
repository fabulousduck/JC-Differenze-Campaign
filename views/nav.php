<?php
    include "config/PHPconfig.php";
    error_reporting(0);
    $language = $_GET['lang'] ?: "ENG";
    define("LANGUAGE", $language);
    include "logic/PHP/getData.php";
?>

<div class="menu-wrapper">

    <div class="menu">
                
        <div class="menu-button">
                    
            <i class="fa fa-bars"></i>
                    
        </div>
                
    </div>
            
    <div class="logo">
        
        <a href=""><div class="logo-img">.</div></a>
    </div>
            
            
    <div class="navigation">
        <ul>
            <?php
            
            switch (LANGUAGE){
                case "ENG":
                    $data = getLanguage("navigation",$mysqli);
                    while($language = $data->fetch_assoc()){
                        echo "<li><a href=''>".$language['Content_ENG']."</a></li>";
                    }
                    break;
                case "NED":
                    $data = getLanguage("navigation",$mysqli);
                    while($language = $data->fetch_assoc()){
                        echo "<li><a href=''>".$language['Content_NED']."</a></li>";
                    }
                    break;
                case "ESP":
                    $data = getLanguage("navigation",$mysqli);
                    while($language = $data->fetch_assoc()){
                        echo "<li><a href=''>".$language['Content_ESP']."</a></li>";
                    }
                    break;
                case "SRB":
                    $data = getLanguage("navigation",$mysqli);
                    while($language = $data->fetch_assoc()){
                        echo "<li><a href=''>".$language['Content_SRB']."</a></li>";
                    }
            }
            ?>
        </ul> 
	</div>

    
	<a href="#sign-up"><div class="sign-up">
	    
	    <div class="inner-text"> sign up
	    
	        <div class="arrow"><i class="fa fa-arrow-right"></i></div>
	    
	    </div>
	    
	</div></a>
	
	<div class="account-login">
	    
	    <div class="inner-text">my account 
	    
	        <div class="arrow"><i class="fa fa-caret-right"></i></div>
	        
	    </div>
	    
	</div>
	
	<div class="language">
	    
	    <i class="fa fa-globe"></i>
	    
	</div>
    		
	<div class="navigation-sub">

	    <ul>
            <?php
            
            switch (LANGUAGE){
                case "ENG":
                    $data = getLanguage("navigation",$mysqli);
                    while($language = $data->fetch_assoc()){
                        echo "<li><a href=''>".$language['Content_ENG']."</a></li>";
                    }
                    break;
                case "NED":
                    $data = getLanguage("navigation",$mysqli);
                    while($language = $data->fetch_assoc()){
                        echo "<li><a href=''>".$language['Content_NED']."</a></li>";
                    }
                    break;
                case "ESP":
                    $data = getLanguage("navigation",$mysqli);
                    while($language = $data->fetch_assoc()){
                        echo "<li><a href=''>".$language['Content_ESP']."</a></li>";
                    }
                    break;
                case "SRB":
                    $data = getLanguage("navigation",$mysqli);
                    while($language = $data->fetch_assoc()){
                        echo "<li><a href=''>".$language['Content_SRB']."</a></li>";
                    }
            }
            ?>
        </ul> 

    </div>
    		
</div>