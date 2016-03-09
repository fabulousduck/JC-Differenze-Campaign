<?php
    
?>
<!DOCTYPE html>
<html lang="en-us">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords" content="Remosteps"/>
        <meta name="description" content="Remosteps"/>
        <meta name="author" content="Ryan, Noud, Donovan" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/style.css" type="text/css"/>
        <link rel="icon" type="image/png" href="img/favicon.png" />
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300italic,400italic,600,600italic,700' rel='stylesheet' type='text/css'>
        <title>REMOsteps</title>
        
    
    </head>
    <body>
        <?php
            //places the nav in the index file from the nav.php file located in
            //views folder
            include "views/popups.php";
            include "views/intro.php";
            include "views/nav.php";
            include "views/body.php";
            include "views/footer.php";
         ?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <script type="text/javascript" src="logic/JS/navigation-sub.js"></script>
        <script type="text/javascript" src="logic/JS/navigation.js"></script>
        <!--<script type="text/javascript" src="logic/JS/main.js"></script>-->
        <script type="text/javascript" src="logic/JS/parallax.js"></script>
        <script type="text/javascript" src="logic/JS/popup.js"></script>
        <script type="text/javascript">
        
        $(document).ready(function(){
            $('a[href^="#"]').on('click',function (e) {
                e.preventDefault();
        
                var target = this.hash;
                $target = $(target);
        
                $('html, body').stop().animate({
                    'scrollTop':  parseInt($target.offset().top,10)
                }, 900, 'swing', function () {
                    window.location.hash = target;
                });
            });
        });
        
         // end autoscroll
        </script>
    </body>
</html>