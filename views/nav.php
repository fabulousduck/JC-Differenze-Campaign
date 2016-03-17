<?php

    // error_reporting(0);
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
        
        <a href="#up"><div class="logo-img">&nbsp;</div></a>
    </div>
            
            
    <div class="navigation">
        <ul>
            <?php
                navGrep(LANGUAGE);
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
                navGrep(LANGUAGE);
            ?>
        </ul> 

    </div>
    		
</div>