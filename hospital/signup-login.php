<?php
session_start();
if (isset($_SESSION['isLogin']))
{
    if ($_SESSION['isLogin']==true)
    {
        header("Location: http://localhost/hospital%20-%20new/hospital/contact.php");
    }
}
if (isset($_SESSION['failSignin']))
{
    if ($_SESSION['failSignin'])
    {
        unset($_SESSION['failSignin']);
        echo '<script>window.alert("مشکلی در ورود  رخ داده است نام کاربری و رمزعبور را چک کنید")</script>';
    }
}
if (isset($_SESSION['failSignUp']))
{
    if ($_SESSION['failSignUp'])
    {
        unset($_SESSION['failSignUp']);
        echo '<script>window.alert("مشکلی در ساخت اکانت رخ داده است نام کاربری را چک کنید")</script>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <script src="https://kit.fontawesome.com/e95a8ce8bc.js"  crossorigin="anonymous"></script>
    <title>Hospital.ir | Login/Signup</title>
    <link rel="stylesheet" href="./css/style.css" />
  </head>
  <body>
    <nav id="navbar">
      <div class="container">
        <h1 class="logo">
          <a href="index.php"> <i class="fas fa-hospital"></i> Hospital.ir </a>
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
            <a href="signup-login.php" class="current"
              >ورود/ثبت نام <i class="fas fa-user-alt"></i
            ></a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="form-container">
      <div class="form">
        <div class="blueBg">
          <div class="box signin">
            <h2>در حاضر اکانت دارید؟</h2>
            <button class="signinBtn">وارد شوید</button>
          </div>

          <div class="box signup">
            <h2>اکانت ندارید؟</h2>
            <button class="signupBtn">ثبت نام</button>
          </div>
        </div>

        <div class="formBx">
          <div class="form signinForm">
            <form name="signin" action="checkSignin.php" method="post">
              <h3>ورود</h3>
              <input type="text" placeholder="نام کاربری" id="username" name="username" required/>
              <input type="password" placeholder="رمز عبور" id="password" name="password" required/>
              <input type="submit" value="ورود" />
              <br />
              <a href="#" class="forgot">رمز عبورتان را فراموش کرده اید؟</a>
            </form>
          </div>

          <div class="form signupForm">
            <form name="signup" action="checkSignup.php" method="post" >
              <h3>ثبت نام</h3>
              <input type="text" placeholder="نام کاربری" id="username" name="username" required/>
              <input type="email" placeholder="ایمیل" id="email" name="email" required/>
              <input type="password" placeholder="رمز عبور" id="password" name="password" required/>
              <br />
              <input type="submit" value="ثبت نام"  />
            </form>
          </div>
        </div>
      </div>
    </div>

    <footer id="main-footer">
      <p><i class="fas fa-hospital"></i> Hospital.ir &copy; 2021</p>
    </footer>

    <script>
      const signinBtn = document.querySelector(".signinBtn");
      const signupBtn = document.querySelector(".signupBtn");
      const formBx = document.querySelector(".formBx");
      const formContainer = document.querySelector(".form-container");
      const navbar = document.getElementById("navbar");
      const footer = document.getElementById("main-footer");

      signupBtn.onclick = function () {
        formBx.classList.add("active");
        formContainer.classList.add("active");
        navbar.classList.add("changeColor");
        footer.classList.add("changeColor");
      };
      signinBtn.onclick = function () {
        formBx.classList.remove("active");
        formContainer.classList.remove("active");
        navbar.classList.remove("changeColor");
        footer.classList.remove("changeColor");
      };
    </script>
  </body>
</html>
