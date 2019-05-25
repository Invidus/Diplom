<!DOCTYPE html>
<html>

<body>
    <Header>
        <nav class="navbar navbar-expand-lg navbar-light ">
            <a class="navbar-brand brand-logo" href="index.php"><img class="logo" src="images/HLogo.png" alt="logo" width="100px" height="87px"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <form method = "POST">
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
                    <li class="nav-item">
                    </li>
                    <?
                        require("exit.php");
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
    <script src = "exit.js"></script>
</body>

</html>