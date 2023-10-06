<?php 
    $host       = "db4.myarena.ru";       // Адрес сервера базы данных
    $dbname     = "u19978_b11";           // Имя базы данных
    $user       = "u19978_b11";           // Имя пользователя
    $password   = "lL9bE1jS5v";               // Пароль
    $connection = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $password); 
        
        if( $_SERVER['REQUEST_METHOD'] !== 'POST' ) exit;

            if(empty($_POST['login'])) exit('Поле "Логин" не заполнено');
            if(empty($_POST['password'])) exit('Поле "Пароль" не заполнено');

                $len = strlen($_POST['password']);
                if($len<8) exit('В поле "пароль" введено мало символов'); 
                if($len>20) exit('В поле "пароль" введено мало символов'); 

            if(empty($_POST['password1'])) exit('Поле "Подтвердите пароль" не заполнено');
            if($_POST['password'] !== $_POST['password1']) exit('Пароли не совпадают');
            if(empty($_POST['email'])) exit('Поле "Почта" не заполнено');

        $date = [$_POST['login'], $_POST['password'], $_POST['password1'], $_POST['email']];
        $res = $con -> prepare ("INSERT INTO `users` (`login`, `password`, `password1`, `email`) VALUES (?,?,?,?);");
        $res = $res -> execute ($date);

        if( $res ){
            exit('Регистрация прошла успешно');
        }

        exit('Ошибка регистрация');
    
?>

