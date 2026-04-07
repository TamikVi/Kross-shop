<?php 
    session_start();
    // $_SESSION['user_id'] = $user['id'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/reset.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/header.css">
    <title>Document</title>
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="header-inner">
                
                <div class="header__logo">
                    <img class="header__logo-img" src="/imegess/logo/logo.svg" alt="">
                    <a href="/index.php">
                        <p class="header__logo-text">kross-shop</p>
                    </a>
                </div>
                
                    <div class="header__nav">
                        <div class="header__nav-login">
                            <?php
                            if (isset($_SESSION['user']['id'])):
                                $href = "/profile.php";  
                            else:
                                $href = "/login.php";  
                            endif;
                            ?>
                            <a class="header__nav__login-link" href="<?php echo $href; ?>">
                                <img class="header__nav__login__link-img" src="/imegess/icons/user.png" alt="">
                            </a>
                        </div>
                    
                    <!-- <div class="header__nav-like">
                        <a href="header__nav__like-link">
                            <img class="header__nav__like__link-img" src="/imegess/icons/like.png" alt="">
                        </a>
                    </div> -->
                    <div class="header__nav-shop">
                        <a href="header__nav__shop-link">
                            <img class="header__nav__shop__link-img" src="/imegess/icons/shop.png" alt="">
                        </a>
                    </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="header__span"></div>
    </header>
</body>
</html>