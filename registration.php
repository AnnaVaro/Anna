<?php
$title = "Регистрация";
$h1 = "Регистрация";
require_once __DIR__ . '/db.php';

$success = false;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $db->exec('insert into users_crypt(username, password) values (?,?)', $username, password_hash($password, PASSWORD_BCRYPT));

    $success = true;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="/css/style.css">
        <meta name="robots" content="noindex,nofollow"/>
        <title><?php echo $title; ?></title>
    </head>
    <body>
        <div class="container">
            <div class="header">
                <!-- Создание меню-->
                <header>
                    <img src="images/knowknow1.png" class="logo">
                    <?php include "./menu.php"; ?>
                </header>
            </div>
            <div class="content">
                <h1><?php echo $h1; ?></h1>
                <?php if ($success) : ?>
                    <div class="message">Регистрация прошла успешно</div>
                <?php endif ?>
                <form action="" method="post">
                    <label>Логин:</label><br/>
                    <input type="text" name="username"/><br/>

                    <label>Пароль:</label><br/>
                    <input type="password" name="password"/><br/><br/>

                    <input type="submit" value="Загегистрироваться"/><br/>
                </form>
                <p><a href="login.php">Авторизация</a></p>
            </div>
            <?php include "./footer.php"; ?>
        </div>
    </body>
</html>