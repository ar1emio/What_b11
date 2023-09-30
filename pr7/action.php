<?php 
        if( $_SERVER['REQUEST_METHOD'] !== 'POST' ) exit;
        /*
         Запрос имеет тип POST, обрабатываем данные
        */ 

        if(empty($_POST['login'])) exit('Поле "Логин" не заполнено');
        if(empty($_POST['password'])) exit('Поле "Пароль" не заполнено');
        if(empty($_POST['password1'])) exit('Поле "Подтвердите пароль" не заполнено');
            if($_POST['password'] !== $_POST['password1']) exit('Пароли не совпадают');
        if(empty($_POST['email'])) exit('Поле "Почта" не заполнено');


        echo 'Здравствуйте! '.htmlspecialchars($_POST['name']).'. <br>';
        echo 'Ваш аккаунт создан!'.'<br>';
     
?>

