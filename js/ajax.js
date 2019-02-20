document.getElementById('ajax_call').addEventListener('click', function(){
    nextProject()}
);

function nextProject() { //functie als je op de next knop klikt .
    var xmlhttp = new XMLHttpRequest(); // stop nieuwe class in de var
    // open moet altijd 3 input hebben. 1. welke manier je iets opvraagt. 2 url. 3. async of niet.
    xmlhttp.open( "GET","php/projects_card.php",true);

    xmlhttp.onload = function () {   // ALS JE EEN RESPONSE KRIJGT WORDT DIT UITGEVOERD
        if (this.status == 200) { 
            var DBPackage = JSON.parse(this.responseText);
            console.log(DBPackage);
            document.getElementById('name').innerHTML = DBPackage[0][0];
            document.getElementById('description').innerHTML = DBPackage[0][1];
            document.getElementById('time').innerHTML = DBPackage[0][2];
            document.getElementById('photo').src = DBPackage[0][3];
            ClickMe()
            function ClickMe () {
            var count = 0;
            
            }
            count += 1;

        } else if (this.status == 404) {
            console.log("Deze pagina bestaat niet!");
        }
    }
    xmlhttp.onerror = function () {
        console.log("there is a request error...")
    }
    xmlhttp.send();
};
