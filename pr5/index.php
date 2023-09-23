<?php
    $host       = "db4.myarena.ru";       // Адрес сервера базы данных
    $dbname     = "u19978_b11";           // Имя базы данных
    $user       = "u19978_b11";           // Имя пользователя
    $password   = "lL9bE1jS5v";               // Пароль
    $connection = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $password);
    
    $result = $connection->query('SELECT * FROM `product`');

    if ($result){
        if ($result->rowCount() ==0){
            echo "Таблица пустая";
        } else {
    
    echo '<table border="1">';

    echo "<tr>";
    for($i - 0; $i < $result->columnCount();$i++){
        $column = $result->getColumnMeta($i);
        echo "<th>{$column['name']}</th>";
    }
    echo"</tr>";

    while($row = $result->fetch( PDO::FETCH_ASSOC )){
        echo '<tr>';
        foreach ($row as $key => $value) {
        echo '<td>'.$value.'</td>';
    }
    echo '</tr>';
}
echo '<table>';
        }}
        else {
            echo 'Запрос выполнен с ошибкой';
        }

    ?>