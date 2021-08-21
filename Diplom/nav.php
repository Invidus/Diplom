<!DOCTYPE html>

<head>
    <link rel="shortcut icon" href="./Images/favicon.ico" type="image/x-icon">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./css/Style.css" />
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


</head>
<html>

<body>
    <Header>
        <nav class="navbar navbar-expand-lg navbar-light ">
            <a class="navbar-brand brand-logo" href="index.php"><img class="logo" src="Images/HLogo.png" alt="logo" width="100px" height="87px"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <form method="POST">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Главная </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="calculate.php">Расчет калорий</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="news.php">Новости</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="support.php">Поддержка</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contacts">Контакты</a>
                        </li>
                        <ul class="navbar-nav mr-auto ">
                            <li class="nav-item hideIt">
                                <a style="visibility:hidden" class="nav-link">Главная </a>
                            </li>
                        </ul>
                        <?
                        if ($_COOKIE['user'] == "") {
                            require("enter.php");
                        } else {
                            require("exit.php");
                        }
                        ?>

                    </ul>
                </form>
                <div class="box">



                    <!-- <div class="container-4">
                        <a href = "">Регистрация</a>/<a href = "">Вход</a>
                    </div> -->
                </div>
            </div>
        </nav>
    </Header>
    <script src="exit.js"></script>
</body>

</html>