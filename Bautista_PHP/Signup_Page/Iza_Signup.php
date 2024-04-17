<?php
if(isset($_POST['submit']))
{
  $username1 = $_POST['username'];
  $email = $_POST['email'];
  $passkey = $_POST['passkey'];

}









$host = "localhost";
$username = "root";
$password = "";
$dbname = "existing_accounts";

$con = mysqli_connect($host, $username, $password, $dbname);

if (!$con) {
  die("Connection failed!" . mysqli_connect_error());
}
$sql = "SELECT * FROM signed_up WHERE Username='$username1' AND Email='$email'";
$result = mysqli_query($con,$sql);

if(mysqli_num_rows($result)===1){
  $row = mysqli_fetch_assoc($result);

  echo "<script>
  alert('Username or Email Already Registered');
  window.location.href='http://localhost/Test/Bautista_PHP/Signup_Page/Iza_Signsup_Page.html';
  </script>";

}


else {
$sql_ = "INSERT INTO signed_up (Username, Email, Password) VALUES ('$username1','$email','$passkey')";
$rs = mysqli_query($con, $sql_);
if($rs)
{
    header('Location: http://localhost/Test/Bautista_PHP/Iza_Login_Page.php');
    echo "Log in Information Added To Database!";
}
}

mysqli_close($con);

?>
