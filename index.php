<?php
    
?>
<!DOCTYPE html>
<html lang="en-us">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/style.css" type="text/css"/>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300italic,400italic,600,600italic,700' rel='stylesheet' type='text/css'>
        <title>REMOSteps</title>
    </head>
    <body>
        <?php
            //places the nav in the index file from the nav.php file located in
            //views folder
            include "views/popups.php";
            include "views/intro.php";
            include "views/nav.php";
            include "views/body.php";
         ?>
        <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
        <script type="text/javascript" src="logic/JS/navigation-sub.js"></script>
        <script type="text/javascript" src="logic/JS/navigation.js"></script>
    </body>
</html>