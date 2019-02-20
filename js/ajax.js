document.getElementById('project_intro').addEventListener('click', function(){
    nextProject()}
    );
    document.getElementById('ajax_call').addEventListener('click', function(){
        nextProject()}
        );

var count = 0;
function nextProject() { //functie als je op de next knop klikt .
    var xmlhttp = new XMLHttpRequest(); // stop nieuwe class in de var
    // open moet altijd 3 input hebben. 1. welke manier je iets opvraagt. 2 url. 3. async of niet.
    xmlhttp.open( "GET","php/projects_card.php",true);
    xmlhttp.onload = function () {   // ALS JE EEN RESPONSE KRIJGT WORDT DIT UITGEVOERD
        if (this.status == 200) { 
            var DBPackage = JSON.parse(this.responseText);
            console.log(DBPackage);
            document.getElementById('project_intro').style.display = 'none';
            document.getElementsByClassName('full_card_container')[0].style.display = 'flex';
            document.getElementById('name').innerHTML = DBPackage[count][0];
            document.getElementById('description').innerHTML = DBPackage[count][1];
            document.getElementById('time').innerHTML = DBPackage[count][2];
            document.getElementById('photo').src = DBPackage[count][3];
            document.getElementById('skill').innerHTML = DBPackage[count][4];
        
            ClickMe();
            
        } else if (this.status == 404) {
            console.log("Deze pagina bestaat niet!");
        }
    }
    xmlhttp.onerror = function () {
        console.log("there is a request error...")
    }
    xmlhttp.send();
};

function ClickMe () {
    if (count <= 3) {
        count += 1;
        } else {
            count = 0;
        }
    }
