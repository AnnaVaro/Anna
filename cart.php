<?php
session_start();
require_once __DIR__ . '/db.php';

$title = "Корзина";
$h1 = "Корзина";

if (!isset($_SESSION['user'])) {
    $_SESSION['back'] = $_POST;
    header('Location: /login.php?back='.$_SERVER['REQUEST_URI']);
    exit;
}

if(isset($_SESSION['back']) || $_SERVER['REQUEST_METHOD'] == 'POST') {

    if(isset($_POST['delete'])) {
        $db->exec('delete from cart where id = ?', $_POST['id']);
    }
    else {
        if(isset($_SESSION['back'])) {
            $cartToAdd = $_SESSION['back'];
            unset($_SESSION['back']);
        }
        else {
            $cartToAdd = $_POST;
        }
        $db->exec('insert into cart(goodId, userId) values (?,?)', $cartToAdd['id'], $_SESSION['user']['id']);

    }
}

$cartGoods = $db->queryAll('SELECT `cart`.`id` AS `cartId`, ca.`id`, ca.`img`, ca.`name`, ca.`price` FROM `catalog` AS ca LEFT JOIN `cart` ON `cart`.`goodId` = ca.id WHERE `cart`.`userId` = ?', $_SESSION['user']['id']);

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
		<form action="" method="post">
            <?php if(count($cartGoods)): ?>
			<table border="1">
                <tr>
                    <th>Фото</th>
                    <th>Наименование</th>
                    <th>Стоимость</th>
                    <th>#</th>
                </tr>
                <?php foreach ($cartGoods as $good): ?>
                <tr>
                    <td><img src="<?php echo $good['img']; ?>" alt="<?php echo $good['name']; ?>" width="100" /></td>
                    <td><?php echo $good['name']; ?></td>
                    <td><?php echo $good['price']; ?></td>
                    <td>
                        <input type="hidden" name="id" value="<?php echo $good['cartId']; ?>" />
                        <input type="submit" name="delete" value="Удалить" />
                    </td>
                </tr>
                <?php endforeach;?>
            </table>
			<input type="submit" value="Отправить">
            <?php else: ?>
            <div>Корзина пуста</div>
            <?php endif; ?>
            <br/><br/><br/><br/>
		</form> 
	</div>
    <?php include "./footer.php"; ?>
</body>
</html>