<?php
session_start();
if (isset($_SESSION['firstTime'])){
    if ($_SESSION['firstTime'])
    {
        unset($_SESSION['firstTime']);
        echo '<script>window.alert("به صفحه رزرو تایم خوش آمدید")</script>';
    }
}
if (isset($_SESSION['reservated']))
{
    if ($_SESSION['reservated'])
    {
        unset($_SESSION['reservated']);
        echo '<script>window.alert("این تایم از قبل پر شده است , لطفا تایمی دیگر را انتخاب کنید")</script>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="description" content="دندان پزشکی شهید رجایی" />
    <meta name="keywords" content="dentist,doctor,دندان پزشکی,شهید رجایی" />
    <link
            rel="stylesheet"
            href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
            integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay"
            crossorigin="anonymous"
    />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" media="screen and (max-width:768px)" href="./css/mobile.css">    
    <title>Hospital.ir | Reservation</title>
    <script src="logout.js"></script>
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
                    <a href="index.php"> خانه <i class="fas fa-home"></i></a>
                </li>
                <li>
                    <a href="about.php">
                        درباره ما <i class="fas fa-info-circle"></i
                        ></a>
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
                <li>
                    <a  onclick="logout()" style="cursor: pointer"> خروج از حساب <i class="fas fa-sign-out-alt"></i></a>
                </li>
            </ul>
        </div>
    </nav>
</header>

<section id="contact-form" class="py-3">
    <div class="container">
        <h1 class="l-heading">رزرو تایم</h1>
        <p>لطفا فیلد های زیر را پر کنید</p>
        <form action="submitReserve.php" method="post">
            <div class="form-group">
                <label for="khadamat">نوع خدمات</label>
                <select name="khadamat" required>
                    <option selected disabled value="">-- نوع خدمات --</option>
                    <option value="ortodensi" name="ortodensi" id="ortodensi">
                        ارتودنسی
                    </option>
                    <option value="impelant" name="impelant" id="impelant">
                        ایمپلنت
                    </option>
                    <option value="asabkeshi" name="asabkeshi" id="asabkeshi">
                        عصب کشی
                    </option>
                    <option value="porkardan" name="porkardan" id="porkardan">
                        پر کردن
                    </option>
                </select>
                <label for="time">تایم</label>
                <select name="time" required>
                    <option selected value="" disabled>-- تایم ویزیت --</option>
                    <option value="16 - 16,30">16 - 16,30</option>
                    <option value="16,40 - 17,10">16,40 - 17,10</option>
                    <option value="17,20 - 17,50">17,20 - 17,50</option>
                    <option value="18 - 18,30">18 - 18,30</option>
                    <option value="18,30 - 19">18,30 - 19</option>
                </select>
            </div>
            <div class="form-group">
                <label for="date">تایم </label>
                <input type="date" name="date" id="date" required />
            </div>
            <div class="form-group">
                <label for="message">توضیحات </label>
                <textarea
                        name="message"
                        id="message"
                        style="direction: rtl"
                        placeholder="اگر بیماری خاصی دارید یا نکته خاصی هست اعلام بفرمایید"
                ></textarea>
            </div>
            <button type="submit" class="btn">ارسال</button>
        </form>
    </div>
</section>

<section id="contact-info" class="bg-primary">
    <div class="container">
        <div class="box">
            <i class="fas fa-paper-plane fa-3x"></i>
            <h3>تلگرام</h3>
            <p>@rajai_dentist</p>
            <p>@rajai_programmers</p>
        </div>
        <div class="box">
            <i class="fas fa-phone fa-3x"></i>
            <h3>تلفن تماس</h3>
            <p>011-11111</p>
            <p>022-22222</p>
        </div>
        <div class="box">
            <i class="fas fa-at fa-3x"></i>
            <h3>ایمیل</h3>
            <p>rajaiDentist@yahoo.com</p>
            <p>rajai_programmers@yahoo.com</p>
        </div>
    </div>
</section>

<footer id="main-footer">
    <p><i class="fas fa-hospital"></i> Hospital.ir &copy; 2021</p>
</footer>
</body>
</html>
