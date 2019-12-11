window.addEventListener("load", function() {

  var div = document.createElement('div');
  div.setAttribute('class', 'jstest');
  div.innerHTML = document.getElementById('blockOfStuff').innerHTML;
  document.getElementById('targetElement').appendChild(div);

})

function doSmth (){
  var url = ""

  fetch(url)
  .then(function(respuesta){
    return respuesta.json();
  })
  .then(function(datos){
    //operar con los datos



  })
  .catch()
}

var button = document.querySelector();
button.addEventListener('click', function(event){
  doSmth();
})
