window.onload = function(){
var verMas = document.querySelector('.verMas');

verMas.onclick = function(e){
  e.preventDefault();
  fetch(verMas.href)
  .then(function (response){
    return response.json();
  })
  .then(function (data){
    var part1 = `<div class="row">
      <div class="avatarContainer col-2">`;
    var part3 = `</div>
    <div class="namecontainer col-3">`;
    var part5 = `</div>
    <div class="col-7">`;
    var part7 = `</div>
  </div>
  <br>`;
    console.log(part1);
    for(var i = 0; i < data.users.name.length; i++)
    {
      var part2_1 = `<img class="user_img" src="/storage/avatar_img/`;
      var part2_2 = data.users.avatar[i];
      var part2_3 = `"alt="user img">`;

      var part4_1 = `<a class="username" href="/user/`;
      var part4_2 = data.users.user_id[i];
      var part4_3 = `">`;
      var part4_4 = data.users.name[i];
      var part4_5 = `</a>`;

      var part6_1 = data.comments.comment[i];
      var allparts = part1 + part2_1 + part2_2 + part2_3 + part3 + part4_1 + part4_2 + part4_3 + part4_4 + part4_5 + part5 + part6_1 + part7;
      console.log(allparts);
      document.querySelector('.verMas').style.display = "none";
      document.querySelector('.comments').innerHTML += allparts;
    }

  })
  .catch(function(error){
    console.log("the error was: " + error)
  })


    }
}
