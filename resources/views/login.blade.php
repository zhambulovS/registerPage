<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=asset('/css/style.css')?>"/>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" href="https://habrastorage.org/getpro/moikrug/uploads/company/510/408/900/logo/medium_df93ac94e79f9c169edadc415c345548.png" sizes="16x16">
    <title>KTZ | Войти | Регистрация</title>
</head>
<body>
<div class="wrapper">
    <nav class="nav">
        <div class="nav-logo">
            <img src="/image/kazakhstan-railways-logo-removebg-preview.png" alt="Kazakhstan Railways Logo">
        </div>

        <div class="nav-menu" id="navMenu">
            <ul>
                <li><a href="#" class="link active">Главный</a></li>
                <li><a href="#" class="link">Новости</a></li>
                <li><a href="#" class="link">Услуги</a></li>
                <li><a href="#" class="link">О компаний</a></li>
            </ul>
        </div>
        <div class="nav-button">
            <button class="btn white-btn" id="loginBtn" onclick="login()">Войти</button>
            <button class="btn" id="registerBtn" onclick="register()">Регистрация</button>
        </div>
        <div class="nav-menu-btn">
            <i class="bx bx-menu" onclick="myMenuFunction()"></i>
        </div>
    </nav>

    <!----------------------------- Form box ----------------------------------->
    <div class="form-box">

        <!------------------- login form -------------------------->

        <div class="login-container" id="login">
            <div class="top">
                <span>У вас нету аккаунта<a href="#" onclick="register()">Регистрация</a></span>
                <header>Войти</header>
            </div>
            <div class="input-box">
                <input type="text" class="input-field" placeholder="Логин или почта ">
                <i class="bx bx-user"></i>
            </div>
            <div class="input-box">
                <input type="password" class="input-field" placeholder="Пароль">
                <i class="bx bx-lock-alt"></i>
            </div>
            <div class="input-box">
                <input type="submit" class="submit" value="Войти">
            </div>
            <div class="two-col">
                <div class="one">
                    <input type="checkbox" id="login-check">
                    <label for="login-check"> Запомнить меня</label>
                </div>
                <div class="two">
                    <label><a href="#">Забыли пароль?</a></label>
                </div>
            </div>
        </div>

        <!------------------- registration form -------------------------->
        <div class="register-container" id="register">
            <div class="top">
                <span>У вас есть аккаунт <a href="#" onclick="login()">Войти</a></span>
                <header>Регистрация</header>
            </div>
            <div class="two-forms">
                <div class="input-box">
                    <input type="text" class="input-field" placeholder="Полный имя">
                    <i class="bx bx-user"></i>
                </div>
                <div class="input-box">
                    <input type="text" class="input-field" placeholder="Фамилия">
                    <i class="bx bx-user"></i>
                </div>
            </div>
            <div class="input-box">
                <input type="text" class="input-field" placeholder="Почта">
                <i class="bx bx-envelope"></i>
            </div>
            <div class="input-box">
                <input type="password" class="input-field" placeholder="Пароль">
                <i class="bx bx-lock-alt"></i>
            </div>
            <div class="input-box">
                <input type="submit" class="submit" value="Регистрация">
            </div>
            <div class="two-col">
                <div class="one">
                    <input type="checkbox" id="register-check">
                    <label for="register-check"> Запомнить меня</label>
                </div>
                <div class="two">
                    <label><a href="#">Политика конфиденциальности и Условия использования</a></label>
                </div>
            </div>
        </div>
    </div>
</div>


<script>

    function myMenuFunction() {
        var i = document.getElementById("navMenu");

        if(i.className === "nav-menu") {
            i.className += " responsive";
        } else {
            i.className = "nav-menu";
        }
    }

</script>

<script>

    var a = document.getElementById("loginBtn");
    var b = document.getElementById("registerBtn");
    var x = document.getElementById("login");
    var y = document.getElementById("register");

    function login() {
        x.style.left = "4px";
        y.style.right = "-520px";
        a.className += " white-btn";
        b.className = "btn";
        x.style.opacity = 1;
        y.style.opacity = 0;
    }

    function register() {
        x.style.left = "-510px";
        y.style.right = "5px";
        a.className = "btn";
        b.className += " white-btn";
        x.style.opacity = 0;
        y.style.opacity = 1;
    }

</script>

</body>
</html>
