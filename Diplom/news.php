<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>News</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/Style.css">
    <link rel="stylesheet" href="./css/News.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <!-- nav -->
        <?php
        include('nav.php');
        ?>
        <!-- end nav -->
        <div>
            <h3 style="text-align:center; margin-bottom:20px;">Интересные новости</h3>
            <hr>
        </div>
        <div class="newsGrid">
            <?
            require("connect.php");

            $count = 0;
            $query = "select * from `news`;";
            $result = mysqli_query($link, $query) or die("Error sql" . mysql_error($link));
            while ($row = mysqli_fetch_array($result)) {

                if ($count == 0) {
                    echo '<div >
                    <img class = "newsImages" src="' . $row[img] . '" width="100%" alt="imgNews">
                </div>
                <div class = "newBlock">
                    <div class = "newsText"><h4>' . $row[header] . '</h4></div>
                    <div class = "newsText">' . $row[text] . '
                    </div>
                </div>';
                    $count = 1;
                } else {
                    echo '
                <div class = "newBlock">
                    <div class = "newsText"><h4>' . $row[header] . '</h4></div>
                    <div class = "newsText">' . $row[text] . '
                    </div>
                </div>
                <div >
                    <img class = "newsImages" src="' . $row[img] . '" width="100%" alt="imgNews">
                </div>
                ';
                    $count = 0;
                }
            }
            ?>


        </div>

        <?
        if ($_SESSION['login'] == "admin") {
            echo '<form method = "POST">
                <input name = "img" class="form-control" type="text" placeholder="Ссылка на изображение"/>
                    <input name = "hdr" class="form-control" type = "text" placeholder="Заголовок"/>
                    <input  name = "text" class="form-control" type = "text" placeholder="Текст"/>
                    <button name = "addNews" id = "addNews" class="btn btn-primary" type="submit">Добавить новость</button>
                    </form>';
            echo '<form method = "POST">
                <input name = "deli" class="form-control" type="text" placeholder="Удаление по заголовку"/>
                    <button name = "del" id = "del" class="btn btn-primary" type="submit">Удалить новость</button>
                    </form>';

            if (isset($_POST['addNews'])) {
                $img = $_POST['img'];
                $hdr = $_POST['hdr'];
                $text = $_POST['text'];
                $query = "insert into `news` values('0','$img','$hdr','$text');";
                $result = mysqli_query($link, $query) or die("Error sql" . mysql_error($link));
            }
            if (isset($_POST['del'])) {
                $hdr = $_POST['deli'];
                $query = "delete from `news` where header = '$hdr'";
                $result = mysqli_query($link, $query) or die("Error sql" . mysql_error($link));
            }
        }
        ?>



    </div>
    <!-- footer  -->
    <?php
    include('footer.php');
    ?>
    <!-- footer end -->
</body>

</html>