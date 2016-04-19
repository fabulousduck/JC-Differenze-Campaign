function getView(){}

getView.prototype.load = function(url, callback){
    var httpR = new XMLHttpRequest();

    httpR.open("GET", url);
    httpR.send();

    httpR.addEventListener('readystatechange',function(){
        if(httpR.readyState == 4 && httpR.status == 200){
            if(callback){
                callback(JSON.parse(httpR.responseText));
            }
        }
    })
}
