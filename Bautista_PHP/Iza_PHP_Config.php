<?php
session_start();

if(isset($_POST['submit'])) {

   $passkey = $_POST['passkey'];
   $username1 = $_POST['username'];
}

$host = "localhost";
$username = "root";
$password = "";
$dbname = "existing_accounts";

$con = mysqli_connect($host, $username, $password, $dbname);

if (!$con) {
   die("Connection failed!" . mysqli_connect_error());
}


$sql = "SELECT * FROM signed_up WHERE BINARY Username= BINARY '$username1' AND BINARY Password= BINARY '$passkey'";
$result = mysqli_query($con,$sql);

if(mysqli_num_rows($result)===1){
  $row = mysqli_fetch_assoc($result);

  if($row['Username'] === $username1 && $row['Password'] === $passkey){
    echo "Logged in!";

    $_SESSION['Username'] = $row['Username'];
    header("Location: http://localhost/Test/Bautista_PHP/Home_Page/Home_Page.php");
    exit();

  }

}

else {
  echo "<script>
  alert('Wrong Username or Password');
  window.location.href='http://localhost/Test/Bautista_PHP/Iza_Login_Page.php';
  </script>";
  exit();
}






?>
