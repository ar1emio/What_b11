<!DOCTYPE HTML>
    <HTML lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>pr8</title>
            <Style>
        .error{
            color: red;
        }
        </style>
    </head>
    <body>
        <form action="action.php" method="post">
        <p><span class="error"> * обязательное поле </span></p>
            <p>Логин:<span class="error">* <input type="text" name="name" required></p>
            <p>Пароль:<span class="error">* <input type="password" name="password" required></p>
            <p><input type="submit" value="Зарегестрироваться"></p> 
        </form>
    </body>
</html>