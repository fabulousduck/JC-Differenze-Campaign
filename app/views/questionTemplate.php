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
         <p>50%</p>
      </div>
      <hr class="progressBar">
      <div id="questionBoard">
         <input type="checkbox" id="yes" class=" checkFirst">
         <label for="yes">ja</label><br>
         <input type="checkbox" id="no" class="checkbx">
         <label for="no">nee</label><br>
         <input type="checkbox" id="idk" class="checkbx">
         <label for="idk">Weet ik niet</label><br>
      </div>
      <div id="next" onclick="next(1);">
         <p>volgende vraag</p>
      </div>
            <script src="../logic/JS/httpRunner.js"></script>
      <script src="../logic/JS/questionHandler.js"></script>

   </body>
</html>
<?php
   include "footer.php";
 ?>
