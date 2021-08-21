<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="description" content="Welcome to the First Site" />
    <meta name="keywords" content="HTML ,CSS, PHP, developer" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" media="screen and (max-width:768px)" href="./css/mobile.css">    
    <title>Hospital.ir | About</title>
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
                        <a href="about.php" class="current">
                درباره ما <i class="fas fa-info-circle"></i
              ></a>
                    </li>
                    <li>
                        <a
                            <?php
                            if (isset($_SESSION['admin']))
                            {
                                ?>
                                href="dashboard.php"
                                <?php

                            }
                            else if (isset($_SESSION['isLogin']))
                            {
                                ?>
                                href="contact.php"
                                <?php
                            }
                            else
                            {
                                ?>
                                href="signup-login.php"
                                <?php

                            }
                            ?>
                        >
                            <?php
                            if (isset($_SESSION['admin']))
                            {
                                ?>
                                پنل مدیریت
                                <?php

                            }
                            else if (isset($_SESSION['isLogin']))
                            {
                                ?>
                                رزرو تایم
                                <?php
                            }
                            else
                            {
                                ?>
                                ورود/ثبت نام
                                <?php

                            }
                            ?>
                            <i class="fas fa-user-alt"></i
              ></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <section id="about-info" class="bg-light py-3">
        <div class="container">
            <div class="info-right">
                <h1 class="l-heading">معرفی دندانپزشکی شهید رجایی</h1>
                <p>
                    دندانپزشکی یکی از مراکزی می باشد که تمامی افراد جامعه با آن سر و کار دارند و حداقل سالیانه یک بار به این مراکز کلینیکی مراجعه می نمایند. تعداد مراکز کلینیکی دندانپزشکی در شهر تهران بسیار زیاد می باشند و مرکزی مانند کلینیک تخصصی
                    <a href="index.php" style="color: blue">دندانپزشکی دانشگاه شهید رجایی
                        </a> که از تمامی جهات نمونه باشد در جذب بیماران می تواند موفق عمل کنند
                </p>
                <p>
                    از دیگر موارد که کلینیک های دندانپزشکی بایستی به صورت ویژه آن را مورد توجه قرار دهند ایجاد یک فضای مناسب و آرامش بخش به عنوان اتاق انتظار برای بیماران و همراهان آنها می باشد. تمامی افراد به این موضوع واقف هستند که به دلیل مشخص نبودن زمان عملیات دندانپزشکی
                    این امکان وجود دارد که گاهی حتی تا چند ساعت مجبور به انتظار کشیدن جهت رسیدن نوبت خویش باشند و این موضوع امری اجتناب ناپذیر می باشد، پس بایستی فضایی در کلینیک ایجاد شده باشد تا موجبات آسایش هر چه بیشتر بیماران و همراهان آنها را به وجود
                    آورد
                </p>
            </div>
            <div class="info-left">
                <i class="fas fa-h-square fa-10x"></i>
            </div>
        </div>
    </section>

    <div class="clr"></div>

    <section id="testimonials" class="py-3">
        <div class="container">
            <h2 class="l-heading">اسامی پزشکان و کادر درمانی</h2>
            <div class="testimonial bg-primary">
                <img src="./img/person-1.jpg"alt="doc1" />
                <p>
                    پزشک اصلی آقای دکتر و ..... بوده و از دستیاران اصلی ایشون میتوان به دکتر .... و دکتر ..... و همچنین از متخصصین بخش بیهوشی استاد ..... اشاره کرد
                </p>
                <p>
                    از آقایان حاضر در کادر درمانی میتوان آقای .... و آقای .... و آقای ... و آقای .... نیز اشاره کرد
                </p>
            </div>

            <div class="testimonial bg-primary">
                <img src="./img/person-2.jpg" alt="doc2" />
                <p>
                    پزشک اصلی در بخش ارتودنسی خانم دکتر و ..... بوده و از دستیاران اصلی ایشون میتوان به دکتر .... و دکتر ..... و همچنین از متخصصین بخش بیهوشی استاد ..... اشاره کرد

                </p>
                <p>
                    از خانم های حاضر در کادر درمانی میتوان خانم .... و خانم .... و خانم ... و خانم .... نیز اشاره کرد
                </p>
            </div>
        </div>
    </section>

    <footer id="main-footer">
        <p><i class="fas fa-hospital"></i> Hospital.ir &copy; 2021</p>
    </footer>
</body>

</html>