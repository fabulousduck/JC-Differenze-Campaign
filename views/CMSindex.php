<?php
    error_reporting(0);
    include "../config/PHPconfig.php";
    $get_var = $_GET['p'] ?: 'navigation';
    $id = $_GET['id'] ?: 0;
    $dataLang = $_GET['dataLang'] ?: 'ENG';
    define("CURR_PAGE", $get_var);
    // $rma = $_GET['rma'];
 ?>



<html>
    <head>
        <link rel="stylesheet" href="CMSstyle.css">
        <link rel="stylesheet" href="Mstyle.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    </head>
    <body>

        <div id="sideNav">
            <div id="spacer"></div>
            <?php
                include "../logic/PHP/dataRetrieve.php";
                
                
            ?>
            
            
            
            <?php 
                if(CURR_PAGE == 'navigation'){
                    echo '<div class="sideItem"><p>add item</p><form method="post" action="../logic/PHP/makeData.php?po='.$get_var.'"><input type="hidden" name="rethead" value="?p='.$get_var.'&id='.$id.'&dataLang='.$dataLang.'"><button type="submit" class="btn"><i class="fa fa-plus fa-2x fa-inverse"></i></button></div></form>'; 
                }else if(CURR_PAGE == 'footer'){
                    echo '<div class="sideItem"><p>add item</p><form method="post" action="../logic/PHP/makeData.php?po='.$get_var.'"><input type="hidden" name="rethead" value="?p='.$get_var.'&id='.$id.'&dataLang='.$dataLang.'"><button type="submit" class="btn"><i class="fa fa-plus fa-2x fa-inverse"></i></button></div></form>'; 
                }else{
                    echo "";
                }
            ?>
        </div>
        <!--<nav id="nav">-->
        <!--    <div class="topButton active"><p>edit</p></div>-->
        <!--    <div class="topButton"><p>undo</p></div>-->
        <!--    <div class="topButton"><p>delete</p></div>-->
            
        <!--</nav>-->
        <!--<div id="editorPanel">-->
            <?php
                include "../logic/PHP/panelData.php";
            ?>
        <!--</div>-->
        
        <script src="../logic/JS/displayer.js"></script>
    </body>
</html>