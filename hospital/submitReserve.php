<?php
session_start();
$date=$_POST['date'];
$name=$_SESSION['username'];
$_SESSION['isLogin']=false;
$message=$_POST['message'];
$type=$_POST['khadamat'];
$time=$_POST['time'];
try {
    $link = mysqli_connect("localhost", "root", "", "hospital");
} catch (Exception $exception) {
    echo $exception;
}
$query="SELECT * FROM reservation WHERE time='$time' AND date ='$date'";
$result=mysqli_query($link, $query);
if(mysqli_num_rows($result)>0)
{
    $_SESSION['reservated']=true;
    header("Location: http://localhost/hospital/hospital/contact.php");
}
else {
    $query = "INSERT INTO reservation (type,name,date,message,time) VALUES ('$type','$name','$date','$message','$time')";
    mysqli_query($link, $query);
    $_SESSION['reservationFinish'] = true;
    header("Location: http://localhost/hospital/hospital/index.php");
}
?>