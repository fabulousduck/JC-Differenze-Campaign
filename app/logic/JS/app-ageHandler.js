var g = {
    selectedAge : "",
    hasSelectedAge : false,

}

window.onload = init();


function init(){
    var tenBox   = document.querySelector("#ten");
    var etnBox   = document.querySelector("#etn");
    var errorBox = document.querySelector("#errorBox");

    tenBox.addEventListener("click",function(){
        g.selectedAge = "tenbox";
        g.hasSelectedAge = true;
        tenBox.className += " activeAge";
        tenBox.querySelector("p").style.color = "black";
        //change the page layout here with hxmlhttp request

        if(g.selectedAge  = "etnBox"){
            etnBox.className = "ageblock";
            etnBox.querySelector("p").style.color = "white";
        }
    })

  etnBox.addEventListener("click",function(){
        g.selectedAge = "etnbox";
        g.hasSelectedAge = true;
        etnBox.className += " activeAge";
        etnBox.querySelector("p").style.color = "black";
        //change the page layout here with xmlHttpRequest

        if(g.selectedAge = "tenBox"){
            tenBox.className = "ageblock ageBlockFirst";
            tenBox.querySelector("p").style.color = "white";
        }
  })


    if(g.hasSelectedAge){

    }else{
        errorBox.innerHTML = "<p>please Select an age</p>";
    }
}


function displayMessage(elem){
    document.querySelector("#errorBox").innerHTML = g.selectedAge;
}
