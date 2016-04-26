window.onload = init();

var glob = {
   currentQuestion : 1,
   answerString : "",
   data : [],
   endgame : false

}

var sglob = {
      percentDone : (glob.currentQuestion / glob.data.length)*100
}

function init(){
   var dreq = new loadQuestion;
   dreq.load("../logic/PHP/questions.php",function(data){
      glob.data = data;
   })
}

function next(){
   var req = new loadQuestion;
   glob.currentQuestion += 1;
   sglob.percentDone = Math.round((glob.currentQuestion / glob.data.length)*100);

   if(sglob.percentDone > 90 && !glob.endgame){
       document.getElementById("next").innerHTML = "<p onclick='end()'>done</p>";
       document.getElementById("progress").innerHTML = "<p>" + sglob.percentDone+"%</p>";

   }else if(sglob.percentDone < 90 && !glob.endgame){
      document.getElementById("num").innerHTML = glob.currentQuestion;
      document.getElementById("question").innerHTML = "<p>" + glob.data[glob.currentQuestion].question + "</p>";
      document.getElementById("progress").innerHTML = "<p>" + sglob.percentDone + "%</p>";
     glob.answerString += checked();

   }else{

   }

}

function end(){
    glob.endgame = true;
    document.querySelector("body").innerHTML = '<div class="endo" style="height:300px; width:70%; border:1px solid #000; margin-left:15%; margin-top: 500px;"><p style="font-family: sans-serif; text-align: center; color: #4c66a4; font-size: 40px;">Bedankt voor het doen van de quiz.<br>Je resultaat is opgeslagen.</p></div>';


}


$('input[type="checkbox"]').on('change', function() {
   $('input[type="checkbox"]').not(this).prop('checked', false);
});

function checked(){
   for(var i=0; i<document.checkboxes.checkgroup.length; i++){
      if(document.checkboxes.checkgroup[i].checked == true){
         console.log(i);
         return i;
      }
   }
}



