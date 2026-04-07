<?php 
    session_start();
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/profile.css">
    <title>Document</title>
</head>
<body>
    <?php require_once "blocks/header.php"; ?>
    <main class="main">
        <div class="container">
            <div class="profile">
                <div class="profil__titel">
                    Личный кабинет
                </div>
                <div class="profile__form">
                    <h4 class="profil__blocks-title">Мои данные</h4>
                    <form class="profil__blocks" action="">

                        <!-- 1 -->
                        <div class="profil__block">
                            <p class="profil__block-text">Имя</p>
                            <div class="profil__block-content">
                                <div class="profil__block-content-input">
                                    <div class="profil__block-content__input-wrapper">
                                        <input type="text" autocomplete="off" placeholder="Ваше имя">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- 2 -->
                        <div class="profil__block">
                            <p class="profil__block-text">Фамилия</p>
                            <div class="profil__block-content">
                                <div class="profil__block-content-input">
                                    <div class="profil__block-content__input-wrapper">
                                        <input type="text" autocomplete="off" placeholder="Ваша фамилия">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- 3 -->
                        <div class="profil__block">
                            <p class="profil__block-text">Дата рождения</p>
                            <div class="profil__block-content">
                                <div class="profil__block-content-input">
                                    <div class="profil__block-content__input-wrapper">
                                        <input type="text" autocomplete="off" placeholder="Дата рождения">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- 4 -->
                        <div class="profil__block">
                            <p class="profil__block-text">Пол</p>
                            <div class="profil__block-content">
                                <div class="profil__block__content-group">
                                    <label for="" class="pro__blo__con-checkdox">
                                        <span class="pro__checkbox-input">
                                            <input class="profil__block-checkbox" id="input1" type="checkbox" value="meta">
                                        </span>
                                        <span class="pro__checkbox-text"><p>Женский</p></span>
                                    </label>
                                    <label for="" class="pro__blo__con-checkdox">
                                        <span class="pro__checkbox-input">
                                            <input class="profil__block-checkbox" id="input2" type="checkbox" value="meta">
                                        </span>
                                        <span class="pro__checkbox-text"><p>Мужской</p></span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <!-- 5 -->
                        <div class="profil__block">
                            <p class="profil__block-text">Номер телефона</p>
                            <div class="profil__block-content">
                                <div class="profil__block-content-input">
                                    <div class="profil__block-content__input-wrapper">
                                        <input type="text" autocomplete="off" placeholder="Номер телефона">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- 6 -->
                        <div class="profil__block">
                            <p class="profil__block-text">E-mail</p>
                            <div class="profil__block-content">
                                <div class="profil__block-content-input">
                                    <div class="profil__block-content__input-wrapper">
                                        <input type="text" autocomplete="off" placeholder="E-mail">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button>Сохранить</button>
                        <a href="logout.php">Выйти</a>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <?php require_once "blocks/footer.php"; ?>


    <script src="/js/profile.js"></script>
</body>
</html>