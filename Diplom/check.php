<?php
    // Убираем пробелы трим, хтмл и прочий мусор из логина
    $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
    $name = filter_var(trim($_POST['fname']), FILTER_SANITIZE_STRING);
    $lastname = filter_var(trim($_POST['lname']), FILTER_SANITIZE_STRING);
    $surname = filter_var(trim($_POST['surname']), FILTER_SANITIZE_STRING);


?>