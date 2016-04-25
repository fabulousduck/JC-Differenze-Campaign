glob = {
   currentQuestion : 1,
   answerString : ""
}

function next(a){
   var req = new loadQuestion;
   glob.currentQuestion += 1;
   req.load("../logic/PHP/questions.php",function(data){
      document.getElementById("num").innerHTML = glob.currentQuestion;
      document.getElementById("question").innerHTML = "<p>" + data[glob.currentQuestion].question + "</p>";
   });
   glob.answerString += a;
}


$('input[type="checkbox"]').on('change', function() {
   $('input[type="checkbox"]').not(this).prop('checked', false);
});
