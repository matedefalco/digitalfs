window.onload = function(){
console.log("hola");
var pagebutton = document.querySelector('.pagebutton');

pagebutton.onclick = function(e){
  e.preventDefault();
  console.log(pagebutton.href);
  fetch(pagebutton.href)
  .then(function (response){
    return response.json();
  })
  .then(function (data){

    for(var i = 0; i < data.users.name.length; i++)
    {
      var choclaso = `
      <article class='post col-12 noneable'>

        <div class="userContainer row">
          <div class="avatarContainer col-2">
            <img class="user_img" src="/storage/avatar_img/${data.users.avatar[i]}"alt="user img">
          </div>
          <div class="namecontainer col-10">
            <a class="username" href="/user/${data.users.id[i]}">${data.users.name[i]}</a>
          </div>
        </div>

        <div class="mainImageContainer">
          <a href="/post/${data.posts.id[i]}">
            <img src="/storage/post_img/${data.posts.img[i]}" class="main_img" alt="main image">
          </a>
        </div>
        <?php $count++;?>

        <div class="likesContainer row">
          <a href="#" style="width:12.5%">
            <i class="likesitem la la-thumbs-up fa-2x" style="width:100%"></i>
          </a>

          <a href="#" style="width:12.5%">
            <i class="likesitem la la-thumbs-down fa-2x" style="width:100%"></i>
          </a>

          <a href="#" style="width:12.5%">
            <i class="likesitem la la-share fa-2x" style="width:100%"></i>
          </a>

          <a href="#" style="width:12.5%">
            <i class="likesitem la la-ellipsis-v fa-2x" style="width:100%"></i>
          </a>
        </div>

      </article>`;
      var offset = parseInt(data.offset)+1;
      document.querySelector('.pagebutton').href = `/api/page/${offset}`;
      document.querySelector('.target').innerHTML += choclaso;
    }



  })
  .catch(function(error){
    console.log("the error was: " + error)
  })


    }

    var CheckIfScrollBottom = debouncer(function() {
      if(getDocHeight() == getScrollXY()[1] + window.innerHeight) {
        console.log(pagebutton.href);
        fetch(pagebutton.href)
        .then(function (response){
          return response.json();
        })
        .then(function (data){

          for(var i = 0; i < data.users.name.length; i++)
          {
            var choclaso = `
            <article class='post col-12 noneable'>

              <div class="userContainer row">
                <div class="avatarContainer col-2">
                  <img class="user_img" src="/storage/avatar_img/${data.users.avatar[i]}"alt="user img">
                </div>
                <div class="namecontainer col-10">
                  <a class="username" href="/user/${data.users.id[i]}">${data.users.name[i]}</a>
                </div>
              </div>

              <div class="mainImageContainer">
                <a href="/post/${data.posts.id[i]}">
                  <img src="/storage/post_img/${data.posts.img[i]}" class="main_img" alt="main image">
                </a>
              </div>
              <?php $count++;?>

              <div class="likesContainer row">
                <a href="#" style="width:12.5%">
                  <i class="likesitem la la-thumbs-up fa-2x" style="width:100%"></i>
                </a>

                <a href="#" style="width:12.5%">
                  <i class="likesitem la la-thumbs-down fa-2x" style="width:100%"></i>
                </a>

                <a href="#" style="width:12.5%">
                  <i class="likesitem la la-share fa-2x" style="width:100%"></i>
                </a>

                <a href="#" style="width:12.5%">
                  <i class="likesitem la la-ellipsis-v fa-2x" style="width:100%"></i>
                </a>
              </div>

            </article>`;
            var offset = parseInt(data.offset)+1;
            document.querySelector('.pagebutton').href = `/api/page/${offset}`;
            document.querySelector('.target').innerHTML += choclaso;
          }



        })
        .catch(function(error){
          console.log("the error was: " + error)
        })
      }
  },100);

  document.addEventListener('scroll',CheckIfScrollBottom);

  function debouncer(a,b,c){var d;return function(){var e=this,f=arguments,g=function(){d=null,c||a.apply(e,f)},h=c&&!d;clearTimeout(d),d=setTimeout(g,b),h&&a.apply(e,f)}}
  function getScrollXY(){var a=0,b=0;return"number"==typeof window.pageYOffset?(b=window.pageYOffset,a=window.pageXOffset):document.body&&(document.body.scrollLeft||document.body.scrollTop)?(b=document.body.scrollTop,a=document.body.scrollLeft):document.documentElement&&(document.documentElement.scrollLeft||document.documentElement.scrollTop)&&(b=document.documentElement.scrollTop,a=document.documentElement.scrollLeft),[a,b]}
  function getDocHeight(){var a=document;return Math.max(a.body.scrollHeight,a.documentElement.scrollHeight,a.body.offsetHeight,a.documentElement.offsetHeight,a.body.clientHeight,a.documentElement.clientHeight)}



}
