<?php 
    include "blocks/db.php"; // Подключение к БД

        if($_POST){ // Проверка, были ли отправлены POST-данные. Если да - выполняем код внутри   
            $users = $conn->query("SELECT * FROM 'users'
                WHERE 'login' = '{$_POST['login']}'"); // Попытка выбрать пользователя с таким же логин 
            if($users->num_rows == 0){ // Если пользователь с таким логином не найден, то выполняем вставку
                $conn->query("INSERT INTO `users` (`id`, `login`, `email`, `phone`, `password`) VALUES 
                (NULL, '{$_POST['login']}', '{$_POST['email']}', '{$_POST['phone']}', '{$_POST['password']}');");

                header("Location: login.php"); // Перенаправление на страницу авторизации 
            }else{ // Если пользователь с таким логином уже существует
                $error = "Такой пользователь существует!"; // выводим ошибку
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
    <title>Регистрация</title>
</head>
<body>
    <main class="main">
        <div class="container__reg">
            <div class="reg__inner">
                <a class="reg__btn-registration" href="">Регистрация</a>
                <a class="reg__btn-login" href="/login.php">Вход</a>
                <div class="reg__inner-inputs">
            
                    <form class="reg-form" method="post" action="" >
                        <input type="text" class="reg-input" name="login" id="login" placeholder="Ваше имя" required>

                        <input type="email" class="reg-input" name="email" id="email" placeholder="Ваш e-mail" required>

                        <input type="tel" class="reg-input" name="phone" id="phone" placeholder="Ваш Телефон" required>

                        <input type="password" class="reg-input" name="password" id="password" placeholder="Пароль" required>
                        <?php if(isset($error)){
                            echo "<p style='color: red'>$error</p>";
                        } ?>
                        <button class="reg-btn" type="submit">Зарегистрироваться</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <script src="./scripts/jquery-3.7.1.min.js"></script>
    <script src="/scripts/jquery.maskedinput.min.js"></script>
    <script src="/scripts/reg.js"></script>
</body>
</html>