<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];
$password=base64_encode($password);
$email = $_POST['email'];
try {
    $link = mysqli_connect("localhost", "root", "", "hospital");
} catch (Exception $exception) {
    echo $exception;
}

$query = "SELECT * FROM users WHERE username='$username'";
$result = mysqli_query($link, $query);
if (mysqli_num_rows($result) > 0) {
    $_SESSION['failSignUp']=true;
    header("Location: http://localhost/hospital/hospital/signup-login.php");
} else if (mysqli_num_rows($result) == 0) {
    $query = "INSERT INTO users (username,password,email) VALUES ('$username','$password','$email')";
    mysqli_query($link, $query);
    $_SESSION['username']=$username;
    $_SESSION['isLogin']=true;
    $_SESSION['firstTime']=true;
    header("Location: http://localhost/hospital/hospital/contact.php");
}
?>