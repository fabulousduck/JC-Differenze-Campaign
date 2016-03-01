<?php
    include "../config/PHPconfig.php";
    $get_var = $_GET['p'];
    define("CURR_PAGE", $get_var);     
?>



<html>
    <head>
        <link rel="stylesheet" href="CMSstyle.css">
        <link rel="stylesheet" href="Mstyle.css">
    </head>
    <body>
            
       <div id="panelSelector">
           <a href="?p=navigation"><div class="panelSelectorButton"><p>Edit navigation</p></div></a>
           <a href="?p=body"><div class="panelSelectorButton"><p>Edit Body</p></div></a>
           <a href="?p=footer"><div class="panelSelectorButton"><p>Edit Form</p></div></a>
       </div>
        
       <!--<div id="layoutPanel">-->
       <!--    <div class="layoutClass initial"></div>-->
       <!--    <div class="layoutClass"></div>-->
       <!--    <div class="layoutClass"></div>-->
       <!--</div>-->
       <div id="optionsMenu">
           <form action="../logic/PHP/makeData.php" method="post">
               <input type="hidden" name="po" value="<?php echo CURR_PAGE ?>">
               <input type="submit" class="optionsButton" value="new">
            </form>
           <form action="../logic/PHP/removeData.php" method="post"><input type="submit" class="optionsButton" value="remove"></form>
       </div>

        <div id="editorPanel">
            <div class="gridRow">
                <div class="gridCell"><p>Content_id</p></div>
                <div class="gridCell"><p>Content English</p></div>
                <div class="gridCell"><p>Content Dutch</p></div>
                <div class="gridCell"><p>Content Spanish</p></div>
                <div class="gridCell"><p>Content Serbian</p></div>
                <div class="gridCell"><p>Text-align</p></div>
                <div class="gridCell"><p>Font-size</p></div>
                <div class="gridCell"><p>Confirm</p></div>
            </div>
            <?php
            include "../logic/PHP/dataRetrieve.php"; 
            ?>
        </div>
        
     

        <!--<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>-->
        <!--<script type="text/javascript" src="../logic/JS/handlebars.js"></script>-->
        <!--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.0.5/handlebars.js"></script>-->
        <!--<script type="text/javascript" src="../logic/JS/DataRequest.js"></script>-->
        <!--<script type="text/javascript" src="../logic/JS/CMS-rearHandler.js"></script>-->
    </body>
</html>