<?php
session_start();
if (isset($_SESSION['firstTimeAdmin']))
{
    unset($_SESSION['firstTimeAdmin']);
    echo '<script>window.alert("ادمین خوش آمدی")</script>';
}
try {
    $link = mysqli_connect("localhost", "root", "", "hospital");
} catch (Exception $exception) {
    echo $exception;
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
              <a
                      href="dashboard.php"
              >
                خوش امدید <bdi> مدیر سایت </bdi
                ><i class="fas fa-user-alt"></i>
              </a>
            </li>
            <li>
              <a onclick="logout()" style="cursor: pointer"> خروج از حساب <i class="fas fa-sign-out-alt"></i> </a>
            </li>
          </ul>
        </div>
      </nav>
    </header>

    <section id="report-table">
      <div class="container">
        <h2>گزارش رزورها <i class="fas fa-chart-pie"></i></h2>
        <table>
          <tr>
            <th>ساعت</th>
            <th>تاریخ</th>
            <th>نوع ویزیت</th>
            <th>نام</th>
            <th>ردیف</th>
          </tr>
            <?php
            $query="SELECT * FROM reservation ORDER BY date  ASC , time ASC";
            $result=mysqli_query($link,$query);
            $counter=1;
            foreach($result as $reserve) {
                echo "
          <tr>
            <td>$reserve[time]</td>
            <td>$reserve[date]</td>
            <td>$reserve[type]</td>
            <td>$reserve[name]</td>
            <td>$counter</td>
          </tr>";
                $counter++;
          }
          ?>

        </table>
      </div>
    </section>

    <footer id="main-footer" class="sticky-footer">
      <p><i class="fas fa-hospital"></i> Hospital.ir &copy; 2021</p>
    </footer>
  </body>
</html>
