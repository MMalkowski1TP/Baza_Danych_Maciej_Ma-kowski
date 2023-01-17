<?php
session_start();
if(isset($_SESSION['username']))
{
  header("location:home.php");
  die();
}
$servername = "localhost";
$username = "username";
$password = "password";
$conn = new mysqli($servername, $username, $password);
if($db)
{
  if(isset($_POST['login_btn']))
  {
      $username=mysqli_real_escape_string($db,$_POST['username']);
      $password=mysqli_real_escape_string($db,$_POST['password']);
      $password=hash("sha256", $password);
      $sql="SELECT * FROM users WHERE  username='$username' AND password='$password'";
      $result=mysqli_query($conn,$sql);
      
      if($result)
      {
     
        if( mysqli_num_rows($result)>=1)
        {
            $_SESSION['message']="Jesteś zalogowany";
            $_SESSION['username']=$username;
            header("location:home.php");
        }
       else
       {
              $_SESSION['message']="Zła nazwa użytkownika lub hasło";
       }
      }
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Zajerestruj</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
    if(isset($_SESSION['message']))
    {
         echo "<div id='error_msg'>".$_SESSION['message']."</div>";
         unset($_SESSION['message']);
    }
?>
<form method="post" action="register.php">
<form action="register.php">
        <label for="name"></label><input type="text" name="name"><br>
        <label for="passwrod"></label><input type="text" name="name"><br>
        <label for="password_repeat"></label><input type="text" name="name"><br>
        <input type="submit" name="register_btn" class="Register">
    </form>
</body>
</html>
