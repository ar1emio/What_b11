<?php
    $host       = "db4.myarena.ru";       // Адрес сервера базы данных
    $dbname     = "u19978_b11";           // Имя базы данных
    $user       = "u19978_b11";           // Имя пользователя
    $password   = "lL9bE1jS5v";               // Пароль
    
    try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $password);
        // Устанавливаем режим обработки ошибок PDO
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Подключение успешно";
    } 
    catch(PDOException $e) {
        echo "Ошибка подключения: " . $e->getMessage();
    }
    ?>
    