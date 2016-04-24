window.onload = init();

var glob = {
   currentQuestion : 1,
   answerString : "",
   data : []

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
      document.getElementById("num").innerHTML = glob.currentQuestion;
      document.getElementById("question").innerHTML = "<p>" + glob.data[glob.currentQuestion].question + "</p>";
      document.getElementById("progress").innerHTML = "<p>" + sglob.percentDone + "%</p>";
   glob.answerString += checked();
   // console.log(glob.answerString);
   
}

function checked(){
   for(var i=0; i<document.checkboxes.checkgroup.length; i++){
      if(document.checkboxes.checkgroup[i].checked == true){
         console.log(i);
         return i;
      }
   }
}



