<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];
try {
    $link = mysqli_connect("localhost", "root", "", "hospital");
} catch (Exception $exception) {
    echo $exception;
}
$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = mysqli_query($link, $query);
if (mysqli_num_rows($result)!=0)
{
    $_SESSION['username']=$username;
    $_SESSION['isLogin']=true;
    $_SESSION['firstTime']=true;
    header("Location: http://localhost/hospital%20-%20new/hospital/contact.php");

}
else
{
    $_SESSION['failSignin']=true;
    header("Location: http://localhost/hospital%20-%20new/hospital/signup-login.php");
}

?>