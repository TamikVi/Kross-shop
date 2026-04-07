<?php 
include "blocks/db.php"; // Подключение к бд
if ($_POST) { // Проверка на пост данные
    $users = $conn->query("SELECT * FROM `users`
    WHERE `login` = '{$_POST['login']}'
    AND `password` = '{$_POST['password']}'");
    if ($users->num_rows != 0) { // Проверка, найден ли пользователь, если строка не = 0
        $user = $users->fetch_assoc(); // Получаем ассоциативный массив
        $_SESSION['user'] = [ // создание переменной 'user' в виде массива сданными пользователя
            'id' => $user['id'],
            'role' => $user['role_id'],
        ];
        
        header("Location: index.php"); // Перенаправление на главную страницу
    } else { // Если пользователь не найден
        $error = "Не верный логин или пароль";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/reset.css">
    <link rel="stylesheet" href="/css/style.css">
    <title>Вход</title>
</head>
<body>
    <main class="main">
        <div class="container__log">
            <div class="log__inner">
                <a class="log__btn-registration" href="/register.php">Регистрация</a>
                <a class="log__btn-login" href="">Вход</a>
                <div class="log__inner-inputs">
                    <form class="log-form" method="post" action="">
                        <input type="text" class="log-input" name="login" id="login" placeholder="Ваше имя">

                        <input type="password" class="log-input" name="password" id="password" placeholder="Пароль">
                        <button class="log-btn" type="submit">Вход</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
</body>
</html>