<?php
session_start();
session_destroy();
header("Location: http://localhost/hospital/hospital/index.php");
?>