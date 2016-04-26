<?php
   include "header.php";
?>
<html>
   <head>
      <link rel="stylesheet" href="../css/appStyle.css">
   </head>
   <body>
      <div id="vraag">
         <b><p class="vrg">Vraag &nbsp; </p><p id="num" class="lightBlue">1</p></b>
      </div>
      <div id="question">
         <i><p>Ben jij creatief met Dans ?</p></i>
      </div>
      <div id="progress">
         <p>0%</p>
      </div>
      <hr class="progressBar">
      <div id="questionBoard">
         <form name="checkboxes">
            <input type="checkbox" id="yes" name="checkgroup" class=" checkFirst">
            <label for="yes">ja</label><br>
            <input type="checkbox" id="no" name="checkgroup" class="checkbx">
            <label for="no">nee</label><br>
            <input type="checkbox" id="idk" name="checkgroup" class="checkbx">
            <label for="idk">Weet ik niet</label><br>
         </form>
      </div>
      <div id="next" onclick="next();">
         <p>volgende vraag</p>
      </div>
      
      <?php
   include "footer.php";
       ?>
      <script   src="http://code.jquery.com/jquery-2.2.3.js"   integrity="sha256-laXWtGydpwqJ8JA+X9x2miwmaiKhn8tVmOVEigRNtP4="   crossorigin="anonymous"></script>
      <script src="../logic/JS/httpRunner.js"></script>
      <script src="../logic/JS/questionHandler.js"></script>

   </body>
</html>

