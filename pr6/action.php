<?php 
    if( $_SERVER['REQUEST_METHOD'] === 'POST' ) {
        if( $_SERVER['REQUEST_METHOD'] !== 'POST' ) exit;
        /*
         Запрос имеет тип POST, обрабатываем данные
        */ 

        if(empty($_POST['name'])) exit('Поле "Имя" не заполнено');
        if(preg_match("/\d+/", $_GET['name'])) exit ('Поле "Имя" введено некорректно');
        if(empty($_POST['age'])) exit('Поле "возраст" не заполнено');
        if((int)$_POST['age'] < 1) exit('Ваш "возраст" введено отрицательное или НЕ числовое значение');
                    

        echo 'Здравствуйте, '.htmlspecialchars($_POST['name']).'. <br>';
        echo 'Вам '.(int)$_POST['age'].' лет.'.'<br>';
    } 
?>

