<?php
session_start();
$title = "Авторизация";
$h1 = "Авторизация";
require_once __DIR__ . '/db.php';

$isAuth = -1;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $user = $db->queryOne('select id, password as hash from users_crypt where username=?', $username);

    $isAuth = 0;

    if ($user) {
        if(password_verify($password, $user['hash'])){
            $_SESSION['user'] = $user;
            if(isset($_GET['back'])) {
                header('Location: /cart.php');
                exit;
            }
            $isAuth = 1;
        }
    }
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
        <form action="" method="post">
            <label>Логин:</label><br/>
            <input type="text" name="username"/><br/>

            <label>Пароль:</label><br/>
            <input type="password" name="password"/><br/><br/>

            <input type="submit" value="Авторизоваться"/><br/>
            <?php
            switch ($isAuth) {
                case 1:
                    echo '<div class="message">Авторизация прошла успешно</div>';
                    break;
                case 0:
                    echo '<div class="error">Неверный логин и(или) пароль</div>';
                    break;
            }
            ?>
        </form>
        <p><a href="registration.php">Регистрация</a></p>
    </div>
    <?php include "./footer.php"; ?>
</div>
</body>
</html>