var g = {
    selectedAge : "",
    hasSelectedAge : false,

}

window.onload = init();


function init(){
    var tenBox   = document.querySelector("#ten");
    var etnBox   = document.querySelector("#etn");
    var errorBox = document.querySelector("#errorBox");
    displayQuiz();

    //for when the user selects 10+
    tenBox.addEventListener("click",function(){
        g.selectedAge = "tenbox";
        g.hasSelectedAge = true;
        tenBox.className += " activeAge";
        tenBox.querySelector("p").style.color = "black";
        //change the page layout here with hxmlhttp request
        displayQuiz()
        if(g.selectedAge  = "etnBox"){
            etnBox.className = "ageblock";
            etnBox.querySelector("p").style.color = "white";
        }
    })
  //for when the user selects 18+
  etnBox.addEventListener("click",function(){
        g.selectedAge = "etnbox";
        g.hasSelectedAge = true;
        etnBox.className += " activeAge";
        etnBox.querySelector("p").style.color = "black";
        displayQuiz()
        //change the page layout here with xmlHttpRequest
        var req = new getView();
        req.load("views/app_quiz.php?age='10'", function(data){
            document.querySelector('#quizField').innerHTML = data;
        })


        if(g.selectedAge = "tenBox"){
            tenBox.className = "ageblock ageBlockFirst";
            tenBox.querySelector("p").style.color = "white";
        }
  })


}


function displayMessage(elem){
    document.querySelector("#errorBox").innerHTML = g.selectedAge;
}

function displayQuiz(){
    console.log(g.hasSelectedAge);
    if(g.hasSelectedAge){
        errorBox.style.display = "none";



    }else{
        errorBox.innerHTML = "<p>please Select an age</p>";
    }
}
