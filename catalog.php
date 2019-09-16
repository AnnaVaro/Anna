<?php
$title = "Обучение";
$h1 = "Темы обучение";
function catalog($id=null) {
    $link = mysqli_connect("127.0.0.1", "root", "", "anna");

    if (!$link) {
        echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
        echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }

    mysqli_set_charset($link, "utf8");

    if($id) {
        mysqli_query($link, "UPDATE `catalog` SET `likes`=`likes`+1 WHERE `id`=".mysqli_real_escape_string($link, $id));
        $result = mysqli_query($link, "SELECT `id`, `img`, `name`, `likes`, `discription`, `price`  FROM `catalog` WHERE `id`=".mysqli_real_escape_string($link, $id));
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        mysqli_free_result($result);
        mysqli_close($link);
        return $row;
    }
    else {

        $items = array();
        if ($result = mysqli_query($link, "SELECT `id`, `img`, `name`, `likes`, `discription`, `price` FROM `catalog` ORDER BY likes")) {
            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                $items[] = $row;
            }
            mysqli_free_result($result);
        }
    }
    mysqli_close($link);
    return $items;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Обучение</title>
    <link rel="stylesheet" href="./css/style.css">

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

		<div class="slaider slaider2">
				<div class="slaider-text">
					Наше обучение - это встречи собственников бизнеса, предпринимателей с интересными людьми за чашкой кофе, которые в непринужденной обстановке рады общению на различные темы, обмену опытом, приобретению новых знаний, знакомых и друзей
				</div>
		</div>
        <div class="content">
            <?php if (!empty($_GET['id'])):?>
            <?php $item=catalog($_GET['id'])?>
                <h1><?php echo $h1.' - '.$item['name']; ?></h1>
                <img src="<?php echo $item['img']; ?>" alt="<?php echo $item['name']; ?>"/>
                <div><?php echo $item['likes'];?></div>
                <div><?php echo $item['discription'];?></div>
                <div>Стоимость - <?php echo $item['price'];?></div>
                <form action="/cart.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $item['id']; ?>" />
                    <p><input type="submit" value="Добавить в корзину"></p>
                </form>
            <?php else:?>
                <h1><?php echo $h1; ?></h1>
                <hr>
                <div class="catalog">
                    <?php foreach (catalog() as $item):?>
                        <div class="catalog-item">
                            <p><a href="/catalog.php?id=<?php echo $item['id']; ?>"><img src="<?php echo $item['img']; ?>" alt="<?php echo $item['name']; ?>"></a></p>
                            <br />
                            <a href="/catalog.php?id=<?php echo $item['id']; ?>"><?php echo $item['name']; ?></a>
                            <form action="/cart.php" method="post">
                                <input type="hidden" name="id" value="<?php echo $item['id']; ?>" />
                                <p><input type="submit" value="Добавить в корзину"></p>
                            </form>
                        </div>
                    <?php endforeach;?>
                    <br style="clear: both;" />
                </div>
            <?php endif;?>
            <a href="index.php">Назад на главную</a>
            <br /><br />
        </div>
        <?php include "./footer.php"; ?>
    </div>
</body>
</html>