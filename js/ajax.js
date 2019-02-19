document.getElementById('ajax_call').addEventListener('click', function(){
    nextProject()}
);

function nextProject() { //functie als je op de next knop klikt .
    console.log("nextProject");
    var xmlhttp = new XMLHttpRequest(); // stop nieuwe class in de var
    // open moet altijd 3 input hebben. 1. welke manier je iets opvraagt. 2 url. 3. async of niet.
    xmlhttp.open( "GET","../index.php",true);

    xmlhttp.onload = function () {   // ALS JE EEN RESPONSE KRIJGT WORDT DIT UITGEVOERD
        if (this.status == 200) { // kijk of de status oke is.
            console.log(this);
            //document.getElementById("phpOutput").innerHTML = this.responseText;
        } else if (this.status == 404) {
            console.log("Deze pagina bestaat niet!");
        }
    }
    xmlhttp.onerror = function () {
        console.log("there is a request error...")
    }
    xmlhttp.send();
};


GetInfoFromDatabase("example.url.php?gorilla=1", showData);

function GetInfoFromDatabase(url, outputData) {
    var xhttp;
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            outputData(this);
        }
    };
    xhttp.open("GET", url, true);
    xhttp.send();
}

function showData(data) {
    // action goes here
}