
var i = 0;
var ii = 0;
var iii = 0;
var txt1 = 'Hello';
var txt2 = 'I am a junior web developer based in the Netherlands';
var txt3 = 'Take a look around my world.......';

function typeWriter1() {
  if (i < txt1.length) {
    document.getElementsByClassName("typewriter1")[0].innerHTML += txt1.charAt(i);
    i++;
    setTimeout(typeWriter1, 55);
    if (i >= txt1.length)  {
        setTimeout(typeWriter2, 500);
    }
  } 
}
setTimeout(typeWriter1, 1000)
function typeWriter2() {
    if (ii < txt2.length) {
    document.getElementsByClassName("typewriter2")[0].innerHTML += txt2.charAt(ii);
    ii++;
    setTimeout(typeWriter2, 55);
    if (ii >= txt2.length)  {
        setTimeout(typeWriter3, 500);
        }
    }
}
function typeWriter3() {
    if (iii < txt3.length) {
    document.getElementsByClassName("typewriter3")[0].innerHTML += txt3.charAt(iii);
    iii++;
    setTimeout(typeWriter3, 55);
    }
}

function disapearTypeWriter() {
    document.getElementsByClassName('flex_grid')[0].style.display = 'none';
    changeBG();
}
setTimeout(disapearTypeWriter, 8000);

function changeBG() {
    document.getElementsByClassName('bg')[0].style.backgroundColor = '#b91df2';
    document.body.style.backgroundColor = 'black';
}



document.getElementById('my_projects').addEventListener('click', function(){
    myProjects()}
    );

function myProjects() {
    document.getElementsByClassName('flex_grid')[0].style.display = 'none';
    document.getElementById('project_intro').style.display = 'flex';
    document.getElementsByClassName('bg')[0].style.backgroundColor = '#00f9bf';
    document.getElementsByClassName('full_card_container')[0].style.display = 'none';
}

document.getElementById('contact_me').addEventListener('click', function(){
    contactMe()}
    );
    function contactMe() {
    document.getElementById('project_intro').style.display = 'none';
    document.getElementsByClassName('full_card_container')[0].style.display = 'none';
    document.getElementsByClassName('bg')[0].style.backgroundColor = '#054cbf';
    }

document.getElementById('about_me').addEventListener('click', function(){
    aboutMe()}
    );
    function aboutMe() {
    document.getElementById('project_intro').style.display = 'none';
    document.getElementsByClassName('full_card_container')[0].style.display = 'none';
    document.getElementsByClassName('bg')[0].style.backgroundColor = '#b91df2';
    }




