<?php
session_start();

$host = "localhost";
$username = "root";
$password = "";
$dbname = "existing_accounts";

$con = mysqli_connect($host, $username, $password, $dbname);

if (!$con) {
   die("Connection failed!" . mysqli_connect_error());
}


if (isset($_SESSION['Username'])) {

?>

<!DOCTYPE html>
<html>
<head>
    <title>Iza's Homepage</title>
    <link rel="stylesheet" href="Homepage_CSS.css">
</head>
<video autoplay muted loop id="myvideo">
  <source src="Homepage_BG_video.mp4" type="video/mp4">
</video>


<div class="button1">
  <img href="javascript:void(0);" onclick="toggleMute()" src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/21/Speaker_Icon.svg/500px-Speaker_Icon.svg.png" width="30" height="30">
</div>

<div class="content">
<body>
<audio autoplay loop onloadeddata="DefVolume()" id="audio1">
  <source src="New_BG_Music.mp3" type="audio/mpeg">
</audio>

<div class="Title">
<form action="http://localhost/Test/Bautista_PHP/Home_Page/log_out.php">
  <h1>Weclome!, <?php echo $_SESSION['Username']; ?></h1>
  <h2>To Your Personal Webpage!</h2>
  <h3>Click The Log out Button to Log out</h3>
  <h3>Or Stay To Listen To The Background Music</h3>
  <button class="logout" type="submit" name="button">Logout</button>
</div>
</form>


</body>
</div>
</html>

<script type="text/javascript">
function DefVolume(){
  var myAudio = document.getElementById("audio1");
  myAudio.volume = 0.5;

}

function toggleMute() {
      var myAudio = document.getElementById('audio1');
      myAudio.muted = !myAudio.muted;
  }



</script>



<?php

}
else{

     header("Location: http://localhost/Test/Bautista_PHP/Iza_Login_Page.php");

     exit();

}

 ?>
