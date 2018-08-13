state = false;
landingState = false;
function activeFormSubscribe(){

  var txt = document.getElementById('landing-focus-text');
  if(landingState == false){
    document.getElementById('main').classList.add('form-focus');
    txt.innerHTML = "Retour";
    landingState = true;
  }else{
    document.getElementById('main').classList.remove('form-focus');
    txt.innerHTML = "Commencer";
    landingState = false;
  }

}
$(".btn-commencer").on('mouseover', myFunction);

function myFunction(e) {
  var myElement = e.target;
  myElement.off('mouseover', myFunction);
  //do something that takes 30 seconds
  myElement.animate({top: 1000}, 30000, function() { //callback
    myElement.on('mouseover', myFunction);
  });
}