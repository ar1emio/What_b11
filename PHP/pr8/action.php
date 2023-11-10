<?php 
    $host       = "db4.myarena.ru";       // Адрес сервера базы данных
    $dbname     = "u19978_b11";           // Имя базы данных
    $user       = "u19978_b11";           // Имя пользователя
    $password   = "lL9bE1jS5v";               // Пароль
    $connection = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $password); 
        
    $link = '<a href="../index.php">На главную</a>';
    if( $_SERVER['REQUEST_METHOD'] !== 'POST' ) exit;{
            if(empty($_POST['name'])) exit('Поле "логин" не заполнено');
            if(empty($_POST['password'])) exit('Поле "пароль" не заполнено');
    }
    $userLogin=$_POST['login'];
    $stmt = $connection->prepare("SELECT * FORM `user` WHERE `login` = ? or `mail` =?");
    $stmt->execute([$userLogin,$userLogin]);
    if (!$stmt->rowCount()){
            exit('Такого пользователя не существует'.'<br>'.$link);
            die;
    }     
    $userPassword = $_POST['password'];
    if (password_verify($_POST['password'],$userPassword)){
            if(password_needs_rehash($userPassword, PASSWORD_DEFAULT)){
                    $pas_hash=password_hash($_POST['password'],PASSWORD_DEFAULT);
                    $stmt = $connection->prepare('UPDATE `user` SET `password` = :password WHERE `login` = :login');
                    $stmt->execute(['login' =>$_POST['login'],'password' => $pas_hash,]);
            }
            exit('Пароль неверен')
    }
    //создание нового пользователя
    $date = [ $_POST['name'], $pas_hash, $_POST['mail']];
    $res = $connection->prepare("INSERT INTO `PF7_users` (`name`,`password`,`Email`) VALUES (?,?,?);");
    $res = $res->execute($date);
    if($res){
            exit('Регистрация прошла успешно');
    }
    exit('Ошибка регистрации');

    $pas_hash=password_hash($_POST['password'],PASSWORD_DEFAULT);
?>

