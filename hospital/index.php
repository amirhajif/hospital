<?php
session_start();
if (isset($_SESSION['reservationFinish']))
{
    if ($_SESSION['reservationFinish'])
    {
        unset($_SESSION['reservationFinish']);
        echo '<script>window.alert("رزرو با موفقیت انجام شد")</script>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="description" content="Welcome to the First Site" />
    <meta name="keywords" content="HTML ,CSS, PHP, developer" />
    <script src="https://kit.fontawesome.com/e95a8ce8bc.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css" />

    <title>Hospital.ir | Main</title>
</head>

<body>
        <header>
            <nav id="navbar">
                <div class="container">
                    <h1 class="logo">
                        <a href="index.php">
                            <i class="fas fa-hospital"></i> Hospital.ir
                        </a>
                    </h1>
                    <ul>
                        <li>
                            <a class="current" href="index.php">
                خانه <i class="fas fa-home"></i
              ></a>
                        </li>
                        <li>
                            <a href="about.php">
                درباره ما <i class="fas fa-info-circle"></i></a>
                        </li>
                        <li>
                            <a href="signup-login.php">
                                <?php
                                if (isset($_SESSION['isLogin']))
                                {
                                    if ($_SESSION['isLogin'])
                                    {?>
                                         رزرو تایم
                                <?php
                                    }
                                    else
                                    {
                                        ?>
                                        ورود/ثبت نام
                                        <?php

                                    }
                                }
                                else
                                {
                                    ?>
                                ورود/ثبت نام
                                <?php
                                }
                                ?>
                                <i class="fas fa-user-alt"></i></a>
                        </li>
                    </ul>
                </div>
            </nav>

            <div id="showcase">
                <div class="container">
                    <div class="showcase-content">
                        <h1>دندانپزشکی دانشجویان شهید رجایی </h1>
                        <p class="lead">
                            این سایت توسط دانشجویان مهندسی کامپیوتر رجایی برای پزشکان فارغ التحصیل این دانشگاه نوشته شده است
                        </p>
                        <a class="btn" href="about.php"> اطلاعات بیشتر  </a>
                    </div>
                </div>
            </div>
        </header>

        <section id="home-info" class="bg-dark">
            <div class="info-img"></div>
            <div class="info-content">
                <h2>متخصصین دندانپزشکی</h2>

                <?php
                try {
                    $link=mysqli_connect("localhost","root","","hospital");
                }
                catch (Exception $exception){
                    echo $exception;
                }
                mysqli_query($link,"SET NAMES utf8");
                $query ="SELECT * FROM description WHERE id=1";
                $result=mysqli_query($link,$query);
                $row=mysqli_fetch_array($result);
                echo "<p>";
                echo $row['info'];
                echo "</p>";
                ?>

                <a href="about.php" class="btn"> اطلاعات بیشتر </a>
            </div>
        </section>

        <section id="features">
            <div class="box bg-light">
                <i class="fas fa-ambulance fa-3x"></i>
                <h3>تجهیزات</h3>
                <p>
                    از جمله ابزار های روز و مدرن مورد استفاده ما میتوان به اسکلیر,دریل دندانپزشکی ,تابوره های دندانپزشکی و ..... اشاره کرد
                </p>
            </div>
            <div class="box bg-primary">
                <i class="fas fa-heartbeat fa-3x"></i>
                <h3>کادر پشتیبانی</h3>
                <p>
                    در دندانپزشکی عمل های سنگینی از جمله ایمپلنت نیز انجام می شود و در دندانپزشکی ما متخصصین بیهوشی با تجربه بدین منظور دايم حضور دارند
                </p>
            </div>
            <div class="box bg-light">
                <i class="fas fa-user-md fa-3x"></i>
                <h3>جراحی ها و تخصص </h3>
                <p>
                    در دندانپزشکی ما جراحی هایی همچئن ایمپلنت و ارتودنسی و همچنین جرم گیری کامپوزیت و... انجام میشود
                </p>
            </div>
        </section>

        <div class="clr"></div>

        <footer id="main-footer">
            <p><i class="fas fa-hospital"></i> Hospital.ir &copy; 2021</p>
        </footer>
</body>

</html>