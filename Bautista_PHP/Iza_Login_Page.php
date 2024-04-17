<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Iza's Login Page</title>
    <link rel="shortcut icon" type="image/png" href="https://cdn0.iconfinder.com/data/icons/small-n-flat/24/678129-lock-512.png">
    <link rel="stylesheet" href="Iza_CSS.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <video autoplay muted loop id="myVideo">
    <source src="HSR_BG.mp4" type="video/mp4">
  </video>
  <div class="content">
  <body>
    <audio autoplay loop onloadeddata="DefVolume()" id="audio1">
      <source src="HSR_Login_theme.mp3" type="audio/mpeg">
    </audio>

    <div class="button1">
      <img href="javascript:void(0);" onclick="toggleMute()" src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/21/Speaker_Icon.svg/500px-Speaker_Icon.svg.png" width="50" height="50">
    </div>

    <div class="FrontPage">
    <h1 style:"font-famiyl:Sand-serif;">Start Game</h1>
    <button onclick="document.getElementById('id01').style.display='block'"
     class="button2">Click Here To Log-in</button>
    </div>

    <div id="id01" class="login">
      <form class="content1 animate" action="Iza_PHP_Config.php" method="POST">
        <div class="imgcontainer">
          <span onclick="document.getElementById('id01').style.display='none', resetfunc()"  class="close" title="Close Form"> &times; </span>
          <h2>Account Log In</h2>
          <img src="https://img.game8.co/3706098/0c9154c2bd1a932fbd3639c077d04dbb.png/show" alt="Avatar" class="avatar">
        </div>

        <div class="container">

          <label for="uname"><b>Username</b></label>
          <input type="text" placeholder="Username" name="username" id="usr"required>
          <hr>
           <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Password" name="passkey" id="passkey" required>

          <div class=checkbox>
          <input type="checkbox" onclick="myFunction()">Show Password
          </div>
          <hr>
          <button type="submit" name="submit" value="Submit" onclick="resetfunc()" class="log_btn">Log In</button>


        </div>

        <div class="container" >
          <span class="psw"><a href="Signup_Page\Iza_Signsup_Page.html">Don't Have Account? Click here.</a></span>
        </div>

      </form>


    </div>




</body>
</div>




<script type="text/javascript">
  var login = document.getElementById('id01');


  window.onclick = function(event) {
      if (event.target == login) {
          login.style.display = "none";
      }
  }

function ForgorPW() {
  alert("Sorry, This doesn't Do Anything Yet.");
}

function DefVolume(){
  var myAudio = document.getElementById("audio1");
  myAudio.volume = 0.5;

}

function toggleMute() {
     var myAudio = document.getElementById('audio1');
     myAudio.muted = !myAudio.muted;
}

function resetfunc(){
  document.getElementById("id01").value = document.getElementById("id01").defaultValue;;
}

function myFunction() {
  var x = document.getElementById("passkey");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
</html>
