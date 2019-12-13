window.onload = function(){

var verMas = document.querySelector('.verMas');

verMas.addEventListener('click', function(){
  preventDefault();
  fetch(verMas.href)
  .then(function (response){
    return response.json();
  })
  .then(function (data){

  })
  .catch(function(error){
    console.log("the error was: " + error)
  })

      document.querySelector('.comments').innerHTML += choclo;
    }



  })
})


}

verMas.addEventListener('click', function(e){
  // e.preventDefault();
  fetch(verMas.href)
  .then(res => res.json())
  .then(function (data){
    console.log(data);
    for (var i = 2; i < data.length; i++) {
      var comment = data[i];
      var choclo = `<div class="row">
        <div class="avatarContainer col-2">
          <img class="user_img" src="/storage/avatar_img/{{$comment->user->avatar}}"alt="user img">
        </div>
        <div class="namecontainer col-3">
          <a class="username" href="/user/{{$comment->user->id}}">{{$comment->user->name}}</a>
        </div>
        <div class="col-7">
          {{$comment->comment}}
        </div>
      </div>
      <br>`

      document.querySelector('.comments').innerHTML += choclo
    }



  })
})
