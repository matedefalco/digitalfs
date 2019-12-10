window.addEventListener("load", function() {

  var div = document.createElement('div');
  div.setAttribute('class', 'jstest');
  div.innerHTML = document.getElementById('blockOfStuff').innerHTML;
  document.getElementById('targetElement').appendChild(div);

})
