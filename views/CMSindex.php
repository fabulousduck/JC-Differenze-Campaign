<?php
    error_reporting(0);
    include "../config/PHPconfig.php";
    $get_var = $_GET['p'] ?: 'navigation';
    define("CURR_PAGE", $get_var);
    $rma = $_GET['rma'];
 ?>



<html>
    <head>
        <link rel="stylesheet" href="CMSstyle.css">
        <link rel="stylesheet" href="Mstyle.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    </head>
    <body>
        <nav id="nav">
            <div class="topButton active"><p>edit</p></div>
            <div class="topButton"><p>undo</p></div>
            <div class="topButton"><p>delete</p></div>
        </nav>
        <div id="sideNav">
            <div id="spacer"></div>
            <?php
                include "../logic/PHP/dataRetrieve.php";
            ?>
            <div class="sideItem"><p>add item</p><i class="fa fa-plus fa-2x fa-inverse"></i></div>
        </div>
    </body>
</html>